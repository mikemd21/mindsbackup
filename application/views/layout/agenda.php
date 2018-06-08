<div id="login" tabindex="-1" role="dialog" aria-hidden="true" class="modal fade bd-example-modal-lg">
      <div role="document" class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
          <div class="modal-header border-bottom-0">
            <h4>Agregar Agenda</h4>
            <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
          </div>
          <div class="modal-body p-4 p-lg-5">
            <form action="#" class="login-form text-left">
              <div class="form-group mb-4">
                <label>Fecha Inicio</label>
                <input type="date" name="email" placeholder="nombre" class="form-control">
              </div>
              <div class="form-group mb-4">
                <label>Fecha Fin</label>
                <input type="date" name="email" placeholder="nombre" class="form-control">
              </div>
              <div class="form-group mb-4">
               <table class="table table-striped table-bordered table-condensed">
                  <thead>
                    <tr>
                      <th>Realizar</th>
                      <th>Nombre</th>
                      <th>Descripción</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td><input type="checkbox" name="">Si</td>
                      <td>Tender la cama</td>
                      <td>El paciente debe tender la cama</td>
                    </tr>
                    <tr>
                      <td> <input type="checkbox" name="">Si</td>
                      <td>Bañarse los dientes</td>
                      <td>El paciente debe bañarse los dientes</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="form-group">
                <input type="submit" value="Guardar" class="btn btn-primary">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
        <section>
      <div class="container">
        <header class="section-header">
          <h2 class="mb-2">Agenda</h2>
          <p class="lead"></p>
        </header>
        <div class="row align-items-center">
              <a href="#" data-toggle="modal" data-target="#login" class="btn btn-primary navbar-btn ml-0 ml-lg-3">Agregar</a>
              <br>
          <br>
          <br>
          <br>
          <br>
          <table class="table table-striped table-bordered table-condensed">
                  <thead>
                    <tr>
                      <th>Código</th>
                      <th>Nombre de agenda</th>
                      <th>Fecha Inicio</th>
                      <th>Fecha Final</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <th>Agenda 1</th>
                      <td>Fecha Inicio</td>
                      <td>Fecha Final</td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <th>Agenda 2</th>
                      <td>Fecha Inicio</td>
                      <td>Fecha Fin</td>
                    </tr>
                  </tbody>
                </table>
        </div>
      </div>
    </section>
