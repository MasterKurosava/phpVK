<?php
session_start();
 
$clientId     = '8014375';
$clientSecret = 'Ay4jmEjQ3D8SHNmVtdfv';
$redirectUri  = 'http://phphw/index.php'; 
 
$params = array(
	'client_id'     => $clientId,
	'redirect_uri'  => $redirectUri,
	'response_type' => 'code',
  'display'       => 'page',
	'v'             => '5.126',

);
echo '<a href="http://oauth.vk.com/authorize?' . http_build_query( $params ) . '">Авторизация через ВКонтакте</a>';


?>