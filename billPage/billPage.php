<?php
include_once "../connection.php";

 ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    
    <title>Document</title>
</head>
<body>
    
<?php


$sql_query="SELECT * FROM cart ;";
$result = $conn->query($sql_query);
$result_check4= mysqli_num_rows($result);

// check result
if($result_check4 > 0){

    $_SESSION["userID"]= $row['user_id'];  

    while($row=mysqli_fetch_assoc($result)){


        $productName=$row['product_name'];

        $productPrice=$row['order_price'];

        $orderQuantity=$row['order_quantity'];

        $total =$orderQuantity*$productPrice;
        


        


         }};
         print_r($_SESSION);

?>

<table class="table" style="border:1;">
  <thead>
    <tr>
      <th scope="col">product</th>
      <th scope="col">Total</th>

    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"><?php echo $productName  ?></th>
      <td><?php echo $productPrice?></td>

    </tr>
    <tr>
      <th scope="row">Paymnet Method</th>
      <td>Cash on delivery</td>

    </tr>
    <tr>
      <th scope="row">Total</th>
      <td colspan="2"><?php echo $total ?></td>

    </tr>
  </tbody>
</table>


</body>
</html>