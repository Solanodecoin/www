<?php session_start(); 

if(isset($_SESSION['usuario'])){ ?>
<!DOCTYPE html>
<html lang="en">
  <a href="cerrarsesion.php">Cerrar sesion</a>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  
</head>

  <?php
      

       echo "<body>

       <div style='background-color: lightblue;'>
         <div >
           <h1 >GESTCLIENT</h1>
           <h2>Gestión de clientes de CertiBank</h2>";
       $conn = mysqli_connect("db", "root", "test", "banco");
     

      //obtener la acción del botón que se ha pulsado en el formulario
      


      // Dar de baja un cliente
      if (isset($_GET['accion']) && $_GET['accion'] == 'borrar') {
      //hacer llamada a BD con la consulta oportuna
      if (isset($_GET['dni'])){ 
  
        $dni = $_GET['dni'];
        $insertStatament = $conn->prepare('DELETE FROM cliente WHERE dni = ?');
        $insertStatament->bind_param('s', $dni);
        $insertStatament->execute();
        $insertStatament->close();
      }


        echo "Has pulsado borrar";
      }

      // Dar de alta un cliente
      if (isset($_GET['accion']) && $_GET['accion'] == 'crear') {
      //hacer llamada a BD con la consulta oportuna



        $dni = $_GET['dni'];
        $telefono = $_GET['telefono'];
        $direccion = $_GET['direccion'];
        $nombre = $_GET['nombre'];

        $statament = $conn->stmt_init();
        $statament->prepare('SELECT dni FROM cliente where dni = ?');
        $statament-> bind_param('s', $dni);
        $statament->execute();
        $tabla_dni = $statament->get_result();

        

        if ($tabla_dni-> num_rows > 0 ){
         
          echo "El DNI asignado al nuevo usuario ya existe";

        }else{ 
          $insertStatament = $conn->prepare('INSERT INTO cliente(dni,nombre,direccion,telefono) values (?, ?, ?, ?)');
          $insertStatament->bind_param('ssss', $dni, $nombre, $direccion, $telefono);
          $insertStatament->execute();
          $insertStatament->close();
          }
       }
        
      // Modificar un cliente
      if (isset($_GET['accion']) && $_GET['accion'] == 'modificar') {
       //hacer llamada a BD con la consulta oportuna
        $dni = $_GET['dni'];
        $telefono = $_GET['telefono'];
        $direccion = $_GET['direccion'];
        $nombre = $_GET['nombre'];
        $dni2 = $dni;
       

        $insertStatament = $conn->prepare('UPDATE cliente  SET dni = ?, nombre = ?, direccion = ?, telefono = ? WHERE dni = ?');
        $insertStatament->bind_param('sssss', $dni, $nombre, $direccion, $telefono, $dni2);
        $insertStatament->execute();
        $insertStatament->close();

      }
    
      // Listado
      //Este listado se muestra siempre
      //hacer llamada a BD con la consulta del listado de clientes
      $consulta;
    
  
      ?>

      <table >
        <tr>
          <th>DNI</th>
          <th>Nombre</th>
          <th>Dirección</th>
          <th>Teléfono</th>
          <th></th>
        </tr>

        <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="GET">
          <tr>
            <td><input type="text" name="dni"></td>
            <td><input type="text" name="nombre"></td>
            <td><input type="text" name="direccion"></td>
            <td><input type="text" name="telefono"></td>
            <input type="hidden" name="accion" value="crear">
            <td><input type="submit" value="Añadir"></td>
            

          </tr>
        
        </form>

        <?php
        //mostrar los clientes de la bd en la tabla

        $statament = $conn->stmt_init();
        $statament->prepare('SELECT dni,nombre,direccion,telefono FROM cliente');
        $statament->execute();
        $resultado = $statament->get_result();
       
        while ($registro = $resultado -> fetch_assoc()  ) {
          //hay que modificar el array() y cambiarlo por el código adecuado
        echo "<tr>
            <td>".$registro['dni']." </td>
            <td>". $registro['nombre']." </td>
            <td>". $registro['direccion']." </td>
            <td>". $registro['telefono']." </td>
            <td>
              <a href=\"modificar.php?&dni=". $registro['dni'] ."&nombre=". $registro['nombre'] ."&direccion=". $registro['direccion'] . "&telefono=". $registro['telefono']." \">
                <button >Modificar</button>
              </a>
            </td>
            <td>
              <a href=\"index.php?accion=borrar&dni=". $registro['dni']."\">
                <button>
                  <img width='20px' src='papelera.png' >
                </button>
              </a>
            </td>
          </tr>";
        
        }
        ?>
      </table>
    </div>
  </div>



</body>

</html>

<?php }else{
        print 'No has iniciado sesion';
        }?>