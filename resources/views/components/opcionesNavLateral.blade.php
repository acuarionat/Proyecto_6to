<link rel="stylesheet" href="{{ asset('css/opcionesNavLateral.css') }}">
<head>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

</head>

<div class="contenedor_opciones_navLateral">
    <ul>
        <li class="menu-item">
            
            <a class="opc_dashboard" href="{{ url('account/dashboardAdmin/' . $user->id) }}">
            <i class="fab fa-dashcube fa-fw"></i>
                Dashboard
            </a>
        </li>
        <li class="menu-item">
            <input type="checkbox" id="productos-checkbox">
            <label for="productos-checkbox" class="menu-link">
                <i class="fas fa-box"></i>
                Productos
                <i class="fas fa-chevron-right arrow-icon"></i>
            </label>
            
            <ul class="submenu">
                <li><a href="#" class="active"><i class="fas fa-plus"></i> Nuevo Producto</a></li>
                <li><a href="#" class="active"><i class="fas fa-plus"></i> Mostrar Productos</a></li>
                <li><a href="#" class="active"><i class="fas fa-plus"></i> Editar Producto</a></li>
            </ul>
        </li>
        
        <li class="menu-item">
            <input type="checkbox" id="ventas-checkbox">
            <label for="ventas-checkbox" class="menu-link">
                <i class="fas fa-hand-holding-usd fa-fw"></i>
                Ventas
                <i class="fas fa-chevron-right arrow-icon"></i>
            </label>
            <ul class="submenu">
                <li><a href="#" class="active"><i class="fas fa-plus"></i> Registrar venta</a></li>
                <li><a href="#" class="active"><i class="fas fa-plus"></i> Historia de ventas</a></li>
            </ul>
        </li>

        <li class="menu-item">
            <input type="checkbox" id="compras-checkbox">
            <label for="compras-checkbox" class="menu-link">
                <i class="fas fa-shopping-cart"></i>
                Compras
                <i class="fas fa-chevron-right arrow-icon"></i>
            </label>
            <ul class="submenu">
                <li><a href="#" class="active"><i class="fas fa-plus"></i> Registrar Compra</a></li>
                <li><a href="#" class="active"><i class="fas fa-plus"></i> Historia de Compra</a></li>
            </ul>
        </li>

        <li class="menu-item">
            <input type="checkbox" id="empleados-checkbox">
            <label for="empleados-checkbox" class="menu-link">
                <i class="fas fa-users"></i>
                Empleados
                <i class="fas fa-chevron-right arrow-icon"></i>
            </label>
            <ul class="submenu">
                <li><a href="{{ url('registrarEmpleados/' . $user->id) }}" class="active"><i class="fas fa-plus"></i> Registrar Empleados</a></li>
                <li><a href="{{ url('listaEmpleados/' . $user->id) }}" class="active"><i class="fas fa-plus"></i> Mostrar Empleados</a></li>
                
            </ul>
        </li>

        <li class="menu-item">
            <input type="checkbox" id="clientes-checkbox">
            <label for="clientes-checkbox" class="menu-link">
                <i class="fas fa-users"></i>
                Clientes
                <i class="fas fa-chevron-right arrow-icon"></i>
            </label>
            <ul class="submenu">
                <li><a href="{{ url('registrarCliente/' . $user->id) }}" class="active"><i class="fas fa-plus"></i> Registrar cliente</a></li>
                
                <li><a href="{{ url('listaClientes/' . $user->id) }}" class="active"><i class="fas fa-plus"></i> Mostrar cliente</a></li>
            </ul>
        </li>

        <li class="menu-item">
            <input type="checkbox" id="usuarios-checkbox">
            <label for="usuarios-checkbox" class="menu-link">
                <i class="fas fa-users"></i>
                Usuarios
                <i class="fas fa-chevron-right arrow-icon"></i>
            </label>
            <ul class="submenu">
                <li><a href="#" class="active"><i class="fas fa-plus"></i> Registrar nuevo usuario</a></li>
                <li><a href="#" class="active"><i class="fas fa-plus"></i> Mostrar usuarios</a></li>
            </ul>
        </li>

        <li class="menu-item">
            <input type="checkbox" id="informes-checkbox">
            <label for="informes-checkbox" class="menu-link">
                <i class="fas fa-chart-line"></i>
                Informes y reportes
                <i class="fas fa-chevron-right arrow-icon"></i>
            </label>
            <ul class="submenu">
                <li><a href="#" class="active"><i class="fas fa-plus"></i> Reportes de productos</a></li>
                <li><a href="#" class="active"><i class="fas fa-plus"></i> Reportes de ventas</a></li>
                <li><a href="#" class="active"><i class="fas fa-plus"></i> Reportes de compras</a></li>
                <li><a href="#" class="active"><i class="fas fa-plus"></i> Reportes de empleados</a></li>
                <li><a href="#" class="active"><i class="fas fa-plus"></i> Reportes de clientes</a></li>
                <li><a href="#" class="active"><i class="fas fa-plus"></i> Reportes de usuarios</a></li>
            </ul>
        </li>
    </ul>
</div>
