<?php

$connection=mysqli_connect("localhost","root","");
$db=mysqli_select_db($connection,'phpcrud');

if(isset($_POST['delete']))
{

  $id=$_POST['id'];
  $query="DELETE FROM student WHERE id='$id'";
  $query_run=mysqli_query($connection,$query);


  if($query_run)
  {
    echo "Bravo";
    header("location:index.php");
  }
  else {
    echo "Neeee";
  }
}
 ?>
