@extends('layouts.main')

@section('main-content')
<div class="container">
    <h1>Nuevo arriendo</h1>
    <form method="POST" action="{{ route('newarriendo') }}">
        @csrf
        <div class="form-group">
            <label for="name">Nombre:</label>
            <input type="text" id="name" name="name" value="{{ old('name') }}" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="surname">Apellido Paterno:</label>
            <input type="text" id="surname" name="surname" value="{{ old('surname') }}" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="lastname">Apellido Materno:</label>
            <input type="text" id="lastname" name="lastname" value="{{ old('lastname') }}" class="form-control">
        </div>
        <div class="form-group">
            <label for="rut">RUT:</label>
            <input type="text" id="rut" name="rut" value="{{ old('rut') }}" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="{{ old('email') }}" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="patent">Patente:</label>
            <input type="text" id="patent" name="patent" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="entrega">Fecha de entrega:</label>
            <input type="date" id="entrega" name="entrega" value="{{ old('entrega') }}" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="devolucion">Fecha de devolución:</label>
            <input type="date" id="devolucion" name="devolucion" value="{{ old('devolucion') }}" class="form-control" required>
        </div>
        <button type="submit"  class="btn btn-primary">Guardar</button>
    </form>
</div>
@endsection
