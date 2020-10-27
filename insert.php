<?php

$conn = new mysqli("localhost", "root", "", "tom");

$imie=$_POST['imie'];
$imie=$_POST['nazwa'];

$sql="INSERT into `lib_autor` (`id`,`imie`) values (NULL,'$imie')";
$sql1="INSERT into `lib_tytul` (`id`,`nazwa`) values (NULL,'$nazwa')"

mysqli_query($conn,$sql);
mysqli_query($conn,$sql1);
header("Location:http://127.0.0.1/lib/");
?>