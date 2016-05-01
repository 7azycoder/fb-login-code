<?php
include_once("inc/facebook.php"); //include facebook SDK
######### Facebook API Configuration ##########
$appId = '443588279169098'; //Facebook App ID
$appSecret = '2dd49e49de285dcd3ccd1ec3721f3ded'; // Facebook App Secret
$homeurl = 'http://lovepreet.i-waytrans.com/';  //return to home
$fbPermissions = 'email';  //Required facebook permissions

//Call Facebook API
$facebook = new Facebook(array(
  'appId'  => $appId,
  'secret' => $appSecret

));
$fbuser = $facebook->getUser();
?>