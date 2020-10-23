<!DOCTYPE html>
<html lang="es" >
  <head>
    <meta charset="utf-8">
    <title>Crud</title>
<link rel="shortcut icon" href="#" />
<!-- Css -->
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">


<!-- Css Datatable -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">

<!-- Css FontAwesome -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- Sweet Alert -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">

<!-- JS -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<!-- JS Datatable -->

 <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>

<!-- DataTables Export -->
<script src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script>

<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.print.min.js"></script>




  </head>
  <body>


  <div class="col-md-12">
    <div style="text-align:center">
      <h5 >Mantenimiento de Usuarios</h5>
    </div>
    <br><br>
<button type="button" id="agregar" class="btn btn-success">Nuevo usuario</button>
<button type="button" id="eliminar" class="btn btn-danger">Quitar usuario</button>
<button type="button" id="actulizar" class="btn btn-warning btn-actualiza">Update usuario</button>


<div class="pull-right">
  <select class="form-control" id="estad">
    <option value="todo" >Todos</option>
    <?php foreach ($user as $key): ?>
            <option value="<?php echo $key->estado ?>"><?php echo $key->estado ?></option>
        <?php endforeach; ?>
  </select>
</div>
<br><br>
    <table class="table table-bordered table-hover" id="tbl_usuarios">
                        <thead>

                        </thead>
                        <tbody>

                        </tbody>
                      </table>
  </div>


  </body>
</html>









<form method="post" id="form_usuario" autocomplete="off">

  <div class="modal fade" id="modal-agregar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

  <input type="text" name="txtAccion" id="txtAccion" >
		<input type="text" name="id" id="id">
<div class="row">
  <div class="col-md-12">

<div class="form-group">
  <label>Nombre</label>
  <input type="text" name="nombre" class="form-control" id="nombre" placeholder="Escriba el nombre de usuario">
</div>

  </div>
</div>



        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="button" class="btn btn-primary" id="btn_submit">Guardar</button>
        </div>
      </div>
    </div>
  </div>


</form>
















<!-- <script>
	var baseurl="<?php // echo base_url(); ?>";


</script>
<script src="<?php // echo base_url() ?>js/usuarios.js"></script> -->
