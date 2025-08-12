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
$forward = file_get_contents("forward.php");
$midea = file_get_contents("midea.php");
$inlin = file_get_contents("inlin.php");
$photoi = file_get_contents("photoi.php");
$upq = file_get_contents("up.php");
$skor = file_get_contents("skor.php");

$admin = 8121189750; #ايديك تلي
## Namero @S_P_P1 ###
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$from_id = $message->from->id;
$chat_id = $message->chat->id;
$text = $message->text;
$message_id = $message->message_id;
$message_id = $update->message->message_id;
$first_name = $message->from->first_name;
$username = $message->from->username;
//\\
$data = $update->callback_query->data;
$chat_id2 = $update->callback_query->message->chat->id;
$message_id2 = $update->callback_query->message->message_id;
$chat= $update->channel_post->chat->id;
$name = $message->from->first_name;
$name_admen = $update->name_admen; 
$text1 = $update->channel_post->text;
$from_id = $update->channel_post->from->id;
$id_admen = $update->chat_member->from->id; 
$name_admen = $update->chat_member->from->first_name;
$user_admen = $update->chat_member->from->username;
$ban = $update->chat_member->new_chat_member->status;
$chatban = $update->chat_member->chat->id;
$ban_id = $update->chat_member->old_chat_member->user->id; 
$ban_name = $update->chat_member->old_chat_member->user->first_name;
$ban_user = $update->chat_member->old_chat_member->user->username;
$tt = json_decode(file_get_contents('php://input'))->my_chat_member->old_chat_member->can_promote_members; 
$ccc = json_decode(file_get_contents('php://input'))->my_chat_member->chat->id;
$admen = json_decode(file_get_contents('php://input'))->my_chat_member->from->id;
$ba = json_decode(file_get_contents('php://input'))->my_chat_member->new_chat_member->can_promote_members;
$viruss = json_encode(['message', 'edited_message', 'channel_post', 'edited_channel_post', 'inline_query', 'chosen_inline_result', 'callback_query', 'shipping_query', 'pre_checkout_query', 'poll', 'poll_answer', 'my_chat_member', 'chat_member']); file_get_contents("https://api.telegram.org/bot$token/setwebhook?max_connections=100&allowed_updates=" . $viruss . "&drop_pending_updates=true&url=https://$host");
//\\
$update->channel_post;
$chid = $update->channel_post->chat->id;
$chtext = $update->channel_post->text;
$messageid= $update->channel_post->message_id;
$document = $update->channel_post->document;
$sticker= $update->channel_post->sticker;
$photo= $update->channel_post->photo;
$video= $update->channel_post->video;
$forward= $update->channel_post->forward_from_chat;
$contact= $update->channel_post->contact;
$audio= $update->channel_post->audio;
//\\
$documents = "المتحركة";
$stickers = "الملصقات";
$photos = "الصور";
$videos = "الفيديو";
$forwards = "التوجيه";
$contacts = "المواقع";
$audios = "الصوت";
$links = "الروابط";
$usernames = "المعرفات";
//\\
mkdir ("data");
//\\

if($text == '/start'){
bot('sendphoto',[
'chat_id'=>$chat_id,
'photo'=>"https://t.me/gdydyk/2",
'caption'=>"*❍︙أهلا بك عزيزي ⦗ $name ⦘
❍︙في بوت حمايه القنوات من التفليش
❍︙اضف البوت إلى قناتك 
❍︙ثم قم بـرفعه ⦗ مشرف ⦘
❍︙ثم ارسل ⦗ تفعيل ⦘
❍︙قم بتفعيل جميع الصلاحيات للبوت
❍︙لكي يعمل بشكل صحيح وبدون مشاكل*",
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'- الاوامر .' ,'callback_data'=>"cmd"],['text'=>"- المطور .",'url'=>"t.me/USER-NAME"]],
[['text'=>"- اضف البوت لقناتك .",'url'=>"https://t.me/GEIEZBot?startchannel"]],
]])]);}
if($data == "back" ){
bot('EditMessageCaption',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'photo' =>"https://t.me/gdydyk/2",
'caption'=>'*❍︙أهلا بك عزيزي ⦗ $name ⦘
❍︙في بوت حمايه القنوات من التفليش
❍︙اضف البوت إلى قناتك 
❍︙ثم قم بـرفعه ⦗ مشرف ⦘
❍︙ثم ارسل ⦗ تفعيل ⦘
❍︙قم بتفعيل جميع الصلاحيات للبوت
❍︙لكي يعمل بشكل صحيح وبدون مشاكل*',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'- الاوامر .' ,'callback_data'=>"cmd"],['text'=>"- المطور .",'url'=>"t.me/USER-NAME"]],
[['text'=>"- اضف البوت لقناتك .",'url'=>"https://t.me/GEIEZBot?startchannel"]],
]])]);}
if($data == "cmd" ){
bot('EditMessageCaption',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'photo' =>"https://t.me/gdydyk/2",
'caption'=>'*
✰︙⦗ م1 ⦘ اوامر حمايه القناة

✰︙⦗ م2 ⦘ اوامر الحماية من التفليش
*',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"⦗ م1 ⦘",'callback_data'=>"m1"],['text'=>"⦗ م2 ⦘",'callback_data'=>"m2"]],
[['text'=>"- رجوع .",'callback_data'=>"back"]],
[['text'=>"- اضف البوت لقناتك .",'url'=>"https://t.me/GEIEZBot?startchannel"]],
]])]);}
if($data == "m1" ){
bot('EditMessageCaption',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'photo' =>"https://t.me/gdydyk/2",
'caption'=>'*
✰︙❨ م1 ❩ اوامر حماية القناه ↡↡
┈┈┈┈┈┈┈┈┈┈┈┈┈┈┈┈┈┈┈┈┈┈┈
✰︙ قفل ⊰ فتح + الامر 
┈┈┈┈┈┈┈┈┈┈┈┈┈┈┈┈┈┈┈┈┈┈┈
✰︙ المتحركه
✰︙ الملصقات
✰︙الصور
✰︙الفيديوهات
✰︙ التوجيه
✰︙ المواقع
✰︙ الصوت
✰︙ الروابط
✰︙ المعرفات
┈┈┈┈┈┈┈┈┈┈┈┈┈┈┈┈┈┈┈┈┈┈┈
*',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"- رجوع .",'callback_data'=>"cmd"]],
[['text'=>"- اضف البوت لقناتك .",'url'=>"https://t.me/GEIEZBot?startchannel"]],
]])]);}
if($data == "m2" ){
bot('EditMessageCaption',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'photo' =>"https://t.me/gdydyk/2",
'caption'=>'*
✰︙❨ م2 ❩ اوامر حماية القناه من التفليش ↡↡
┈┈┈┈┈┈┈┈┈┈┈┈┈┈┈┈┈┈┈┈┈┈┈

✰︙اولا ارسل تفعيل لكي يعمل بنجاح

✰︙ ارسل /admin ثم ايدي العضو

✰︙ مثال /admin 1427981991
*',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"- رجوع .",'callback_data'=>"cmd"]],
[['text'=>"- اضف البوت لقناتك .",'url'=>"https://t.me/GEIEZBot?startchannel"]],
]])]);}

if($ccc and $tt){
bot('sendmessage',[
'chat_id'=>$ccc,
'text'=>"- ارفع البوت بصلاحيه اضافه مشرفين ثم اضفني مره اخره ."]); 
bot('leaveChat',[
'chat_id'=>$ccc
]);
}
if($ccc and $ba){
} else{ 
if($ccc){
bot('sendmessage',[
'chat_id'=>$ccc,
'text'=>"- ارفع البوت بصلاحيه اضافه مشرفين ثم اضفني مره اخره ."]); 
bot('leaveChat',[
'chat_id'=>$ccc
]);
}} 
if($ban=="kicked"){
bot('sendmessage',[
'chat_id'=>$chatban, 
'text'=>"•––––––––⦗ @GEIEZBot ⦘–––––––•
❍︙تم حظر عضو بواسطه احد الادمنيه  .

↫︙يوزر الادمن ↫ ⦗ @$user_admen ⦘
↫︙اسم المشرف ↫ ⦗ $name_admen ⦘
↫︙ايدي المشرف ↫⦗ $id_admen ⦘ 

❍︙⦗ العضو المحظور 👤 ⦘ . 

↫︙اليوزر ↫⦗ @$ban_user ⦘
↫︙الاسم ↫⦗ $ban_name ⦘
↫︙الايدي ↫⦗ $ban_id ⦘
 •––––––––⦗ @GEIEZBot ⦘–––––––•"
]);
bot('promoteChatMember',[
'user_id'=>$id_admen,
'chat_id'=>$chatban, 
"can_change_info"=>false, 
"can_post_messages"=>false, 
"can_edit_messages"=>false, 
"can_delete_messages"=>false, 
"can_invite_users"=>false, 
"can_restrict_members"=>false, 
"can_pin_messages"=>false, 
"can_manage_video_chats"=>false, 
"can_promote_members"=>false
]); 
bot('sendmessage',[
'chat_id'=>$chatban, 
'text'=>"❍︙عزيزي المالك .
❍︙لقد قام احد الادمنيه بطرد عضو .
❍︙وقمت بتنزيله من الادمنيه للأمان ."
]);
}
$admen = str_replace("/admin ","",$text1);
if($text1 == "/admin $admen"){
bot('promoteChatMember',[
'user_id'=>"$admen", 
'chat_id'=>$chat, 
"can_change_info"=>false, 
"can_post_messages"=>true, 
"can_edit_messages"=>false, 
"can_delete_messages"=>false, 
"can_invite_users"=>true, 
"can_restrict_members"=>false, 
"can_pin_messages"=>true, 
"can_manage_video_chats"=>true, 
"can_promote_members"=>false
]); 
bot('sendmessage',[
'chat_id'=>$chat,
'text'=>"- تم رفعه ادمن ."
]); 
}
if($text1 == "تنزيل الكل"){
$up = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatAdministrators?chat_id=$chat"),true);
$result = $up["result"];
foreach($result as $key=>$value){
$found = $result[$key]["status"];
if($found == "creator"){
$owner = $result[$key]["user"]["id"];
$owner2 = $result[$key]["user"]["id"];
}
if($found == "administrator"){
if($result[$key]["user"]["first_name"] == true){
$innames = str_replace(['[',']'],'',$result[$key]["user"]["id"]);
$msg = $msg.""."virus"."$innames";
}
}
}
$virus = explode("virus","$msg");
foreach($virus as $i){
bot('promoteChatMember',[
'user_id'=>$i, 
'chat_id'=>$chat, 
"can_change_info"=>false, 
"can_post_messages"=>false, 
"can_edit_messages"=>false, 
"can_delete_messages"=>false, 
"can_invite_users"=>false, 
"can_restrict_members"=>false, 
"can_pin_messages"=>false, 
"can_promote_members"=>false
]); 
}
bot('sendmessage',[
'chat_id'=>$chat,
'text'=>"- تم تنزيل جميع الادمنيه المرفوعين عبر البوت ."
]); 
}
#تم ازاله الميزه لعيون طه وللأمان والثقه
$json_security_channels = json_decode(file_get_contents("data/$chid.json"),true);
if($json_security_channels["lock"]["document"] == "close"){
if(isset($document )){
bot('deletemessage',[
'chat_id'=>$chid,
'message_id'=>$messageid
]);
}
}
if($json_security_channels["lock"]["sticker"] == "close"){
if(isset($sticker )){
bot('deletemessage',[
'chat_id'=>$chid,
'message_id'=>$messageid
]);
}
}
if($json_security_channels["lock"]["photo"] == "close"){
if(isset($photo )){
bot('deletemessage',[
'chat_id'=>$chid,
'message_id'=>$messageid
]);
}
}
if($json_security_channels["lock"]["video"] == "close"){
if(isset($video )){
bot('deletemessage',[
'chat_id'=>$chid,
'message_id'=>$messageid
]);
}
}
if($json_security_channels["lock"]["forward"] == "close"){
if(isset($forward )){
bot('deletemessage',[
'chat_id'=>$chid,
'message_id'=>$messageid
]);
}
}
if($json_security_channels["lock"]["contact"] == "close"){
if(isset($contact )){
bot('deletemessage',[
'chat_id'=>$chid,
'message_id'=>$messageid
]);
}
}
if($json_security_channels["lock"]["audio"] == "close"){
if(isset($audio )){
bot('deletemessage',[
'chat_id'=>$chid,
'message_id'=>$messageid
]);
}
}
if($json_security_channels["lock"]["link"] == "close"){
if(preg_match('/^(.*)([Hh]ttp|[Hh]ttps|t.me)(.*)|([Hh]ttp|[Hh]ttps|t.me)(.*)|(.*)([Hh]ttp|[Hh]ttps|t.me)|(.*)[Tt]elegram.me(.*)|[Tt]elegram.me(.*)|(.*)[Tt]elegram.me|(.*)[Tt].me(.*)|[Tt].me(.*)|(.*)[Tt].me|(.*)telesco.me|telesco.me(.*)/i',$update->channel_post->text)){
bot('deleteMessage',[
'chat_id'=>$chid,
'message_id'=>$messageid
]);
}
}
if($json_security_channels["lock"]["username"] == "close"){
if (strstr($text ,"@") == true or strstr($caption,"@") == true) {
bot('deletemessage',[
'chat_id'=>$chid,
'message_id'=>$messageid
]);
}
}
if($chtext == "تفعيل" ){
$json_security_channels = '{"lock": {"document": "open" "username": "open" "photo": "open" "link": "open" "video": "open" "forward": "open" "contact": "open" "audio": "open" "sticker": "open"},}';
$json_security_channels = json_decode($json_security_channels,true);
$json_security_channels = json_encode($json_security_channels,true);
file_put_contents("data/$chid.json",$json_security_channels);
bot('sendmessage',[
'chat_id'=>$chid,
'text'=>"
❍︙ تم تفعيل البوت في القناة
❍︙ ايدي القناة `$chid`
",'parse_mode'=>"markdown",
'reply_to_message_id'=>$messageid,
]);
}
## Namero @S_P_P1 ###
if($chtext =="قفل الصور" ){
$json_security_channels["lock"]["photo"]="close";
$json_security_channels = json_encode($json_security_channels,true);
file_put_contents("data/$chid.json",$json_security_channels);
bot('sendmessage',[
'chat_id'=>$chid,
'text'=>"☑️︙ تم قفل $photos بنجاح ",
'reply_to_message_id'=>$messageid,
]);
}
if($chtext =="فتح الصور" ){
$json_security_channels["lock"]["photo"]="open";
$json_security_channels = json_encode($json_security_channels,true);
file_put_contents("data/$chid.json",$json_security_channels);
bot('sendmessage',[
'chat_id'=>$chid,
'text'=>"☑️︙ تم فتح $photos بنجاح ",
'reply_to_message_id'=>$messageid,
]);
}
if($chtext =="قفل الفيديو" ){
$json_security_channels["lock"]["video"]="close";
$json_security_channels = json_encode($json_security_channels,true);
file_put_contents("data/$chid.json",$json_security_channels);
bot('sendmessage',[
'chat_id'=>$chid,
'text'=>"☑️︙ تم قفل $videos بنجاح ",
'reply_to_message_id'=>$messageid,
]);
}
if($chtext =="فتح الفيديو" ){
$json_security_channels["lock"]["video"]="open";
$json_security_channels = json_encode($json_security_channels,true);
file_put_contents("data/$chid.json",$json_security_channels);
bot('sendmessage',[
'chat_id'=>$chid,
'text'=>"☑️︙ تم فتح $videos بنجاح ",
'reply_to_message_id'=>$messageid,
]);
}
if($chtext =="قفل الملصقات" ){
$json_security_channels["lock"]["sticker"]="close";
$json_security_channels = json_encode($json_security_channels,true);
file_put_contents("data/$chid.json",$json_security_channels);
bot('sendmessage',[
'chat_id'=>$chid,
'text'=>"☑️︙ تم قفل $stickers بنجاح ",
'reply_to_message_id'=>$messageid,
]);
}
if($chtext =="فتح الملصقات" ){
$json_security_channels["lock"]["sticker"]="open";
$json_security_channels = json_encode($json_security_channels,true);
file_put_contents("data/$chid.json",$json_security_channels);
bot('sendmessage',[
'chat_id'=>$chid,
'text'=>"☑️︙ تم فتح $stickers بنجاح ",
'reply_to_message_id'=>$messageid,
]);
}
if($chtext =="قفل المتحركة" ){
$json_security_channels["lock"]["document"]="close";
$json_security_channels = json_encode($json_security_channels,true);
file_put_contents("data/$chid.json",$json_security_channels);
bot('sendmessage',[
'chat_id'=>$chid,
'text'=>"☑️︙ تم قفل $documents بنجاح ",
'reply_to_message_id'=>$messageid,
]);
}
if($chtext =="فتح المتحركة" ){
$json_security_channels["lock"]["document"]="open";
$json_security_channels = json_encode($json_security_channels,true);
file_put_contents("data/$chid.json",$json_security_channels);
bot('sendmessage',[
'chat_id'=>$chid,
'text'=>"☑️︙ تم فتح $documents بنجاح ",
'reply_to_message_id'=>$messageid,
]);
}
if($chtext =="قفل التوجيه" ){
$json_security_channels["lock"]["forward"]="close";
$json_security_channels = json_encode($json_security_channels,true);
file_put_contents("data/$chid.json",$json_security_channels);
bot('sendmessage',[
'chat_id'=>$chid,
'text'=>"☑️︙ تم قفل $forwards بنجاح ",
'reply_to_message_id'=>$messageid,
]);
}
if($chtext =="فتح التوجيه" ){
$json_security_channels["lock"]["forward"]="open";
$json_security_channels = json_encode($json_security_channels,true);
file_put_contents("data/$chid.json",$json_security_channels);
bot('sendmessage',[
'chat_id'=>$chid,
'text'=>"☑️︙ تم فتح $forwards بنجاح ",
'reply_to_message_id'=>$messageid,
]);
}
if($chtext =="قفل الصوت" ){
$json_security_channels["lock"]["audio"]="close";
$json_security_channels = json_encode($json_security_channels,true);
file_put_contents("data/$chid.json",$json_security_channels);
bot('sendmessage',[
'chat_id'=>$chid,
'text'=>"☑️︙ تم قفل $audios بنجاح ",
'reply_to_message_id'=>$messageid,
]);
}
if($chtext =="فتح الصوت" ){
$json_security_channels["lock"]["audio"]="open";
$json_security_channels = json_encode($json_security_channels,true);
file_put_contents("data/$chid.json",$json_security_channels);
bot('sendmessage',[
'chat_id'=>$chid,
'text'=>"☑️︙ تم فتح $audios بنجاح ",
'reply_to_message_id'=>$messageid,
]);
}
if($chtext =="قفل الموقع" ){
$json_security_channels["lock"]["contact"]="close";
$json_security_channels = json_encode($json_security_channels,true);
file_put_contents("data/$chid.json",$json_security_channels);
bot('sendmessage',[
'chat_id'=>$chid,
'text'=>"☑️︙ تم قفل $contacts بنجاح ",
'reply_to_message_id'=>$messageid,
]);
}
if($chtext =="فتح الموقع" ){
$json_security_channels["lock"]["contact"]="open";
$json_security_channels = json_encode($json_security_channels,true);
file_put_contents("data/$chid.json",$json_security_channels);
bot('sendmessage',[
'chat_id'=>$chid,
'text'=>"☑️︙ تم فتح $contacts بنجاح ",
'reply_to_message_id'=>$messageid,
]);
}
if($chtext =="قفل الروابط" ){
$json_security_channels["lock"]["link"]="close";
$json_security_channels = json_encode($json_security_channels,true);
file_put_contents("data/$chid.json",$json_security_channels);
bot('sendmessage',[
'chat_id'=>$chid,
'text'=>"☑️︙ تم قفل $links بنجاح ",
'reply_to_message_id'=>$messageid,
]);
}
if($chtext =="فتح الروابط" ){
$json_security_channels["lock"]["link"]="open";
$json_security_channels = json_encode($json_security_channels,true);
file_put_contents("data/$chid.json",$json_security_channels);
bot('sendmessage',[
'chat_id'=>$chid,
'text'=>"☑️︙ تم فتح $links بنجاح ",
'reply_to_message_id'=>$messageid,
]);
}
if($chtext =="قفل المعرفات" ){
$json_security_channels["lock"]["username"]="close";
$json_security_channels = json_encode($json_security_channels,true);
file_put_contents("data/$chid.json",$json_security_channels);
bot('sendmessage',[
'chat_id'=>$chid,
'text'=>"☑️︙ تم قفل $usernames بنجاح ",
'reply_to_message_id'=>$messageid,
]);
}
if($chtext =="فتح المعرفات" ){
$json_security_channels["lock"]["username"]="open";
$json_security_channels = json_encode($json_security_channels,true);
file_put_contents("data/$chid.json",$json_security_channels);
bot('sendmessage',[
'chat_id'=>$chid,
'text'=>"☑️︙ تم فتح $usernames بنجاح ",
'reply_to_message_id'=>$messageid,
]);
}
## Namero @S_P_P1 ###