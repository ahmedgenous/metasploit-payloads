<?php
/*

فضلا اترك حقوق القناة
@hjhjfjhfj
*/

ob_start();

$API_KEY = "1418279861:AAFQ3Sify6eYXuFfciK_cfCKAxZm-7jQ_-Y",

define("1418279861:AAFQ3Sify6eYXuFfciK_cfCKAxZm-7jQ_-Y",$API_KEY);
function bot($method,$str=[]){
        $http_build_query = http_build_query($str);
        $api = "https://api.telegram.org/bot".API_KEY."/".$method."?$http_build_query";
        $http_build_query = file_get_contents($api);
        return json_decode($http_build_query);
}

$update = json_decode(file_get_contents("php://input"));
$message = $update->message;
$from_id = $message->from->id;
$chat_id = $message->chat->id;
$text = $message->text;
$message_id = $message->message_id;


if($text == "/start"){
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"
هلا بيك في بوت احمد الفايد لصنع البوتات",

$admin =>" 1140399533";

if ( $text and $message-
>reply_to_message && $text="/info"){
	bot( 'sendmessage',[
	'chat_id'=>$message-
	>reply_to_message->forward_form-
	>id,
	
