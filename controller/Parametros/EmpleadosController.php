<?php
include_once '../model/Parametros/EmpleadosModel.php';

class EMpleadosController{

private $objCD;

public function __construct(){
$this->objCD= new EmpleadosModel();	
}

public function index(){	
$empleados=$this->objCD->consultar("*","empleados");
include_once '../view/Parametros/Empleados/index.php';
}

public function getCrear(){
$Area=$this->objCD->consultar("*","areas");

include_once '../view/Parametros/Empleados/crear.php';

}
public function postCrear(){
	$nombre=filter_input(INPUT_POST,'nombre',FILTER_SANITIZE_SPECIAL_CHARS);
	$email=filter_input(INPUT_POST,'email',FILTER_SANITIZE_SPECIAL_CHARS);
	$sexo=filter_input(INPUT_POST,'sexo',FILTER_SANITIZE_SPECIAL_CHARS);
	$area_id=filter_input(INPUT_POST,'area_id',FILTER_SANITIZE_SPECIAL_CHARS);
	$descripcion=filter_input(INPUT_POST,'descripcion',FILTER_SANITIZE_SPECIAL_CHARS);
	 $this->objCD->insertar('empleados','nombre,email,sexo,area_id,descripcion',"'$nombre','$email','$sexo','$area_id','$descripcion'");
	//dd($_POST);
	redirect(getUrl('Parametros','Empleados','index'));
}
public function getEditar(){
$empleado_id=filter_input(INPUT_GET,'empleado_id',FILTER_SANITIZE_SPECIAL_CHARS);
$empleadoedit=$this->objCD->consultar("*","empleados","empleado_id=$empleado_id");
//$paises=$this->objCD->consultar("*","pais");
include_once '../view/Parametros/Empleados/editar.php';
	
	
}
public function postEditar(){
	
	$empleado_id=filter_input(INPUT_POST,'empleado_id',FILTER_SANITIZE_SPECIAL_CHARS);
	$nombre=filter_input(INPUT_POST,'nombre',FILTER_SANITIZE_SPECIAL_CHARS);
	$sexo=filter_input(INPUT_POST,'sexo',FILTER_SANITIZE_SPECIAL_CHARS);
	$descripcion=filter_input(INPUT_POST,'descripcion',FILTER_SANITIZE_SPECIAL_CHARS);
	$this->objCD->editar("empleados","empleado_id=$empleado_id",array("nombre"=>"'$nombre'","sexo"=>"'$sexo'","descripcion"=>"'descripcion'"));
	
	redirect(getUrl('Parametros','Empleados','index'));
	
	
}
public function getEliminar(){
	
$empleado_id=filter_input(INPUT_GET,'empleado_id',FILTER_SANITIZE_SPECIAL_CHARS);
$empleadoeli=$this->objCD->consultar("*","empleados","empleado_id=$empleado_id");
include_once '../view/Parametros/Empleados/eliminar.php';	
	
	
	
}
public function postEliminar(){
$empleados=filter_input(INPUT_POST,'empleado_id',FILTER_SANITIZE_SPECIAL_CHARS);
$this->objCD->eliminar('empleados',"empleado_id=$empleados");
//dd($_post);
redirect(getUrl('Parametros','Empleados','index'));	
}
}

?>