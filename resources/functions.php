'<?php
function redirect($location){
  header("Location: $location");
}
function set_message($msg){

if(!empty($msg)) {

$_SESSION['message'] = $msg;

} else {

$msg = "";
    }
}
function display_message() {

    if(isset($_SESSION['message'])) {
        echo $_SESSION['message'];
        unset($_SESSION['message']);
    }
}



function query($sql){
  global $connection;
  return mysqli_query($connection,$sql);
}
function confirm($result){
  global $connection;
  if(!$result){
    die("query failed" . mysqli_error($connection));
  }
}

function escape_string($string){
  global $connection;
  return mysqli_real_escape_string($connection,$string);
}
function fetch_array($result){

return mysqli_fetch_array($result);

}
function get_products() {
$query = query(" SELECT * FROM products");
confirm($query);
while ($row = fetch_array($query)) {


 echo "<div class='col-sm-4 col-lg-4 col-md-4'>
  <div class='card'>
  <a href='item.php?id={$row['product_id']}'><img src='{$row ['product_image']}' class='img-thumbnail mx-auto d-block' alt=''></a>
    <div class='card-body'>
       <h5 class='float-right'>  &#8377 {$row ['product_price']}</h5>
              <h5><a href='item.php?id={$row['product_id']}'>{$row ['product_title']}</a>             </h5>
                          <p>See more snippets like this online store item at online            </p>
             <a class='btn btn-outline-info' target='_blank'href='item.php?id={$row['product_id']}'>Add Cart</a>
             <a class='btn btn-outline-success float-right' href='item.php?id={$row['product_id']}' >Buy Now</a>
                                   </div>     </div> </div>";

}
}
function get_categories(){


$query = query("SELECT * FROM categories");
confirm($query);

while($row = fetch_array($query)) {


$categories_links = <<<DELIMETER

<a href='category.php?id={$row['cat_id']}' class='list-group-item'>{$row['cat_title']}</a>


DELIMETER;

echo $categories_links;

     }



}



function get_products_in_cat() {
$query = query(" SELECT * FROM products where product_category_id =" . escape_string($_GET['id']) . "" );
confirm($query);
while ($row = fetch_array($query)) {


 echo "<div class='col-sm-4 col-lg-4 col-md-4'>
  <div class='card'>
  <a href='item.php?id={$row['product_id']}'><img src='{$row ['product_image']}' class='img-thumbnail' alt=''></a>
    <div class='card-body'>
       <h5 class='float-right'>  &#8377 {$row ['product_price']}</h5>
              <h5><a href='item.php?id={$row['product_id']}'>{$row ['product_title']}</a>             </h5>
                          <p>See more snippets like this online store item at online            </p>
             <a class='btn btn-outline-primary float-left' target='_blank'href='item.php?id={$row['product_id']}'>Add Cart</a>
             <a class='btn btn-outline-success float-right' href='item.php?id={$row['product_id']}' >Buy Now</a>
                                   </div>     </div> </div>";

}
}


function get_products_in_shop() {
$query = query(" SELECT * FROM products");
confirm($query);
while ($row = fetch_array($query)) {


 echo "<div class='col-sm-4 col-lg-4 col-md-4'>
  <div class='card'>
  <a href='item.php?id={$row['product_id']}'><img src='{$row ['product_image']}' class='img-thumbnail' alt=''></a>
    <div class='card-body'>
       <h5 class='float-right'>  &#8377 {$row ['product_price']}</h5>
              <h5 class='float-left'><a href='item.php?id={$row['product_id']}'>{$row ['product_title']}</a>             </h5><br><br>
                          <p>See more snippets like this online store item at online            </p>
             <a class='btn btn-outline-primary float-left' target='_blank'href='item.php?id={$row['product_id']}'>Add Cart</a>
             <a class='btn btn-outline-success float-right' href='item.php?id={$row['product_id']}' >Buy Now</a>
                                   </div>     </div> </div>";

}
}


function login_user(){

if(isset($_POST['submit'])){

$username = escape_string($_POST['username']);
$password = escape_string($_POST['password']);

$query = query("SELECT * FROM users WHERE username = '{$username}' AND password = '{$password }' ");
confirm($query);

if(mysqli_num_rows($query) == 0) {

set_message("Your Password or Username is wrong");
redirect("login.php");


} else {

$_SESSION['username'] = $username;
set_message("Welcome to admin {$username}");
redirect("admin");
         }
    }
}


function send_message() {
    if(isset($_POST['submit'])){
        $to          = "kuttyselva57@gmail.com";
        $from_name   =   $_POST['name'];
        $subject     =   $_POST['subject'];
        $emails       =   $_POST['email'];
        $message     =   $_POST['message'];
        $header = "From: {$from_name} {$emails}";
        $result = mail($to, $subject, $message . " from " . $emails ,$header);
        if(!$result) {
            set_message("Sorry we could not send your message");
            redirect("contact.php");
        } else {
            set_message("Your Message has been sent");
            redirect("contact.php");
        }
    }
}



 ?>
