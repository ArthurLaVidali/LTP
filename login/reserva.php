<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<link rel="stylesheet" href="login.css">

<body>
    <div class="container" >
        <a class="links" id="paracadastro"></a>
        <a class="links" id="paralogin"></a>

        <?php
        if ($_SESSION['user_create']):
        ?>

        <div class="alt-box">
            <p>Cadastro efetuado!</p>
            <p>Realize o login <a href="#paralogin">Clique aqui</a></p>
        </div>

        <?php
        endif;
        unset($_SESSION['user_create'])
        ?>

<!--        #########################################-->

        <?php
        if ($_SESSION['user_existed']):
            ?>

            <div class="alert-box">
                <p>Email já está em uso!</p>
                <p>Tente usar outro email para realizar o cadastro.</p>
            </div>

        <?php
        endif;
        unset($_SESSION['user_existed'])
        ?>





        <div class="content">      
  
          <div id="login">
            <form method="post" action=""> 
              <h1>Login</h1> 
              <p> 
                <label for="email_login">Seu e-mail</label>
                <input id="email_login" name="email_login" required="required" type="text" placeholder="contato@SeuEmail"/>
              </p>
              
              <p> 
                <label for="senha_login">Sua senha</label>
                <input id="senha_login" name="senha_login" required="required" type="password" placeholder="123456" /> 
              </p>
              
              <p> 
                <input type="checkbox" name="manterlogado" id="manterlogado" value="" /> 
                <label for="manterlogado">Manter-me logado</label>
              </p>
              
              <p> 
                <input type="submit" value="Logar" /> 
              </p>
              
              <p class="link">
                Ainda não tem conta?
                <a href="#paracadastro">Cadastre-se</a>
              </p>
            </form>
          </div>


          #######################################


          <div id="cadastro">
            <form method="post" action="createAccount.php">
              <h1>Cadastro</h1> 
              
              <p> 
                <label for="nome_cad">Seu nome</label>
                <input id="nome_cad" name="nome_cad" required="required" type="text" placeholder="Seu Nome" />
              </p>
              
              <p> 
                <label for="email_cad">Seu e-mail</label>
                <input id="email_cad" name="email_cad" required="required" type="email" placeholder="contato@SeuEmail.com"/> 
              </p>
              
              <p> 
                <label for="senha_cad">Sua senha</label>
                <input id="senha_cad" name="senha_cad" required="required" type="password" placeholder="123446"/>
              </p>
              
              <p> 
                <input type="submit" value="Cadastrar"/> 
              </p>
              
              <p class="link">  
                Já tem conta?
                <a href="#paralogin"> Ir para Login </a>
              </p>
            </form>
          </div>
        </div>
      </div> 
    
</body>


</html>