<?php 
session_start()

 ?>
<!DOCTYPE html>
<html>
<head>
  <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
  <title>Busterlinks</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="sweet.css/">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.bundle.min.css">
<style type="text/css">
 body {

   background:url("ra.jpg");
   color:#ffffff;
  }


.styleWithBackground{
  background:url(ca.jpg)no-repeat center center fixed;
-webkit-background-size:cover;
-moz-background-size:cover;
-o-background-size:cover;
background-size:cover;

}
  


  #yo {position:absolute;
       top:200px;
       left:40%;}
</style>

</head>
<body>

<nav class="navbar navbar-dark bg-dark">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
 <a class="navbar-brand" href="#"><img src="favicon-96x96.png"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="movies.php">Movies</a>
      </li>
          <li class="nav-item">
        <a class="nav-link" href="design-tutorial2.php">Tv-show</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="apps.php">Apps</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="game.php">Games</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link disabled" href="help.php">Help</a>
      </li>
    </ul>
    
  </div>
</nav>
</nav>
<div id="yo">
  <div class="container">
  <br><br><br>
<h4 class="diplay-4">SIGN UP</h4>
  	<form action="signup.php" method="POST">
  <div class="form-group">
    <label>Username</label>
    <input type="text" aria-describedby="Username" name="uid" placeholder="Username">

  </div>
  <div class="form-group">
    <label>Password</label>
    <input type="password" aria-describedby="Password" name="pwd" placeholder="Password">
  </div>
  
  <button type="submit" class="btn btn-primary">Sign Up</button>
</form>
<p class="mt-5 mb-3 text-muted text-center">&copy; 2018-2019</p></div></div>
 <hr class="my-4"></div></div>
 <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-123340192-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-123340192-1');
</script>

</body>
</html>
