<?php
$conn =new mysqli('localhost','root','','task') or die('connection unsuucessful');
$ids= $_GET['id'];
$queryshow="select *from taskdata where id={$ids}";
$show = mysqli_query($conn,$queryshow);
$arrdata=mysqli_fetch_array($show);
   
if (isset($_POST['submit'])){

$idupdate=$_GET['id'];
$pname=$_POST['pname'];
$sname=$_POST['sname'];
$email=$_POST['email'];
$birthday=$_POST['birthdate'];
$contact=$_POST['numb'];
$address=$_POST['add'];
$city=$_POST['city'];
$zip=$_POST['zip'];
$gender=$_POST['check'];
$text=$_POST['rec'];
 
//  $query="insert into newstudent(fname,lname,email,password) values ('$fname','$lname','$email','$password')";
  
$query= "update taskdata set id=$ids, pname='$pname',email='$email',sname='$sname', sgender='$gender',sbirthday='$birthday',cnumber='$contact',Tnumber='$text', address='$address', zip='$zip',city='$city' where id=$idupdate";


mysqli_query($conn,$query) or die("query unsuccesful") ;



header('location:display.php');


}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
<form method="post" action="">

<div style="text-align: center;   border:1px solid gray; width:40%;margin-left:27%;"> 
    <form method="POST" action="">
    <label>parentsname</label>
    <input type="text" name="pname" id="pname" placeholder="Parent name" value="<?php echo $arrdata['pname']; ?>"><br>
    <label>Email</label>
    <input type="email" name="email" id="email" placeholder="email"  value="<?php echo $arrdata['email']; ?>"><br>
    <label>parentsname</label>
    <input type="text" name="sname" id="pname" placeholder="Student name"  value="<?php echo $arrdata['sname']; ?>"><br>
    <label>Student Gender</label>
    <label>Male</label><input type="radio" name="check" id="check"  value="male" <?php if( $arrdata['sgender']=='male') {echo 'checked';} ?>>
    <label>female</label> <input type="radio" name="check" id="check" value="female" <?php if( $arrdata['sgender']=='female') {echo 'checked';} ?>><br>
    <label>student Birthday</label>
    <input type="date" name="birthdate" id="date"  value="<?php echo $arrdata['sbirthday']; ?>"><br>
    <label>Contact number_</label>
    <input type="number" name="numb" id="numb"  value="<?php echo $arrdata['cnumber']; ?>"><br>
    <label>Do you recieve Text at this number</label>
    <label>yes</label><input type="radio" name="rec" id="rec"  value="yes" <?php if( $arrdata['Tnumber']=='yes') {echo 'checked';} ?> >
    <label>no</label><input type="radio" name="rec" id="rec"  value="no" <?php if( $arrdata['Tnumber']=='no') {echo 'checked';} ?>><br>
    <label>Address</label>
    <input type="text" name="add" id="add"  value="<?php echo $arrdata['address']; ?>"><br>
    <label>City</label>
    <input type="text" name="city" id="city"  value="<?php echo $arrdata['city']; ?>"><br>
    <label>Zip code</label>
    <input type="number" name="zip" id="zip"  value="<?php echo $arrdata['zip']; ?>"><br>

    <input type="submit" value="Update" name="submit">
    </form>
<div>
  
</body>
</html> 