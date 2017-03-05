<?php
include_once "db.php";
$data = $_POST;
$result = R::getAll('SELECT * FROM photos where id_kategorii = "2"' );
?>
<section>
<div class="container">
    <div class="row">
        <div class="col-sm-3">
            <nav class="nav-sidebar">
                <ul class="nav tabs">
                    <li class="active"><a href="#tab1" data-toggle="tab">Lorem ipsum</a></li>
                    <li class=""><a href="#tab2" data-toggle="tab">Dolor asit amet</a></li>
                    <li class=""><a href="#tab3" data-toggle="tab">Stet clita</a></li>
                </ul>
            </nav>
        </div>
      <!-- tab content -->
    <div class="col-md-9">
        <div class="tab-content">
            <div class="tab-pane active text-style" id="tab1">
                <div class="row">

<?php foreach($result as $row) { ?>

                    <div class="col-xs-12 col-sm-4">
                        <div class="col-md-12">
                            <a href="<?php echo $row['location']?>" data-lightbox="galeria" class="thumbnail">
                            <img src="<?php echo $row['location_mini'] ?>" name="<?php echo $row['name_photo'] ?>" alt="<?php echo $row['alt'] ?>">
                        </a>
                        </div>

    <?php  $ident = $row['id']; ?>
                    <div class="col-md-3">
                        <form action="" method="post">
                            <input type="hidden" id="del" name="del" value= "<?php echo $ident ?>"/>
                           <button type="submit" id="delete" name="delete">Видалити</button>
                        </form>
                    </div>
                    </div>


<?php } ?>
                </div>
     </div>
  </div>
  </div>
</div><!-- container-->
    </section>