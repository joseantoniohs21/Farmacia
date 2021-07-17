<?php 
	

	require_once "conexion.php";
	$conexion=conexion();

       
	$dni=mysqli_real_escape_string($conexion,$_POST['dni']);
	$cod_esc=mysqli_real_escape_string($conexion,$_POST['lista1']);
	$cod_asig=mysqli_real_escape_string($conexion,$_POST['select2lista']);	
	$act_ffb=mysqli_real_escape_string($conexion,$_POST['act_ffb']);
	$hini_ffb=mysqli_real_escape_string($conexion,$_POST['hini_ffb']);
	$hfin_ffb=mysqli_real_escape_string($conexion,$_POST['hfin_ffb']);
	

	$sql="INSERT INTO registro (dni,cod_esc,cod_asig,act_ffb,hini_ffb,hfin_ffb) VALUES ('$dni','$cod_esc','$cod_asig','$act_ffb','$hini_ffb','$hfin_ffb')";

	echo $result = mysqli_query($conexion,$sql);
	mysqli_close($conexion);

 ?>