
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
#q{
 position:absolute;
     top:37px;
     left:220%;
}
#e{
 position:absolute;
     top:37px;
     left:180%;
}
  </style>
</head>
<body>
  <nav class="navbar navbar-dark bg-dark">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="#"><img src="favicon-96x96.png"></a> <button aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler" data-target="#navbarSupportedContent" data-toggle="collapse" type="button"><span class="navbar-toggler-icon"></span></button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Home </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="movies.php">Movies</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="tv.php">Tv-show</a>
          </li>
          <li class="nav-item active">
                      <a class="nav-link" href="apps.php">Apps <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="game.php">Games</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="help.php">Help</a>
          </li>
           <p>
          <div id="e"><form class="form-inline my-2 my-lg-0" action="apps.php" method="get">
      <input type="text"class="form-control mr-sm-2" name="term"  placeholder="Search"></div>
      <div id="q"><button  class="btn btn-secondary" type="submit">Search</button></div>
    </form>
    </p>
        </ul>
      </div>
    </nav>
  </nav>
  <div class="container">
    <br>
    <br>
    <br>
    <h4 class="display-4">APPLICATIONS</h4>
<?php 
$connection = new mysqli("localhost", "root", "", "busterlinks");
if(!$connection){
 die("Connection failed: ".mysqli_connect_error());

}
$sql = "SELECT * FROM apps ORDER BY title ASC";

if (isset($_GET['term'])) {
$searchWord = $_GET['term'];

$sql = "SELECT * FROM apps WHERE title LIKE  '%$searchWord%'";

}
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
  $images ="apps/".$item['images'];
   echo '<div class="'.$col_class.'"><img height="198px" width="182px"src="'.$images.'" alt="'.$item['title'].'"/><br><p>'.$item['title'].'<br><a href="'.$item['download_link'].'">Download Torrent</a></p></div>';
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
</body>
</html>
