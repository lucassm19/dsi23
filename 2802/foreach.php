<?php
    // foreach.php

    $var = [
        'eu',
        'tu',
        'nos',
    ];

    // foreach ($var as $valor) {
    //     echo "<p>{$valor}</p>"; 
    // }

    $pessoa = [
        'nome' => 'Fulano',
        'idade' => 85,
        'cidade' => 'Bento',
    ];

    // echo $pessoa['idade'];

    foreach ($pessoa as $indice => $valor) {
        echo "<p><b>{$indice}</b> {$valor}</p>"; 
    }