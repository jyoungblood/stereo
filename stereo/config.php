<?


/* all of these will be set in admin, this file is generated every time admin user saves it...data stored in db */


/* fw defaults */
$cfg['router']['404']['control_server'] = "err404";
$cfg['router']['404']['tp'] = "_single/err404";
$cfg['router']['404']['single'] = false;

$cfg['router']['ajax']['control_server'] = "ajax";
$cfg['router']['ajax']['tp'] = "_single/ajax";
$cfg['router']['ajax']['single'] = true;

$cfg['router']['home']['control_server'] = "home";
$cfg['router']['home']['control_client'] = "home";
$cfg['router']['home']['tp'] = "home";
$cfg['router']['home']['single'] = false;

$cfg['router']['logout']['control_server'] = "home";
$cfg['router']['logout']['control_client'] = "home";
$cfg['router']['logout']['tp'] = "home";
$cfg['router']['logout']['single'] = false;

$cfg['router']['login']['control_server'] = "home";
$cfg['router']['login']['control_client'] = "home";
$cfg['router']['login']['tp'] = "home";
$cfg['router']['login']['single'] = false;


$cfg['media']['img'] = "/media/img";
$cfg['media']['css'] = "/media/css";
$cfg['media']['scss'] = "/media/scss";
$cfg['media']['less'] = "/media/less";
$cfg['media']['js'] = "/control_client";
$cfg['media']['coffee'] = "/media/coffee";
$cfg['media']['etc'] = "/media/etc";
$cfg['media']['cdn'] = '/media/cdn';







/* user defaults */

$cfg['vr']['site_title'] = ''; // default site title
$cfg['vr']['siteurl'] = ''; // path to url root (ex: http://partyphysics.com )


// no trailing slashes on destination folders
$cfg['vr']['serverpath'] = ''; // path to web root on server. helpful if you do uploads, s3 transfers, or other deeper server-side stuff.
$cfg['vr']['upload_path'] = '';


// only if you're using cookies (required for authentication, dur)
$cfg['vr']['cookiedomain'] = ''; // .partyphysics.com
$cfg['vr']['cookieprefix'] = ''; // $_COOKIE['cookie_prefix']['actual_cookie_handle']

// misc default globals i use frequently
$cfg['contact']['admin_email'] = '';
$cfg['contact']['support_email'] = '';
$cfg['vr']['mkdomain'] = ''; // marketing domain name (ex: www.partyphysics.com), used for things like paypal receipts or whatever
$cfg['vr']['timezone'] = 'America/Chicago';









/* curstom routing */

/*
	$cfg['router']['overview'] = array(
		'control_server' => 'overview',
		'control_client' => 'overview',
		'tp' => 'overview',
		'single' => false
	);
*/



?>