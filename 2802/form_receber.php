<?php
    // form_receber.php
    
    $senha_cripto = '$2y$11$BHckbKUxX8Z8WQGgzrFVZOjFtilRRE6Z3FNLep3iPVMUXiNDAajCu';

    $usuario =  $_POST['usuario'] ?? false;
    $senha = $_POST['senha'] ?? false;
    // $_POST, mas precisa botar o method post no form 
    
    if ($usuario == 'lucas' and  password_verify($senha, $senha_cripto)){
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