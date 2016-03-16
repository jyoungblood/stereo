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
//   routing
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
	public function all($url, $callback){
		$GLOBALS['router']->map('GET|POST|PUT|DELETE', $url, $callback);
	}
	public function any($url, $callback){
		$GLOBALS['router']->map('GET|POST|PUT|DELETE', $url, $callback);
	}



	
// -------------------------------------------------------
//   cookies
// -------------------------------------------------------

	public function cookie_set($k,$v,$time = false){
		$expires = time() + 31536000000;
		if ($time){
			$expires = $time;
		}
		setcookie($k, $v, $expires, "/");
		return true;
	}
		
	public function cookie_get($k){
		$o = false;
		if (isset($_COOKIE[$k])){
			$o = $_COOKIE[$k];
		}
		return $o;
	}
	
	public function cookie_delete($k){
		if (isset($_COOKIE[$k])) {
	    unset($_COOKIE[$k]);
	    setcookie($k, '', time() - 3600, '/');
		}
		return true;
	}


	
// -------------------------------------------------------
//   http requests
// -------------------------------------------------------

  public function json_request($url, $data){
		$_o = $GLOBALS['app']->http_request($url, $data);
	  return json_decode($_o, true);
  }

  public function json_request_debug($url, $data){
		$_o = $GLOBALS['app']->http_request($url, $data);
	  return $_o;
  }

  public function api_request($url, $data){
	  if ($GLOBALS['app']->cookie_get('user_id')){
		  $data['user_id'] = $GLOBALS['app']->cookie_get('user_id');
		  $data['auth_token'] = $GLOBALS['app']->cookie_get('auth_token');
		  $data['admin_token'] = $GLOBALS['app']->cookie_get('admin_token');
		  $data['moderator_token'] = $GLOBALS['app']->cookie_get('moderator_token');
	  }
	  return $GLOBALS['app']->json_request($GLOBALS['api_root'] . $url, $data);
  }

  public function api_request_debug($url, $data){
	  if ($GLOBALS['app']->cookie_get('user_id')){
		  $data['user_id'] = $GLOBALS['app']->cookie_get('user_id');
		  $data['auth_token'] = $GLOBALS['app']->cookie_get('auth_token');
		  $data['admin_token'] = $GLOBALS['app']->cookie_get('admin_token');
		  $data['moderator_token'] = $GLOBALS['app']->cookie_get('moderator_token');
	  }
	  return $GLOBALS['app']->json_request_debug($GLOBALS['api_root'] . $url, $data);
  }

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
//   content rendering
// -------------------------------------------------------

	// render a template
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
			echo $rendered_template;
			echo $layout[1];			
		}

		return true;
	}

	// render data as json string
	function render_json($o){
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: *");
		header('content-type: application/json; charset=utf-8');
		header('Access-Control-Request-Method: GET, POST, PUT, DELETE');
		echo json_encode($o);
	}

	// render as error document
	public function render_error($p){
		if ($p['status'] == 404){
			header( $_SERVER["SERVER_PROTOCOL"] . ' 404 Not Found');
			$GLOBALS['app']->render_template(array(
				'template' => '404',
		    'title' => '404 not found',
		    'layout' => false,
				'data' => array()
			));			
		}
	}



	
// -------------------------------------------------------
//   utility
// -------------------------------------------------------

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



}
