<?php
    $conn = new mysqli("remotemysql.com", "5DpvsofhPC", "GnimeXVvsE", "5DpvsofhPC");
    $id1 = $_POST['id1'];
    $sql = "DELETE from wyp WHERE id='$id1'";
    mysqli_query($conn, $sql);
    header("Location: https://lukasz-lyzinski-crud.herokuapp.com/logowanie.php");
?>