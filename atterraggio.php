<?php

$paragrafo = $_GET['paragrafo'];
$parola = $_GET['parola']

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Atterraggio</title>
</head>
<body>
  <h1> 
    <?php 
    
     echo $paragrafo 
     echo 'Il paragrafo è lungo' . strlen($paragrafo) . ' caratteri'.
    
    
    ?>  
    
    <?php 
     str_replace($parola,'***', $paragrafo);
      echo $paragrafo 
      echo 'Il paragrafo è lungo' . strlen($paragrafo) . ' caratteri'.
    ?>

  </h1>
  
</body>
</html>