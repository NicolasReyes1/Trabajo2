@extends('layouts.main')
@section('main-content')

    <div class="container">
        <h1>Nuevo arriendo</h1>
        <form >
            @csrf
            <label for="nombres"><strong>Datos del cliente</strong></label>
            <div class="form-group">
                <label for="nombres">Nombres:</label>
                <input type="text" id="nombres" name="nombres" value="" class="form-control">
            </div>
            <div class="form-group">
                <label for="apellido_paterno">Apellido Paterno:</label>
                <input type="text" id="apellido_paterno" name="apellido_paterno" value="" class="form-control">
            </div>
            <div class="form-group">
                <label for="apellido_materno">Apellido Materno:</label>
                <input type="text" id="apellido_materno" name="apellido_materno" value="" class="form-control">
            </div>
            <div class="form-group">
                <label for="rut">RUT:</label>
                <input type="text" id="rut" name="rut" value="" class="form-control">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" id="email" name="email" value="" class="form-control">
            </div>

            <label for="nombres"><strong>Datos del vehiculo</strong></label>
            <div class="form-group">
                <label for="patente">Patente:</label>
                <input type="text" id="patente" name="patente" required="" class="form-control">
            </div>

            <label for="nombres"><strong>Datos del vehiculo</strong></label>
            <div class="form-group">
                <label for="F.entrega">Fecha de entrega:</label>
                <input type="date" id="F.entrega" name="F.entrega" value="" class="form-control">
            </div>
            <div class="form-group">
                <label for="F.devolucion">Fecha de devolucion:</label>
                <input type="date" id="F.devolucion" name="F.devolucion" value="" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
@endsection
