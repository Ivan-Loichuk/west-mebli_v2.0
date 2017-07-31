<?php
include_once '../languages/lang_ua.php';
$lang = new lang_ua();

$to = $lang->lang_ua['send_mail_info'][0];
$subject = $lang->lang_ua['send_mail_info'][1];
$headers = $lang->lang_ua['send_mail_info'][2];
$headers .= $lang->lang_ua['send_mail_info'][3];
$headers .= $lang->lang_ua['send_mail_info'][4];
$headers .= $lang->lang_ua['send_mail_info'][5];
$headers .= $lang->lang_ua['send_mail_info'][6];

$user_name = $_POST['name'];
$user_mail = $_POST['email'];
$user_number = $_POST['number'];
$user_message = $_POST['message'];


//Server validation callback form
$error = "";
if(trim($user_name) == "" && trim($user_message) == "" && trim($user_number) == "" && trim($user_mail) == ""){
    $error = $lang->lang_ua['send_mail_communicate'][0];
}
elseif(trim($user_name) == ""){
    $error = $lang->lang_ua['send_mail_communicate'][1];
}
elseif (!((strpos($user_mail, ".") > 0) &&(strpos($user_mail, "@") > 0 ))){
    $error = $lang->lang_ua['send_mail_communicate'][2];
}
elseif (trim($user_number) == ""){
    $error = $lang->lang_ua['send_mail_communicate'][3];
}
elseif (!preg_match('/[0-9]{9,13}/', $user_number)){
    $error = $lang->lang_ua['send_mail_communicate'][4];
}
elseif (trim($user_message) == ""){
    $error = $lang->lang_ua['send_mail_communicate'][5];
}

if ($error != ""){
    echo $error;
    exit;
}

$message .= '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<body>
<p style="color: #1db30a; font-size: 20px">' . $lang->lang_ua['send_mail_content'][0] . '</p><br>
<table rules="all" style="border-color: #666;" cellpadding="10">
    <tr style= \'background: #eee;\'><td><strong>' . $lang->lang_ua['send_mail_content'][1] . '</strong> </td><td>'.$user_name.'</td></tr>
    <tr><td><strong>' . $lang->lang_ua['send_mail_content'][2] . '</strong> </td><td>'. $user_mail .'</td></tr>
    <tr><td><strong>' . $lang->lang_ua['send_mail_content'][3] . '</strong> </td><td>'.$user_number.'</td></tr>
    <tr><td><strong>' . $lang->lang_ua['send_mail_content'][4] . '</strong> </td><td>'.$user_message.'</td></tr>
</table>
</body>
</html>';

    if(mail($to, $subject , $message, $headers)){
        echo $lang->lang_ua['send_mail_communicate'][6];
    }
    else{
        echo $lang->lang_ua['send_mail_communicate'][7];
    }


