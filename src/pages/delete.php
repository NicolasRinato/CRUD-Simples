<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/defaultStyle.css">
    <title>CRUD | Deletar</title>
</head>
<body>
    <header><h1>Página de Deletar</h1></header>
    <main>
        <h2>Adicione os dados necessários</h2>
        <section class="first">
            <div class="input">
                <form action="" method="post">
                    <label for="email">Email</label><input type="email" name="email" id="email" placeholder="Email"  title="exemplo@email.com" required>
                    <label for="cpf">CPF</label><input type="text" name="cpf" id="cpf" placeholder="000.000.000-00" pattern="^[0-9]{3}\.[0-9]{3}\.[0-9]{3}-[0-9]{2}$" title="Digite no formato 000.000.000-00" inputmode="numeric" required>
                    <label for="password">Senha</label><input type="password" name="password" id="password" placeholder="Senha" required minlength="8" title="A senha deve ter pelo menos 8 caracteres">
                    <input type="submit" value="Deletar" id="botao">
                </form>
            </div>
            <div class="voltar">
                <?php
                require_once("config.php");
                if (isset($_POST['cpf']) and isset($_POST['email']) and isset($_POST['password'])){
                    $cpf = $_POST['cpf'];
                    $email = $_POST['email'];
                    $password = $_POST['password'];

                    $query = $mysqli -> prepare("SELECT senha, email FROM pessoas WHERE cpf = ?");
                    $query -> bind_param("s", $cpf); 
                    $query -> execute();

                    $resultado = $query -> get_result();
                    $resultadoFormat = $resultado -> fetch_assoc();
                    $query->close();
                    if (!$resultadoFormat){
                        echo "<p>Usuário não encontrado!</p>";
                    } else {
                        $hash = $resultadoFormat['senha'];
                        $emailBanco = $resultadoFormat['email'];
        
                        if (!password_verify($password, $hash) || $email != $emailBanco) {
                            echo "<p>Erro!, tente novamente<p>";
                        } else {
                            $query = $mysqli -> prepare("DELETE FROM pessoas WHERE cpf = ?");
                            $query -> bind_param("s", $cpf);
                            $query -> execute();
                            echo "<p>Conta deletada com Sucesso!</p>";
                            $query -> close();
                        }
                    }
                }
                echo "<h2>Volte para a Página Principal</h2>";
                echo '<a href="../../index.php" class="button">Página Principal</a>';
                ?>
            </div>
        </section>

    </main>
        <footer>
            <p>Copyright &copy; 2026. Todos os direitos reservados. | Desenvolvido por <a href="https://www.instagram.com/nrinato.dev/" target="__blank">nrinato.dev</a></p>
        </footer>
</body>
</html>