    <select class="form-select mb-3" name="ciudad" id="ciudad"  aria-label="Default select example">
            <option selected>seleccione pais de origen</option>
            <?php  
                  include_once './models/db.php';

                $sql = "SELECT * FROM pais ";
                mysqli_set_charset($conexion, "utf8mb4");
                $result = $conexion->query($sql);
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
            ?>
              <option value="<?php  echo $row['id'];?>"  ><?php   echo  $row['nombre'];  echo $row['id']; ?></option>
           
            <?php } }   ?>
     </select>

<div id="div_provincia" style="display:none;">
    <select class="form-select mb-3" name="provincia" id="provincia"  aria-label="Default select example">
        <option selected>Seleccione Provincia de origen</option>
        <?php  
            $sql = "SELECT * FROM provincia ";
            mysqli_set_charset($conexion, "utf8mb4");
            $result = $conexion->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
        ?>
        <option value="<?php echo $row['id']; ?>"><?php echo $row['nombre']; ?></option>                  
        <?php
                }
            }  
        ?>
    </select>
</div>

<script>
function mostrarProvincia() {
    var paisSeleccionado = document.getElementById("ciudad").value;
    if (paisSeleccionado == "52") { // Cambiar "52" por el ID del país específico
        document.getElementById("div_provincia").style.display = "block";
    } else {
        document.getElementById("div_provincia").style.display = "none";
    }
}
</script>
