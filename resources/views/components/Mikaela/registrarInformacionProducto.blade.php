<link rel="stylesheet" href="{{ asset('css/registrarProducto.css') }}">

<div class="contenedor_registrar_editar_producto">

    <form action="{{ route('producto.store', ['id' => $user->id]) }}" method="POST">
        @csrf
        <h2 class="seccion_forms">Registrar Imagen producto</h2>
        <div class="registro_imagen_producto">
            <div class="contenedor_datos">
                <h3 class="subtitulo_Info">URL de la Imagen:</h3>
                <input type="text" name="direccion_imagen" class="edit_informacion" id="direccion_imagen" placeholder="URL de la imagen" required>
            </div>
            <div class="contenedor_datos">
                <h3 class="subtitulo_Info">Descripción de la imagen:</h3>
                <textarea name="descripcion_imagen" class="edit_informacion" id="descripcion_imagen" placeholder="Descripción de Imagen"></textarea>
            </div>
        </div>

        <h2 class="seccion_forms">Registrar Información producto</h2>
        <div class="registro_info_producto">
            <div class="contenedor_datos">
                <h3 class="subtitulo_Info">Nombre del Producto:</h3>
                <input type="text" name="nombre" class="edit_informacion" id="nombre" placeholder="Ingrese Nombre del Producto" required>
            </div>

            <div class="contenedor_datos">
                <h3 class="subtitulo_Info">Descripcion del producto:</h3>
                <textarea name="descripcion" id="descripcion" class="edit_informacion" placeholder="Ingrese descripcion del producto"></textarea>
            </div>
            <div class="contenedor_datos">
                <h3 class="subtitulo_Info">Recomendaciones de Uso:</h3>
                <textarea name="recomendaciones_uso" id="recomendaciones_uso" class="edit_informacion" placeholder="Ingrese recomendaciones"></textarea>
            </div>
            <div class="contenedor_datos">
                <h3 class="subtitulo_Info">Seleccione una marca:</h3>
                <select name="marca" id="marca" class="edit_informacion">
                    @foreach ($subparametrosMarca as $subparametro)
                    <option value="{{ $subparametro->id_sub_parametros }}">{{ $subparametro->descripcion }}</option>
                    @endforeach
                </select>
            </div>

            <div class="contenedor_datos">
                <h3 class="subtitulo_Info">Seleccione una categoría:</h3>
                <select name="categoria" id="categoria" class="edit_informacion">
                    @foreach ($subparametrosCategorias as $subparametro)
                    <option value="{{ $subparametro->id_sub_parametros }}">{{ $subparametro->descripcion }}</option>
                    @endforeach
                </select>
            </div>
            <div class="contenedor_datos">
                <h3 class="subtitulo_Info">Seleccione un color:</h3>

                <select name="color" id="color" class="edit_informacion">
                    @foreach ($subparametrosColor as $subparametro)
                    <option value="{{ $subparametro->id_sub_parametros }}">{{ $subparametro->descripcion }}</option>
                    @endforeach
                </select>
            </div>
            <div class="contenedor_datos">
                <h3 class="subtitulo_Info">Seleccione una presentación:</h3>
                <select name="presentacion" id="presentacion" class="edit_informacion">
                    @foreach ($subparametrosPresentacion as $subparametro)
                    <option value="{{ $subparametro->id_sub_parametros }}">{{ $subparametro->descripcion }}</option>
                    @endforeach
                </select>
            </div>
            <div class="contenedor_datos">
                <h3 class="subtitulo_Info">Seleccione el estado del producto:</h3>
                <select name="estado" id="estado" class="edit_informacion">
                    @foreach ($subparametrosEstado as $subparametro)
                    <option value="{{ $subparametro->id_sub_parametros }}">{{ $subparametro->descripcion }}</option>
                    @endforeach
                </select>
            </div>

            <div class="contenedor_datos">
                <h3 class="subtitulo_Info">Seleccione un Lote:</h3>
                <select name="id_lote" id="id_lote" class="edit_informacion">
                    @foreach ($lote as $lotes)
                    <option value="{{ $lotes->id_lote }}">{{ $lotes->codigo_lote}}</option>
                    @endforeach
                </select>
            </div>

            <div class="contenedor_datos">
                <h3 class="subtitulo_Info">Seleccione un proveedor:</h3>
                <select name="id_proveedor" id="id_proveedor" class="edit_informacion">
                    @foreach ($proveedores as $proveedor)
                    <option value="{{ $proveedor->id_proveedor }}">{{ $proveedor->empresa_proveedor }}</option>
                    @endforeach
                </select>
            </div>
            <div class="contenedor_datos">
                <h3 class="subtitulo_Info">Cantidad:</h3>
                <input type="number" name="cantidad" id="cantidad" class="edit_informacion" placeholder="Ingrese cantidad">
            </div>

            <div class="contenedor_datos">
                <h3 class="subtitulo_Info">Precio:</h3>
                <input type="text" name="precio" class="edit_informacion" id="precio" placeholder="Ingrese el precio del producto" required>
            </div>
            <div class="contenedor_datos">
                <h3 class="subtitulo_Info">Detalle del contenido:</h3>
                <input type="text" name="detalle_medida" class="edit_informacion" id="detalle_medida" placeholder="Ingrese contenido" required>
            </div>
        </div>
        <div class="boton_guardar_actualizar_productos">
            <button type="submit" class="boton_busqueda">Guardar Producto</button>
        </div>
    </form>
</div>