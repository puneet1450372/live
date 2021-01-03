

<?php
$con = new mysqli('localhost','root','','task');
$output = '';
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($con, $_POST["query"]);
 $query = "SELECT * FROM user
WHERE  id  LIKE '%".$search."%'
  OR first_name LIKE '%".$search."%' 
  OR last_name LIKE '%".$search."%' 
  OR age LIKE '%".$search."%' 
  OR mobile LIKE '%".$search."%' 
 ";}
else
{
 $query = "SELECT * FROM user";
}
$result = mysqli_query($con, $query);
if(mysqli_num_rows($result) > 0)
{
 $output .= '
  <div class="table-responsive">
   <table class="table table bordered">
   <tr>
     <th>ID</th>
     <th>First Name</th>
     <th>Last Name</th>
     <th>Age</th>
     <th>Phone No</th>
    </tr>';
 while($row1 = mysqli_fetch_array($result))
 {
  $output .= '
  <tr>
    <td>'.$row1["id"].'</td>
    <td>'.$row1["first_name"].'</td>
    <td>'.$row1["last_name"].'</td>
    <td>'.$row1["age"].'</td>
    <td>'.$row1["mobile"].'</td>
   </tr>
  ';
 }
 echo $output;
}
else
{
 echo 'Record Not Found';
}
?>
