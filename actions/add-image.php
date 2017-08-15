<?php
//add images to database and folder
require "../configure/db.php";
include_once '../languages/lang_ua.php';
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
                    $location_resize = "../img/foto_resize/" . $_FILES["file"]["name"];

                    if (R::count('photos', "location = ? ", array("img/foto_original/" . $_FILES["file"]["name"])) > 0) {
                        $errors = $lang->lang_ua['add_image_errors'][0];
                    }
                    if (empty($errors)) {

                        $file = $_FILES['file']['tmp_name'];
                        $image = addslashes(file_get_contents($_FILES['file']['tmp_name']));
                        $image_name = addslashes($_FILES['file']['name']);
                        move_uploaded_file($file, "../img/foto_original/" . $image_name);

                        list($width, $height) = getimagesize($location);
                        if($width > 2560 || $height > 2000){
                            $percent = 0.3;
                        }
                        elseif($width > 1700 || $height > 1480){
                            $percent = 0.4;
                        }
                        elseif($width > 1280 || $height > 1080) {
                            $percent = 0.5;
                        }
                        elseif ($width > 920 || $height > 800){
                            $percent = 0.6;
                        }
                        elseif ($width > 720){
                            $percent = 0.9;
                        }
                        else{
                            $percent = 1;
                        }

                        $newwidth = $width * $percent;
                        $newheight = $height * $percent;

                        $thumb = imagecreatetruecolor($newwidth, $newheight);
                        $source = imagecreatefromjpeg($location);
                        imagecopyresized($thumb, $source, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);

                        imagejpeg($thumb, $location_resize, 60);


                        $nowe = imagecreatetruecolor(300, 200);
                        $list = list($width, $height, $type, $attr) = getimagesize("../img/foto_original/" . $image_name);
                        $obraz = imagecreatefromjpeg($location);

                        if ($width > $height) {
                            imagecopyresized($nowe, $obraz, 0, 0, 0, 0, 300, 200, $width, $height);
                        } else {
                            imagecopyresized($nowe, $obraz, 0, 0, 0, 0, 300, 200, $width, $height - 900);
                        }
                        imagejpeg($nowe, $location_mini, 60);
                        imagedestroy($nowe);
                        $location = "img/foto_original/" . $_FILES["file"]["name"];
                        $location_resize = "img/foto_resize/" . $_FILES["file"]["name"];
                        $location_mini = "img/miniaturki/mini-" . $_FILES["file"]["name"];

                        $photos = R::dispense('photos');
                        $photos->id = "";
                        $photos->location = $location;
                        $photos->location_mini = $location_mini;
                        $photos->location_resize = $location_resize;
                        $photos->name_photo = $data['name'];
                        $photos->alt = $data['alt'];
                        $photos->id_kategorii = $data['img_category'];

                        if(trim($data['hover_box_info']) != "") {
                            $photos->hover_box_info = $data['hover_box_info'];
                        }
                        else $photos->hover_box_info = NULL;
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
    if($data['img_category'] == 0){ $type = "szafy-kupe-zamowlenia"; }
    elseif ($data['img_category'] == 1){ $type = "mebli-dla-kuhni-zamowlenia"; }
    elseif ($data['img_category'] == 2){ $type = "mebli-dla-spalni-zamowlenia"; }
    elseif ($data['img_category'] == 3){ $type = "mebli-w-dytiachu-kimnatu"; }
    elseif ($data['img_category'] == 4){ $type = "mebli-na-zamowlenia-rivne"; }
    elseif ($data['img_category'] == 5){ $type = "ofisni-mebli-zamowlenia"; }
    elseif ($data['img_category'] ==6){ $type ="matrasy-na-zamowlenia-rivne"; }

    header('Location: ../gallery_view.php?type='.$type);
?>