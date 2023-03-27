<?php include "./logic.php"; ?>
<?php include "./deleteCookies.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link rel="stylesheet" href="./main.css">
  <title>Pirkinių sąrašas</title>
</head>

<body class="main">

  <!-- <h1>Pirkinių sąrašas</h1>

    
<table class="table table-striped">
    
  <tr>
    <th>PIRKINYS</th>
    <th>KATEGORIJA</th>
  </tr>
  
  <?php for ($i = 0; $i < count($_SESSION['shop']); $i++) { ?>
    
    <tr>
      
    <td><?= $_SESSION['shop'][$i]['item'] ?></td>
    <td><?= $_SESSION['shop'][$i]['category'] ?></td>
  </tr>

  
  <?php } ?> -->
  </table>

  <body class="container">
    <div class="row container ">
      <div class="row">
        <div class="col-4 darzoves p-3 mb-2 bg-success text-white ">
          <h4 class="DV">Daržovės ir vaisiai</h4>
          <?php include "./darzoves.php"; ?>
        </div>

        <div class="col-4 pienas p-3 mb-2 bg-success text-white">
          <h4 class="p">Pieno gaminiai</h4>
          <?php include "./pienas.php"; ?>
        </div>

        <div class="col-4 duona p-3 mb-2 bg-success text-white">
          <h4>Duonos gaminiai</h4>
          <?php include "./duona.php"; ?>
        </div>

      </div>

      <div class="row">

        <div class="col-4 mesa p-3 mb-2 bg-success text-white">
          <h4>Mėsa ir žuvis</h4>
          <?php include "./mesa.php"; ?>

        </div>

        <div class="col-4 addProduct bg-danger ">
          <?php include "./addProduct.php"; ?>
        </div>


        <div class="col-4 bakaleja p-3 mb-2 bg-success text-white">
          <h4>Bakalėja</h4>
          <?php include "./bakaleja.php"; ?>
        </div>
      </div>
      <div class="row">
        <div class="col-4 saldyti p-3 mb-2 bg-success text-white">
          <h4>Šaldyti gaminiai</h4>
          <?php include "./saldyti.php"; ?>
        </div>
        <div class="col-4 gerimai p-3 mb-2 bg-success text-white">
          <h4>Gėrimai</h4>
          <?php include "./gerimai.php"; ?>
        </div>
        <div class="col-4 kita p-3 mb-2 bg-success text-white">
          <h4>Kita</h4>
          <?php include "./kita.php"; ?>
        </div>
      </div>
    </div>

    
  </body>
  <a href="delete_cookie">Ddelete cookies</a>


</body>

</html>