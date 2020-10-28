<?php
$conn = new mysqli("sql7.freemysqlhosting.net", "sql7373168", "tmSP9U89xx", "sql7373168");

$autor=$_POST['autor'];
$tytul1=$_POST['tytul1'];

$sql = "INSERT INTO lib_autor_tytul(id, id_autor, id_tytul) VALUES (NULL , '$autor', '$tytul1')";

mysqli_query($conn,$sql);
header("Location:http://127.0.0.1/lib/");

?>