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
    <div class="content-order">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail call-us"  onmouseover="thumbnail_mouse_over('call-us')" onmouseout="thumbnail_mouse_out('call-us')">
                        <div class="caption" id="call-us">
                            <h3>1. Зателефонуйте нам</h3>
                            <p>Зв'яжіться з нами за телефоном або на сайті і домовтеся про зустріч.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail meet" onmouseover="thumbnail_mouse_over('meet')" onmouseout="thumbnail_mouse_out('meet')">
                        <div class="caption" id="meet">
                            <h3>2. Зустріч.</h3>
                            <p>У вигідний для вас час, завітаємо до вас, щоб зрозуміти ваші потреби, виконати попередні заміри і обговорити особливості що стосуються функціональності і дизайну нових меблів.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail project" onmouseover="thumbnail_mouse_over('project')" onmouseout="thumbnail_mouse_out('project')"">
                        <div class="caption" id="project">
                            <h3>3. Проект майбутніх меблів.</h3>
                            <p>Наш досвідчений дизайнер виконає для вас індивідуальний проект. Більше того, ви отримаєте повну інформацію що до цін. Якщо ви вже маєте проект - пришліть його нам - ми швидко представим вам вартість його реалізації.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail umowa" onmouseover="thumbnail_mouse_over('agreement')" onmouseout="thumbnail_mouse_out('agreement')">
                        <div class="caption" id="agreement">
                            <h3>4. Договір.</h3>
                            <p>По узгодженню проекту ми підготуємо договір, у якому будуть описані особливості вспівпраці, перелік робіт, час реалізації а також спосіб оплати.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail do-project" onmouseover="thumbnail_mouse_over('do-project')" onmouseout="thumbnail_mouse_out('do-project')">
                        <div class="caption" id="do-project">
                            <h3>5. Реалізація проекту.</h3>
                            <p>Після підписання договору і отримання авансу, розпочнемо виготовлення ваших меблів. Час реалізації проекту залежить від ступіня важкості проекту, вибраних матеріалів.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail transport" onmouseover="thumbnail_mouse_over('delivery')" onmouseout="thumbnail_mouse_out('delivery')">
                        <div class="caption" id="delivery">
                            <h3>6. Доставка і встановлення.</h3>
                            <p>Встановлення нових меблів виконаємо швидко й професійно - звичайно в зручний для вас час.</p>
                        </div>
                    </div>
                </div>

            </div>  <!-- end row -->
        </div> <!-- end container -->
    </div><!-- end content-order-->
</section>

<section class="about_us" id="about_us">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="about-us">
                    <h2>Про нас</h2>
                    <div class="container"><hr></div>
                    <h2>Замовлення меблів у Рівному</h2>

                    <h3> Виготовлення корпусних меблів на замовлення.
                        Можна зробити індивідуальне замовлення на будь-які корпусні меблі: <span class="underline"> сучасні кухні,
                        кухні з вмонтованою технікою, класичні кухні, шафи-купе, спальні, прихожі, офісні меблі </span>та ін.
                        Індивідуальний підхід до кожного клієнта. Можливість підібрати власний дизайн.<span class="biggest_word"> Встановлення безкоштовно!!</span><br/><br/>
                        Ми виконуємо замовлення різної складності – від полички до масштабних об’єктів.
                        Компанія <span class="color_word" title="West mebli меблі на замовлення Рівне">«WEST-MEBLI»</span> пропонує професійні послуги дизайну меблів на замовлення та виготовлення меблів на замовлення у Рівному для Вашого дому та офісу.
                        Ми пропонуємо меблі на замовлення як по індивідуальному дизайну, так і меблі серійного виробництва на Ваш смак. Ми можемо по бажанню замовника вносити зміни і розробляти дизайн кухні персонально під Ваші індивідуальні потреби.


                        Меблі будуть слугувати довгі роки і радуватимуть своєю якістю, неповторністю та доступними цінами. Ми стараємось для Вас!<br/><br/>


                        <a href="html/szafy_kupe.html" title="Шафи купе на замовлення Рівне West mebli"><h2>Шафи-купе Рівне</h2></a>

                        Шафи купе - це система, яка дозволяє грамотно організувати і використати простір у квартирі чи офісі та одночасно являється елементом інтер’єру та дизайну помешкання.

                        Шафа-купе проектується та виготовляється за індивідуальним проектом, з врахуванням особливостей Вашого приміщення.
                        Внутрішній простір шафи купе проектується під Ваші потреби, і може враховувати будь-які конструктивні побажання.
                        Дизайн шафи купе ексклюзивний!<br/><br/>

                        <a href="html/bed_room.html" title="Спальні на замовлення в Рівному West mebli"><h2>Спальні Рівне</h2></a>

                        Спальні на замовлення - ідеальний спосіб роздобути стильне, затишне і практичне гніздечко для себе і своєї другої половинки. Вибір меблів для спальні – це серйозне завдання, яке стоїть перед власником квартири.
                        Від якості меблів для спалень залежить якість вашого сну і відпочинку. Всі предмети інтер'єру спальної кімнати мають бути практичними і зручними, при цьому мати індивідуальний дизайн.
                        Крім того, ми пропонуємо як спальні гарнітури в комплекті, так і модульні системи, перевагою яких є можливість підібрати окремі елементи для Вашої спальні.<br/><br/>

                        <a href="html/office_furniture.html" title="Меблі для офісу на замовлення Рівне West mebli"><h2>Офісні меблі Рівне </h2></a>

                        Ми пропонуємо якісні меблі для офісу, індивідуальний і ексклюзивний дизайн офісних меблів,
                        виготовлення офісних меблів та проектування і встановлення меблів для офісу.
                        Каталог офісних меблів нашої компанії Ви можете переглянути у розділі офісні меблі на замовлення.<br/><br/>


                        <a href="html/kitchen.html" title="Меблі для кухні на замовлення Рівне West"><h2>Кухні Рівне</h2></a>

                        Всі кухні-west на замовлення виготовляються по індивідуальному проекті, з урахуванням всіх вимог і побажань замовника, розміри меблів, кольори, фурнітура й комплектація.
                        Висока якість наших кухонних меблів досягається завдяки використанню сучасного встаткування й передових технологій.
                        Кухні на замовлення в Рівному від <span class="color_word" title="West mebli меблі на замовлення Рівне">«WEST-MEBLI»</span> – це Ваше правильне і обдумане рішення.
                        Ви зможете вибрати той варіант кухні, що буде повністю відповідати вашій кухні мрії.
                        Саме кухня – місце творчості, в якій Ви неодмінно будете робити свої кулінарні подвиги.

                    </h3></div>
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
