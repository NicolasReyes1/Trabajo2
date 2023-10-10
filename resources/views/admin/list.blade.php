@extends('layouts.main')
@section('main-content')
<head>
<div class="col-md-9">
    <div class="">
        <h1 class="align-self-end">Arriendos</h1>

        <a class="btn btn-primary align-self-end" href="{{ route('newarriendo') }}">Nuevo Arriendo</a>
    </div>
</head>

<body>
    <table class="table">
    <thead>
        <tr>
            <th>Cliente</th>
            <th>Rut</th>
            <th>Patente</th>
            <th>Entrega</th>
            <th>Devolucion</th>
        </tr>
        </thead>
           <tbody>
               @foreach($arriendomostrar->sortBy('id') as $arriendo)
               <tr>
                  <td>{{ $arriendo->name }} {{ $arriendo->surname }}</td>
                  <td>{{ $arriendo->rut }}</td>
                  <td>{{ $arriendo->vehicles ? $arriendo->vehicles->patent : 'N/A' }}</td>
                  <td>{{ $arriendo->Entrega }}</td>
                  <td>{{ $arriendo->Devolucion }}</td>
               </tr>
               @endforeach
           </tbody>
    </table>
</div>
</div>
</div>
</body>
@endsection
