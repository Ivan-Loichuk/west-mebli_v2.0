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
}
?>
<header>
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
                            <a class="navbar-brand" href="index.php"><img src="../img/Logo.png" alt="logotype" class="logotype"></a>

                        </div>
                        <div class="collapse navbar-collapse" id="myNavbar">

                            <ul class="nav navbar-nav menu">
                              <?php  foreach ($movies->movie->characters->character->nav_menu as $nav_menu) {

                                switch((string) $nav_menu['type']) { // Получение атрибутов элемента по индексу
                                case '1':
                                echo '<li role="presentation" class=""><a href="'. $links['Home'] . '">'.$nav_menu.'</a></li>';
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
<!--                                <li role="presentation" class=""><a href="--><?php //echo $links['Home'];?><!--">--><?php //echo $nav_menu;?><!--</a></li>-->
<!--                                <li role="presentation"><a href="--><?php //echo $links['gallery'];?><!--">--><?php //echo $nav_menu;?><!--</a></li>-->
<!--                                <li role="presentation"><a href="--><?php //echo $links['order'];?><!--">--><?php //echo $nav_menu;?><!--</a></li>-->
<!--                                <li role="presentation"><a href="--><?php //echo $links['about'];?><!--">--><?php //echo $nav_menu;?><!--</a></li>-->
<!--                                <li role="presentation"><a href="--><?php //echo $links['contact'];?><!--">--><?php //echo $nav_menu;?><!--</a></li>-->
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>

        </div>
    </div>
</header>
      