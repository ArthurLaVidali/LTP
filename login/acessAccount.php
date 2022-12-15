 <?php
session_start();

$mycon = mysqli_connect('127.0.0.1', 'root', '', 'site');

 if (!$mycon) {
     die("Connection failed: " . mysqli_connect_error());
 }

$user_email = mysqli_real_escape_string($mycon, $_POST["email_login"]);
$user_password = mysqli_real_escape_string($mycon, md5($_POST["senha_login"]));

$sql = "SELECT nome FROM user WHERE email = '{$user_email}' AND senha = '{$user_password}'";

$result = mysqli_query($mycon, $sql);

$row = mysqli_fetch_assoc($result);


if(mysqli_num_rows($result) > 0) {
//    $row = mysqli_fetch_assoc($result);
//    while($row = mysqli_fetch_assoc($result)) {
//        $alguma = $row['nome'];
//    }
    $alguma = mysqli_fetch_assoc($result);
    $_SESSION['nome'] = $alguma['nome'];
    $_SESSION['user_email'] = $user_email;
    header('Location: panel.php');
    exit();
} else {
    $_SESSION['user_error'] = true;
    header('Location: reserva.php');
    exit();
}

?>

