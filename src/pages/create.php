<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/defaultStyle.css">
    <title>CRUD | Cadastro de Usuário</title>
</head>
<body>
    <header>
        <h1>Página de Cadastro</h1>
    </header>
    <main>
        <h2>Criar conta</h2>
        <section class="first">
            <div class="form">
                <form action="createUser.php" method="post">
                    
                    <label for="username" class="label-input">Nome</label>
                    <input type="text" name="username" id="username" class="input-form" placeholder="Nome" title="Exemplo: Elon Musk" required minlength="3">
                    
                    <label for="email" class="label-input">Email</label>
                    <input type="email" name="email" id="email" class="input-form" placeholder="conta@email.com"  title="exemplo@email.com" required>
                    
                    <label for="password" class="label-input">Senha</label>
                    <input type="password" name="password" id="password" class="input-form" placeholder="******" required minlength="8" title="A senha deve ter pelo menos 8 caracteres">
                    
                    <label for="cpf" class="label-input">CPF</label>
                    <input type="text" name="cpf" id="cpf" class="input-form" placeholder="000.000.000-00" pattern="^[0-9]{3}\.[0-9]{3}\.[0-9]{3}-[0-9]{2}$" title="Digite no formato: 000.000.000-00" inputmode="numeric" required>
                    
                    <label for="birthday" class="label-input">Nascimento</label>
                    <input type="date" name="birthday" id="birthday" class="input-form" required>
                    
                    <input type="submit" value="Criar Conta" id="botao">
                </form>
            </div>
            <div class="voltar">
                <h2>Volte para a Página Principal</h2>
                <a href="../../index.php" class="button">Página Principal</a>
            </div>
        </section>
    </main>
        <footer>
            <p>Copyright &copy; 2026. Todos os direitos reservados. | Desenvolvido por <a href="https://www.instagram.com/nrinato.dev/" target="__blank">nrinato.dev</a></p>
        </footer>
</body>
</html>