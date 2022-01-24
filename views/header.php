<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  
  <link rel="stylesheet" href="./assets/estilo.css">
  <title>Pizzaria</title>
</head>

<body>

  <nav class="navbar-fluid navbar-light bg-light">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-sm-2 col-md-2 text-center">
            <a class="navbar-brand" href="index.php">
              Pizzaria
            </a>
        </div>
        <div class="col-sm-2 col-md-2 text-center">
            <a class="navbar-brand" href="login.php">
              Login
            </a>
        </div>
        <?php if(isset($_GET['logado']) && $_GET['logado'] == "logado"){?>  
          <div class="col-sm-2 col-md-2 text-center">
            <a class="navbar-brand" href="logoff.php">
              Logoff
            </a>
          </div>
          <?php } ?>
      </div>

    </div>
  </nav>