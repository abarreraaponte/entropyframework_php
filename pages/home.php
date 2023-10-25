<?php


use Twig\Loader\FilesystemLoader;
use Twig\Environment;

$loader = new FilesystemLoader(__DIR__.'/../views');
$twig = new Environment($loader, [
    'cache' => '../cache'
]);

echo $twig->render('index.twig', []);