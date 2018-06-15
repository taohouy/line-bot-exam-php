<?php



require "vendor/autoload.php";

$access_token = '3sp2Z2HIpA0JUqC8jPwe4Ot9D2ySKOPVx7VbTxlWs0meTVJMml2lZ8/C61/vREMJD/V+AMLudgzTfpWqZSC7+mF/wjWi0ipAv3FfVF+311u7R0yxG5RRgvl++1yFISBX/n7lT0b/z3jhMQHtu/TjFDQdB04t89/1O/w1cDnyilFU=';

$channelSecret = '683e7a572d53844ff5c50abce55fe043';

$pushID = 'U46c3ac29232eede2a09fde211b010382';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







