<?


/* ----- COOKIES ----- */


function cookie_set($k,$v,$time = false){
	$expires = time() + 31556926;
	if ($time){
		$expires = $time;
	}
	setcookie($GLOBALS['cfg']['vr']['cookieprefix']."[".$k."]", $v, $expires, "/", $GLOBALS['cfg']['vr']['cookiedomain']);
	return true;
}

function cookie_delete($k){
	$expires = time() + 31556926;
	if ($time){
		$expires = $time;
	}
	setcookie($GLOBALS['cfg']['vr']['cookieprefix']."[".$k."]", "", $expires, "/", $GLOBALS['cfg']['vr']['cookiedomain']);
	return true;
}

function cookie_get($k){
	$o = false;
	if (isset($_COOKIE[$GLOBALS['cfg']['vr']['cookieprefix']][$k])){
		$o = $_COOKIE[$GLOBALS['cfg']['vr']['cookieprefix']][$k];
	}
	return $o;
}







/* ----- AUTHENTICATION ----- */

function auth_register($arg){
	$o = array(
		'email' => $arg['email'],
		'pw' => auth_password_set($arg['pw']),
		'pwr' => base64_encode($arg['pw']),
		'hash' => hash_generate(),
		'username' => $arg['username'],
		'group_id' => $arg['group_id'],
	);
	db_insert("users",$o);
}


function auth_login($un, $pw){
	$o = false;
	$where = "username='".$un."'";
	if (strstr($un,'@')){
		$where = "email='".$un."'";
	}
	$a = db_get("auth_user",$where);
	if (!$a){
		$o['error'] = 'email';
		$o['success'] = false;
	}else{
		$password = auth_password_set($_POST['password']);
		if (!auth_password_check($pw, $a['r'][0]['password'])){
			$o['error'] = 'password';
			$o['success'] = false;
		}else{
			$o['success'] = true;
			$o['user_id'] = $a['r'][0]['id'];
			cookie_set('pwe', $password);
			cookie_set('id', $a['r'][0]['id']);
//			cookie_set('group_id', $a['r'][0]['group_id']);
		}
	}
	return $o;
}

function auth_logout(){
	cookie_delete('pwe');
	cookie_delete('id');
//	cookie_delete('group_id');
	return true;
}


function auth_login_verify(){
	$o = false;
	if (cookie_get('pwe') && cookie_get('id')){
		$o = true;
		$GLOBALS['auth'] = true;
		$GLOBALS['user_id'] = cookie_get('id');
		$GLOBALS['pwe'] = cookie_get('pwe');
//		$GLOBALS['group_id'] = cookie_get('group_id');
/*
	if ($GLOBALS['group_id'] == 1){
		$GLOBALS[is_admin'] = true;
	}
*/
	}
	return $o;
}


function auth_password_set($pw) {
	$o = false;
	if ($pw){
	  $salt = substr(sha1(num_random().num_random()), 0, 5);
	  $hash = sha1($salt.$pw);
	  $o = 'sha1$' . $salt . '$' . $hash;		
	}
  return $o;
}

function auth_password_check($raw_password, $enc_password) {       
	$o = false;
  $pieces = explode('$', $enc_password);
  $salt = $pieces[1];
  $hash = $pieces[2];
  if ($hash == sha1($salt.$raw_password)){
	  $o = true;
  }
  return $o;
}















/* ----- DATABASE ----- */

function db_where_placeholders($where){

	$d = preg_match_all('/\'([^\"]*?)\'/', $where, $o);

	foreach ($o[0] as $ph){
		$data[] = str_replace("'","",$ph);
	}

	$o = array(
		'where' => preg_replace('/\'([^\"]*?)\'/', '?', $where),
		'data' => $data,
	);
	
	return $o;
}




function db_get($table,$where,$numrows = false){

	$qr = false;
	$wd = db_where_placeholders($where);

	try {
		$a = $GLOBALS['dbh']->prepare("SELECT * FROM $table WHERE " . $wd['where']);
		$a->execute($wd['data']);
		$a->setFetchMode(PDO::FETCH_ASSOC);
	}
	catch(PDOException $e) {
	  echo $e->getMessage();
	}


		$i = 0;
		while($ad = $a->fetch()){
			$qr['r'][] = $ad;
			$i++;
		}

		if ($numrows){
			$qr['total'] = $i;
		}

		return $qr;
}





function db_get_c($a,$b,$c=false){

	if (function_exists("apc_store")){

		$key = base64_encode($a.$b);

		if ($o = apc_fetch($key)){

		}else{

			$o = db_get($a,$b,$c);
			apc_store($key, $o, 60);

		}	

	}else{

		$o = db_get($a,$b,$c);		

	}

	return $o;

}








function db_insert($table,$input){

	$columns = '';	
	$placeholders = '';	
	$total = count($input);
	$i = 1;

	foreach ($input as $key => $val){
		$columns .= $key;
		$placeholders .= ':' . $key;

		if ($val != NULL){
			$data[$key] = $val;
		}else{
			$data[$key] = NULL;
		}
		if ($total != $i){
			$columns .= ", ";
			$placeholders .= ", ";
		}
		$i++;
	}


	try {
		$a = $GLOBALS['dbh']->prepare("INSERT INTO $table ($columns) value ($placeholders)");
		$a->execute($data);
	}
	catch(PDOException $e) {
	  echo $e->getMessage();
	}


	$o = $GLOBALS['dbh']->lastInsertId();

	return $o;
}




function db_update($table,$input, $where){

	$query = '';
	$total = count($input);
	$i = 1;

	foreach ($input as $key => $val){
		$query .= $key . ' = ?';

		if ($val != NULL){
			$data[] = $val;
		}else{
			$data[] = NULL;
		}
		if ($total != $i){
			$query .= ", ";
		}
		$i++;
	}
	
	$wd = db_where_placeholders($where);

	foreach ($wd['data'] as $dw){
		$data[] = $dw;
	}

	try {
		$a = $GLOBALS['dbh']->prepare("UPDATE $table SET $query WHERE " . $wd['where']);
		$a->execute($data);
	}
	catch(PDOException $e) {
	  echo $e->getMessage();
	}

	return true;

}



function db_delete($table, $where){

	$wd = db_where_placeholders($where);

	try {
		$a = $GLOBALS['dbh']->prepare("DELETE FROM $table WHERE " . $wd['where']);
		$a->execute($wd['data']);
	}
	catch(PDOException $e) {
	  echo $e->getMessage();
	}

	return true;

}











/* ----- FW ENGINE ----- */

function file_contents_include($filename) {
	if (is_file($filename)) {
	  ob_start();
	  include $filename;
	  $contents = ob_get_contents();
	  ob_end_clean();
	  return $contents;
	}
	return false;
}



function url_parse(){

	$nu = false;

	if (isset($_GET['p'])){
		$p = $_GET['p'];

		if (substr($p,0,1) == '/'){
			$p = substr($_GET['p'],1);
		}
		$news = explode("/",$p);
	
		$q = "q";
	
		foreach ($news as $nws){
			$nu[$q] = strtolower(str_replace("/","",$nws));
			$q++;
		}

	}


	return $nu;
}




function stereo_db_init(){
	$dbh = false;
	if ($GLOBALS['cfg']['dx']['h']){
		try {
		  $dbh = new PDO("mysql:host=".$GLOBALS['cfg']['dx']['h'].";dbname=".$GLOBALS['cfg']['dx']['d'], $GLOBALS['cfg']['dx']['u'], $GLOBALS['cfg']['dx']['p']);
			$dbh->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
		}
		catch(PDOException $e) {
		    echo $e->getMessage();
		}
	}
	return $dbh;
}




function stereo_build($q){
	if (!$q || $q == ''){
		$q = 'home';
	}

	$GLOBALS['q'] = $q;

	// get the config vars
	if (isset($GLOBALS['cfg']['router'][$q]['control_server'])){
		$cq = $GLOBALS['cfg']['router'][$q]['control_server'];
	}
	if (isset($GLOBALS['cfg']['router'][$q]['tp'])){
		$tq = $GLOBALS['cfg']['router'][$q]['tp'];
	}
	if (isset($GLOBALS['cfg']['router'][$q]['single'])){
		$sq = $GLOBALS['cfg']['router'][$q]['single'];
	}

	// 404 handling
	if (!is_file("tp/".$GLOBALS['cfg']['router'][$q]['tp'].".php") || (isset($_GET['p']) && $_GET['p'] == "404")){
		$cq = $GLOBALS['cfg']['router']['404']['control_server'];
		$tq = $GLOBALS['cfg']['router']['404']['tp'];
		$sq = $GLOBALS['cfg']['router']['404']['single'];

	//	fixit send some legit 404s
	//	header("HTTP/1.0 404 Not Found");
	//	header("Status: 404 Not Found");
	}


	if ($cq){
		require("control_server/$cq.php");
		$control = new $cq;
	}

	$template = '';
	
	if (!$sq){
		$tpl = explode("{{template_content}}",file_contents_include("tp/_base.php"));	
		$template .= $tpl[0];
	}
	
	if ($tq){
		$template .= file_contents_include("tp/$tq.php");
	}
	
	if (!$sq){
		$template .= $tpl[1];
	}
	
	$gl = new mustache;
	echo $gl->render($template, $control);

	return true;
}















/* ----- STRING (text) ----- */


function txt_url_encode($url){
	$o = str_replace("(","%28",$url);
	$o = str_replace(")","%29",$o);
	$o = str_replace(" ","_",$o);
	return $o;
}

function txt_url_decode($url){
	$o = str_replace("%28","(",$url);
	$o = str_replace("%29",")",$o);
	$o = str_replace("_"," ",$o);
	return $o;
}


function txt_url_validate($st){
	if ($st != '' && $st != 'null'){
		if (!ereg('http://',$st)){
			$nurl = "http://" . $st;
		}else{
			$nurl = $st;
		}
		return mysql_real_escape_string($nurl);	
	}
	else{
		return '';
	}
}


// returns a url-safe string of text
function txt_url_title($title){
	$o = strtolower(urlencode(str_replace(" ","-",$title)));
	return $o;
}

/*
// regex for only letters numbers and something i think that's it...safe url titles
function flickr_urltitle($str){
	return strtolower(ereg_replace("[^A-Za-z0-9-]", "", str_replace(" ","-",$str)));
}
*/


// uhhh i don't know if we need this
function txt_desanitize($input){
	return htmlspecialchars_decode(str_replace('\n',"\n",str_replace('\r',"\r",$input)), ENT_QUOTES);
}



function txt_render($input){ // fixit need one that encodes html from a textarea

	return stripslashes(
		str_replace("[","<",
		str_replace("]",">",
			nl2br(
					str_replace('\n',"\n",
					str_replace('\r',"\r",$input
			))))));
}


function txt_render_input($input){
	return stripslashes(str_replace('\n',"\n",str_replace('\r',"\r",$input)));
}


function txt_truncate($string, $length = 55, $ellipsis = false){
	if (strlen($string) > $length){
    $string = wordwrap($string, $length);
    $string = substr($string, 0, strpos($string, "\n"));
    if ($ellipsis){
    	$string = $string . '...';
    }
	}
	return $string;
}


function txt_br2nl($string){
	return preg_replace('#<br\s*?/?>#i', "\n", $string);
}


function txt_implode_alt($arr){
	$i = 0;
	foreach ($arr as $t){
		if ($i != 0){
			$implosion .= ',';
		}
		if ($t !=''){
			$implosion .= $t;
		}
		$i++;
	}
	$implosion = str_replace(',,','',$implosion);
	if (substr($implosion, -1) == ','){
		$implosion = substr($implosion,0,-1);
	}
	return $implosion;
}









/* ----- STRING (int) ----- */

	
function num_random($length = 5) {
	$o = "";
	for ($i=0; $i < $length; $i++) { 
	    $o .= chr(rand(97,122));
	}
	return $o;
}


function num_money($number, $fractional=false) { 
  if ($fractional) { 
      $number = sprintf('%.2f', $number); 
  } 
  while (true) { 
      $replaced = preg_replace('/(-?\d+)(\d\d\d)/', '$1,$2', $number); 
      if ($replaced != $number) { 
          $number = $replaced; 
      } else { 
          break; 
      } 
  } 
  return $number; 
}


function num_timestamp_date($date){
// expects 12-05-2010
// returns unix timestamp
	if ($date != ''){
		return strtotime(str_replace("-","/",$date));
	}else{
		return '';
	}
}


function num_odd($number){
	if ($odd = $number % 2){
		return true;
	}else{
		return false;
	}
}



function num_date($timestamp){
	// turn timestamp into 06-03-2011
	if ($timestamp){
		return date("m-d-Y",$timestamp);
	}else{
		return false;
	}
}

function num_time($timestamp){
	// turn timestamp into 4:20pm
	if ($timestamp){
		return date("g:ia",$timestamp);
	}else{
		return false;
	}
}

function num_date_time($timestamp){
	// turn timestamp into 06-03-2011 @ 4:20pm
	if ($timestamp){
		return date("m.d.Y @ g:ia",$timestamp);
	}else{
		return false;
	}
}



















/* ----- UTILITIES ----- */



function http_request($data, $url, $options = false){
	// by default, create a json-encoded post request to a given url and returns the results

	$payload = json_encode($data);

	// nvp, optionally (what's up, paypal)
	if ($options['nvp']){
		$payload = '';
		$i = 0;
		foreach ($data as $k=>$v){
			if ($i > 0){
				$payload .= '&';
			}			
			$payload .= $k .'='. urlencode($v);
			$i++;
		}
	}
	


	$ch = curl_init();
				curl_setopt($ch, CURLOPT_URL, $url);
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

				curl_setopt($ch, CURLOPT_POST, true);
				curl_setopt($ch, CURLOPT_POSTFIELDS, urlencode($payload));	

				 
	if ($options['curl']){
		foreach ($options['curl'] as $k=>$v){
			curl_setopt($ch, $k, $v);
		}		
	}				 
	
	$result = curl_exec($ch);
	curl_close ($ch);

	if ($options['unserialize_response']){
		$result = unserialize($result);
	}


	return $result;
}

/*
	// override defaults
	$options = array(
		'nvp' => true,
		'unserialize_response' => true,
		'curl' => array(
			CURLOPT_VERBOSE => true
		)
	);
*/




function hash_generate($length = 40){
	// fixit option to make it unique (like, we tell it a db table/column and that we want no duplicates)

  $al = "";
  $possible = "0123456789abcdfghjkmnpqrstvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";     
  $i = 0; 
  while ($i < $length) { 
    $char = substr($possible, mt_rand(0, strlen($possible)-1), 1);        
    if (!strstr($al, $char)) { 
      $al .= $char;
      $i++;
    }
  }
  return $al;
}



function client_ip(){
	if ( isset($_SERVER["REMOTE_ADDR"])){
		$ip = $_SERVER["REMOTE_ADDR"]; 
	} 
	elseif ( isset($_SERVER["HTTP_X_FORWARDED_FOR"])){ 
		$ip = $_SERVER["HTTP_X_FORWARDED_FOR"];
	} 
	elseif ( isset($_SERVER["HTTP_CLIENT_IP"])){ 
		$ip = $_SERVER["HTTP_CLIENT_IP"]; 
	} 
	return $ip;
}










function email_send($input){

	if ($input['tp']){
		
		$GLOBALS['html_email_input'] = $input;
	
		class htmlemail extends glbl {
			public function email_content(){
				return $GLOBALS['html_email_input'];
			}
		}
	
		$control = new htmlemail;
	
		$template = "{{#email_content}}" . file_contents_include($input['tp']) . "{{/email_content}}";
	
		$message = $GLOBALS['gl']->render($template,$control);
	}else{
		$message = $input['message'];
	}

	if ($input['preview']){
		echo $message;
	}else{
	
		$headers = '';

		if ($input['html']){
			$headers  .= 'MIME-Version: 1.0' . "\r\n"
								. 'Content-type: text/html; charset=utf-8' . "\r\n";
		}

		if ($input['from']){
			$headers 	.=	'From: ' . $input['from'] . "\r\n";	
		}		
		if ($input['cc']){
			$headers 	.=	'Cc: ' . $input['cc'] . "\r\n";	
		}		
		if ($input['bcc']){
			$headers 	.=	'Bcc: ' . $input['bcc'] . "\r\n";	
		}		
		if ($input['reply_to']){
			$headers 	.=	'Reply-To: ' . $input['reply_to'] . "\r\n";	
		}		
	
		if ($input['to']){
			mail($input['to'], $input['subject'], $message, $headers);	
		}
	}

	if ($input['tp']){
		unset($GLOBALS['html_email_input']);
	}
}


/*

example usage:

	email_send(array(
		'to' => 'Johnny Why <jonathan.youngblood@gmail.com>',
		'from' => 'First Last <clickbuild-notifications@purhost.net>',
		'subject' => '[Clickbuild Tasks] Re: new thing from clickbuild',
		'reply_to' => 'clickbuild-123456789@purhost.net',
		'html' => true,
		'tp' => 'tp/_single/email.php',
	));
*/























/* ----- PAGINATION ----- */

function data_paginate_offset($r,$limit){
	if ($r == 0 || $r == 1 || $r == ''){
		$o['offset'] = 0;
		$o['current'] = 1;
	}else{
		$o['offset'] = $limit * ($r - 1);
		$o['current'] = $r;
	}
	return $o;
}



function data_paginate($url_path,$current_page, $total_results, $limit){
	$total_pages = ceil(($total_results / $limit));
	$paginate = false;

	if ($total_pages >= $current_page && $total_pages > 1){
		$prev = $current_page - 1;
		$next = $current_page + 1;
		if ($prev <= 0){
			$p_prev = false;
		}else{
			$p_prev = $url_path . $prev . "/";
		}
		if ($next > $total_pages){
			$p_next = false;
		}else{
			$p_next = $url_path . $next . "/";
		}
		$paginate = array(
			"prev" => $p_prev,
			"next" => $p_next,
			"current" => $current_page,
			"total" => $total_pages
		);
	}
	return $paginate;
}














/* ------------------- NEW SHIT TO ADD WHENEVER ------------------- */



/*
	
// fixit add logging functions
		$fh = fopen("paypal.log", 'a') or die("can't open file");
			$log = $res."\n\n\n\n";
		fwrite($fh, $log);
		fclose($fh);

*/



/* ----- IMAGE WRANGLIN' ----- */

// fixit import from darkwave/tldr/wp/clickbuild

// working with video/images (stuff in darkwave) (phmagick dependencies)
	// get video id
	// save remote file
	// image generate preview
	// std date format

	// check url title

/*

fixit i'd also like to have some common abstractions for upload image resizing (see oklahorse, LO, lips, whatever)


function thumbCrop($path,$is,$resize,$tmp_upload,$filename,$cdn_upload){
	$pm1 = new phMagick($tmp_upload . $filename, $cdn_upload .$path. $filename);
	if ($is[0] > $is[1]){
		$rs['w'] = 0;
		$rs['h'] = $resize;
	}else{
		$rs['w'] = $resize;
		$rs['h'] = 0;
	}
	$pm1->resize($rs['w'],$rs['h']);
	$pm1->crop($resize,$resize,0,0,'NorthWest');
	$pm1->convert();
}


function youtubeCrop($path,$is,$resize,$tmp_upload,$filename,$cdn_upload){
	$pm1 = new phMagick($tmp_upload . $filename, $cdn_upload .$path. $filename);
		$rs['w'] = $resize;
		$rs['h'] = 0;
	$pm1->crop(270,270,0,0,'center');
	$pm1->resize($rs['w'],$rs['h']);
	$pm1->convert();
}



function downloadRemoteFile($url,$dir,$file_name = NULL){ 
    if($file_name == NULL){ $file_name = basename($url);} 
    $url_stuff = parse_url($url); 
    $port = isset($url_stuff['port']) ? $url_stuff['port'] : 80; 

    $fp = fsockopen($url_stuff['host'], $port); 
    if(!$fp){ return false;} 

    $query  = 'GET ' . $url_stuff['path'] . " HTTP/1.0\n"; 
    $query .= 'Host: ' . $url_stuff['host']; 
    $query .= "\n\n"; 

    fwrite($fp, $query); 

    while ($tmp = fread($fp, 8192))   { 
        $buffer .= $tmp; 
    } 

    preg_match('/Content-Length: ([0-9]+)/', $buffer, $parts); 
    $file_binary = substr($buffer, - $parts[1]); 
    if($file_name == NULL){ 
        $temp = explode(".",$url); 
        $file_name = $temp[count($temp)-1]; 
    } 
    $file_open = fopen($dir . "/" . $file_name,'w'); 
    if(!$file_open){ return false;} 
    fwrite($file_open,$file_binary); 
    fclose($file_open); 
    return true; 
}


// fixit make a thumbnail from a vimeo or youtube clip and save it to the cdn
function make_video_thumbnail($vid_url){

include ('media/etc/phmagick/phmagick.php');

	if(preg_match("/youtube.com/i",$vid_url)){
		
		$url = "http://img.youtube.com/vi/" . get_video_id($vid_url) . "/0.jpg";		
	}else{

		$vurl = "http://vimeo.com/api/v2/video/".get_video_id($vid_url).".php";
		$ch = curl_init($vurl);
		curl_setopt($ch, CURLOPT_URL, $vurl);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

		// grab URL and pass it to the browser
		$data = curl_exec($ch);
		curl_close($ch);
		$finaldata = unserialize($data);

		$url = $finaldata[0]['thumbnail_large'];

	}

	$filename = 'v_'.get_video_id($vid_url).'.jpg';
	downloadRemoteFile($url,'media/etc/upload',$filename);

	$is = getimagesize('media/etc/upload/' . $filename);


	if(preg_match("/youtube.com/i",$vid_url)){
		youtubeCrop('t2/',$is,140,'media/etc/upload/',$filename,'media/cdn/');
	}
	else{
		thumbCrop('t2/',$is,140,'media/etc/upload/',$filename,'media/cdn/');
	}		
	unlink('media/etc/upload/' . $filename);

	// return full path (janky but whatever) (only for t2)

	$thumbPath = '/media/cdn/t2/'.$filename;

	return $thumbPath;
}
*/




















/* ----- 3RD PARTY INTEGRATION ----- */


/* 

function twitter_status($twitter_id,$nooftweets) {	
	$c = curl_init();
	curl_setopt($c, CURLOPT_URL, "https://api.twitter.com/1/statuses/user_timeline.xml?screen_name=$twitter_id&include_rts=true&count=$nooftweets");
	curl_setopt($c, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($c, CURLOPT_CONNECTTIMEOUT, 3);
	curl_setopt($c, CURLOPT_TIMEOUT, 5);
	$response = curl_exec($c);
	$responseInfo = curl_getinfo($c);
	curl_close($c);
	if (intval($responseInfo['http_code']) == 200) {
		if (class_exists('SimpleXMLElement')) {
			$xml = new SimpleXMLElement($response);
			return $xml;
		} else {
			return $response;
		}
	} else {
		return false;
	}
}

function processLinks($text) {
	$text = utf8_decode( $text );
	$text = preg_replace('@(https?://([-\w\.]+)+(d+)?(/([\w/_\.]*(\?\S+)?)?)?)@', '[link="$1"]$1[/link]',  $text );
	$text = preg_replace("#(^|[\n ])@([A-Za-z0-9_]*)#ise", "'\\1[link=\"http://www.twitter.com/\\2\"]@\\2[/link]'", $text);  
	$text = preg_replace("#(^|[\n ])\#([^ \"\t\n\r<]*)#ise", "'\\1[link=\"http://hashtags.org/search?query=\\2\"]#\\2[/link]'", $text);
	return $text;
}

function get_tweets($twitter_id,$uid) {

	$nooftweets=200;

   	if ( $twitter_xml = twitter_status($twitter_id,$nooftweets) ) {
		foreach ($twitter_xml->status as $key => $status) {
		
			$dateunix = strtotime($status->created_at);

			$a = db_get("fl_twitter","ctype='tweet' AND date_added='$dateunix' AND uid='$uid'");
			if (!$a){
				$input = array(
					"uid" => $uid,
					"date_added" => $dateunix,
					"descr" => sanitize(processLinks($status->text)),
					"ctype" => 'tweet'
				);				
				db_put("fl_twitter",$input);
			}

    		}
			$result.=$afterTweetsHtml;

    } 
	else {

    }	

}


		get_tweets('theflaminglips',8);

*/


/*


function mailchimp_subscribe($mc_api_email,$mc_api_firstname,$mc_api_lastname, $mc_api_comments = false){
	
		http_request(array(
		  'email_address'=>$mc_api_email,
		  'apikey'=>'APIKEY',
		  'merge_vars' => 
		  	array(
					'FNAME'=>$mc_api_firstname, 
					'LNAME'=>$mc_api_lastname,
					'COMMENTS' => $mc_api_comments,
					'GROUPINGS' => array(
						array(
							'id' => 6,
							'groups' => ''
						)
					),
				),
		  'id' => 'a8a98d05da',
		  'double_optin' => false,
		  'replace_interests' => false,
		  'email_type' => 'html',
		  'update_existing' => true,
		), 'http://us1.api.mailchimp.com/1.3/?method=listSubscribe', $options);

}




// this is potentially useful, get whatever libs JCH is using?

function tweet_send($twitter_account,$message){


// fixit later enable
	$tmhOAuth = new tmhOAuth(array(
	  'consumer_key'    => $ckey,
	  'consumer_secret' => $csecret,
	  'user_token'      => $usrtoken,
	  'user_secret'     => $usrsecret,
	));
	
	$code = $tmhOAuth->request('POST', $tmhOAuth->url('1/statuses/update'), array(
	  'status' => $msg
	));

}


*/


