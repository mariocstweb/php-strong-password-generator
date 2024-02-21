<?php
require_once __DIR__ .'./includes/functions.php';
$password_length = $_GET['password'] ?? '';

if (isset($password_length) && is_numeric($password_length) && $password_length > 0) {
  // Invoco la funziona se il valore del GET non è vuoto e la memorizzo in una variabile
  $random_password = generate_random_password($password_length);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- FontAwesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <!-- CSS -->
  <link rel="stylesheet" href="style.css">
  <title>Strong Password Generator</title>
</head>
<body>
  <header class="text-center mb-5 text-white">
    <h1>Strong Password Generator</h1>
    <h2>Genera una password sicura <i class="fa-solid fa-lock"></i></h2>
  </header>
  <main>
    <div class="container p-3">
      <h5 class="text-center mb-3">Scrivi la lunghezza della password da generare.</h5>
      <form action=""  method="GET">
        <div class="mb-3 d-flex justify-content-center align-items-center gap-3">
          <label for="exampleInputEmail1" class="form-label">Lunghezza password:</label>
          <input type="number" class="form-control form-width" name="password">
          <button type="submit" class="btn btn-primary">Genera</button>
        </div>
      </form>
      <?php if(isset($random_password)){
        echo $random_password;
      }
       ?>
    </div>
  </main>
</body>
</html>