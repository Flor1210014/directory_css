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
            <h1>Lenguaje de programación orientado a objetos</h1>
        </div>
    </div>
    <section>
      <div class="container">
        <div class="card center">
          <h3>LPOO</h3>
           <h4>Profesor: </h4>
           Ing. José Anzaldo Bibiano <br>
           <h4>Objetivo de la materia</h4>
                Familiarizar al alumno con el lenguaje de programación orientado
           <br> a objetos, los patrones de diseño en las que se sustentan
           <br> alunas clases, en interfaces de su API, así como una plataforma
           <br> de desarrollo, que le permita la aplicación de ésta para el
           <br> desarrollo de software de forma eficiente y efectiva.
        </div>
    </div>
    </section>
    <footer>  
      &copy; <?php echo " ".date("F j, Y"); ?>
    </footer>
</body>
</html>