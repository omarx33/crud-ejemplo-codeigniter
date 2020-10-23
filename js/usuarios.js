$(document).ready(function() {



 valo = $('#estad').val();

	tbl_usuarios=tabla_usuarios(valo);

 $('#actulizar').attr("disabled", true);

} );


$(document).on('click','#agregar',function(e){
  $('#actulizar').attr("disabled", true);
  $('#modal-agregar').modal('show');
   $('#txtAccion').val('nuevo');
  $('.modal-title').html('Nuevo registro');
  $('#id').val('');
$('#nombre').val('');
});



$(document).on('click','.btn-actualiza',function(e){

  $('#modal-agregar').modal('show');
   $('#txtAccion').val('editar');
  $('.modal-title').html('Editar registro');

});


$('#tbl_usuarios tbody').on('click', 'tr', function () {
  $('#id').val($(this).find('td').eq(0).html());
      $('#nombre').val($(this).find('td').eq(1).html());
$('#txtAccion').val('editar');
$('#actulizar').attr("disabled", false);

  } );


$('#estad').on('change',function(e){
tabla_usuarios($('#estad').val());
});


    function tabla_usuarios(valo){

    	var tbl=$('#tbl_usuarios').DataTable({
        "language": {
             "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
           },

           dom:'lBfrtip',
           buttons:[

           {

           extend:'excelHtml5',
           title:'Empleados',
           sheetName:'Empleados'

         }

       ]

           ,
           iDisplayLength: 10, //cambiar la cantidad de filas a mostrar
                   deferRender:true,
                   bProcessing: false,//para que carge en paralelo se aga mas rapida
                   bAutoWidth: false, //para que funcione el responsive
                   destroy:true,


    				"pagin":true,
    				"ajax":{
    					"url":baseurl+"Usuarios/getall/"+valo,
    					"type":"post",
    					dataSrc:''
    				},
    				"columns":[
              {title:"#",data:"id"},
    					{title:"Nombre",data:"nombre"},
              	{title:"Ultima modificación",data:"fecha_creacion"},
    					{title:"Fecha",data:"fecha"},
	            {title:"Estado",data:"estado"},


              {title:"Acciones",data:null,render:function(data){
          return `
             <input type="checkbox" style="width:20px;height:20px;margin-left:40px" class="form-control " id="exampleCheck1">

                    `;
           }}

         ]

    	});
    	return tbl_usuarios;
    }




    $('#btn_submit').on('click',function(e){



      e.preventDefault();
        $.ajax({
          url:baseurl+"Usuarios/save",
          type:"post",
          data:$('#form_usuario').serialize(),
          success:function(data){

            if (data == "agregado") {
              	tbl_usuarios=tabla_usuarios(valo);
               $('#modal-agregar').modal('hide');
              Swal.fire({

                title: 'Registrado',
                text: 'Nuevo usuario!',
                icon : "success",
                timer : 2000,
              showConfirmButton : false
            });
          }else if (data=="actualizado") {
            tbl_usuarios=tabla_usuarios(valo);
           $('#modal-agregar').modal('hide');
            Swal.fire({

              title: 'Actualizado',
              text: 'Registro editado!',
              icon : "success",
              timer : 2000,
            showConfirmButton : false
          });
          }

          }
        });
    });
