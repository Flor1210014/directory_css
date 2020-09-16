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
            <h1>Universidad Autónoma del Estado de México</h1>
            <h2>Facultad de ingeniería</h2>
            <h2>Ingeniría en computación</h2>
            <h2>Lenguaje de programación orientado a objetos</h2>
        </div>
    </div>
    <section>
      <div class="container">
        <div class="card">
          <h3>Miembros en microsoft teams</h3>
            <div class="table">
                <table>
                    <tr>
                      <th>Puesto</th>
                      <th>Nombre</th>
                      <th>Correo</th>
                    </tr>
                    <?php
                    $xml=simplexml_load_file("teamLPOO.xml") or die("Error: Cannot create object");
                    foreach($xml->children() as $member) {
                      echo "<tr><td>".$member->position . "</td>";
                      echo "<td>".$member->name . "</td>";
                      echo "<td>".$member->email .  "</td></tr>";
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>
    </section>
    <footer>  
      &copy; <?php echo " ".date("F j, Y"); ?>
    </footer>
</body>
</html>