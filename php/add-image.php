<?php
require "db.php";

$data = $_POST;
if(isset($_POST['Submit']))
{
    if (is_uploaded_file($_FILES['image']['tmp_name'])) {
        $typ = $_FILES['image']['type'];
        if ($typ == 'image/jpeg') {

            $location="../img/foto_original/" . $_FILES["image"]["name"];
            $location_mini="../img/miniaturki/mini-". $_FILES["image"]["name"];

            if(R::count('photos', "location = ? ", array($location)) > 0){
                $errors[] = 'Таке фото вже існує!!';
            }
            if(empty($errors)) {

                $file = $_FILES['image']['tmp_name'];
                $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
                $image_name = addslashes($_FILES['image']['name']);

                move_uploaded_file($_FILES["image"]["tmp_name"], "../img/foto_original/" . $_FILES["image"]["name"]);

                list($width, $height) = getimagesize($location);

                $wys = 200;
                $szer = 300;
                $skalaWys = 1;
                $skalaSzer = 1;
                $skala = 1;
                if ($width > $szer)
                    $skalaSzer = $szer/$width;
                if ($height > $wys)
                    $skalaWys = $wys/$height;
                if ($skalaWys <= $skalaSzer) $skala = $skalaWys;
                else $skala = $skalaSzer;

                $newH = $height*$skala;
                $newW = $width*$skala;


                $nowe = imagecreatetruecolor($newW, $newH);
                $list = list($width, $height, $type, $attr) = getimagesize("../img/foto_original/".$image_name);
                $obraz = imagecreatefromjpeg($location);

                imagecopyresized($nowe, $obraz, 0, 0, 0, 0, $newW, $newH, $width, $height);
                imagejpeg($nowe, $location_mini, 100);

                $photos = R::dispense('photos');
                $photos->id = "";
                $photos->location = $location;
                $photos->location_mini = $location_mini;
                $photos->name_photo = $data['name'];
                $photos->alt = $data['alt'];
                $photos->id_kategorii = $data['kategoria'];

                R::store($photos);
                echo '<div style="color: green;"> Додано!</div><hr>';
            }
            else
            {
                echo '<div style="color: red;">'.array_shift($errors).'</div><hr>';
            }
        }

        else echo "Неправильний тип файлу";
    }

    else {
        $errors[] = 'Не вибрано фото!!';
        echo '<div style="color: red;">' . array_shift($errors) . '</div><hr>';
    }
}
?>