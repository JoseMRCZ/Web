<?php  
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "web";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if (!$conn) {
    die("Error de conexión: " . mysqli_connect_error());
}

$nombre = $_POST["uname"];
$pass = $_POST["psw"];

$query = mysqli_query($conn, "SELECT * FROM login WHERE usuario = '".$nombre."' and password = '".$pass. "'" );
$nr = mysqli_num_rows($query);

if ($nr == 1) {
    header("location: dashboard.html");
    exit();
} else if ($nr == 0) {
    echo '<script>';
    echo 'alert("No ingreso, usuario no existe");';
    echo 'window.location.href = "login.html";';
    echo '</script>';
}
?>
