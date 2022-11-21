<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="action_cadastrar_produto.php" method="post" enctype="multipart/form-data">
        <div>
            <label for="codigo">Codigo:
            <input type="text" name="codigo">
            </label>
        </div>
        <div>
            <label for="">Nome:
            <input type="text" name="nome">
            </label>
        </div>
        <div>
            <label for="">Preço:
            <input type="text" name="preco">
            </label>
        </div>
        <div>
            <label for="">Quantidade:
            <input type="text" name="quantidade">
            </label>
        </div>
        <div>
            <label for="">Quantidade est:
            <input type="text" name="quantiade_min">
            </label>
        </div>
        <div>
            <label for="">Imagem do Produto:
            <input type="file" name="arquivo">
            </label>
        </div>
        <div>
            <input type="submit">
        </div>
            

    </form>


</body>
</html>