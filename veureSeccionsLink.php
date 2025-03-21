
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
        $i = 0;
        echo "<h1>Seccions</h1>";
        while ($fila = $resultats->fetchArray(SQLITE3_ASSOC)) {
            echo "<p> - ${fila['not_seccio']</p>";
        }
        $db->close();
    ?>
</body>
</html>

