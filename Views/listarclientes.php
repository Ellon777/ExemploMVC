<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem</title>
</head>
<body>
    <h1>Clientes</h1>
    <table border=1>
            <tr>
                <th>Nome</th>
                <th>CPF</th>
                <th>E-mail</th>
            </tr>
        <?php
            foreach($retorno as $dado)
            {
                echo "<tr>";
                    echo "<td>{$dado[0]}</td>";
                    echo "<td>{$dado[1]}</td>";
                    echo "<td>{$dado[2]}</td>";
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>