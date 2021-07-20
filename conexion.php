<?php
require_once "header.php";
?>
<!-- Page Content -->
<div class="container">
  <div class="card border-0 shadow my-5">
    <div class="card-body p-5">
      <h1 class="font-weight-light">Conectar a MySQL con php</h1>
        <p class="lead">
            <h3>cuales son los argumentos o paramaetros necesarios para la conexion</h3>
            <p>
                para poder llevar acabo la conexin requeiro 4 argumentos
                <ol>
                    <li>el servidor que normalmente es una ip, o un dominio o localhost</li>
                    <li>el usuario de base de datos</li>
                    <li>el password del usuario</li>
                    <li>el nombre de la DB</li>
                </ol>
            </p>
            <h3>
                Ejemplo de conexion sencilla para poder utilizar MySQLi
            </h3>
            <p>
                para poder utilizar el API MySQLi, solo necesitamos llamar la funcion que vamos a utilizar, en este caso
                con utilizarla funcion mysqli_connect, seguido de los 4 parametros necesarios;
                <p>
                    $servirdor ="localhost;"
                    <br>$usuario="root";
                    <br>$password="";
                    <br>$bd="mibd";
                    <br>$conexion= mysqli_connect($servirdor, $usuario, $password, $bd);

                </p>
                <p>de esta forma podemos connection_aborted a mysql de una forma corta</p>
            </p>
        </p>
    </div>
  </div>
</div>

<?php
include "footer.php";
?>