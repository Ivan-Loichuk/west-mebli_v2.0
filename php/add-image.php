<?php
require "db.php";
$data = $_POST;
if(isset($_POST['Submit']))
{
    if (is_uploaded_file($_FILES['image']['tmp_name'])) {
        $typ = $_FILES['image']['type'];
        if ($typ == 'image/jpeg' || $typ == 'image/jpg' || $typ == 'image/png') {

            $location="../img/foto_original/" . $_FILES["image"]["name"];
            $location_mini="../img/miniaturki/mini-". $_FILES["image"]["name"];

            if(R::count('photos', "location = ? ", array($location)) > 0){
                $errors = 'Таке фото вже існує!!';
            }
            if(empty($errors)) {

                $file = $_FILES['image']['tmp_name'];
                $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
                $image_name = addslashes($_FILES['image']['name']);

                move_uploaded_file($_FILES["image"]["tmp_name"], "../img/foto_original/" . $_FILES["image"]["name"]);

                list($width, $height) = getimagesize($location);

                $wys = 350;
                $szer = 450;
                $skalaWys = 1;
                $skalaSzer = 1;
                $skala = 1;
                if ($width > $height) {
                    $newH = 210;
                    $newW = 350;
                }
                if ($height > $width){
                    $newH = 530;
                    $newW = 300;
                }



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
                $photos->id_kategorii = $_SESSION['kategoria'];

                R::store($photos);

                $errors = "Фото доданo)";
                $_SESSION['errors'] = $errors;
            }
            else
            {
                $_SESSION['errors'] = $errors;
            }
        }
        else echo "Неправильний тип файлу";
    }

    else {
        $errors = 'Не вибрано фото!!';
        $_SESSION['errors'] = $errors;
    }
}
header('Location: gallery_view.php?type='.$_SESSION['type']);
?>