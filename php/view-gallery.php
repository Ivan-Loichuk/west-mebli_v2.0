<?php
include_once "db.php";
$data = $_POST;


 $result = R::getAll('SELECT * FROM photos where id_kategorii = "2"' );

if($result === FALSE) {
    echo "Error";
}
else {
    foreach ($result as $row) {

        echo '<div class="elem">';

        echo '<p><a href="' . $row['location'] . '" data-lightbox="galeria"> <img src="' . $row['location_mini'] . '" name="' . $row['name_photo'] . '" alt="' . $row['alt'] . '"> </a></p>';
        $ident = $row['id'];
        echo '<div><form action="" method="post">
           <input type="hidden" id="del" name="del" value= "' . $ident . '"/>
           <button type="submit" id="delete" name="delete">Видалити</button>
                 </form></div>';
        echo '</div>';

    }
}

?>
<!--<!--<button type="submit" id="delete" name="delete"><img src="src/delete-300x300.jpg"></button>-->