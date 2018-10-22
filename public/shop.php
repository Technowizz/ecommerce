<?php require_once("../resources/config.php") ?>
<?php include(TEMPLATE_FRONT . DS . "header.php") ?>

    <!-- Page Content -->
    <div class="container">

        <!-- Jumbotron Header -->
        <header class="jumbotron hero-spacer">
            <h1 class="display-1 text-center">TechWiz Mart</h1>

        </header>

        <hr>

        <!-- Title -->
        <div class="row">
            <div class="col-lg-12">
                <h4 class="card-title text-center">Available Products</h4 class="card-title">
            </div>
        </div>
        <!-- /.row -->

        <!-- Page Features -->
        <div class="row text-center">

          <?php get_products_in_shop(); ?>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <?php include(TEMPLATE_BACK . DS . "footer.php") ?>
