<?php
$con =new mysqli('localhost','root','','task') or die('connection unsuucessful');
if (isset($_POST['submit'])){

 $pname=$_POST['pname'];
 $sname=$_POST['sname'];
 $email=$_POST['email'];
 $birth=htmlentities($_POST['birthdate']);
$birthday=date('Y-m-d',strtotime($birth));
 $contact=$_POST['numb'];
 $address=$_POST['add'];
 $city=$_POST['city'];
 $zip=$_POST['zip'];
 $gender=$_POST['check'];
 $text=$_POST['rec'];

 


$query="insert into taskdata (pname,email,sname,sgender,sbirthday,cnumber,Tnumber,address,city,zip ) values ('$pname','$email','$sname','$gender','$birthday','$contact','$text','$address','$city','$zip' )";

 mysqli_query($con,$query) or die('query unsuccessful');

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
    <style>
      /* input{
           height: 30px;
           width: 50%;
            border-radius: 4px;
            outline:none;
        }
        */
       /* div  input{
            padding: 7px;
            margin-top:3%;
            background-color: #ddd;
        } */
        label{
            padding-top: 14px;
            
        }
    input[type=submit]{
        width:40%;
        margin-bottom:10px;
    }
    div{
        background-color: #c2cfc5;
    }

      </style>
</head>
<body>
<div style="text-align: center;margin-top:15px; margin-bottom:10px;">
<button><a href="display.php">View data</a></button></div>
<div style="text-align: center;   border:1px solid gray; width:40%;margin-left:27%;"> 
    <form method="POST" action="">
    <label>parentsname</label>
    <input type="text" name="pname" id="pname" placeholder="Parent name"><br>
    <label>Email</label>
    <input type="email" name="email" id="email" placeholder="email"><br>
    <label>parentsname</label>
    <input type="text" name="sname" id="pname" placeholder="Student name"><br>
    <label>Student Gender</label>
    <label>Male</label><input type="radio" name="check" id="check"  value="male">
    <label>female</label> <input type="radio" name="check" id="check" value="female"><br>
    <label>student Birthday</label>
    <input type="date" name="birthdate" id="date"><br>
    <label>Contact number_</label>
    <input type="number" name="numb" id="numb"><br>
    <label>Do you recieve Text at this number</label>
    <label>yes</label><input type="radio" name="rec" id="rec" value="yes">
    <label>no</label><input type="radio" name="rec" id="rec" value="no"><br>
    <label>Address</label>
    <input type="text" name="add" id="add"><br>
    <label>City</label>
    <input type="text" name="city" id="city"><br>
    <label>Zip code</label>
    <input type="number" name="zip" id="zip"><br>

    <input type="submit" value="submit" name="submit">
    </form>
<div>


<!-- <form method="post" action="">
  <div class="row">
    <div class="col">
      <input type="text" class="form-control" placeholder="First name"  name="fname">
    </div>
    <div class="col">
      <input type="text" class="form-control" placeholder="Last name" name="lname">
    </div>
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
  </div>
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form> -->
</body>
</html>