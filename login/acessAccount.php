 <?php
session_start();

$mycon = mysqli_connect('127.0.0.1', 'root', '', 'site') or die ('Não foi possível conectar');

$user_email = mysqli_real_escape_string($mycon, trim($_POST["email_login"]));
$user_password = mysqli_real_escape_string($mycon, trim(md5($_POST["senha_login"])));

$sql = "select nome from user where email = '{$user_email}' and password = md5('{$user_password}')";

$result = mysqli_query($mycon, $sql);

$row = mysqli_fetch_assoc($result);

if($row == 1) {
    $user_db = mysqli_fetch_assoc($result);
    $_SESSION['user_name'] = $user_db['name'];
    header('Location: panel.php');
    exit();
} else {
    $_SESSION['user_error'] = true;
    header('Location: reserva.php');
    exit();
}

?>

