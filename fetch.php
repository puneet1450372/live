<?php

$con = new mysqli('localhost','root','','task');
  $output=" ";

  $db ="select * from taskdata where LIKE sname '%".$_post['sname'];

  $res=mysqli_query($con, $dp);

  if(mysqli_num_rows($res)>0){

    $output.=

  }
  else{

  }


?>