<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Produtos</title>
    
</head>
<body>

    <table>
            <thead>
                    <tr>
                        <th>Produtos</th>
                    </tr>
            </thead>

            <tbody>
                <?php
                    while($e = $produtos->fetch()){
                        echo "<tr>" . "<tb>" .$e["id"] . "</tb>\n" . $e["nome"] . $e["um"] . $e["valor"] . $e["qtd"] . "</tr>";    
                    }
                ?>
            </tbody>
    </table>

</body>
</html>