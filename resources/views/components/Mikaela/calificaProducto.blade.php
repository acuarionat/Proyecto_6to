<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/calificacionProducto.css') }}">
    <title>Comentario</title>
</head>
<body>
    <div class="contenedor_comentario_producto">
        <h2 class="texto_cuentanos">¡Cuéntanos por qué te gusta!</h2>
            <form action="{{ route('store') }}" method="POST">
                @csrf  
                <div class="contenedor_estrellas">
                    <input type="radio" id="star1" name="rating" value="5">
                    <label for="star1">★</label>
                    <input type="radio" id="star2" name="rating" value="4">
                    <label for="star2">★</label>
                    <input type="radio" id="star3" name="rating" value="3">
                    <label for="star3">★</label>
                    <input type="radio" id="star4" name="rating" value="2">
                    <label for="star4">★</label>
                    <input type="radio" id="star5" name="rating" value="1">
                    <label for="star5">★</label>
                </div>
                <input type="hidden" name="id_producto" value="{{ $producto->id_producto }}">

                <h3 class="texto_dejanos">Déjanos tu comentario</h3>
                <textarea name="comentario" placeholder="Escribe tu comentario aquí..." required></textarea>
                <button type="submit" class="boton_enviar_comentario">Enviar Comentario</button>
            </form>
        </div>
    </div>
   
</body>
</html>
