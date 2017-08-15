<?php
session_start();
$links = array('logo'=>'index','Home' => 'index', 'gallery' => 'index#galeria', 'order' => 'index#order', 'about' => 'index#about_us', 'contact' => 'index#contact_us');
$menu = "menu2";
include_once "languages/lang_ua.php";
include_once "configure/jandex_metrika.php";
include_once("configure/analyticstracking.php");
$lang = new lang_ua();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="галерея меблів,кухні, спальні, шафи-купе, шафи купе, стінки, офісні меблі, фотогалерея "/>
    <meta name="description" content="Ми виконуємо замовлення різної складності – від полички до масштабних об’єктів, будь-які нестандартні корпусні меблі:
     сучасні кухні, кухні з вмонтованою технікою, класичні кухні, шафи-купе, спальні, прихожі, офісні меблі та ін."/>
    <title><?php echo $lang->lang_ua['gallery_main_title']; ?></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.min.css">
    <link rel="stylesheet" href="css/lightbox.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="shortcut icon" href="img/shortcut_icon.png" type="image/x-icon">

</head>
<body>
<?php include_once "php/header.php" ?>

<?php if(isset($_SESSION['logged_user'])) : ?>

<!--    add images in gallery (form) -->
   <div class="container">
       <div class="row">
           <div class="col-md-12">
               <div id="add_images">
                   <form action="actions/add-image.php" method="post" enctype="multipart/form-data">
                               <span class="btn btn-default btn-file">
                                       Фото<input type="file" name="file" class="ed">
                               </span>
                                <input name="name" type="text" class="ed brnu" id="img_name" placeholder="Назва картинки"/>
                                <input name="alt" type="text" class="ed brnu" id="img_alt" placeholder="Альтернативний опис"/>
                                <select id="img_category" name="img_category">
                                    <?php foreach ($lang->lang_ua['gallery_nav_sidebar'] as $key => $select_item){?>
                                       <option value="<?php echo $key; ?>" <?php if($key == 0) echo 'selected="selected"'; ?>> <?php echo $select_item; ?></option>
                                    <?php }?>
                                </select>

                                <input type="submit" name="Submit" value="Додати" id="submit_add_foto"/>
                            <textarea class="hover_box_info" id="img_hover_box_info" rows="1" cols="158" name="hover_box_info" placeholder="Коротка інформація про продукт, висвітлюється при наведені мишкою на зображення(не обовязково)"></textarea>
                   </form>
               </div>
           </div>
       </div>
       <?php
       if($_SESSION['errors'] != null){
         if($_SESSION['errors'] == "Фото доданo)"){
             echo '<div id="errors" style="color: #1db30a;">' .  $_SESSION['errors'] . '</div><hr style="background-color: #1db30a;">';
             $_SESSION['errors'] = null;
         }
         else{
             echo '<div id="errors"style="color: red;">' .  $_SESSION['errors'] . '</div><hr>';
             $_SESSION['errors'] = null;
         }
       }
       ?>
   </div>

<?php else :?>
<?php endif; ?>
<section xmlns:background-image="http://www.w3.org/1999/xhtml">
    <div class="container gallery">
        <div class="row">
            <div class="col-sm-3">

                <nav class="nav-sidebar">   <!-- left slidebar navigation-->
                    <ul class="nav tabs">
                        <?php foreach ($lang->lang_ua['gallery_nav_sidebar'] as $key => $nav_item){?>
                            <li><input type="button" value="<?php echo $nav_item; ?>" onClick="<?php echo "getContent($key)"?>"/></li>
                        <?php }?>
                    </ul>
                </nav>

            </div>
            <!-- tab content -->
            <div class="tab-content col-md-9" id="tab-content">

            </div>
        </div><!-- end col -->
    </div><!-- container-->
</section>
<?php  include "php/footer.php"?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/headhesive.min.js"></script>
<script src="js/main.min.js"></script>
<script src="js/lightbox.min.js"></script>
<script>
    $(document).ready(function() {
<?php
        if(isset($_GET['type'])){
            if($_GET['type'] == "szafy-kupe-zamowlenia"){ echo 'getContent(0)'; }
            if($_GET['type'] == "mebli-dla-kuhni-zamowlenia"){ echo 'getContent(1)'; }
            if($_GET['type'] == "mebli-dla-spalni-zamowlenia"){ echo 'getContent(2)'; }
            if($_GET['type'] == "mebli-w-dytiachu-kimnatu"){ echo 'getContent(3)'; }
            if($_GET['type'] == "mebli-na-zamowlenia-rivne"){ echo 'getContent(4)'; }
            if($_GET['type'] == "ofisni-mebli-zamowlenia"){ echo 'getContent(5)'; }
            if($_GET['type'] == "matrasy-na-zamowlenia-rivne"){ echo 'getContent(6)'; }
        }
        else { echo 'getContent(0)'; }
?>
    });
</script>
</body>
</html>
