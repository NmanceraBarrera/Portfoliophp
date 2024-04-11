<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Portfolio</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
      integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <header class="header" id="header">
      <div class="menu container">
        <img src="images/NMB.png" class="logo" alt="LOGO">
        <!-- <a href="#" class="logo">logo</a> -->
        <input type="checkbox" id="menu" />
        <label for="menu">
           
          <img src="images/4139555.png" class="menu-icono" alt="menu" />
        </label>
        <nav class="navbar">
          <ul>
            <li><a href="#header">Sobre Mi</a></li>
            <li><a href="#proyectos">Proyectos</a></li>
            <li><a href="#educacion">Educación</a></li>
            <li><a href="#contacto">Contacto</a></li>
          </ul>
        </nav>
      </div>

      <div class="header-content container">
        <div class="header-txt">
            <h2> Hola, soy </h1>
            <h1> Nicolas Mancera</h1>
            <h3>Desarrollador FullStack e Ingeniero Industrial</h3>
            <div class="data-content">
              <a href="https://github.com/NmanceraBarrera" class="redes" target="_blank"><i class="redes fa-brands fa-github"></i></a>
              <a href="https://www.linkedin.com/in/nicolas-mancera-barrera-706764295/" class="redes" target="_blank"><i class="redes fa-brands fa-linkedin"></i></a>
              <a style="margin-left: 60px" href="./images/CV Nicolas Mancera 2024.pdf" class="btn-1" download="CV Nicolas Mancera">Descargar CV</a>
            
            
        </div>

        </div>
        <div class="header-img">
            <img src="images/3d-business-young-man-at-work-desk-and-dog.png" alt="Imagen inicio">
        </div>
      </header>
      <div class="btn-arriba">
        <a href="#header"><i class="fa-solid fa-arrow-up"></i></a>
      </div>

    <section class="about container">
        <div class="about-img">
            <img class="about-foto" src="images/foto Nicolas.jpg" alt="">
        </div>
        <div class="about-txt">
            <h2>Sobre Mi</h2>
            <hr class="linea-division-corta"/>
            <p>"Soy un joven colombiano apasionado por el aprendizaje constante, especialmente en tecnología y programación. Me destaco en impulsar el crecimiento empresarial mediante la implementación de ideas innovadoras. Disfruto explorando nuevas tecnologías y aplicándolas en proyectos creativos. Además, encuentro equilibrio en mi vida a través de actividades como la lectura, el deporte y el tiempo con mi familia."</p>           
        </div>


    </section>

    <div class="btn-arriba">
        <a href="#header"><i class="fa-solid fa-arrow-up"></i></a>
      </div>

    <main class="educacion" id="educacion">

        <h2>Educación</h2>
        <div class="educacion-content container">
            <div class="educacion-1">
                <i class="fa fa-sharp fa-solid fa-chalkboard" aria-hidden="true"></i>
                <h3>Desarrollo FullStack Henry</h3>
                <p> +800 horas</p>
            </div>
            <div class="educacion-1">
                <i class="fa fa-sharp fa-solid fa-graduation-cap" aria-hidden="true"></i>
                <h3>Ingenieria Industrial</h3>
                <p>Carrera Profesional</p>
            </div>
            <div class="educacion-1">
                <i class="fa fa-sharp fa-solid fa-chalkboard" aria-hidden="true"></i>
                <h3>Otros Cursos</h3>
                <p>TypeScript, MySQL, VB6, PHP</p>
            </div>
        </div>
       </main>

       

       <section class="proyectos" id="proyectos">
       <div class="btn-arriba">
        <a href="#header"><i class="fa-solid fa-arrow-up"></i></a>
      </div>
       <h2>Proyectos</h2>

       <div class="proyectos-content container">
       <div class="proyectos-1">
  
         <h3>SEFUE </h3>
  <img src="./images/p3.png" alt="SEFUE" onclick="showProjectInfo( 'Desarrollé una aplicación integral de envíos nacionales que facilitaba la interacción entre conductores y emisores de paquetes. La plataforma integraba tecnologías avanzadas de georreferenciación utilizando la API de Google para la localización precisa, cálculo de rutas optimizadas y selección de direcciones. Además, implementé funcionalidades de rating para evaluar la calidad del servicio, un chat interactivo para una comunicación directa y eficiente, y sistemas de autenticación y envío de mensajes seguros mediante códigos de confirmación.<br> • Utilicé tecnologías de vanguardia en el desarrollo del frontend para proporcionar una experiencia de usuario fluida y receptiva.<br> • Implementé el manejo eficiente de bases de datos no relacionales con Firebase para garantizar un almacenamiento seguro y escalable de la información.<br> • Colaboré en la integración de Firebase para la gestión de la autenticación de usuarios y el envío seguro de mensajes con códigos de confirmación. <br>• Contribuí al desarrollo de algoritmos avanzados para el cálculo de rutas y la geolocalización utilizando Google Maps API.<br> • Participé en el diseño e implementación de sistemas de chat interactivo y funcionalidades de rating para mejorar la comunicación y la retroalimentación entre usuarios.<br><br> <strong>Tecnologias utilizadas:</strong><br> Front: Dart - Flutter <br> Back: Dart - Flutter <br>Base de datos: Firebase. <br>(Al ser un proyecto de una empresa real no tengo permitido compartir el repositorio privado)')">
  <a  >>Ver más<</a>
</div>
<div class="proyectos-1">
    <h3>Charlie</h3>
    <img src="./images/p1.png" alt="Charlie" onclick="showProjectInfo('Participe en un equipo de trabajo, encargado del desarrollo de un Marketplace de comercios que permite a cada comercio tener franquicias con productos independientes, y recibir pagos a través de Mercado Pago. Los consumidores pueden iniciar sesión con Google/Facebook o Email, y pueden ver los productos de cada franquicia mediante un QR que redirige a la interfaz correspondiente. Se permite realizar reembolsos de compras, y la conexión de Mercado Pago de la franquicia es segura a través de una conexión privada. <br> Cada franquicia puede acceder a su historial de ventas, y cada cliente puede acceder a su historial de compras.<br> Después de realizar una compra, se genera un QR de único uso para retirar el pedido. Además, fortalecí mi habilidad de trabajo en equipo para planificar y ejecutar las tareas de desarrollo de manera eficiente y efectiva.<br> <strong>Funcionalidades Destacadas:</strong><br>  - Autenticación de terceros. <br> - Cada Ecommerce optimizado para Mobile<br> - Proceso de pago seguro utilizando Mercado Pago.<br> - Funcionalidad de reembolsos de compras.<br> - Generación de QR para administración de pedidos.<br> <strong> TECNOLOGÍAS: </strong><br> <br> <strong>- Frontend </strong> : React, Redux, JavaScript, HTML, CSS. <br> <strong> - Backend: </strong> Sequelize, PostgreSQL, Express, Node.js. <br> <strong> - Herramientas: </strong> Render, Auth0, Mercado Pago, Multer, GitHub/GitFlow')">
    <a href="https://www.youtube.com/watch?v=GCPEP9U2Oe4" >>Ver más<</a>
  </div>
  <div class="proyectos-1">
    <h3>Dogs PI</h3>
    <img src="./images/dog.jpeg" alt="Rick and Morty" onclick="showProjectInfo('🌐 <strong>Proyecto Académico: </strong> <br> Participe en un proyecto SPA capaz de obtener datos de manera fluida desde una API externa. <br> <strong>✨ Logros:</strong> <br> <strong>Adaptabilidad:</strong> Garanticé que la aplicación se adaptara a diferentes dispositivos, brindando a los usuarios una experiencia consistente y fluida. <br> <strong>Presentación de Datos:</strong> Logré implementar funciones para obtener, mostrar y presentar datos de la API de forma intuitiva, creando una interfaz amigable.<br> <strong> Funcionalidad de Búsqueda:</strong> Integré potentes herramientas de búsqueda, permitiendo a los usuarios localizar eficazmente información específica dentro de la aplicación. <br> <strong> Manipulación de Datos: </strong> Incorporé filtros y opciones de clasificación, capacitando a los usuarios para interactuar con los datos según sus preferencias. <br> <strong> Atractivo Visual: </strong> Enfoqué mis esfuerzos en crear un diseño no solo funcional, sino también atractivo visualmente. <br> <br> <strong>TECNOLOGÍAS: </strong> <br> <strong>- Frontend:</strong> React, Redux, JavaScript, HTML, CSS. <br> <strong>- Backend:</strong> Sequelize, PostgreSQL, Express, Node.js.')">
    <a href="https://dogs-pi-1.onrender.com/" >>Ver más<</a>
  </div>
</div>



       </section>

       <section class="formulario container" id="contacto">
    <form id="contact-form" method="post" autocomplete="off">
      <h2>Contactame y trabajemos juntos.</h2>
      <div class="input-group">
        <div class="input-container">
          <input type="text" name="name" placeholder="Nombre y Apellido" >
          <i class="fa-solid fa-user"></i>
        </div>
        <div class="input-container">
          <input type="tel" name="phone" placeholder="Telefono Celular" >
          <i class="fa-solid fa-phone"></i>
        </div>
        <div class="input-container">
          <input type="email" name="email" placeholder="Correo" >
          <i class="fa-solid fa-envelope"></i>
        </div>
        <div class="input-container">
          <textarea name="message" placeholder="Dejame un mensaje" ></textarea>
        </div>
        <input type="submit" name="send" class="btn">
      </div>
    </form>
  </section>


       <footer class="footer">
        <div class="footer-content container">
            <img src="images/NMB.png" class="logofooter" alt="LOGO">
            
            <div class="link">
                <ul>
                    <li><a href="#header">Sobre Mi</a></li>
                    <li><a href="#proyectos">Proyectos</a></li>
                    <li><a href="#educacion">Educación</a></li>
                    <li><a href="#contacto">Contacto</a></li>
                    <li><a href="#header"><i class="fa-solid fa-arrow-up"></i></a></li>

                </ul>
            </div>
        
        </div>
       </footer>

<div id="myModal" class="modal">
    <span class="close">&times;</span>
    <!-- Cambia el texto para que se inserte dentro de este div -->
    <div class="modal-content">
        <div id="modal-text"></div>
         
      </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
      var contactForm = document.getElementById('contact-form');

      contactForm.addEventListener('submit', function(event) {
        event.preventDefault();

        var formData = new FormData(contactForm);

        var xhr = new XMLHttpRequest();
        xhr.open(contactForm.getAttribute('method'), contactForm.getAttribute('action'), true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

        xhr.onload = function() {
          if (xhr.status >= 200 && xhr.status < 400) {
            console.log('¡Correo enviado con éxito!');
            // Puedes agregar aquí un mensaje de éxito si lo deseas
          } else {
            console.error('Error al enviar el correo');
            // Puedes agregar aquí un mensaje de error si lo deseas
          }
        };

        xhr.send(new URLSearchParams(formData));
      });
    });
  </script>

  <!-- PHP para enviar el correo -->

  <?php
  include('send.php');
  // Configuración del destinatario del correo
  $destinatario = "comercialfecor@gmail.com"; // Cambia esto a tu correo personal

  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['message'])) {
      $nombre = htmlspecialchars($_POST['name']);
      $telefono = htmlspecialchars($_POST['phone']);
      $email = htmlspecialchars($_POST['email']);
      $mensaje = htmlspecialchars($_POST['message']);

      $asunto = "Nuevo mensaje del formulario de contacto";
      $cuerpo = "Nombre: " . $nombre . "\n";
      $cuerpo .= "Telefono: " . $telefono . "\n";
      $cuerpo .= "Correo electrónico: " . $email . "\n";
      $cuerpo .= "Mensaje:\n" . $mensaje;

      $headers = "From: " . $email . "\r\n" .
          "Reply-To: " . $email . "\r\n" .
          "X-Mailer: PHP/" . phpversion();

      if (mail($destinatario, $asunto, $cuerpo, $headers)) {
        echo "Gracias, tu mensaje ha sido enviado.";
      } else {
        echo "Lo siento, hubo un problema al enviar tu mensaje.";
      }
    } else {
      echo "Por favor completa todos los campos obligatorios.";
    }
  }
  ?>
  </body>
</html>
