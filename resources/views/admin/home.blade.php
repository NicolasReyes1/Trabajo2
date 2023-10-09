@extends('layouts.main')
@section('main-content')
    @if($errors->any())
        <div class="alert alert-danger my-4" role="alert">
            {!! implode('', $errors->all('<div>:message</div>')) !!}
        </div>
    @endif

    <h1>Dashboard</h1>

    <h5 class="section-separator mb-4">Vehiculos existenes en cada categoría</h5>

        <section class="mb-5">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">Categoria</th>
                    <th scope="col">Total de vehiculos</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($categories as $categories)
                <tr>
                    <td>{{ $categories->name }}</td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </section>

    <h5>Total de arriendos registrados</h5>

</div>
@endsection


@push('css')
<style>
    .section-separator {
        margin-top: 80px;
    }
</style>
@endpush
