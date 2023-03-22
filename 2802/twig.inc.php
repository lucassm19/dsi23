<?php
    require('./vendor/autoload.php');
    $loader = new \Twig\Loader\FilesystemLoader('views');

    $twig = new \Twig\Environment($loader);

    // testar twig
    // echo $twig->render('_base.html');
