<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
  <div style="text-align: center;background-color:#7FB3D5">
      <h1>PHP MYSQL CRUD OPERATIONS</h1>
  </div>  
  <div  style="text-align: center;background-color:#BB8FCE">
      <h2>Register yourself</h2>
  </div>
  <div>
  <?php
$con =new mysqli('localhost','root','','task') or die('connection unsuucessful');
$selectquery= "select *from taskdata";

$query=mysqli_query($con,$selectquery);

$nums=mysqli_num_rows($query);
;
echo "<table border='1px' cellpadding='5px' cellspacing='0px' width='100%';>";
echo "<tr>";
echo "<th>id</th><th>ParentName</th><th>Email</th><th>Student Name</th><th>Studentgender</th><th>Student Birthday</th><th>Student Contact</th><th>Status</th><th>Address</th><th>City</th><th>ZipCode</th><th>update</th><th>Delete</th>";
echo "</tr>";
echo "<tr>";
while(
    $res=mysqli_fetch_array($query)){
 ?>
    <tr>
    <td><?php echo $res['id'];?></td>
    <td><?php echo $res['pname'];?></td>
    <td><?php echo $res['email'];?></td>
    <td><?php echo $res['sname'];?></td>
    <td><?php echo $res['sgender'];?></td>
    <td><?php echo $res['sbirthday'];?></td>
    <td><?php echo $res['cnumber'];?></td>
    <td><?php echo $res['Tnumber'];?></td>
    <td><?php echo $res['address'];?></td>
    <td><?php echo $res['city'];?></td>
    <td><?php echo $res['zip'];?></td>
    <td><a href="update.php?id=<?php echo $res['id']?>"><i class='fa fa-pencil-square-o' aria-hidden='true'></i></a></td>
    
    <td><a href="delete.php?id=<?php echo $res['id']?>"><i class='fa fa-trash-o' aria-hidden='true'></i></a></td>
</tr>
<?php
    }
?>


<?php
echo "</table>";
?>
  </div>
</body>
</html>
