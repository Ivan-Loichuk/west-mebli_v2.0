<?php

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
?>
<header id="header">
    <div class="nav-menu">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <nav class="navbar navbar-inverse" id="<?php echo $menu;?>">     <!-- navigation menu -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="index.php" title="logotype west mebli меблі на замовлення"><img src="../img/west-mebli_logotype%20.png"  class="logotype" alt="logotype" title="logotype west mebli виготовлення меблів у Рівному"></a>
                        </div>
                        <div class="collapse navbar-collapse" id="myNavbar">
                            <ul class="nav navbar-nav menu">
                              <?php  foreach ($movies->movie->characters->character[0]->nav_menu as $nav_menu) {

                                switch((string) $nav_menu['type']) { // Получение атрибутов элемента по индексу
                                case '1':
                                echo '<li role="presentation" class=""><a href="'.$links['Home'] . '">'.$nav_menu.'</a></li>';
                                break;
                                case '2':
                                echo '<li role="presentation" class=""><a href="'. $links['gallery'] . '">'.$nav_menu.'</a></li>';
                                break;
                                case '3':
                                echo '<li role="presentation" class=""><a href="'. $links['order'] . '">'.$nav_menu.'</a></li>';
                                break;
                                case '4':
                                echo '<li role="presentation" class=""><a href="'. $links['about'] . '">'.$nav_menu.'</a></li>';
                                break;
                                case '5':
                                echo '<li role="presentation" class=""><a href="'. $links['contact'] . '">'.$nav_menu.'</a></li>';
                                break;
                                }
                                }
                                ?>
                             </ul>
                        </div>
                    </nav>
                </div> <!-- end col -->
            </div> <!-- end row -->
        </div> <!--end container -->
    </div>
</header>
<section>
    <div class="nav-info">
        <div class="container">
            <div class="row">
                <div class="language col-md-6 col-sm-4 col-xs-6">
                    <ul class="lang-ul-top">
                        <li>
                            <form  action="index.php" method="post" >
                                <input name="lang_ru" type="submit" value="Русский">
                                <input name="lang_ua" type="submit" value="Українська">
                            </form>
                        </li>
                    </ul>
                </div>
                <div class="location col-md-3 col-sm-4  col-xs-6">
                    <ul>
                        <li><i class="fa fa-map-marker"></i> Україна, м.Рівне</li>
                    </ul>
                </div>
                <div class="phone-number col-md-3 col-sm-4  col-xs-12">
                    <ul>
                        <li>
                            <i class="fa fa-phone"></i> (067) 38 78 803
                        </li>
                        <li>
                            <i class="fa fa-phone"></i> (093) 25 85 861
                        </li>
                    </ul>

                </div>
            </div> <!-- end row -->
        </div> <!-- end container -->
    </div> <!-- end nav-info -->
</section>
      