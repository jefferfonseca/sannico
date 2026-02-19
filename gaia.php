<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="description" content="Sitio Web Oficial de la Institución Educativa Técnica San Nicolás">
  <title>IET San Nicolás | ♻️ G.a.I.A. - Chatbot Ambiental</title>
  <link rel="icon" href="images/Escudo.png" type="image/png">

  <meta property="og:title" content="IET San Nicolás - Tuta" />
  <meta property="og:description" content="Sitio Web Oficial de la Institución Educativa Técnica San Nicolás" />
  <meta property="og:image" content="images/Escudo.png" />
  <meta property="og:url" content="https://ietsannicolas.edu.co/" />
  <meta property="og:type" content="website" />

  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="/sannicolas-tuta/css/materialize.min.css" media="screen,projection" />

  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <link rel="stylesheet" href="/sannicolas-tuta/css/style.css">
  <link rel="stylesheet" href="/sannicolas-tuta/css/header.css">
  <link rel="stylesheet" href="/sannicolas-tuta/css/gaia.css" />
</head> 

<body>
  <header>
    <div class="navbar ">
      <div class="row  center valign-wrapper ">
        <div class="col s12 m4">
          <img src="./images/Escudo.png" alt="sanicolas" height="90px">
        </div>
        <div class="col s12 m4 center">
          <h5 class="center m-0">Institución Educativa Técnica<br>San Nicolás - Tuta</h5>
          <p class="center m-0">"Queremos y Podemos"</p>
        </div>
        <div class="col s12 m4">
          <img src="./images/Escudo-tuta.png" alt="tuta" height="90px">
        </div>
      </div>
    </div>
    <!-- Menú de navegación -->
    <nav id="myHeader" class="nav z-depth-0">
      <div class="nav-wrapper">
        <a href="#" id="logo" class="hide">
          <img style="padding: 10px;" src="./images/Escudo.png" alt="sannicolas" height="100%">
        </a>
        <a href="#" data-target="menu-responsive" class="sidenav-trigger right">
          <i class="material-icons">menu</i>
        </a>
        <ul class="right hide-on-med-and-down">
          <li><a href="index.php">Inicio</a></li>
          <li>
            <a href="#" class="dropdown-trigger" data-target="institucion">Institución
              <i class="material-icons right">arrow_drop_down</i>
            </a>
          </li>
          <li><a href="constru.php" target="_blank">Radio</a></li>
          <li>
            <a href="#" class="dropdown-trigger" data-target="esp">Especialidades
              <i class="material-icons right">arrow_drop_down</i>
            </a>
          </li>
          <li><a href="https://compucol.co/colegios/tutaiesannicolas/" target="_blank">Sistema de Notas</a>
          </li>
          <li><a href="contacto.php">Contáctenos</a></li>
        </ul>
      </div>
    </nav>
    <!-- Submenús -->
    <ul id="institucion" class="dropdown-content">
      <li><a href="nosotros.php">Reseña Histórica</a></li>
      <li><a href="simbolos.php">Símbolos Institucionales</a></li>
      <li><a href="sedes.php">Sedes</a></li>
      <li><a href="docentes.php">Docentes</a></li>
      <li><a href="gobierno-escolar.php">Gobierno Escolar</a></li>
      <li><a href="proyectos.php">Proyectos</a></li>
      <li><a href="#" target="_blank">Psicoorientación</a></li>
    </ul>
    <ul id="esp" class="dropdown-content">
      <li><a href="redes.php">Redes y Sistemas</a></li>
      <li><a href="salud.php">Salud</a></li>
      <li><a href="turismo.php">Turismo</a></li>
    </ul>
    <!-- Menú lateral responsivo -->
    <ul class="sidenav" id="menu-responsive">
      <li><a href="index.php">Inicio</a></li>
      <li>
        <a href="#" class="dropdown-trigger" data-target="institucion-responsive">Institución
          <i class="material-icons right">arrow_drop_down</i>
        </a>
      </li>
      <li><a href="live.php" target="_blank">Radio</a></li>
      <li>
        <a href="#" class="dropdown-trigger" data-target="esp-responsive">Especialidades
          <i class="material-icons right">arrow_drop_down</i>
        </a>
      </li>
      <li><a href="https://compucol.co/colegios/tutaiesannicolas/" target="_blank">Sistema de Notas</a></li>
      <li><a href="contacto.php">Contáctenos</a></li>
    </ul>
    </div>
  </header>
  <div class="body">
    <div class="chat-container">
      <div class="chat-header">
        🌍 G.a.I.A. ♻️ <br />
        Generador Ambiental de Innovación y Aprendizaje
      </div>
      <div class="chat-box" id="chat-box"></div>
      <div class="chat-input">
        <input type="text" id="user-input" placeholder="Escribe tu mensaje..." />
        <button onclick="sendMessage()" class="send-btn">
          <svg xmlns="http://www.w3.org/2000/svg" fill="white" viewBox="0 0 24 24" width="20px" height="20px">
            <path d="M2.01 21L23 12 2.01 3 2 10l15 2-15 2z" />
          </svg>
        </button>
      </div>
    </div>
    <div class="signature">
      <br />
      <span><b>Powered by: </b>
        <br />
        <span>Ing. Jeferson Fonseca</span>
        <br />
        <span>Ing. Bibiana Suarez</span>
        <br />
        <span>Est. Carlos Chaves</span>
        <br />

        <span>
          <br />
          <b>R.E.C.I.C.L.A. | G.a.I.A</b> <br />
          Robot Educativo de Conciencia Institucional <br />para el Cuidado del
          Lote Ambiental ♻️
        </span>
      </span>
    </div>
  </div>
  <!-- 📌 marked.js para renderizar Markdown -->
  <script src="https://cdn.jsdelivr.net/npm/marked/marked.min.js"></script>

  <script>
    const chatBox = document.getElementById("chat-box");
    const input = document.getElementById("user-input");

    function appendMessage(text, sender) {
      const msg = document.createElement("div");
      msg.classList.add("message", sender);

      // Renderizar Markdown solo para respuestas del bot
      if (sender === "bot") {
        msg.innerHTML = marked.parse(text);
      } else {
        msg.textContent = text;
      }

      chatBox.appendChild(msg);
      chatBox.scrollTop = chatBox.scrollHeight;
    }

    async function sendMessage() {
      const text = input.value.trim();
      if (!text) return;

      appendMessage(text, "user");
      input.value = "";

      // Mostrar animación "escribiendo..."
      const typingIndicator = document.createElement("div");
      typingIndicator.classList.add("typing");
      typingIndicator.innerHTML = "<span></span><span></span><span></span>";
      chatBox.appendChild(typingIndicator);
      chatBox.scrollTop = chatBox.scrollHeight;

      try {
        const response = await fetch("gaia-chat.php", {
          method: "POST",
          headers: { "Content-Type": "application/json" },
          body: JSON.stringify({ message: text }),
        });
        const data = await response.json();

        // Eliminar indicador y mostrar respuesta real
        typingIndicator.remove();
        appendMessage(data.reply, "bot");
      } catch (error) {
        typingIndicator.remove();
        appendMessage("⚠️ Error al conectar con el servidor.", "bot");
        console.error(error);
      }       
    }

    // 📌 Enviar con Enter
    input.addEventListener("keypress", function (e) {
      if (e.key === "Enter") {
        sendMessage();
      }
    });

    // Mensaje inicial
    appendMessage(
      "Hola 👋, soy 🌍 G.a.I.A. ♻️ Tu guía ambiental en la IET. Pregúntame sobre reciclaje y sostenibilidad.",
      "bot"
    );

    function appendMessage(text, sender) {
      const msgWrapper = document.createElement("div");
      msgWrapper.style.display = "flex";
      msgWrapper.style.alignItems = "flex-end";
      msgWrapper.style.marginBottom = "10px";

      const msg = document.createElement("div");
      msg.classList.add("message", sender);

      if (sender === "bot") {
        msg.innerHTML = marked.parse(text);

        // Avatar como emoji ♻️
        const avatar = document.createElement("div");
        avatar.textContent = "♻️";
        avatar.style.fontSize = "15px";
        avatar.style.marginRight = "8px";

        msgWrapper.appendChild(avatar);
        msgWrapper.appendChild(msg);
      } else {
        msg.textContent = text;
        msg.style.marginLeft = "auto"; // Usuario a la derecha
        msgWrapper.appendChild(msg);
      }

      chatBox.appendChild(msgWrapper);
      chatBox.scrollTop = chatBox.scrollHeight;
    }
  </script>




<!--JavaScript at end of body for optimized loading-->
<script type="text/javascript" src="js/materialize.min.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        M.AutoInit(); // Inicializa todos los componentes
    });

    document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.dropdown-trigger');
        var instances = M.Dropdown.init(elems);
    });

    document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.sidenav');
        var instances = M.Sidenav.init(elems);
    });

    //js fixed header
    window.onscroll = function() {
        myFunction();
    };

    var header = document.getElementById("myHeader");
    var logo = document.getElementById("logo");
    var sticky = header.offsetTop;

    function myFunction() {
        if (window.pageYOffset > sticky) {
            header.classList.add("sticky");
            logo.classList.remove("hide");
        } else {
            header.classList.remove("sticky");
            logo.classList.add("hide");
        }
    }

    document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.parallax');
        var instances = M.Parallax.init(elems);
    });

    // js Slider
    var slideIndex = 0;
    showSlides();

    function showSlides() {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > slides.length) {
            slideIndex = 1;
        }
        slides[slideIndex - 1].style.display = "block";
        setTimeout(showSlides, 2500); // Change image every 2 seconds
    }

    document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.carousel');
        var instances = M.Carousel.init(elems);
    });


</script>

<footer class="p-0" data-aos="fade-up" data-aos-duration="2500">
    <div class="row valign-wrapper m-0">
        <div class="col s12 m4  center">
            <h4 class="white-text center"><b>Contacto:</b></h4>
            <h6><b>Celular: <br>(+57)</b> 321 222 2082</h6>
            <h6><b>E - mail:</b> <br>tuta_colsannicolas@hotmail.com</h6>
            <h6><b>Dirección</b> <br>Vda. El Arenal - Tuta</h6>
        </div>
        <div class="col s12 m8 p-0 valign-wrapper">
            <iframe class="p-0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3969.978313165623!2d-73.22735148532549!3d5.716261833606349!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e6a6e896ba57b19%3A0xa2950f5e2a24f373!2sInstituci%C3%B3n%20Educativa%20San%20Nicolas%2C%20Sede%20Sider%C3%BArgica!5e0!3m2!1ses!2sco!4v1680283187306!5m2!1ses!2sco" style="width: 100%; height: 350px; border: 0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
    <div class="row foot-dev m-0">
        <div class="col s12">
            <div class="container center p-0 ">
                <h6>© 2024 | <b>Copyright © 2025 |  Todos los derechos reservados.</b></h6>
                <h6><b>Powered By:</b> <a href="https://ingjefersonfonsecasoto.com.co" target="_blank">&lt; Mg. Ing. Jeferson Fonseca Soto &gt;</a></h6>
            </div>
        </div>
    </div>
</footer>