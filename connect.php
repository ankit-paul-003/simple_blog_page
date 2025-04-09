<?php
$server = "localhost";
$username = "username";
$password = "";
$databasename = "blogg";
$conn = new mysqli('localhost','root','','blogg',3306);
echo "hi";

$title = $_POST['title'];
$name = $_POST['name'];
$blog = $_POST['blog'];

$sql = "INSERT INTO `user`(`title`, `name`, `blog`) VALUES ('$title','$name','$blog')";
$sol = mysqli_query($conn, $sql);
if($sol)
{
    header("location: front.html");
}
else{
    echo "failed";
}
?>