<link rel="stylesheet" href="{{ asset('css/encabezadoDashboard.css') }}">
<head>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
</head>

<div class="encabezado_p">
    <div class="toggle_btn" onclick="toggleNav()">
        <i class="fa-solid fa-bars"></i>
    </div>
    
    <h1 class="saludo">
        {{$saludo}} {{ $user->name }}
    </h1>
    
    <div class="cerrar_s">
        <a href="{{ url('perfil/' . auth()->user()->id) }}" class="action_btn">
            <i class="fas fa-user-cog"></i> 
        </a>
        <a href="{{route('account.logout')}}" class="action_btn">
            <i class="fas fa-power-off"></i>
        </a>
    </div>
</div>

<div class="contenedor_nav_lateral">
    <div class="logo_empresa">
        <img src="{{ asset('images/log.png') }}" alt="Logo">
    </div>
    <div class="contenedor-opcioness">
        <x-Claudia.opcionesNavLateral/>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const navLateral = document.querySelector('.contenedor_nav_lateral');
        const encabezado = document.querySelector('.encabezado_p');
        const content = document.querySelector('.contenedorDashAdmin');

        const isMenuOpen = localStorage.getItem('menuOpen');

        if (isMenuOpen === null || isMenuOpen === 'true') {
            navLateral.classList.add('visible');
            encabezado.classList.add('push');
            content?.classList.add('push');

            localStorage.setItem('menuOpen', 'true');
        } else {
            navLateral.classList.remove('visible');
            encabezado.classList.remove('push');
            content?.classList.remove('push');
        }
    });

    function toggleNav() {
        const navLateral = document.querySelector('.contenedor_nav_lateral');
        const encabezado = document.querySelector('.encabezado_p');
        const content = document.querySelector('.contenedorDashAdmin');

        const isMenuCurrentlyOpen = navLateral.classList.toggle('visible');
        encabezado.classList.toggle('push');
        content?.classList.toggle('push');

        localStorage.setItem('menuOpen', isMenuCurrentlyOpen);
    }
</script>
