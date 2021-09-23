<?php require 'partials/header.php'; ?> 
<h1>Reporte de Facturación</h1>
<h4>Buscar Código de Contenedor</h4>

<form action="" method="post" class="form-codigo-buscar-contenedor">
  <label for="codigo-de-contenedor">Código de contenedor:
    <input type="text" name="codigo-de-contenedor" id="">
  </label>
  <button>Mostrar Detalle</button>
  
</form>

<div class="detalles">
  <table class="tabla-detalles">
    <th class="tabla-detalles__encabezado">
      <tr>
        <td>Tipo de rubro</td>
        <td>Valor</td>
      </tr>
    </th>
    <tbody class="tabla-detalles__body">
      <tr>
        <td>Flete marítimo internacional</td>
        <td class="valor-flete-maritimo-internacional">29 toneladas x el precio del contendor</td>
      </tr>
      <tr>
        <td>Desplazamiento del contenedor</td>
        <td class="valor-desplazamiento-del-contenedor"> $150 puertos origen o destino (tarifa única)</td>
      </tr>
      <tr>
        <td>BAF - Recargo de Combustible</td>
        <td class="valor-baf-recargo-de-combustible">$100 (tarifa única)</td>
      </tr>
      <tr>
        <td>CAF - Ajustes tipo de Cambio</td>
        <td class="valor-car-ajustes-de-cambio">$100 (tarifa única)</td>
      <tr>
        <td>BL - Gastos de Documentación</td>
        <td class="valor-bl-gastos-de-documentacion">$300 (tarifa única)</td>
      <tr>
        <td>T3 - Tasas Portuarias</td>
        <td class="valor-t3-tasas-porturarias">$300 (tarifa única)</td>
      <tr>
        <td>Total</td>
        <td class="valor-total">Suma de todos los incisos</td>
      </tr>
    </tbody>
  </table>
</div>

<?php require 'partials/footer.php'; ?>