<?php

$conn = new mysqli("sql7.freemysqlhosting.net", "sql7373168", "tmSP9U89xx", "sql7373168");

$imie=$_POST['imie'];
$imie=$_POST['nazwa'];

$sql1="INSERT into `lib_autor` (`id`,`imie`) values (NULL,'$imie')";
$sql2="INSERT into `lib_tytul` (`id`,`nazwa`) values (NULL,'$nazwa')";

$conn->query($sql1);
$conn->query($sql2);

header("Location:http://127.0.0.1/lib/");
?>