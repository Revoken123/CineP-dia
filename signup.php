<?php
$erro = "";
$sucesso = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $nome = $_POST["nome"];
    $apelido = $_POST["apelido"];
    $idade = $_POST["idade"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    $filmefav = $_POST["filmefav"];
    $seriefav = $_POST["seriefav"];

    $users = include "users.php";

    foreach ($users as $u) {
        if ($u["email"] === $email) {
            $erro = "Este email já está registado.";
            break;
        }
    }

    if ($erro === "") {
        $users[] = [
            "nome" => $nome,
            "apelido" => $apelido,
            "idade" => $idade,
            "email" => $email,
            "senha" => password_hash($senha, PASSWORD_DEFAULT),
            "filmefav" => $filmefav,
            "seriefav" => $seriefav
        ];

        $conteudo = "<?php\nreturn " . var_export($users, true) . ";\n";
        file_put_contents("users.php", $conteudo);

        $sucesso = "Conta criada com sucesso!";
    }
}
?>

<!doctype html>
<html lang="pt">
<head>
<meta charset="utf-8">
<title>Criar Conta</title>
</head>
<body>

<h1>Criar Conta</h1>

<?php if ($erro): ?><p style="color:red"><?= $erro ?></p><?php endif; ?>
<?php if ($sucesso): ?><p style="color:green"><?= $sucesso ?></p><?php endif; ?>

<form method="post">
<input name="nome" placeholder="Nome" required>
<input name="apelido" placeholder="Apelido" required>
<input name="idade" type="number" placeholder="Idade" required>
<input name="email" type="email" placeholder="Email" required>
<input name="senha" type="password" placeholder="Password" required>
<input name="filmefav" placeholder="Filme favorito">
<input name="seriefav" placeholder="Série favorita">
<button>Criar conta</button>
</form>

<a href="login.php">Já tenho conta</a>

</body>
</html>
