<?php
require_once 'User.php';

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
    $id = $_GET['id'];

    $user = new User();
    $userData = $user->getUserById($id);
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="styles.css">
  <title>Mi Sitio Web</title>
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
          <a class="nav-link" href="pagina.php">Nuestro equipo</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="unetenos.php">ÚNETENOS</a>
        </li>
      </ul>
      
    </nav>
  </header>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h3>Editar Voluntario</h3>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="update_user.php">
                            <div class="form-group">
                                <label for="id">Identificacion:</label>
                                <input type="text" class="form-control" name="id" required value="<?php echo $userData['id']; ?>"><br>
                            </div>
                            <div class="form-group">
                                <label for="name">Nombre:</label>
                                <input type="text" value="<?php echo $userData['nombre']; ?>" class="form-control" name="name" required><br>
                            </div>
                            <div class="form-group">
                                <label for="lastname">Apellido:</label>
                                <input type="text" value="<?php echo $userData['apellido']; ?>" class="form-control" name="lastname" required><br>
                            </div>
                            <div class="form-group">
                                <label for="email">Correo electrónico:</label>
                                <input type="email" value="<?php echo $userData['correo']; ?>" class="form-control" name="email" required><br>
                            </div>
                            <div class="form-group">
                                <label for="cellphone">Celular:</label>
                                <input type="text" value="<?php echo $userData['celular']; ?>" class="form-control" name="cellphone" required><br>
                            </div>
                            <div class="form-group">
                                <label for="city">Ciudad:</label>
                                <input type="text" value="<?php echo $userData['pais']; ?>" class="form-control" name="city" required><br>
                            </div>
                            <div class="form-group">
                                <label for="country">País:</label>
                                <input type="text"  value="<?php echo $userData['ciudad']; ?>" class="form-control" name="country" required><br>
                            </div>   
                            <div class="form-group">
                                <label for="comment">Comentarios:</label>
                                <input type="text" value="<?php echo $userData['comentario']; ?>" class="form-control" name="comment" required><br>
                            </div>                        
                            <button type="submit" class="btn btn-primary" value="Actualizar">Actualizar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
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