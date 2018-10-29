<?php require_once("../resources/config.php") ?>
<?php include(TEMPLATE_FRONT . DS . "header.php") ?>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

        <?php include(TEMPLATE_FRONT . DS . "side_nav.php") ?>
            <div class="col-md-10">

              <div class="row carousel-holder">

                      <div class="col-md-12">
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                          <?php include(TEMPLATE_FRONT . DS . "slider.php") ?>
                          </div>
                      </div>


                <div class="row">
<?php get_products(); ?>
                </div>

            </div>

        </div>

    </div>
    <!-- /.container -->


<?php include(TEMPLATE_BACK . DS . "footer.php") ?>
