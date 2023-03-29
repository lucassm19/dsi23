<?php
    #usuario_adicionar.php
    require('pdo.inc.php');
    require('models/Model.php');
    require('models/Usuario.php');
    require ('twig.inc.php');
    
    $username =  $_POST['username'] ?? false; 
    $password =  $_POST['password'] ?? false;
    $admin = isset($_POST['admin']);

    if (!$username || !$password) {
        header('location:usuarios.php?erro=1');
        die;
    }

    $password = password_hash($password,PASSWORD_BCRYPT);

    $usuario = new Usuario();
    $usuario->create([
        'username'=> $username,
        'password'=>$password,
        'admin'=>$admin,
        'active'=> 1,
    ]);

    header('location:usuarios.php');
    die;

    
    // $sql = $pdo->prepare('INSERT INTO usuarios (username, password, active, admin) VALUES (:usr, :pass, "1" , :adm)');
    // $sql->bindParam(':usr', $username);
    // $sql->bindParam(':pass', $username);
    // $sql->bindParam(':adm', $admin);

    // $sql->execute();