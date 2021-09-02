<div class="col-md-12">
	<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Nuevo promotor</h3>
              </div>
              <!-- /.card-header -->
              <?php $user = $this->session->get_userdata('user') ?>
              <!-- form start -->
              <form method="post" action="<?php echo base_url()."promotores/addPromotor" ?>">
             
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputNombre">Nombre</label>
                    <input type="text" name = "nombre" class="form-control" id="exampleInputNombre" placeholder="Nombre"  required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputApellido">Apellido</label>
                    <input type="text" name="apellido" class="form-control" id="exampleInputApellido" placeholder="Apellido"  required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email"  required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Contraseña</label>
                    <input type="text" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password"  required>
                  </div>
                  <div class="card-body">
	                 <div class="row">
	                    <div class="col-sm-6">
	                      <!-- Select multiple-->
	                      <div class="form-group">
	                        <label>Marcas</label>
	                        <select multiple="" class="custom-select">
	                          <option>option 1</option>
	                          <option>option 2</option>
	                          <option>option 3</option>
	                          <option>option 4</option>
	                          <option>option 5</option>
	                        </select>
	                      </div>
	                    </div>
	                    <div class="col-sm-6">
	                      <!-- Select multiple-->
	                      <div class="form-group">
	                        <label>Tiendas</label>
	                        <select multiple="" class="custom-select">
	                          <option>option 1</option>
	                          <option>option 2</option>
	                          <option>option 3</option>
	                          <option>option 4</option>
	                          <option>option 5</option>
	                        </select>
	                      </div>
	                    </div>
	                   
	                  </div>
	              </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Actualizar</button>
                </div>
              </form>
            </div>
</div>
<?php 
	$actualizado = $this->session->get_userdata('actualizado');
	
	if(isset($actualizado['actualizado'])){

		if($actualizado['actualizado'] == 'true' ){
			?>
			<script>
				Swal.fire({
				
				  icon: 'success',
				  title: 'Perfil actualizado exitosamente.',
				  showConfirmButton: false,
				  timer: 1500
				})
			</script>
			
			<?php
			$this->session->set_userdata('actualizado', 'false');
		}
	}
?>