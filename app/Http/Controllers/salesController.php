<?php

namespace App\Http\Controllers;
use App\Models\Usuario;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class salesController extends Controller
{
    public function mostrarVentas($id)
    {

        $user = DB::table('usuarios')->where('id', $id)->first();

        
        if (!$user) {
            return redirect('/users')->with('error', 'Usuario no encontrado');
        }
        $user = Usuario::with('rol')->find($user->id);
        $saludo = match ($user->rol->nombre_rol) {
            'empleado' => 'Perfil de Empleado',
            'admin' => 'Perfil del Administrador'
        };

        // Ejecutamos la consulta usando Query Builder
        $ventas = DB::table('inventario_venta as iv')
                    ->select('iv.id_inventario_venta', 'p.nombre as producto', 'iv.cantidad', 'u.name as usuario', 'iv.fecha_venta')
                    ->join('producto as p', 'iv.id_producto', '=', 'p.id_producto')
                    ->join('usuarios as u', 'iv.id_usuario_accion', '=', 'u.id')
                    ->limit(1000)
                    ->get();

        // Pasar los datos a la vista
        return view('mostrarVentas', compact('user','saludo','ventas'));
    }
}
