<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $text = $_POST['textarea'];

        $host = 'localhost';
        $name = 'root';
        $password = '';
        $db_name = 'test';

        //create connection

        $conn = new mysqli($host, $name, $password, $db_name);

        //check connection 
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error()) . '</br>';
        }
        echo "Connected successfully" . '</br>';
        // insert data


        $sql = "INSERT INTO users(name, email, pass, text) VALUE ('$name', '$email', '$password', '$text')";

        if ($conn->query($sql) === TRUE) {
            echo "New record created successfuly" . '</br>';
        } else {
            echo "Error : " . $sql . "<br>" . $conn->error;
        }
        ?>
    </div>
