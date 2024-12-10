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
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined"
      rel="stylesheet"
    />

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
          <p>Explora nuestra plataforma y descubre todas las posibilidades que hemos creado para ti. Estamos encantados de tenerte aquí.</p>
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
      

      
 <!-- footer -->
<footer class="footer">
    <div class="footer-container">
        <div class="footer-section about">
            <h3>Sobre Nosotros</h3>
            <p>Somos una marca de moda moderna que busca ofrecer las últimas tendencias con calidad premium. Únete a nuestra comunidad y encuentra tu estilo.</p>
        </div>
        <div class="footer-section links">
            <h3>Enlaces Rápidos</h3>
            <ul>
                <li><a href="#">Inicio</a></li>
                <li><a href="#">Colecciones</a></li>
                <li><a href="#">Ofertas</a></li>
                <li><a href="#">Tienda</a></li>
                <li><a href="#">Contáctanos</a></li>
            </ul>
        </div>
        <div class="footer-section contact">
            <h3>Contacto</h3>
            <p>Email: soporte@tienda.com</p>
            <p>Teléfono: +123 456 7890</p>
        </div>
    </div>

    <!-- Redes sociales -->
    <div class="footer-social">
        <h3>Síguenos</h3>
        <div class="social-buttons">
            <!-- Facebook -->
            <div class="child child-1">
                <button class="button btn-1" onclick="window.open('https://www.facebook.com', '_blank')">
                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512" fill="#3b5998">
                        <path d="M504 256C504 119 393 8 256 8 119 8 8 119 8 256c0 123.4 87.1 227.6 205.7 262.7V327.6h-61.9v-71.3h61.9v-53.2c0-62.4 36.8-97.7 94.1-97.7 27.2 0 55.8 5 55.8 5v61.6h-31.4c-30.9 0-41.2 19.2-41.2 39.2v47.3h69.3l-11.1 71.3h-58.2v191.1c118.6-35.2 205.7-139.3 205.7-262.7z"></path>
                    </svg>
                </button>
            </div>

            <!-- Nuevo Logo de X (Twitter) -->
            <div class="child child-2">
                <button class="button btn-2" onclick="window.open('https://twitter.com', '_blank')">
                    <svg width="20" height="20" viewBox="0 0 1200 1227" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M714.163 519.284L1160.89 0H1055.03L667.137 450.887L357.328 0H0L468.492 681.821L0 1226.37H105.866L515.491 750.218L842.672 1226.37H1200L714.137 519.284H714.163ZM569.165 687.828L521.697 619.934L144.011 79.6944H306.615L611.412 515.685L658.88 583.579L1055.08 1150.3H892.476L569.165 687.854V687.828Z" fill="white"/>
                    </svg>
                </button>
            </div>

            <!-- Instagram -->
            <div class="child child-2">
                <button class="button btn-2">
                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512" fill="#ff00ff">
                        <path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>
<!-- Logo de la empresa en el footer -->
<div class="footer-logo">
        <img src="logo.png" alt="Logo de la empresa" />
    </div>

    <div class="footer-bottom">
        <p>&copy; 2024 Tienda de Ropa. Todos los derechos reservados.</p>
    </div>
</footer>

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