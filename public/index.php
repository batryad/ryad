<?php
require '../vendor/autoload.php';
$products = ['Hugo Strange','Deathstroke','Harvey Dent','Green Lantern','Jason Todd','Deadshot'];


$loader = new Twig\Loader\FilesystemLoader('../src/View');
$twig = new Twig\Environment($loader);
echo $twig->render('index.html.twig',[
    'products'=> $products
]);
