<?php
function callApi($url,$method){
  //$apiKey = '37ef0f35df83c6eb8ed109a42fc6d7a3';
  $uthUrl = $url;
  $curl = curl_init();
  curl_setopt_array($curl, array(
    CURLOPT_URL =>$uthUrl,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => $method,
    CURLOPT_POSTFIELDS => "{}",
  ));

  $response = curl_exec($curl);
  curl_close($curl);
  $resultInArray = json_decode($response, true);
  return $resultInArray;
}
