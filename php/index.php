<?php
 $data = $_POST;
$_GET['type'] = "lang_ua";

include_once 'lang_ua.php';
$lang = new lang_ua();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $lang->lang_ua['index_main_title']?></title>

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

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <img src="../img/korpusni-mebli-na-zamowlenia-rivne.JPG" alt="<?php echo $lang->lang_ua['carousel_img_alt'][0]; ?>" title="<?php echo $lang->lang_ua['carousel_img_title'][0]; ?>" >
                                <div class="carousel-caption">
                                    <h3><?php echo $lang->lang_ua['h3_carousel'][0];?></h3>
                                    <p><?php echo $lang->lang_ua['p_carousel'][0];?></p>
                                </div>
                            </div>

                            <div class="item">
                                <img src="../img/mebli-dla-spalni-na-zamowlenia-rivne.jpg" alt="<?php echo $lang->lang_ua['carousel_img_alt'][1]; ?>" title="<?php echo $lang->lang_ua['carousel_img_title'][1]; ?>">
                                <div class="carousel-caption">
                                    <h3><?php echo $lang->lang_ua['h3_carousel'][1];?></h3>
                                    <p><?php echo $lang->lang_ua['p_carousel'][1];?></p>
                                </div>
                            </div>

                            <div class="item">
                                <img src="../img/mebli-dla-dytiachoi-kimnaty-rivne.jpg" alt="<?php echo $lang->lang_ua['carousel_img_alt'][2]; ?>" title="<?php echo $lang->lang_ua['carousel_img_title'][2]; ?>">
                                <div class="carousel-caption">
                                    <h3><?php echo $lang->lang_ua['h3_carousel'][2];?></h3>
                                    <p><?php echo $lang->lang_ua['p_carousel'][2];?></p>
                                </div>
                            </div>

                            <div class="item">
                                <img src="../img/mebli-dla-kuchni-na-zamowlenia-rivne.jpg" alt="<?php echo $lang->lang_ua['carousel_img_alt'][3]; ?>" title="<?php echo $lang->lang_ua['carousel_img_title'][3]; ?>">
                                <div class="carousel-caption">
                                    <h3><?php echo $lang->lang_ua['h3_carousel'][3];?></h3>
                                    <p><?php echo $lang->lang_ua['p_carousel'][3];?></p>
                                </div>
                            </div>
                        </div>

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
        <h2><?php echo $lang->lang_ua['headers'][0]; ?></h2>
        <div class="container"><hr></div>
    </div>

    <div class="container mt40">
        <div class="row">
            <article class="col-xs-12 col-sm-6 col-md-4">
                <a href="gallery_view.php" title="<?php echo $lang->lang_ua['gallery_a_title'][0];?>" onclick="getContent(1)" class="zoom" >
                    <div class="panel panel-default">
                        <div class="panel-body">
                                <img src="../img/titles/cabinets.jpg" alt="<?php echo $lang->lang_ua['gallery_img_alt'][0];?>" title="<?php echo $lang->lang_ua['gallery_img_title'][0];?>"/>
                        </div>
                        <div class="panel-footer">
                            <h4><?php echo $lang->lang_ua['gallery_h4'][0];?></h4>
                        </div>
                    </div>
                </a>
            </article>

            <article class="col-xs-12 col-sm-6 col-md-4">
                <a href="gallery_view.php?type=kitchen-furniture" title="<?php echo $lang->lang_ua['gallery_a_title'][1];?>" onclick="getContent(2)" class="zoom">
                    <div class="panel panel-default">
                        <div class="panel-body">
                                <img src="../img/titles/kitchen.jpg" alt="<?php echo $lang->lang_ua['gallery_img_alt'][1];?>" title="<?php echo $lang->lang_ua['gallery_img_title'][1];?>" />
                        </div>
                        <div class="panel-footer">
                            <h4><?php echo $lang->lang_ua['gallery_h4'][1];?></h4>
                        </div>
                    </div>
                </a>
            </article>

            <article class="col-xs-12 col-sm-6 col-md-4">
                <a href="gallery_view.php?type=bedroom" title="<?php echo $lang->lang_ua['gallery_a_title'][2];?>" class="zoom" >
                    <div class="panel panel-default">
                        <div class="panel-body">
                                <img src="../img/titles/bedroom.jpg" alt="<?php echo $lang->lang_ua['gallery_img_alt'][2];?>" title="<?php echo $lang->lang_ua['gallery_img_title'][2];?>" />
                        </div>
                        <div class="panel-footer">
                            <h4><?php echo $lang->lang_ua['gallery_h4'][2];?></h4>
                        </div>
                     </div>
                </a>
            </article>

            <article class="col-xs-12 col-sm-6 col-md-4">
                <a href="gallery_view.php?type=children" title="<?php echo $lang->lang_ua['gallery_a_title'][3];?>" class="zoom" >
                    <div class="panel panel-default">
                        <div class="panel-body">
                                <img src="../img/titles/children.jpg" alt="<?php echo $lang->lang_ua['gallery_img_alt'][3];?>" title="<?php echo $lang->lang_ua['gallery_img_title'][3];?>"/>
                        </div>
                        <div class="panel-footer">
                            <h4><?php echo $lang->lang_ua['gallery_h4'][3];?></h4>
                        </div>
                    </div>
                </a>
            </article>

            <article class="col-xs-12 col-sm-6 col-md-4">
                <a href="gallery_view.php?type=other" title="<?php echo $lang->lang_ua['gallery_a_title'][4];?>" class="zoom" >
                    <div class="panel panel-default">
                        <div class="panel-body">
                                <img src="../img/titles/other.jpg" alt="<?php echo $lang->lang_ua['gallery_img_alt'][4];?>" title="<?php echo $lang->lang_ua['gallery_img_title'][4];?>" />
                        </div>
                        <div class="panel-footer">
                            <h4><?php echo $lang->lang_ua['gallery_h4'][4];?></h4>
                        </div>
                    </div>
                </a>
            </article>

            <article class="col-xs-12 col-sm-6 col-md-4">
                <a href="gallery_view.php?type=office" title="<?php echo $lang->lang_ua['gallery_a_title'][5];?>" class="zoom">
                    <div class="panel panel-default">
                        <div class="panel-body">
                                <img src="../img/titles/office.jpg" alt="<?php echo $lang->lang_ua['gallery_img_alt'][5];?>" title="<?php echo $lang->lang_ua['gallery_img_title'][5];?>"/>
                        </div>
                        <div class="panel-footer">
                            <h4><?php echo $lang->lang_ua['gallery_h4'][5];?></h4>
                        </div>
                    </div>
                </a>
            </article>
      </div> <!-- end row-->
    </div> <!-- end container -->
</section>
<section class="order" id="order">
    <div class="caption-order">
        <h2><?php echo $lang->lang_ua['headers'][1]; ?></h2>
        <div class="container"><hr></div>
    </div>

    </div>
    <div class="content-order">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail call-us"  onmouseover="thumbnail_mouse_over('call-us')" onmouseout="thumbnail_mouse_out('call-us')">
                        <div class="caption" id="call-us">
                            <h3><?php echo $lang->lang_ua['how_to_order_h3'][0]; ?></h3>
                            <p><?php echo $lang->lang_ua['how_to_order_p'][0]; ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail meet" onmouseover="thumbnail_mouse_over('meet')" onmouseout="thumbnail_mouse_out('meet')">
                        <div class="caption" id="meet">
                            <h3><?php echo $lang->lang_ua['how_to_order_h3'][1]; ?></h3>
                            <p><?php echo $lang->lang_ua['how_to_order_p'][1]; ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail project" onmouseover="thumbnail_mouse_over('project')" onmouseout="thumbnail_mouse_out('project')"">
                        <div class="caption" id="project">
                            <h3><?php echo $lang->lang_ua['how_to_order_h3'][2]; ?></h3>
                            <p><?php echo $lang->lang_ua['how_to_order_p'][2]; ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail umowa" onmouseover="thumbnail_mouse_over('agreement')" onmouseout="thumbnail_mouse_out('agreement')">
                        <div class="caption" id="agreement">
                            <h3><?php echo $lang->lang_ua['how_to_order_h3'][3]; ?></h3>
                            <p><?php echo $lang->lang_ua['how_to_order_p'][3]; ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail do-project" onmouseover="thumbnail_mouse_over('do-project')" onmouseout="thumbnail_mouse_out('do-project')">
                        <div class="caption" id="do-project">
                            <h3><?php echo $lang->lang_ua['how_to_order_h3'][4]; ?></h3>
                            <p><?php echo $lang->lang_ua['how_to_order_p'][4]; ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail transport" onmouseover="thumbnail_mouse_over('delivery')" onmouseout="thumbnail_mouse_out('delivery')">
                        <div class="caption" id="delivery">
                            <h3><?php echo $lang->lang_ua['how_to_order_h3'][5]; ?></h3>
                            <p><?php echo $lang->lang_ua['how_to_order_p'][5]; ?></p>
                        </div>
                    </div>
                </div>

            </div>  <!-- end row -->
        </div> <!-- end container -->
    </div><!-- end content-order-->
</section>

<section class="about_us" id="about_us">
    <div class="about-caption">
        <h2><?php echo $lang->lang_ua['headers'][2]; ?></h2>
        <div class="container"><hr></div>
    </div>
    <div class="container">
        <div class="about_us-content">
            <div class="block-content col-md-8 col-sm-8 col-xs-12">
                <div class="title">
                    <a href="#" title="<?php echo $lang->lang_ua['about_us_a_title'][0]?>"><?php echo $lang->lang_ua['about_us_a'][0]?></a>
                </div>
                <p><?php echo $lang->lang_ua['about_us_p'][0];?></p>
            </div>
            <div class="image-contact col-md-4 col-sm-4 col-xs-6">
                <a href="#contact_us" title="<?php echo $lang->lang_ua['about_us_a_title'][1]?>"><img src="../img/feedback.png" alt="<?php echo $lang->lang_ua['about_us_img_alt'][0]; ?>" title="<?php echo $lang->lang_ua['about_us_img_title'][0]; ?>"></a>
            </div>
            <div class="image col-md-3 col-sm-3 col-xs-6" id="image">
                <a href="" title="<?php echo $lang->lang_ua['about_us_a_title'][2]?>"><img src="../img/item_furniture2.jpg" alt="<?php echo $lang->lang_ua['about_us_img_alt'][1]; ?>" title="<?php echo $lang->lang_ua['about_us_img_title'][1]; ?>"></a>
            </div>
            <div class="block-content  col-md-9 col-sm-9 col-xs-12">
                <div class="title">
                    <a href="gallery_view.php" title="<?php echo $lang->lang_ua['about_us_a_title'][3]?>"><?php echo $lang->lang_ua['about_us_a'][1]?></a>
                </div>
                <p><?php echo $lang->lang_ua['about_us_p'][1];?></p>
            </div>
            <div class="block-content col-md-8 col-sm-8 col-xs-12">
                <div class="title">
                    <a href="gallery_view.php?type=bedroom" title="<?php echo $lang->lang_ua['about_us_a_title'][4]?>"><?php echo $lang->lang_ua['about_us_a'][2]?></a>
                </div>
                <p><?php echo $lang->lang_ua['about_us_p'][2];?></p>
            </div>
            <div class="image col-md-4 col-sm-4 col-xs-6" id="image2">
                <a href="gallery_view.php?type=bedroom" title="<?php echo $lang->lang_ua['about_us_a_title'][5]?>"> <img src="../img/bed_room.jpg" alt="<?php echo $lang->lang_ua['about_us_img_alt'][2]; ?>" title="<?php echo $lang->lang_ua['about_us_img_title'][2]; ?>"></a>
            </div>
            <div class="image col-md-4 col-sm-4 col-xs-6" id="image3">
                <a href="gallery_view.php?office" title="<?php echo $lang->lang_ua['about_us_a_title'][6]?>"><img src="../img/office_furniture.jpg" alt="<?php echo $lang->lang_ua['about_us_img_alt'][3]; ?>" title="<?php echo $lang->lang_ua['about_us_img_title'][3]; ?>"></a>
            </div>
            <dic class="block-content right col-md-8 col-sm-8 col-xs-12">
                <div class="title">
                    <a href="gallery_view.php?office" title="<?php echo $lang->lang_ua['about_us_a_title'][7]?>"><?php echo $lang->lang_ua['about_us_a'][3]?></a>
                </div>
                <p><?php echo $lang->lang_ua['about_us_p'][3];?></p>
            </dic>
            <div class="block-content col-md-8 col-sm-8 col-xs-12">
                <div class="title">
                    <a href="gallery_view.php?type=kitchen-furniture" title="<?php echo $lang->lang_ua['about_us_a_title'][8]?>"><?php echo $lang->lang_ua['about_us_a'][4]?></a>
                </div>
                <p><?php echo $lang->lang_ua['about_us_p'][4];?></p>
            </div>
            <div class="image col-md-4 col-sm-4 col-xs-6" id="image4" style="margin-top: 40px;">
                <a href="gallery_view.php?type=kitchen-furniture" title="<?php echo $lang->lang_ua['about_us_a_title'][9]?>"> <img src="../img/kuhnia-na_zamowlenia.jpg" alt="<?php echo $lang->lang_ua['about_us_img_alt'][4]; ?>" title="<?php echo $lang->lang_ua['about_us_img_title'][4]; ?>"></a>
            </div>
        </div>
    </div><!-- end container -->
</section>

<section class="contact_us" id="contact_us">
    <div class="caption-contact">
        <div class="container">
            <div class="row">
                <h2><?php echo $lang->lang_ua['headers'][3]; ?></h2>
                <div class="container"><hr></div>
            </div>
        </div>
    </div>

    <div class="contact-form">
        <div class="container">
            <div class="row">
                <div class="col-md-offset-1 col-xs-12 col-md-4 col-xs-12">
                    <h3><?php echo $lang->lang_ua['contact_us_h3']; ?></h3>
                    <form action="send_mail.php" method="POST">
                        <input type="text" class="form-control" required="required" name="user_name" id="name" placeholder="<?php echo $lang->lang_ua['contact_us_form_info'][0]; ?>">
                        <span class="error" id="err_name"></span>
                        <input type="email" class="form-control"  required="required" name="user_email" id="email" placeholder="<?php echo $lang->lang_ua['contact_us_form_info'][1]; ?>">
                        <span class="error" id="err_email"></span>
                        <input type="text" class="form-control" required="required" name="user_number" id="number" placeholder="<?php echo $lang->lang_ua['contact_us_form_info'][2]; ?>">
                        <span class="error" id="err_number"></span>
                        <textarea name="message" id="message"  required="required" cols="30" rows="10"></textarea>
                        <span class="error" id="err_message"></span>
                        <button type="submit" class="btn btn-default button"  disabled="disabled" id="send_btn"><?php echo $lang->lang_ua['contact_us_form_info'][3]; ?></button>
                    </form>

                </div>
                <div class="col-md-offset-1 col-md-5 col-xs-12">
                    <div class="info-contact">
                        <h2><?php echo $lang->lang_ua['contact_us_h2']?></h2>
                        <p><?php echo $lang->lang_ua['contact_us_p'][0]?></p>
                        <p><?php echo $lang->lang_ua['contact_us_p'][1]?></p>
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
