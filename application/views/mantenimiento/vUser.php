<!DOCTYPE html>
<html lang="es" >
  <head>
    <meta charset="utf-8">
    <title>Crud</title>
<link rel="shortcut icon" href="#" />

    <!-- Scripts de bootstrap 4-->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">


  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <!-- css -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">



    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">

<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>


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

<button type="button" id="actulizar" class="btn btn-warning btn-actualiza">Update usuario</button>
<button type="button" id="eliminar" class="btn btn-danger">Quitar usuario</button>
<button type="button" id="activar" class="btn btn-info">Activar usuario</button>

<div class="pull-right">
  <select class="form-control" id="estad">
    <option value="todo" >Todos</option>
    <?php foreach ($user as $key): ?>
            <option value="<?php echo $key->estado ?>"><?php  echo $key->estado ?></option>
        <?php endforeach; ?>
  </select>
</div>
<br><br>
    <div class="" id="tbl_usuarios">

    </div>
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

  <input type="hidden" name="txtAccion" id="txtAccion" >
		<input type="hidden" name="id" id="id">
    <input type="hidden" name="estadoform" id="estadoform">
<div class="row">

  <div class="col-md-12">
<div class="form-group">
  <label>Nombre</label>
  <input type="text" name="nombre" class="form-control" id="nombre" placeholder="Escriba el nombre de usuario">
</div>
  </div>
  <div class="col-md-12">
<div class="form-group">
  <label>Fecha</label>
<input type="date" name="fecha" id="fecha" class="form-control"  min=<?php echo date("Y-m-d",strtotime(date("Y-m-d")."- 1 days")); ?> required value="<?php echo date("Y-m-d",strtotime(date("Y-m-d")."- 1 days")); ?>" />
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
















<script>



	var baseurl="<?php  echo base_url(); ?>";


</script>
<script src="<?php  echo base_url() ?>js/user.js"></script>
