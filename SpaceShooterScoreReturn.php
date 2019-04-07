<?php
    $servername = "localhost";
    $server_username = "u723412637_evat";
    $server_password = "samasama";
    $dbName = "u723412637_evat";

    $s="";
    
    $conn = new mysqli($servername,$server_username,$server_password,$dbName);
    if(!$conn)
    {
        die("Connection Failed. ".mysqli_connect_error());
    }
    else
    
    $sql = "SELECT `username`,`scoreCount` FROM `scoreSpaceShooter`   ORDER BY `scoreCount` DESC;";

    $result = mysqli_query($conn ,$sql);
    
    if(mysqli_num_rows($result)>0)
    {
        while($row = mysqli_fetch_assoc($result))
        {
            echo "".$row['username'].";".$row['scoreCount'].";";
            
            
        }
    }
    
?>