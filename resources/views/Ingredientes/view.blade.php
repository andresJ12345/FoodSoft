@extends('menu')

@section('contenido')
<div class="container shadow p-3 mb-5 bg-white rounded">
    <h1 class="center">Listado de Ingredientes</h1>

    <table class="table shadow p-3 mb-5 bg-white rounded">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Cantidad Disponible</th>
                <td>Acciones</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($ori as $i)
            <tr>
                <td>{{ $i->ingrediente_nombre }}</td>
                <td>{{ $i->ingrediente_precio }}</td>
                <td>{{ $i->ingrediente_cantidad_disponible }}</td>
                <td>
                    <form id="form_actions" action="{{ route('ingrediente.destroy', $i->id) }}" method="post">
                        @method("DELETE")
                        @csrf
                        <a href="{{ route('ingrediente.show', $i->id) }}"><img src="{{ asset('css/svg/eye.svg') }}"
                                alt=""></a>
                        <a href="{{ route('ingrediente.edit', $i->id) }}"><img src="{{ asset('css/svg/sync.svg') }}"
                                alt=""></a>
                        <button type="submit" id="btnDelete" class="btn btn-link">
                            <img src="{{ asset('css/svg/x.svg') }}" alt="">
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
<script>
    $(document).ready(function () {
        $("form#form_actions").submit(function (e) {
            

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
                            e.
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