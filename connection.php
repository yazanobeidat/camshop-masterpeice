<?php
$dbsn = "localhost";
$dbun = "root";
$password = "";
$dbname = "project5_db";

$conn = mysqli_connect($dbsn,$dbun,$password,$dbname);
if($conn)
{
    
    echo "connection succesed ";

}else
{
    echo "connection failed";
}
?>