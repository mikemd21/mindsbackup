<section>
      <div class="container">
        <header class="section-header">
          <h2 class="mb-2">Paciente</h2>
          <p class="lead">Rellene el siguiente formulario:</p>
        </header>
        <span id="alert_action"></span>
        <div class="row align-items-center mt-8">
          <div class="col-lg-9">
            <form action="<?php echo base_url();?>cpaciente/guardar" method="POST" id="rpform" class="login-form text-left">
              <div class="form-group mb-4">
               <span id="alert_action"></span>
                <label>Nombres<sup class="text-primary">&#10033;</sup></label>
                <input type="text" name="txtNombre" <?php echo 'value="'.$nom.'"'; ?> placeholder="Arturo" class="form-control">
              </div>
              <div class="form-group mb-4">
                <label>Primer apellido<sup class="text-primary">&#10033;</sup></label>
                <input type="text" name="txtApPaterno" <?php echo 'value="'.$app1.'"'; ?> placeholder="Gomez" class="form-control">
              </div>
              <div class="form-group mb-4">
                <label>Segundo apellido<sup class="text-primary">&#10033;</sup></label>
                <input type="text" name="txtApMaterno" <?php echo 'value="'.$app2.'"'; ?> placeholder="Gomez" class="form-control">
              </div>
              <div class="form-group mb-4">
                <label>Fecha de nacimiento<sup class="text-primary">&#10033;</sup></label>
                <input type="date" name="txtDate" value = "<?php echo $fecha; ?>" class="form-control">
              </div>
              <div class="form-group mb-4">
                <label>Genero<sup class="text-primary">&#10033;</sup></label>
                <select name="txtGenero" class="form-control">
                  <option value=" ">-Selecione-</option>
                  <option value="M" <?php if($genero == 'M'){echo 'selected="selected"';} ?>>Masculino</option>
                  <option value="F" <?php if($genero == 'F'){echo 'selected="selected"';} ?>>Femenino</option>
                  <option value="O" <?php if($genero == 'O'){echo 'selected="selected"';} ?>>Otro</option>
                </select>
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary">Registrar</button>
              </div>
            </div>
            <input type="hidden" id="tipo" name="tipo" value="2"/>
          </form>
          </div>
</section>
