 <!--Sesiones -->
  <?php
session_start();

if(isset($_SESSION['u_usuario'])){
  // echo "Bienvenido";
  // echo " " . $_SESSION['u_usuario'];

}
else{
  header("Location: ../index.php");
}
?>
  <!--fin sesiones -->

<!DOCTYPE html>
<html lang="en">
    <head> 
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">

    <!-- Website CSS style -->
    <link rel="stylesheet" type="text/css" href="../css/registro.css">

    <!-- Website Font style -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
    
    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>

    <title>JMFIT Nutrition</title>
  </head>
  <body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header page-scroll">
                <a class="navbar-brand page-scroll" href="#page-top">
                    <img src="../logo/titulo-gran1.png" class="img-fluid" alt="Logo" width="25%">
                </a>
                <span class="pull-right">&nbsp;<a href='cerrar_sesion.php'><i class="fa fa-sign-out fa-3x" aria-hidden="true" title='Cerrar sesión'></i></a></span>
                
               
        </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse navbar-ex1-collapse">
            
               
            </div>
            <!-- /.navbar-collapse -->
      
        <!-- /.container -->
    </nav>

<br/>
<br/>
<br/>
<br/>
<!--div arriba-->

  <!--div arriba-->
  
    <!-- tabla admin para usuarios- -->
<div class="container">
<div class="row centered-form">
  <h2>Administrar Usuarios</h2>
  <p>Modificación / bajas Usuarios</p>
  <table class="table">
    <thead>
      <tr>
        <th>Id Usuario</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Segundo Apellido</th>
        <th>Fecha nacimiento</th>
        <th>Peso (CM)</th>
        <th>Altura (CM)</th>
        <th>Sexo</th>
        <th>Teléfono</th>
        <th>Email</th>
        <th>Password</th>
        <th>Categoría</th>
         <th>Comentario</th>
        <th><a href="agregar_cliente.php"> <i class="fa fa-user-plus fa-2x" aria-hidden="true"></i></a></th>
      </tr>
    </thead>
     <?php
      include("conexion.php");
      $query="SELECT * FROM tbl_cliente";
      $resultado=$conexion->query($query);
      while($row=$resultado-> fetch_assoc()){
      ?>
    <tbody>
         
     <tr class="info">
     <td><?php echo $row['cliente_id']; ?></td>
     <td><?php echo $row['cliente_nombre']; ?></td>
     <td><?php echo $row['cliente_apellido1']; ?></td>
     <td><?php echo $row['cliente_apellido2']; ?></td>
     <td><?php echo $row['cliente_fecha']; ?></td>
     <td><?php echo $row['cliente_peso']; ?></td>
     <td><?php echo $row['cliente_altura']; ?></td>
     <td><?php echo $row['cliente_sexo']; ?></td>
     <td><?php echo $row['cliente_telefono']; ?></td>
     <td><?php echo $row['cliente_email']; ?></td>
     <td><?php echo $row['cliente_password']; ?></td>
     <td><?php echo $row['cliente_categoria']; ?></td>
     <td><?php echo $row['coment']; ?></td>
     <?php $cliente_id=$row['cliente_id']; ?>
      <td><a href="modificar_cliente.php?cliente_id=<?php echo $cliente_id; ?>"><i class="fa fa-pencil fa-2x" aria-hidden="true"></i></a></td>
      <td><a href="eliminar_cliente.php?cliente_id=<?php echo $cliente_id; ?>"><i class="fa fa-trash fa-2x" aria-hidden="true"></i></a></td>
      </tr>

      <?php
      }
      ?>
          
    </tbody>
  </table>
</div>
   <!-- Footer -->
<?php
include("footer.php");
?>
    <script type="text/javascript" src="../js/bootstrap.js"></script>
  </body>
</html>