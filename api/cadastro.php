<?php
session_start();
include 'php/conexao.php';

if (!isset($_SESSION['usuario'])) {
    header('Location: login.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Caixa</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="shortcut icon" href="icons/favicon.ico" type="image/x-icon">
</head>
<body id="CorpoCadastro">
    <a href="logout.php" class="logout-btn">Logout</a>
    <div id="janela_flutuante" class="container">
        <main>
            <nav>
                <ul>
                    <li>
                        <a href="inicio">&#8617; Início</a>
                    </li>
                    <li>
                        <a href="produtos">Produtos</a>
                    </li>
                </ul>
            </nav>
            <h2>Cadastro de Produtos</h2>
            <form id="produtoForm" action="php/cadastrar_produto.php" method="post" accept-charset="UTF-8">

                <input type="text" name="nome" placeholder="Nome do Produto" required autocomplete="off"><br>

                <input type="text" name="preco" placeholder="Preço" required autocomplete="off"><br>

                <input type="text" name="codigo_de_barras" placeholder="Código de Barras" required autocomplete="off"><br>

                <input type="submit" value="Cadastrar Produto">
            </form>
        </main>
    </div>
    <footer>
        <p>&copy; <?php echo date("Y"); ?> Granville & Granville. Todos os direitos reservados.</p>
    </footer>
    <script src="js/cadastrar_produto.js"></script>
</body>
</html>
