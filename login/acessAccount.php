 <?php
session_start();

$mycon = mysqli_connect('127.0.0.1', 'root', '', 'site') or die ('Não foi possível conectar');

$user_email = mysqli_real_escape_string($mycon, trim($_POST["email_login"]));
$user_password = mysqli_real_escape_string($mycon, trim(md5($_POST["senha_login"])));

$sql = "select name from user where email = '{$user_email}' and password = md5('{$user_password}')";

$result = mysqli_query($mycon, $sql);

$row = mysqli_fetch_assoc($result);

if($row == 1) {
    $user_db = mysqli_fetch_assoc($result);
    $_SESSION['user_name'] = $user_db['name'];
    header('Location: reserva.php');
    exit();
}


if($mycon->query($sql) === TRUE) {
    $_SESSION['user_create'] = true;
}

$mycon->close();

header('Location: reserva.php');
exit;

?>

