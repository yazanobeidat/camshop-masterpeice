<?php
include "../connection.php";

if (isset($_POST['submit'])){
$category_name = $_POST["category_name"];


$add_category = "INSERT INTO category (category_name) VALUES ('$category_name');";
if ($conn->query($add_category) === TRUE) {
    echo "New product created successfully";
  } else {
    echo "Error: " . $add_category . "<br>" . $conn->error;
  }

echo "<br>";
echo '<div class="alert alert-success d-flex justify-content-center" role="alert">
Employee was added successfully redircting you to the main page</div>';


echo'<script>
setTimeout(() => {
    window.location = "category_dashboard.php";
  }, "2000")

</script>';

}

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
<body style="background-color: #8fc4b7;">
<section class="h-100 h-custom" style="background-color: #8fc4b7;">
  <div class="container py-5 h-100">
      
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-8 col-xl-6">
        <div class="card rounded-3">
            
         
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2">Add category</h3>

            <form class="px-md-2" action="" method="post">

              <div class="form-outline mb-4">
                <input type="text" id="form3Example1q" name="category_name" class="form-control" />
                <label class="form-label"  for="form3Example1q">category name </label>
              </div>
              
              
          <input type="submit" value="Submit" name="submit" class="btn btn-success btn-lg mb-1">

            </form>
            
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>