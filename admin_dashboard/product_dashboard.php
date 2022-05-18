<?php
include "../connection.php";



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    <script src="https://kit.fontawesome.com/f32d43040b.js" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Document</title>
    <link rel="stylesheet" href="user_dashboard.css">
</head>
<body>
<button type="button" class="btn btn-sunny  text-uppercase"><a href="product_create.php">create new employee</a></button>


<table class="table container table-bordered table-dark">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">name</th>
      <th scope="col">catagory</th>
      <th scope="col">price</th>
      <th scope="col">color</th>
      <th scope="col">sizes</th>
      <th scope="col">description</th>
      <th scope="col">image</th>
      <th scope="col">edit</th>
      
    </tr>

  </thead>
  <tbody class="table-warning">
    <?php
    
    $stmt = $conn->query("SELECT * FROM products");
    while($product = $stmt->fetch_assoc())
    {
        echo "<tr>
        <th scope='row'>$product[product_id]</th>
        <td>$product[product_name]</td>
        <td>$product[product_category]</td>
        <td>$product[Product_price]</td>
        <td>$product[Product_color]</td>
        <td>$product[Product_size]</td>
        <td>$product[product_description]</td>
        <td>$product[product_image]</td>
        
        <td> ";
        // echo '<a href="read.php?id='. $row['id'] .'" class="mr-3" title="View Record" data-toggle="tooltip"><span class="fa fa-eye"></span></a>';
        echo '<a href="read.php?id='. $product['product_id'] .'"<button  class="btn  btn-sm"><i class="fa-solid fa-eye"></i>Show</button></a>';
        echo '<a href="product_update.php?id='. $product['product_id'] .'"<button  class="btn  btn-sm"><i class="fa-solid fa-pen-to-square"></i>Update</button></a>';
        echo '<a href="product_delete.php?id='. $product['product_id'] .'"<button  class="btn  btn-sm"><i class="fa-solid fa-wrench"></i>delete</button></a>';

    //    echo  "<a href='update.php'><button class='btn  btn-sm'><i class='fa-solid fa-pen-to-square'></i>Update</button></a>";
        // <a href='delete.php'><button class='btn  btn-sm'><i class='fa-solid fa-wrench'></i>delete</button></a>
        // </td>
      echo "</tr>";
      

    };
    

    ?>
  </tbody>
</table>
</body>
</html>