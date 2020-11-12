<?php
$conn = new mysqli("remotemysql.com", "5DpvsofhPC", "GnimeXVvsE", "5DpvsofhPC");

$sql = "INSERT INTO wyp (id,autor,tytul,data_wyp,data_odd) VALUES (NULL , 'Sienkiewicz', 'Potop',NOW(),NOW()+INTERVAL 4 WEEK)";

mysqli_query($conn,$sql);
header("Location:https://lukasz-lyzinski-crud.herokuapp.com/asd/index1.html");

?>