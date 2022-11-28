<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./static/css/home.css">
</head>
<body>
    <header>
        <a href="#" class="btn-abrir" onclick="abrirMenu()">&#9776; Menu</a>
        <img src="./static/img/estoque.png" alt="" srcset="">

    </header>
    
    <nav id="menu">
        <a href="#" onclick="fecharMenu()">&times; Fechar</a>
        <a href="homee.php">Consultar Estoque</a>
        <a href="cadastrar_produto.php">Cadastrar Produtos</a>
        <a href="lista_produtos.php">Lista de Produtos</a>
        <a href="#">Sair</a>
    </nav>
    <main id="main"> 
        <h1>Consulta de Estoque</h1>

    </main>


    <script>
        function abrirMenu(){
            document.getElementById('menu').style.width = '250px';
            document.getElementById('main').style.marginLeft= '250px';
        }
        function fecharMenu(){
            document.getElementById('menu').style.width = '0px';
            document.getElementById('main').style.marginLeft = '0px';
        }
        
    </script>
</body>
</html>