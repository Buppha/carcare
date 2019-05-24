<?php
session_start();
ini_set('display_errors', 1);
require_once __DIR__ . '/Facebook/autoload.php';

use Facebook\FacebookSession;
use Facebook\FacebookRequest;
use Facebook\GraphUser;
use Facebook\FacebookRedirectLoginHelper;


$fb = new Facebook\Facebook([
  'app_id' => '1744974852241330',
  'app_secret' => '97c93ca9b9acca0d59f6e62cd1a0cda8',
  'default_graph_version' => 'v2.11',
]);

$helper = $fb->getRedirectLoginHelper();
try {
  $accessToken = $helper->getAccessToken();
} catch(Facebook\Exceptions\FacebookResponseException $e) {
  // When Graph returns an error
  echo 'Graph returned an error: ' . $e->getMessage();
  exit;
} catch(Facebook\Exceptions\FacebookSDKException $e) {
  // When validation fails or other local issues
  echo 'Facebook SDK returned an error: ' . $e->getMessage();
  exit;
}

if (isset($accessToken)) {
  // Logged in!
  $_SESSION['facebook_access_token'] = (string) $accessToken;

  // Now you can redirect to another page and use the
  // access token from $_SESSION['facebook_access_token']

  $response = $fb->get('/me?fields=id,name,gender,email,link', $accessToken);

  $user = $response->getGraphUser();
  echo'<pre>';
  print_r($user);
  echo'</pre>';

  //echo 'ID: ' . $user['id'];
  //echo 'Name: ' . $user['name'];
  //echo 'Gener: ' . $user['gener'];
  //echo 'Email: ' . $user['email'];
  //echo 'Link: ' . $user['link'];

}
?>