<?php
    #usuario_adicionar.php
    require('pdo.inc.php');

    $username =  $_POST['username'] ?? false; 
    $password =  $_POST['password'] ?? false;
    $admin = isset($_POST['admin']);

    
    $sql = $pdo->prepare('INSERT INTO usuarios (username, password, active, admin) VALUES (:usr, :pass, "1" , :adm)');
    $sql->bindParam(':usr', $username);
    $sql->bindParam(':pass', $username);
    $sql->bindParam(':adm', $admin);

    $sql->execute();

    header('location:usuarios.php');
    die;