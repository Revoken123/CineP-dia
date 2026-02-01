<form method="post">
<?php
$nome = $_POST['nome'];
$idade = $_POST['idade'];
$email = $_POST['email'];
$password = $_POST['password'];
$filme_favorito = $_POST['filme_favorito'];
$serie_favorita = $_POST['serie_favorita'];

echo "Nome: $nome<br>";
echo "Idade: $idade<br>";
echo "Email: $email<br>";
echo "Password: $password<br>";
echo "Filme favorito: $filme_favorito<br>";
echo "Série favorita: $serie_favorita";
?>
<a href="login.php">Fazer login<a/>