<?php
//add images to database and folder
require "db.php";
include_once 'lang_ua.php';
$lang = new lang_ua();
$errors = null;
$type = null;
$data = $_POST;
if(isset($_POST['Submit'])) {
   if (is_uploaded_file($_FILES['file']['tmp_name'])) {
       $typ = $_FILES['file']['type'];
       if ($typ == 'image/jpeg' || $typ == 'image/jpg' || $typ == 'image/png') {
           if (@getimagesize($_FILES["file"]["tmp_name"]) !== false) {
               if ($_FILES['file']['size'] < 5000000) {
                   if(isset($data['img_category'])){

                    $location = "../img/foto_original/" . $_FILES["file"]["name"];
                    $location_mini = "../img/miniaturki/mini-" . $_FILES["file"]["name"];

                    if (R::count('photos', "location = ? ", array($location)) > 0) {
                        $errors = $lang->lang_ua['add_image_errors'][0];
                    }
                    if (empty($errors)) {

                        $file = $_FILES['file']['tmp_name'];
                        $image = addslashes(file_get_contents($_FILES['file']['tmp_name']));
                        $image_name = addslashes($_FILES['file']['name']);

                        move_uploaded_file($file, "../img/foto_original/" . $image_name);

                        list($width, $height) = getimagesize($location);


                        $nowe = imagecreatetruecolor(300, 200);
                        $list = list($width, $height, $type, $attr) = getimagesize("../img/foto_original/" . $image_name);
                        $obraz = imagecreatefromjpeg($location);

                        if ($width > $height) {
                            imagecopyresized($nowe, $obraz, 0, 0, 0, 0, 300, 200, $width, $height);
                        } else {
                            imagecopyresized($nowe, $obraz, 0, 0, 0, 0, 300, 200, $width, $height - 900);
                        }
                        imagejpeg($nowe, $location_mini, 100);
                        imagedestroy($nowe);

                        $photos = R::dispense('photos');
                        $photos->id = "";
                        $photos->location = $location;
                        $photos->location_mini = $location_mini;
                        $photos->name_photo = $data['name'];
                        $photos->alt = $data['alt'];
                        $photos->id_kategorii = $data['img_category'];

                        R::store($photos);

                        $errors = $lang->lang_ua['add_image_errors'][1];
                    }
                     else $_SESSION['errors'] = $errors;
                   }
                   else $errors = $lang->lang_ua['add_image_errors'][2];
               }
               else $errors = $lang->lang_ua['add_image_errors'][3];
           }
           else $errors = $lang->lang_ua['add_image_errors'][4];
       }
       else $errors = $lang->lang_ua['add_image_errors'][4];
   }
   else $errors = $lang->lang_ua['add_image_errors'][5];
}
    $_SESSION['errors'] = $errors;
    if($data['img_category'] == 1){ $type = "cabinets"; }
    elseif ($data['img_category'] == 2){ $type = "kitchen-furniture"; }
    elseif ($data['img_category'] == 3){ $type = "bedroom"; }
    elseif ($data['img_category'] == 4){ $type = "children"; }
    elseif ($data['img_category'] == 5){ $type = "other"; }
    elseif ($data['img_category'] == 6){ $type = "office"; }
    elseif ($data['img_category'] ==7){ $type ="mattresses"; }

    header('Location: gallery_view.php?type='.$type);
?>