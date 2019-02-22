
<!DOCTYPE html>
<html>
<head>
  <link href="favicon-16x16.png" rel="icon" sizes="16x16" type="image/png">
  <title>Busterlinks</title>
  <meta charset="utf-8">
  <meta content="IE=edge" http-equiv="X-UA-Compatible">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="sweet.css/" rel="stylesheet" type="text/css">
  <link href="assets/css/bootstrap.bundle.min.css" rel="stylesheet" type="text/css">
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
    
#la {
position:absolute;
     top:3900px;
     left:75%;

}

  </style>
</head>
<body>
  <nav class="navbar navbar-dark bg-dark">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="#"><img src="favicon-96x96.png"></a> <button aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler" data-target="#navbarSupportedContent" data-toggle="collapse" type="button"><span class="navbar-toggler-icon"></span></button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="movies.php">Movies</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="tv.php">Tv-show</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="apps.php">Apps</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="game.php">Games</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="help.php">Help</a>
          </li>
        </ul>
      </div>
    </nav>
  </nav>
  <div class="container">
    <br>
    <br>
    <br>
    
<?php 
$connection = new mysqli("localhost", "root", "", "ilink");
if(!$connection){
 die("Connection failed: ".mysqli_connect_error());

}
$sId = $_REQUEST['showId'];
// if(!$isset($sId)){
//   //error let it go back
// }
$sql = "SELECT * FROM movies_episode WHERE season_id=$sId ORDER BY title ASC";
if (!$result = $connection->query($sql)) {
 die('Their was an error running query
  ['.$connection->error .']');
}

$rows = $result->num_rows;
if ($rows >0) {
$cols = 4;
$counter = 1;
$nbsp = $cols - ($rows % $cols);
$container_class = 'container-fluid';
$row_class ='row';
$col_class = 'col-md-3';
echo '<div class="'.$container_class.'">';
while ($item = $result->fetch_array()) {
  if (($counter % $cols)==1) {
echo '<div class="'.$row_class.'">';}
$images ="tv/".$item['images'];
   echo '<div class="'.$col_class.'"><img height="268px" width="182px"src="'.$images.'" alt="'.$item['title'].'"/><br><p>'.$item['title'].'<br><a href="'.$item['download_link'].'">Download Torrent</a></div>';
  if (($counter % $cols) ==0) {
    echo '</div>';
      }
      $counter++;
}
$result->free();
if ($nbsp > 0) {
 for ($i=0; $i < $nbsp ; $i++) { 
   echo '<div class="'.$col_class.'">&nbsp;</div>';
 }
 echo '</div>';
}
 echo '</div>';
}

?>  
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
