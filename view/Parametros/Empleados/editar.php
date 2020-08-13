
<div class="span-12">
                <div class="col-lg-12">
                    <h1 class="page-header">Editar Empleado</h1>
                </div>
                <!-- /.col-lg-12 -->
</div>
<?php
	foreach ($empleadoedit as $key => $empleadoe){
?>

		<form method="post" action="<?php echo getUrl("Parametros","Empleados", "postEditar");?>" name ="EditarCliente">
					<div class="col-lg-7">
						<div class="from-group">
								<label>Nombre</label>
								<input class="form-control" placeholder="<?php echo $empleadoe['empleado_id'];?>" name="empleado_id" value="<?php echo $empleadoe['empleado_id'];?>" readonly>
						</div>
					</div>
					<div class="col-lg-7">
						<div class="from-group">
								<label>email</label>
								<input class="form-control" placeholder="<?php echo $empleadoe['Nombre'];?>" name="nombre" value="<?php echo $empleadoe['nombre'];?>">
						</div>
					</div>
					<div class="col-lg-7">
					<div class="from-group">
						<label>sexo </label>
					<div class="control-group">
				        <div class="form-check">
				          <input class="form-check-input" type="radio" name="sexo" id="gridRadios1" value="M">
				          <label class="form-check-label" for="gridRadios1">
				          masculino
				          </label>
				        </div>
				        <div class="form-check">
				          <input class="form-check-input" type="radio" name="sexo" id="gridRadios2" value="F">
				          <label class="form-check-label" for="gridRadios2">
				           femenino
				          </label>
				        </div>
				      </div>
					</div>
				<div class="form-group">
					 <label for="exampleFormControlTextarea1">Descripcion</label>
					 <textarea class="form-control" id="exampleFormControlTextarea1"  name="descripcion" rows="3"></textarea>
				</div>
			<div class="control-group">
              <label class="control-label">Boletin?</label>
              <div class="controls">
                <label>
              <input class="form-check-input" name="boletin" type="checkbox" value="1">    
              </div>
            </div>
		   </div>
					<div class="col-lg-7">
						<div class="from-group">
								<button type="submit" class="btn btn-success">Enviar</button>
						</div>
					</div>
				</form>

	<?php }?>