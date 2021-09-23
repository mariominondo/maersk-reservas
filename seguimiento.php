<?php require 'partials/header.php'; ?> 

<h1>Seguimiento</h1>

En imagen<br />
1. Hora de salida del contenedor<br />
2. La ruta marítima trazada para el puerto origen <br />
3. La hora estimada de llegada al puerto destino.<br />
4. La página debe permitir realizar la búsqueda del contenedor aplicando diferentes filtros, ya que el usuario podría no tener a mano el código de contenedor específico.<br />
<br>
Google Maps API <br>
1. https://developers.google.com/maps/documentation/javascript/overview <br>
2. https://developers.google.com/maps/documentation/geocoding/overview<br>
<br>

<form action="" method="get">
    <label for="buscar-contenedor">Buscar Contenedor</label>
    <input type="text" name="buscar-contenedor" id="" placeholder="Buscar...">
    <button type="submit">Buscar</button>
</form>

<?php require 'partials/footer.php'; ?>