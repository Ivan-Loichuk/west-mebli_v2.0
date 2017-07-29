<?php
//add images to database and folder

require "db.php";
$data = $_POST;
if(isset($_POST['Submit'])) {
   if (is_uploaded_file($_FILES['file']['tmp_name'])) {
       $typ = $_FILES['file']['type'];
       if ($typ == 'image/jpeg' || $typ == 'image/jpg' || $typ == 'image/png') {
           if (@getimagesize($_FILES["file"]["tmp_name"]) !== false) {
               if ($_FILES['file']['size'] < 5000000) {

                   $location = "../img/foto_original/" . $_FILES["file"]["name"];
                   $location_mini = "../img/miniaturki/mini-" . $_FILES["file"]["name"];

                   if (R::count('photos', "location = ? ", array($location)) > 0) {
                       $errors = 'Таке фото вже існує!!';
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

                           if($width > $height){
                               imagecopyresized($nowe, $obraz, 0, 0, 0, 0, 300, 200, $width, $height);
                           }
                           else{
                               imagecopyresized($nowe, $obraz, 0, 0, 0, 0, 300, 200, $width, $height-900);
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

                           $errors = "Фото доданo)";
                           $_SESSION['errors'] = $errors;
                   }
                   else $_SESSION['errors'] = $errors;
               }
               else echo "Великий розмір файлу!!";
           }
           else echo "Неправильний тип файлу";
       }
       else echo "Неправильний тип файлу";
   }
   else echo "Не вибрано фото!!";
}
header('Location: gallery_view.php');
?>