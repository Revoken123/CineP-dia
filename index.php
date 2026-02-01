<?php
session_start();

if (!isset($_SESSION["logado"])) {
    header("Location: login.php");
    exit;
}
?>
<!doctype html>
<html lang="pt-BR">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>CinePédia - Início</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">

<header class="topbar">
  <div class="brand">CinePédia</div>
  <nav>
    <ul>
      <li><a href="index.html">Home</a></li>
      <li><a href="filmes.html">Filmes</a></li>
      <li><a href="series.html">Séries</a></li>
      <li><a href="#">Lançamentos</a></li>
    </ul>
  </nav>
  <div class="actions">
	
<h2>Bem-vindo, <?= $_SESSION["nome"] ?? "Utilizador" ?> 🎬</h1>

<a href="logout.php">Sair</a>
    <a href="login.php" title="Login">Login</a>
    <a href="signup.php" title="Sign up">Sign up</a>
  </div>
</header>

<main>
  <section class="section">
    <div class="subsection">
      <h3 class="small">Filmes em alta</h3>
      <div class="card-row">
        <a class="card" href="Frankenstein_filme.html">
          <img src="frankenstein.webp" alt="Poster Filme 1">
          <div class="title">Frankenstein</div>
          <div class="meta">2025 • Drama</div>
        </a>
        <a class="card" href="weapon_filme.html">
          <img src="weapons.webp" alt="Poster Filme 2">
          <div class="title">Weapons</div>
          <div class="meta">2025 • Terror</div>
        </a>
		<a class="card" href="telefone negro2_filme.html">
          <img src="telefone negro 2.webp" alt="Poster Filme 2">
          <div class="title">Telefone Negro 2</div>
          <div class="meta">2025 • Terror</div>
        </a>
      </div>
    </div>

    <div class="subsection">
      <h3 class="small">Melhores avaliados</h3>
      <div class="card-row">
        <a class="card" href="filme-detalhe.html"><img src="O Lar.webp" alt=""><div class="title">O Lar</div><div class="meta">2008 • 9.8</div></a>
        <a class="card" href="filme-detalhe.html"><img src="condenados.webp" alt=""><div class="title">Os Condenados de Shawshank</div><div class="meta">1995 • 8.9</div></a>
		<a class="card" href="filme-detalhe.html"><img src="milagre.webp" alt=""><div class="title">À Espera de Um Milagre</div><div class="meta">1999 • 8.6</div></a>
      </div>
    </div>
  </section>

  <section class="section">
    <div class="subsection">
      <h3 class="small">Séries em alta</h3>
      <div class="card-row">
        <a class="card" href="serie-detalhe.html"><img src="assets/poster-placeholder.png" alt=""><div class="title">Série Exemplo 1</div><div class="meta">2024 • Drama</div></a>
        <a class="card" href="serie-detalhe.html"><img src="assets/poster-placeholder.png" alt=""><div class="title">Série Exemplo 2</div><div class="meta">2022 • Ficção</div></a>
        <a class="card" href="serie-detalhe.html"><img src="assets/poster-placeholder.png" alt=""><div class="title">Série Exemplo 2</div><div class="meta">2022 • Ficção</div></a>
	  </div>
    </div>

    <div class="subsection">
      <h3 class="small">Melhores avaliadas</h3>
      <div class="card-row">
        <a class="card" href="Breaking Bad_serie.html"><img src="breaking bad.avif" alt=""><div class="title">Breaking Bad</div><div class="meta">9.5</div></a>
        <a class="card" href="serie-detalhe.html"><img src="breaking bad.avif" alt=""><div class="title">Breaking Bad</div><div class="meta">9.5</div></a>
        <a class="card" href="serie-detalhe.html"><img src="breaking bad.avif" alt=""><div class="title">Breaking Bad</div><div class="meta">9.5</div></a>
	  </div>
    </div>
  </section>

</main>
</div>
</body>
</html>
