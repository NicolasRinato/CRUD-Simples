<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="pageStyle.css">
    <title>CRUD | Cadastro</title>
</head>
<body>
    <header><h1>Página de Cadastro</h1></header>
    <main>
        <h2>Cadastro</h2>
        <section class="first">
            <div class="input">    
                <form action="createOk.php" method="post">
                    <label for="username">Nome</label><input type="text" name="username" id="username" placeholder="Nome" title="Exemplo: Elon Musk" required minlength="3">
                    <label for="email">Email</label><input type="email" name="email" id="email" placeholder="Email"  title="exemplo@email.com" required>
                    <label for="password">Senha</label><input type="password" name="password" id="password" placeholder="Senha" required minlength="8" title="A senha deve ter pelo menos 8 caracteres">
                    <label for="cpf">CPF</label><input type="text" name="cpf" id="cpf" placeholder="000.000.000-00" pattern="^[0-9]{3}\.[0-9]{3}\.[0-9]{3}-[0-9]{2}$" title="Digite no formato: 000.000.000-00" inputmode="numeric" required>
                    <label for="birthday">Nascimento</label><input type="date" name="birthday" id="birthday" required>
                    <input type="submit" value="Criar Conta" id="botao">
                </form>
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