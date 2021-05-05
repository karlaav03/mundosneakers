<?php 
	
	require_once "clases/Conexion.php";
	$obj= new conectar();
	$conexion=$obj->conexion();

	$sql="SELECT * from usuarios where email='admin'";
	$result=mysqli_query($conexion,$sql);
	$validar=0;
	if(mysqli_num_rows($result) > 0){
		$validar=1;
	}
 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Login de usuario</title>
	<link rel="stylesheet" type="text/css" href="librerias/bootstrap/css/bootstrap.css">
	<script src="librerias/jquery-3.2.1.min.js"></script>
	<script src="js/funciones.js"></script>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Spartan:wght@500&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@300&family=Spartan:wght@500&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@500&display=swap" rel="stylesheet">


</head>
<body style="background: linear-gradient(90deg, rgba(219,219,180,1) 0%, rgba(224,150,129,1) 35%, rgba(255,51,0,0.6951155462184874) 100%);">
	<br><br><br>
	<div class="container">
		<div class="row">
			<div class="col-sm-4"></div>
			<div class="col-sm-4">
				<div class="panel panel-primary" style="background-color: salmon; border-color:salmon;">
					<div class="panel panel-heading" style="background-color: salmon; border-color:salmon"><p style="font-family: 'Spartan', sans-serif; font-size:1.7em;"> Mundo Sneakers</p><p style="font-family: 'Sarabun', sans-serif;">Sistema de ventas</p></div>
					<div class="panel panel-body">
						<p>
							<img src="img/ventas.png"  height="190">
						</p>
						<form id="frmLogin">
							<label style="font-family: 'Sarabun', sans-serif;">Usuario</label>
							<input type="text" class="form-control input-sm" name="usuario" id="usuario">
							<label style="font-family: 'Sarabun', sans-serif;">Password</label>
							<input type="password" name="password" id="password" class="form-control input-sm">
							<p></p>
							<span style="background-color: white; color: black; font-family: 'Raleway', sans-serif" class="btn btn-primary btn-sm" id="entrarSistema">Entrar</span>
							<?php  if(!$validar): ?>
							<a href="registro.php" class="btn btn-danger btn-sm"><span style="color: white; font-family: 'Raleway', sans-serif"> Registrar</span></a>
							<?php endif; ?>
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
		$('#entrarSistema').click(function(){

		vacios=validarFormVacio('frmLogin');

			if(vacios > 0){
				alert("Debes llenar todos los campos");
				return false;
			}

		datos=$('#frmLogin').serialize();
		$.ajax({
			type:"POST",
			data:datos,
			url:"procesos/regLogin/login.php",
			success:function(r){

				if(r==1){
					window.location="vistas/inicio.php";
				}else{
					alert("No se pudo acceder");
				}
			}
		});
	});
	});
</script>