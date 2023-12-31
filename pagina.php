<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="styles.css"> 
  <title>Mi Sitio Web - Página 2</title>
</head>
<body>
  <header>
    <nav class="navbar navbar-expand navbar-dark bg-dark">
      <a class="navbar-brand" href="index.php">Inicio</a>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="servicios.php">Servicios</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Nuestro equipo</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="unetenos.php">Únetenos</a>
        </li>
      </ul>
    </nav>
  </header>

  <div class="container mt-4">
    <div class="row">
      <div class="col-md-4">
        <h5>Retiros saludables para la comunidad</h5>
        <img src="imagenes/RETIROS.jpg" width="300" height="150" img-fluid" alt="Imagen Sección 1">
        <p>Los retiros de salud son fines de semana dedicados a la salud mental, emocional y física. las sesiones de relajación que combinan varias técnicas efectivas como la terapia de relajación muscular progresiva de Jacobson, la respiración controlada, respiración yóguica, entre otras, técnicas de relajación, mindfulness y control respiratorio entre otras técnicas que disminuyen la ansiedad y proporcionan estados de relajación muy placenteros.</p>
      </div>
      <div class="col-md-4">
        <h2>Programa de Orientación Familiar</h2>
        <img src="imagenes/orientacion.jpg" width="300" height="150" img-fluid" alt="Imagen Sección 1">
        <p>Orientación a la familia sobre
          conductas de alto riesgo, presión social,
          Vigilancia sobre situaciones de alto
          riesgo. Prevención de recaídas, Manejo
          de situaciones, crisis y formas familiares
          de abordaje y acompañamiento
          </p>
      </div>
      <div class="col-md-4">
        <h2>Programa de liderazgo</h2>
        <img src="imagenes/vigilancia.jpg" width="300" height="150"  img-fluid" alt="Imagen Sección 1">
        <p>Al usuario se le ofrecerá un
          programa de liderazgo con el fin de
          reforzar detalles de su
          rehabilitación final según
          observaciones, actitudes y
          comportamientos finales.          
          </p>
      </div>
    </div>
  </div>
  
    <div class="container mt-5">
        <h2>Nuestros Voluntarios</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                <th>Identificacion</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Correo electrónico</th>
            <th>Celular</th>
            <th>Ciudad</th>
            <th>País</th>
            <th>Comentarios</th>
            <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
               <?php
                  require_once 'User.php';

                  $user = new User();
                  $user->listUsers();
                ?>
            </tbody>
        </table>
    </div>
  <footer class="bg-dark text-white mt-4">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <h4>Visítanos en:</h4>
          <p>Calle 64 B°54-07 sede Bogotá</p>
          <p>Carrera 1A Este No. 3A Sur – 32 sede Madrid Cundinamarca / Colombia</p>
          <p>e-mail: fundacionpropósitodevida@gmail.com</p>
        </div>
        <div class="col-md-4">
          <h4>Redes Sociales</h4>
          <ul>
            <li><a href="#"><img src="imagenes/instagram.png" class="img-fluid" alt="Imagen cuadro"></a></li>
            <li><a href="#"><img src="imagenes/youtube.png" class="img-fluid" alt="Imagen cuadro"></a></li>
            <li><a href="#"><img src="imagenes/tiktok.png" class="img-fluid" alt="Imagen cuadro"></a></li>
            <li><a href="#"><img src="imagenes/web.png" class="img-fluid" alt="Imagen cuadro"></a></li>
          </ul>
        </div>
        <div class="col-md-4">
          <h4>Buscanos como</h4>
          <ul>
            <li><a href="#">  @Fundapropositodvida</a></li>
            <li><a href="#">	Funda.propósitovida</a></li>
            <li><a href="#">	Funda.07proposito de vida</a></li>
            <li><a href="#">	linkr.bio/funda</a></li>
          </ul>
        </div>
      </div>
    </div>
  </footer>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>