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
    $_SESSION['user_create'] = true;
}

$mycon->close();

header('Location: reserva.php');
exit;

?>

