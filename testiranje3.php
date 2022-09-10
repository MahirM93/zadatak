<form method="post">
    Omiljena hrana je:
    <input type="text"name="hrana">
    <br>
    Omiljena boja:
    <input type="text"name="boja">
    <br>
    <input type="submit"value="submit">
    <br>
    <p>Vasa omiljena hrana je:<?php $_POST['hrana'];?></p>
    <p>Vasa omiljena boja je:<?php $_POST['boja'];?></p>
    <a href="index.php">Resert</a>
