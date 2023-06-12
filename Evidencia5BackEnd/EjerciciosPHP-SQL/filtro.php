  <?php

  include_once "Conexion.php";


  $sqlTodas = "SELECT * FROM usuarios WHERE nombre LIKE CONCAT('%', :nombre, '%') AND apellido LIKE CONCAT('%', :apellido, '%') AND cedula LIKE CONCAT('%', :cedula, '%');";
  $statementPDOtodas = $ObjetConexion->prepare($sqlTodas);


  $SQLsearch = "SELECT * FROM usuarios WHERE nombre LIKE CONCAT('%', :search, '%') OR apellido LIKE CONCAT('%', :search, '%') OR cedula LIKE CONCAT('%', :search, '%');";
  $statementPDOsearch = $ObjetConexion->prepare($SQLsearch);

  



  ?>
  <!DOCTYPE html>
  <html lang="en">
    <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>Filtrar</title>
      <link rel="stylesheet" href="../EjerciciosPHP-Puro/css/Tabla.css" />
      
    </head>
    <body>
      
      <div class="container">
      <h1>Tabla usuarios</h1>
        <div class="top">
          <select name="NoHaceNada" id="deMas">
            <option value="blanco">Export basic</option>
            <option value="colores" id="colores">Es de lujo</option>
          </select>
          <div class="rigth">
            <input type="text" placeholder="Search" id="search"/>
            <img src="img/share.svg" class="icon" />
          </div>
        </div>
      
        <div class="tabla">
          <table id="table_big">
            <thead>
              <tr>
                <th>
                  Nombre
                  <br /><input name="nombre" id="nombre"/>
                </th>
                <th>
                  Apellido
                  <br /><input name="apellido" id="apellido"/>
                </th>
                <th>
                  Cédula
                  <br /><input name="cedula" id="cedula"/>
                </th>
              </tr>
            
                  
            </thead>
            <script>
              
                        var inputNombre = document.getElementById("nombre");
                        var inputApellido = document.getElementById("apellido");
                        var inputCedula = document.getElementById("cedula");
                        var inputSearch = document.getElementById("search");


                       document.addEventListener("keyup",function(){
                          if(event.key ==="Enter"){
                            enviarFiltro();
                          }
                        }
                        
                        );
                        

                        function enviarFiltro() {
                          var nombre = inputNombre.value;
                          var apellido = inputApellido.value;
                          var cedula = inputCedula.value;
                          var search = inputSearch.value;

                          window.location.href = "filtro.php?nombre=" + encodeURIComponent(nombre) + "&apellido=" +
                          encodeURIComponent(apellido) + "&cedula=" + encodeURIComponent(cedula) + "&search=" + encodeURIComponent(search);

                        };
                        

            </script>
            <tbody>

              <tr>
                <td>-</td>
                <td>-</td>
                <td>-</td>

              </tr>
              <?php
                      $nombre = $_GET["nombre"];
                      $apellido = $_GET["apellido"];
                      $cedula = $_GET["cedula"];
                      $search = $_GET['search'];


                     if(strlen($nombre)<=0 && strlen($apellido)<=0 &&strlen($cedula)<=0){
                     
                      
                       $OKsearch = $statementPDOsearch->execute(array(':search' => $search));            
                                                    
                       if($OKsearch){
                         $tableVirtual2 = $statementPDOsearch->fetchAll(PDO::FETCH_ASSOC);
 
                         foreach ($tableVirtual2 as $nomColum2) {
                           $nombreBBDD = $nomColum2['nombre'];
                           $apellidoBBDD = $nomColum2['apellido'];
                           $cedulaBBDD = $nomColum2['cedula'];
 
                           echo "
                             <tr>
                             <td> $nombreBBDD </td>
                             <td> $apellidoBBDD </td>
                             <td> $cedulaBBDD </td>
                             </tr>
                               ";
                          }
                         }
                     }else{
                      
                      $OKtodas = $statementPDOtodas->execute(array(':nombre' => $nombre, ':apellido' => $apellido, ':cedula' => $cedula));
 
                      if($OKtodas){
                        $tableVirtualTodas = $statementPDOtodas->fetchAll(PDO::FETCH_ASSOC);
                        foreach($tableVirtualTodas as $nomColum){
                          $nombreBBDD = $nomColum['nombre'];
                          $apellidoBBDD = $nomColum['apellido'];
                          $cedulaBBDD = $nomColum['cedula'];
                          echo "
                          <tr>
                          <td> $nombreBBDD </td>
                          <td> $apellidoBBDD </td>
                          <td> $cedulaBBDD </td>
                          </tr>
                            ";

                        }
                      }


                     }

                      

                     
                                              
                        
                      
                       

                      
                      
              ?>     
              
            </tbody>
          </table>
          

        </div>
        <h1>Enter: Todos los registros</h1>
      </div>
    </body>
    
  </html>


