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


$sql_query="SELECT * FROM checkout;";
$result = $conn->query($sql_query);
$result_check= mysqli_num_rows($result);

// check result
// if($result_check > 0){

  

//     while($row=mysqli_fetch_assoc($result)){



//       $Fname= $row['firist_name'];
//       $Lname= $row['last_name'];
//       $city = $row['city'];
//       $country = $row['country'];
//       $state = $row['state'];
//       $street_address = $row['street_address'];






        // $productName=$row['product_name'];

        // $productPrice=$row['order_price'];

        // $orderQuantity=$row['order_quantity'];

        // $total =$row['firist_name'];
        


        


        //  }
        // };
?>

<!-- <table class="table" style="border:1;">
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

 -->


<!-- <p>Thank you for purchasing <?php echo $Fname ?> <?php echo $Lname  ?> from: <?php echo $country?> / <?php echo $city?> / <?php echo $state?>   </p>

<?php echo $street_address?> 
 -->


<?php 
// $sql_query2="SELECT * FROM cart;";
// $result2 = $conn->query($sql_query2);
// $result_check2= mysqli_num_rows($result2);

// // check result
// if($result_check2 > 0){

  

//     while($row=mysqli_fetch_assoc($result2)){



//       $productName=$row['product_name'];

//         $productPrice=$row['order_price'];

//         $orderQuantity=$row['order_quantity'];




//     }}
?>


<?php
session_start();
if (isset($_SESSION['userID'])){

  $sql_query="SELECT * FROM checkout;"; 
  $result = $conn->query($sql_query);
  $result_check= mysqli_num_rows($result);


  $sql_query2="SELECT * FROM cart;";
  $result2 = $conn->query($sql_query2);
  $result_check2= mysqli_num_rows($result2);


  if($result_check > 0){


    while($row=mysqli_fetch_assoc($result)){

           
      $Fname= $row['firist_name'];
           
      $Lname= $row['last_name'];
          
      $city = $row['city'];
           
      $country = $row['country'];
            
      $state = $row['state'];
          
      $street_address = $row['street_address'];
          
      $phone = $row['phone'];



   



    while($row2=mysqli_fetch_assoc($result2)){

                $productName=$row2['product_name'];

                $productPrice=$row2['order_price'];
        
                $orderQuantity=$row2['order_quantity'];
               
                $order_subtotal=$row2['order_subtotal'];
              



    }


  }
?>

<?php echo $Fname ?>;
<?php echo  $Lname?>;
<?php echo $city ?>;
<?php echo $country ?>;
<?php echo $state ?>;

<?php echo $productName ?>;
<?php echo  $productPrice?>;
<?php echo $orderQuantity ?>;
<?php echo $order_subtotal ?>;


<div class="coontainer">
  <div class="row">
    <div class="col-md-6"><p>Thank you for purchasing <?php echo $Fname ?> <?php echo $Lname  ?> from: <?php echo $country?> / <?php echo $city?> / <?php echo $state?>   </p></div>
     
  </div>
</div>






<?php


}


}


?>



</body>
</html>
