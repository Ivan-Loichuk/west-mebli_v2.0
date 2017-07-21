<section xmlns:background-image="http://www.w3.org/1999/xhtml">
    <div class="container gallery">
        <div class="row">
            <div class="col-sm-3">
               <nav class="nav-sidebar">   <!-- left slidebar navigation-->
                    <ul class="nav tabs">
                        <li class="active"><a href="gallery_view.php?type=cabinets" >Шафи купе</a></li>
                        <li class=""><a href="gallery_view.php?type=kitchen">Кухні</a></li>
                        <li class=""><a href="gallery_view.php?type=bedroom">Спальні</a></li>
                        <li class=""><a href="gallery_view.php?type=children">Дитячі</a></li>
                        <li class=""><a href="gallery_view.php?type=other">Стінки(різне)</a></li>
                        <li class=""><a href="gallery_view.php?type=office">Офісні меблі</a></li>
                    </ul>
                </nav>
            </div>
            <!-- tab content -->
            <div class="col-md-9">
                <div class="tab-content">
                        <?php
                        if(isset($_GET['type'])){
                            if ($_GET['type'] == "cabinets") {
                                $_SESSION['kategoria'] = 1;
                                $_SESSION['type'] = $_GET['type'];
                                get_image(1);
                            }
                            if($_GET['type'] == "kitchen"){
                                $_SESSION['kategoria'] = 2;
                                $_SESSION['type'] = $_GET['type'];
                                get_image(2);
                            }
                            if($_GET['type'] == "bedroom"){
                                $_SESSION['kategoria'] = 3;
                                $_SESSION['type'] = $_GET['type'];
                                get_image(3);
                            }
                            if($_GET['type'] == "children"){
                                $_SESSION['kategoria'] = 4;
                                $_SESSION['type'] = $_GET['type'];
                                get_image(4);
                            }
                            if($_GET['type'] == "other"){
                                $_SESSION['kategoria'] = 5;
                                $_SESSION['type'] = $_GET['type'];
                                get_image(5);
                            }
                            if($_GET['type'] == "office"){
                                $_SESSION['kategoria'] = 6;
                                $_SESSION['type'] = $_GET['type'];
                                get_image(6);
                            }

                        }
                        else {
                            $_SESSION['bedroom'] = 1;
                            $_SESSION['type'] = "";
                            get_image(1);
                        }

                       function get_image($id)    //  get images from database and view in a gallery
                        {
                            $result = R::getAll("SELECT * FROM photos where id_kategorii =".$id." ORDER BY id DESC");
                            if(empty($result) == true){
                                echo '<div class="col-xs-12 col-sm-4"> <h3>Галерея пуста! </h3>';
                            }
                            else
                            foreach($result as $row) { ?>

                                <div class="col-xs-12 col-sm-4">
                                    <div class="col-md-12">
                                        <a class="" href="<?php echo $row['location']?>" data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
                                            <div style=" background-image: url('<?php echo $row['location_mini']?>'); background-repeat: no-repeat; background-size: cover; background-position: center; height:150px; width: 100%;"></div>
                                        </a>
                                    </div>
                                    <?php  $ident = $row['id']; ?>
                                <?php if(isset($_SESSION['logged_user'])) : ?>
                                 <div class="col-md-3">
                                        <a href="#openModal"><img src="../img/button_cancel.png" style="width: 20px; height: 20px;"></a>

                                        <div id="openModal" class="modalDialog">
                                            <div>
                                                <a href="#close" title="Закрыть" class="close">X</a>
                                                <h2></h2>
                                                <p>Ви спаравді хочете видалити фото?</p>
                                                <form action="" method="post">
                                                    <input type="hidden" id="del" name="del" value= "<?php echo $ident ?>"/>
                                                    <button type="submit" href="#close" id="delete" name="delete">Так</button>

                                                </form>
                                                <a href="#close" title="nodelete" class="nodelete" >Hi</a>
                                            </div>
                                        </div>
                                  </div>

                                <?php else :?>

                                <?php endif; ?>
                                </div>
                            <?php } } ?>
                </div> <!-- end tab-content -->
            </div><!-- end col -->
        </div>  <!-- end row -->
    </div><!-- container-->
</section>
