<?php 
	

	require_once "conexion.php";
	$conexion=conexion();
    
	

	$dni=mysqli_real_escape_string($conexion,$_POST['dni']);
	$nom_ffb=mysqli_real_escape_string($conexion,$_POST['nom_ffb']);	
	$email_ffb=mysqli_real_escape_string($conexion,$_POST['email_ffb']);
	$cod_ffb=mysqli_real_escape_string($conexion,$_POST['cod_ffb']);
	$dep_ffb=mysqli_real_escape_string($conexion,$_POST['dep_ffb']);
	$con_ffb=mysqli_real_escape_string($conexion,$_POST['con_ffb']);
	$cat_ffb=mysqli_real_escape_string($conexion,$_POST['cat_ffb']);
	$clas_ffb=mysqli_real_escape_string($conexion,$_POST['clas_ffb']);

	$sql="INSERT INTO docente (dni,nom_ffb,email_ffb,cod_ffb,dep_ffb,con_ffb, cat_ffb,clas_ffb) VALUES ('$dni','$nom_ffb','$email_ffb','$cod_ffb','$dep_ffb','$con_ffb','$cat_ffb','$clas_ffb')";

	echo $result = mysqli_query($conexion,$sql);
	mysqli_close($conexion);

 ?>