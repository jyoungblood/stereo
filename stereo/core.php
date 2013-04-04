<?

/* ------------------------------ DEFAULTS ------------------------------ */


require("config-db.php");
require("config.php");
require("mustache.php");
require("control_server/_global.php");
require("core_functions.php");

date_default_timezone_set($cfg['vr']['timezone']);
error_reporting(E_ALL ^ E_NOTICE);




class stereo{

		public function __construct(){

			$cfg = $GLOBALS['cfg'];
			
			if ($GLOBALS['auth']){
				$this->user_id = $GLOBALS['user_id'];
				$this->auth = true;
				$this->is_admin = $GLOBALS['is_admin'];
			}else{
				$this->auth = false;
			}
			
			$this->img = $cfg['media']['img'];
			$this->css = $cfg['media']['css'];
			$this->js = $cfg['media']['js'];
			$this->etc = $cfg['media']['etc'];
			$this->cdn = $cfg['media']['cdn'];

			$this->sitetitle = $cfg['vr']['site_title'];
			$this->pagetitle = $cfg['vr']['site_title'];
			
			$this->siteurl = $cfg['vr']['siteurl'];
			$this->year = date("Y");
	
			if ($cfg['router'][$GLOBALS['q']]['control_server']){
				$this->control_server = $cfg['router'][$GLOBALS['q']]['control_server']; 			
			}	
			if ($cfg['router'][$GLOBALS['q']]['control_client']){
				$this->control_client = $cfg['router'][$GLOBALS['q']]['control_client']; 			
			}

		}
		
}
