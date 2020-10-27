<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="main1">
    <?php

                $conn = new mysqli("localhost", "root", "", "tom");

                $result = $conn->query("SELECT lib_tytul.id as id,imie, nazwa FROM lib_tytul, lib_autor_tytul, lib_autor WHERE lib_autor_tytul.id_autor=lib_autor.id AND lib_autor_tytul.id_tytul=lib_tytul.id");

                echo("<table clas='tabelka'>");
                echo("
                <th>id</th>
                <th>imie</th>
                <th>tytul</th>
                ");

                while($row = $result->fetch_assoc() ){
                    echo("<tr class='row'>");
                    echo("<td>".$row['id']."</td>"."<td>".$row['imie']."</td>"."<td>".$row['nazwa']."</td>");
                    echo("</tr>");
                }  
                echo("</table>");


?>
</div>
<div class="main2">
    <form class="pasek" action="insert.php" method="post">
        <input type="text" name="imie" >
        <input type="text" name="nazwa">
        <input type="submit" value="SEND">
    </form>
</div>
</div>
<script src="main.js"></script>
</body>
</html>