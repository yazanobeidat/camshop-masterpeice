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
<button type="button" class="btn btn-sunny  text-uppercase"><a href="user_create.php">create new employee</a></button>


<table class="table container table-bordered table-dark">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">first name</th>
      <th scope="col">last name</th>
      <th scope="col">email</th>
      <th scope="col">phone number</th>
      <th scope="col">user password</th>
      <th scope="col">age</th>
      <th scope="col">gender</th>
      <th scope="col">edit</th>
    </tr>

  </thead>
  <tbody class="table-warning">
    <?php
    
    $stmt = $conn->query("SELECT * FROM user ");
    while($user = $stmt->fetch_assoc())
    {
        echo "<tr>
        <th scope='row'>$user[user_id]</th>
        <td>$user[user_first_name]</td>
        <td>$user[user_last_name]</td>
        <td>$user[user_email]</td>
        <td>$user[phone_num]</td>
        <td>$user[user_password]</td>
        <td>$user[age]</td>
        <td>$user[gender]</td>
        <td> ";
        // echo '<a href="read.php?id='. $row['id'] .'" class="mr-3" title="View Record" data-toggle="tooltip"><span class="fa fa-eye"></span></a>';
        echo '<a href="read.php?id='. $user['user_id'] .'"<button  class="btn  btn-sm"><i class="fa-solid fa-eye"></i>Show</button></a>';
        echo '<a href="user_update.php?id='. $user['user_id'] .'"<button  class="btn  btn-sm"><i class="fa-solid fa-pen-to-square"></i>Update</button></a>';
        echo '<a href="user_delete.php?id='. $user['user_id'] .'"<button  class="btn  btn-sm"><i class="fa-solid fa-wrench"></i>delete</button></a>';

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