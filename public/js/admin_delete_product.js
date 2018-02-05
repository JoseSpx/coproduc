//eliminar producto

$(function () {
   $(".delete").on("click",function (e) {
       let btn = $(this);
       swal({
           title: '¿Estás Seguro?',
           text: "¡Se eliminará el producto!",
           type: 'warning',
           showCancelButton: true,
           confirmButtonColor: '#3085d6',
           cancelButtonColor: '#d33',
           confirmButtonText: 'Si',
           cancelButtonText: 'No'
       }).then(function (result) {
           if (result.value) {
               window.location.href = btn.attr('content');
           }
       });
   })
});