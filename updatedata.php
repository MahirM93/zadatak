<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

<?php

$connection=mysqli_connect("localhost","root","");
$db=mysqli_select_db($connection,'phpcrud');

$id=$_POST['id'];
$query="SELECT*FROM student WHERE id='$id'";
$query_run=mysqli_query($connection.$query);

if($query_run){
  while($row=mysqli_fetch_array($query_run)){


    ?>
<div class="kontejner">
<h2>Update data</h2>
<hr>
<form action=""method="post">
  <input type="hidden"name="id"value="<?php echo $row['id'] ?>">
  <div class="form-group">
    <label for="">Ime</label>
      <input type="hidden"name="fname"value="<?php echo $row['fname'] ?>">
    <input type="text"name="fname"placeholder="Unesi ime"required>

  </div>
  <div class="form-group">
    <label for="">Prezime</label>
      <input type="hidden"name="lname"value="<?php echo $row['lname'] ?>">
    <input type="text"name="lname"placeholder="Unesi prezime"required>
  </div>
  <div class="form-group">
    <label for="">Kontakt</label>
      <input type="hidden"name="contact"value="<?php echo $row['contact'] ?>">
    <input type="text"name="contact"placeholder="kontakt broj"required>
  </div>
<button type="submit"name="update"class="btn btn-dugme">Update</button>
<a href="index.php"class="btn btn-danger">Otkazi</a>
</form>

</div>


    <?php

  }
}else {
  echo "Data nije nadjena";
}


 ?>




  </body>
</html>
