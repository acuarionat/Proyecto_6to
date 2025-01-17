<head>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/editarInfoClient.css') }}">
</head>

<body>
    <section class="container_registrar_empleados">
        <div class="cotenedor_registrar_e">
            <h1> EDITAR INFORMACION DEL CLIENTE</h1>
        </div>

        <div class="container_form_registro">
            <form action="{{ route('clientes.actualizar') }}" method="POST">
                @csrf
                @method('PUT')

                <input type="hidden" name="user_id" value="{{ $user->id }}">
                <input class="edit_info" type="hidden" name="id_cliente" value="{{ $clientes->id_cliente }}">

                <h1 class="seccion_forms">Informacion Personal</h1>
                <div class="form_group">
                    <div class="container_llenado">
                        <label class="subtitle" for="correo">Correo Electrónico</label>
                        <input class="edit_info" type="text" name="correo" value="{{ $clientes->correo_electronico }}" placeholder="Correo electrónico" required>
                    </div>
                    <div class="container_llenado">
                        <label class="subtitle" for="nombres">Nombres</label>
                        <input class="edit_info" type="text" name="nombres" value="{{ $clientes->nombres }}" placeholder="Nombres" required>
                    </div>
                    <div class="container_llenado">
                        <label class="subtitle" for="apellido_paterno">Apellido Paterno</label>
                        <input class="edit_info" type="text" name="apellido_paterno" value="{{ $clientes->apellido_paterno }}" placeholder="Apellido Paterno" required>
                    </div>

                    <div class="container_llenado">
                        <label class="subtitle" for="apellido_materno">Apellido Materno</label>
                        <input class="edit_info" type="text" name="apellido_materno" value="{{ $clientes->apellido_materno }}" placeholder="Apellido Materno">
                    </div>

                    <div class="container_llenado">
                        <label class="subtitle" for="carnet_identidad">Carnet de Identidad</label>
                        <input class="edit_info" type="text" name="carnet_identidad" value="{{ $clientes->ci_persona }}" placeholder="Carnet de identidad" required>
                    </div>
                </div>

                <h1 class="seccion_forms">Datos del cliente</h1>
                <div class="form_group">
                    <div class="container_llenado">
                        <label class="subtitle" for="tipo_cliente">Tipo de cliente</label>
                        <select class="edit_info" id="tipo_cliente" name="tipo_cliente" required onchange="actualizarDescuento()" >
                            <option value="42" {{ $clientes->tipo_cliente == 42 ? 'selected' : '' }}>Minorista</option>
                            <option value="43" {{ $clientes->tipo_cliente == 43 ? 'selected' : '' }}>Mayorista</option>
                            <option value="44" {{ $clientes->tipo_cliente == 44 ? 'selected' : '' }}>Promotores</option>
                        </select>
                    </div>
                    <div class="container_llenado">
                        <label class="subtitle" for="porcentaje_de_descuento">Porcentaje de descuento (%)</label>
                        <input class="edit_info" id="porcentaje_descuento"  type="text" name="porcentaje_descuento" value="{{ $clientes->porcentaje_descuento }}" required>
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
    
</body>

<script>
    function actualizarDescuento() {
        const tipoCliente = document.getElementById('tipo_cliente').value;
        const campoDescuento = document.getElementById('porcentaje_descuento');

        let descuento = '0.0';

        if (tipoCliente === '42') {
            descuento = '0.0';
        } else if (tipoCliente === '43') {
            descuento = '20.0';
        } else if (tipoCliente === '44') {
            descuento = '15.0';
        }

        campoDescuento.value = descuento;
    }
</script>
