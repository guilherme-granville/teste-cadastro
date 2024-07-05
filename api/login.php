<?php
session_start();
include 'php/conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    $sql = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND senha = '$senha'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $_SESSION['usuario'] = $usuario;
        header("Location: index.php");
        exit;
    } else {
        $erro = "Usuário ou senha incorretos!";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <div class="login-container">
        <h2>Faça o login para continuar</h2>
        <?php if (isset($erro)) { echo "<p>$erro</p>"; } ?>
        <form method="post" action="">
            <input type="text" name="usuario" placeholder="Usuário" required >
            <input type="password" name="senha" placeholder="Senha" required>
            <input type="submit" value="Login">
        </form>
    </div>
    <footer>
        <p>&copy; <?php echo date("Y"); ?> Granville & Granville. Todos os direitos reservados.</p>
    </footer>
</body>
</html>
