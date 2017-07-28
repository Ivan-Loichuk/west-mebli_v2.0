<section xmlns:background-image="http://www.w3.org/1999/xhtml">
    <div class="container gallery">
        <div class="row">
            <div class="col-sm-3">
               <nav class="nav-sidebar">   <!-- left slidebar navigation-->
                    <ul class="nav tabs">
                        <li><input type="button" value="Шафи купе" onClick="getContent('1')"/></li>
                        <li><input type="button" value="Кухні" onClick="getContent('2')"/></li>
                        <li><input type="button" value="Спальні" onClick="getContent('3')"/></li>
                        <li><input type="button" value="Дитячі" onClick="getContent('4')"/></li>
                        <li><input type="button" value="Стінки(різне)" onClick="getContent('5')"/></li>
                        <li><input type="button" value="Офісні меблі" onClick="getContent('6')"/></li>
                        <li><input type="button" value="Матраси" onClick="getContent('7')"/></li>
                    </ul>
                </nav>
            </div>
            <!-- tab content -->
            <div class="tab-content col-md-9" id="tab-content">

            </div>
        </div><!-- end col -->
    </div><!-- container-->
</section>
<?php  include "js_links.php"?>


<script>
    $(document).ready(function() {
    <?php if(isset($_GET['type'])){
        if($_GET['type'] == "kitchen-furniture"){
            echo 'getContent(2)';
        }
        if($_GET['type'] == "bedroom"){
            echo 'getContent(3)';
        }
        if($_GET['type'] == "children"){
            echo 'getContent(4)';
        }
        if($_GET['type'] == "other"){
            echo 'getContent(5)';
        }
        if($_GET['type'] == "office"){
            echo 'getContent(6)';
        }

    }
    else {
        echo 'getContent(1)';
    }
    ?>
    });
</script>
