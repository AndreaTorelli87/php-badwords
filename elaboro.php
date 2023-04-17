<?php
   $frase = $_GET['frase'];
   $parola = $_GET['parola'];

   $risultato = str_replace($parola, "***", $frase)
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Bad Words</title>
</head>
<body>
   <h1><?php echo $frase ." è lunga: " . strlen($frase); ?></h1>
   <h2><?php echo $risultato; ?></h2>
</body>
</html>