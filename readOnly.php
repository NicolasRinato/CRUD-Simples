<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="pageStyle.css">
    <title>CRUD | Visualizar Específico</title>
</head>
<body>
    <header><h1>Visualizar Específico</h1></header>
    <main>
        <h2>Adicione os dados necessários</h2>
        <section class="first">
            <div class="input">
                <form action="" method="post">
                    <label for="cpf">CPF</label> <input type="text" name="cpf" id="cpf" placeholder="000.000.000-00" pattern="^[0-9]{3}\.[0-9]{3}\.[0-9]{3}-[0-9]{2}$" title="Digite no formato 000.000.000-00" inputmode="numeric" required>
                    <input type="submit" value="Buscar" id="botao">
                </form>
            </div>
            <div class="voltar">
        <?php

        
    if (isset($_POST['cpf'])) {
        $cpf = $_POST['cpf'];
        require_once("config.php");
        
        $query = $mysqli -> prepare("SELECT nome, email, nascimento FROM pessoas WHERE cpf = ?");
        $query -> bind_param("s", $cpf);
        $query -> execute();
        $resultado = $query -> get_result();
        if ($resultado->num_rows > 0) {
            $dados = $resultado-> fetch_assoc();
            echo "<h2>Usuário Cadastrado nesse CPF</h2>";
            echo "<p><strong>Nome:</strong> ".$dados['nome']."</p>";
            echo "<p><strong>Email:</strong> ".$dados['email']."</p>";
            echo "<p><strong>Nascimento:</strong> ".$dados['nascimento']."</p>";
        } else {
            echo "<p><strong>Usuário não encontrado!</strong></p>";
            echo "<p><strong>Tente Novamente!</strong></p>";
        }
        $query -> close();
    }
        
        ?>

            <h2>Volte para a Página Principal</h2>
            <a href="index.php" class="button">Página Principal</a>
            </div>
    </section>
    </main>
    <footer><p>&copy; rinato.dev</p></footer>
</body>
</html>