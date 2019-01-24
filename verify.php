<?php
$access_token = '5VmPSKafqALCUwfei0UR4uVSbtZ+pJSR+3w9IZyao3ArPNph3YmQwIfMKBHjCLTnfBXG1dWh4i147YfL7zNtn4pjr8KY8sgt1jhGwe5yBXctjxuGtmRN8GE6J0z6XJYTYBUtl4fwgkfYJoDTL7TYhAdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
