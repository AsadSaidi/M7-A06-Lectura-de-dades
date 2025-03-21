
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $db = new SQLite3('diariLocal.db');
        $resultats = $db->query("SELECT * FROM noticies ORDER BY not_data DESC");
        $contador = 0;
        echo "<h1>Noticies de Febrer</h1>";
        while ($fila = $resultats->fetchArray(SQLITE3_ASSOC)) {
            if(substr($fila['not_data'], 5, 2) == '02'){
                $contador++;
            }
        
        }
        echo "Numero de noticias de febrer: $contador";
        $db->close();
    ?>
</body>
</html>