<?php 
	session_start();
	if(isset($_SESSION['usuario'])){
		
 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Inicio</title>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Spartan:wght@500&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@300&family=Spartan:wght@500&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@500&display=swap" rel="stylesheet">
	<style type="text/css">

		h1{
			color: #ffffff; 
			font-family: 'Raleway',sans-serif; 
			font-size: 62px; 
			font-weight: 800; 
			line-height: 72px; 
			margin: 0 0 24px; 
			text-align: center; 
			text-transform: uppercase; 
		}
		table{
		width:100%;
		table-layout: fixed;
		}
		.tbl-header{
		background-color: rgba(255,255,255,0.3);
		}
		.tbl-content{
		height:auto;
		overflow-x:auto;
		margin-top: 0px;
		border: 1px solid rgba(255,255,255,0.3);
		}
		th{
		padding: 20px 15px;
		text-align: left;
		font-weight: 500;
		font-size: 12px;
		color: #000;
		text-transform: uppercase;
		}
		td{
		padding: 15px;
		text-align: left;
		vertical-align:middle;
		font-weight: 300;
		font-size: 12px;
		color: #000;
		border-bottom: solid 1px rgba(255,255,255,0.1);
		}
		td:hover {
		background-color: rgba(255,255,255,0.3);
}


		@import url(https://fonts.googleapis.com/css?family=Roboto:400,500,300,700);
		body{
		background: linear-gradient(90deg, rgba(219,219,180,1) 0%, rgba(224,150,129,1) 35%, rgba(255,51,0,0.6951155462184874) 100%);;
		font-family: 'Raleway', sans-serif !important;
		}
		section{
		margin: 50px;
		}


		/* follow me template */
		.made-with-love {
		margin-top: 40px;
		padding: 10px;
		clear: left;
		text-align: center;
		font-size: 10px;
		font-family: 'Raleway', sans-serif !important;
		color: #fff;
		}
		.made-with-love i {
		font-style: normal;
		color: #F50057;
		font-size: 14px;
		position: relative;
		top: 2px;
		}
		.made-with-love a {
		color: #fff;
		text-decoration: none;
		}
		.made-with-love a:hover {
		text-decoration: underline;
		}


		/* for custom scrollbar for webkit browser*/

		::-webkit-scrollbar {
			width: 6px;
		} 
		::-webkit-scrollbar-track {
			-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
		} 
		::-webkit-scrollbar-thumb {
			-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
		}
	</style>
	<?php require_once "menu.php"; ?>
</head>
<body> 



<section>
  <h1>Departamentos</h1>
  <div class="tbl-header">
    <table cellpadding="0" cellspacing="0" border="0">
      <thead>
        <tr>
		<th>Nombre</th>
				<th>Cantidad de empleados</th>
				<th>Administrador a cargo</th>
				<th>Empleado del mes</th>
				<th>Eficiencia</th>
        </tr>
      </thead>
    </table>
  </div>
  <div class="tbl-content">
    <table cellpadding="0" cellspacing="0" border="0">
      <tbody>
        <tr>
		<td>Sistemas</td>
				<td>6</td>
				<td>José Luis Bodillo Pérez</td>
				<td>Manuel Rodríguez Sánchez</td>
				<td>70.4%</td>
				</tr>
				<tr>
				<td>Ventas</td>
				<td>4</td>
				<td>Carlos Ferrera Ortega</td>
				<td>Victor Hugo Alejo Guerrero</td>
				<td>43.7%</td>

				</tr>
				<tr>
				<td>Compras</td>
				<td>4</td>
				<td>Katia Aguilar Aceves</td>
				<td>María del Rosario Alemán Navarro</td>
				<td>89.3%</td>
				</tr>
				<tr>
				<td>Finanzas</td>
				<td>2</td>
				<td>Hannia Sanchez Cortes</td>
				<td>Verónica Martínez Villanueva</td>
				<td>59.2%</td>
				</tr>
				<tr>
				<td>RH</td>
				<td>4</td>
				<td>Gerard Ortiz Gutierrez</td>
				<td>Alí López Santos</td>
				<td>38.0%</td>				
				</tr>
				<tr>
				<td>Caja</td>
				<td>2</td>
				<td>Rosario Téllez Flores</td>
				<td>Ramiro Arturo García Barboza</td>
				<td>93.2%</td>
        </tr>
      </tbody>
    </table>
  </div>
  <br><br><br><br>
  		<img src="../img/bannerind1.png" alt="" width="300px" height="300px"><img src="../img/bannerind2.png" alt="" width="300px" height="300px"><img src="../img/bannerind3.png" alt="" width="300px" height="300px"><img src="../img/bannerind.png" alt="" width="300px" height="300px">
</section>
</body>
</html>
<?php 
	}else{
		header("location:../index.php");
	}
 ?>