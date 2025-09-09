<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="pageStyle.css">
    <title>CRUD | Visualizar Geral</title>
</head>
<body>
    <header><h1>Visualização Geral</h1></header>
    <main>
        <h2>Tabela de Informações</h2>
        <section class="first">
            <div class="input">
                <?php
                require_once("config.php");

                $query = $mysqli -> prepare("SELECT nome,nascimento FROM pessoas");
                $query -> execute();

                $resultado = $query-> get_result();
                $resultadoFormatado = $resultado -> fetch_all(MYSQLI_ASSOC);

                echo "<table><tr><th>Nome</th><th>Nascimento</th></tr>";
                foreach ($resultadoFormatado as $linha) {
                    echo "<tr><td>" . $linha['nome'] . "</td><td>" . $linha['nascimento'] . "</td></tr>";
                }
                echo "</table>";
                $query -> close();
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