<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Estados</title>
    <link rel="stylesheet" href="./table.css">
</head>
<body>

    <table>
            <thead>
                    <tr>
                        <th>Estados</th>
                    </tr>
            </thead>

            <tbody>
                <?php
                    while($e = $estados->fetch()){
                        echo "<tr>" ."<tb>" .$e["nome"] ."</tb>\n" ."</tr>";    
                    }
                ?>
            </tbody>
    </table>

</body>
</html>