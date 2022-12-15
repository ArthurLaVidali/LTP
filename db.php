<html>
<head><title>Db Check Connection</title></head>
<body>
<h1>

    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "user";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname, 3306);
    // Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "INSERT INTO user (NAME, Email, PASSWORD)
    VALUES ('Pedro Paulo', 'ppaulo2003.ppsr@gmail.com', 'PASSWORD')";

//echo  $sql;

//if ($conn->query($sql) === TRUE) {
//    echo "New record created successfully";
//} else {
//    echo "Error: " . $sql . "<br>" . $conn->error;
//}

$conn->close();
?>
</h1>
</body>
</html>
