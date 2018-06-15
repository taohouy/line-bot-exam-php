<?php
$access_token = 'sp2Z2HIpA0JUqC8jPwe4Ot9D2ySKOPVx7VbTxlWs0meTVJMml2lZ8/C61/vREMJD/V+AMLudgzTfpWqZSC7+mF/wjWi0ipAv3FfVF+311u7R0yxG5RRgvl++1yFISBX/n7lT0b/z3jhMQHtu/TjFDQdB04t89/1O/w1cDnyilFU=';


$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
