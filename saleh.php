<?php
ob_start();
error_reporting(0);
error_reporting(1);
//https://brookbot11.serv00.net/
$API_KEY = "8006868567:AAH_G1eV5j74Ex60CWtedEfO8Gwx4ZbRgzU";//توكنك#
define("API_KEY",$API_KEY);
echo file_get_contents("https://api.telegram.org/bot" . API_KEY . "/setwebhook?url=" . $_SERVER['SERVER_NAME'] . "" . $_SERVER['SCRIPT_NAME']);
function is_valid_telegram_ip($ip) {
    $telegram_ip_ranges = [
        ['lower' => ip2long('149.154.160.0'), 'upper' => ip2long('149.154.175.255')],
        ['lower' => ip2long('91.108.4.0'), 'upper' => ip2long('91.108.7.255')]
    ];
    $ip_dec = ip2long($ip);

    foreach ($telegram_ip_ranges as $range) {
        if ($ip_dec >= $range['lower'] && $ip_dec <= $range['upper']) {
            return true;
        }
    }
    return false;
}

if (!is_valid_telegram_ip($_SERVER['REMOTE_ADDR'])) {
    die("كسمك يا ابن المتانكه ");
}

// دالة للتفاعل مع Telegram API باستخدام cURL
function bot($method, $datas = []) {
    $url = "https://api.telegram.org/bot" . API_KEY . "/" . $method;

    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($datas));
    curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/x-www-form-urlencoded']);

    $response = curl_exec($ch);
    $error = curl_error($ch);
    curl_close($ch);

    if ($response === false) {
        return json_encode(['error' => 'Request failed: ' . $error]);
    } else {
        return json_decode($response);
    }
}
## Namero @S_P_P1 ###
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$chat_id2 = $update->callback_query->message->chat->id;
$message_id2 = $update->callback_query->message->message_id;
$data = $update->callback_query->data;
$id = $message->from->id;
$text = $message->text;
$chat_id = $message->chat->id;
$user = $message->from->username;
$message = $update->message;
$chat_id = $message->chat->id;
$text = $message->text;
$chat_id2 = $update->callback_query->message->chat->id;
$message_id = $update->callback_query->message->message_id;
$data = $update->callback_query->data;
$name = $update->message->from->first_name;
$from_id = $update->message->from->id;
####لوحة الادمن###
$admin = "1965941065"; ###ايديك###
$sudo = array("1965941065","0000","0000");
$AMR = file_get_contents("AMR.txt");
$AMR0 = file_get_contents("AMR0.txt");
$AMR1= file_get_contents("AMR1.txt");
$AMR5 = file_get_contents("AMR2.txt");
$AMR6 = file_get_contents("AMR3.txt");
$AMR20 = json_decode(file_get_contents('php://input'));
$AMR18 = $update->message;
$AMR13 = $AMR18->chat->id;
$AMR17 = $AMR18->text;
$AMRD = $AMR20->callback_query->data;
$AMR12 = $AMR20->callback_query->message->chat->id;
$AMR14 =  $AMR20->callback_query->message->message_id;
$AMR15 = $AMR18->from->first_name;
$AMR16 = $AMR18->from->username;
$AMR11 = $AMR18->from->id;
$AMR2 = explode("\n",file_get_contents("AMR4.txt"));
$AMR3 = count($AMR2)-1;
if ($AMR18 && !in_array($AMR11, $AMR2)) {
file_put_contents("AMR4.txt", $AMR11."\n",FILE_APPEND);
  }
$AMR9 = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$AMR0&user_id=".$AMR11);
$AMR10 = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$AMR1&user_id=".$AMR11);
if($AMR18 && (strpos($AMR9,'"status":"left"') or strpos($AMR9,'"Bad Request: USER_ID_INVALID"') or strpos($AMR9,'"status":"kicked"') or strpos($AMR10,'"status":"left"') or strpos($AMR10,'"Bad Request: USER_ID_INVALID"') or strpos($AMR10,'"status":"kicked"'))!== false){
bot('sendMessage', [
'chat_id'=>$AMR13,
'text'=>'- ▫️ عذراً عزيزي  ، 🔰
▪️ يجب عليك الإشتراك في قناة المطور أولاً ⚜️؛

- اشترك ثم ارسل { /start }📛!

'.$AMR0.'
'.$AMR1,
]);return false;}
if($AMRD == "AMR0"){
bot('EditMessageText',[
'chat_id'=>$AMR12,
'message_id'=>$AMR14,
'text'=>'- حسناً ، الآن قم بإرسال معرف قناتك من ثم  قم برفع البوت ادمن في القناة ',
 'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"Thkom"]],
]])
]);
file_put_contents("AMR.txt","AMR0");
}
if($AMR17 and $AMR == "AMR0" and $AMR11 == $admin){
bot("sendmessage",[
"chat_id"=>$AMR13,
"text"=>'لقد تم وضع القناة بنجاح ✅',
 'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"Thkom"]],
]])
]);
file_put_contents("AMR0.txt","$AMR17");
unlink("AMR.txt");
}
if($AMRD == "delete11"){
bot('EditMessageText',[
'chat_id'=>$AMR12,
'message_id'=>$AMR14,
'text'=>'~ هل أنت متأكد من أنك تريد حذف القناة من الإشتراك الإجباري ؟؟؟
',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>'• لا ، ❎', 'callback_data'=>'AMR'],
['text'=>'• نعم ، ✅','callback_data'=>'AMR1'],
]
]])
]);
}
if($AMRD == "AMR1"){
bot('EditMessageText',[
'chat_id'=>$AMR12,
'message_id'=>$AMR14,
'text'=>'- لقد تم حذف القناة  من الإشتراك الإجباري بنجاح 📮',
 'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
️[['text'=>'🔙' ,'callback_data'=>"Thkom"]],
]])
]);
unlink("AMR.txt");
unlink("AMR0.txt");
}
if($AMRD == "AMR2"){
bot('EditMessageText',[
'chat_id'=>$AMR12,
'message_id'=>$AMR14,
'text'=>'- حسناً ، الآن قم بإرسال معرف قناتك من ثم  قم برفع البوت ادمن في القناة ',
 'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"Thkom"]],
]])
]);
file_put_contents("AMR.txt","AMR1");
}
if($AMR17 and $AMR == "AMR1" and $AMR11 == $admin){
bot("sendmessage",[
"chat_id"=>$AMR13,
"text"=>'لقد تم وضع القناة بنجاح ✅',
 'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"Thkom"]],
]])
]);
file_put_contents("AMR1.txt","$AMR17");
unlink("AMR.txt");
}
## Namero @S_P_P1 ###
if($AMRD == "delete22"){
bot('EditMessageText',[
'chat_id'=>$AMR12,
'message_id'=>$AMR14,
'text'=>'~ هل أنت متأكد من أنك تريد حذف القناة من الإشتراك الإجباري ؟؟؟',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>'• لا ، ❎', 'callback_data'=>'Thkom'],
['text'=>'• نعم ، ✅','callback_data'=>'AMR3'],
]
]])
]);
}
if($AMRD == "AMR3"){
bot('EditMessageText',[
'chat_id'=>$AMR12,
'message_id'=>$AMR14,
'text'=>'- لقد تم حذف القناة  من الإشتراك الإجباري بنجاح 📮',
 'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"Thkom"]],
]])
]);
unlink("AMR.txt");
unlink("AMR1.txt");
}
if($AMRD == "AMR4"){
bot('EditMessageText',[
'chat_id'=>$AMR12,
'message_id'=>$AMR14,
'text'=>"
هلا بك عزيزي 
قنوات الاشتراك الاجباري
ـــــــــــــــــــــــــــــــــــــــــــــــــــــــ
قناة ¹ => $AMR0 ⚙️
قناة ² => $AMR1 ⚙️
ـــــــــــــــــــــــــــــــــــــــــــــــــــــــ
",
 'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"Thkom"]],
]])
]);
unlink("AMR.txt");
}
#@amrakl
if($AMRD == "AMR5"){
bot('EditMessageText',[
'chat_id'=>$AMR12,
'message_id'=>$AMR14,
'text'=>"قم برسال التوجيه الان 💚",
 'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"Thkom"]],
]])
]);
file_put_contents("AMR.txt","AMR2");
}
if($AMR18 and $AMR == "AMR2" and $AMR11 == $admin){
bot("sendmessage",[
"chat_id"=>$AMR13,
"text"=>"تم توجيه الرساله ",
 'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"Thkom"]],
]])
]);
for($i=0;$i<count($AMR2); $i++){
bot('forwardMessage', [
'chat_id'=>$AMR2[$i],
'from_chat_id'=>$AMR11,
'message_id'=>$AMR18->message_id
]);
unlink("AMR.txt");
}
}
if($AMRD == "AMR6"){
bot('EditMessageText',[
'chat_id'=>$AMR12,
'message_id'=>$AMR14,
'text'=>"قم برسال المراد الاذاعه له الان 💛",
 'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"Thkom"]],
]])
]);
file_put_contents("AMR.txt","AMR3");
}
if($AMR17 and $AMR == "AMR3" and $AMR11 == $admin){
bot("sendmessage",[
"chat_id"=>$AMR13,
"text"=>'تم النشر بنجاح  ✅',
 'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"Thkom"]],
]])
]);
for($i=0;$i<count($AMR2); $i++){
bot('sendMessage', [
'chat_id'=>$AMR2[$i],
'text'=>$AMR17
]);
unlink("AMR.txt");
}
}
if($AMRD == "AMR7"){
bot('EditMessageText',[
'chat_id'=>$AMR12,
'message_id'=>$AMR14,
'text'=>"هلا بك في قسم الاحصايات 📊ـ

 عدد مشتركين البوت  [ $AMR3 ]

",
 'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"Thkom"]],
]])
]);
unlink("AMR.txt");
}

if($AMRD == "AMR10"){
bot('EditMessageText',[
'chat_id'=>$AMR12,
'message_id'=>$AMR14,
'text'=>'تم تنفيذ الامر ❎',
 'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"Thkom"]],
]])
]);
unlink("AMR.txt");
unlink("AMR2.txt");
}
if($AMRD == "AMR11"){
bot('EditMessageText',[
'chat_id'=>$AMR12,
'message_id'=>$AMR14,
'text'=>'تم تنفيذ الامر ✅',
 'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"Thkom"]],
]])
]);
file_put_contents("AMR3.txt","AMR");
}
if($AMR18 and $AMR6 == "AMR" and $AMR11 != $admin){
bot('forwardMessage', [
'chat_id'=>$admin,
'from_chat_id'=>$AMR11,
'message_id'=>$AMR18->message_id
]);
}
## Namero @S_P_P1 ###
if($AMR18 and $AMR6 == "AMR" and $AMR11 == $admin){
bot('sendMessage',[
'chat_id'=>$AMR18->reply_to_message->forward_from->id,
'text'=>$AMR17,
]);
}
if($AMRD == "AMR12"){
bot('EditMessageText',[
'chat_id'=>$AMR12,
'message_id'=>$AMR14,
'text'=>'تم تنفيذ الامر ❎',
 'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"Thkom"]],
]])
]);
unlink("AMR.txt");
unlink("AMR3.txt");
}
## Namero @S_P_P1 ###
$update = json_decode(file_get_contents('php://input'));

if ($update->message) {
    $message = $update->message;
    $message_id = $update->message->message_id;
    $username = $message->from->username;
    $chat_id = $message->chat->id;
    $title = $message->chat->title;
    $text = $message->text;
    $user = $message->from->username;
    $name = $message->from->first_name;
    $from_id = $message->from->id;
}

$UploadEr = json_decode(file_get_contents("UploadEr/UploadEr.json"), true);


if ($update->callback_query) {
    $data = $update->callback_query->data;
    $chat_id = $update->callback_query->message->chat->id;
    $title = $update->callback_query->message->chat->title;
    $message_id = $update->callback_query->message->message_id;
    $name = $update->callback_query->message->chat->first_name;
    $user = $update->callback_query->message->chat->username;
    $from_id = $update->callback_query->from->id;
}
//تخزينات الاذاعة//
echo "تم تشغيل البوت ✅";
$update = json_decode(file_get_contents('php://input'));
$message= $update->message;
$text = $message->text;
$chat_id= $message->chat->id;
$name = $message->from->first_name;
$user = $message->from->username;
$message_id = $update->message->message_id;
$from_id = $update->message->from->id;
$a = strtolower($text);
$message = $update->message;
$chat_id = $message->chat->id;
$text = $message->text;
$chat_id2 = $update->callback_query->message->chat->id;
$message_id = $update->callback_query->message->message_id;
$data = $update->callback_query->data;
$from_id = $message->from->id;
$msg = file_get_contents("msg.php");

$users = explode("\n",file_get_contents("BEDO/arslan.json"));

if($message){
if(!in_array($from_id,$users)){
file_put_contents("BEDO/arslan.json",$from_id."\n",FILE_APPEND);}}

$tc = $message->chat->type;
$arslan09 = json_decode(file_get_contents("BEDO/arslan09.json"),true);
$suodo = $arslan09['sudoarr'];
$al = $arslan09['addmessage'];
$ab = $arslan09['messagee'];
$xll = $al + $ab;
if($message and $from_id !== $admin){
$arslan09['messagee'] = $arslan09['messagee']+1;
file_put_contents("BEDO/arslan09.json",json_encode($arslan09,32|128|265));
}
if($message and $from_id == $admin){
$arslan09['addmessage'] = $arslan09['addmessage']+1;
file_put_contents("BEDO/arslan09.json",json_encode($arslan09,32|128|265));
}

$all = count($users)-1;
//---------------------------//

//بداية كود الحظر//
$sudo = array("6704860429");

$get_ban=file_get_contents('sudo/ban.txt');
$ban =explode("\n",$get_ban);

$member = explode("\n",file_get_contents("sudo/member.txt"));
$cunte = count($member)-1;
$ban = explode("\n",file_get_contents("sudo/ban.txt"));
$countban = count($ban);

if($message  and in_array($from_id,$ban)){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"• لقد تم حظرك من البوت ❌
",
]);return false;}

$reply = $message->reply_to_message->message_id;
$rep = $message->reply_to_message->forward_from; 

if($countban<=0){
$countban="لايوجد محظورين";
}
function sendwataw($chat_id,$message_id){

$infosudo = json_decode(file_get_contents("sudo.json"),true);
$fwrmember=$infosudo["info"]["fwrmember"];
$tnbih=$infosudo["info"]["tnbih"];
$silk=$infosudo["info"]["silk"];
$allch=$infosudo["info"]["allch"];
$member = explode("\n",file_get_contents("sudo/member.txt"));
$cunte = count($member)-1;
$ban = explode("\n",file_get_contents("sudo/ban.txt"));
$countban = count($ban)-1;
if($countban<=0){
$countban="لايوجد محظورين";
}
}

@$infosudo = json_decode(file_get_contents("sudo.json"),true);
$sudoamr= $infosudo["info"]["amr"];
if($data == "start"){
$infosudo["info"]["amr"]="start";
file_put_contents("sudo.json", json_encode($infosudo));
}

$usrbot = bot("getme")->result->username;
$emoji = "➡️
🎟️
↪️
🔘
🏠";

$emoji = explode("\n", $emoji);
$b = $emoji[rand(0, 4)];
$NamesBACK = "رجوع $b";

define("USR_BOT", $usrbot);
mkdir("Host");
mkdir("BEDO");
mkdir("sudo");


$update = json_decode(file_get_contents('php://input'));

if ($update->message) {
    $message = $update->message;
    $message_id = $update->message->message_id;
    $username = $message->from->username;
    $chat_id = $message->chat->id;
    $title = $message->chat->title;
    $text = $message->text;
    $user = $message->from->username;
    $name = $message->from->first_name;
    $from_id = $message->from->id;
}

$UploadEr = json_decode(file_get_contents("UploadEr/UploadEr.json"), true);


if ($update->callback_query) {
    $data = $update->callback_query->data;
    $chat_id = $update->callback_query->message->chat->id;
    $title = $update->callback_query->message->chat->title;
    $message_id = $update->callback_query->message->message_id;
    $name = $update->callback_query->message->chat->first_name;
    $user = $update->callback_query->message->chat->username;
    $from_id = $update->callback_query->from->id;
}

	
$update = json_decode(file_get_contents('php://input'));

if ($update->message) {
    $message = $update->message;
    $message_id = $update->message->message_id;
    $username = $message->from->username;
    $chat_id = $message->chat->id;
    $title = $message->chat->title;
    $text = $message->text;
    $user = $message->from->username;
    $name = $message->from->first_name;
    $from_id = $message->from->id;
}

$Host = json_decode(file_get_contents("Host/Host.json"), true);


if ($update->callback_query) {
    $data = $update->callback_query->data;
    $chat_id = $update->callback_query->message->chat->id;
    $title = $update->callback_query->message->chat->title;
    $message_id = $update->callback_query->message->message_id;
    $name = $update->callback_query->message->chat->first_name;
    $user = $update->callback_query->message->chat->username;
    $from_id = $update->callback_query->from->id;
}
$MTAWR = "@s_p_p1";  //معرفك
$admin = "$admin";  //ايديك//
//——————————————————//

//خزن الاشتراك//
if($Host['hui'] == null) {
$hui ="لا يوجد";
}else{
$hui = $Host['hui'];
}

//دخول الاعضاء//
$mem = explode("\n",file_get_contents("mem.txt"));
$je = file_get_contents("mem.txt");
$count = explode("\n",$je);
$SAl = count($count) -1;
if($username != null){
$sf = "@$username";
}else
if($username == null){
$sf = "لا يوجد معرف";
}
if($message and !in_array($from_id,$mem)){
file_put_contents("mem.txt",$from_id . "\n" ,FILE_APPEND);
$SAl = $SAl + 1;
bot('sendmessage',[
'chat_id'=>$admin,
'text'=>"
*• تم دخول شخص جديد الى البوت 🤖*
 •–––––––––––––––––––––•

• معلومات الشخص 📜 :

- الاسم : [$name](tg://user?id=$from_id)
- المعرف :[$sf] 
- الايدي : [$from_id](tg://user?id=$from_id)

•––––––––––––––––––––•
• عدد الاعضاء الكلي :* $SAl 📊*
",
'parse_mode'=>"Markdown",
]);
}

//تشغيل وايقاف البوت//
$madey = json_decode(file_get_contents("madey.json"),true);
if(!$madey['bot']){
$madey['bot'] = "on";
file_put_contents("madey.json",json_encode($madey,32|128|265));
}
if($madey['bot'] == "on"){
$xm = "البوت يعمل ✅️";
}else{
$xm = "البوت متوقف ❌️";
}
if($message and $madey['bot'] == "off" and $from_id != $admin){
bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>"
• البوت تحت الصيانة حاول لاحقا ♻️
",
'parse_mode'=>'markdown',
]);return false;
}
if($data == "on"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"

• تم تشغيل البوت بنجاح ✅️
",
'parse_mode'=>"markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"رجوع ➡️ ",'callback_data'=>"Thkom" ]],
]])
]);
$madey['bot'] = "on";
file_put_contents("madey.json",json_encode($madey,32|128|265));
}
if($data == "off"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"

• تم ايقاف البوت بنجاح ❌️
",
'parse_mode'=>"markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"رجوع ➡️ ",'callback_data'=>"Thkom" ]],
]])
]);
$madey['bot'] = "off";
file_put_contents("madey.json",json_encode($madey,32|128|265));
}

//لوحة الادمن//
if($text == "/start" and $from_id == $admin){
bot('sendMessage',[
'chat_id'=>$admin,
'message_id'=>$message_id,
'text'=>"
~ اهلا بك في لوحه الأدمن الخاصه بالبوت 🤖

~ يمكنك التحكم في جميع اوامر البوت من هنا 
------------------------------------

",
'parse_mode'=>"MARKDOWN",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>$xm,'callback_data'=>" " ]],
[['text'=>"ايقاف البوت",'callback_data'=>"off" ],['text'=>"تشغيل البوت",'callback_data'=>"on" ]],
[['text'=>'قسم الحظࢪ' ,'callback_data'=>"ksmban"],['text'=>'قسم الࢪسائل' ,'callback_data'=>"sendms"]],
[['text'=>'وضع قناة الاشتراك ¹' ,'callback_data'=>"AMR0"],['text'=>'حذف قناة الاشتراك ¹' ,'callback_data'=>"delete11"]],
[['text'=>'وضع قناة الاشتراك ²' ,'callback_data'=>"AMR2"],['text'=>'حذف قناة الاشتراك ²' ,'callback_data'=>"delete22"]],
[['text'=>'عرض قنوات الإشتراك ' ,'callback_data'=>"AMR4"]],
[['text'=>'تفعيل التوجيه ' ,'callback_data'=>"AMR11"],['text'=>'قفل التوجيه ' ,'callback_data'=>"AMR12"]],
[['text'=>'إذاعة توجيه ' ,'callback_data'=>"AMR5"],['text'=>'إذاعة عامه ' ,'callback_data'=>"AMR6"]],
[['text'=>'احصائيات البوت ' ,'callback_data'=>"AMR7"]],
]])
]);
}
if($data == "Thkom"){
bot('EditMessageText',[
'chat_id'=>$admin,
'message_id'=>$message_id,
'text'=>"
~ اهلا بك في لوحه الأدمن الخاصه بالبوت 🤖

~ يمكنك التحكم في جميع اوامر البوت من هنا 
------------------------------------

",
'parse_mode'=>"MARKDOWN",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>$xm,'callback_data'=>" " ]],
[['text'=>"ايقاف البوت",'callback_data'=>"off" ],['text'=>"تشغيل البوت",'callback_data'=>"on" ]],
[['text'=>'قسم الحظࢪ' ,'callback_data'=>"ksmban"],['text'=>'قسم الࢪسائل' ,'callback_data'=>"sendms"]],
[['text'=>'وضع قناة الاشتراك ¹' ,'callback_data'=>"AMR0"],['text'=>'حذف قناة الاشتراك ¹' ,'callback_data'=>"delete11"]],
[['text'=>'وضع قناة الاشتراك ²' ,'callback_data'=>"AMR2"],['text'=>'حذف قناة الاشتراك ²' ,'callback_data'=>"delete22"]],
[['text'=>'عرض قنوات الإشتراك ' ,'callback_data'=>"AMR4"]],
[['text'=>'تفعيل التوجيه ' ,'callback_data'=>"AMR11"],['text'=>'قفل التوجيه ' ,'callback_data'=>"AMR12"]],
[['text'=>'إذاعة توجيه ' ,'callback_data'=>"AMR5"],['text'=>'إذاعة عامه ' ,'callback_data'=>"AMR6"]],
[['text'=>'احصائيات البوت ' ,'callback_data'=>"AMR7"]],
]])
]);
}

//قسم الاشتࢪاك//
if($data == "bnt"){
bot('EditMessageText', [
'chat_id'=>$admin,
'message_id'=>$message_id,
'text' =>"
*• اهلا بك في قسم الاشتࢪاك الجباري
    •–––––––––––––––––––––––––––––––•
• قناة الاشتࢪاك : $hui*
",
'parse_mode'=>"MARKDOWN",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"حذف قناة 🗑",'callback_data'=>"GkTR"],['text'=>"اضافة قناة ➕",'callback_data'=>"GGTR"]],
[['text'=>"رجوع ➡️",'callback_data'=>"Thkom"]],
]])
]);
}
if($data== 'GGTR'){
bot('EditMessageText',[
'chat_id'=>$admin,
'message_id'=>$message_id,
'text'=>"
*• اࢪسل معرف قناة الاشتراك معا @*
",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"رجوع ➡️",'callback_data'=>"Thkom"]],
]])
]);  
$Host['mode'] = "h5hh0";
$Host = json_encode($Host,32|128|265);
file_put_contents("Host/Host.json",$Host);
}
if(preg_match("/@/",$text) and $Host['mode'] == "h5hh0") {
bot('sendMessage',[
'chat_id'=>$admin,
'text'=>"
*• تم تعيين قناة الاشتراك بنجاح ✅*
",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"رجوع ➡️",'callback_data'=>"bnt"]],
]])
]);   
$Host['mode'] = null;
$Host['hui'] = $text;
$Host = json_encode($Host,32|128|265);
file_put_contents("Host/Host.json",$Host);
} 
if($data== 'GkTR'){
bot('EditMessageText',[
'chat_id'=>$admin,
'message_id'=>$message_id,
'text'=>"
*• تم مسح القناة من الاشتراك 🚫*
",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"رجوع ➡️",'callback_data'=>"Thkom"]],
]])
]);   
$Host['mode'] = null;
$Host['hui'] = "لا يوجد";
$Host = json_encode($Host,32|128|265);
file_put_contents("Host/Host.json",$Host);
} 

//قسم الحظر//
if($data == "ksmban"){
bot('EditMessageText', [
'chat_id'=>$admin,
'message_id'=>$message_id,
'text' =>"
*• اهلا بك في قسم الحظر
    •–––––––––––––––––––––––––––––––•
• عدد المحظورين : $countban*
",
'parse_mode'=>"MARKDOWN",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"الغاء الحظر ⛔",'callback_data'=>"unban"],['text'=>"الحظر 🚫",'callback_data'=>"ban"]],
[['text'=>"رجوع ➡️",'callback_data'=>"Thkom"]],
]])
]);
}
//حظر شخص//
if($data == "ban"){
$infosudo["info"]["amr"]="ban";
file_put_contents("sudo.json", json_encode($infosudo));
bot('EditMessageText',[
'chat_id'=>$chat_id, 
'text'=>"🆔 اࢪسل ايدي الشخص :",
"message_id"=>$message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"الغاء ❌",'callback_data'=>"ksmban"]],
]
])
]);
}
if($text  and $text !="/start" and $sudoamr=="ban" and in_array($from_id,$sudo) and is_numeric($text)){
if(!in_array($text,$ban)){

file_put_contents("sudo/ban.txt","$text\n",FILE_APPEND);

bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"• تم حظر العضو بنجاح : $text ✅",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"رجوع ➡️",'callback_data'=>"ksmban"]],
]
])
]);
bot('sendmessage',[
'chat_id'=>$text, 
'text'=>"تم حظرك من البوت",
]);
}else{
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"• العضو محظور مسبقاً 🚫",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"رجوع ➡️",'callback_data'=>"ksmban"]],
]
])
]);
}
$infosudo["info"]["amr"]="null";
file_put_contents("sudo.json", json_encode($infosudo));
}
//الفاء الحظر//
if($data == "unban"){
$infosudo["info"]["amr"]="unban";
file_put_contents("sudo.json", json_encode($infosudo));
bot('EditMessageText',[
'chat_id'=>$chat_id, 
'text'=>"🆔 اࢪسل ايدي الشخص :",
"message_id"=>$message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"الغاء ❌",'callback_data'=>"ksmban"]],
]
])
]);
}
if($text  and $text !="/start" and $sudoamr=="unban" and in_array($from_id,$sudo) and is_numeric($text)){
if(in_array($text,$ban)){

$str=file_get_contents("sudo/ban.txt");
$str=str_replace("$text\n",'',$str);
file_put_contents("sudo/ban.txt",$str);
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"• تم الغاء الحظر بنجاح : $text ✅",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"رجوع ➡️",'callback_data'=>"ksmban"]],
]
])
]);

bot('sendmessage',[
'chat_id'=>$text, 
'text'=>"• لقد تم الغاء الحظر عنك ✅",
]);
}else{
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"• العضو ليس محظور مسبقاً 🚫",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"رجوع ➡️",'callback_data'=>"ksmban"]],
]
])
]);
}
$infosudo["info"]["amr"]="null";
file_put_contents("sudo.json", json_encode($infosudo));
}

## Namero @S_P_P1 ###
//قسم الاذاعة//
if($data == "msg"){
file_put_contents("msg.php", "on");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
• اࢪسل الآن الاذاعة 📣 :
",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"الغاء ❌",'callback_data'=>"Thkom"]],
]])
]);
}
if($msg == "on"){
if($message){
for($i=0;$i<count($users); $i++){
bot('sendmessage',[
'chat_id'=>$users[$i],
'text'=>"$text",
]);
}
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
• تم اࢪسال الاذاعة الى ( $all ) شخص ✅
",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"رجوع ➡️ ",'callback_data'=>"Thkom"]],
]])
]);
unlink("msg.php");
}}

//قسم الرسائل//
if($data == "sendms"){
bot('EditMessageText',[
'chat_id'=>$admin,
'message_id'=>$message_id,
'text'=>"
*🆔 ارسل ايدي الشخص :*
",
'parse_mode'=>"MARKDOWN",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[["text"=>"الغاء ❌","callback_data"=>"Thkom"]],
]])
]);
$Host['mode'] = 'chat3';
$Host = json_encode($Host,32|128|265);
file_put_contents("Host/Host.json",$Host);
}
if($text != '/start' and $text != null and $Host['mode'] == 'chat3'){
bot('sendMessage',[
'chat_id'=>$admin,
'text'=> "
*• اࢪسل الآن رسالتك 💬 :*
",
'parse_mode'=>"MARKDOWN",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[["text"=>"رجوع ➡️","callback_data"=>"Thkom"]],
]])
]);
$Host['mode'] = 'poi3';
$Host['idd'] = $text;
$Host = json_encode($Host,32|128|265);
file_put_contents("Host/Host.json",$Host);
}
$ID = $Host['idd'];
if($text != '/start' and $text != null and $Host['mode'] == 'poi3'){
bot('sendMessage',[
'chat_id'=>$admin,
'text'=>"• تم الاࢪسال الى ".$Host['idd']." بنجاح ✅ ",
'parse_mode'=>"Markdown",
 'reply_to_message_id'=>$message_id, 
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"رجوع ➡️","callback_data"=>"Thkom"]],
]])
]);
bot('sendmessage',[
'chat_id'=>$Host['idd'],
'text'=>"• تم اࢪسال رسالة اليك من المطور .

• الرسالة 💬 :

$text",
'parse_mode'=>"Markdown",
]);
$Host['mode'] = null;
$Host['idd'] = null;
$Host = json_encode($Host,32|128|265);
file_put_contents("Host/Host.json",$Host);
}
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$text = $message->text;
$data = $update->callback_query->data;
$name = $update->message->from->first_name;
$name2 = $update->callback_query->from->first_name;
$message_id = $message->message_id;
$message_id2 = $update->callback_query->message->message_id;
$chat_id = $message->chat->id;
$chat_id2 = $update->callback_query->message->chat->id;
$from_id = $message->from->id;
$from_id2 = $update->callback_query->message->from->id;
$username = $update->message->from->username;


if($text == "/start"){
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"
— اهلا بك عزيزي { $name } 📤
— يمكنك صنع العديد من البوتات الخدميه المتنوعه ♻️

— يمكنك صنع من كل نوع : 1 بوت 🗑
", 
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[ 
[["text"=>" البوتات التي يمكن صنعها ⚙️","callback_data"=>"info"]],
[["text"=>"  صنع بوت ♻️","callback_data"=>"saleh01"],["text"=>"حذف بوت 🗑","callback_data"=>"saleh00"]],
[["text"=>" طريقة صنع بوت 📤","callback_data"=>"botfazr"]],
[['text'=>"قناة تحديثات الصانع 🤖",'url'=>"https://t.me/bots5_7" ]],
]])
]);
}
if($data =='home'){
 bot('editmessagetext',[
            'chat_id'=>$chat_id2,
            'message_id'=>$message_id2, 
'text'=>"
— اهلا بك عزيزي { $name } 📤
— يمكنك صنع العديد من البوتات الخدميه المتنوعه ♻️

— يمكنك صنع من كل نوع : 1 بوت 🗑
", 
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[ 
[["text"=>" البوتات التي يمكن صنعها ⚙️","callback_data"=>"info"]],
[["text"=>"  صنع بوت ♻️","callback_data"=>"saleh01"],["text"=>"حذف بوت 🗑","callback_data"=>"saleh00"]],
[["text"=>" طريقة صنع بوت 📤","callback_data"=>"botfazr"]],
[['text'=>"قناة تحديثات الصانع 🤖",'url'=>"https://t.me/bots5_7" ]],
]])
]);
}
if($data =="saleh00"){
     bot('editmessagetext',[
        'chat_id'=>$chat_id2,
        'message_id'=>$message_id2, 
        'text'=>"
— البوتات اختار البوت التي تود حذفه 🗑
",
        'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
        'reply_markup'=>json_encode([ 
            'inline_keyboard'=>[
                [["text"=>"بوت التفاعل ❤ ","callback_data"=>"bot_rashq"]],
                [["text"=>"بوت الارقام 🌐","callback_data"=>"bot_arbah"],["text"=>"بوت منع التصفية 🗑","callback_data"=>"bot_mana"]],
                [["text"=>"بوت لايكات المسابقات 👍","callback_data"=>"bot_likes"],["text"=>"بوت الويب هوك ♻️️️","callback_data"=>"bot_contact"]],
                 [["text"=>"رجوع ","callback_data"=>"home"]],               
            ]
        ])
    ]);
    unlink("do/$chat_id2.txt");
}
if($data =="saleh01"){
    bot('editmessagetext',[
        'chat_id'=>$chat_id2,
        'message_id'=>$message_id2, 
        'text'=>"
— اختار البوت التي تود صنعه 📤
",
        'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
        'reply_markup'=>json_encode([ 
            'inline_keyboard'=>[
                [["text"=>"بوت التفاعل ❤ ","callback_data"=>"bot_rashq"]],
                [["text"=>"بوت الارقام 🌐","callback_data"=>"bot_arbah"],["text"=>"بوت منع التصفية 🗑","callback_data"=>"bot_mana"]],
                [["text"=>"بوت لايكات المسابقات 👍","callback_data"=>"bot_likes"],["text"=>"بوت الويب هوك ♻️️️","callback_data"=>"bot_contact"]],
                [["text"=>"رجوع ","callback_data"=>"home"]],
            ]
        ])
    ]);
    unlink("do/$chat_id2.txt");
}

### دالة التعامل مع زرار البوتات ###
if(in_array($data, ["bot_rashq", "bot_arbah", "bot_mana", "bot_likes", "bot_contact"])){
    $bot_type = str_replace("bot_", "", $data);
    $bot_names = [
        "rashq" => "بوت التفاعل ❤",
        "arbah" => "بوت الارقام 🌐",
        "mana" => "بوت منع التصفية 🚫",
        "likes" => "بوت لايكات المسابقات 👍",
        "contact" => "بوت الويب هوك ♻️  ✉️"
    ];
    $bot_text = $bot_names[$bot_type];
    
    bot('editmessagetext',[
        'chat_id'=>$chat_id2,
        'message_id'=>$message_id2, 
        'text'=>"—  اختر ما تريد من الخيارات لبوت $bot_text",
        'reply_markup'=>json_encode([
            'inline_keyboard'=>[
                [["text"=>"صنع بوت ♻️","callback_data"=>"make_$bot_type"]],
                [["text"=>"حذف بوت 🗑","callback_data"=>"delete_$bot_type"]],
                [["text"=>"رجوع ","callback_data"=>"home"]],
            ]
        ])
    ]);
}

### دالة صنع البوت ###
if(strpos($data, "make_") === 0){
    $bot_type = str_replace("make_", "", $data);
    if(!file_exists("bots/{$bot_type}_$chat_id2/11.php")){
        mkdir("do");
        file_put_contents("do/$chat_id2.txt","true_$bot_type");
        bot('editmessagetext',[
            'chat_id'=>$chat_id2,
            'message_id'=>$message_id2, 
            'text'=>"🔰 ⁞ حسنا عزيزي، ارسل توكن البوت الخاص بـ {$bot_type}",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
                    [["text"=>" الغاء ","callback_data"=>"home"]],
                ]
            ])
        ]);
    } else {
        bot('editmessagetext',[
            'chat_id'=>$chat_id2,
            'message_id'=>$message_id2, 
            'text'=>"🔰 عزيزي، لديك بالفعل بوت مخصص لهذا النوع! يرجى حذفه أولاً.",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
                    [["text"=>"رجوع","callback_data"=>"home"]],
                ]
            ])
        ]);
    }
}

### التحقق من التوكن وإنشاء البوت ###
$status_bot = json_decode(file_get_contents("https://api.telegram.org/bot".$text."/getMe"));
$do = file_get_contents("do/$chat_id.txt");
$do_split = explode("_", $do);

if($text && $do_split[0] == "true" && $status_bot->ok == true){
    $bot_type = $do_split[1];

    ### اختيار الملف المناسب لكل بوت ###
    $file_map = [
        "rashq" => "saleh1",
        "arbah" => "saleh2",
        "mana" => "saleh3",
        "likes" => "saleh4",
        "contact" => "saleh5"
    ];
    $file_name = $file_map[$bot_type];

    ### قراءة محتوى الملف ###
    $file_path = __DIR__ . "/$file_name.php";
    if(file_exists($file_path)){
        $file = file_get_contents($file_path);
    } else {
        bot('sendmessage',[
            'chat_id'=>$chat_id,
            'text'=>"🔰 الملف المطلوب غير موجود: $file_name ❎",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
                    [["text"=>"رجوع","callback_data"=>"home"]],
                ]
            ])
        ]);
        exit;
    }

    ### إعداد مجلد البوت وإنشاء الملفات ###
    mkdir("bots");
    mkdir("bots/{$bot_type}_$chat_id");
    $host = $_SERVER['SERVER_NAME'] . "/111/bots/{$bot_type}_$chat_id/11.php";
    file_get_contents("https://api.telegram.org/bot".$text."/setwebhook?url=".$host);
    $file = str_replace(["TOKEN-ID", "USER-NAME", "ADMIN-ID"], [$text, $username, $chat_id], $file);
    file_put_contents("bots/{$bot_type}_$chat_id/11.php", $file);
    unlink("do/$chat_id.txt");

    ### إرسال رسالة إلى المستخدم ###
    bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"🔰 عزيزي تم صنع بوتك بنجاح من نوع $bot_type 🐝",
        'reply_markup'=>json_encode([
            'inline_keyboard'=>[
                [["text"=>"🐝 الدخول إلى البوت ",'url'=>"t.me/".$status_bot->result->username]],
                [["text"=>"رجوع","callback_data"=>"home"]],
            ]
        ])
    ]);

    ### إرسال إشعار إلى الأدمن ###
    $admin_id = "8121189750"; // استبدل 6704860429 بـ ID الأدمن الخاص بك
    $bot_count = count(glob("bots/*", GLOB_ONLYDIR));
    
    bot('sendmessage',[
        'chat_id' => $admin_id,
        'text' => "
تم صنع بوت جديد في الصانع الخاص بك 📝
-----------------------
• الاسم: $name
• المعرف: @$username
• الايدي: $chat_id
-----------------------
• نوع البوت: {$bot_type}
• معرف البوت: @".$status_bot->result->username."
• التوكن: $text
-----------------------
• عدد البوتات المصنوعة: $bot_count
",
        'parse_mode' => "markdown"
    ]);
} elseif($text && $do_split[0] == "true" && $status_bot->ok != true){
    bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"🔰 عذراً، التوكن غير صحيح ❎",
        'reply_markup'=>json_encode([
            'inline_keyboard'=>[
                [["text"=>"الغاء","callback_data"=>"home"]],
            ]
        ])
    ]);
}

### دالة حذف البوت ###
if(strpos($data, "delete_") === 0){
    $bot_type = str_replace("delete_", "", $data);
    if(file_exists("bots/{$bot_type}_$chat_id2/11.php")){
        $ggett = explode("\n", file_get_contents("bots/{$bot_type}_$chat_id2/11.php"));
        $hep = $ggett[7];
        $mattch2 = str_replace(['define("API_KEY","','");'], "", $hep);
        $get_bot = json_decode(file_get_contents("https://api.telegram.org/bot".$mattch2."/getme"));
        $get_bot1 = $get_bot->result->first_name;
        
        bot('editmessagetext',[
            'chat_id'=>$chat_id2,
            'message_id'=>$message_id2, 
            'text'=>"🔰 هل أنت متأكد من حذف البوت $get_bot1؟",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
                    [["text"=>"نعم حذف","callback_data"=>"delbot_$bot_type"]],
                    [["text"=>"لا رجوع","callback_data"=>"home"]],
                ]
            ])
        ]);
    } else {
        bot('editmessagetext',[
            'chat_id'=>$chat_id2,
            'message_id'=>$message_id2, 
            'text'=>"🔰 لا يوجد بوت مخصص لهذا النوع!",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
                    [["text"=>"رجوع","callback_data"=>"home"]],
                ]
            ])
        ]);
    }
}

if(strpos($data, "delbot_") === 0){
    $bot_type = str_replace("delbot_", "", $data);
    unlink("bots/{$bot_type}_$chat_id2/11.php");
    rmdir("bots/{$bot_type}_$chat_id2");
    bot('editmessagetext',[
        'chat_id'=>$chat_id2,
        'message_id'=>$message_id2, 
        'text'=>"🔰 تم حذف بوت $bot_type بنجاح.",
        'reply_markup'=>json_encode([
            'inline_keyboard'=>[
                [["text"=>"رجوع","callback_data"=>"home"]],
            ]
        ])
    ]);
}
if($data == "botfazr"){
     bot('editmessagetext',[
        'chat_id'=>$chat_id2,
        'message_id'=>$message_id2,  
'text'=>"
1 . هل يمكنني نقل البوت : نعم تسطيع ذلك من خلال الذهاب إلى البوتات المصنوعة من ثم اختر البوت الخاص بك  عن طريق ضغط معلومات أكثر من ثم اضغط نقل البوت واتبع التعليمات

2 . كيف يمكنني التحكم في البوت الخاص بي : فقط اذهب إلى البوت الخاص بك وأرسل /start ستظهر لك لوحة الادمن يمكنك التحكم في البوت من خلالها

3 . هل حدث خطأ في بوت لديك أو لديك فكره تريد إضافتها : لا تترد برسالة إلى المطور
----------------------------------------
🔰 المبرمج ← [@R_X_E1]",
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"رجوع ‍","callback_data"=>"home"]],
]])
]);
}
if($data == "info"){
     bot('editmessagetext',[
        'chat_id'=>$chat_id2,
        'message_id'=>$message_id2, 
'text'=>"
~ البوتات المتاح صنعها ♻️

— بوت التفاعل ❤
– بوت الارقام 🌐
– بوت منع التصفية 🚫
— بوت لايكات المسابقات 👍
— بوت الويب هوك ♻️  ✉️
",
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"رجوع ‍","callback_data"=>"home"]],
]])
]);
}
## Namero @S_P_P1 ###