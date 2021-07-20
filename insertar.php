<?php
require_once "header.php";
?>
<!-- Page Content -->
<div class="container">
  <div class="card border-0 shadow my-5">
    <div class="card-body p-5">
      <h1 class="font-weight-light">insertar datos con php a mysql usando mysqli</h1>
        <p class="lead">
           para poder insetar datos solo necesitamos crear la cadena de sql valida, y ejecutarla con una conexion valida
           los parametros ha ser insertados deben ir en variables como convencion, no necesitamos mas que saber la respesta
           de mysql_query para sabber si se llevo acabo la conexion
        
        </p>
        <h3>ejemplo de como inster con php a mysql</h3>
        <p>
            $sql ="insert into t_table (campo1,campo2) values ('$variable1','variable2')"
            <br>$respuesta = mysqli_query($conexion,$sql);
            <br>la variable $respuesta nos retornara un 1 o 0 si se ejecuto o  no , asi sabremos si se logro 
        </p>
    </div>
  </div>
</div>

<?php
include "footer.php";
?>