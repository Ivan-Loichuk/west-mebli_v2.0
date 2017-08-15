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
                            <a class="navbar-brand" href="index" title="logotype west mebli меблі на замовлення"><img src="img/west-mebli_logotype.png" class="logotype" alt="logotype" title="logotype west mebli виготовлення меблів у Рівному"></a>
                        </div>
                        <div class="collapse navbar-collapse" id="myNavbar">
                            <ul class="nav navbar-nav menu">
                                <li role="presentation" class=""><a href="<?php echo $links['Home'] ;?>"> <?php echo $lang->lang_ua['navigation_items'][0]; ?></a></li>
                                <li role="presentation" class=""><a href="<?php echo $links['gallery'];?>"><?php echo $lang->lang_ua['navigation_items'][1]; ?></a></li>
                                <li role="presentation" class=""><a href="<?php echo $links['order']; ?>"><?php echo $lang->lang_ua['navigation_items'][2]; ?></a></li>
                                <li role="presentation" class=""><a href="<?php echo $links['about']; ?>"><?php echo $lang->lang_ua['navigation_items'][3]; ?></a></li>
                                <li role="presentation" class=""><a href="<?php echo $links['contact']; ?>"><?php echo $lang->lang_ua['navigation_items'][4]; ?></a></li>
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
                            <form action="index.php" method="post" >
                                <input name="lang_ru" type="submit" value="Русский">
                                <input name="lang_ua" type="submit" value="Українська">
                            </form>
                        </li>
                    </ul>
                </div>
                <div class="location col-md-3 col-sm-4  col-xs-6">
                    <ul>
                        <li><?php echo $lang->lang_ua['header_li'][0]?></li>
                    </ul>
                </div>
                <div class="phone-number col-md-3 col-sm-4  col-xs-12">
                    <ul>
                        <li><?php echo $lang->lang_ua['header_li'][1]?></li>
                        <li><?php echo $lang->lang_ua['header_li'][2]?></li>
                    </ul>

                </div>
            </div> <!-- end row -->
        </div> <!-- end container -->
    </div> <!-- end nav-info -->
</section>
      