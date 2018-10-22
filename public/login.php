<?php require_once("../resources/config.php") ?>
<?php include(TEMPLATE_FRONT . DS . "header.php") ?>

    <!-- Page Content -->
    <div class="container">

      <header>
            <h1 class=" display-1 text-center">Login</h1><br><br><br>
            <h3 class="text-center bg-warning"> <?php display_message(); ?></h3>
        <div class="col-sm-4 col-sm-offset-5"  style="margin:auto">
            <form class="" action="" method="post" enctype="multipart/form-data">
              <?php login_user(); ?>
                <div class="form-group"><label for="">
                    <h5 class="display-5">Username</h5><input type="text" name="username" class="form-control"></label>
                </div>
                 <div class="form-group"><label for="password">
                    <h5 class="display-5">Password</h5><input type="text" name="password" class="form-control"></label>
                </div>

                <div class="form-group">
                  <input type="submit" name="submit" class="btn btn-outline-primary" value="Login">
                </div>
            </form>
        </div>


    </header>


        </div>

    </div>
    <!-- /.container -->

    <!-- Footer -->

  <?php include(TEMPLATE_BACK . DS . "footer.php") ?>
