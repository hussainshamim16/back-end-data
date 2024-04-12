<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST["name"];
    $password = $_POST["password"];

    echo "Name: " . $name . "<br>";
    echo "Password: " . $password;
}
?>
