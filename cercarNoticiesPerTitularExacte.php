
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>  
    <form method="POST" action="">
        <label for='titularBuscar'>Número: </label>";
        <input type='text' id='titularBuscar' name='titularBuscar' required>";
        <input type='submit' value='Cercar'>
    </form>

    <?php
        $titol = htmlspecialchars($_POST["nombre"]);
        $db = new SQLite3('diariLocal.db');
        $resultats = $db->query("SELECT * FROM noticies ORDER BY not_data DESC");
        while ($fila = $resultats->fetchArray(SQLITE3_ASSOC)) {
            if($fila['not_titular'] == $titol){
                echo "<h1>${fila['not_id']} - ${fila['not_titular']}</h1>
                <h3>${fila['not_data']} - ${fila['not_seccio']}</h3>
                <p>${fila['not_cos']}</p>";
            }
        }  
    ?>
</body>
</html>