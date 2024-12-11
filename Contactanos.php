<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- fuente -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
    rel="stylesheet">
    <!-- Estilos personalizados -->
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="Efects-bottn-title.css">
</head>
<body>
    <?php include 'navbar.php'; ?>





    
  <!-- Título de la sección -->
  <h2 class="section-title">Formulario de Consulta</h2>
  
  <div class="main-container">
  <!-- Sección del formulario -->
  <section class="section_form">
    <form id="consultation-form" class="feed-form" action="#">
      <input required placeholder="Primer Nombre" type="text">
      <input name="email" required placeholder="Correo Electrónico" type="email">
      <input name="phone" required placeholder="Teléfono" type="tel">
      <textarea required placeholder="Mensaje"></textarea>
      <button class="btn">Enviar</button>
    </form>
  </section>

  <!-- Sección del código QR -->
  <section class="qr-section">
    <img class="qr-image" src="tu-codigo-qr.png" alt="Código QR">
    <p class="qr-text">Escanea este código para más información</p>
  </section>
</div>

















    <?php include 'whatsapp.php';?>
    <?php include 'footer.php';?>

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