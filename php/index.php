<?php
 $data = $_POST;
$_GET['type'] = "lang_ua";

if (isset($_POST['lang_ru'])) {
    $movies = simplexml_load_file('../xml/lang-ru.xml');
    setcookie("lang", "lang-ru", time()+3600*24);
}
elseif(isset($_POST['lang_ua'])){
    $movies = simplexml_load_file('../xml/lang-ua.xml');
    setcookie("lang", "lang-ua", time()+3600*24);
}
else {
    if (isset($_COOKIE["lang"])) {
        $movies = simplexml_load_file('../xml/' . $_COOKIE["lang"] . '.xml');

    }
    else{
        $movies = simplexml_load_file('../xml/lang-ua.xml');
    }
}
$h3_carousel = [];
$p_carousel = [];
$sections_head = [];
$gallery_a_title = [];
$gallery_img_title = [];
$gallery_img_alt = [];
$gallery_h4 =[];
$how_order_h3 = [];
$how_order_p = [];
$about_us_a = [];
$about_us_a_title = [];
$about_us_img_title =[];
$about_us_img_alt = [];
$about_us_p = [];


foreach ($movies->movie->characters->character[1]->h3 as $h3) {array_push($h3_carousel, $h3);}
foreach ($movies->movie->characters->character[1]->p as $p) {array_push($p_carousel, $p);}

foreach ($movies->movie->characters->character[2]->h2 as $h2) {array_push($sections_head, $h2);}

foreach ($movies->movie->characters->character[3]->a_title as $a_title) {array_push($gallery_a_title, $a_title);}
foreach ($movies->movie->characters->character[3]->img_title as $title) {array_push($gallery_img_title, $title);}
foreach ($movies->movie->characters->character[3]->img_alt as $alt) {array_push($gallery_img_alt, $alt);}
foreach ($movies->movie->characters->character[3]->h4 as $h4) {array_push($gallery_h4, $h4);}

foreach ($movies->movie->characters->character[4]->h3 as $h3) {array_push($how_order_h3, $h3);}
foreach ($movies->movie->characters->character[4]->p as $p) {array_push($how_order_p, $p);}

foreach ($movies->movie->characters->character[5]->a as $a) {array_push($about_us_a, $a);}
foreach ($movies->movie->characters->character[5]->a_title as $a_title) {array_push($about_us_a_title, $a_title);}
foreach ($movies->movie->characters->character[5]->img_title as $img_title) {array_push($about_us_img_title, $img_title);}
foreach ($movies->movie->characters->character[5]->img_alt as $alt) {array_push($about_us_img_alt, $alt);}
foreach ($movies->movie->characters->character[5]->p as $p) {array_push($about_us_p, $p);}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>

<?php include_once "css_links.php" ?>   <!--   import css style-->
</head>
<body>
<?php
     //initialization links to section in index page
  $links = array('Home' => '#header', 'gallery' => '#galeria', 'order' => '#order', 'about' => '#about_us', 'contact' => '#contact_us');
  $menu = "menu";
 include "header.php"
?>
<!--  main slider-->
<section id="carousel">
    <div class="main">
       <div class="container-fluid">
           <div class="row">
                <div class="col-md-12 col-user">
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                            <li data-target="#myCarousel" data-slide-to="3"></li>
                        </ol>
                            <!--Wrapper for slides-->
                        <div class="carousel-inner" role = "listbox" >
                            <div class="item active" >
                                <img src = "../img/korpusni-mebli-na-zamowlenia-rivne.JPG" alt = "фото West mebli виготовлення корпусних меблів" title = "Замовлення меблів у Рівному" >
                                <div class="carousel-caption" >
                                    <h3 ><?php echo $h3_carousel[0]?></h3 >
                                    <p ><?php echo $p_carousel[0]?></p >
                                </div >
                            </div >

                            <div class="item" >
                                <img src = "../img/mebli-dla-spalni-na-zamowlenia-rivne.jpg" alt = "фото меблі для спальної кімнати" title = "Меблі для спальні на замовлення Рівне" >
                                <div class="carousel-caption" >
                                    <h3 > <?php echo $h3_carousel[1]?> </h3 >
                                    <p ><?php echo $p_carousel[1]?></p >
                                </div >
                            </div >

                            <div class="item" >
                                <img src = "../img/mebli-dla-dytiachoi-kimnaty-rivne.jpg" alt = "фото дитячі меблі на замовлення" title = "Меблі для дитячої кімнати на замовлення" >
                                <div class="carousel-caption" >
                                    <h3 ><?php echo $h3_carousel[2]?> </h3 >
                                    <p ><?php echo $p_carousel[2]?></p >
                                </div >
                            </div >

                            <div class="item" >
                                <img src = "../img/mebli-dla-kuchni-na-zamowlenia-rivne.jpg" alt = "фото меблі кухонні під замовлення Рівне" title = "Меблі для кухні на замовлення у рівному" >
                                <div class="carousel-caption" >
                                    <h3 ><?php echo $h3_carousel[3];?> </h3 >
                                    <p > <?php echo $p_carousel[3];?> </p >
                                </div >
                            </div >
                        </div >
                        <!-- Left and right controls -->
                        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="galeria" id="galeria">
    <div class="caption-gallery">
        <h2><?php echo $sections_head[0]; ?></h2>
        <div class="container"><hr></div>
    </div>

    <div class="container mt40">
        <div class="row">
            <article class="col-xs-12 col-sm-6 col-md-4">
                <a href="gallery_view.php" title="<?php echo $gallery_a_title[0];?>" onclick="getContent(1)" class="zoom" >
                    <div class="panel panel-default">
                        <div class="panel-body">
                                <img src="../img/titles/cabinets.jpg" alt="<?php echo $gallery_img_alt[0];?>" title="<?php echo $gallery_img_title[0];?>"/>
                        </div>
                        <div class="panel-footer">
                            <h4><?php echo $gallery_h4[0]; ?></h4>
                        </div>
                    </div>
                </a>
            </article>

            <article class="col-xs-12 col-sm-6 col-md-4">
                <a href="gallery_view.php?type=kitchen-furniture" title="<?php echo $gallery_a_title[1];?>" onclick="getContent(2)" class="zoom">
                    <div class="panel panel-default">
                        <div class="panel-body">
                                <img src="../img/titles/kitchen.jpg" alt="<?php echo $gallery_img_alt[1];?>" title="<?php echo $gallery_img_title[1];?>" />
                        </div>
                        <div class="panel-footer">
                            <h4><?php echo $gallery_h4[1]; ?></h4>
                        </div>
                    </div>
                </a>
            </article>

            <article class="col-xs-12 col-sm-6 col-md-4">
                <a href="gallery_view.php?type=bedroom" title="<?php echo $gallery_a_title[2];?>" class="zoom" >
                    <div class="panel panel-default">
                        <div class="panel-body">
                                <img src="../img/titles/bedroom.jpg" alt="<?php echo $gallery_img_alt[2];?>" title="<?php echo $gallery_img_title[2];?>" />
                        </div>
                        <div class="panel-footer">
                            <h4><?php echo $gallery_h4[2]; ?></h4>
                        </div>
                     </div>
                </a>
            </article>

            <article class="col-xs-12 col-sm-6 col-md-4">
                <a href="gallery_view.php?type=children" title="<?php echo $gallery_a_title[3];?>" class="zoom" >
                    <div class="panel panel-default">
                        <div class="panel-body">
                                <img src="../img/titles/children.jpg" alt="<?php echo $gallery_img_alt[3];?>" title="<?php echo $gallery_img_title[3];?>"/>
                        </div>
                        <div class="panel-footer">
                            <h4><?php echo $gallery_h4[3]; ?></h4>
                        </div>
                    </div>
                </a>
            </article>

            <article class="col-xs-12 col-sm-6 col-md-4">
                <a href="gallery_view.php?type=other" title="<?php echo $gallery_a_title[4];?>" class="zoom" >
                    <div class="panel panel-default">
                        <div class="panel-body">
                                <img src="../img/titles/other.jpg" alt="<?php echo $gallery_img_alt[4];?>" title="<?php echo $gallery_img_title[4];?>" />
                        </div>
                        <div class="panel-footer">
                            <h4><?php echo $gallery_h4[4];?></h4>
                        </div>
                    </div>
                </a>
            </article>

            <article class="col-xs-12 col-sm-6 col-md-4">
                <a href="gallery_view.php?type=office" title="<?php echo $gallery_a_title[5];?>" class="zoom">
                    <div class="panel panel-default">
                        <div class="panel-body">
                                <img src="../img/titles/office.jpg" alt="<?php echo $gallery_img_alt[5];?>" title="<?php echo $gallery_img_title[5];?>"/>
                        </div>
                        <div class="panel-footer">
                            <h4><?php echo $gallery_h4[5]; ?></h4>
                        </div>
                    </div>
                </a>
            </article>
      </div> <!-- end row-->
    </div> <!-- end container -->
</section>
<section class="order" id="order">
    <div class="caption-order">
        <h2><?php echo $sections_head[1]; ?></h2>
        <div class="container"><hr></div>
    </div>

    </div>
    <div class="content-order">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail call-us"  onmouseover="thumbnail_mouse_over('call-us')" onmouseout="thumbnail_mouse_out('call-us')">
                        <div class="caption" id="call-us">
                            <h3><?php echo $how_order_h3[0]; ?></h3>
                            <p><?php echo $how_order_p[0]; ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail meet" onmouseover="thumbnail_mouse_over('meet')" onmouseout="thumbnail_mouse_out('meet')">
                        <div class="caption" id="meet">
                            <h3><?php echo $how_order_h3[1]; ?></h3>
                            <p><?php echo $how_order_p[1]; ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail project" onmouseover="thumbnail_mouse_over('project')" onmouseout="thumbnail_mouse_out('project')"">
                        <div class="caption" id="project">
                            <h3><?php echo $how_order_h3[2]; ?></h3>
                            <p><?php echo $how_order_p[2]; ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail umowa" onmouseover="thumbnail_mouse_over('agreement')" onmouseout="thumbnail_mouse_out('agreement')">
                        <div class="caption" id="agreement">
                            <h3><?php echo $how_order_h3[3]; ?></h3>
                            <p><?php echo $how_order_p[3]; ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail do-project" onmouseover="thumbnail_mouse_over('do-project')" onmouseout="thumbnail_mouse_out('do-project')">
                        <div class="caption" id="do-project">
                            <h3><?php echo $how_order_h3[4]; ?></h3>
                            <p><?php echo $how_order_p[4]; ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail transport" onmouseover="thumbnail_mouse_over('delivery')" onmouseout="thumbnail_mouse_out('delivery')">
                        <div class="caption" id="delivery">
                            <h3><?php echo $how_order_h3[5]; ?></h3>
                            <p><?php echo $how_order_p[5]; ?></p>
                        </div>
                    </div>
                </div>

            </div>  <!-- end row -->
        </div> <!-- end container -->
    </div><!-- end content-order-->
</section>

<section class="about_us" id="about_us">
    <div class="about-caption">
        <h2><?php echo $sections_head[2]; ?></h2>
        <div class="container"><hr></div>
    </div>
    <div class="container">
        <div class="about_us-content">
            <div class="block-content col-md-8 col-sm-8 col-xs-12">
                <div class="title">
                    <a href="#" title="<?php echo $about_us_a_title[0]; ?>"><?php echo $about_us_a[0]; ?></a>
                </div>
                <p><?php echo $about_us_p[0]; ?> <br/><br/></p>
            </div>
            <div class="image-contact col-md-4 col-sm-4 col-xs-6">
                <a href="#contact_us" title="<?php echo $about_us_a_title[1]; ?>"><img src="../img/feedback.png" alt="<?php echo $about_us_img_alt[0]; ?>" title="<?php echo $about_us_img_title[0]; ?>"></a>
            </div>
            <div class="image col-md-3 col-sm-3 col-xs-6" id="image">
                <a href="gallery_view.php" title="<?php echo $about_us_a_title[2]; ?>"><img src="../img/item_furniture2.jpg" alt="<?php echo $about_us_img_alt[1]; ?>" title="<?php echo $about_us_img_title[1]; ?>"></a>
            </div>
            <div class="block-content  col-md-9 col-sm-9 col-xs-12">
                <div class="title">
                    <a href="gallery_view.php" title="<?php echo $about_us_a_title[3]; ?>"><?php echo $about_us_a[1]; ?></a>
                </div>
                <p><?php echo $about_us_p[1]; ?><br/><br/></p>
            </div>
            <div class="block-content col-md-8 col-sm-8 col-xs-12">
                <div class="title">
                    <a href="gallery_view.php?type=bedroom" title="<?php echo $about_us_a_title[4]; ?>"><?php echo $about_us_a[2]; ?></a>
                </div>
                <p><?php echo $about_us_p[2]; ?><br/><br/></p>
            </div>
            <div class="image col-md-4 col-sm-4 col-xs-6" id="image2">
                <a href="gallery_view.php?type=bedroom" title="<?php echo $about_us_a_title[5]; ?>"> <img src="../img/bed_room.jpg" alt="<?php echo $about_us_img_alt[2]; ?>" title="<?php echo $about_us_img_title[2]; ?>"></a>
            </div>
            <div class="image col-md-4 col-sm-4 col-xs-6" id="image3">
                <a href="gallery_view.php?office" title="<?php echo $about_us_a_title[6]; ?>"><img src="../img/office_furniture.jpg" alt="<?php echo $about_us_img_alt[3]; ?>" title="<?php echo $about_us_img_title[3]; ?>"></a>
            </div>
            <dic class="block-content right col-md-8 col-sm-8 col-xs-12">
                <div class="title">
                    <a href="gallery_view.php?office" title="<?php echo $about_us_a_title[7]; ?>"><?php echo $about_us_a[3]; ?></a>
                </div>
                <p><?php echo $about_us_p[3]; ?><br/><br/></p>
            </dic>
            <div class="block-content col-md-8 col-sm-8 col-xs-12">
                <div class="title">
                    <a href="gallery_view.php?type=kitchen-furniture" title="<?php echo $about_us_a_title[8]; ?>"><?php echo $about_us_a[4]; ?></a>
                </div>
                <p><?php echo $about_us_p[4]; ?></p>
            </div>
            <div class="image col-md-4 col-sm-4 col-xs-6" id="image4" style="margin-top: 40px;">
                <a href="gallery_view.php?type=kitchen-furniture" title="<?php echo $about_us_a_title[9]; ?>"> <img src="../img/kuhnia-na_zamowlenia.jpg" alt="<?php echo $about_us_img_alt[4]; ?>" title="<?php echo $about_us_img_title[4]; ?>"></a>
            </div>
        </div>
    </div><!-- end container -->
</section>

<section class="contact_us" id="contact_us">
    <div class="caption-contact">
        <div class="container">
            <div class="row">
                <h2><?php echo $sections_head[3]; ?></h2>
                <div class="container"><hr></div>
            </div>
        </div>
    </div>

    <div class="contact-form">
        <div class="container">
            <div class="row">
                <div class="col-md-offset-1 col-xs-12 col-md-4 col-xs-12">
                    <h3>Зворотній зв'язок</h3>
                    <form action="send_mail.php" method="POST">
                        <input type="text" class="form-control" required="required" name="user_name" id="name" placeholder="Як до вас звертатися?">
                        <span class="error" id="err_name"></span>
                        <input type="email" class="form-control"  required="required" name="user_email" id="email" placeholder="Email">
                        <span class="error" id="err_email"></span>
                        <input type="text" class="form-control" required="required" name="user_number" id="number" placeholder="Телефон">
                        <span class="error" id="err_number"></span>
                        <textarea name="message" id="message"  required="required" cols="30" rows="10"></textarea>
                        <span class="error" id="err_message"></span>
                        <button type="submit" class="btn btn-default button"  disabled="disabled" id="send_btn">Надіслати</button>
                    </form>

                </div>
                <div class="col-md-offset-1 col-md-5 col-xs-12">
                    <div class="info-contact">
                        <h2>Андрій Куришко <br>
                            <p><i class="fa fa-phone"></i>
                                (067) 38 78 803 <br><i class="fa fa-phone"></i>
                                (093) 25 85 861</h2></p>
                        <p><i class="fa fa-envelope-o"></i>
                            andriy.kuryshko@mail.ru</p>
                        <p><i class="fa fa-map-marker"> </i> Україна, м.Рівне</p>
                    </div>
                    <span class="success" id="success_msg"></span>
                </div>
            </div> <!-- end row -->
        </div> <!-- end container -->
    </div>
</section>
<!-- import footer -->
<?php  include "footer.php"?>
<!-- import javaScript files -->
<?php  include "js_links.php"?>

</body>
</html>
