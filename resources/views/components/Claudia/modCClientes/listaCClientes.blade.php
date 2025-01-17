
<link rel="stylesheet" href="{{ asset('css/listaEmpleados.css') }}">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<section class="container_lista_empleados">
    <div class="contenedor_Tmostrar">
        <div class="cotenedor_lista_e">
            <h1>LISTA DE CLIENTES</h1>
        </div>
        <div class="contenedor_busqueda">
            <form class="formulario_busqueda" id="formularioBusqueda" action="{{ route('cliente.busqueda_cliente', ['id' => $user->id]) }}" method="GET">
                
                <i class="fas fa-search fa-fw" id="iconoBuscar" style="cursor: pointer;" onclick="document.getElementById('formularioBusqueda').submit();"></i>
                <input class="buscar_empleado" type="text" name="busqueda"  placeholder="Nombre del empleado" required>


            </form>
        </div>
    </div>
           
    
    <div class="contenedor_tabla_empleados">
        <table class="estilo_tabla">
            <thead>
                <tr class="encabezado_table">
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Tipo Cliente</th>
                    <th>Porcentaje Descuento(%)</th>
                    <th>Opciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($clientes as $cliente)
                    <tr class="text-center">
                        <td>{{ $cliente->id_cliente }}</td> 
                        <td>{{ $cliente->nombres }}</td>
                        <td>{{ $cliente->tipo_cliente }}</td>
                        <td>{{ $cliente->porcentaje_descuento }}</td>
                        <td><a href="{{ url('editarPerfilCliente/' . $user->id . '/' . $cliente->id_cliente) }}" class="editar_cuenta">Editar información</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
    

</section>

