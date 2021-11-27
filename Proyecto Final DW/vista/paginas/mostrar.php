<?php

  $conexion=mysqli_connect('localhost','root','','disewebii');

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar datos</title>
    <!-- css -->
	<link href="../css/tabla.css" rel="stylesheet" type="text/css">
	<!-- Iconos -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- Slider -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
</head>
<body>
<div class="space-line"></div>
	
	<div class="header">
		<div class= "logo">
			<img src="../img/logo/logo1.jpeg" class="logo1" alt="logo">
		</div>
		
		<nav class="menu">
			<a hraf="#" id="menu-icon">
				<i class="fa fa-bars"></i>
			</a>
		<ul>
			<li>
				<a href="../../index.html">Home</a>
			</li>
			<li>
				<a href="admin.html">Admin</a>
			</li>
			<li>
				<a href="#"><i class="fa fa-user"></i></a>
			</li>
		</ul>
		</nav>
	</div>
    <br>

    <div class="centrar">

    <h1 class="tabtex" >Tabla de empleados</h1>
        <table>
            <tr>
                <td>ci</td>
                <td>nombre</td>
                <td>apellidos</td>
                <td>direccion</td>
                <td>cargo</td>
                <td>edad</td>
                <td>telefono</td>
            </tr>

            <?php
            $sql="SELECT * from personal";
            $result=mysqli_query($conexion,$sql);

            while($mostrar=mysqli_fetch_array($result)){

            ?>


            <tr>
                <td><?php echo $mostrar['ci']?></td>
                <td><?php echo $mostrar['nombre']?></td>
                <td><?php echo $mostrar['apellidos']?></td>
                <td><?php echo $mostrar['direccion']?></td>
                <td><?php echo $mostrar['cargo']?></td>
                <td><?php echo $mostrar['edad']?></td>
                <td><?php echo $mostrar['telefono']?></td>

            </tr>
          <?php
            }
             ?>  


        </table>

        <br>
        <br>
        
            <h1 class="tabtex" >Lista de compras</h1>

        <table>
            <tr>
                <td>Nombre</td>
                <td>Apellidos</td>
                <td>Edad</td>
                <td>Telefono</td>
                <td>Direccion</td>
                <td>Metodo de pago</td>
                <td>Tipo de compra</td>
                <td>Tiempo</td>
                <td>Ubicacion de nicho</td>
                
            </tr>

            <?php
            $sqltodo="SELECT datos.nombre,datos.apellidos,datos.edad,datos.telefono,datos.direccion,compra.metodopago,compra.tipo,compra.tiempo,compra.nronicho FROM datos INNER JOIN compra ON datos.ci=compra.ciusu";
          
            $resultdo=mysqli_query($conexion,$sqltodo);

            while($mostrartodo=mysqli_fetch_array($resultdo)){

            ?>


            <tr>
                <td><?php echo $mostrartodo['nombre']?></td>
                <td><?php echo $mostrartodo['apellidos']?></td>
                <td><?php echo $mostrartodo['edad']?></td>
                <td><?php echo $mostrartodo['telefono']?></td>
                <td><?php echo $mostrartodo['direccion']?></td>
                <td><?php echo $mostrartodo['metodopago']?></td>
                <td><?php echo $mostrartodo['tipo']?></td>
                <td><?php echo $mostrartodo['tiempo']?></td>
                <td><?php echo $mostrartodo['nronicho']?></td>
               

            </tr>
          <?php
            }
             ?>  


        </table>
    
    </div>
   
</body>
</html>