<?php
require_once "header.php";
?>
<!-- Page Content -->
<div class="container">
  <div class="card border-0 shadow my-5">
    <div class="card-body p-5">
      <h1 class="font-weight-light">ejecutar query con mysqli</h1>
        <p class="lead">
           para poder ejecutar un query de pho al serivdor de base de datos mysql o mariadb requerimos utilizar  la function
           mysql_query esta ya viene en la API  nativo  de php  que ya viene en la version 5 o superiror la cual require
           dos parametros
           <ol>
               <li>conexion al servidor</li>
               <li>cade de sql valida</li>
           </ol>
           <h3>ejemplo de uso </h3>
           <p> 
               $sql="select campo1, campo2 *from t_table";
               <br>$respuesta= mysqli_query($conexion, $sql);
               <p>
                   siendo $sql la variable que contiene la cedena que forma un sql valido, la variable $respuesta
                   obtine un 1 o 0 dependidendo de mysql_query se ejecuto correctamente , la variable de $conexion
                   esta expuesta a <a href="conexion.php">aqui</a>
               </p>
               <p>
                   entiendase que cualquier cadena sql que se desee ejecutrar(select, delet, update, insert), debe ser pasada
                   a la funcion mysql_query,
                   siempre que se necesite hacer una peticion
               </p>
           </p>
        </p>
    </div>
  </div>
</div>

<?php
include "footer.php";
?>