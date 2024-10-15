{{-- Heredemos la estructura del archivo app.blade.php --}}
@extends('layout.app')

{{-- Definimos el título --}}
@section('title', 'Crear Vuelo')

{{-- Definimos el contenido --}}
@section('content')
<h1>Crear Vuelo</h1>
<h5>Formulario para crear vuelo</h5>
<hr>
<form class="row g-3" action="{{ route('vuelo.store') }}" method="POST">
    @csrf
    <div class="col-md-6">
        <label for="origen" class="form-label">Origen</label>
        <input type="text" name="origen" class="form-control" id="origen" required>
        @error('origen')
        <span class="invalid-feedback d-block" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    <div class="col-md-6">
        <label for="destino" class="form-label">Destino</label>
        <input type="text" name="destino" class="form-control" id="destino" required>
        @error('destino')
        <span class="invalid-feedback d-block" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    <div class="col-md-6">
        <label for="fecha_salida" class="form-label">Fecha de Salida</label>
        <input type="date" name="fecha_salida" class="form-control" id="fecha_salida" required>
        @error('fecha_salida')
        <span class="invalid-feedback d-block" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    <div class="col-md-6">
        <label for="hora_salida" class="form-label">Hora de Salida</label>
        <input type="time" name="hora_salida" class="form-control" id="hora_salida" required>
        @error('hora_salida')
        <span class="invalid-feedback d-block" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    <div class="col-md-6">
        <label for="fecha_llegada" class="form-label">Fecha de Llegada</label>
        <input type="date" name="fecha_llegada" class="form-control" id="fecha_llegada" required>
        @error('fecha_llegada')
        <span class="invalid-feedback d-block" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    <div class="col-md-6">
        <label for="hora_llegada" class="form-label">Hora de Llegada</label>
        <input type="time" name="hora_llegada" class="form-control" id="hora_llegada" required>
        @error('hora_llegada')
        <span class="invalid-feedback d-block" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    <div class="col-md-6">
        <label for="escala" class="form-label">Escala</label>
        <input type="text" name="escala" class="form-control" id="escala" required>
        @error('escala')
        <span class="invalid-feedback d-block" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    <div class="col-md-6">
        <label for="precio" class="form-label">Precio</label>
        <input type="number" name="precio" class="form-control" id="precio" required>
        @error('precio')
        <span class="invalid-feedback d-block" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    <div class="col-md-6">
        <label for="estado_vuelo" class="form-label">Estado de Vuelo</label>
        <input type="text" name="estado_vuelo" class="form-control" id="estado_vuelo" required>
        @error('estado_vuelo')
        <span class="invalid-feedback d-block" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    <div class="col-md-6">
        <label for="clase_de_vuelo" class="form-label">Clase de Vuelo</label>
        <input type="text" name="clase_de_vuelo" class="form-control" id="clase_de_vuelo" required>
        @error('clase_de_vuelo')
        <span class="invalid-feedback d-block" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    <div class="col-12">
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</form>
<br>
@endsection
