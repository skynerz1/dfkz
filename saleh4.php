<?php 
error_reporting(0);
$host=$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];
$usernn = "USER-NAME";
$userbot = str_replace("@","",$usernn);
$Amind = ADMIN-ID; 
$admin = ADMIN-ID; 
$nambot =  "التفاعلات";
define("API_KEY","TOKEN-ID");
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

function GetMe()
{
	return bot('getMe');
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
$admin = "ADMIN-ID"; ###ايديك###
$sudo = array("ADMIN-ID","0000","0000");
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
## Namero @S_P_P1 ###
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
$sudo = array("ADMIN-ID");

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
## Namero @S_P_P1 ###
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
$usrbot = bot("getme")->result->username;
$emoji = 
"➡️
🎟️
↪️
🔘
🏠
" ;
$emoji = explode ("\n", $emoji) ;
$b = $emoji[rand(0,4)];
$NamesBACK = "رجوع $b" ;

define("USR_BOT",$usrbot); #يابه لحد يلعب بهاذه
mkdir("bbot") ;
mkdir("bbot/". USR_BOT) ;
mkdir("bbot/". USR_BOT. "/BACKUP") ;

$bbot=json_decode(file_get_contents("bbot/".USR_BOT."/bbot.json"),1);


function SETJSON($INPUT){
    if ($INPUT != NULL || $INPUT != "") {
        $F = "bbot/".USR_BOT."/bbot.json";
        $N = json_encode($INPUT, JSON_PRETTY_PRINT);
        
        file_put_contents($F, $N);
        sleep(1);
    }
}


$update = json_decode(file_get_contents('php://input'));
if($update->message){
	$message = $update->message;
$message_id = $update->message->message_id;
$username = $message->from->username;
$chat_id = $message->chat->id;
$title = $message->chat->title;
$text = $message->text;
$user = $message->from->username;
$name = $message->from->first_name;
$lang = $update->message->from->language_code ;
$from_id = $message->from->id;
$dy = "عليك تعين قناة اشتراك اجباري اولا ." ;
}
if($update->callback_query){
$data = $update->callback_query->data;
$chat_id = $update->callback_query->message->chat->id;
$title = $update->callback_query->message->chat->title;
$message_id = $update->callback_query->message->message_id;
$name = $update->callback_query->message->chat->first_name;
$user = $update->callback_query->message->chat->username;
$from_id = $update->callback_query->from->id;
}

$title = $message->chat->title;
 

 if(!preg_match("/-/", $chat_id)) {
 $chis = $bbot[$from_id]["ch"]??"لا يوجد" ;
 $chis = "*$chis*" ;
 $emo = $bbot[$from_id]["emo"]??"❤️" ;
 $emo = "*$emo*" ;
 $klish = $bbot[$from_id]["klish"]??"🛑 عليك الاشتراك بالقناة لتتمكن من التصويت 🛑" ;
 $rshq = $bbot[$from_id]["rshq"]??"❌" ;
 $ish = $bbot[$from_id]["ish" ]??"✅" ;
 $klish = "*$klish*" ;
 
 if(!$rshq) { $bbot[$from_id]["rshq"] = "❌" ; SETJSON($bbot);} 
 if($text == "/start") {
 	bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>"
• مرحبا بك عزيزي ([$name](tg://user?id=$chat_id)) في بوت صنع منشورات لايكات المسابقات

- الايموجي : $emo
- قناة الاشتراك الاجباري : $chis
- كليشة الاشتراك الاجباري : $klish

- اشعار التصويت : $ish
- استخدام الرشق : $rshq 

• ارسل نص او اي نوع من انواع الميديا
", 
'parse_mode'=>"markdown" , 
'disable_web_page_preview'=>true, 
'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     [['text'=>"تعيين كليشة الاشتراك الاجباري",'callback_data'=>"klish" ]], 
       [['text'=>"تعيين قناة الاشتراك الاجباري",'callback_data'=>"setcha" ], ['text'=>"تعيين الاسمايل",'callback_data'=>"emo" ]], 
       [['text'=>"السماح بأستخدام الرشق : $rshq",'callback_data'=>"rshq" ], ['text'=>"استخدام الخصم",'callback_data'=>"xasm" ]],  
       [['text'=>"اشعار التصويت : $ish",'callback_data'=>"ish" ]], 
      ]
    ])
]); return false ;
}
## Namero @S_P_P1 ###
if($data == "back") {
				bot('editMessagetext', [
				'message_id'=>$message_id ,
'chat_id'=>$chat_id,
'text'=>"
• مرحبا بك عزيزي ([$name](tg://user?id=$chat_id)) في بوت صنع منشورات لايكات المسابقات

- الايموجي : $emo
- قناة الاشتراك الاجباري : $chis
- كليشة الاشتراك الاجباري : $klish

- اشعار التصويت : $ish
- استخدام الرشق : $rshq 

• ارسل نص او اي نوع من انواع الميديا
", 
'parse_mode'=>"markdown" , 
'disable_web_page_preview'=>true, 
'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     [['text'=>"تعيين كليشة الاشتراك الاجباري",'callback_data'=>"klish" ]], 
       [['text'=>"تعيين قناة الاشتراك الاجباري",'callback_data'=>"setcha" ], ['text'=>"تعيين الاسمايل",'callback_data'=>"emo" ]], 
       [['text'=>"السماح بأستخدام الرشق : $rshq",'callback_data'=>"rshq" ], ['text'=>"استخدام الخصم",'callback_data'=>"xasm" ]],  
       [['text'=>"اشعار التصويت : $ish",'callback_data'=>"ish" ]], 
      ]
    ])
]); 
$bbot[$from_id]["mode"] = $data ;
SETJSON($bbot) ;
return false ;
				} 
				
				if($data == "ish" or $data == "rshq" ) {
					
					if($bbot[$from_id][$data] == "✅" or $bbot[$from_id][$data] == null) {
						$bbot[$from_id][$data] = "❌" ;
						SETJSON($bbot) ;
						} else {
							$bbot[$from_id][$data] = "✅" ;
							SETJSON($bbot) ;
							} 
							
							$rshq = $bbot[$from_id]["rshq"]??"❌" ;
 $ish = $bbot[$from_id]["ish"]??"✅" ;
				bot('editMessagetext', [
				'message_id'=>$message_id ,
'chat_id'=>$chat_id,
'text'=>"
• مرحبا بك عزيزي ([$name](tg://user?id=$chat_id)) في بوت صنع منشورات لايكات المسابقات

- الايموجي : $emo
- قناة الاشتراك الاجباري : $chis
- كليشة الاشتراك الاجباري : $klish

- اشعار التصويت : $ish
- استخدام الرشق : $rshq 

• ارسل نص او اي نوع من انواع الميديا
", 
'parse_mode'=>"markdown" , 
'disable_web_page_preview'=>true, 
'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     [['text'=>"تعيين كليشة الاشتراك الاجباري",'callback_data'=>"klish" ]], 
       [['text'=>"تعيين قناة الاشتراك الاجباري",'callback_data'=>"setcha" ], ['text'=>"تعيين الاسمايل",'callback_data'=>"emo" ]], 
       [['text'=>"السماح بأستخدام الرشق : $rshq",'callback_data'=>"rshq" ], ['text'=>"استخدام الخصم",'callback_data'=>"xasm" ]],  
       [['text'=>"اشعار التصويت : $ish",'callback_data'=>"ish" ]], 
      ]
    ])
]); 

return false ;
				} 

        $audio                 = $message->audio;
		$audio_file_id         = $message->audio->file_id;
		$video                 = $message->video;
		$video_file_id         = $message->video->file_id;
		$voice                 = $message->voice;
		$voice_file_id         = $message->voice->file_id;
		$photo                 = $message->photo;
		$photo_file_id         = $message->photo[0]->file_id;
		$sticker               = $message->sticker;
		$sticker_file_id       = $message->sticker->file_id;
		$contact               = $message->contact;
		$contact_number        = $message->contact->phone_number;
		$contact_name          = $message->contact->first_name;
		$video_note            = $message->video_note;
		$video_note_file_id    = $message->video_note->file_id;
		$document              = $message->document;
		$document_name         = $document->file_name;
		$document_file_id      = $document->file_id;
		$gif                   = $message->animation;
		$gif_file_id           = $message->animation->file_id;
		$pin                   = $message->pinned_message;
		$pin_id                = $message->pinned_message->from->id;
		$pin_first_name        = $message->pinned_message->from->first_name;
		$pin_tag               = "[$pin_first_name](tg://user?id=$pin_id)";
		$inline                = $message->reply_markup->inline_keyboard;
		$entities              = $message->entities;
		$location              = $message->location;
		$location_file_id      = $message->location->file_id;
		
		
		if($data == "klish") {
				bot('editMessagetext', [
				'message_id'=>$message_id ,
'chat_id'=>$chat_id,
'text'=>"
ارسل كليشة الاشتراك الاجباري التي تريد وضعها .
", 
'parse_mode'=>"markdown" , 
'disable_web_page_preview'=>true, 
'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     [['text'=>"رجوع",'callback_data'=>"back" ]], 
       
      ]
    ])
]); 
$bbot[$from_id]["mode"] = $data ;
SETJSON($bbot) ;
return false ;
				} 
				
				if($text and $bbot[$from_id]["mode"] == "klish") {
					bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>"
• تم حفظ الكليشة بنجاح
", 
'parse_mode'=>"markdown" , 
'disable_web_page_preview'=>true, 
'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     [['text'=>"رجوع",'callback_data'=>"back" ]], 
       
      ]
    ])
]); 
$bbot[$from_id]["klish"] = $text;
$bbot[$from_id]["mode"] = null ;
SETJSON($bbot) ;
return false ;
					} 
					
					if($data == "xasm") {
				bot('editMessagetext', [
				'message_id'=>$message_id ,
'chat_id'=>$chat_id,
'text'=>"
ارسل كود المنشور الان . 
", 
'parse_mode'=>"markdown" , 
'disable_web_page_preview'=>true, 
'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     [['text'=>"رجوع",'callback_data'=>"back" ]], 
       
      ]
    ])
]); 
$bbot[$from_id]["mode"] = $data ;
SETJSON($bbot) ;
return false ;
				} 
				
				if(is_numeric($text) and $bbot[$from_id]["mode"] == "xasm") {
					
					if(!$bbot[$text]["name"]) {
						bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>"
• يبدو ان الكود خاطء تأكد من الكود 

- الكود عباره عن الكود الذي يعطيك يا بعد ارسال اسم المتسابق للبوت
", 
'parse_mode'=>"markdown" , 
'disable_web_page_preview'=>true, 
'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     [['text'=>"رجوع",'callback_data'=>"back" ]], 
       
      ]
    ])
]); 
						exit;
						} 
						
						$f=strlen(strval($from_id)) + 1;
						for($i=0;$i<$f;$i++){
							$s=$s.$text[$i] ;
							} 
						if ($f == $s) {
						bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>"
• يبدو ان هذا المتسابق ليس بمسابقتك ✅
$s
", 
'parse_mode'=>"markdown" , 
'disable_web_page_preview'=>true, 
'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     [['text'=>"رجوع",'callback_data'=>"back" ]], 
       
      ]
    ])
]); 
						exit;
						} 
						$b = $bbot[$text]["name"] ;
						$v = $bbot[$text]["like"] ;
					bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>"
• تم وجود المتسابق ارسل عدد الاصوات لخصمها من الشخص
- $b 
- اصواته. : $v
", 
'parse_mode'=>"markdown" , 
'disable_web_page_preview'=>true, 
'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     [['text'=>"رجوع",'callback_data'=>"back" ]], 
       
      ]
    ])
]); 
$bbot[$from_id]["xasm"] = $text;
$bbot[$from_id]["mode"] = "S2" ;
SETJSON($bbot) ;
return false ;
					} 
					
					
					
					if(is_numeric($text) and $bbot[$from_id]["mode"] == "S2") {
						$v = $bbot[$bbot[$from_id]["xasm"]]["name"] ;
						bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>"
• تم خصم العدد ($text) من $v.
", 
'parse_mode'=>"markdown" , 
'disable_web_page_preview'=>true, 
'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     [['text'=>"رجوع",'callback_data'=>"back" ]], 
       
      ]
    ])
]); 

$inline = $bbot[$from_id]["xasm"];
mkdir("msabg") ;
	mkdir("msabg/". USR_BOT ) ;
	mkdir("msabg/". USR_BOT. "/". $inline) ;
	$fileName = "msabg/". USR_BOT. "/".$inline."/v.txt";
$fileContent = file_get_contents($fileName);
$lines = explode("\n", $fileContent);
$linesToRemove = 30;
$updatedContent = implode("\n", array_slice($lines, $linesToRemove));
file_put_contents($fileName, $updatedContent);



$text1 = $bbot[$bbot[$from_id]["xasm"]]["like"]-$text ;
$bbot[$bbot[$from_id]["xasm"]]["like"] = $text1 ;
$bbot[$from_id]["mode"] = null ;
SETJSON($bbot) ; 
return false ;
						} 
					
					if($data == "emo") {
				bot('editMessagetext', [
				'message_id'=>$message_id ,
'chat_id'=>$chat_id,
'text'=>"
ارسل الاسمايل الذي تريد وضعه .
", 
'parse_mode'=>"markdown" , 
'disable_web_page_preview'=>true, 
'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     [['text'=>"رجوع",'callback_data'=>"back" ]], 
       
      ]
    ])
]); 
$bbot[$from_id]["mode"] = $data ;
SETJSON($bbot) ;
return false ;
				} 
				
				function containsEmoji($text) {
    return preg_match('/[\x{1F600}-\x{1F64F}\x{1F300}-\x{1F5FF}\x{1F680}-\x{1F6FF}\x{1F700}-\x{1F77F}\x{1F780}-\x{1F7FF}\x{1F800}-\x{1F8FF}\x{1F900}-\x{1F9FF}\x{1FA00}-\x{1FA6F}\x{1FA70}-\x{1FAFF}\x{1FAB0}-\x{1FAD6}\x{1F004}-\x{1F0CF}\x{1F170}-\x{1F251}]/u', $text);
}

				if(containsEmoji($text) and $bbot[$from_id]["mode"] == "emo") {
					bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>"
• تم حفظ الايموجي بنجاح
", 
'parse_mode'=>"markdown" , 
'disable_web_page_preview'=>true, 
'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     [['text'=>"رجوع",'callback_data'=>"back" ]], 
       
      ]
    ])
]); 
$bbot[$from_id]["emo"] = $text;
$bbot[$from_id]["mode"] = null ;
SETJSON($bbot) ;
return false ;
					} 
				
		if($data == "setcha") {
				bot('editMessagetext', [
				'message_id'=>$message_id ,
'chat_id'=>$chat_id,
'text'=>"
قم برفع البوت ادمن في القناة ومن ثم ارسل توجيه من القناة .
", 
'parse_mode'=>"markdown" , 
'disable_web_page_preview'=>true, 
'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     [['text'=>"رجوع",'callback_data'=>"back" ]], 
       
      ]
    ])
]); 
$bbot[$from_id]["mode"] = $data ;
SETJSON($bbot) ;
return false ;
				} 
				
				if($update->message->forward_from_chat->id and $bbot[$from_id]["mode"] == "setcha" ) {
					$mt = json_encode(bot('getChatMember', ['chat_id' => $update->message->forward_from_chat->id, 'user_id' => IDBot]));
		$nt = json_decode($mt, true);
		if ($nt['result']['status'] == "administrator") {
			bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>"
• تم حفظ القناة بنجاح
", 
'parse_mode'=>"markdown" , 
'disable_web_page_preview'=>true, 
'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     [['text'=>"رجوع",'callback_data'=>"back" ]], 
       
      ]
    ])
]); 
$bbot[$from_id]["ch"] = $update->message->forward_from_chat->id;
$bbot[$from_id]["mode"] = null ;
SETJSON($bbot) ;
return false ;
			} else {
				bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>"
• البوت ليس ادمن في القناة
", 
'parse_mode'=>"markdown" , 
'disable_web_page_preview'=>true, 
'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     [['text'=>"رجوع",'callback_data'=>"back" ]], 
       
      ]
    ])
]); 
return false ;
				} 
					} 
					
					
					if($text) {
						
			if($bbot[$from_id]["ch"] == null) {
				
				if($update->message->chat->type != "private") {
						exit;
						} 
				
				bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>"
$dy
", 
'parse_mode'=>"markdown" , 
'disable_web_page_preview'=>true, 
'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     [['text'=>"- تعيين قناة الاشتراك الاجباري -",'callback_data'=>"setcha" ]], 
       
      ]
    ])
]); 
				} else {
					if($data) {exit ;} 
					$rnd = rand(1234567,7654321);
					bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>"
$text
", 
]); 
					bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>"
• `@".bot("getme")->result->username. " ".$from_id."$rnd`
", 
'parse_mode'=>"markdown" , 
'disable_web_page_preview'=>true, 
'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     [['text'=>"• اضغط هنا للمشاركه •",'switch_inline_query'=>"".$from_id."$rnd"]], 
       
      ]
    ])
]); 
$bbot[$from_id. $rnd]["like"] = null ;
$bbot[$from_id. $rnd]["name"] = "$text";
$bbot[$from_id. $rnd]["emo"] = "$emo";
$bbot[$from_id. $rnd]["klish"] = "$klish";
$bbot[$from_id. $rnd]["ch"] = "$chis";
$bbot[$from_id. $rnd]["ish"] = "$ish";
$bbot[$from_id. $rnd]["own"] = "$from_id";
$bbot[$from_id. $rnd]["rshq"] = "$rshq";
SETJSON($bbot) ;
					} 
			} 
			

} 
		
			## Namero @S_P_P1 ###
			$cuser = $update->callback_query->from->username;
$cid = $update->callback_query->from->id;
$data = $update->callback_query->data;
$inline = $update->inline_query->query;
$username = $update->inline_query->from->username;
if($inline){
$ex = $bbot[$inline]["name"];
$like = $bbot[$inline]["like"];
$emo = str_replace("*", null, $bbot[$inline]["emo"]) ;
if($emo and $ex) {
$user = trim($ex[0],"@");
$wh = str_replace($ex[0], $wh, $inline);
bot('answerInlineQuery',[
'inline_query_id'=>$update->inline_query->id,    
'results' => json_encode([[
'type'=>'article',
'id'=>base64_encode(rand(5,555)),
'title'=>"اضغط هنا للارسال.", 'input_message_content'=>['parse_mode'=>'HTML','message_text'=>"$ex"],
'reply_markup'=>['inline_keyboard'=>[
[['text'=>"$like $emo",'callback_data'=>"liked%$inline"]],
]]
]])
]);
}else{
	exit;
	} 
}

$d = explode("%", $data) ;
if($d[0] == "liked") {
	
	$inline = $d[1];
	$ex = $bbot[$inline]["name"];
$like = $bbot[$inline]["like"];
$chx =str_replace("*", null, $bbot[$inline]["ch"]) ;
$own =str_replace("*", null, $bbot[$inline]["own"]) ;
$klish =str_replace("*", null, $bbot[$inline]["klish"]) ;
$emo = str_replace("*", null, $bbot[$inline]["emo"]) ;
if($emo and $ex) {
	$getChatMemberReq = file_get_contents("https://api.telegram.org/bot". API_KEY. "/getChatMember?chat_id=" . $chx . "&user_id=" . $from_id);
			$getChatMemberRes = json_decode($getChatMemberReq, true);
			if ($getChatMemberRes['result']['status'] == "left" ) {
	bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>$klish, 
'show_alert'=>true, 
]);
return false ;
} else {
	if($update->callback_query->from->language_code != "ar") {
		if($bbot[$inline]["rshq"] == "❌") {
		bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"عذرا ولكن التصويت بحسابات en ممنوع في المسابقه ✅" , 
'show_alert'=>true , 
]);
return false ;
} 
		} 
		$lan = $update->callback_query->from->language_code ;
	mkdir("msabg") ;
	mkdir("msabg/". USR_BOT ) ;
	mkdir("msabg/". USR_BOT. "/". $inline) ;
	$Z = "msabg/". USR_BOT. "/".$inline."/v.txt";
	$like = $bbot[$inline]["like"]+1;
	if(!in_array($from_id, explode("\n", file_get_contents($Z)))) {
	bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"تم تسجيل اعجابك بنجاح." , 
'show_alert'=>false, 
]);
$db_id = $update->callback_query;
$in_id = $db_id->inline_message_id;

bot('editMessageReplyMarkup',[
			'inline_message_id'=>$in_id,
			'reply_markup'=>json_encode([
				'inline_keyboard'=>[
				[['text'=>"$like $emo $lang",'callback_data'=>"liked%$inline"]],
                
				]
				])
			]);
			
			$ns =str_replace("*", null, $bbot[$inline]["name"]) ;
			if($bbot[$inline]["ish"]) {
				bot('sendMessage', [
'chat_id'=>$own,
'text'=>"
• تصويت جديد على المنشور ($emo) :
$ns
----------------
- اسم المستخدم : [$name](tg://user?id=$from_id) 
- ايدي المستخدم : `$from_id`
- معرف المستخدم : $user
- لغه الجهاز : $lan

• عدد الاصوات الكلي : $like
", 
'parse_mode'=>"markdown" , 
'disable_web_page_preview'=>true, 

]); 
				} 
$bbot[$inline]["like"] +=1;
SETJSON($bbot) ;
file_put_contents($Z, file_get_contents($Z). "\n$from_id") ;
return false ;
} else {
	bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"تم سحب تصويتك بنجاح. " , 
'show_alert'=>false, 
]);
$like = $bbot[$inline]["like"] - 1;
$db_id = $update->callback_query;
$in_id = $db_id->inline_message_id;
bot('editMessageReplyMarkup',[
			'inline_message_id'=>$in_id,
			'reply_markup'=>json_encode([
				'inline_keyboard'=>[
				[['text'=>"$like $emo",'callback_data'=>"liked%$inline"]],
                
				]
				])
			]);
$bbot[$inline]["like"] -=1;
SETJSON($bbot) ;
file_put_contents($Z, str_replace($from_id, null, file_get_contents($Z)));
return false ;
	} 
	} 
} 
	}
	
	## Namero @S_P_P1 ###
	