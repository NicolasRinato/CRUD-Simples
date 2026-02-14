<?php

$email = $_POST['email'];
$username = $_POST['username'];
$hash = password_hash($_POST['password'], PASSWORD_BCRYPT);
$cpf = $_POST['cpf'];
$birthday = $_POST['birthday'];

require_once("config.php");

$query = $mysqli -> prepare("INSERT INTO pessoas (email, nome, senha, cpf, nascimento) VALUES (?, ?, ?, ?, ?)");
$query -> bind_param("sssss", $email, $username, $hash, $cpf, $birthday);
$query -> execute();
$query -> close();

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="pageStyle.css">
    <title>CRUD | Cadastro OK</title>
</head>
<body>
    <header><h1>Cadastro Finalizado</h1></header>
    <main>
        <h2>Volte para a Página Principal</h2>
        <a href="index.php" class="button">Página Principal</a>
    </main>
    <footer><p>&copy; rinato.dev</p></footer>
</body>
</html>