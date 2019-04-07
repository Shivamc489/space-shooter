<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
<?php
    
    session_start();

    $conn = mysqli_connect('localhost', 'u723412637_evat', 'samasama', 'u723412637_evat');
      

  $msg = '';
  $msgclass = '';

if (filter_has_var(INPUT_POST, 'submit')) {
 $name = trim($_POST['name']);
  $email = trim($_POST['email']);
  $pwd = trim($_POST['pwd']);

if (!empty($name) && !empty($pwd) && !empty($email)) {
        
        if (is_numeric($name)) {
            
          $msg = 'Username cannot include integers';
          }
        elseif (strlen($pwd) !=4 OR is_numeric($pwd)) {
          $msg = 'Password should be of 4 letters only';
        } 
        elseif (filter_var($email,FILTER_VALIDATE_EMAIL) === false) {
              
              $msg = 'Please Use a Valid Email';
        }
        else {

                      $sql = "SELECT * FROM users";

          $result = mysqli_query($conn,$sql);
          $num_rows = mysqli_num_rows($result);
          $i = 0;
          $c=0;

          while($row = mysqli_fetch_array($result)){
              
                if ($row['name'] == $name) {
                  $msg = "Username already exists.";
                  $msgclass = "alert-warning";  
                  $c=1;
                  break;
                }
                else{
                  $i++;
                }

          }
          if($c==0)
          {
               echo "Account Created2";
                $sql="INSERT INTO `users` VALUES ('$name','$pwd','$email');";
                $result = mysqli_query($conn,$sql);
              $msg = 'Data is Valid, Your Account has been created';
              $msgclass = 'alert-success';
              $_SESSION['name'] = $name;
              $_SESSION['email'] = $email;
              header('location: Homepage.php');
          }

        }
    }
        
            else{
              $msg = 'Please fill all the details';
                
            } 

}
          
//SIgn-In

            if (filter_has_var(INPUT_POST, 'signin')) {
              $name = trim($_POST['name']);
              $pwd = trim($_POST['pwd']);

            if (empty($name) && empty($pwd) ) {

                          $msg = 'Please fill all the details, Both Username and Password are required';
            }else{

              $sql = "SELECT * FROM users WHERE name = '$name' AND password = '$pwd' ";
              $result = mysqli_query($conn,$sql);

              if (mysqli_num_rows($result)==1) {

                      $_SESSION['name']= $name;
                      $_SESSION['email'] = $email;
                      header('location: Homepage.php');

                 }else{
                          $msg = 'Wrong Username-Password Combination';
                          
                 }
             
              }

            }



?>
