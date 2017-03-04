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
$links = array('Home' => 'index.php', 'gallery' => 'index.php#galeria', 'order' => 'index.php#order', 'about' => 'index.php#about_us', 'contact' => 'index.php#contact_us');
$menu = "menu2";
include_once "header.php"
?>

<?php if(isset($_SESSION['logged_user'])) : ?>
   <div class="container">
       <div class="row">
           <div class="col-md-12">
               <div id="add_images">
                   <form action="add-image.php" method="post" enctype="multipart/form-data">
                       <table class="add_img">
                           <tr>
                               <td><label for="image"> Вибери фото: </label></td><td> <input type="file" name="image" class="ed"></td>
                               <td><label for="name"> Назва картинки </label></td><td> <input name="name" type="text" class="ed" id="brnu" /></td>
                               <td><label for="alt"> Алтернативний опис: </label></td><td>  <input name="alt" type="text" class="ed" id="brnu" /></td>
                               <td><label for="kategoria">  </label></td><td>  <input type="hidden" name="kategoria" value="2" ></td>
                               <td><label for="Submit"> </label></td><td>   <input type="submit" name="Submit" value="Додати" id="button1" /></td>
                           </tr>
                       </table>

                   </form>
               </div>
           </div>
       </div></div>

<?php else :?>

<?php endif; ?>

<?php include_once "view-gallery.php"; ?>

<div class="container">
    <div class="row">
        <h2 class="col-xs-12">Gallery</h2>
    </div><!-- /row -->
    <div class="row">
        <div class="col-xs-12 col-sm-3">
            <div class="list-group">
                <span href="#" class="list-group-item active">
                Apples
                </span>
                <a href="#" class="list-group-item">
                    Honey Crisp
                </a>
                <a href="#" class="list-group-item">
                    Fuji
                </a>
                <a href="#" class="list-group-item">
                    Crimson
                </a>
                <a href="#" class="list-group-item">
                    Gala
                </a>
                <a href="#" class="list-group-item">
                    Golden Delicious
                </a>
                <a href="#" class="list-group-item">
                    Red Delicious (Yuck)
                </a>
            </div><!-- /list-group -->
        </div><!-- /col -->
        <div class="col-xs-12 col-sm-9">
            <div class="row">
                <div class="col-xs-12 col-sm-4">
                    <a href="#" class="thumbnail">
                        <img src="//placehold.it/300x450">
                    </a>
                </div><!-- /col -->
                <div class="col-xs-12 col-sm-4">
                    <a href="#" class="thumbnail">
                        <img src="//placehold.it/300x450">
                    </a>
                </div><!-- /col -->
                <div class="col-xs-12 col-sm-4">
                    <a href="#" class="thumbnail">
                        <img src="//placehold.it/300x450">
                    </a>
                </div><!-- /col -->
            </div><!-- /row -->
            <div class="row">
                <div class="col-xs-12 col-sm-4">
                    <a href="#" class="thumbnail">
                        <img src="//placehold.it/300x450">
                    </a>
                </div><!-- /col -->
                <div class="col-xs-12 col-sm-4">
                    <a href="#" class="thumbnail">
                        <img src="//placehold.it/300x450">
                    </a>
                </div><!-- /col -->
                <div class="col-xs-12 col-sm-4">
                    <a href="#" class="thumbnail">
                        <img src="//placehold.it/300x450">
                    </a>
                </div><!-- /col -->
            </div><!-- /row -->
        </div><!-- /col -->
    </div><!-- /row -->
</div><!-- /container -->

<?php  include "footer.php"?>
<?php  include "js_links.php"?>
</body>
</html>
