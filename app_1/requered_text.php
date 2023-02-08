<?php

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$text = $_POST['textarea'];

if (!isset($name)) {
    echo 'Enter your name and email';
} else {
    echo "Hello : " . $_POST['name'] . '</br>';
    echo "You are email : " . $_POST['email'] . '</br>';
    echo "You are massege : " . $_POST['textarea'] . '</br>';
}
