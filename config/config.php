<?php

return array(

	//your site base url
	'base_url' => '../',

	//database connect credentials
	'db' => array(
		'host' => '134.0.10.34',
		'username' => 'andresin',
		'password' => '469ponar',
		'name' => 'ddbbusers',
		'table' => 'premiumlogin',
		),

	//recaptha API keys -- fill in if you want to use captha
	//(www.recaptcha.net)
	'captcha' => array(
		'public' => '6LehxPQSAAAAACNRAwNn07StsBiweWLe1s8DcDjJ',
		'private' => '6LehxPQSAAAAADdQSn22FzQ6W0A94q_dYpirhEEj',
		),
	
	//social login API --- fill in if you want to connect with social networks
	'social' => array(

		//(https://developers.facebook.com/)
		'facebook' => array(
			'id' => '299795343514199',
			'secret' => 'c63d034783c7b526b08b23f9aa91aa91',
			),
		//(https://console.developers.google.com/project)
		'google' => array(
			'id' => '1005912745178-avoicv5qfrue0rns1li07fqakef54inv.apps.googleusercontent.com',
			'secret' => 'lrpaj57jr4Krh9Em5wP2R5jE',
			'dev' => 'AIzaSyDe_YqUptBKuMPAswG9dG6RvdJrLuhUgis',
			),
		//(https://dev.twitter.com/)
		'twitter' => array(
			'id' => 'KxcYfLr7ZEUDFzbh5HbjX0iIZ',
			'secret' => 'JXzFY1tpsJNreZ91xN2TckUPDUmoUKo1uaKAjSwcBMM5D1sAMd',
			),
		),

	'avatar' => array(
		'upload_path' => 'uploads/',
		'maxsize' => '3000000',
		'resolution' => '400',
		),

	'validation' => array(
		'password_lenght' => 5,
		'use_captcha' => true,
		'email_activation' => true,
		),

	'email' => array(
		'use_PHPMailer' => true,
		'use_smtp' => true,
		'smtp_auth' => true,
		'smtp_secure' => 'ssl',
		'host' => 'smtp.gmail.com',
		'port' => 465,
		'username' => 'andres.lucas.upc', //email account
		'password' => '469ponar', 
		'from' => 'andres.lucas.upc@gmail.com',     //email account
		'from_name' => 'Andrés Lucas Enciso',// display name
		),
	);