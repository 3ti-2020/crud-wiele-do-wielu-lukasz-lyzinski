<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Łukasz Łyziński gr. 1</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="main1">
        <h1>Łukasz Łyziński nr 9</h1>
    <?php

$conn = new mysqli("sql7.freemysqlhosting.net", "sql7373168", "tmSP9U89xx", "sql7373168");

                $result = $conn->query("SELECT lib_autor_tytul.id as id,imie, tytul FROM lib_tytul, lib_autor_tytul, lib_autor WHERE lib_autor_tytul.id_autor=lib_autor.id_autor AND lib_autor_tytul.id_tytul=lib_tytul.id_tytul");

                echo("<table clas='tabelka'>");
                echo("
                <th>id</th>
                <th>imie</th>
                <th>tytul</th>
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
    <form class="pasek" action="insert.php" method="post">
        <input type="text" name="imie" >
        <input type="text" name="tytul">
        <input type="submit" value="SEND">
    </form>
    <?php

$conn = new mysqli("sql7.freemysqlhosting.net", "sql7373168", "tmSP9U89xx", "sql7373168");

    $result_autor = $conn->query("SELECT * FROM lib_autor");
    $result_tytuly = $conn->query("SELECT * FROM lib_tytul");

    echo("<form action='insert1.php' class='ins' method='POST'>");
    echo("<select name='autor'>");
    while($wiersz=$result_autor->fetch_assoc() ){
        echo("<option value='".$wiersz['id_autor']."'>".$wiersz['imie']." </option>");
    }
    echo("</select>");

    echo("<select name='tytul1'>");
    while($wiersz=$result_tytuly->fetch_assoc() ){
        echo("<option value='".$wiersz['id_tytul']."'>".$wiersz['tytul']."</option>");
    }
    echo("</select>");

    echo("<input type='submit' value='INSERT'>");
    echo("</form>");
?> 
</div>
</div>
<script src="main.js"></script>
</body>
</html>