<?php
include_once "db.php";
$links = array('Home' => 'index.php', 'gallery' => 'index.php#galeria', 'order' => 'index.php#order', 'about' => 'index.php#about_us', 'contact' => 'index.php#contact_us');
$menu = "menu2";
include_once "lang_ua.php";
$lang = new lang_ua();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $lang->lang_ua['gallery_main_title']; ?></title>
    <?php include_once "css_links.php" ?>

</head>
<body>
<?php include_once "header.php" ?>

<?php if(isset($_SESSION['logged_user'])) : ?>

<!--    add images in gallery (form) -->
   <div class="container">
       <div class="row">
           <div class="col-md-12">
               <div id="add_images">
                   <form action="add-image.php" method="post" enctype="multipart/form-data">
                       <table class="add_img">
                           <tr>
                               <td><span class="btn btn-default btn-file">
                                       Фото<input type="file" name="file" class="ed">
                                     </span></td>
                               <td> <input name="name" type="text" class="ed" id="brnu" placeholder="Назва картинки"/></td>
                               <td> <input name="alt" type="text" class="ed" id="brnu" placeholder="Альтернативний опис"/></td>
                               <td> <select id="img_category" name="img_category">
                                       <option value="1" selected="selected">Шафи-купе</option>
                                       <option value="2">Кухні</option>
                                       <option value="3">Спальні</option>
                                       <option value="4">Дитячі</option>
                                       <option value="5">Стінки</option>
                                       <option value="6">Офісні меблі</option>
                                       <option value="7">Матраси</option>
                                    </select>
                               </td>
                               <td> <input type="submit" name="Submit" value="Додати" id="submit_add_foto"/></td>
                           </tr>
                       </table>

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
                        <li><input type="button" value="<?php echo $lang->lang_ua['gallery_nav_sidebar'][0]; ?>" onClick="getContent('1')"/></li>
                        <li><input type="button" value="<?php echo $lang->lang_ua['gallery_nav_sidebar'][1]; ?>" onClick="getContent('2')"/></li>
                        <li><input type="button" value="<?php echo $lang->lang_ua['gallery_nav_sidebar'][2]; ?>" onClick="getContent('3')"/></li>
                        <li><input type="button" value="<?php echo $lang->lang_ua['gallery_nav_sidebar'][3]; ?>" onClick="getContent('4')"/></li>
                        <li><input type="button" value="<?php echo $lang->lang_ua['gallery_nav_sidebar'][4]; ?>" onClick="getContent('5')"/></li>
                        <li><input type="button" value="<?php echo $lang->lang_ua['gallery_nav_sidebar'][5]; ?>" onClick="getContent('6')"/></li>
                        <li><input type="button" value="<?php echo $lang->lang_ua['gallery_nav_sidebar'][6]; ?>" onClick="getContent('7')"/></li>
                    </ul>
                </nav>
            </div>
            <!-- tab content -->
            <div class="tab-content col-md-9" id="tab-content">

            </div>
        </div><!-- end col -->
    </div><!-- container-->
</section>

<?php  include "js_links.php"?>
<script>
    $(document).ready(function() {
<?php
        if(isset($_GET['type'])){
            if($_GET['type'] == "cabinets"){ echo 'getContent(1)'; }
            if($_GET['type'] == "kitchen-furniture"){ echo 'getContent(2)'; }
            if($_GET['type'] == "bedroom"){ echo 'getContent(3)'; }
            if($_GET['type'] == "children"){ echo 'getContent(4)'; }
            if($_GET['type'] == "other"){ echo 'getContent(5)'; }
            if($_GET['type'] == "office"){ echo 'getContent(6)'; }
            if($_GET['type'] == "mattresses"){ echo 'getContent(7)'; }
        }
        else { echo 'getContent(1)'; }
?>
    });
</script>
<?php  include "footer.php"?>

</body>
</html>
