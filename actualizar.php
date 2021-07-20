<?php
require_once "header.php";
?>
<!-- Page Content -->
<div class="container">
  <div class="card border-0 shadow my-5">
    <div class="card-body p-5">
      <h1 class="font-weight-light animate__animated animate__rubberBand">actualizar datos mysql a mysqli con php</h1>
        <p class="lead">
                para poder actualizar datos con php usando mysqli, necesitamos crear la cadena sql valida
                y ejecutarla con el objeto de conexion, por otra parte la informacion que se desea actualizar
                debe estar contenenida den varibles por convencion`

        </p>
        <h3>ejemplo</h3>
        <p>
            
            $sql= "update t_table ser campo1 = '$variable1', campo2='varialbe2' where id='variebleId'"
            <br>$respuesta=mysqli_query($conexion,$query);
            <h2><p style="color: red;"> nota no se te olvide el WHERE o te corren</p></h2>
        </p>
    </div>
  </div>
</div>

<?php
include "footer.php";
?>