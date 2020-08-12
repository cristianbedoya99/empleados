
<div class="span-12">
		
                <div class="col-lg-12">
                    <h1 class="page-header">Eliminar empleado</h1>
                </div>
                <!-- /.col-lg-12 -->
</div>
<?php
	foreach ($empleadoeli as $key => $empleado){
?>
<table>
				<form method="post" action="<?php echo getUrl("Parametros","Empleados", "postEliminar");?>" name ="eliminar">
				<td>
								<label>Codigo del usuario</label>
								<input class="form-control" placeholder="<?php echo $empleado['empleado_id'];?>" name="empleado_id" value="<?php echo $empleado['empleado_id'];?>" readonly>
				</td>
					<td>
								<label>nombre del usuario</label>
								<input class="form-control" placeholder="<?php echo $empleado['email'];?>" name="email" value="<?php echo $empleado['nombre'];?>" readonly>
					</td>
						
				

					<button type="submit" class="btn btn-success">Enviar</button>
				</form>


				</table>
</tr>
	<?php }?>