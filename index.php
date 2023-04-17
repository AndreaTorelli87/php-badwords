<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Bad Words</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
   <link rel="stylesheet" href="style.css">
</head>
<body>
   <div class="container p-5 text-center">
      <h1 class="mb-4 display-1 fw-bold bg-warning p-4 d-inline-block rounded-5 text-danger">Bad Words</h1>
      <form action="elaboro.php" method="get" action="elaboro.php">
         <input type="text" name="frase" placeholder="Inserisci una frase" required>
         <input type="text" name="parola" placeholder="Parola vietata" required>
         <br />
         <button type="submit" class="btn btn-primary mt-4">Invia</button>
      </form>
   </div>
</body>
</html>