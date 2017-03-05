<?php
if ( isset( $_POST["delete"] ) ) {

    $deleteItem = htmlspecialchars(addslashes(strip_tags(trim($_REQUEST['del']))));
    $result = R::getAll("DELETE  FROM photos WHERE id=".$deleteItem);
}
?>