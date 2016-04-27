<?php

require 'stereo/AltoRouter.php';
require 'stereo/Handlebars/Autoloader.php';

Handlebars\Autoloader::register();
use Handlebars\Handlebars;

$router = new AltoRouter();
$engine = new Handlebars(array(
  'loader' => new \Handlebars\Loader\FilesystemLoader($_SERVER["DOCUMENT_ROOT"] . '/pages/',
		array(
	    'extension' => 'hbs'
		)),
  'partials_loader' => new \Handlebars\Loader\FilesystemLoader($_SERVER["DOCUMENT_ROOT"] . '/pages/_partials/',
		array(
	    'extension' => 'hbs'
		))
));

require 'stereo/handlebars-helpers.php';





class StereoSystem {

// -------------------------------------------------------
//   STEREO ROUTING
// -------------------------------------------------------

	public function get($url, $callback){
		$GLOBALS['router']->map('GET', $url, $callback);
	}
	public function post($url, $callback){
		$GLOBALS['router']->map('POST', $url, $callback);
	}
	public function getpost($url, $callback){
		$GLOBALS['router']->map('GET|POST', $url, $callback);
	}
	public function patch($url, $callback){
		$GLOBALS['router']->map('PATCH', $url, $callback);
	}
	public function put($url, $callback){
		$GLOBALS['router']->map('PUT', $url, $callback);
	}
	public function delete($url, $callback){
		$GLOBALS['router']->map('DELETE', $url, $callback);
	}
	public function copy($url, $callback){
		$GLOBALS['router']->map('COPY', $url, $callback);
	}
	public function search($url, $callback){
		$GLOBALS['router']->map('SEARCH', $url, $callback);
	}
	public function head($url, $callback){
		$GLOBALS['router']->map('HEAD', $url, $callback);
	}
	public function options($url, $callback){
		$GLOBALS['router']->map('OPTIONS', $url, $callback);
	}
	public function all($url, $callback){
		$GLOBALS['router']->map('GET|POST|PUT|DELETE|PATCH|COPY|SEARCH|HEAD|OPTIONS', $url, $callback);
	}
	public function any($url, $callback){
		$GLOBALS['router']->map('GET|POST|PUT|DELETE|PATCH|COPY|SEARCH|HEAD|OPTIONS', $url, $callback);
	}



	
// -------------------------------------------------------
//   COOKIE HANDLERS
// -------------------------------------------------------

	// set a cookie
	public function cookie_set($k,$v,$time=false){
		$expires = time() + 31536000000;
		if ($time){
			$expires = $time;
		}
		setcookie($k, $v, $expires, "/");
		return true;
	}
	
	// retrieve a cookie
	public function cookie_get($k){
		$o = false;
		if (isset($_COOKIE[$k])){
			$o = $_COOKIE[$k];
		}
		return $o;
	}
	
	// delete a cookie
	public function cookie_delete($k){
		if (isset($_COOKIE[$k])) {
	    unset($_COOKIE[$k]);
	    setcookie($k, '', time() - 3600, '/');
		}
		return true;
	}


	
// -------------------------------------------------------
//   HTTP REQUESTS
// -------------------------------------------------------

	// make an http request to a given url, send data, and return php array (expects response in json format)
  public function json_request($url, $data){
		$_o = $GLOBALS['app']->http_request($url, $data);
	  return json_decode($_o, true);
  }

	// make a json request w/ debugging output
  public function json_request_debug($url, $data){
		$_o = $GLOBALS['app']->http_request($url, $data);
	  return $_o;
  }

	// make a json request to a given url, send hard-coded data (for STEREO app patterns)
  public function api_request($url, $data){
	  if ($GLOBALS['app']->cookie_get('user_id')){
		  $data['user_id'] = $GLOBALS['app']->cookie_get('user_id');
		  $data['auth_token'] = $GLOBALS['app']->cookie_get('auth_token');
		  $data['admin_token'] = $GLOBALS['app']->cookie_get('admin_token');
		  $data['moderator_token'] = $GLOBALS['app']->cookie_get('moderator_token');
	  }
	  return $GLOBALS['app']->json_request($GLOBALS['settings']['api_root'] . $url, $data);
  }

	// make an api request w/ debugging output
  public function api_request_debug($url, $data){
	  if ($GLOBALS['app']->cookie_get('user_id')){
		  $data['user_id'] = $GLOBALS['app']->cookie_get('user_id');
		  $data['auth_token'] = $GLOBALS['app']->cookie_get('auth_token');
		  $data['admin_token'] = $GLOBALS['app']->cookie_get('admin_token');
		  $data['moderator_token'] = $GLOBALS['app']->cookie_get('moderator_token');
	  }
	  return $GLOBALS['app']->json_request_debug($GLOBALS['settings']['api_root'] . $url, $data);
  }

	// make an http request to a given url, send data, return the raw result
	public function http_request($url, $data){
		$data_string = '';
		foreach($data as $key=>$value) { $data_string .= $key.'='.$value.'&'; }
		rtrim($data_string, '&');
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch,CURLOPT_URL, $url);
		curl_setopt($ch,CURLOPT_POST, count($data));
		curl_setopt($ch,CURLOPT_POSTFIELDS, $data_string);		
		$result = curl_exec($ch);
		curl_close($ch);
		return $result;
	}



	
// -------------------------------------------------------
//   RENDER CONTENT
// -------------------------------------------------------

	// render a template (STEREO app abstraction)
		// check for auth vars
		// make variables available to templates
	public function render_template($p){
	// if $p['layout'] is explicitly false render by itself
		// if $p['layout'], render w/ layout
		// otherwise render w/ base.hbs
		$data = $p['data'];
		if ($p['title']){
			$data['title'] = $p['title'];
		}else{
			$data['title'] = $GLOBALS['site_title'];
		}
		if ($GLOBALS['app']->cookie_get('user_id')){
		  $data['user_id'] = $GLOBALS['app']->cookie_get('user_id');
			if ($GLOBALS['app']->cookie_get('url_title')){
			  $data['profile_url'] = $GLOBALS['app']->cookie_get('url_title');				
			}
			if (password_verify($GLOBALS['site_code'].'-'.$GLOBALS['app']->cookie_get('user_id'), $GLOBALS['app']->cookie_get('auth_token'))){
				$data['auth'] = true;
			}
			if (password_verify($GLOBALS['site_code'], $GLOBALS['app']->cookie_get('admin_token'))){
				$data['is_admin'] = true;
			}
			if (password_verify($GLOBALS['site_code'].'-moderator', $GLOBALS['app']->cookie_get('moderator_token'))){
				$data['is_moderator'] = true;
			}
		}
		$data['locals'] = $GLOBALS['locals'];
		$data['year'] = date('Y');
		$data['site_title'] = $GLOBALS['site_title'];
		$data['site_code'] = $GLOBALS['site_code'];
		$data['site_url'] = $GLOBALS['site_url'];
		$rendered_template = $GLOBALS['engine']->render($p['template'], $data);
		if ($p['layout'] === false){
			echo $rendered_template;
		}else{
			if ($p['layout']){
				$layout_template = $p['layout'];
			}else{
				$layout_template = 'base';
			}
			$layout = explode('[[outlet]]', $GLOBALS['engine']->render('_layouts/' . $layout_template, $data));
			echo $layout[0];
			if (count($layout) > 1){
				echo $rendered_template;
			}
			echo $layout[1];
		}
		return true;
	}

	// render data as json string
	function render_json($o){
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: *");
		header('content-type: application/json; charset=utf-8');
		header('Access-Control-Request-Method: GET, POST, PUT, DELETE, PATCH, COPY, SEARCH, HEAD, OPTIONS');
		echo json_encode($o);
	}

	// render as error document (error template with 404 headers)
	public function render_error($p){
		if ($p['status'] == 404){
			header($_SERVER["SERVER_PROTOCOL"].' 404 Not Found');
			$GLOBALS['app']->render_template(array(
				'template' => '404',
		    'title' => '404 not found',
		    'layout' => false,
				'data' => array()
			));			
		}
	}



	
// -------------------------------------------------------
//   MISC UTILITY
// -------------------------------------------------------

	// return user's ip address
	public function client_ip(){
	  if (!empty($_SERVER['HTTP_CLIENT_IP'])){
	    $ip = $_SERVER['HTTP_CLIENT_IP'];
	  }elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
	    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
	  }else{
	    $ip = $_SERVER['REMOTE_ADDR'];
	  }
	  return $ip;
	}

	// connect to the database
	public function db_init(){
		$dbh = false;
		if ($GLOBALS['settings']['database']['host']){
			try {
			  $dbh = new PDO("mysql:host=".$GLOBALS['settings']['database']['host'].";dbname=".$GLOBALS['settings']['database']['name'], $GLOBALS['settings']['database']['user'], $GLOBALS['settings']['database']['password']);
				$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			}
			catch(PDOException $e) {
		    echo $e->getMessage();
			}
		}
		return $dbh;
	}

	// create db placeholders, sanitize data for query building
	public function db_where_placeholders($where){
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

	// send an email (with mailgun api, if available, otherwise use php mail)
	public function email_send($input){
		if ($GLOBALS['settings']['mailgun_api_key']){
			$message = array(
				'from' => $input['from'],
				'to' => $input['to'],
				'subject' => $input['subject']
			);
			if ($input['cc']){
				$message['cc'] = $input['cc'];
			}	
			if ($input['bcc']){
				$message['bcc'] = $input['bcc'];
			}	
			if ($input['html']){
				$message['html'] = $input['message'];
				$message['text'] = strip_tags($input['message']);
			}else{
				$message['text'] = $input['message'];
			}
			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, "https://api.mailgun.net/v3/".$GLOBALS['settings']['mailgun_api_domain']."/messages");
			curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
			curl_setopt($ch, CURLOPT_USERPWD, "api:".$GLOBALS['settings']['mailgun_api_key']."");
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
			curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
			curl_setopt($ch, CURLOPT_POST, true); 
			curl_setopt($ch, CURLOPT_POSTFIELDS, $message);
			$result = curl_exec($ch);
			curl_close($ch);
			return $result;
		}
		else{
			if ($input['html']){
				$headers .= "MIME-Version: 1.0\r\n" . "Content-type: text/html; charset=utf-8\r\n";
				$message = $input['message'];
			}else{
				$message = $input['message'];
			}
			if ($input['from']){
				$headers 	.= "From: " . $input['from'] . "\r\n";	
			}		
			if ($input['cc']){
				$headers 	.= "Cc: " . $input['cc'] . "\r\n";	
			}		
			if ($input['bcc']){
				$headers 	.= "Bcc: " . $input['bcc'] . "\r\n";	
			}		
			if ($input['reply_to']){
				$headers 	.= "Reply-To: " . $input['reply_to'] . "\r\n";	
			}
			if ($input['to']){
				mail($input['to'], $input['subject'], $message, $headers);
				return true;
			}else{
				return false;
			}
		}
	}

}















	
// -------------------------------------------------------
//   MYSQL CRUD functionality
// -------------------------------------------------------

// sanitize parameters and retrieve data from mysql, returning array w/ total
function db_find($table, $where, $options = false){
	$qr = false;
	$wd = $GLOBALS['app']->db_where_placeholders($where);
	try {
		$query = "SELECT * FROM $table WHERE " . $wd['where'];
		if ($options['raw']){
			$query = $wd['where'];
		}
		$a = $GLOBALS['database']->prepare($query);
		$a->execute($wd['data']);
		$a->setFetchMode(PDO::FETCH_ASSOC);
	}
	catch(PDOException $e) {
	  echo $e->getMessage();
	}
	if ($options['cache'] && function_exists("apc_store")){
		$cache_key = base64_encode($table.$where);
		if ($qr = apc_fetch($cache_key)){
		}else{
			$_options = $options;
			$_options['cache'] = false;
			$qr = db_find($table, $where, $options);
			$cache_length = 60;
			if ($options['cache_length']){
				$cache_length = $options['cache_length'];
			}
			apc_store($cache_key, $qr, $cache_length);
		}
	}else{
		$i = 0;
		while($ad = $a->fetch()){
			$qr['data'][] = $ad;
			$i++;
		}
		if ($numrows){
			$qr['total'] = $i;
		}		
	}
	return $qr;
}


// sanitize parameters and insert array of data into mysql, returning the id of the record created
function db_insert($table, $input){
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
		$a = $GLOBALS['database']->prepare("INSERT INTO $table ($columns) value ($placeholders)");
		$a->execute($data);
	}
	catch(PDOException $e) {
	  echo $e->getMessage();
	}
	$o = $GLOBALS['database']->lastInsertId();
	return $o;
}


// sanitize parameters and update a mysql record
function db_update($table, $input, $where){
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
	$wd = $GLOBALS['app']->db_where_placeholders($where);
	foreach ($wd['data'] as $dw){
		$data[] = $dw;
	}
	try {
		$a = $GLOBALS['database']->prepare("UPDATE $table SET $query WHERE " . $wd['where']);
		$a->execute($data);
	}
	catch(PDOException $e) {
	  echo $e->getMessage();
	}
	return true;
}


// sanitize parameters and delete a given mysql record
function db_delete($table, $where){
	$wd = $GLOBALS['app']->db_where_placeholders($where);
	try {
		$a = $GLOBALS['database']->prepare("DELETE FROM $table WHERE " . $wd['where']);
		$a->execute($wd['data']);
	}
	catch(PDOException $e) {
	  echo $e->getMessage();
	}
	return true;
}



// -------------------------------------------------------
//   ADAPTERS FOR LEGACY SUPPORT (STEREO < 1.0)
// -------------------------------------------------------

function db_get($table,$where,$numrows=false){
	$a = db_find($table,$where);
	if ($a['data']){
		$o['r'] = $a['data'];
	}else{
		$o = false;
	}
	if ($numrows){
		$o['total'] = $a['total'];
	}
	return $o;
}

function db_get_raw($table,$where,$numrows=false){
	$a = db_find($table,$where,array(
		'raw' => true
	));
	if ($a['data']){
		$o['r'] = $a['data'];
	}else{
		$o = false;
	}
	if ($numrows){
		$o['total'] = $a['total'];
	}
	return $o;
}

function db_get_c($a,$b,$c=false){
	$a = db_find($a,$b,array(
		'cache' => true
	));
	if ($a['data']){
		$o['r'] = $a['data'];
	}else{
		$o = false;
	}
	if ($c){
		$o['total'] = $a['total'];
	}
	return $o;
}




