<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php include_once "css_links.php" ?>

</head>
<body>
<?php
include_once "db.php";
//menu links in html
$links = array('Home' => 'index.php', 'gallery' => 'index.php#galeria', 'order' => 'index.php#order', 'about' => 'index.php#about_us', 'contact' => 'index.php#contact_us');
$menu = "menu2";
include_once "header.php"
?>

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
             echo '<div style="color: green;">' .  $_SESSION['errors'] . '</div><hr>';
             $_SESSION['errors'] = null;
         }
         else{
             echo '<div style="color: red;">' .  $_SESSION['errors'] . '</div><hr>';
             $_SESSION['errors'] = null;
         }
       }
       ?>
   </div>

<?php else :?>
<?php endif; ?>


<?php include_once "../php/select-gallery.php"; ?>
<?php  include "footer.php"?>

</body>
</html>
