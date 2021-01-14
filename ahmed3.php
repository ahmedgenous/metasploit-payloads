<?php
ob_start();
define('API_KEY','1541924690:AAGWjewZdd1m71QuVTHGuAQMEPSeAdZtiuc');
function bot($method,$datas=[]){
    $url = 'https://api.telegram.org/bot'.API_KEY.'/'.$method;
$ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url); curl_setopt($ch,CURLOPT_RETURNTRANSFER,true); curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
    $res = curl_exec($ch);
    if(curl_error($ch)){
        var_dump(curl_error($ch));
    }else{
        return json_decode($res);
    }
}
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$chat_id = $message->chat->id;
$text = $message->text;
if($text == "/start"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>'أهلا بك عزيزي في بوت الببغاء'
]);
}
if($text !== "/start"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"$text"
]);
}
if($text == "hi"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>'اهلا يا صديق كيف يمكنني مساعدتك'
]);
}
