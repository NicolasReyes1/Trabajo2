@extends('layouts.main')
@section('main-content')

<div class="container">
    <h1>Arriendos</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Patente</th>
                <th>Teléfono</th>
            </tr>
        </thead>
        <tbody>
            @foreach($arriendos as $arriendo)
            <tr>
                <td>{{ $arriendo->name }}</td>
                <td>{{ $arriendo->surname }}</td>
                <td>{{ $arriendo->patent }}</td>
                <td>{{ $arriendo->phone }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
