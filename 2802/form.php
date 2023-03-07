<?php
  $erro = $_GET['erro'] ?? false;

  switch ($erro) {
    case 1:
      echo 'usuario ou senha invalidos';
      break;
    case 2:
      echo 'voce não esta autenticado';
      break;
  }
?>
<!DOCTYPE html>
<head>
  <meta charset="UTF-8" />
  <title>Verifica Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
  <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
  <div class="container" >
    <a class="links" id="paracadastro"></a>
    <a class="links" id="paralogin"></a>
     
    <div class="content">      
      <!--FORMULÁRIO DE LOGIN-->
      <div id="login">
        <form action="form_receber.php" method="post"> 
          <p> 
            <label for="usuario">Login</label>
            <input id="usuario" name="usuario" type="text" placeholder="ex: contato@gmail.com"/>
          </p>
           
          <p> 
            <label for="senha">Senha</label>
            <input id="senha" name="senha" type="password" placeholder="ex: senha" /> 
          </p>
          <p> 
            <input type="submit" value="login" /> 
          </p>
      </div>
    </div>
  </div>  
</body>
</html>