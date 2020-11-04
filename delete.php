<?php
    $conn = new mysqli("sql7.freemysqlhosting.net", "sql7373168", "tmSP9U89xx", "sql7373168");
    $id = $_POST['id'];
    $sql = "DELETE from lib_autor_tytul WHERE id='$id'";
    mysqli_query($conn, $sql);
    header("Location: https://lukasz-lyzinski-crud.herokuapp.com/");
?>