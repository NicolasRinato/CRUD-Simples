<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="pageStyle.css">
    <title>CRUD | Atualizar</title>
</head>
<body>
    <header><h1>Página de Atualização</h1></header>
    <main>
        <h2>Adicione os dados necessários</h2>
        <section class="first">
            <div class="input">    
                <form action="" method="post">
                    <?php
                        if (!isset($_POST['cpf'])) {
                            echo '<label for="cpf">CPF</label><input type="text" name="cpf" id="cpf" placeholder="000.000.000-00" pattern="^[0-9]{3}\.[0-9]{3}\.[0-9]{3}-[0-9]{2}$" title="Digite no formato: 000.000.000-00" inputmode="numeric" required>';
                            echo '<input type="submit" value="Validar" id="botao">';
                        }
                    ?>
                </form>
                    <?php
                        if (isset($_POST['cpf']) and !isset($_POST['username'])) {
                        
                            require_once("config.php");
                            $cpf = $_POST['cpf'];
                            $query = $mysqli -> prepare("SELECT nome FROM pessoas WHERE cpf = ?");
                            $query -> bind_param("s", $cpf);
                            $query -> execute();
                            $resultado  = $query -> get_result();
                        
                            if ($resultado -> num_rows == 1) {
                                echo '<form action="" method="post">';
                                echo '<input type="hidden" name="cpf" value="' . htmlspecialchars($cpf) . '">';
                                echo '<label for="username">Nome</label><input type="text" name="username" id="username" placeholder="Nome" title="Exemplo: Elon Musk" required minlength="3">';
                                echo '<label for="email">Email</label><input type="email" name="email" id="email" placeholder="Email"  title="exemplo@email.com" required>';
                                echo '<label for="password">Senha</label><input type="password" name="password" id="password" placeholder="Senha" required minlength="8" title="A senha deve ter pelo menos 8 caracteres">';
                                echo '<label for="birthday">Nascimento</label><input type="date" name="birthday" id="birthday" required>';
                                echo '<input type="submit" value="Alterar" id="botao">';
                                echo '</form>';
                            }
                            $query -> close();
                        }
                        if (isset($_POST['cpf']) and isset($_POST['username'])) {
                            $cpf = $_POST['cpf'];
                            $nome = $_POST['username'];
                            $senha = password_hash($_POST['password'], PASSWORD_BCRYPT);
                            $email = $_POST['email'];
                            $nascimento = $_POST['birthday'];

                            require_once("config.php");

                            $query = $mysqli -> prepare("UPDATE pessoas SET nome = ?, senha = ?, email = ?, nascimento = ? WHERE cpf = ?");
                            $query -> bind_param("sssss", $nome, $senha, $email, $nascimento, $cpf);
                            $query -> execute();
                            $query -> close();
                            echo "<p>Informações atualizadas com sucesso!</p>";
                        }


                    ?>
            </div>
            <div class="voltar">
                <h2>Volte para a Página Principal</h2>
                <a href="index.php" class="button">Página Principal</a>
            </div>
        </section>
    </main>
    <footer><p>&copy; rinato.dev</p></footer>
</body>
</html>