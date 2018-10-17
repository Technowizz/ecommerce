<div class="col-md-3">
  <p class="lead">Shop Name</p>

  <div class="list-group">

    <?php

      $query = "SELECT * FROM categories";
      $send_query = mysqli_query($connection, $query);
      if(!$send_query){
        die('<h1 class="display-3">Display 1</h1> '. mysqli_error($connection). "</h1>");
      }
      while($row = mysqli_fetch_array($send_query)){
        echo "<a href='' class='list-group-item'>{$row['cat_title']}</a>";
      }


      ?>



  </div>
</div>
