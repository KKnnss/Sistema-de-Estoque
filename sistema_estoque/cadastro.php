<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title> Login </title>
</head>
<body>
    
    <div id="grid-container">
        <div id="left-container">
            <div id="left-content">
                <div id="h2-left"> <h2> Cadastro </h2> </div>
                
                <div id="form-container">
                    
                    <form action="action_cadastro.php" method="post">
                    
                        <input class="input-form" type="text" name="nome" placeholder="Nome"> <br>
                        <input class="input-form" type="email" name="email" placeholder="Email"> <br>
                        <input class="input-form" type="password" name="senha" placeholder="Senha"> <br>
                        <input class="input-form" type="password" name="confirmarSenha" placeholder="Confirmar senha"> <br>
                        <input id="button-left" type="submit" value="Cadastrar" name="sendLogin">
                    </form>
                </div>
            </div>
        </div>
        <div id="right-container">
            <div id="right-content">
                <div id="h1-right"> <h1> estoque </h1> </div>
                <div id="h2-right"> <h2> Sistema de estacionamento </h2> </div>
                <div id="button-right"> <a href="login.php"> Tem uma conta ? </a> </div>
            </div>
        </div>
    </div>
</body>
</html>