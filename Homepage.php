<?php
session_start();
 //LOG-OUT ke liye
          if (isset($_GET['logout'])) {
            session_destroy();
            unset($_SESSION['name']);
            header('location: Login.php');
          }
?>
<!DOCTYPE html>
<html lang="en-us">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Unity WebGL Player | DSW Project</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      <link href="https://fonts.googleapis.com/css?family=Niramit:300" rel="stylesheet">
    <link rel="shortcut icon" href="TemplateData/favicon.ico">
    <link rel="stylesheet" href="TemplateData/style.css">
    <link rel="stylesheet" href="homepage.css">
    
    <script src="TemplateData/UnityProgress.js"></script>  
    <script src="Build/UnityLoader.js"></script>
    <script>
      var gameInstance = UnityLoader.instantiate("gameContainer", "Build/Build.json", {onProgress: UnityProgress});
    </script>
  </head>
  <body>
   <div>
     
      <nav class="navbar navbar-expand bg-dark">
       <a class="navbar-brand" href="#">
         <img src="images.png" alt="logo" style="width: 40px; border-radius: 2px;">
       </a>

          <ul class='navbar-nav' style="color: azure">
           <li class="navbar-item" style="font-size: 18px; margin-top:8px; letter-spacing: 1px; word-spacing:2px;">Space Shooter</li>
           <li class="navbar-item" style="margin-left: 1150px;">
               <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="GET">
               
               <a href="Homepage.php?logout=1"><button class="navbar-link btn btn-white" style="width: 150px; background-color: cadetblue; letter-spacing: 1px; word-spacing:2px;" name="logout">Sign-out</button></a>
                </form>
           </li>
       </ul>
   </nav>
   <div class="account-details-bar">
         <div class="details">
            <h1 class="display-5">Your Account Details:</h1>
             <?php echo "Name: ".$_SESSION['name']."<br>E-mail:  ".$_SESSION['email']?>
         </div>
   </div>
     
   <div class="global-highscore">
         <div class="Highscores">
            <h1 class="display-5">Global High Scores:</h1>
             <?php include 'GlobalScore.php';
             
             ?>
         </div>
   </div>
      <div class="webgl-content">
      <div id="gameContainer" style="width: 960px; height: 600px; left: -30px; top: 50px;"></div>
      <div class="footer">
        <div class="webgl-logo"></div>
        <div class="fullscreen" onclick="gameInstance.SetFullscreen(1)"></div>
        <div class="title">DSW Project</div>
      </div>
    </div> 
   </div>
  </body>
</html>