
<?php
require "db.php";
$data = $_POST;
session_start();

if( isset($data['do_login'])){
    $errors = array();
    $user = R::findOne('users', 'login = ?', array($data['log_in']));
    if($user){
        if(password_verify($data['password'], $user->password)){
            echo '<br><div style="color: green;">Ви увійшли!!</div><hr>';
            $_SESSION['logged_user']=$user;
            header("Location: gallery_view.php");
        }
        else{
            $errors[]='Неправильний пароль';
        }
    }
    else{
        $errors[] = 'Користувача з таким логіном не знайдено';
    }

    if(!empty($errors)){
        echo '<div style="color: red;">'. array_shift($errors).'</div><hr>';
    }
}
?>