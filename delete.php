<?php
    $conn = new mysqli("sql7.freemysqlhosting.net", "sql7374422", "NmBYIP3fmp", "sql7374422");
    $id = $_POST['id'];
    $sql = "DELETE from lib_autor_tytul WHERE id='$id'";
    mysqli_query($conn, $sql);
    header("Location: https://lukasz-lyzinski-crud.herokuapp.com/");
?>