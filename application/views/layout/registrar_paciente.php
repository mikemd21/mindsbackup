<section>
      <div class="container">
        <header class="section-header">
          <h2 class="mb-2">Paciente</h2>
          <p class="lead">Rellene el siguiente formulario:</p>
        </header>
        <div class="row align-items-center mt-8">
          <div class="col-lg-9">
            <form action="<?php echo base_url();?>cpaciente/guardar" method="POST"  class="login-form text-leftt">
              <div class="form-group mb-4">
                <label>Nombres<sup class="text-primary">&#10033;</sup></label>
                <input type="text" name="txtNombre" placeholder="Arturo" class="form-control">
              </div>
              <div class="form-group mb-4">
                <label>Primer apellido<sup class="text-primary">&#10033;</sup></label>
                <input type="text" name="txtApPaterno" placeholder="Gomez" class="form-control">
              </div>
              <div class="form-group mb-4">
                <label>Segundo apellido<sup class="text-primary">&#10033;</sup></label>
                <input type="text" name="txtApMaterno" placeholder="Gomez" class="form-control">
              </div>
              <div class="form-group mb-4">
                <label>Fecha de nacimiento<sup class="text-primary">&#10033;</sup></label>
                <input type="date" name="txtDate" class="form-control">
              </div>
              <div class="form-group mb-4">
                <label>Genero<sup class="text-primary">&#10033;</sup></label>
                <select name="txtGenero" class="form-control">
                  <option value=" ">-Select-</option>
                  <option value="Masculino">Masculino</option>
                  <option value="Femenino">Femenino</option>
                  <option value="Otro">Otro</option>
                </select>
              </div>
              <div class="form-group">
                <button type="submit"class="btn btn-primary">Registrar</button>
              </div>
            </div>
          </form>
          </div>
</section>
<?php echo $mensaje; ?>
