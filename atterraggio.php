<?php

//  var_dump($_GET);

//se è stato settato il parametro  $paragraph = $_GET['paragraph']
var_dump(isset($_GET['paragraph']));

if (isset($_GET['paragraph'])) {
  $paragraph = $_GET['paragraph'];
} else {
  //altrimenti stringa vuota
  $paragraph = '';
}

//se è stato settato il parametro  $badword = $_GET['badword']
if (isset($_GET['badword'])) {
  $badword = $_GET['badword'];
} else {
  //altrimenti stringa vuota
  $badword = '';
}


if(isset($_GET['badword'])) {
   $pragrafo_corretto = str_replace($_GET['badword'], '***' ,$_GET['paragraph']);
} else {
  $pragrafo_corretto = '';
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <title>Atterraggio</title>
</head>
<body>
  
<div class="container my-5">
  <h1>Badwords</h1>
  <h2>Paragrafo originale</h2>
  <p><?php echo $paragraph ?></p>
  <h3>Questo paragrafo è lungo <?php echo strlen($paragraph) ?> </h3>
  <h2>Paragrafo corretto</h2>
  <p><?php echo $pragrafo_corretto ?></p>
  <h3>Questo paragrafo è lungo <?php echo strlen($pragrafo_corretto) ?> </h3>
</div>
  
</body>
</html>