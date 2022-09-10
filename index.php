<html>
<title>Tabela neka</title>
<div class="row">
  <a href="insertdata.php"class="btn btn-success">ADD Data</a>
</div>
<body>
  <div class="kontejnrer">
<table>

<?php
$connection=mysqli_connect("localhost","root","");
$db=mysqli_select_db($connection,'phpcrud');

$query="SELECT*FROM student";
$query_run=mysqli_query($connection,$query);
?>
<table class="tabela">
  <thred>
<tr>
<th>ID</th>
<th>Ime</th>
<th>Prezime</th>
<th>Kontakt</th>
<th>EDIT</th>
  <th>DELETE</th>


</tr>
  </thred>
</tabela>


<?php
if($query_run){
  while($row=mysqli_fetch_array($query_run))
  {
?>
<tbody>
<tr>
<th><?php echo $row['id'];  ?></th>
<th><?php echo $row['fname'];  ?></th>
<th><?php echo $row['lname'];  ?></th>
<th><?php echo $row['contact'];  ?></th>

<form action="updatedata.php"method="post">
  <input type="hidden"name="id"value="<?php echo $row['id']  ?>">
<th><a href=""class="btn btn-primary">Edit</th>
</form>
<form action="delete.php"method="post">
  <input type="hidden"name="id"value="<?php echo $row['id']  ?>">
<th><input type="submit"name="delete"class="btn btn-danger"value="DELETE"></th>
</form>
</tr>
</tbody>

<?php







    echo $row['id'];
    echo $row['fname'];
    echo $row['lname'];
    echo $row['contact'];
  }
}else {
  echo "Nema rekorda";
}

 ?>

</table>
</div>


</body>


</html>
