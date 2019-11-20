@extends('menu')

@section('contenido')
<br>
<div class="container shadow p-3 mb-5 bg-white rounded">
  <h1 class="center">Detalles Ingrediente</h1>
  <form id="form_delete" action="{{ route('ingrediente.destroy', $ori->id) }}" method="POST">
    @method("DELETE")
    <div class="form-row">
      <div class="col">
        <label for="ingrediente_nombre">Nombre</label>
        <label type="text" name="ingrediente_nombre" id="ingrediente_nombre"
          class="form-control">{{ $ori->ingrediente_nombre }}</label>
      </div>
      <div class="col">
        <label for="ingrediente_marca">Marca</label>
        <label type="text" name="ingrediente_marca" id="ingrediente_marca"
          class="form-control">{{ $ori->ingrediente_marca }}</label>
      </div>
    </div>
    <div class="form-row">
      <div class="col">
        <label for="ingrediente_precio">Precio</label>
        <label type="number" name="ingrediente_precio" id="ingrediente_precio"
          class="form-control">{{ $ori->ingrediente_precio }}</label>
      </div>
      <div class="col">
        <label for="ingrediente_cantidad_disponible">Cantidad Disponible</label>
        <label type="number" name="ingrediente_cantidad_disponible" id="ingrediente_cantidad_disponible"
          class="form-control">{{ $ori->ingrediente_cantidad_disponible }}</label>
      </div>
    </div>
    <div class="form-row">
      <div class="col">
        <label for="ingrediente_fecha_vencimiento">Fecha de Vencimiento</label>
        <label type="date" name="ingrediente_fecha_vencimiento" id="ingrediente_fecha_vencimiento"
          class="form-control">{{ $ori->ingrediente_fecha_vencimiento }}</label>
      </div>
    </div>
    <div class="row justify-content-center">
      <button type="button" id="btnSubmit" class="btn btn-outline-dark">Borrar</button>
    </div>
  </form>
</div>
<br>
<script>
  $(document).ready(function () {
    $("#btnSubmit").click(function (e) {
      e.preventDefault();

      const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
          confirmButton: 'btn btn-success',
          cancelButton: 'btn btn-danger'
        },
        buttonsStyling: false
      });

      swalWithBootstrapButtons.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Yes, delete it!',
        cancelButtonText: 'No, cancel!',
        reverseButtons: true
      }).then((result) => {
        if (result.value) {
          swalWithBootstrapButtons.fire(
            'Deleted!',
            'Your file has been deleted.',
            'success'
          ).then((result) => {
            if (result.value) {
              $("form#form_delete").submit();
            }
          });
          
        } else if (
          /* Read more about handling dismissals below */
          result.dismiss === Swal.DismissReason.cancel
        ) {
          swalWithBootstrapButtons.fire(
            'Cancelled',
            'Your imaginary file is safe :)',
            'error'
          );
        }
      });
    });
  });
</script>
@endsection