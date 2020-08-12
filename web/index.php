<?php include_once '../lib/helpers.php'; ?>
<?php if(isset($_SESSION['auth'])){?>
<?php include_once '../view/Partials/head.php'; ?>
<?php include_once '../view/Partials/header.php'; ?>
<?php include_once '../view/Partials/sidebar.php'; ?>
<!--main-container-part-->
<div id="content">
<!--breadcrumbs-->
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a></div>
  </div>
<!--End-breadcrumbs-->
<!--Action boxes-->
  <div class="container-fluid">   
<!--End-Action boxes-->     
    <div class="row-fluid">
      <div class="span6"> 
		<?php
		if(isset($_GET['modulo'])){
			resolve();
			
		}
		
		?>
      </div>
    </div>
  </div>
</div>
<!--end-main-container-part-->
<?php include_once '../view/Partials/footer.php'; ?>
<?php
}
else{
	if(isset($_GET['modulo'])){
		if($_GET['modulo']=="Login" and $_GET['controlador']=="Login" and $_GET['funcion']=="ingresar"){
			resolve();
		}
		
	}
	redirect("login.php");
}

?>
