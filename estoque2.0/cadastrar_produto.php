<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./static/css/pcadastro.css">
</head>
<body>
    
    <form action="action_cadastrar_produto.php" method="post" enctype="multipart/form-data">
       <header>
        <a href="#" class="btn-abrir" onclick="abrirMenu()">&#9776; Menu</a>
        <img src="./static/img/estoque.png" alt="" srcset="">
       </header>
       <nav id="menu">
        <a href="#" onclick="fecharMenu()">&times; Fechar</a>
        <a href="homee.php">Consultar Estoque</a>
        <a href="#">Cadastrar Protudos</a>
        <a href="lista_produtos.php">Lista de Produtos</a>
        <a href="#">Sair</a>
    </nav>
    

<main id="main"> 
    

        <div class="corpo">

            <h1>Cadastrar Produto</h1>
            <label for="">Nome: <br>
                <input type="text" name="nome"><br>
            </label>
            <label for="">Preço<br>
                <input type="text" name="preco"><br><br>
            </label>
            <label for="">Quantidade: <br>
                <input type="text" name="quantidade"><br><br>
            
            </label>

            <label for="">Quantidade est: <br>
            <input type="text" name="quantiade_min"><br><br>
            </label>
            <label for="">Imagem do Produto: <br><br>
            <input type="file" name="arquivo"><br><br>
            </label>

            <input type="submit" value="Cadastrar">
        </div>

    </main>
            

    </form>

    <script>
        function abrirMenu(){
            document.getElementById('menu').style.width = '250px';
            document.getElementById('main').style.marginLeft= '250px';
        }
        function fecharMenu(){
            document.getElementById('menu').style.width = '0px';
            document.getElementById('main').style.marginLeft = '60%';
        } 
        
    </script>

</body>
</html>