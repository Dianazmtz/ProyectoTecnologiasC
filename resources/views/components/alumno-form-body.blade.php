@csrf
<div class="row g-3">
    <div class="col-sm-6">
        <label for="InputprimerNombre" class="form-label">*Primer nombre</label>
        <input type="text" name="primerNombre" id="InputprimerNombre" class="form-control" placeholder="..." value="{{ old('primerNombre', $alumno->primerNombre) }}">
    </div>
    <div class="col-sm-6">
        <label for="InputsegundoNombre" class="form-label">Segundo nombre</label>
        <input type="text" name="segundoNombre" id="InputsegundoNombre" class="form-control" placeholder="..." value="{{ old('segundoNombre', $alumno->segundoNombre) }}">
    </div>
    <div class="col-sm-6">
        <label for="InputprimerApellido" class="form-label">*Primer Apellido</label>
        <input type="text" name="primerApellido" id="InputprimerApellido" class="form-control" placeholder="..." value="{{ old('primerApellido', $alumno->primerApellido) }}">
    </div>
    <div class="col-sm-6">
        <label for="InputsegundoApellido" class="form-label">*Segundo Apellido</label>
        <input type="text" name="segundoApellido" id="InputsegundoApellido" class="form-control" placeholder="..." value="{{ old('segundoApellido', $alumno->segundoApellido) }}">
    </div>
    <div class="col-sm-6">
        <label for="Inputcorreo" class="form-label">*Correo</label>
        <input type="email" name="correo" id="Inputcorreo" class="form-control" placeholder="..." value="{{ old('correo', $alumno->correo) }}">
    </div>
    <div class="col-sm-6">
        <label for="InputnoCuenta" class="form-label">*Número de cuenta</label>
        <input type="text" name="noCuenta" id="InputnoCuenta" class="form-control" placeholder="..." value="{{ old('noCuenta', $alumno->noCuenta) }}">
    </div>
    <div class="col-sm-4">
        <div class="form-check mt-3">
            <input type="checkbox" name="estado" id="Inputestado" class="form-check-input" value="1" @checked(old('estado', $alumno->estado))>
            <label for="Inputestado" class="form-check-label">*Activo</label>
        </div>
    </div>
    <div class="col-sm-4">
        <label for="Inputfecha_registro" class="form-label">*Fecha de registro</label>
        <input type="datetime-local" name="fecha_registro" id="Inputfecha_registro" class="form-control" value="{{ old('fecha_registro', $alumno->fecha_registro) }}">
    </div>
    <div class="col-sm-12 text-end mt-3">
        <button type="submit" class="btn btn-primary">
            Guardar
        </button>
    </div>
</div>
