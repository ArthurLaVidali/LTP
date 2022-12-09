<?php

if(isset($_POST['email']) && !empty($_POST['email'])){



$nome = addslashes($_POST [ 'nome' ]);
$email = addslashes($_POST [ 'email' ]);
$mensagem = addslashes($_POST[ 'mensagem']);



$to = "joao.godoi@estudante.ifgoiano.edu.br";
$subject = "contato - Site LTP";
$body = "Nome:  " .$nome. "\r\n".
              "Email:  ".$email. "\r\n".
              "Mensagem " .$mensagem;
$header = "From: joaovictornkz@gmail.com" . "r\n".
                    "Reply-To: ".$email."\e\n".
                    "X=Mailer:PHP/ " .phpversion();


if(mail($to, $subject, $body, $header)){

    echo("Email enviado com sucesso!");

}else{
    
    echo("O Email não pode ser enviado");
}

}
?>

