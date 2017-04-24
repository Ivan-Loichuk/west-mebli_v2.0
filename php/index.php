<?php
 $data = $_POST;
$_GET['type'] = "lang_ua";
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

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <img src="../img/kitchen_carousel.JPG" alt="Chania">
                                <div class="carousel-caption">
                                    <h3>Замовлення меблів у Рівному</h3>
                                    <p>Виготовлення корпусних меблів на замовлення.</p>
                                </div>
                            </div>

                            <div class="item">
                                <img src="../img/slide2.jpg" alt="Chania">
                                <div class="carousel-caption">
                                    <h3>Сучасні офісні меблі</h3>
                                    <p>The atmosphere in Chania has a touch of Florence and Venice.</p>
                                </div>
                            </div>

                            <div class="item">
                                <img src="../img/kuhnia_cherwona_na_zamowlenia.jpg" alt="Flower">
                                <div class="carousel-caption">
                                    <h3>Flowers</h3>
                                    <p>Beatiful flowers in Kolymbari, Crete.</p>
                                </div>
                            </div>

                            <div class="item">
                                <img src="../img/slidsde1.jpg" alt="Flower">
                                <div class="carousel-caption">
                                    <h3>Flowers</h3>
                                    <p>Beatiful flowers in Kolymbari, Crete.</p>
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
        <h2>Галерея робіт</h2>
        <div class="container"><hr></div>
    </div>

    <div class="container mt40">
        <div class="row">
            <article class="col-xs-12 col-sm-6 col-md-4">
                <a href="gallery_view.php?type=cabinets" title="шафи купе на замовлення" class="zoom" >
                    <div class="panel panel-default">
                        <div class="panel-body">

                                <img src="../img/titles/cabinets.jpg" alt="Nature Portfolio" />

                        </div>
                        <div class="panel-footer">
                            <h4>Шафи купе</h4>
                        </div>
                    </div>
                </a>
            </article>

            <article class="col-xs-12 col-sm-6 col-md-4">
                <a href="gallery_view.php?type=kitchen" title="Food Portfolio" class="zoom">
                    <div class="panel panel-default">
                        <div class="panel-body">
                                <img src="../img/titles/kitchen.jpg" alt="Food Portfolio" />
                        </div>
                        <div class="panel-footer">
                            <h4>Кухні</h4>
                        </div>
                    </div>
                </a>
            </article>

            <article class="col-xs-12 col-sm-6 col-md-4">
                <a href="gallery_view.php?type=bedroom" title="Sports Portfolio" class="zoom" >
                    <div class="panel panel-default">
                        <div class="panel-body">
                                <img src="../img/titles/bedroom.jpg" alt="Sports Portfolio" />
                        </div>
                        <div class="panel-footer">
                            <h4>Спальні</h4>
                        </div>
                     </div>
                </a>
            </article>

            <article class="col-xs-12 col-sm-6 col-md-4">
                <a href="gallery_view.php?type=children" title="People Portfolio" class="zoom" >
                    <div class="panel panel-default">
                        <div class="panel-body">
                                <img src="../img/titles/children.jpg" alt="People Portfolio" />
                        </div>
                        <div class="panel-footer">
                            <h4>В дитячу</h4>
                        </div>
                    </div>
                </a>
            </article>

            <article class="col-xs-12 col-sm-6 col-md-4">
                <a href="gallery_view.php?type=other" title="Nature Portfolio" class="zoom" >
                    <div class="panel panel-default">
                        <div class="panel-body">
                                <img src="../img/titles/other.jpg" alt="Nature Portfolio" />
                        </div>
                        <div class="panel-footer">
                            <h4>Стінки</h4>
                        </div>
                    </div>
                </a>
            </article>

            <article class="col-xs-12 col-sm-6 col-md-4">
                <a href="gallery_view.php?type=office" title="Food Portfolio" class="zoom">
                    <div class="panel panel-default">
                        <div class="panel-body">
                                <img src="../img/titles/office.jpg" alt="Food Portfolio" />
                        </div>
                        <div class="panel-footer">
                            <h4>Офісні меблі</h4>
                        </div>
                    </div>
                </a>
            </article>
      </div> <!-- end row-->
    </div> <!-- end container -->
</section>
<section class="order" id="order">
    <div class="info-order">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Як замовити?</h2>
                    <div class="container"><hr></div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-6">
                <div class="media">
                    <div class="media-left">
                        <img class="media-object" src="../img/contact-us.jpg" alt="...">
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">1. Зателефонуйте нам.</h4>
                        1. Зателефонуйте нам.
                        Зв'яжіться з нами за телефоном або на сайті і домовтеся про зустріч.
                    </div>
                </div>
                <div class="media">
                    <div class="media-left">
                        <img class="media-object" src="../img/SPOTKANIE.jpg" alt="...">
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">1. Зателефонуйте нам.</h4>
                        2. Зустріч.
                        У вигідний для вас час, завітаємо до вас, щоб зрозуміти ваші потреби, виконати попередні заміри і
                        обговорити особливості що стосуються функціональності і дизайну нових меблів.
                    </div>
                </div>
                <div class="media">
                    <div class="media-left">
                        <img class="media-object" src="../img/PROJEKT.jpg" alt="...">
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">1. Зателефонуйте нам.</h4>
                        3. Проект майбутніх меблів.
                        Наш досвідчений дизайнер виконає для вас індивідуальний проект. Більше того, ви отримаєте повну інформацію що до цін. Якщо ви вже маєте проект - пришліть його нам - ми швидко представим вам вартість його реалізації.
                    </div>
                </div>
            </div> <!-- end col -->
            <div class="col-xs-12 col-md-6">
                <div class="media">
                    <div class="media-left">
                        <img class="media-object" src="../img/UMOWA.jpg" alt="...">
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">1. Зателефонуйте нам.</h4>
                        4. Договір.
                        По узгодженню проекту ми підготуємо договір, у якому будуть описані особливості вспівпраці,
                        перелік робіт, час реалізації а також спосіб оплати.
                    </div>
                </div>
                <div class="media">
                    <div class="media-left">
                        <img class="media-object" src="../img/REALIZACJA.jpg" alt="...">
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">1. Зателефонуйте нам.</h4>
                        5. Реалізація проекту.
                        Після підписання договору і отримання авансу, розпочнемо виготовлення ваших меблів.
                        Час реалізації проекту залежить від ступіня важкості проекту, вибраних матеріалів.
                    </div>
                </div>
                <div class="media">
                    <div class="media-left">
                        <img class="media-object" src="../img/TRANSPORT.jpg" alt="...">
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">1. Зателефонуйте нам.</h4>
                        6. Доставка і встановлення.
                        Встановлення нових меблів виконаємо швидко й професійно - звичайно в зручний для вас час.
                    </div>
                </div>
            </div> <!-- end col -->
        </div>  <!-- end row -->
    </div> <!-- end container -->
</section>

<section class="about_us" id="about_us">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="about-us">
                    <h2>Про нас</h2>
                    <div class="container"><hr></div>
                    <p>Together fill over creature his so created make creature every grass stars, him. Face their you herb appear first heaven whales won&#39;t he appear the seasons be living wherein whales itself saying i you&#39;re stars, dominion fruitful, sixth second bring waters.</p>

                    <p>Our forth itself be whose. Fifth void first bearing the cattle created, void replenish so. To waters moving kind under.</p>

                    <p>All be deep abundantly beginning us he unto. Deep grass it light living it man, his may light spirit face good for to fruit forth you hath, itself. Light they&#39;re face said it subdue you&#39;ll fruit. Fish female. Own.</p>

                    <p>Together fill over creature his so created make creature every grass stars, him. Face their you herb appear first heaven whales won&#39;t he appear the seasons be living wherein whales itself saying i you&#39;re stars, dominion fruitful, sixth second bring waters.</p>

                    <p>Our forth itself be whose. Fifth void first bearing the cattle created, void replenish so. To waters moving kind under.</p>

                    <p>All be deep abundantly beginning us he unto. Deep grass it light living it man, his may light spirit face good for to fruit forth you hath, itself. Light they&#39;re face said it subdue you&#39;ll fruit. Fish female. Own.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="contact_us" id="contact_us">
    <div class="caption-contact">
        <div class="container">
            <div class="row">
                <h2>Контакт</h2>
                <div class="container"><hr></div>
            </div>
        </div>
    </div>

    <div class="contact-form">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-4 col-xs-12">
                    <h3>Зворотній зв'язок</h3>
                    <form>
                        <div class="signin_form">
                            <input type="text" class="form-control" id="name" placeholder="Як до вас звертатися?">
                        </div>
                        <div class="signin_form">
                            <input type="email" class="form-control" id="email" placeholder="Email">
                        </div>
                        <div class="signin_form">
                            <input type="text" class="form-control" id="number" placeholder="Телефон">
                        </div>
                        <textarea name="message" id="message" cols="30" rows="10"></textarea>
                        <button type="submit" class="btn btn-default btn-signin  button">Надіслати</button>
                    </form>

                </div>
                <div class="col-md-offset-1 col-md-6 col-xs-12">
                    <div class="info-contact">
                        <h2>Андрій Куришко <br>
                            <p><i class="fa fa-phone"></i>
                                (067) 38 78 803 <br><i class="fa fa-phone"></i>
                                (093) 25 85 861</h2></p>
                        <p><i class="fa fa-envelope-o"></i>
                            andriy.kuryshko@mail.ru</p>
                        Україна, м.Рівне</p>
                    </div>
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
