<?php
//delete images from database and folder
if ( isset( $_POST["delete"] ) ) {

    $deleteItem = htmlspecialchars(addslashes(strip_tags(trim($_REQUEST['del']))));
    $result = R::getAll("SELECT * FROM photos where id=".$deleteItem);

    foreach($result as $row) {
        unlink(''. $row['location']);
        unlink(''.$row['location_mini']);
        }
    $result = R::getAll("DELETE  FROM photos WHERE id=" . $deleteItem);
    //header('Location: gallery_view.php?type='.$_SESSION['type'].'#close');
}
?>