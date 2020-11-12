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
                    echo("<td>".$row['id']."</td>"."<td>".$row['imie']."</td>"."<td>".$row['tytul']."</td>");
                    echo("</tr>");
                }  
                echo("</table>");


?>
</div>
<div class="main2">
</div>
<div class="main3">
<form action="loggg/login.php" method="post">
        <br>Nazwa użytkownika:"a"</br>
        <input type="text" name="login">
        <br>Hasło:"a"</br>
        <input type="text" name="haslo"><br>
        <input type="submit" value="zaloguj">
    </form>
</div>
</div>
<script src="main.js"></script>
</body>
</html>
