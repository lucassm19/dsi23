<?php
    // form_receber.php
    require ('pdo.inc.php');

    // $senha_cripto = '$2y$11$BHckbKUxX8Z8WQGgzrFVZOjFtilRRE6Z3FNLep3iPVMUXiNDAajCu';

    $usuario =  $_POST['usuario'] ?? false;
    $senha = $_POST['senha'] ?? false;
    // $_POST, mas precisa botar o method post no form 
    
    //Prerara a consulta
    $sql = $pdo->prepare('SELECT * FROM usuarios WHERE username = ?');

    //Anexa a variável $usuario no parametro
    $sql->bindParam(1, $usuario, PDO::PARAM_STR);

    //Roda a consulta banco
    $sql->execute();
    
    //busca os dados no banco
    $dados = $sql->fetch(PDO::FETCH_ASSOC);

    if ($sql->rowCount() == 1 
        && 
        password_verify($senha, $dados['password'])){
        // autenticação ok
        session_start();
        $_SESSION['usuario'] = $usuario;
        $_SESSION['admin'] = $dados['admin'];

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