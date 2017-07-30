
<?php
require "db.php";
$data = $_POST;

//  veryfication and login user(admin)

if( isset($data['do_login'])){
    $errors = array();
    $user = R::findOne('users', 'login = ?', array($data['log_in']));
    if($user){
        if(md5($data['password'])== $user->password){
            echo '<br><div style="color: green;">Ви увійшли!!</div><hr>';
            session_start();
            $_SESSION['errors'] = null;

            $_SESSION['logged_user']=$user;
            header("Location: gallery_view.php?type=cabinets");
        }
        else{
            $errors[]='Неправильний пароль';
        }
    }
    else{
        $errors[] = 'Користувача з таким логіном не знайдено';

    }

    $_SESSION['errors'] = $errors;
}
?>