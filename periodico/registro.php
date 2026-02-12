<?php include "includes/header.php"; ?>

<main>
  <div class="registro valign-wrapper">
    <div class="row">
      <h1 class="titulo-registro">Registro</h1>
      <form action="cruds/cx-registro.php" method="post">

        <input type="text" name="Id" class="hide">

        <div class="input-field col s6">
          <input id="Nombres" name="Nombres" type="text" class="validate" />
          <label for="Nombres">Nombres</label>
        </div>

        <div class="input-field col s6">
          <input id="Apellidos" name="Apellidos" type="text" class="validate" />
          <label for="Apellidos">Apellidos</label>
        </div>

        <div class="input-field col s4">
          <input id="Cel" name="Cel" type="number" class="validate" />
          <label for="Cel">Celular</label>
        </div>

        <div class="input-field col s2">
          <input id="Edad" name="Edad" type="number" class="validate" />
          <label for="Edad">Edad</label>
        </div>

        <div class="input-field col s3">
          <select class="validate" name="TipoSangre">
            <option value="" disabled selected>Seleccione uno</option>
            <option value="A">A</option>
            <option value="B">B</option>
            <option value="AB">AB</option>
            <option value="O">O</option>
          </select>
          <label>Tipo de Sangre</label>
        </div>

        <div class="input-field col s3">
          <select class="validate" name="RH">
            <option value="" disabled selected>Seleccione uno</option>
            <option value="+">+</option>
            <option value="-">-</option>
          </select>
          <label>RH</label>
        </div>

        <div class="input-field col s6">
          <input id="Email" name="Email" type="Email" class="validate" />
          <label for="Email">E-mail</label>
        </div>

        <div class="input-field col s6">
          <input id="pw" name="pw" type="password" class="validate" />
          <label for="pw">Contraseña</label>
        </div>

        <button class="btn waves-effect waves-light" type="submit" name="crud" value="insert">
          registrar
          <i class="material-icons right">send</i>
        </button>
      </form>

    </div>
  </div>
</main>

<?php include "includes/footer.php"; ?>