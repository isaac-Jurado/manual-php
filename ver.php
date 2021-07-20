<?php
require_once "header.php";
?>
<!-- Page Content -->
<div class="container">
  <div class="card border-0 shadow my-5">
    <div class="card-body p-5">
      <h1 class="font-weight-light">maneras de mostrar datos con php y MySQLi</h1>
        <p class="lead">
            <h3>mostrar datos con mysqli_fetch_row</h3>
            <p>esta funcion nos permitira convertir una consulta mysql a un arreglo de dimensin,por lo tanto podemos
              obtener el valor de un campo  de la consulta por medio de un indice, la funcion mysqli_fetch_row
              lleva como parametro una respuesta de ejecucion mysql y un objeto de conexion
            </p> 
            <h3>ejemplo de mysqli_fetch_row</h3>
            <p>
              $slq="SELECT campo1, campo2, campo3 From t_table";
              <br>$respuesta=mysqli_query($conexion, $slq);
              <br>$datos = $mysqli_fetch_row($respuesta);
              <br>echo $datos[0];//esto nos retorna la informacion del campo1
            </p>
            <p>
              <h3>ejemplo de loop de datos  con mysqli_fetch_row</h3>
              <p>
                while($datos=mysqli_fetch_row(respuesta)){mientras datos sea ejecutado, continuara
                  <br>echo $datos[0];//esto permite obtener todos los datos de la columna

                }
              </p>
            </p>
            <hr>
            <h3>mostrar datos con mysqli_fetch_array</h3>
            <p>
              esta funcion nos permitira convertir una consulta mysql a un arreglo asociativo,por lo tanto podemos
              obtener el valor de un campo  de la consulta por medio de una llave, la funcion mysqli_fetch_array
              lleva como parametro una respuesta de ejecucion mysql y un objeto de conexion
            </p>

            <h3>ejemplo de loop de datos  con mysqli_fetch_arry</h3>
              <p>
                <br>$slq="SELECT campo1, campo2, campo3 From t_table";
                <br>$respuesta=mysqli_query($conexion, $slq);
                while($datos=mysqli_fetch_aary(respuesta)){mientras datos sea ejecutado, continuara
                  <br>echo $datos['campo1'];//esto permite obtener todos los datos de la columna

                }
              </p>
        </p>
    </div>
  </div>
</div>

<?php
include "footer.php";
?>