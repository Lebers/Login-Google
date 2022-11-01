<?php

//start session on web page
session_start();

//config.php

//Include Google Client Library for PHP autoload file
require_once 'vendor/autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId('216038964143-o7tv69v0krb3oleb6s12qcvm2dbc51d0.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('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');

//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('http://localhost/login-google/index.php');

// to get the email and profile 
$google_client->addScope('email');

$google_client->addScope('profile');

?>

 



