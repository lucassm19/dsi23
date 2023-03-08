<?php
    #boasvindas.php
    require('verifica_autenticacao.php');
    
    echo 'seu login funfo';
    
    //criptografar senha
    // $senha_cripto = password_hash(123, PASSWORD_BCRYPT, ['cost' => 11,]);
    // echo  $senha_cripto;
    // die();
?>

<p>
    <a href="logout.php">Sair</a>
</p>