<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Tienda de ropa PabloAlicie - Estilo y calidad de alta moda">
  <meta name="keywords" content="ropa, moda, tienda, PabloAlicie, lujo, elegante">
  <meta name="author" content="PabloAlicie">
  <title>PabloAlicie - Tienda de Ropa</title>

  <!-- fuente -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!-- Estilos personalizados -->
  <link rel="stylesheet" href="styles.css">
  <link rel="stylesheet" href="Efects-bottn-title.css">
</head>

<body>
  <!-- navbar -->
  <?php include 'navbar.php'; ?>




  <!-- Banner -->
  <div class="contenedor-bienvenida">
    <!-- Objeto animado -->
    <div class="objeto-animado">
      <div class="objeto-animado-hijo"></div>
    </div>

    <!-- Texto de bienvenida -->
    <div class="texto-bienvenida">
      <h1>¡Bienvenidos!</h1>
      <p>Explora nuestra plataforma y descubre todas las posibilidades que hemos creado para ti. Estamos encantados de
        tenerte aquí.</p>
    </div>
  </div>


  <!-- Servicios -->

  <div class="container-titulos">
    <h1>Servicios</h1>
  </div>


  <div class="card-container">
    <div class="card">
      <div class="card-content">
        <img src="assents/IMG/products/1.jpg" alt="Imagen 1" class="card-image">
        <p class="card-title">Card hover effect</p>
        <p class="card-para">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
      </div>
    </div>
    <div class="card">
      <div class="card-content">
        <img src="assents/Img/products/2.webp" alt="Imagen 2" class="card-image">
        <p class="card-title">Another card</p>
        <p class="card-para">Aliquam eget sapien sapien. Curabitur in metus urna.</p>
      </div>
    </div>
    <div class="card">
      <div class="card-content">
        <img src="assents/Img/products/3.jpg" alt="Imagen 3" class="card-image">
        <p class="card-title">Third card</p>
        <p class="card-para">Aenean in tellus sit amet ligula eleifend suscipit.</p>
      </div>
    </div>
  </div>

  <?php include 'footer.php'; ?>
  <?php include 'whatsapp.php'; ?>

  <!-- codigo de navbar -->
  <script type="text/javascript">
    const toggleMenu = () => {
      document.body.classList.toggle("open");
    };
  </script>

  <!-- Enlace a los scripts de Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

  <!-- Enlace a tu script personalizado -->
  <script src="script.js"></script>
</body>

</html>