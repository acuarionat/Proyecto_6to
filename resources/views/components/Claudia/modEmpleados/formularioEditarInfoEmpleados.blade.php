<link rel="stylesheet" href="{{ asset('css/editarFormularioE.css') }}">

<head>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
</head>
<section class="container_registrar_empleados">

    <div class="cotenedor_registrar_e">
        <h1> EDITAR INFORMACION DEL EMPLEADO</h1>
    </div>

    <div class="container_form_registro">
        <form action="{{ route('empleados.actualizar') }}" method="POST">
            @csrf
            @method('PUT')

            <input type="hidden" name="user_id" value="{{ $user->id }}">
            <input class="edit_info" type="hidden" name="id_empleado" value="{{ $empleados->id_empleado }}">

            <h1 class="seccion_forms">Informacion Personal</h1>
            <div class="form_group">

                <div class="container_llenado">
                    <label class="subtitle" for="correo">Correo Electrónico</label>
                    <input class="edit_info" type="text" name="correo" value="{{ $empleados->correo_electronico }}" placeholder="Correo electrónico" required>
                </div>
                <div class="container_llenado">
                    <label class="subtitle" for="nombres">Nombres</label>
                    <input class="edit_info" type="text" name="nombres" value="{{ $empleados->nombres }}" placeholder="Nombres" required>
                </div>
                <div class="container_llenado">
                    <label class="subtitle" for="apellido_paterno">Apellido Paterno</label>
                    <input class="edit_info" type="text" name="apellido_paterno" value="{{ $empleados->apellido_paterno }}" placeholder="Apellido Paterno" required>
                </div>

                <div class="container_llenado">
                    <label class="subtitle" for="apellido_materno">Apellido Materno</label>
                    <input class="edit_info" type="text" name="apellido_materno" value="{{ $empleados->apellido_materno }}" placeholder="Apellido Materno" required>
                </div>
                <div class="container_llenado">
                    <label class="subtitle" for="carnet_identidad">Carnet de Identidad</label>
                    <input class="edit_info" type="text" name="carnet_identidad" value="{{ $empleados->ci_persona }}" placeholder="Carnet de identidad" required>
                </div>

            </div>

            <h1 class="seccion_forms">Datos del empleado</h1>

            <div class="form_group">
                <div class="container_llenado">
                    <label class="subtitle" for="fecha_contratacion">Fecha contratación</label>
                    <input class="edit_info" type="date" name="fecha_contratacion" value="{{ $empleados->fecha_contratacion }}" required>
                </div>

                <div class="container_llenado">
                    <label class="subtitle" for="Salario">Salario</label>
                    <input class="edit_info" type="text" name="salario" value="{{ $empleados->salario }}" placeholder="Salario">
                </div>
                <div class="container_llenado">
                    <label class="subtitle" for="Turno">Turno</label>
                    <select class="edit_info" name="turno" required>
                        <option value="34" {{ $empleados->turno == 34 ? 'selected' : '' }}>Mañana</option>
                        <option value="35" {{ $empleados->turno == 35 ? 'selected' : '' }}>Tarde</option>
                        <option value="36" {{ $empleados->turno == 36 ? 'selected' : '' }}>Noche</option>
                    </select>
                </div>

            </div>

            <div class="cont_boton_editE">
                <button type="submit" class="boton_guardar_cambios">Guardar cambios</button>
            </div>
        </form>




    </div>

</section>

@if(session('success'))
<script>
    Swal.fire({
        title: 'Registro exitoso',
        text: "{{ session('success') }}",
        icon: 'success',
        confirmButtonText: 'Aceptar',
        customClass: {
            popup: 'custom-popup',
            confirmButton: 'custom-confirm-button'
        }
    });
</script>
@endif

@if(session('error'))
<script>
    Swal.fire({
        title: 'Error de Registro',
        text: "{{ session('error') }}",
        icon: 'error',
        confirmButtonText: 'Aceptar',
        customClass: {
            popup: 'custom-popup',
            confirmButton: 'custom-confirm-button'
        }
    });
</script>
@endif