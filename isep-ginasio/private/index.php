<?php
require_once 'includes/funcoes.php';

// Inicia a sessão e verifica se o utilizador está autenticado
start_session();
redirect_if_not_logged();

// Se o código chegar aqui, significa que o utilizador tem sessão iniciada
// Redireciona de imediato para a página principal da área privada
header('Location: home.php');
exit;