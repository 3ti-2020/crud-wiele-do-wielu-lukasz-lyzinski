<?php
    $conn = new mysqli("remotemysql.com", "5DpvsofhPC", "GnimeXVvsE", "5DpvsofhPC");
    $id = $_POST['id'];
    $sql = "DELETE from lib_autor_tytul WHERE id='$id'";
    mysqli_query($conn, $sql);
    header("Location: https://lukasz-lyzinski-crud.herokuapp.com/");
?>