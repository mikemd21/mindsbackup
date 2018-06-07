<div class="col-md-10">
	<div class="box box-info">
	    <div class="box-header with-border">
	    	<h3 class="box-title"><?php
				echo "Usuario: ".$this->session->userdata('s_usuario');
				 ?></h3>
	    </div>

			<form class="form-horizontal" action="<?php echo base_url();?>cpersona/actualizarDatos" method="POST">
		        <div class="box-body">
		                <div class="form-group">
		                  <label for="inputEmail3" class="col-sm-2 control-label">Nombre</label>
		                  <div class="col-sm-10">
		                    <input type="txt" class="form-control" name="txtNombre" placeholder="Nombre">
		                  </div>
		                </div>
		                <div class="form-group">
		                  <label for="inputEmail3" class="col-sm-2 control-label">Apellido Paterno</label>

		                  <div class="col-sm-10">
		                    <input type="txt" class="form-control"  name="txtApPaterno" placeholder="Apellido paterno">
		                  </div>
		                </div>
		                <div class="form-group">
		                  <label for="inputEmail" class="col-sm-2 control-label">Apellido Materno</label>

		                  <div class="col-sm-10">
		                    <input type="txt" class="form-control"  name="txtApMaterno" placeholder="Apellido Materno">
		                  </div>
		                </div>
		                <div class="form-group">
		                  <label for="inputEmail" class="col-sm-2 control-label">Email</label>

		                  <div class="col-sm-10">
		                    <input type="email" class="form-control"  name="txtEmail" placeholder="Email">
		                  </div>
		                </div>
		        </div>
		              <!-- /.box-body -->
		              <div class="box-footer">
		                <input type="submit" class="btn btn-info" value="Actualizar">
		              </div>
		              <!-- /.box-footer -->
		    </form>
			<form class="form-horizontal" action="<?php echo base_url();?>cpersona/eliminarPersona" method="POST">
			<br>
				<div class="box-header with-border">
					<h3 class="box-title">Eliminar por ID ♦</h3>
						<div class="box-body">
							<div class="form-group">
			        			<label for="inputEmail" class="col-sm-2 control-label">ID para eliminar</label>
			        				<div class="col-sm-10">
		            					<input type="text" name="txtIdP" class="form-control" placeholder="ID para Eliminar">
		          					</div>
		            		</div>
		            	</div>
		        </div>
	    			<div class="box-footer">
						<input type="submit" value="Eliminar" class="btn btn-danger pull-right">
						<a href="http://localhost/tutorialfinal/" class="btn btn-warning">Salir</a>
					</div>
			</form>
	</div>
</div>
