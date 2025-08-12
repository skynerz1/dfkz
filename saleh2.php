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
## Namero @S_P_P1 ###
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
[['text'=>'اعدادات البوت','callback_data'=>'cbc']]
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
[['text'=>'اعدادات البوت','callback_data'=>'cbc']]
]])
]);
}
## Namero @S_P_P1 ###
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
## Namero @S_P_P1 ###
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$id = $message->from->id;
$chat_id = $message->chat->id;
$text = $message->text;
$user = $message->from->username;
if(isset($update->callback_query)){
  $chat_id = $update->callback_query->message->chat->id;
  $message_id = $update->callback_query->message->message_id;
  $data = $update->callback_query->data;
 $user = $update->callback_query->from->username;
$sales = json_decode(file_get_contents('sales.json'),true);
$buttons = json_decode(file_get_contents('button.json'),true);
}
function save($array){
file_put_contents('sales.json', json_encode($array));
}
$city=array("afghanistan","albania","algeria","angola","antiguaandbarbuda","argentina","armenia","australia","austria","azerbaijan","bahrain","bangladesh","barbados","belarus","belgium","benin","bhutane","bih","bolivia","botswana","brazil","bulgaria","burkinafaso","burundi","cambodia","cameroon","canada","caymanislands","chad","china","colombia","congo","costarica","croatia","cyprus","czech","djibouti","dominicana","easttimor","ecuador","egypt","england","equatorialguinea","estonia","ethiopia","finland","france","frenchguiana","gabon","gambia","georgia","germany","ghana","guadeloupe","guatemala","guinea","guineabissau","guyana","haiti","honduras","hungary","india","indonesia","iran","iraq","ireland","israel","italy","ivorycoast","jamaica","jordan","kazakhstan","kenya","kuwait","laos","latvia","lesotho","liberia","libya","lithuania","luxembourg","macau","madagascar","malawi","malaysia","maldives","mali","mauritania","mauritius","mexico","moldova","mongolia","montenegro","morocco","mozambique","myanmar","namibia","nepal","netherlands","newzealand","nicaragua","nigeria","norway","oman","pakistan","panama","papuanewguinea","paraguay","peru","philippines","poland","portugal","puertorico","qatar","reunion","romania","russia","rwanda","saintkittsandnevis","saintlucia","saintvincentandgrenadines","salvador","saudiarabia","senegal","serbia","sierraleone","slovakia","slovenia","somalia","southafrica","spain","srilanka","sudan","suriname","swaziland","sweden","switzerland","syria","taiwan","tajikistan","tanzania","thailand","tit","togo","tunisia","turkey","turkmenistan","uae","uganda","ukraine","uruguay","usa","uzbekistan","venezuela","vietnam","yemen","zambia","zimbabwe");
$cities="
{`yemen`}  =  🇾🇪 اليمن 
  {`afghanistan`}  =  🇦🇫| أفغانستان 
  {`albania`}  =  🇦🇱| ألبانيا 
  {`algeria`}  =  🇩🇿| الجزائر   
  {`angola`}  =  🇦🇴| أنغولا   
  {`antiguaandbarbuda`}  =  🇦🇬| انتيغوا وباربودا   
  {`argentina`}  =  🇦🇷| الأرجنتين   
  {`armenia`}  =  🇦🇲| أرمينيا   
  {`australia`}  =  🇦🇺| أستراليا  
  {`austria`}  =  🇦🇹| النمسا 
  {`azerbaijan`}  =  🇦🇿| أذربيجان
  {`bahrain`}  =  🇧🇭| البحرين 
  {`bangladesh`}  =  🇧🇩| بنغلادش 
  {`barbados`}  =  🇧🇧| باربادوس   
  {`belarus`}  =  🇧🇾| بيلاروسيا 
  {`belgium`}  =  🇧🇪| بلجيكا 
  {`benin`}  =  🇧🇯| بنين 
  {`bhutane`}  =  🇧🇹| بوتان 
  {`bih`}  =  🇧🇦| البوسنة والهرسك 
  {`bolivia`}  =  🇧🇴| بوليفيا   
  {`botswana`}  =  🇧🇼| بوتسوانا  
  {`brazil`}  =  🇧🇷| البرازيل   
  {`bulgaria`}  =  🇧🇬| بلغاريا  
  {`burkinafaso`}  =  🇧🇫| بوركينا فاسو   
  {`burundi`}  =  🇧🇮| بوروندي 
  {`cambodia`}  =  🇰🇭| كمبوديا   
  {`cameroon`}  =  🇨🇲| الكاميرون  
  {`canada`}  =  🇨🇦| كندا   
  {`chad`}  =  🇹🇩| تشاد  
  {`china`}  =  🇨🇳| الصين   
  {`colombia`}  =  🇨🇴| كولومبيا  
  {`congo`}  =  🇨🇩| الكونغو  
  {`costarica`}  =  🇨🇷| كوستا ريكا   
  {`croatia`}  =  🇭🇷| كرواتيا 
  {`cyprus`}  =  🇨🇾| قبرص   
  {`czech`}  =  🇨🇿| التشيك   
  {`djibouti`}  =  🇩🇯| جيبوتي   
  {`dominicana`}  =  🇩🇲| دومينيكا  
  {`easttimor`}  =  🇹🇱| تيمور 
  {`ecuador`}  =  🇪🇨| الإكوادور 
  {`egypt`}  =  🇪🇬| مصر 
  {`england`}  =  🇬🇧| انجلترا  
  {`equatorialguinea`}  =  🇬🇶| غينيا الاستوائية  
  {`estonia`}  =  🇪🇪| إستونيا   
  {`ethiopia`}  =  🇪🇹| إثيوبيا  
  {`finland`}  =  🇫🇮| فنلندا  
  {`frenchguiana`}  =  🇬🇫| غويانا الفرنسية   
  {`gabon`}  =  🇬🇦| الغابون 
  {`gambia`}  =  🇬🇲| غامبيا   
  {`georgia`}  =  🇬🇪| جورجيا   
  {`germany`}  =  🇩🇪| ألمانيا  
  {`ghana`}  =  🇬🇭| غانا   
  {`guadeloupe`}  =  🇬🇵| غوادلوب 
  {`guatemala`}  =  🇬🇹| غواتيمالا   
  {`guinea`}  =  🇬🇳| غينيا  
  {`guineabissau`}  =  🇬🇼| غينيا بيساو  
  {`guyana`}  =  🇬🇫| غويانا  
  {`haiti`}  =  🇭🇹| هايتي  
  {`honduras`}  =  🇭🇳| هندوراس 🇭🇳
  {`hungary`}  =  🇭🇺| هنغاريا   
  {`india`}  =  🇮🇳| الهند   
  {`indonesia`}  =  🇮🇩| إندونيسيا   
  {`iraq`}  =  🇮🇶| العراق  
  {`ireland`}  =  🇮🇪| ايرلندا   
  {`italy`}  =  🇮🇹| ايطاليا   
  {`mongolia`}  =  🇲🇳| منغوليا   
  {`montenegro`}  =  🇲🇪| الجبل الأسود   
  {`jordan`}  =  🇯🇴| الأردن   
  {`kazakhstan`}  =  🇰🇿| كازاخستان  
  {`kenya`}  =  🇰🇪| كينيا  
  {`kuwait`}  =  🇰🇼| الكويت 
  {`latvia`}  =  🇱🇻| لاتفيا   
  {`liberia`}  =  🇱🇷| ليبيريا  
  {`libya`}  =  🇱🇾| ليبيا  
  {`luxembourg`}  =  🇱🇺| لوكسمبورغ   
  {`macau`}  =  🇲🇴| ماكاو  
  {`madagascar`}  =  🇲🇬| مدغشقر  
  {`malaysia`}  =  🇲🇾| ماليزيا  
  {`maldives`}  =  🇲🇻| جزر المالديف 
  {`mauritania`}  =  🇲🇷| موريتانيا  
  {`mexico`}  =  🇲🇽| المكسيك 
  {`morocco`}  =  🇲🇦| المغرب   
  {`nepal`}  =  🇳🇵| نيبال   
  {`newzealand`}  =  🇳🇿| نيوزيلاندا   
  {`nigeria`}  =  🇳🇬| نيجيريا   
  {`oman`}  =  🇴🇲| عمان   
  {`pakistan`}  =  🇵🇰| باكستان   
  {`paraguay`}  =  🇵🇾| باراغواي   
  {`poland`}  =  🇵🇱| بولندا  
  {`portugal`}  =  🇵🇹| البرتغال   
  {`qatar`}  =  🇶🇦| قطر  
  {`russia`}  =  🇷🇺| روسيا  
  {`saudiarabia`}  =  🇸🇦| السعودية  
  {`serbia`}  =  🇷🇸| صربيا   
  {`somalia`}  =  🇸🇴|الصومال   
  {`spain`}  =  🇪🇸| اسبانيا   
  {`sudan`}  =  🇸🇩| السودان   
  {`syria`}  =  🇸🇾| سوريا   
  {`tunisia`}  =  |🇹🇳 تونس   
  {`turkey`}  =  |🇹🇷 تركيا  
  {`uae`}  =  🇦🇪| الامارات   
  {`usa`}  =  🇺🇸| الولايات المتحدة 
";

$adminnn = "ADMIN-ID";//ايديك
$admin_id = ADMIN-ID; // ID الخاص بالادمن
$config = json_decode(file_get_contents('config.json'), true);
$tokensim = $config['tokensim']; 
$ch = $config['ch']; 

$rssed = filter_var(file_get_contents("https://api-jack.ml/api-5sim/coin?key=$tokensim"), FILTER_SANITIZE_NUMBER_INT);
$me = bot('getme',['bot'])->result->username;
$sales = json_decode(file_get_contents('sales.json'), 1);

if ($text == "/admin" && $chat_id == $admin_id) {
    bot('sendMessage', [
        'chat_id' => $chat_id,
        'text' => "🛠️ مرحبًا بك في لوحة التحكم:
1. عرض التوكن الحالي 🔍
2. تغيير التوكن ✍️
3. إنشاء نسخة احتياطية 📄
4. رصيدك في الموقع 💰",
        'reply_markup' => json_encode([
            'inline_keyboard' => [
                [['text' => 'عرض التوكن الحالي 🔍', 'callback_data' => 'show_token']],
                [['text' => 'تغيير التوكن ✍️', 'callback_data' => 'change_token']],
                [['text' => 'إنشاء نسخة احتياطية 📄', 'callback_data' => 'pointsfile']],
                [['text' => 'رصيدك في الموقع 💰', 'callback_data' => 'check_balance']]
            ]
        ])
    ]);
}

// عرض التوكن الحالي
if ($data == "show_token") {
    bot('EditMessageText', [
        'chat_id' => $chat_id,
        'message_id' => $message_id,
        'text' => "🔑 التوكن الحالي هو: `$tokensim`",
        'parse_mode' => 'Markdown'
    ]);
}

// تغيير التوكن
// تغيير التوكن
if ($data == "change_token") {
    file_put_contents("step.txt", "set_token");
    bot('EditMessageText', [
        'chat_id' => $chat_id,
        'message_id' => $message_id,
        'text' => "✍️ من فضلك، أرسل التوكن الجديد:"
    ]);
}

// استقبال التوكن الجديد وتحديثه في الملف
if (file_get_contents("step.txt") == "set_token" && $chat_id == $admin_id && isset($text) && $text != "") {
    // التأكد من أن النص ليس فارغًا
    if ($text !== "/admin" && $text !== "/start") {
        $config['tokensim'] = $text;
        file_put_contents('config.json', json_encode($config, JSON_PRETTY_PRINT));
        file_put_contents("step.txt", "none");
        bot('sendMessage', [
            'chat_id' => $chat_id,
            'text' => "✅ تم تحديث التوكن بنجاح إلى: `$text`",
            'parse_mode' => 'Markdown'
        ]);
    } else {
        // إذا تم إرسال رسالة غير صحيحة
        bot('sendMessage', [
            'chat_id' => $chat_id,
            'text' => "❌ من فضلك، أرسل التوكن الصحيح وليس أمرًا.",
        ]);
    }
}

// إنشاء نسخة احتياطية
if ($data == "pointsfile") {
    $user = file_get_contents("sales.json");
    file_put_contents("backup.json", $user);
    bot('EditMessageText', [
        'chat_id' => $chat_id,
        'message_id' => $message_id,
        'text' => "▪ تم عمل نسخة احتياطية بنجاح",
    ]);
    bot("sendDocument", [
        "chat_id" => $admin_id,
        "document" => new CURLFILE("backup.json")
    ]);
}

// عرض رصيدك في الموقع
// عرض رصيدك في الموقع
if ($data == "check_balance") {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://5sim.net/v1/user/profile");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        "Authorization: Bearer $tokensim"
    ]);
    
    $response = curl_exec($ch);
    curl_close($ch);
    
    $balance_data = json_decode($response, true);
    
    if (isset($balance_data['balance'])) {
        $coin = $balance_data['balance'];
        $message = "💰 رصيدك الحالي في موقع 5sim.net هو: `$coin` RUB";
    } else {
        $message = "⚠️ حدث خطأ في جلب الرصيد. يرجى التأكد من صحة التوكن.";
    }
    
    bot('EditMessageText', [
        'chat_id' => $chat_id,
        'message_id' => $message_id,
        'text' => $message,
        'parse_mode' => 'Markdown'
    ]);
}
## Namero @S_P_P1 ###
if (!isset($update)) {
  $user = (file_get_contents("sales.json"));
  file_put_contents("backup.json", $user);
  bot("sendDocument", [
"chat_id" => $adminnn,
"document" => new CURLFILE("backup.json"),
"caption" => $time
  ]);
}
if ($data) {
  $status = bot('getChatMember', ['chat_id' =>"@".$ch, 'user_id' => $chat_id])->result->status;
  if ($status == "left") {
bot("EditMessageText", [
"chat_id" => $chat_id,
"text" => "عليك الاشتراك في قنوات البوت
@$ch
@USER-NAME
@medo_mods
",
"message_id" => $message_id
]);
exit;
  }
}
if($id!=$adminnn){
  if ($message->chat->type != "private" and $text) {
bot("sendmessage", [
"chat_id" => $adminnn,
"text" => "قام هذا الشخص بالدخول عن طريق قروب
		$id
		@$user"
]);
bot("leavechat", [
"chat_id" => $chat_id,
]);
return false;
  } }
  if (preg_match("/(start-100)/", $text) or preg_match("/(start -100)/", $text) or preg_match("/(start@)/", $text) or preg_match("/(start @)/", $text)) {
  bot("sendmessage", [
"chat_id" => $adminnn,
"text" => "قام هذا الشخص بالدخول على رابط بطريقة خاطئة
		$id
		@$user"
  ]);
  return false;
}
if($data == 'cbc'){
  bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
- مرحباً مطوري @$user ⚙️

– يمكنك التحكم في بوت الارقام من هنا 📮
💰 رصيدك في الموقع : `$coin` RUB
",
   'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>'قائمة الدول 🌐','callback_data'=>'city']],
[['text' => 'إضافة رقم ♻️', 'callback_data' => 'add'], ['text' => '- حذف رقم 🗑', 'callback_data' => 'del']],
[['text' => 'شحن رصيد 📤', 'callback_data' => 'send'], ['text' => 'خصم رصيد 💰', 'callback_data' => 'delete']],
[['text' => 'ارسال رسالة لمستخدم🗣', 'callback_data' => 'message'], ['text' => 'إرسال تحذير⚠️', 'callback_data' => 'tahdeer']],
[['text' => 'اوامر الادمن ⚙️', 'callback_data' => 'admin'],['text' => 'نسخة إحتياطية 🗳', 'callback_data' => 'pointsfile']],
 [['text' => 'عرض التوكن الحالي 🔍', 'callback_data' => 'show_token'],['text' => 'ربط توكن الموقع ♻️', 'callback_data' => 'change_token']],
  [['text' => 'رصيدك في الموقع 🎁', 'callback_data' => 'check_balance']], 
  [['text'=>"رجوع ➡️",'callback_data'=>"Thkom"]],
]
])
  ]);
$sales['mode'] = null;
  save($sales);
 }
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://5sim.net/v1/user/profile");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        "Authorization: Bearer $tokensim"
    ]);
    
    $response = curl_exec($ch);
    curl_close($ch);
    
    $balance_data = json_decode($response, true);
    
    if (isset($balance_data['balance'])) {
        $coin = $balance_data['balance'];} 
if($chat_id == $adminnn){        
 if($text == '/start'){
  bot('sendMessage',[
   'chat_id'=>$chat_id,
   'text'=>" مرحباً مطوري @$user ⚙️

– يمكنك التحكم في بوت الارقام من هنا 📮
💰 رصيدك في الموقع : `$coin` RUB
",
   'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>'قائمة الدول 🌐','callback_data'=>'city']],
[['text' => 'إضافة رقم ♻️', 'callback_data' => 'add'], ['text' => '- حذف رقم 🗑', 'callback_data' => 'del']],
[['text' => 'شحن رصيد 📤', 'callback_data' => 'send'], ['text' => 'خصم رصيد 💰', 'callback_data' => 'delete']],
[['text' => 'ارسال رسالة لمستخدم🗣', 'callback_data' => 'message'], ['text' => 'إرسال تحذير⚠️', 'callback_data' => 'tahdeer']],
[['text' => 'اوامر الادمن ⚙️', 'callback_data' => 'admin'],['text' => 'نسخة إحتياطية 🗳', 'callback_data' => 'pointsfile']],
 [['text' => 'عرض التوكن الحالي 🔍', 'callback_data' => 'show_token'],['text' => 'ربط توكن الموقع ♻️', 'callback_data' => 'change_token']],
  [['text' => 'رصيدك في الموقع 🎁', 'callback_data' => 'check_balance']], 
  [['text'=>"رجوع ➡️",'callback_data'=>"Thkom"]],
]
])
  ]);
$sales['mode'] = null;
  $sales["baageel"]=null;
  save($sales);
  } 
  if ($data == 'send') {
bot('EditMessageText', [
'chat_id' => $chat_id,
'message_id' => $message_id,
'text' => "
أرسل أيدي الشخص الذي تريد إرسال النقاط له
",
]);
  $sales['mode'] = 'chat';
  save($sales);
  exit;
  }
   if($text != '/start' and $text != null and $sales['mode'] == 'chat'){
  bot('sendMessage',[
   'chat_id'=>$chat_id,
 'text'=> "أرسل الكمية التي تريد إرسالها",
 ]);
   $sales['mode'] = 'poi';
   $sales['idd'] = $text;
  save($sales);
  exit;
}
 if($text != '/start' and $text != null and $sales['mode'] == 'poi'){
  bot('sendMessage',[
   'chat_id'=>$chat_id,
 'text'=>"تم إضافة $text نقطة إلى حساب ".$sales['idd']." بنجاح ",
]);
  bot('sendmessage',[
   'chat_id'=>$sales['idd'],
  'text'=>"تمت إضافة $text نقطة إلى حسابك في البوت من قبل المطور ",
  ]);
  $sales['mode'] = null;
  $sales[$sales['idd']]['collect'] += $text;
  $sales['idd'] = null;
  save($sales);
  exit;
}
  if ($data == 'delete') {
bot('EditMessageText', [
'chat_id' => $chat_id,
'message_id' => $message_id,
'text' => "
أرسل أيدي الشخص الذي تريد خصم النقاط منه
",
]);
  $sales['mode'] = 'chat1';
  save($sales);
  exit;
  }
  
   if($text != '/start' and $text != null and $sales['mode'] == 'chat1'){
  bot('sendMessage',[
   'chat_id'=>$chat_id,
 'text'=> "أرسل الكمية التي تريد خصمها",
 ]);
   $sales['mode'] = 'poi1';
   $sales['idd'] = $text;
  save($sales);
  exit;
}
 if($text != '/start' and $text != null and $sales['mode'] == 'poi1'){
  bot('sendMessage',[
   'chat_id'=>$chat_id,
 'text'=>"تم خصم $text نقطة من حساب ".$sales['idd']." بنجاح ",
]);
  bot('sendmessage',[
   'chat_id'=>$sales['idd'],
  'text'=>"تمت خصم $text نقطة من حسابك في البوت من قبل المطور ",
  ]);
  $sales['mode'] = null;
  $sales[$sales['idd']]['collect'] -= $text;
  $sales['idd'] = null;
  save($sales);
  exit;
}

  if ($data == 'message') {
bot('EditMessageText', [
'chat_id' => $chat_id,
'message_id' => $message_id,
'text' => "
أرسل أيدي الشخص الذي تريد إرسال الرسالة له
",
]);
  $sales['mode'] = 'chat3';
  save($sales);
  exit;
  }
   if($text != '/start' and $text != null and $sales['mode'] == 'chat3'){
  bot('sendMessage',[
   'chat_id'=>$chat_id,
 'text'=> "
أرسل رسالتك",
 ]);
   $sales['mode'] = 'poi3';
   $sales['idd'] = $text;
  save($sales);
  exit;
}
 if($text != '/start' and $text != null and $sales['mode'] == 'poi3'){
  bot('sendMessage',[
   'chat_id'=>$chat_id,
 'text'=>"تم إرسال الرسالة إلى ".$sales['idd']." بنجاح ",
]);
  bot('sendmessage',[
   'chat_id'=>$sales['idd'],
  'text'=>"رسالة من الإدارة:

$text",
  ]);
  $sales['mode'] = null;
  $sales['idd'] = null;
  save($sales);
  exit;
}
  if ($data == 'tahdeer') {
bot('EditMessageText', [
'chat_id' => $chat_id,
'message_id' => $message_id,
'text' => "
أرسل أيدي الشخص الذي تريد إرسال التحذير له
",
]);
  $sales['mode'] = 'chat4';
  save($sales);
  exit;
  }
  
   if($text != '/start' and $text != null and $sales['mode'] == 'chat4'){
  bot('sendMessage',[
   'chat_id'=>$chat_id,
 'text'=> "
إضغط /Confirm لتأكيد إرسال التحذير",
 ]);
   $sales['mode'] = 'poi4';
   $sales['idd'] = $text;
  save($sales);
  exit;
}
 if($text != '/start' and $text != null and $sales['mode'] == 'poi4'){
  bot('sendMessage',[
   'chat_id'=>$chat_id,
 'text'=>"تم إرسال التحذير إلى ".$sales['idd']." بنجاح ",
]);
  bot('sendmessage',[
   'chat_id'=>$sales['idd'],
  'text'=>"تحذير من الإدارة!
إستعمال حسابات وهمية الدخول لرابطك بها يؤدي إلى حظر حسابك 👉
في حال إستعمال الوهمي سينحظر حسابك... إنتبه... شكرا على تفهمك للموضوع",
  ]);
  $sales['mode'] = null;
  $sales['idd'] = null;
  save($sales);
  exit;
}

 if($data == 'add'){
  bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'أرسل إسم السلعة؟!
مثال:
رقم بلجيكي 🇧🇪',
'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>'- إلغاء الأمر 🚫','callback_data'=>'cbc']]
]
])
  ]);
  $sales['mode'] = 'add';
  save($sales);
  exit;
 }
 if($text != '/start' and $text != null and $sales['mode'] == 'add'){
  bot('sendMessage',[
   'chat_id'=>$chat_id,
   'text'=>'- تم حفظ إسم السلعة (الرقم)
أرسل الآن سعرها ( كم نقطة؟ )
مثال:
25'
  ]);
  $sales['n'] = $text;
  $sales['mode'] = 'addm';
  save($sales);
  exit;
 }
 if($text != '/start' and $text != null and $sales['mode'] == 'addm'){
  $code = substr(str_shuffle('abcdefghijklmnopqrstuvwxyz12345689807'),1,7);
  bot('sendMessage',[
   'chat_id'=>$chat_id,
   'text'=>'تم حفظ الإسم والسعر...✅
   إسم السلعة: '.$sales['n'].'
السعر: '.$text.'
الكود: '.
"\n`$code`\n"
."ارسل اسم الدولة حسب موقع قائمة الارقام ",
'parse_mode'=>"MarkDown",
  ]);
  
  $sales['sales'][$code]['name'] = $sales['n'];
  $sales['sales'][$code]['price'] = $text;
  $sales['n'] = null;
  $sales['mode'] = "file";
  $sales["baageel"]=$code;
  save($sales);
  exit;
 }
 if($text != '/start' and $text != null and $sales['mode'] == 'file'){
 	if(in_array($text,$city)){
 $sales["sales"][$sales["baageel"]]["country"]=$text;
  bot('sendMessage',[
   'chat_id'=>$chat_id,
   'text'=>'*- تم حفظ الدولة
الان قم بارسال اسم التطبيق*
`واتس`
`فيس`
`تلي`
`جوجل`
`انستا`
`openai`
`paypal`
`amazon`
`imo`
`discord`
`twitter`
`tiktok`
`snapchat`
`netflix`
`hotmail`
`kwai`
`skype`
`yahoo`
`wechat`
`viber`
`aliexpress`
`steam`
`truecaller`
`uber`
`yalla`
`microsoft`
',
'parse_mode' =>"markdown",
'disable_web_page_preview'=>true,
  ]);
  $sales['mode'] = "apps";
  save($sales);
  exit;
  }else{
  bot('sendMessage',[
   'chat_id'=>$chat_id,
   'text'=>"
   لم يتم حفظ الدولة 
   لانها ليست في قائمة الدولة 
   الرجاء ارسال اسم الدولة من قائمة الدول
   ",
'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>'- إلقائمة الرئيسية🔙','callback_data'=>'cbc']]
]
])
  ]);
exit;	
  }
 }
 
 if($text != '/start' and $text != null and $sales['mode'] == 'apps'){
 	$yy=array("واتس","تلي","جوجل","فيس","انستا","openai","paypal","amazon","imo","discord","twitter","tiktok","snapchat","netflix","hotmail","kwai","skype","yahoo","wechat","viber","aliexpress","steam","truecaller","uber","yalla","microsoft");
 	if(in_array($text,$yy)){
 	$text=str_replace(["واتس","تلي","جوكل","انستا","فيس","openai","paypal","amazon","imo","discord","twitter","tiktok","snapchat","netflix","hotmail","kwai","skype","yahoo","wechat","viber","aliexpress","steam","truecaller","uber","yalla","microsoft"],["whatsapp","tg","Google","ig","facebook","openai","paypal","amazon","imo","discord","twitter","tiktok","snapchat","netflix","hotmail","kwai","skype","yahoo","wechat","viber","aliexpress","steam","truecaller","uber","yalla","microsoft"],$text);
 $sales["sales"][$sales["baageel"]]["apps"]=strtolower($text);
  bot('sendMessage',[
   'chat_id'=>$chat_id,
   'text'=>'- تم حفظ بنحاح
',
'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>'- إلقائمة الرئيسية🔙','callback_data'=>'cbc']]
]
])
  ]);
$sales["baageel"]=null;
  $sales['mode'] = null;
  save($sales);
  exit;}
  else{
  	bot('sendMessage',[
   'chat_id'=>$chat_id,
   'text'=>'*- الان قم بارسال اسم التطبيق*
`واتس`
`فيس`
`تلي`
`جوجل`
`انستا`
`openai`
`paypal`
`amazon`
`imo`
`discord`
`twitter`
`tiktok`
`snapchat`
`netflix`
`hotmail`
`kwai`
`skype`
`yahoo`
`wechat`
`viber`
`aliexpress`
`steam`
`truecaller`
`uber`
`yalla`
`microsoft`
',
'parse_mode' =>"markdown",
'disable_web_page_preview'=>true,
  ]);
  }
 }
 if($data == 'del'){
  bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'أرسل كود السلعة للتأكيد',
'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>'- إلغاء الأمر 🚫','callback_data'=>'cbc']]
]
])
  ]);
  $sales['mode'] = 'del';
  save($sales);
  exit;
 }
  if($data == 'city'){
  bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"قائمة الدول 
اضغط على اسم الدولة وسيتم النسخ

$cities
",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>'- إلغاء الأمر 🚫','callback_data'=>'cbc']]
]
])
  ]);}
 if($text != '/start' and $text != null and $sales['mode'] == 'del'){
  if($sales['sales'][$text] != null){
   bot('sendMessage',[
   'chat_id'=>$chat_id,
   'text'=>'تم الحذف بنجاح...✅
   إسم السلعة: '.$sales['sales'][$text]['name'].'
السعر: '.$sales['sales'][$text]['price'].'
الكود: '.$text
  ]);
  unset($sales['sales'][$text]);
  $sales['mode'] = null;
  save($sales);
  exit;
  } else {
   bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>'خطأ - الكود غير صحيح'
   ]);
  }
 }
} else {
 if(preg_match('/\/(start)(.*)/', $text)){
  $ex = explode(' ', $text);
  if(isset($ex[1])){
   if(!in_array($chat_id, $sales[$chat_id]['id'])){
$sales[$chat_id]['baageel']=$ex[1];
$sales[$chat_id]['id'][] = $chat_id;
save($sales);
   }
  }
  
  $status = bot('getChatMember',['chat_id'=>'@'.$ch,'user_id'=>$chat_id])->result->status;
  if($status == 'left'){
   bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"عذرا عزيزي... يجب الإشتراك في القناة حتى تتمكن من إستخدام البوت...🙋‍♂
إشترك هنا 
@$ch
@USER-NAME
@medo_mods
ثم إضغط /start 👉",
 'reply_to_message_id'=>$message->message_id,
   ]);
   exit();
  }
  if($sales[$chat_id]['collect'] == null){
   $sales[$chat_id]['collect'] = 0;
   save($sales);
  }
  
  
  
  
  if(preg_match("/\/(start)/",$text)){
$sales[$sales[$chat_id]['baageel']]['collect'] += 0.01;
save($sales);
bot('sendmessage',[
'chat_id'=>$sales[$chat_id]['baageel'],
"text"=>"- قام : $Suser بالدخول الى الرابط الخاص وحصلت على ₱0.01 واحده ، ✨\n~ رصيدك : ".$sales[$sales[$chat_id]['baageel']]['collect']." ₽", 
]);
bot('sendMessage',[
'chat_id'=>$sudo,
'text'=>"
",
'parse_mode' =>"markdown",
'disable_web_page_preview'=>'true',
]);
$sales[$chat_id]['baageel']=0;
save($sales);
  bot('sendmessage',[
   'chat_id'=>$chat_id,
   'text'=>"◆ مرحبا بك في بوت الارقام الوهميه 📮
◆ نوفر لك جميع الارقام لجميع الدول 🌐

◆ [مطور البوت 📤](https://t.me/USER-NAME)

◆ رصيدك : ".$sales[$chat_id]['collect']." ₽
◆ الايدي : `$chat_id`",'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
 [['text'=>'شراء رقم جديد ♻️','callback_data'=>'numbers']],
 [['text'=>'ربح الروبل مجاني 🅿️','callback_data'=>'col']],
 [['text' => 'شحن حسابك 💰', 'url' => "tg://user?id=ADMIN-ID"]],
] 
   ])
  ]);
 }}
 if($data == 'col'){
  bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
مرحبا  [عزيزي 🅿️] 
 
🤑 ⌯ إربح ₽  الآن مجاناً عبر مشاركة رابط البوت الى أصدقائك 👥 واحصل على 0.01 ₽  مقابل كل شخص يقوم بالدخول إلى البوت عبر الرابط الخاص بك ✅.
 ☑ - رابط الدعوة الخاص بك: https://t.me/'.$me.'?start='.$chat_id.''
,'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"العودة إلى القائمة الرئيسية 🔙",'callback_data'=>"back"]],
] 
   ])
  ]);
 }
if($data == 'back'){
if($sales[$chat_id]['collect'] == null){
   $sales[$chat_id]['collect'] = 0;
   save($sales);
  }
  bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
   'text'=>"
◆ مرحبا بك في بوت الارقام الوهميه 📮
◆ نوفر لك جميع الارقام لجميع الدول 🌐

◆ [مطور البوت 📤](https://t.me/USER-NAME)

◆ رصيدك : ".$sales[$chat_id]['collect']." ₽
◆ الايدي : `$chat_id`"

,'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
 [['text'=>'شراء رقم جديد ♻️','callback_data'=>'numbers']],
 [['text'=>'ربح الروبل مجاني 🅿️','callback_data'=>'col']],
 [['text' => 'شحن حسابك 💰', 'url' => "tg://user?id=ADMIN-ID"]],
] 
   ])
  ]);
 }
  if($data == 'numbers'){
  bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'💯 الان قم باختيار التطبيق التي تريد تشغيل الرقم عليه
	👇 من الكيبورد أدناه',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'telegram ¦¦ تلجرام 📤','callback_data'=>'sales#tg']],
[['text'=>'facebook ¦¦ فيسبوك 📤','callback_data'=>'sales#facebook'],['text'=>'instagram ¦¦ انستجرام 📤','callback_data'=>'sales#ig']],
[['text'=>'whatsapp ¦¦ واتساب 📤','callback_data'=>'sales#whatsapp']],[['text'=>'openai ¦¦ اوبن اي 📤️','callback_data'=>'sales#openai'],['text'=>'google ¦¦ جوجل','callback_data'=>'sales#imo']],
[['text'=>'paypal','callback_data'=>'sales#paypal'],['text'=>'amazon','callback_data'=>'sales#amazon']],
[['text'=>'tiktok','callback_data'=>'sales#tiktok']],
[['text'=>'snapchat','callback_data'=>'sales#snapchat'],['text'=>'netflix','callback_data'=>'sales#netflix']],
[['text'=>'imo','callback_data'=>'sales#imo'],['text'=>'discord','callback_data'=>'sales#discord'],['text'=>'twitter','callback_data'=>'sales#twitter']],
[['text'=>'hotmail','callback_data'=>'sales#hotmail'],['text'=>'yahoo','callback_data'=>'sales#yahoo']],
[['text'=>'kwai','callback_data'=>'sales#kwai']],
[['text'=>'wechat','callback_data'=>'sales#wechat'],['text'=>'viber','callback_data'=>'sales#viber']],
[['text'=>'steam','callback_data'=>'sales#steam'],['text'=>'aliexpress','callback_data'=>'sales#aliexpress'],['text'=>'skype','callback_data'=>'sales#skype']],
[['text'=>'truecaller','callback_data'=>'sales#truecaller'],['text'=>'uber','callback_data'=>'sales#uber']],
[['text'=>'yalla','callback_data'=>'sales#yalla'],['text'=>'microsoft','callback_data'=>'sales#microsoft']],
[['text'=>'الرجوع الى القائمة الرئيسية🔙','callback_data'=>'back']],
 ] 
   ])
  ]);
 }
 

$ex = explode('#', $data);
$code = explode(":", file_get_contents("https://api-jack.ml/api-5sim/code/code?key=$tokensim&id={$ex[1]}"));
$code99 = file_get_contents("https://api-jack.ml/api-5sim/code/code?key=$tokensim&id={$ex[1]}");

if ($ex[0] == "innnnn") {
if (preg_match("/(STATUS_WAIT_CODE)/", $code99)) {
bot('sendMessage', [
'chat_id' => $chat_id,
'text' => "* الكود لم يصل تأكد من ارساله*",
'parse_mode' => "MarkDown",
]);
bot('sendMessage', [
'chat_id' => $adminnn,
'text' => "
*لم يتم شراء رقم جديد*
*ايدي الرقم :* `$ex[1]`
*اسم الشخص :* `$name`
*ايدي العميل :* `$chat_id`
*معرف العميل :* `$Suser`
",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
]);
}else{
bot('sendMessage', [
'chat_id' => $adminnn,
'text' => "
*تم شراء رقم جديد وتسليم الكود للعميل بنجاح*
*الكود :* `$code[1]`
*ايدي الرقم :* `$ex[1]`
*اسم الشخص :* `$name`
*ايدي العميل :* `$chat_id`
*معرف العميل :* `$Suser`
",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
]);
$config = json_decode(file_get_contents('config.json'), true);
$tokensim = $config['tokensim']; 
$ch = $config['ch'];  #التوكن الطويل الموجود في موقع 5sim.net
$api_tokensim_code = json_decode(file_get_contents("https://api-jack.ml/api-5sim/code?key=$tokensim2&id={$ex[1]}"),1); #اتصال api
$api_tokensim2_sms_text0 = $api_tokensim_code["text"]; # الرساله
$api_tokensim2_sms_code0 = $api_tokensim_code["code"]; # الكود

bot('sendMessage', [
'chat_id' => $chat_id,
'text' => "
*❍ رساله الرقم:* `".$api_tokensim2_sms_text0."`
*❍ الكود  :* `".$api_tokensim2_sms_code0."`",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true
]);
}


}
## Namero @S_P_P1 ###
  if ($ex[0] == "band") {
file_get_contents("https://api-jack.ml/api-5sim/band?key=$tokensim&id={$ex[1]}");
bot('editmessagetext', [
'chat_id' => $chat_id,
'text' => "*❍ تم ارسال طلبك الى فريق الدعم بنجاح 
❍ قم بمراسلتنا عبر هذا البوت :
❍ [ @USER-NAME]
❍ وسيتم التحقق من هذا الرقم
❍ واذا كان طلبك صحيح سيتم اعادة نقاطك اليك مع 1 نقطه هديه
#𝚂𝚄𝙿𝙿𝙾𝚁𝚃_𝚃𝙴𝙰𝙼_𝚆𝙸𝚃𝙷_𝚇_𝙽𝚄𝙼𝙱𝙴𝚁𝚂_𝙱𝙾𝚃*",
"message_id"=>$message_id,
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true
]);
bot('sendmessage', [
'chat_id' => $adminnn,
'text' => "
*طلب اعادة النقاط لان الرقم محظور 
ايدي المرسل :* `$chat_id`
*معرف المرسل : $Suser
رقمه*
`+$ex[2]`
"
,'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true
  ]);}
 if($data == 'col'){
  bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
مرحبا  [عزيزي 🅿️] 
 
🤑 ⌯ إربح ₽  الآن مجاناً عبر مشاركة رابط البوت الى أصدقائك 👥 واحصل على 0.01 ₽  مقابل كل شخص يقوم بالدخول إلى البوت عبر الرابط الخاص بك ✅.
 ☑ - رابط الدعوة الخاص بك: https://t.me/'.$me.'?start='.$chat_id.''
,'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"العودة إلى القائمة الرئيسية 🔙",'callback_data'=>"back"]],
] 
   ])
  ]);
 }


 elseif(preg_match("/(sales)/",$data)){
 	$ex=explode("#",$data);
  $reply_markup = [];
  $reply_markup['inline_keyboard'][] = [['text'=>'⁉️الكمية','callback_data'=>'s'],['text'=>'💲السعر','callback_data'=>'s'],['text'=>'🚩دولة الرقم','callback_data'=>'s']];
  foreach($sales['sales'] as $code => $sale){
  	if($sales["sales"][$code]["apps"]==$ex[1]){
  	$co=$sales["sales"][$code]["country"];
  $ap=$sales["sales"][$code]["apps"];
  
  $count=json_decode(file_get_contents("https://api-jack.ml/api-5sim/get?key=$tokensim&country=$co"),1); 
  $a=$count[$ap."_0"];
  if($a==0){
  $a="⛔";	
  }else{
  	$a="متوفر✅";	
  } 
   $reply_markup['inline_keyboard'][] = [['text'=>"$a",'callback_data'=>$code],['text'=>$sale['price'],'callback_data'=>$code],['text'=>$sale['name'],'callback_data'=>$code]];
  }}
if($sales[$chat_id]['collect'] == null){
   $sales[$chat_id]['collect'] = 0;
   save($sales);
  }
$reply_markup['inline_keyboard'][] = [['text'=>'العودة إلى قائمة الخدمات🔙','callback_data'=>'numbers']];
  $reply_markup = json_encode($reply_markup);
  bot('editMessageText',[
   'chat_id'=>$chat_id,
   'message_id'=>$message_id,
   'text'=>"
🙋‍♂️ أهلآ عـزيـزي آلَمستخدم
	💯 إليك قائمة بالأرقام المتوفرةحاليا💯 قم بالضغط على احد الارقام لشرائه
~ رصيدك الآن: ".$sales[$chat_id]['collect']." ₽",
   'reply_markup'=>($reply_markup)
  ]);
  $sales[$chat_id]['mode'] = null;
   save($sales);
   exit;
 } elseif($data == 'yes'){
  $price = $sales['sales'][$sales[$chat_id]['mode']]['price'];
$name = $sales['sales'][$sales[$chat_id]['mode']]['name'];
$country=$sales['sales'][$sales[$chat_id]['mode']]['country'];
$apps=$sales['sales'][$sales[$chat_id]['mode']]['apps'];
if($name==null){
	exit;
}else{
	$z=$rssed;
	$api = json_encode(file_get_contents("https://api-jack.ml/api-5sim/get_num?key=$tokensim&apps=$apps&country=$country"));
	
if (preg_match("/(NO_NUMBERS)/", $api)) {
bot("EditMessageText", [
"chat_id" => $chat_id,
"text" => "لم يتم تنفيذ طلبك
نظراً لعدم توفر الارقام حاليا في الموقع
",
"message_id" => $message_id
]);
exit;
} elseif (preg_match("/(BAD_SERVICE)/", $api)) {
bot("EditMessageText", [
"chat_id" => $chat_id,
"text" => "لم يتم تنفيذ طلبك
نظراً لعدم ادخل المعلومات الصحيحه من قبل الادمن
",
"message_id" => $message_id
]);
exit;
} elseif (preg_match("/(NO_BALANCE)/", $api)) {
bot("EditMessageText", [
"chat_id" => $chat_id,
"text" => "لم يتم تنفيذ طلبك
نظرا لعدم توفر الرصيد الكافي في البوت
الرجاء الانتظار والمحاولة لاحقا
",
"message_id" => $message_id
]);
exit;
}
$num = explode(":", $api);
$numb = str_replace('"', "", $num[2]);
if($numb==null){
bot("EditMessageText", [
"chat_id" => $chat_id,
"text" => "لم يتم تنفيذ طلبك
نظراً لمشكلة في الموقع
",
"message_id" => $message_id
]);
exit;
}
bot("EditMessageText", [
"chat_id" => $chat_id,
"text" => "تم قبول طلبك للرقم",
"message_id" => $message_id
]);

bot('sendMessage', [
'chat_id' => $chat_id,
'text' => "رقمك هو
`+$numb`
اطلب الكود خلال 15 دقيقة او لن تستطيع الحصول على الكود
في حال واجهتك مشكلة تواصل بالمطور 

[@USER-NAME]
",
'parse_mode' => "MarkDown",
 'reply_markup' => json_encode([
'inline_keyboard' => [
  [['text' => 'اجلب الكود', 'callback_data' => "innnnn#$num[1]"]], [['text' => 'محظور', 'callback_data' => "band#$num[1]#$num[2]"]],[['text' => 'تم', 'callback_data' => "done"]],
]])
]);
$rssed = filter_var(file_get_contents("https://api-jack.ml/api-5sim/coin?key=$tokensim"), FILTER_SANITIZE_NUMBER_INT);
  bot('sendmessage',[
   'chat_id'=>$adminnn,
   'text'=>"- - - - - - - - - - - - - - - - - - - - - - - - -
الأيدي: $chat_id
المعرف إن وجد: $Suser
- - - - - - - - - - - - - - - - - - - - - - - - -
قام بشراء $name بسعر $price
- - - - - - - - - - - - - - - - - - - - - - - - -
رقمه هو 
`+$numb`
- - - - - - - - - - - - - - - - - - - - - - - - -
الرصيد السابق : $z
الرصيد الحالي : $rssed
- - - - - - - - - - - - - - - - - - - - - - - - -
"
]);
bot('sendmessage',[
'chat_id'=>"-1001600387125",
'text'=>"*❍ تم شراء رقم جديد بنجاح*
*❍ الرقم :* `+$numb`
*❍ النوع :* `$name`
*❍ السعر :* `$price`
*❍ ايدي المرسل :* `$chat_id`
*❍ معرف المرسل : $Suser
❍ معرف البوت : @X_NUMBERS_BOT*
",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"𝚇 𝙽𝚄𝙼𝙱𝙴𝚁𝚂 𝙱𝙾𝚃",'url'=>"t.me/X_NUMBERS_BOT"]],
]])]);


  $sales[$chat_id]['mode'] = null;
  $sales[$chat_id]['collect'] -= $price;
  save($sales);
  exit;
 } }else {
   if($data == 's') { exit; }
   $price = $sales['sales'][$data]['price'];
   $name = $sales['sales'][$data]['name'];
   if($price != null){
if($price <= $sales[$chat_id]['collect']){
 bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
هل أنت متأكد وتريد إتمام الطلب...؟

طلبك هو:
رقم لدولة $name بسعر $price 👉",
'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>'نعم - أنا متأكد','callback_data'=>'yes'],['text'=>'لا - إلغاء الشراء','callback_data'=>'back']] 
 ] 
])
 ]);
 $sales[$chat_id]['mode'] = $data;
 save($sales);
 exit;
} else {
 bot('answercallbackquery',[
'callback_query_id' => $update->callback_query->id,
'text'=>'نقاطك غير كافية لشراء هذا الرقم',
'show_alert'=>true
 ]);
}
   }
 }
}

$ary = array($adminnn);
$id = $message->chat->id;
$adminnns = in_array($id,$ary);
$data = $update->callback_query->data;
$from_id = $message->from->id;
$chat_id = $message->chat->id;
$chat_id2 = $update->callback_query->message->chat->id;
$cut = explode("\n",file_get_contents("stats/users.txt"));
$users = count($cut)-1;
$mode = file_get_contents("stats/bc.txt");
#Start code 

if ($update && !in_array($id, $cut)) {
mkdir('stats');
file_put_contents("stats/users.txt", $id."\n",FILE_APPEND);
  }

if(preg_match("/(admin)/",$text) && $adminnns) {
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
أهلا مطوري...
شبيك لبيك البوت بين يديك
إضغط على طلبك في القائمة وستتم تلبية الطلب تلقائيا...🌚 
-",
'reply_to_message_id'=>$message->message_id,
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'عدد المشتركين 👥 ','callback_data'=>'users'],['text'=>'رسالة للكل 📩 ','callback_data'=>'set']],
[['text'=>'حالة البوت 🔋 ','callback_data'=>'stats']],
]
])
]);
}
if($data == 'admin'){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
أهلا مطوري...
شبيك لبيك البوت بين يديك
إضغط على طلبك في القائمة وستتم تلبية الطلب تلقائيا...🌚 
-",
'reply_to_message_id'=>$message->message_id,
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'عدد المشتركين 👥 ','callback_data'=>'users'],['text'=>'رسالة للكل 📩 ','callback_data'=>'set']],
[['text'=>'حالة البوت 🔋 ','callback_data'=>'stats']],
]
])
]);
file_put_contents('stats/bc.txt', 'no');
}

if($data == "users"){ 
bot('answercallbackquery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"
المشتركين $users
-",
'show_alert'=>true,
]);
}

if($data == "set"){ 
file_put_contents("stats/bc.txt","yas");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$update->callback_query->message->message_id,
'text'=>"
أرسل رسالتك ليتم إرسالها إلى $users مشترك 👥
كتابة فقط...🌚
-
",
'reply_to_message_id'=>$message->message_id,
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>' الغاء 🚫. ','callback_data'=>'cbc']]
]
])
]);
}
if($text and $mode == "yas" && $adminnns){
bot('sendMessage',[
  'chat_id'=>$chat_id,
  'text'=>"
تم قبول رسالتك!
ويتم إرسالها إلى $users مشترك 👥
-",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'رجوع ','callback_data'=>'cbc']]
]
])
]);
for ($i=0; $i < count($cut); $i++) { 
 bot('sendMessage',[
'chat_id'=>$cut[$i],
'text'=>"$text",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
]);
file_put_contents("stats/bc.txt","no");
} 
}


$getMe = bot('getMe')->result;
date_default_timezone_set("Africa/Cairo");
$date = $message->date;
$date = date('y/m/d');
$time = date('h:i:s');
$gettime = time();
$sppedtime = $gettime - $date;
$userbot = "{$getMe->username}";
$userb = strtoupper($userbot);
if($data == "stats"){
if ($sppedtime == 3  or $sppedtime < 3) {
$f = "سيئه جداً";
}
elseif($sppedtime == 9 or $sppedtime > 9 ) {
$f = "جيده";
}
elseif ($sppedtime == 10 or $sppedtime > 10) {
$f = "ممتازة";
}
elseif ($sppedtime == 50 or $sppedtime > 50) {
$f = "ممتازة جداً";
}
 bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$update->callback_query->message->message_id,
'text' =>"
معلومات البوت:

معرف البوت [ @$userb ]
حالة البوت $f
الوقت الآن: 20$date | $time 
-",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'رجوع ','callback_data'=>'cbc']]
]
])
 ]);
}
if($message->reply_to_message and $message->from->id==$adminnn and $text=="رفع"){
$a= $message->reply_to_message->document->file_id;
$get=bot("getfile",[
"file_id"=>$a
])->result->file_path; 
$v="sales.json";
$file=file_put_contents($v, file_get_contents("https://api.telegram.org/file/bot".API_KEY."/".$get));
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>"تم الرفع"
]);
}

$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$chat_id = $message->chat->id;
$text = $message->text;
$from_id = $message->from->id;
$type = $message->chat->type;
if(isset($update->callback_query)){
$chat_id = $update->callback_query->message->chat->id;
$from_id = $update->callback_query->message->from->id;
$message_id = $update->callback_query->message->message_id;
$data= $update->callback_query->data;
}
$ex = explode("#",$data);
$pr = str_replace("كشف ", "", $text);

$api = json_decode(file_get_contents("http://api.telegram.org/bot".$TOKEN."/getChat?chat_id=".$pr));
$first_name= $api->result->first_name;
$last_name= $api->result->last_name;
$username= $api->result->username;
$bio= $api->result->bio;
$id =$api->result->id;
$statt =$api->ok;
$api1=json_decode(file_get_contents("https://api.telegram.org/bot".$TOKEN."/getUserProfilePhotos?user_id=".$pr),true); 
$photo =$api1["result"]["total_count"];  

/* كليشه الايدي تقدر تغيرها*/
$test ="
";

if($text=="كشف $pr" ){
if($statt == "true" ){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$test,
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
]);}
else{
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"البوت لم يتلقي رساله من هذا الشخص",
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
]);}}
## Namero @S_P_P1 ###
?>

