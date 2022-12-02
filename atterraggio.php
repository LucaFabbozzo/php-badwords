<?php

 $pragrafo_corretto = str_replace($_GET['badword'], '***' ,$_GET['paragraph']);

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
  <p><?php echo $_GET['paragraph'] ?></p>
  <h3>Questo paragrafo è lungo <?php echo strlen($_GET['paragraph']) ?> </h3>
  <h2>Paragrafo corretto</h2>
  <p><?php echo $pragrafo_corretto ?></p>
  <h3>Questo paragrafo è lungo <?php echo strlen($pragrafo_corretto) ?> </h3>
</div>
  
</body>
</html>