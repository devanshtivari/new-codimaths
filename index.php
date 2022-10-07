<?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $db = "codimaths";

    $conn = mysqli_connect($server, $username, $password , $db);

    if($conn === false){
        echo
        '
            <h1>Cannot connect to the server</h1>
        ';
        die("Could not connect .".mysqli_connect_error());
    }

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $age = $_POST['age'];
    if(isset($_POST['submit-button'])){
    $query = "INSERT INTO student_data(Name , Email , Phone, Age) VALUES ('$name' , '$email' , '$phone' , '$age' )";


    if(mysqli_query($conn,$query)){
        echo
        '
            <script>
                window.location.href = "http://www.codimaths.com/";
            </script>
        ';
    }
    else{
        echo
        '
            <h1>Error in progressing data</h1>
        ';
    }
    }
    mysqli_close($conn);
