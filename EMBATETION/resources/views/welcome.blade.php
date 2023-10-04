<h1>{{ $modo }} empleado</h1>

@if(count($errors) > 0)
    <div class="alert alert-danger" role="alert">
        <ul>
        @foreach($errors->all() as $error) 
            <li>{{ $error }}</li>
        @endforeach
        </ul>
    </div>    
@endif

<div class="form-group">
    <div>
        <label for="Nombre">Nombre</label>
        <input class="form-control" type="text" name="Nombre" value="{{ isset($empleado->Nombre) ? $empleado->Nombre : old('Nombre') }}" id="Nombre">
    </div>
</div>

<div class="form-group">
    <label for="ApellidoPaterno">Apellido Paterno</label>
    <input class="form-control" type="text" name="ApellidoPaterno" value="{{ isset($empleado->ApellidoPaterno) ? $empleado->ApellidoPaterno : old('ApellidoPaterno') }}" id="ApellidoPaterno">
</div>