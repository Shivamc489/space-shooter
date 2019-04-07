<?php include 'dswproject.php' ?>
<head>
  <title>Sign-Up</title>
  
  <meta name="viewport" content="width=device-width, initial-scale=1"> 
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Niramit:300" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="signupstyle.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>    
</head>

<body>
      
     

   <div class="show-login-btn"><i class="fas fa-sign-in-alt"></i> Show Sign-Up Form</div>
   
    <div class="login-box">
     
      <div class="hide-login-btn"><i class="fas fa-times-circle"></i></div>
         <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" class="login-form">
           <h1>Welcome , Sign-Up</h1>
               
<?php if ($msg != ''): ?>
  <div class="error" style="
    margin-right: 80px;
    margin-bottom: 30px;
    border: 2px solid grey;
    background-color: brown;
    border-radius: 5px;
    padding: 10px;
    font-size: 17px;
    color:azure;
    transition: 0.5s;">
    <?php echo $msg; ?>
  </div>
<?php endif; ?>
  
           <input class="formbox" type="text" placeholder="Username" name="name">
           <input class="formbox" type="Email" placeholder="Email" name="email">
           <input class="formbox" type="password" placeholder="Password" name="pwd">
           <button type="submit" class="sign-in-btn" name="submit">Sign-Up</button>
           <a href="Login.php" class="link3">Already have an account? Just Sign-In</a>
        </form>

    </div>
    

<script>
    $(document).ready(function(){
    $(".hide-login-btn").click(function(){
        $(".login-box").toggleClass("show");
    });
        
    $(".show-login-btn").click(function(){
        $(".login-box").toggleClass("show");
    });
});
    
</script>
</body>
