<?php
session_start();
$erro = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $email = $_POST["email"];
    $password = $_POST["password"];

    $users = include "users.php";

    foreach ($users as $u) {
        if ($u["email"] === $email && password_verify($password, $u["senha"])) {

            $_SESSION["logado"] = true;
            $_SESSION["email"] = $email;
            $_SESSION["nome"] = $u["nome"];

            header("Location: index.php");
            exit;
        }
    }

    $erro = "Email ou password incorretos.";
}
?>

<!doctype html>
<html lang="pt">
<head>
<meta charset="utf-8">
<title>Login</title>
</head>
<body>

<h1>Entrar</h1>

<?php if ($erro): ?><p style="color:red"><?= $erro ?></p><?php endif; ?>

<form method="post">
<input name="email" type="email" placeholder="Email" required>
<input name="password" type="password" placeholder="Password" required>
<button>Entrar</button>
</form>

<a href="signup.php">Criar conta</a>

</body>
</html>
