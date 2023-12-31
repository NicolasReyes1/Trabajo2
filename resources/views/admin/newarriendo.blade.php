@extends('layouts.main')
@section('main-content')
<div class="container">
    <section>
        <div class="header-and-button d-flex justify-content-between align-items-center">
            <h1 class="header">Nuevo Arriendo</h1>
        </div>
        <hr />
    </section>
    <form method="POST" action="{{ route('newarriendo.store2') }}">
        @csrf
        <div class="row mt-4">
            <div class="col-md-6">
                <label for="names"><strong>Datos del cliente</strong></label>
                <div class="input-group mt-2">
                    <span class="input-group-text">Nombres</span>
                    <input type="text" class="form-control" name="name" id="name">
                </div>
                <div class="input-group mt-2">
                    <span class="input-group-text">Apellido Paterno</span>
                    <input type="text" class="form-control" name="surname" id="surname">
                </div>
                <div class="input-group mt-2">
                    <span class="input-group-text">Apellido Materno</span>
                    <input type="text" class="form-control" name="lastname" id="lastname">
                </div>
                <div class="input-group mt-2">
                    <span class="input-group-text">RUT</span>
                    <input type="text" class="form-control" name="rut" id="rut">
                </div>
                <div class="input-group mt-2">
                    <span class="input-group-text">Email</span>
                    <input type="text" class="form-control" name="email" id="email" >
                </div>
            </div>

            <div class="col-md-6">
                <label for="patent"><strong>Datos del vehículo</strong></label>
                <div class="input-group mt-2">
                    <span class="input-group-text">Patente</span>
                    <select name="patent" id="patent">
                        @foreach ($vehicles as $vehicles)
                            <option value="{{ $vehicles -> id }}">{{ $vehicles -> patent }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="input-group mt-2">
                    <span class="input-group-text">Fecha de Entrega</span>
                    <input type="date" class="form-control" name="Entrega" id="Entrega">
                </div>
                <div class="input-group mt-2">
                    <span class="input-group-text">Fecha de Devolución</span>
                    <input type="date" class="form-control" name="Devolucion" id="Devolucion">
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-end mt-4">
            <input type="submit" value="Guardar" class="btn btn-primary">
        </div>
    </form>
</div>
@if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@endsection
