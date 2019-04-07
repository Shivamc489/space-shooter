<?php
	  $conn = mysqli_connect('localhost', 'u723412637_evat', 'samasama', 'u723412637_evat');
      $ip=$_SERVER["REMOTE_ADDR"];
      if (mysqli_connect_error()) {

          echo "Failed to Connect". mysqli_connect_error();

          }
          $sql = "SELECT `name` FROM `users` WHERE `ip`='$ip';";
          $result = mysqli_query($conn,$sql);
          if(mysqli_num_rows($result)>0)
           {
             while($row = mysqli_fetch_assoc($result))
             {
               echo "".$row['username'].";";
             }
            }
?>