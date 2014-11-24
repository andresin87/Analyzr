<?php
session_start();

define("PLSPATH", __DIR__."/../");
require PLSPATH.'classes/Config.php';
require PLSPATH.'classes/Database.php';
require PLSPATH.'classes/Validate.php';
require PLSPATH.'classes/Authentication.php';
require PLSPATH.'classes/User.php';
require PLSPATH.'classes/Session.php';
require PLSPATH.'classes/Error.php';
require PLSPATH.'classes/Email.php';
require PLSPATH.'classes/Cookie.php';
require PLSPATH.'classes/Avatar.php';
require PLSPATH.'classes/Analyzr.php';

Config::LoadFile("config/config.php");
Config::LoadFile("config/lang.php");
$db = new Database();
$db->Connect();

if(Config::Get("validation.use_captcha"))
	require PLSPATH.'classes/vendor/captcha/recaptchalib.php';

if(isset($_COOKIE["rememberme"]))
{
	if(!Authentication::Login(Cookie::Get(), true))
	{
		Cookie::Clear();
	}
}

/*GLOBAL Variables*/
if(isset($_GET['page']))
	$global_page = $_GET['page'];
//	echo('<script> console.log("page: '.$global_page.'");</script>');