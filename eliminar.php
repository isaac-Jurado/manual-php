<?php
require_once "header.php";
?>
<!-- Page Content -->
<div class="container">
  <div class="card border-0 shadow my-5">
    <div class="card-body p-5">
      <h1 class="font-weight-light animate__animated animate__rubberBand">como eliminar datos </h1>
        <p class="lead  ">
            para poder eliminar datos solo necesitamos crear la cadena sql valida y ejecutarla con el objeto de conexion
            asi resiviremos una respuesta en 1 o 0 o true o false para este tipo de sentencia es totalmete necesario
            agregar un where
            <h3>ejemplo de como eliminar</h3>

            <h2><p style="color: red;"> nota no se te olvide el WHERE o te corren</p></h2>
            <p>
              $sql ='Delete from t_table where idtable='Idvariable'';
              <br>$respuesta=mysqli_query($conxion,$sql)
            </p>
            <p>
              con la varible respuesta podremos validar si se ha llevado acabo el delet o no
            </p>
        </p>
    </div>
  </div>
</div>

<?php
include "footer.php";
?>