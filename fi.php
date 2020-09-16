<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w==" crossorigin="anonymous" />
    <link rel="stylesheet" href="styles.css"/>
    <title>Horario con css</title>
</head>
<body>
    <header id="menu">
        <div class="container">
          <nav>
            <a href="index.php">Inicio</a>
            <a href="fi.php">Datos FI</a>
            <a href="ico.php">Datos ICO</a>
            <a href="lpoo.php">LPOO</a>
            <a href="personal_inf.php">Datos personales</a>
          </nav>
        </div>
      </header>
      <div class="container">
        <div class="center">
            <h1>Facultad de ingeniería</h1>
        </div>
    </div>
    <section>
      <div class="container">
        <div class="card">
          <h3>Contacto</h3>
          Facultad de Ingeniería UAEM <br>
          Cerro de Coatepec S/N <br>
          Ciudad Universitaria C.P. 50100. <br>
          Toluca, Estado de México <br>
          Tels.:(722) 214 08 55 y 214 07 95 <br>

        </div>
    </div>
    </section>
    <footer>  
      &copy; <?php echo " ".date("F j, Y"); ?>
    </footer>
</body>
</html>