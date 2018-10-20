'<?php
function redirect($location){
  header("Location: $location");
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
  <a href='item.php?id={$row['product_id']}'><img src='{$row ['product_image']}' class='img-thumbnail' alt=''></a>
    <div class='card-body'>
       <h5 class='float-right'>  &#8377 {$row ['product_price']}</h5>
              <h5><a href='item.php?id={$row['product_id']}'>{$row ['product_title']}</a>             </h5>
                          <p>See more snippets like this online store item at online            </p>
             <a class='btn btn-primary' target='_blank'href='item.php?id={$row['product_id']}'>Add Cart</a>
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
             <a class='btn btn-outline-success float-right' href='' >Buy Now</a>
                                   </div>     </div> </div>";

}
}


 ?>
