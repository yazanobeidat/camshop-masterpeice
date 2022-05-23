<?php
include "../connection.php";
$get_data = "SELECT * FROM products WHERE product_id= $_GET[id]";
$stmt= $conn->query($get_data);
$product_data = $stmt->fetch_assoc();

if(isset($_POST['submit']))
{
    $id=$_POST['product_id'];
    $product_name = $_POST['product_name'];
    $product_price=$_POST['product_price'];
   $product_color=$_POST['product_color'];
   $product_size=$_POST['product_size'];
   $product_description=$_POST['product_description'];
   $product_image=$_POST['product_image'];
   

   $update_data = "UPDATE products SET product_name='$product_name',product_price='$product_price',product_color='$product_color',product_size='$product_size',product_description='$product_description',product_image='$product_image' WHERE product_id=$_GET[id];";
   $conn->query($update_data);
   header("Refresh:0");
}

?>
<!DOCTYPE html>
<html>
  <title>Simple Sign up from</title>
  <head> <script src="https://kit.fontawesome.com/f32d43040b.js" crossorigin="anonymous"></script>

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <style>
      html, body {
      display: flex;
      justify-content: center;
      font-family: Roboto, Arial, sans-serif;
      font-size: 15px;
      }
      form {
        margin
      border: 5px solid #f1f1f1;
      }
      input[type=text], input[type=password] {
      width: 100%;
      padding: 16px 8px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      box-sizing: border-box;
      }
      .icon {
      font-size: 110px;
      display: flex;
      justify-content: center;
      color: #4286f4;
      }
      button {
      background-color: #4286f4;
      color: white;
      padding: 14px 0;
      margin: 10px 0;
      border: none;
      cursor: grab;
      width: 48%;
      }
      h1 {
      text-align:center;
      fone-size:18;
      }
      button:hover {
      opacity: 0.8;
      }
      .formcontainer {
      text-align: center;
      margin: 24px 50px 12px;
      }
      .container {
      padding: 16px 0;
      text-align:left;
      }
      span.psw {
      float: right;
      padding-top: 0;
      padding-right: 15px;
      }
      /* Change styles for span on extra small screens */
      @media screen and (max-width: 300px) {
      span.psw {
      display: block;
      float: none;
      }
    }
    </style>
  </head>
  <body>
    <form action="" method="post">
      <h1>Upate Employee</h1>
      <div class="icon">
        <i class="fa-solid fa-pen-to-square"></i>
      </div>
      <div class="formcontainer">
      <div class="container">
        <label for="uname"><strong>product id</strong></label>
        <input type="text" placeholder="product_id" name="product_id"  value =<?php echo $product_data['product_id']; ?> readonly   >
        <label for="mail"><strong>product name</strong></label>
        <input type="text" placeholder="product name" name="product_name" value= <?php echo $product_data['product_name']; ?> >
        <label for="psw"><strong>Product price</strong></label>
        <input type="text" placeholder="Productprice" name="product_price" value=<?php echo $product_data['product_price']; ?>>
        <label for="psw"><strong>Product color</strong></label>
        <input type="text" placeholder="Productcolor" name="product_color" value=  <?php echo $product_data['product_color']; ?>>
        <label for="psw"><strong>Product size</strong></label>
        <input type="text" placeholder="Product size" name="product_size" value=  <?php echo $product_data['product_size']; ?>>
        <label for="psw"><strong>product description</strong></label>
        <input type="text" placeholder="product description" name="product_description" value=  <?php echo $product_data['product_description']; ?>>
        <label for="psw"><strong>product image</strong></label>
        <input type="text" placeholder="product image" name="product_image" value=  <?php echo $product_data['product_image']; ?>>
      </div>
      <input type="submit" name="submit" value="submit">
      
    </form>

    <a href="product_dashboard.php">back to dashboard</a>
  </body>
</html>