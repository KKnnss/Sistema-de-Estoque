<?php
require 'config.php';

$id = filter_input(INPUT_GET, 'id');

$lista = [];
        $sql = $pdo->query("SELECT * FROM produtos");

    if($sql->rowCount() > 0) {
        $lista = $sql->fetchAll(PDO::FETCH_ASSOC);

}

$name = filter_input(INPUT_GET, 'nome');
$codigo = filter_input(INPUT_GET, 'codigo');
$preco = filter_input(INPUT_GET, 'preco');
$quantidade = filter_input(INPUT_GET, 'quantidaed_float');
$quantidade_estq = filter_input(INPUT_GET, 'quantidade_estq');


$lista = $pdo->query("SELECT * FROM produtos WHERE nome LIKE '%$name%' AND  codigo LIKE '%$codigo%'  AND preco like '%$preco%' AND quantidade like '%$quantidade%' AND quantidade_min like '%$quantidade_estq%' ");


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>

<div class="container">
    
    <form action="" method="get">
        <div>
            <label for="">Buscar nome ou codigo do produto
                <input type="search">
                <input class="" type="submit" value="Buscar">
            </label>
        </div>

    </form>

    <div>
        <table>
            <tr>
                <th>codigo</th>
                <th>nome</th>
                <th>preco</th>
                <th>quatidade</th>
                <th>quantidade de est</th>
            </tr>

            <?php
                foreach ($lista as $listas) {
                    
                    
                }
            ?>
            <tr>
            <img src="./bala.jfif" alt="" width="50px">
            <td></a> <?php echo $listas['codigo']; ?></td>

            <td> <?php echo $listas['nome']; ?></td>

            <td> <?php echo $listas['preco']; ?></td>

            <td> <?php echo $listas['quantidade']; ?></td>

            <td> <?php echo $listas['quantidade_min']; ?></td>
            
            </tr>

        </table>
    </div>


</div>    
</body>
</html>