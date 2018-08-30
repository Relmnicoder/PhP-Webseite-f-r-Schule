<?php
    // SQL config
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "database 1";


    // parse json to array
    $input = json_decode(file_get_contents('php://input'),true);

    try {
    $conn = new mysqli ($servername, $username, $password, $dbname);
        // sql string is bullshit, build string the propper way
        $sql = "INSERT INTO emails (email, name) VALUES ('" . $input['mail'] . "','" . $input['name'] . "')";

        // if ($conn->query($sql) !== null) {
            // header("HTTP/1.1 201 Created");
        // } else {
            header("HTTP/1.1 500 ServerError");
        // }
        $conn->close();
    }catch(Exception $e){   
        header("HTTP/1.1 404 Not Found")
    }
?>