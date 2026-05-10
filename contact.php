<?php

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

if(empty($name) || empty($email) || empty($message))
{
    echo "Please fill all fields";
}
else
{
    header("Location: thank-you.html");
}

?>