 <?php
session_start();

$mycon = mysqli_connect('127.0.0.1', 'root', '', 'site') or die ('Não foi possível conectar');

$user_name = mysqli_real_escape_string($mycon, trim($_POST["nome_cad"]));
$user_email = mysqli_real_escape_string($mycon, trim($_POST["email_cad"]));
$user_password = mysqli_real_escape_string($mycon, trim(md5($_POST["senha_cad"])));

$sql = "select count(*) as total from user where email = '$user_email'";
$result = mysqli_query($mycon, $sql);

$row = mysqli_fetch_assoc($result);

if($row['total'] == 1) {
    $_SESSION['user_existed'] = true;
    header('Location: reserva.php');
    exit;
}
$sql = "INSERT INTO user (email, senha, nome, data_cadastro) VALUES ('$user_email', '$user_password', '$user_name', NOW())";


if($mycon->query($sql) === TRUE) {

    $message = "
    <html>
    <head>
    <title>HTML email</title>
    </head>
    <body style='font-family: Arial, Helvetica, sans-serif;'>
    <h1><td>Olá $user_name </td></h1><br>
    <h3>Seu cadastro foi realizado com sucesso:</h3><br>
    <a href='http://localhost/LTP/login/reserva.php#paralogin'>Realizar login.</a>
    </body>
    </html>
    ";

    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    $headers .= 'From: <swlobr@gmail.com>' . "\r\n";
    $headers .= 'Cc: joao.victor@estudante.ifgoiano.edu.br' . "\r\n";

    mail($user_email,"Cadastro Realizado",$message,$headers);

    $_SESSION['user_create'] = true;
}

$mycon->close();

header('Location: reserva.php');
exit;

?>

