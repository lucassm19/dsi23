<?php
    // form_receber.php
    $usuario =  $_POST['usuario'] ?? false;
    $senha = $_POST['senha'] ?? false;
    // $_POST, mas precisa botar o method post no form 
    
    if ($usuario == 'lucas' and  $senha == '123'){
        // autenticação ok
        session_start();
        $_SESSION['usuario'] = $usuario;

        header('location:boasvindas.php');  
        die;
    } else{
        // autenticação falhou
        header('location:form.php?erro=1');
        die; 
    } 
    
    // meu bglh
    // if ($usuario == '' and  $senha == '') echo 'erro';
    // else echo 'acesso liberado'; 