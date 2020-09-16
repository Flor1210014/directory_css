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
            <h1>Coordinación de ingeniería en computación</h1>
        </div>
    </div>
    <section>
      <div class="container">
        <div class="card center">
          <h3>Coordinación de ingeniería en computación</h3>
          Dr. Marcelo Romero Huertas <br>
          COORDINADOR DE INGENIERÍA EN COMPUTACIÓN <br>
          <h3>Misión Ingeniería en Computación</h3>
            Preservar, trasmitir y extender el conocimiento científico y tecnológico en el área de ingeniería en computación 
            <br> con conciencia humanística, a través de planes y programas de estudio pertinentes y de calidad, 
            <br> que contribuyan a la formación de ingenieros en computación en cuatro líneas de acentuación (Administración 
            <br> de proyectos informáticos, Interacción Hombre-Máquina, Redes y comunicaciones y Desarrollo de software de
            <br> aplicación), que atiendan las necesidades sociales y participen en la solución de la problemática local, estatal y
            <br> nacional que favorezcan al desarrollo sustentable para contribuir al bienestar económico y social de México.
        </div>
    </div>
    </section>
    <footer>  
      &copy; <?php echo " ".date("F j, Y"); ?>
    </footer>
</body>
</html>