<?php

namespace App\Http\Controllers;
use App\Models\Producto;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class perfilEmpleadoController extends Controller
{
    public function recuperar_info_empleado($id)
    {
        if (Auth::user()->rol->nombre_rol !== 'empleado') {
            return redirect()->route('account.dashboard')->with('error', 'Acceso denegado.');
        }

        $user = DB::table('usuarios')->where('id', $id)->first();

        if (!$user) {
            return redirect()->route('account.dashboard')->with('error', 'Usuario no encontrado');
        }
        $cantidadVentas = DB::table('inventario_venta')->count();
        $cantidadClientes = DB::table('cliente')->count();
        $cantidadProductos = Producto::count();
        $saludo = 'Perfil de Empleado';
        $mensajeB = 'Este es tu panel personal, donde podras realizar tus tareas como emplead@.';

        $cantidadDatos = [
            'Ventas' => $cantidadVentas,
            'Clientes' => $cantidadClientes,
            'Productos' => $cantidadProductos,
        ];
        return view('dashboardEmpleado', compact('user', 'saludo', 'mensajeB','cantidadDatos'));
        }
}
