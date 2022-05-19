<?php
include_once "./connection.php";
session_start();
echo $_SESSION["userID"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.css">
    <title>Document</title>
</head>
<body>
<table class="table">
  <thead>
    <tr>
      <!-- <th scope="col"></th>-->
      <th scope="col"></th> 
      <th scope="col">Product</th>
      <th scope="col">Color</th>
      <th scope="col">Price</th>
      <th scope="col">Quanity</th>
      <th scope="col">Subtotal</th>
    </tr>
  </thead>
  <tbody>
      <?php
       //$globalUserId=$_SESSION["userID"];
      $total=1;
      $sql="SELECT * FROM cart";
      $result=mysqli_query($conn,$sql);
      $result_check=mysqli_num_rows($result);
      
      
      
     
    //   $sql2="INSERT INTO cart (user_id, order_subtotal) VALUES ('$globalUserId','$total');";
    // $result2=mysqli_query($conn,$sql2);
       
        
      if($result_check > 0){
          while ($row= mysqli_fetch_assoc($result)) {
            
            $total=$row['order_price']*$row['order_quantity'];
             
              echo "<tr>";
            
              echo "<td>". $row['order_number']. "</td>";
              //add image
              echo "<td>". $row['product_name']. "</td>";
              echo "<td>". $row['product_color']. "</td>";
              echo "<td>". $row['order_price']. "</td>";
              echo "<td>". $row['order_quantity']. "</td>";
              echo "<td>". $total. "<td>";//from Aya

              echo "</tr>";
          }
      }
      ?>

  </tbody>
</table>
</body>
</html>