<?php
$conn = new mysqli("sql7.freemysqlhosting.net", "sql7373168", "tmSP9U89xx", "sql7373168");

$imie=$_POST['imie'];

$sql="INSERT into lib_autor(id_autor, imie) values (NULL,'$imie') ";

mysqli_query($conn,$sql);
header("http://127.0.0.1/lib/");

?>

<?php
$conn = new mysqli("sql7.freemysqlhosting.net", "sql7373168", "tmSP9U89xx", "sql7373168");

$tytul=$_POST['tytul'];

$sql="INSERT into lib_tytul(id_tytul, tytul) values (NULL,'$tytul') ";

mysqli_query($conn,$sql);
header("http://127.0.0.1/lib/");

?>



