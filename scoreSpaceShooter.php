<?php
    $servername = "localhost";
    $server_username = "u723412637_evat";
    $server_password = "samasama";
    $dbName = "u723412637_evat";

    $username = $_POST["usernamePost"];
    $score = $_POST["scorePost"];

    $conn = new mysqli($servername,$server_username,$server_password,$dbName);
    if(!$conn)
    {
        die("Connection Failed. ".mysqli_connect_error());
    }
    else
    echo "connected";
    $sql = "INSERT INTO `scoreSpaceShooter` (`username`, `scoreCount`) VALUES ('$username', '$score')";
    $res = mysqli_query($conn,$sql);

    if(!res)
    echo "Unknown error occurred";
    if(res==null)
    echo "res is null";
    else echo "Score Updated";
?>