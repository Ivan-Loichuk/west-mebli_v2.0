<section>
    <div class="container gallery">
        <div class="row">
            <div class="col-sm-3">
                <nav class="nav-sidebar">
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
                    <div class="row">
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

                        function get_image($id)
                        {
                            $result = R::getAll("SELECT * FROM photos where id_kategorii =".$id);
                            foreach($result as $row) { ?>

                                <div class="col-xs-12 col-sm-4">
                                    <div class="col-md-12">
                                        <a href="<?php echo $row['location']?>">
                                            <img  src="<?php echo $row['location_mini'] ?>" name="<?php echo $row['name_photo'] ?>" alt="<?php echo $row['alt'] ?>">
                                        </a>
                                    </div>
                                    <?php  $ident = $row['id']; ?>
                                <?php if(isset($_SESSION['logged_user'])) : ?>
                                    <div class="col-md-3">
                                        <form action="" method="post">
                                            <input type="hidden" id="del" name="del" value= "<?php echo $ident ?>"/>
                                            <button type="submit" id="delete" name="delete">Видалити</button>
                                        </form>
                                    </div>

                                <?php else :?>

                                <?php endif; ?>
                                </div>


                            <?php } }?>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- container-->
</section>
