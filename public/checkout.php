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



<form action="" method="post">
  <input type="hidden" name="cmd" value="_cart">
  <input type="hidden" name="business" value="edwindiaz123-facilitator@gmail.com">
  <input type="hidden" name="currency_code" value="US">
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
<form method="post" action="http://localhost:8000/ecommerce/public/PaytmKit/pgRedirect.php">
  <table>
    <tbody>

      <tr>

        <td><input type="hidden" id="ORDER_ID" tabindex="1" maxlength="20" size="20"
          name="ORDER_ID" autocomplete="off"
          value="<?php echo  "ORDS" . rand(10000,99999999)?>">
        </td>
      </tr>
      <tr>

        <td><input type="hidden" id="CUST_ID" tabindex="2" maxlength="12" size="12" name="CUST_ID" autocomplete="off" value="CUST001"></td>
      </tr>
      <tr>

        <td><input type="hidden" id="INDUSTRY_TYPE_ID" tabindex="4" maxlength="12" size="12" name="INDUSTRY_TYPE_ID" autocomplete="off" value="Retail"></td>
      </tr>
      <tr>

        <td><input type="hidden" id="CHANNEL_ID" tabindex="4" maxlength="12"
          size="12" name="CHANNEL_ID" autocomplete="off" value="WEB">
        </td>
      </tr>
      <tr>

        <td><input  title="TXN_AMOUNT" tabindex="10"
          type="hidden" name="TXN_AMOUNT"
          value= "<?php echo $_SESSION['item_total'] ?>">
        </td>
      </tr>
      <tr>
      <td><input class="btn btn-outline-warning" value="CheckOut" type="submit"	onclick=""></td>
      </tr>
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
<td><strong><span class="amount">&#8377;<?php echo isset($_SESSION['item_total']) ? $_SESSION['item_total'] : $_SESSION['item_total'] = "0"; ?>
</span>
</strong> </td>
</tr>


</tbody>

</table>

</div><!-- CART TOTALS-->
</div>

 </div><!--Main Content-->


           <hr>
  <?php include(TEMPLATE_BACK . DS . "footer.php") ?>
