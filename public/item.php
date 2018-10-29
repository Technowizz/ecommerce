<?php require_once("../resources/config.php") ?>
<?php include(TEMPLATE_FRONT . DS . "header.php") ?>

    <!-- Page Content -->
<div class="container">


<div class="row">
  <?php include(TEMPLATE_FRONT . DS . "side_nav.php") ?>


  <?php
  $query = query(" SELECT * FROM products where product_id = " . escape_string($_GET['id']) . "" );
  confirm($query);
  while ($row = fetch_array($query)):
   ?>

       <!-- Side Navigation -->


<div class="col-md-9">

<!--Row For Image and Short Description-->

<div class="row">

    <div class="col-md-7">
       <img class="img-fluid rounded mx-auto d-block" src="<?php echo $row['product_image']; ?>" alt="">

    </div>

    <div class="col-md-5">

        <div class="card float-left">


    <div class="card-body">
        <h4 class="text-center"><a href="#"><?php echo $row['product_title']; ?></a> </h4>
        <hr>
        <h4 class=""><?php echo " &#8377 " . $row['product_price']; ?></h4>



        <p><?php echo $row['product_sd'] ?></p>


    <form action="">
        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="ADD TO CART">
        </div>
    </form>

    </div>

</div>

</div>
</div>


</div><!--Row For Image and Short Description-->


        <hr>


<!--Row for Tab Panel-->

<div class="row card">

<div role="tabpanel">

  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li class="nav-item"><a class="nav-link" href="#home" aria-controls="home" role="tab" data-toggle="tab">Description</a></li>
    <li class="nav-item"><a class="nav-link" href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Reviews</a></li>

  </ul>

  <!-- Tab panes -->
  <br>
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="home">

<p></p>
<div class="container">
    <p><?php echo $row['product_description']; ?></p>
</div>



    </div>
    <div role="tabpanel" class="tab-pane" id="profile">

<div class="row">


  <div class="col-md-6">

<div class="container">

<br>
       <h3>2 Reviews From </h3>

        <hr>

        <div class="row">
            <div class="col-md-12">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <span class="glyphicon glyphicon-star-empty"></span>
                Anonymous
                <span class="pull-right">10 days ago</span>
                <p>This product was great in terms of quality. I would definitely buy another!</p>
            </div>
        </div>

        <hr>

        <div class="row">
            <div class="col-md-12">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <span class="glyphicon glyphicon-star-empty"></span>
                Anonymous
                <span class="pull-right">12 days ago</span>
                <p>I've alredy ordered another one!</p>
            </div>
        </div>

        <hr>

        <div class="row">
            <div class="col-md-12">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <span class="glyphicon glyphicon-star-empty"></span>
                Anonymous
                <span class="pull-right">15 days ago</span>
                <p>I've seen some better than this, but not at this price. I definitely recommend this item.</p>
            </div>
        </div>

    </div>
    </div>




    <div class="col-md-6">
      <div class="container">

<br>
        <h3>Add A review</h3>

     <form action="" >
       <div class="form-group">
  <label for="exampleInputEmail1">Email </label>
  <input type="email" class="form-control" id="" aria-describedby="emailHelp" placeholder="Enter email">
</div>

<div class="form-group">
  <label for="exampleInputPassword1">Password </label>
  <input type="email" class="form-control" id="" placeholder="Password">
</div>


        <div>
            <h3>Your Rating</h3>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
        </div>

            <br>

             <div class="form-group">
             <textarea name="" id="" cols="60" rows="10" class="form-control"></textarea>
            </div>


           </br>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="SUBMIT">
            </div>
        </form>

    </div>
    </div>


 </div>

 </div>

</div>


</div><!--Row for Tab Panel-->




</div>

<?php endwhile; ?>
</div>

</div>
<script src="js/jquery.js"></script>

    <?php include(TEMPLATE_BACK . DS . "footer.php") ?>
