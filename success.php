<?php
/* Displays all error messages */
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Success</title>
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
  background:url(ra.jpg)no-repeat center center fixed;
-webkit-background-size:cover;
-moz-background-size:cover;
-o-background-size:cover;
background-size:cover;

}
  
p {font-family:comic sans;
    font-weight:bold;
    font-size:25px;}
  #yo{
    position:absolute;
    top:37px;
    left:210%;
  }
   #qu{
position:absolute;
top:1000px;
left:90%;
}
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
        <a class="nav-link" href="tv,php">Tv-show</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="link.php">Apps</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="game.php">Games</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link " href="help.php">Help</a>
      </li>
    </ul>

</div></nav></nav>
</head>
<body>
  <div class="container">

<br><br>
<br>
          <h1>Welcome</h1>
          <p>You are logged in</p>
          
                    
          <a href="logout.php"><button type="button" class="btn btn-dark" name="logout"/>Log Out</button></a>
          <a href="index.php"><button type="button" class="btn btn-dark" name="Home"/>HOME</button></a>
    </div>
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
