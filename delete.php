<?php


$conn= new mysqli("localhost","root","","task")or die("connection failed");

$id=$_GET['id'];

$query="delete from taskdata where id=$id";

mysqli_query($conn,$query);

header('location:display.php');
?>