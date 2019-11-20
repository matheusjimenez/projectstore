<?php
require_once "conexao.php";
require_once "../../topo.php";
?>

<!DOCTYPE html>
<html lang="pt-bt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reaproveite</title>

    <link rel="stylesheet" type="text/css" href="../../bootstrap/css/bootstrap.css">
    <link rel="shortcut icon" type="image/x-png" href="../../img/logo.png">
    <link rel="stylesheet" type="text/css" href="../../css/estilo.css">
    
    <link href="https://fonts.googleapis.com/css?family=EB+Garamond:600&display=swap" rel="stylesheet">
</head>

<body>

    <div class="entrar">
        <form action="entrar_proc.php" method="POST">
            <h3>Já sou Cliente</h3>
            <label for="login">Usuário</label><br>
            <input type="text" id="input" name="login"><br>
            <label for="senha">Senha</label><br>
            <input type="password" id="input" name="senha"><br><br>
            <button type="submit" id="btn">Entrar</button>
        </form>
    </div>

    <div class="cadastrar">
        <form action="cadastrar_proc.php" method="POST">
            <h3>Quero Criar uma Conta</h3>
            <label for="nome" id="cad">Nome</label>
            <input type="text" id="cad" name="nome"><br>
            <label for="sobrenome" id="cad">Sobrenome</label>
            <input type="text" id="cad" name="sobrenome"><br>
            <label for="telefone" id="cad">Telefone</label>
            <input type="text" id="cad" name="telefone"><br>
            <label for="cidade" id="cad">Cidade</label>
            <input type="text" id="cad" name="cidade">
            <label for="estado" id="cad">Estado</label>
            <input type="text" id="cad" name="estado"><br>
            <label for="usuario" id="cad">Usuário</label>
            <input type="text" id="cad" name="usuario"><br>
            <label for="senha" id="cad" >Senha</label>
            <input type="text" id="cad" name="senha"><br><br>
            <button type="submit" class="btn1" id="btn">Cadastrar</button>
        </form>
    </div>

</body>

</html>