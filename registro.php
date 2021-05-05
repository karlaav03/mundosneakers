<?php 
	
	require_once "clases/Conexion.php";
	$obj= new conectar();
	$conexion=$obj->conexion();

	$sql="SELECT * from usuarios where email='admin'";
	$result=mysqli_query($conexion,$sql);
	$validar=0;
	if(mysqli_num_rows($result) > 0){
		header("location:index.php");
	}
 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Registro</title>
	<link rel="stylesheet" type="text/css" href="librerias/bootstrap/css/bootstrap.css">
	<script src="librerias/jquery-3.2.1.min.js"></script>
	<script src="js/funciones.js"></script>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Spartan:wght@500&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@300&family=Spartan:wght@500&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@500&display=swap" rel="stylesheet">

</head>
<body style="background: radial-gradient(circle, rgba(219,219,180,1) 0%, rgba(224,150,129,1) 74%, rgba(247,88,48,0.6951155462184874) 100%);">
	<br><br><br>
	<div class="container">
		<div class="row">
			<div class="col-sm-4"></div>
			<div class="col-sm-4">
				<div class="panel panel-danger">
					<div class="panel panel-heading" style="background-color:#000; color:#fff; font-family: 'Spartan', sans-serif; font-size:1em;">Registrar Administrador</div>
					<div class="panel panel-body">
						<form id="frmRegistro">
							<label style="font-family: 'Raleway', sans-serif;">Nombre</label>
							<input type="text" class="form-control input-sm" name="nombre" id="nombre">
							<label style="font-family: 'Raleway', sans-serif;">Apellido</label>
							<input type="text" class="form-control input-sm" name="apellido" id="apellido">
							<label style="font-family: 'Raleway', sans-serif;">Usuario</label>
							<input type="text" class="form-control input-sm" name="usuario" id="usuario">
							<label style="font-family: 'Raleway', sans-serif;">Password</label>
							<input type="text" class="form-control input-sm" name="password" id="password">
							<p></p>
							<span class="btn btn-primary" id="registro" style="background-color: salmon; border-color:salmon; font-family: 'Raleway', sans-serif">Registrar</span>
							<a href="index.php" class="btn btn-default"><span style="color: white; color:black; font-family: 'Raleway', sans-serif">Regresar</a>
						</form>
					</div>
				</div>
			</div>
			<div class="col-sm-4"></div>
		</div>
	</div>
</body>
</html>

<script type="text/javascript">
	$(document).ready(function(){
		$('#registro').click(function(){

			vacios=validarFormVacio('frmRegistro');

			if(vacios > 0){
				alert("Debes llenar todos los campos");
				return false;
			}

			datos=$('#frmRegistro').serialize();
			$.ajax({
				type:"POST",
				data:datos,
				url:"procesos/regLogin/registrarUsuario.php",
				success:function(r){
					alert(r);

					if(r==1){
						alert("Agregado con exito");
					}else{
						alert("Error al agregar");
					}
				}
			});
		});
	});
</script>

