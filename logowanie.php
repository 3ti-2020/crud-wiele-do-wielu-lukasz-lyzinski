<?php
    session_start();
    if (!$_SESSION['login']) {
        header("Location: index.php");
    }
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Sekretna strona</title>
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Łukasz Łyziński gr. 1</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/39dd038290.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <div class="main05">
        <a href="https://github.com/3ti-2020/crud-wiele-do-wielu-lukasz-lyzinski"><div class="ikona"><i class="fab fa-github"></i></div></a>
        </div>
        <div class="main0">
        <ul class="menu1">
                <li class="pasek1"><a class="tekst" href="asd/index.html">Karta</a></li>
            </ul> 
        </div>
        <div class="main1">
        <h1>Łukasz Łyziński nr 9</h1>
    <?php

$conn = new mysqli("remotemysql.com", "5DpvsofhPC", "GnimeXVvsE", "5DpvsofhPC");

                $result = $conn->query("SELECT lib_autor_tytul.id as id,imie, tytul FROM lib_tytul, lib_autor_tytul, lib_autor WHERE lib_autor_tytul.id_autor=lib_autor.id_autor AND lib_autor_tytul.id_tytul=lib_tytul.id_tytul");

                echo("<table clas='tabelka'>");
                echo("
                <th>id</th>
                <th>imie</th>
                <th>tytul</th>
                <th>delete</th>
                ");

                while($row = $result->fetch_assoc() ){
                    echo("<tr class='row'>");
                    echo("<td>".$row['id']."</td>"."<td>".$row['imie']."</td>"."<td>".$row['tytul']."</td>"."<td>"."<form action='delete.php' method='post'>"."<input type='hidden' name='id' value=".$row['id'].">"."<input type='submit' value='delete'>"."</form>"."</td>");
                    echo("</tr>");
                }  
                echo("</table>");


?>
</div>
<div class="main2">
    <form class="pasek" action="insert.php" method="post">
        <input type="text" name="imie" >
        <input type="text" name="tytul">
        <input type="submit" value="SEND">
    </form> 
</div>
<div class="main3">
    <a href="loggg/logout.php" class="wylog">Wyloguj</a>
</div>
</div>
<script src="main.js"></script>
</body>
</html>

</body>
</html>
