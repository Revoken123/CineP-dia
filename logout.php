<?php
session_start();
//Irá apagar todas as informações da sessão
session_unset();
//Leva para a página inicial
header("Location: index.php");
exit;
