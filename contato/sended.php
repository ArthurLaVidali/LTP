<?php
$nome = $_POST['nome'];

$to = $_POST['email'];
//$to = "ppaulo2003.ppsr@gmail.com";
$subject = "contato - Site LTP";
$userMessage = $_POST['message'];

$message = "
<html>
<head>
<title>HTML email</title>
</head>
<body style='font-family: Arial, Helvetica, sans-serif;'>
<h1><td>Olá $nome </td></h1><br>
<h3>Recebemos sua mensagem:</h3><br>
<tr>
<td><p> $userMessage </p></td>
</tr><br>
<h3>Entraremos em contato em breve.</h3><br>
<a href='http://localhost/LTP/'>Visite nosso site.</a>
</body>
</html>
";

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

$headers .= 'From: <swlobr@gmail.com>' . "\r\n";
$headers .= 'Cc: joao.victor@estudante.ifgoiano.edu.br' . "\r\n";

mail($to,$subject,$message,$headers);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato</title>
</head>
<link rel="stylesheet" href="style.css">
<body>
<h1>Obrigado, <?php echo $nome ?></h1><br>
<h2>No prazo de 48h entraremos em contato com você.</h2><br>
<p>
    <a href="http://localhost/LTP/">Voltar para a paginha inicial.</a></p>
</body>
</html>




