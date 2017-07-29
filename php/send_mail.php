<?php
$to = "vanua.loichuk@gmail.com";
$subject = "WEST-MEBLI Нове повідомлення";
$headers = "From: west-mebli.com.ua\r\n";
$headers .= "Reply-To: vanua.loichuk@gmail.com\r\n";
$headers .= "CC: vanua.loichuk@gmail.com\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

$user_name = $_POST['name'];
$user_mail = $_POST['email'];
$user_number = $_POST['number'];
$user_message = $_POST['message'];


//Server validation callback form
$error = "";
if(trim($user_name) == "" && trim($user_message) == "" && trim($user_number) == "" && trim($user_mail) == ""){
    $error = "Заповніть всі поля";
}
elseif(trim($user_name) == ""){
    $error = "Ім'я не вказано";
}
elseif (!((strpos($user_mail, ".") > 0) &&(strpos($user_mail, "@") > 0 ))){
    $error = "Не правильний емайл адрес";
}
elseif (trim($user_number) == ""){
    $error = "Не вказано номер телефону";
}
elseif (!preg_match('/[0-9]{9,13}/', $user_number)){
    $error = "Не вірний номер телефону";
}
elseif (trim($user_message) == ""){
    $error = "Введіть своє повідомлення";
}

if ($error != ""){
    echo $error;
    exit;
}

$message .= '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<p style="color: #1db30a; font-size: 20px">Нове повідомлення з вітрини WEST-MEBLI</p><br>
<table rules="all" style="border-color: #666;" cellpadding="10">
    <tr style= \'background: #eee;\'><td><strong>Відправник:</strong> </td><td>'.$user_name.'</td></tr>
    <tr><td><strong>Електронна адреса:</strong> </td><td>'. $user_mail .'</td></tr>
    <tr><td><strong>Телефон:</strong> </td><td>'.$user_number.'</td></tr>
    <tr><td><strong>Повідомлення:</strong> </td><td>'.$user_message.'</td></tr>
</table>
</body>
</html>';

echo mail($to, $subject , $message, $headers);

