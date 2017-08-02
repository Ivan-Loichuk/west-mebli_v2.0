<?php
// database connect

include_once "../libs/redBean_php/rb.php";
R::setup( 'mysql:host=localhost;dbname=west-mebli', 'ivan_loichuk', 'westmebli2017' );
session_start();
?>