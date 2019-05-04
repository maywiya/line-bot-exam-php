<?php



require "vendor/autoload.php";

$access_token = '6jtTR4BgR5uI86oUoxODYNUyTKM0UeziXIQI97uPhtk8tIJtisAk2lsP5Xs6F7rToTr3XyfTRdmTicsShZu8sxRhWQ6Cin/TXX/2J8H429AB/wDw0XcSlIrOK5CuC1c7TDUxW5uiUERSbig1ebUaswdB04t89/1O/w1cDnyilFU=';

$channelSecret = '6c8f950137a781d397c41e9cdefff164';

$pushID = 'Uddb2ad8f58cde78a22b7a3547a207d60';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







