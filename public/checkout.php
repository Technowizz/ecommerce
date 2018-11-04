<?php require_once("../resources/config.php") ?>
<?php require_once("../public/cart.php") ?>
<?php include(TEMPLATE_FRONT . DS . "header.php") ?>
    <!-- Page Content -->
    <div class="container">


<!-- /.row -->

<h3 class="text-center bg-warning"><?php  display_message(); ?></h3>
<div class="row">



      <h1>Checkout</h1><hr>
    </div>
    <div class="row">

    <div class="col-md-8 float-left">



<form action="">
    <table class="table table-borderless table-hover">



  <thead>
         <tr>
           <th>
             <div class="card">
               <div class="card-body">Product
               </div>
             </div>
           </th>
           <th> <div class="card">
              <div class="card-body">Price
              </div>
            </div></th>
           <th> <div class="card">
              <div class="card-body">Quantity
              </div>
            </div></th>
           <th> <div class="card">
              <div class="card-body">Total
              </div>
            </div></th>

          </tr>
          </thead>


        <tbody>
          <?php cart(); ?>
        </tbody>
    </table>
</form>

  </div>

<!--  ***********CART TOTALS*************-->

<div class="col-md-4 float-right ">
<h2>Cart Totals</h2>

<table class="table table-bordered" cellspacing="0">

<tr class="cart-subtotal">
<th>Items:</th>
<td><span class="amount"><?php
echo isset($_SESSION['item_quantity']) ? $_SESSION['item_quantity'] : $_SESSION['item_quantity'] = "0";?></span></td>
</tr>
<tr class="shipping">
<th>Shipping and Handling</th>
<td>Free Shipping</td>
</tr>

<tr class="order-total">
<th>Order Total</th>
<td><strong><span class="amount">&#8377 <?php
echo isset($_SESSION['item_total']) ? $_SESSION['item_total'] : $_SESSION['item_total'] = "0";?></span></strong> </td>
</tr>


</tbody>

</table>

</div><!-- CART TOTALS-->
</div>

 </div><!--Main Content-->


           <hr>
  <?php include(TEMPLATE_BACK . DS . "footer.php") ?>
