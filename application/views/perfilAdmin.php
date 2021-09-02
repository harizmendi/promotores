<div class="col-md-12">
	<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Mi Perfil</h3>
              </div>
              <!-- /.card-header -->
              <?php $user = $this->session->get_userdata('user') ?>
              <!-- form start -->
              <form method="post" action="<?php echo base_url()."administradores/updatePerfil" ?>">
             
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputNombre">Nombre</label>
                    <input type="text" name = "nombre" class="form-control" id="exampleInputNombre" placeholder="Nombre" value = "<?php echo $user['user']['nombre'] ?>" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputApellido">Apellido</label>
                    <input type="text" name="apellido" class="form-control" id="exampleInputApellido" placeholder="Apellido" value = "<?php echo $user['user']['apellido'] ?>" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email" value = "<?php echo $user['user']['email'] ?>" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Contraseña</label>
                    <input type="text" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" value = "<?php echo $user['user']['password'] ?>" required>
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