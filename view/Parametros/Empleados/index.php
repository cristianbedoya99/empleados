<div class="span-12">
		<table class="table table-bordered table-striped">
		
		
						<a href="<?php echo getUrl("Parametros","Empleados","getCrear"); ?>"><button class="btn btn-warning btn-small pull-right" >Crear  Empleado</button></a>
			<thead>
			    <h1 class="page-header">Listados de Empleados</h1>



				<th>nombre</th>
				<th>Email</th>
				<th>Sexo</th>
				<th>Area</th>
				<th>Boletin</th>
			</thead>
			<tbody>
					<?php foreach ($empleados as $key => $empleado){
						echo "<tr>";
						echo "<td>". $empleado['nombre']."</td>";
						echo "<td>". $empleado['email']."</td>";
						echo "<td>". $empleado['sexo']."</td>";
						echo "<td>". $empleado['area_id']."</td>";
						echo "<td>". $empleado['boletin']."</td>";

					    echo "<th> <a href='".getUrl('Parametros','Empleados','getEliminar',array("empleado_id"=>$empleado['empleado_id']))."'><button type='submit' class='btn btn-danger' title='Aceptar'>eliminar</button></a></th>";
						echo "<th><a href='".getUrl('Parametros','Empleados','getEditar',array("empleado_id"=>$empleado['empleado_id']))."'><button class='btn btn-warning'>modificar</button></a></th>";
						echo "</tr>";	
					}		
					?>
			</tbody>
</div>