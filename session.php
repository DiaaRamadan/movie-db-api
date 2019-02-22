<?php
include 'call.php';
session_start();
$url = 'https://api.themoviedb.org/3/authentication/guest_session/new?api_key=37ef0f35df83c6eb8ed109a42fc6d7a3';
$array = callApi($url, 'post');
$session_key;
foreach($array as $key => $value) {
        if($key == 'guest_session_id'){
        	$_SESSION['G_session']=$value;
        	header('Location: ' . $_SERVER['HTTP_REFERER']);
        	exit();
    	}
    }
?>