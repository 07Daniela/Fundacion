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
          <a class="nav-link" href="#">Únetenos</a>
        </li>
      </ul>
      
    </nav>
  </header>
  <div class="container mt-5">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h2>¡Únete a nuestra Fundación!</h2>
            </div>
            <div class="card-body">
                <p>Estimado amigo,</p>
                <p>Te extendemos una cálida invitación para unirte a nuestra fundación y ser parte de nuestros esfuerzos para hacer una diferencia en la comunidad. Valoramos tu compromiso y dedicación para lograr un cambio positivo.</p>
                <p>
            Como miembro de nuestra fundación, tendrá la oportunidad de:
            </p>
            <ul>
                <li>Trabajar con un equipo de personas apasionadas por el mismo tema que usted.</li>
                <li>Hacer una diferencia real en la vida de los demás.</li>
                <li>Desarrollar sus habilidades y conocimientos.</li>
                <li>Formar parte de una comunidad de personas que están comprometidas a hacer el bien en el mundo.</li>
            </ul>
            <p>
                Si está interesado en unirse a nuestro equipo, le invitamos a completar el formulario. 
            </p>
            </div>
        </div>
    </div>
    
  
  <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h3>ÚNETENOS</h3>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="insert_user.php">
                            <div class="form-group">
                                <label for="id">Identificacion:</label>
                                <input type="text" class="form-control" name="id" required><br>
                            </div>
                            <div class="form-group">
                                <label for="name">Nombre:</label>
                                <input type="text" class="form-control" name="name" required><br>
                            </div>
                            <div class="form-group">
                                <label for="lastname">Apellido:</label>
                                <input type="text" class="form-control" name="lastname" required><br>
                            </div>
                            <div class="form-group">
                                <label for="email">Correo electrónico:</label>
                                <input type="email" class="form-control" name="email" required><br>
                            </div>
                            <div class="form-group">
                                <label for="cellphone">Celular:</label>
                                <input type="text" class="form-control" name="cellphone" required><br>
                            </div>
                            <div class="form-group">
                                <label for="city">Ciudad:</label>
                                <input type="text" class="form-control" name="city" required><br>
                            </div>
                            <div class="form-group">
                                <label for="country">País:</label>
                                <input type="text" class="form-control" name="country" required><br>
                            </div>   
                            <div class="form-group">
                                <label for="comment">Comentarios:</label>
                                <input type="text" class="form-control" name="comment" required><br>
                            </div>                        
                            <button type="submit" class="btn btn-primary" value="Registrar">Registrar</button>
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