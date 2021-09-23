<?php
    session_start();
?>
<?php require 'partials/header.php'; ?>

<h1>Reserva</h1>

<form action="" method="post">
    <label for="name">Nombre o Empresa:</label>
    <input type="text" name="nombre">

    <label for="nit">NIT:</label>
    <input type="text" name="nit" id="">

    <label for="direccion">Dirección:</label>
    <input type="text" name="direccion" id="">
    
    <label for="puerto-origen">Puerto de Origen:</label>
    <input type="text" name="puerto-origen" id="" list="puerto-origen">
        <datalist id="puerto-origen">
            <option value="25868 –Puerto Santo Tomas de Castilla –Guatemala">
            <option value="56899 –Puerto Manzanillo, Colima –México">
            <option value="78985 –Puerto San Lorenzo –Honduras">
            <option value="98789 –Puerto de Balboa –Panamá">
            <option value="23456 –Puerto de Qingdao –China">
            <option value="23564 –Puerto Felixstowe, Suffolk –Reino Unido">
            <option value="98987 –Puerto Long Beach, Los Ángeles –Estados Unidos">
            <option value="15486 –Puerto de Santos –Brasil">
        </datalist>

    <label for="pais-origen">País de Origen:</label>
    <input type="" name="pais-origen" id="" list="pais-origen">
        <datalist id="pais-origen">
            <option value="GUA –Guatemala">
            <option value="MX –México">
            <option value="HND –Honduras">
            <option value="PAN –Panamá">
            <option value="CHN –China">
            <option value="UK –Reyno Unido">
            <option value="USS –Estados Unidos">
            <option value="BRS –Brasil">
        </datalist>
    
        <label for="puerto-destino">Puerto de Destino:</label>
    <input type="text" name="puerto-destino" id="" list="puerto-destino">
        <datalist id="puerto-destino">
            <option value="25868 –Puerto Santo Tomas de Castilla –Guatemala">
            <option value="56899 –Puerto Manzanillo, Colima –México">
            <option value="78985 –Puerto San Lorenzo –Honduras">
            <option value="98789 –Puerto de Balboa –Panamá">
            <option value="23456 –Puerto de Qingdao –China">
            <option value="23564 –Puerto Felixstowe, Suffolk –Reino Unido">
            <option value="98987 –Puerto Long Beach, Los Ángeles –Estados Unidos">
            <option value="15486 –Puerto de Santos –Brasil">
        </datalist>
        
    <label for="pais-destino">País de Destino:</label>
    <input type="" name="pais-destino" id="" list="pais-destino">
        <datalist id="pais-destino">
            <option value="GUA –Guatemala">
            <option value="MX –México">
            <option value="HND –Honduras">
            <option value="PAN –Panamá">
            <option value="CHN –China">
            <option value="UK –Reyno Unido">
            <option value="USS –Estados Unidos">
            <option value="BRS –Brasil">
        </datalist>
        
    <label for="receptor-de-carga">Receptor de Carga:</label>
    <input type="text" name="receptor-de-carga" id="">
    
    <label for="contrasena-de-recepcion">Contraseña de Recepción:</label>
    <input type="text" name="contrasena-de-recepcion" id="" readonly>
    
    <label for="tipo-de-carga">Tipo de Carga:</label>
    <input type="" name="tipo-de-carga" id="" list="tipo-de-carga">
        <datalist id="tipo-de-carga">
            <option value="Productos animales">
            <option value="Cereales y otras preparaciones">
            <option value="Textiles">
            <option value="Prendas de Vestir">
            <option value="Cueros, calzado, etc.">
            <option value="Máquinas no eléctricas">
            <option value="Máquinas eléctricas">
            <option value="Material de transporte">
            <option value="Manufacturas">
            <option value="Salud y productos para el hogar">
        </datalist>

    <label for="descripcion-de-la-carga">Descripción de la Carga:</label>
    <input type="text" name="descripcion-de-la-carga" id="">
    
    <label for="peso-de-carga">Peso de Carga:</label> 
    <input type="text" name="peso-de-carga" id=""> kg
    
    <label for="valor-de-la-carga">Valor de la Carga:</label>
    <input type="text" name="valor-de-la-carga" id="" list="valor-de-la-carga">
        <datalist id="valor-de-la-carga">
            <option value="$1,000">
            <option value="$2,000">
            <option value="$3,000">
            <option value="$4,000">
            <option value="$5,000">
        </datalist>

    <label for="tipo-de-contenedor">Tipo de Contenedor:</label>
    <input type="text" name="tipo-de-contenedor" id="" list="tipo-de-contenedor">
        <datalist id="tipo-de-contenedor">
            <option value="DRVA -Dry Van o contenedor seco - $200 x tonelada">
            <option value="REFRR -Reefero contenedor refrigerado - $300 x tonelada">
            <option value="OTSUP -Open Top o apertura superior - $260 x tonelada">
            <option value="OSSI -Open Side o apertura lateral - $260 x tonelada">
            <option value="TKCS -Tank o contenedor cisterna - $400 x tonelada">
        </datalist>

    <label for="codigo-de-contenedor">Código de Contenedor:</label>
    <input type="text" name="codigo-de-contenedor" id="" readonly>

    <button type="submit">Reservar</button>
</form>

<?php require 'partials/footer.php'; ?>