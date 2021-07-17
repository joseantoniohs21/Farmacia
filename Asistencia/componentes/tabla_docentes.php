
    <table class="table">
        <thead class="thead-light">
            <tr Class="text-center">
            <th scope="col">DNI</th>
            <th scope="col">NOMBRE Y APELLIDOS</th>
            <th scope="col">CORREO</th>
            <th scope="col">CODIGO</th>
            <th scope="col">DEP ACADEMICO</th>
            <th scope="col">CONDICION</th>
            <th scope="col">CATEGORIA</th>
            <th scope="col">CLASE</th>
            </tr>
        </thead>
        <tbody class="text-center">
        <?php 
    require_once "../php/conexion.php";
	$conexion=conexion();
    $sql="SELECT * FROM docente ORDER BY docente.dni DESC";
    $query=mysqli_query($conexion,$sql);
    while($ver=mysqli_fetch_row($query)){
        
    
    ?>
            <tr>
            <th scope="row"><?php echo $ver[0]; ?></th>
            <td><?php echo $ver[1]; ?></td>
            <td><?php echo $ver[2]; ?></td>
            <td><?php echo $ver[3]; ?></td>
            <td><?php echo $ver[4]; ?></td>
            <td><?php echo $ver[5]; ?></td>
            <td><?php echo $ver[6]; ?></td>
            <td><?php echo $ver[7]; ?></td>
            </tr>
            <?php }?>
         
        </tbody>
        </table>    
 </div>
