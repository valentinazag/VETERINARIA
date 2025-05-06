<?php 
include('../../app/config.php');
include('../../admin/layout/part1.php');

?>
<head>
<link rel="stylesheet" href="../../public/css/registro.css">
</head>
<div class="container-fluid">
  <h1>Registro de usuarios</h1>
  <div class="row">
    <div class="col-md-12">
      <div class="card card-outline card-primary carta">
        <div class="card-header">
          <h3 class="card-title"><b>Datos del Usuario</b></h3>
        </div>            
        <div class="card-body">
          <form action="../../app/controllers/usuarios/registrar_users.php" method="POST"  enctype="multipart/form-data">
            <!-- Primera fila -->
            <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                  <label for="">Nombre completo<b>*</b></label>
                  <input type="text" name="nombre_completo" class="form-control" required>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="">Correo electrónico<b>*</b></label>
                  <input type="email" name="email" class="form-control" required>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="">Celular<b>*</b></label>
                  <input type="text" name="celular" class="form-control" required>
                </div>
              </div>
            </div>

            <!-- Segunda fila -->
            <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                  <label for="">Contraseña<b>*</b></label>
                  <input type="password" name="password" class="form-control" required>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="">Verificar contraseña<b>*</b></label>
                  <input type="password" name="password_verify" class="form-control" required>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="">Cargo<b>*</b></label>
                  <select name="cargo" id="cargo" class="form-control" required>
                    <option value="ADMINISTRADOR">ADMINISTRADOR</option>
                    <option value="CLIENTE">CLIENTE</option>
                  </select>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="">Imagen</label>
                  <input type="file" name ="imagen_u" class="form-control" id="file">
                  <br>
                  <output id="list"></output>
                </div>
              </div>
           
            </div>
            <hr style="border-top: 1px solid #007bff;">
            <div class="row">
               <div class="col-md-12">
                  <a href="../usuarios/usuarios.php" class="btn btn-secondary">Cancelar</a>
                  <input type="submit" class="btn btn-primary" value="Registrar">
               </div>
            </div>
          </form>
        </div> <!-- card-body -->
      </div> <!-- card -->
    </div> <!-- col-md-8 -->
  </div> <!-- row -->
</div> <!-- container-fluid -->
<?php 
include('../../admin/layout/part2.php');
include('../../admin/layout/mensaje.php');
?>


<script> //script para previzualisar la imgnen
    function arquivo(evt){
    var files = evt.target.files;
    for(var i = 0, f; f = files[i]; i++) {
        if(!f.type.match('image.*')) {
            continue;
        }
        var reader = new FileReader();
        reader.onload = (function(theFile){
            return function(e){
                document.getElementById("list").innerHTML = ['<img class="thumb thumbnail" src="',e.target.result, '" width="50%" title="', escape(theFile.name), '"/>'].join('');
            };
        })(f);
        reader.readAsDataURL(f);
    }
}
document.getElementById("file").addEventListener('change', arquivo, false);
</script>