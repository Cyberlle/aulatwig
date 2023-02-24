<?php

require('vendor/autoload.php');

$loader = new \Twig\Loader\FilesystemLoader('./templates');

$twig = new \Twig\Environment($loader);

$template = $twig->load('teste.html');

echo $template->render([
    'nome' => "Cybelle",
    'idade' => 16,
    'titulo' => "Teste",
]);
?>