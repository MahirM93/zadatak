<body>
<div class="container">
  <div class="jumbo">
<h2>Add data</h2>
<hr>
<form action=""method="post">
  <div class="form-group">
    <label for="">Ime</label>
    <input type="text"name="fname"placeholder="Unesi ime"required>
  </div>
  <div class="form-group">
    <label for="">Prezime</label>
    <input type="text"name="lname"placeholder="Unesi prezime"required>
  </div>
  <div class="form-group">
    <label for="">Kontakt</label>
    <input type="text"name="contact"placeholder="kontakt broj"required>
  </div>
<button type="submit"name="insert"class="btn btn-dugme">Save</button>
<a href="index.php"class="btn btn-danger">Otkazi</a>
</form>

  </div>
</div>

</body>

<?php
$connection=mysqli_connect("localhost","root","");
$db=mysqli_select_db($connection,'phpcrud');


if(isset($_POST['insert']))
{
  $fname=$_POST['fname'];
  $lname=$_POST['lname'];
  $contact=$_POST['contact'];

  $query="INSERT INTO student(`fname`,`lname`,`contact`) VALUES('$fname','$lname','$contact')";
  $query_run=mysqli_query($connection,$query);

  if($query_run)
  {
    echo'<script>alert(Data Sacuvana);</script>';
  }
  else{
    echo'<script>alert(Nije savucana)</script>';
  }


}

 ?>
