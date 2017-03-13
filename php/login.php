
<?php
require "db.php";
$data = $_POST;

if( isset($data['do_login'])){
    $errors = array();
    $user = R::findOne('users', 'login = ?', array($data['log_in']));
    if($user){
        if(password_verify($data['password'], $user->password)){
            echo '<br><div style="color: green;">Ви увійшли!!</div><hr>';
            session_start();
            $_SESSION['kategoria'];
            $_SESSION['type'];
            $_SESSION['errors[]'];

            $_SESSION['logged_user']=$user;
            header("Location: gallery_view.php?type=furniture");
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