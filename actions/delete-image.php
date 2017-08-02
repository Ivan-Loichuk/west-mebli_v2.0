<?php
//delete images from database and folder
include_once "../configure/db.php";
   $deleteItem = htmlspecialchars(addslashes(strip_tags(trim($_REQUEST['id']))));
    $result = R::getAll("SELECT * FROM photos where id=".$deleteItem);
    if(isset($result)) {
        foreach ($result as $row) {
            unlink('../' . $row['location']);
            unlink('../' . $row['location_mini']);
        }
        $result = R::getAll("DELETE  FROM photos WHERE id=" . $deleteItem);
        echo $deleteItem;
    }
    else{

        echo 0;
    }

?>