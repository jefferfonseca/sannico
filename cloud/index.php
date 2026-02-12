<?php
// index.php
// Se recibe la ruta base vía POST
$selectedFolder = isset($_POST['folder']) ? htmlspecialchars($_POST['folder']) : '';
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>San Nico | Cloud 360</title>
  <!-- Materialize CSS -->
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection">
  <link type="text/css" rel="stylesheet" href="css/style.css" media="screen,projection">
  <link rel="stylesheet" href="./../../../css/header.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <!-- jQuery y Materialize JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="js/materialize.min.js"></script>

</head>
<body>
  <!-- Preloader -->
  <div id="preloader">
    <div class="preloader-wrapper big active">
      <div class="spinner-layer spinner-blue">
        <div class="circle-clipper left">
          <div class="circle"></div>
        </div>
        <div class="gap-patch">
          <div class="circle"></div>
        </div>
        <div class="circle-clipper right">
          <div class="circle"></div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal de Introducción -->
  <div id="intro-modal" class="modal">
    <div class="modal-content">
      <h4>Bienvenido a la Gestión de Archivos</h4>
      <p><strong>Instrucciones de funcionamiento:</strong></p>
      <ul>
        <li>Utiliza la barra de navegación para seleccionar el grado.</li>
        <li>Arrastra y suelta archivos o usa el botón "Subir" para cargarlos.</li>
        <li>Utiliza el campo de búsqueda para filtrar archivos y carpetas.</li>
        <li>Haz clic en "Abrir" para ver o descargar un archivo.</li>
        <li>Navega mediante los breadcrumbs para moverte por la estructura de carpetas.</li>
      </ul>
      <p>Presiona "Continuar" para comenzar.</p>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-close waves-effect waves-green btn-flat">Continuar</a>
    </div>
  </div>

  <header>
    <nav class="nav">
      <div class="nav-wrapper">
        <a href="#" class="brand-logo right">Logo</a>
        <ul id="nav-mobile" class="left hide-on-med-and-down">
          <li><a href="assets/grado8/">Octavo (8°)</a></li>
          <li><a href="assets/grado9/">Noveno (9°)</a></li>
          <li><a href="assets/grado10/">Décimo (10°)</a></li>
          <li><a href="assets/grado11/">Undécimo (11°)</a></li>
        </ul>
      </div>
    </nav>
    <!-- Breadcrumbs -->
    <div id="breadcrumbs"></div>
  </header>

  <!-- Título del grado (tomado del nav) -->
  <div id="gradeTitle"></div>

  <!-- Campo de búsqueda para filtrar archivos y carpetas -->
  <div class="container">
    <div class="input-field">
      <input type="text" id="search-input" placeholder="Buscar archivos o carpetas">
      <label for="search-input">Buscar</label>
    </div>
  </div>

  <!-- Barra de progreso para la subida -->
  <div class="container">
    <div id="progress-bar" class="progress">
      <div class="determinate" style="width: 0%"></div>
    </div>
  </div>

  <!-- Formulario oculto para cambiar de carpeta -->
  <form id="folderForm" method="POST" action="index.php" style="display: none">
    <input type="hidden" name="folder" id="folderInput" value="">
  </form>

  <main class="container">
    <!-- Contenedor principal para la estructura -->
    <ul class="collapsible" id="fileList"></ul>
  </main>

  <script>
    // La ruta base se recibe desde PHP
    var selectedFolder = "<?php echo $selectedFolder; ?>";
    if (!selectedFolder) {
      console.log("No se ha recibido una ruta base.");
    } else {
      console.log("Ruta base recibida:", selectedFolder);
    }

    // Actualiza el título utilizando el enlace del nav o derivándolo del folder
    function updateGradeTitle(folder) {
      var navText = $("#nav-mobile a[href='" + folder + "']").text();
      if (navText) {
        $("#gradeTitle").text(navText);
      } else {
        let parts = folder.replace(/\/$/, '').split('/');
        let grade = parts.length ? parts[parts.length - 1] : "Sin seleccionar";
        grade = grade.charAt(0).toUpperCase() + grade.slice(1);
        grade = grade.split(" - ")[0];
        $("#gradeTitle").text(grade);
      }
    }

    // Actualiza los breadcrumbs, omitiendo "assets" y quitando " - Número de documento"
    function updateBreadcrumbs(folderPath) {
      let parts = folderPath.replace(/\/$/, '').split('/').filter(p => p.length > 0);
      let currentPath = "";
      let breadcrumbHtml = '';
      parts.forEach(function(part) {
        if (part.toLowerCase() === "assets") return;
        currentPath += part + "/";
        let displayPart = part.split(" - ")[0];
        breadcrumbHtml += `<a href="#" class="breadcrumb-link" data-folder="${currentPath}">${displayPart}</a> / `;
      });
      $("#breadcrumbs").html(breadcrumbHtml);
    }

    // Abre los collapsibles padres
    function openParents($header) {
      $header.parents("li").each(function() {
        if (!$(this).hasClass("active")) {
          $(this).children(".collapsible-header").trigger("click");
        }
      });
    }

    $(document).ready(function () {
      // Inicializa y abre el modal de introducción
      $('#intro-modal').modal();
      $('#intro-modal').modal('open');

      // Oculta el preloader una vez cargado todo
      $("#preloader").fadeOut(500);

      $(".collapsible").collapsible();

      // Si no se seleccionó ningún grado, se muestra un toast.
      if (!selectedFolder) {
        M.toast({ html: "Selecciona un grado." });
      } else {
        updateGradeTitle(selectedFolder);
      }

      // Activa el enlace del nav correspondiente a la carpeta actual
      $("#nav-mobile a").each(function() {
        let href = $(this).attr("href");
        if (href.replace(/\/$/, '') === selectedFolder.replace(/\/$/, '')) {
          $(this).addClass("active");
        }
      });

      // Cambio de carpeta desde el menú
      $("#nav-mobile a").click(function (e) {
        e.preventDefault();
        var folder = $(this).attr("href");
        $("#folderInput").val(folder);
        $("#folderForm").submit();
      });

      // Filtrado en tiempo real
      $("#search-input").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#fileList li").filter(function() {
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
      });

      // Drag & Drop sobre headers de carpetas
      $(document).on("dragover", ".collapsible-header", function(e) {
        e.preventDefault();
        $(this).addClass("dragover");
      });
      $(document).on("dragleave", ".collapsible-header", function(e) {
        e.preventDefault();
        $(this).removeClass("dragover");
      });
      $(document).on("drop", ".collapsible-header", function(e) {
        e.preventDefault();
        $(this).removeClass("dragover");
        let files = e.originalEvent.dataTransfer.files;
        let folderPath = $(this).data("folder");
        if (files.length > 0) {
          uploadFiles(files, folderPath);
        }
      });

      // Función recursiva para renderizar la estructura
      function renderFiles(data, parent, currentPath) {
        currentPath = currentPath || selectedFolder;
        // Ordena para que las carpetas aparezcan primero
        data.sort((a, b) => a.type === "folder" && b.type !== "folder" ? -1 : 1);
        data.forEach(function (item) {
          if (item.type === "folder") {
            let isRestricted = (item.name.charAt(0) === '*');
            let fullFolderName = item.name;
            let cleanFolderName = fullFolderName.charAt(0) === '*' ? fullFolderName.substring(1) : fullFolderName;
            let displayName = cleanFolderName.split(" - ")[0];
            let folderFullPath = currentPath + item.name + "/";
            let headerButtons = "";
            if (!isRestricted) {
              headerButtons = `
                <button class="btn-small blue upload-btn" data-folder="${folderFullPath}" style="margin-left:auto; display: inline-flex; align-items: center;">
                  <i class="material-icons" style="margin-right: 4px;">file_upload</i>
                  <span>Subir</span>
                </button>
                <button class="btn-small green create-folder-btn" data-folder="${folderFullPath}" style="margin-left: 8px; display: inline-flex; align-items: center;">
                  <i class="material-icons" style="margin-right: 4px;">create_new_folder</i>
                  <span>Crear</span>
                </button>
              `;
            }
            let collapsibleItem = `
              <li>
                <div class="collapsible-header" data-folder="${folderFullPath}" draggable="true">
                  <i class="material-icons">folder</i> ${displayName}
                  ${headerButtons}
                  <input type="file" class="file-input" data-folder="${folderFullPath}" style="display:none;" multiple />
                </div>
                <div class="collapsible-body">
                  <ul class="collapsible"></ul>
                </div>
              </li>
            `;
            let newElem = $(collapsibleItem);
            parent.append(newElem);
            if (item.children && item.children.length) {
              renderFiles(item.children, newElem.find(".collapsible"), folderFullPath);
            }
          } else {
            // Para archivos: renderizamos las cards en columnas.
            let action = `<a href="${item.path}" target="_blank" class="btn abrir">Abrir</a>`;
            let fileItem = `
              <div class="col s12 m6 l4">
                <div class="card">
                  <div class="card-content">
                    <span class="card-title">${item.name}</span>
                    ${action}
                  </div>
                </div>
              </div>
            `;
            // Si el contenedor es un <ul>, se crea (o reutiliza) un <li> que agrupa un div.row
            if (parent.prop("tagName").toLowerCase() === "ul") {
              let $rowContainer = parent.children("li.file-row-container");
              if ($rowContainer.length === 0) {
                $rowContainer = $('<li class="file-row-container"><div class="row"></div></li>');
                parent.append($rowContainer);
              }
              $rowContainer.find(".row").append(fileItem);
            } else {
              parent.append(fileItem);
            }
          }
        });
      }

      // Actualiza los breadcrumbs al hacer clic en un header
      $(document).on("click", ".collapsible-header", function (e) {
        if ($(e.target).is("button") || $(e.target).is("i") || $(e.target).is("span") || $(e.target).is("input")) {
          return;
        }
        let folderPath = $(this).data("folder");
        updateBreadcrumbs(folderPath);
      });

      // Al hacer clic en "Subir Archivos" se dispara el input file
      $(document).on("click", ".upload-btn", function (e) {
        e.stopPropagation();
        $(this).siblings(".file-input").trigger("click");
      });

      // Función para subir archivos
      function uploadFiles(files, folderPath) {
        let parts = folderPath.split("/");
        let folderName = parts[parts.length - 2];
        let nameParts = folderName.split(" - ");
        let requiredPassword = nameParts.length > 1 ? nameParts[1].trim() : "";
        if (requiredPassword) {
          var enteredPassword = prompt("Ingrese la contraseña para subir archivos a " + nameParts[0] + ":");
          if (enteredPassword !== requiredPassword) {
            M.toast({ html: "Contraseña incorrecta. Por favor verifique e intente nuevamente." });
            return;
          }
        }
        let formData = new FormData();
        for (let i = 0; i < files.length; i++) {
          formData.append("files[]", files[i]);
        }
        formData.append("folder", folderPath);
        $.ajax({
          url: "upload.php",
          type: "POST",
          data: formData,
          processData: false,
          contentType: false,
          dataType: "json",
          xhr: function() {
            var xhr = new window.XMLHttpRequest();
            xhr.upload.addEventListener("progress", function(evt) {
              if (evt.lengthComputable) {
                var percentComplete = evt.loaded / evt.total * 100;
                $("#progress-bar").show();
                $("#progress-bar .determinate").css("width", percentComplete + "%");
              }
            }, false);
            return xhr;
          },
          success: function (response) {
            $("#progress-bar").hide();
            if (response.success) {
              M.toast({ html: "Archivo(s) subido(s) con éxito!" });
              localStorage.setItem("lastOpenFolder", folderPath);
              loadFiles(selectedFolder);
            } else {
              M.toast({ html: response.message || "Error al subir los archivos" });
            }
          },
          error: function (jqXHR, textStatus, errorThrown) {
            $("#progress-bar").hide();
            M.toast({ html: "Error en la conexión con el servidor: " + textStatus });
          }
        });
      }

      // Manejador para input file
      $(document).on("change", ".file-input", function () {
        let files = this.files;
        let folderPath = $(this).data("folder");
        if (files.length === 0) return;
        uploadFiles(files, folderPath);
      });

      // Manejador para crear carpetas
      $(document).on("click", ".create-folder-btn", function(e){
        e.stopPropagation();
        let parentFolder = $(this).data("folder");
        let newFolderName = prompt("Ingrese el nombre de la nueva carpeta (solo el nombre del estudiante):");
        if (!newFolderName) return;
        let formData = new FormData();
        formData.append("parent", parentFolder);
        formData.append("folderName", newFolderName);
        $.ajax({
          url: "create_folder.php",
          type: "POST",
          data: formData,
          processData: false,
          contentType: false,
          dataType: "json",
          success: function(response) {
            if(response.success) {
              M.toast({ html: response.message });
              let newFolderPath = parentFolder + newFolderName + "/";
              localStorage.setItem("lastOpenFolder", newFolderPath);
              loadFiles(selectedFolder);
            } else {
              M.toast({ html: response.message });
            }
          },
          error: function() {
            M.toast({ html: "Error en la conexión con el servidor" });
          }
        });
      });

      // Carga la estructura de archivos y carpetas (solo si se seleccionó un grado)
      function loadFiles(folder) {
        if (!folder) return;
        $.ajax({
          url: "listar.php",
          type: "POST",
          data: { folder: folder },
          dataType: "json",
          success: function (data) {
            let fileList = $("#fileList");
            fileList.empty();
            renderFiles(data, fileList);
            $(".collapsible").collapsible();
            let lastFolder = localStorage.getItem("lastOpenFolder");
            if(lastFolder) {
              let $targetHeader = $(`.collapsible-header[data-folder="${lastFolder}"]`);
              if($targetHeader.length){
                openParents($targetHeader);
                updateBreadcrumbs(lastFolder);
              }
            }
          },
          error: function () {
            M.toast({ html: "Error al cargar los archivos" });
          }
        });
      }

      if(selectedFolder){
        loadFiles(selectedFolder);
      }
    });
  </script>
</body>
</html>
