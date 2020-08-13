
<div class="span-12">
		
                <div class="col-lg-12">
                    <h1 class="page-header">Eliminar empleado</h1>
                </div>
                <!-- /.col-lg-12 -->
</div>
<?php
	foreach ($empleadoeli as $key => $empleadoel){
?>
<table>
		<form method="post" action="<?php echo getUrl("Parametros","Empleados", "postEliminar");?>" name ="eliminar">
				<td>
								<label>Codigo del usuario</label>
								<input class="form-control" placeholder="<?php echo $empleadoel['empleado_id'];?>" name="empleado_id" value="<?php echo $empleadoel['empleado_id'];?>" readonly>
				</td>
				<td>
								<label>nombre del usuario</label>
								<input class="form-control" placeholder="<?php echo $empleadoel['nombre'];?>" name="nombre" value="<?php echo $empleadoel['nombre'];?>" readonly>
				</td>
                      
                 <tr class="pull-right">
					<td>
						<td class="from-group">
								<button type="submit" class="btn btn-danger">Eliminar</button>
						</td>
					</td>	
				</tr>
				</form>
				</table>
</tr>
	<?php }?>