<link rel="stylesheet" href="{{ asset('css/perfilAdministrador.css') }}">


<x-app-layout-AdministradorDash :saludo="$saludo" :user="$user">
    <section class="contenedorDashAdmin">
         <x-Claudia.modEmpleados.listaEmpleados :empleados="$empleados" :user="$user"/> 
    </section>
</x-app-layout-AdministradorDash >
