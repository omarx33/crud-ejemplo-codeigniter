$(document).ready(function(){


 estado = $('#estad').val();



$('#actulizar').attr("disabled", true);
tabla_js(estado);

$("#activar").click(function () {
  valor = $('input:checkbox[name=micheckbox]:checked').val();
 estadoform = $('#estadoform').val();
  if (estadoform == "inactivo") {
    estadoactual = "activo";

  };



if (valor > 0  )  {

Swal.fire({
  title: '¿Estas seguro?',
  text: "Se cambiara el estado de registro!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Sí, estoy seguro!',
  cancelButtonText : 'Cancelar'

}).then((result) => {
  if (result.isConfirmed) {



    $.ajax({

     url:baseurl+"Usuarios/activar",
     data:{valor:valor,estadoactual:estadoactual},
     type:'POST',
     success:function(data){

    if (data== "activo") {

      Swal.fire({

        title: 'Rechazado',
        text: 'El usuario esta activo!',
        icon : "error",
        timer : 2000,
      showConfirmButton : false
    });

    }else {

      tabla_js($('#estad').val());
        Swal.fire(
          'Activado!',
          'Se cambio el estado',
          'success'
        )

    }

     }

    });

  }

});


}else {
  alert("marque un chek");
}
// ---

});

$("#eliminar").click(function () {
  valor = $('input:checkbox[name=micheckbox]:checked').val();

 estadoform = $('#estadoform').val();
if (estadoform == "inactivo") {
  estadoactual = "activo";
}else {
    estadoactual = "inactivo";
}

 // alert(estadoform);
$.ajax({

 url:baseurl+"Usuarios/eliminar",
 data:{valor:valor,estadoactual:estadoactual},
 type:'POST',
 success:function(data){

if (data== "inactivo") {

  Swal.fire({

    title: 'Rechazado',
    text: 'El usuario no puede ser eliminado en inactivo!',
    icon : "error",
    timer : 2000,
  showConfirmButton : false
});

}else {
  tabla_js($('#estad').val());
}

 }

});




});

//----

});


$('#estad').on('change',function(e){
tabla_js($('#estad').val());
});




function tabla_js(estado){
  $.post(baseurl+"Usuarios/lista/",
    {estado:estado},
  function(data){
       $('#tbl_usuarios').html(data);
// alert(data);
    });



}


$(document).on('click','#tbl_user tbody tr', function () {

$('#id').val($(this).find('td').eq(0).html());
$('#nombre').val($(this).find('td').eq(1).html());
$('#estadoform').val($(this).find('td').eq(6).html());
$('#txtAccion').val('editar');
$('#actulizar').attr("disabled", false);

$('tr').removeClass('p-3 mb-2 bg-secondary text-white');
  $(this).addClass('p-3 mb-2 bg-secondary text-white');

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









  $('#btn_submit').on('click',function(e){

    e.preventDefault();
      $.ajax({
        url:baseurl+"Usuarios/save",
        type:"post",
        data:$('#form_usuario').serialize(),
        success:function(data){

          if (data == "agregado") {
              tabla_js(estado);
             $('#modal-agregar').modal('hide');
            Swal.fire({

              title: 'Registrado',
              text: 'Nuevo usuario!',
              icon : "success",
              timer : 2000,
            showConfirmButton : false
          });
        }else if (data=="actualizado") {
        tabla_js(estado);
         $('#modal-agregar').modal('hide');
          Swal.fire({

            title: 'Actualizado',
            text: 'Registro editado!',
            icon : "success",
            timer : 2000,
          showConfirmButton : false
        });
      }else if (data=="existe") {
        Swal.fire({

          title: 'El usuario existe',
          text: 'No se registro!',
          icon : "warning",
          timer : 2000,
        showConfirmButton : false
        });
      }else {
        Swal.fire({

          title: 'No se puede actualizar un usuario inactivo',
          text: 'No se registro!',
          icon : "info",
          timer : 2000,
        showConfirmButton : false
        });
      }

        }
      });
  });
