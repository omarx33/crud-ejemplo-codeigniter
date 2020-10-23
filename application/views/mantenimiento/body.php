
<div class="table-responsive">
  <table class="table table-bordered table-hover" name="tbl_user" id="tbl_user">
    <thead>
      <tr>
        <th>#</th>
        <th>Nombre</th>
        <th>Fecha Creación</th>
<th>Ultima Modificación</th>
<th>Estado</th>
<th>Marcar</th>
<th style=" display: none;"></th>

      </tr>
    </thead>
    <tbody>
      <?php foreach ($lista as $key): ?>
        <tr >
          <td><?php echo $key->id; ?></td>
 <td ><?php echo $key->nombre; ?></td>
           <!-- <td id="nombres-i"><input  type="text" name="<?php //echo $key->nombre; ?>" value='<?php //echo $key->nombre ?>'/></td> -->
            <td><?php echo $key->fecha_creacion ?></td>
              <td><?php echo $key->fecha ?></td>



 <?php if ($key->estado == 'activo'): ?>
<td>  <span class="badge badge-success">Activos</span></td>
 <?php else: ?>
           <td>  <span class="badge badge-danger">Inactivo</span> </td>
     <?php endif; ?>


<td>
  <!-- <input type="checkbox" style="width:20px;height:20px;margin-left:40px" class="form-control " id="check"> -->
<input type="checkbox" id="micheckbox" class="micheckbox" name="micheckbox" value="<?php echo $key->id; ?>" >


</td>
<td style=" display: none;"><?php echo $key->estado ?></td>

        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>
<script>



 table = $('#tbl_user').DataTable( {
        dom: 'Bfrtip',

        buttons: [
           'excel', 'pdf'
				],

				"language": {
			"url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json",

    }
    } );
</script>
