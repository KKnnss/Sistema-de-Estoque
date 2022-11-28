<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title> Login </title>
    <link rel="stylesheet" href="./static/css/cadastro.css">
</head>
<body>
    <header>
        <img src="./static/img/estoque.png" alt="" srcset="">
    </header>
    <form action="action_cadastro.php" method="post">
    <main id="main"> 
    <nav id="menu">
        
    </nav>
    

        <div class="corpo">

            <h1>Cadastrar Produto</h1>
            <label for="">Nome: <br>
                <input type="text" name="nome" placeholder="Nome"><br>
            </label><br>
            <label for="">Email<br>
            <input class="input-form" type="email" name="email" placeholder="Email"> <br><br>
            </label>
            <label for="">Senha <br>
            <input class="input-form" type="password" name="senha" placeholder="Senha"> <br><br>
            
            </label>

            <label for="">Confirmar Senha <br> 
            <input class="input-form" type="password" name="confirmarSenha" placeholder="Confirmar senha"> </label><br><br>
                <a href="login.php">Já tem uma conta?</a><br><br>
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
            document.getElementById('main').style.marginLeft = '0px';
        } 
        
    </script>

                    
</body>
</html>