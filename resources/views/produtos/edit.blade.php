<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar um produto</title>
</head>
<body>
    <form action="" method="POST">
       <label for="">Nome</label> <br />
       <input type="text" name="nome" value="{{ $produto->nome }}"> <br />
       <label for="">Custo</label> <br />
       <input type="text" name="custo" value="{{ $produto->custo }}"> <br />
       <label for="">Preco</label> <br />
       <input type="text" name="preco" value="{{ $produto->preco }}"> <br />
       <label for="">Quantidade</label> <br />
       <input type="text" name="quantidade" value="{{ $produto->quantidade }}"> <br />
       <button>Salvar</button>
    </form>   
</body>
</html>