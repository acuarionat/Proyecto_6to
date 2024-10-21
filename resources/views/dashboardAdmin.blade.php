<link rel="stylesheet" href="{{ asset('css/perfilAdministrador.css') }}">

<x-app-layout-sesion>
    @if(session('success'))
<script>
Swal.fire({
    title: 'Inicio de Sesion exitoso',
    text: '{{ session('success') }}',
    icon: 'success',
    confirmButtonText: 'Aceptar',
    customClass: {
        popup: 'custom-popup', 
        confirmButton: 'custom-confirm-button' 
    }
});

</script>
@endif
    <section class="container_perfil_administrador">
        <x-Claudia.encabezadoPerfil :saludo="$saludo" :user="$user"/>
        <x-Claudia.mensajeBienvenida :mensajeB="$mensajeB" :user="$user"/>
        <x-Claudia.informacionPerfilU :user="$user"/>
        <x-Claudia.editarPerfil :user="$user"/>
        <x-Claudia.opcionesAdministrador/>   
    </section>
</x-app-layout-sesion>