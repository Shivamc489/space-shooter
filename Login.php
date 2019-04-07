<?php
  include 'dswproject.php'
?>

<head>
  <title>Form</title>
  <meta name="viewport" content="width=device-width, initial-scale=1"> 
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Niramit:300" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link rel="stylesheet" href="loginstyle.css">

</head>

<body>
   <div class="show-login-btn"><i class="fas fa-sign-in-alt"></i> Show Sign-In Form</div>
    <div class="login-box">
      <div class="hide-login-btn"><i class="fas fa-times-circle"></i></div>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" class="login-form">
          
           <h1>Welcome , Sign-In</h1>
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
           <input class="formbox" type="text" name="name" placeholder="Username">
           <input class="formbox" type="password" name="pwd" placeholder="Password">
           <button class="sign-in-btn" name="signin" >Sign-In</button>
           <a href="Sign-Up.php" class="link2">Don't have an account? Just Sign-Up</a>
        </form>

    </div>
</body>


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