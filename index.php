<?php
// index.php

// Include the Composer autoloader
require_once __DIR__ . '/vendor/autoload.php';

// Create a Twig loader and set the path to the templates
$loader = new \Twig\Loader\FilesystemLoader(__DIR__ . '/templates');

// Create a Twig environment and pass in the loader
$twig = new \Twig\Environment($loader);

// $function = new TwigFunction('url', function () { return 'MyURL'; });
// $twig -> addFunction($function);
// Render the template with some data
echo $twig->render('index.html.twig', ['name' => 'Home Page']);
?>