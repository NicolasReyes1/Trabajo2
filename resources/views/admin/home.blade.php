@extends('layouts.main')
@section('main-content')
    @if ($errors->any())
        <div class="alert alert-danger my-4" role="alert">
            {!! implode('', $errors->all('<div>:message</div>')) !!}
        </div>
    @endif

    <h1>Dashboard</h1>

    <h5 class="section-separator mb-4">Vehículos existentes en cada categoría</h5>

    <section>
        <div class="row mt-4">
            <div class="col-md-6">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Categoría</th>
                        <th scope="col">Total de vehículos</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($categories as $category)
                        <tr>
                            <td>{{ $category->name }}</td>
                            <!-- Aquí puedes mostrar la cantidad de vehículos por categoría -->
                            <td>{{ $category->vehicles->count() }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            </div>

            <div class="col-md-6">
            <h5 class="section-separator mb-4 text-center" ><strong>Total de arriendos registrados</strong></h5>
            <h1 class="display-1 text-center" style="font-weight: bold;">{{ $arriendos->count() }}</h1>
        </div>
    </div>
    </section>
    </div>
@endsection

@push('css')
    <style>
        .section-separator {
            margin-top: 80px;
        }
    </style>
@endpush
