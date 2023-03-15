<?php
    #boasvindas.php
    require('verifica_autenticacao.php');
    // require('css.php');

    echo 'seu login funfo';
    
    //criptografar senha
    // $senha_cripto = password_hash(123, PASSWORD_BCRYPT, ['cost' => 11,]);
    // echo  $senha_cripto;
    // die();
    ?>

<p>
    <?php
    if($_SESSION['admin']){
        ?>
        <a href="usuarios.php">usuarios</a>
        <?php
    }
    ?>
    <a href="logout.php">Sair</a>
</p>