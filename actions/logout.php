<?php
require "../configure/db.php";

// logout user(admin)

 unset($_SESSION['logged_user']);

header('Location: ../index.php');
?>

