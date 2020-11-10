<?php
$conn = new mysqli("remotemysql.com", "5DpvsofhPC", "GnimeXVvsE", "5DpvsofhPC");

$imie = $_POST['imie'];
$tytul = $_POST['tytul'];

$sql1 = "INSERT INTO `lib_autor`(`id_autor`, `imie`) VALUES (NULL, '$imie')";
if ($conn->query($sql1) === TRUE) {
    $last_id1 = $conn->insert_id;
  }
$sql2 = "INSERT INTO `lib_tytul`(`id_tytul`, `tytul`) VALUES (NULL, '$tytul')";
if ($conn->query($sql2) === TRUE) {
    $last_id2 = $conn->insert_id;
  }
$sql3 = "INSERT INTO `lib_autor_tytul`(`id`, `id_autor`, `id_tytul`) VALUES (NULL,$last_id1,$last_id2)";
$conn->query($sql3);
mysqli_close($conn);
header("Location: https://lukasz-lyzinski-crud.herokuapp.com/logowanie.php");
?>