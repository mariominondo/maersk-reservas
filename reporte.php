<?php require 'partials/header.php'; ?> 
<h1>Reporte</h1>

<h1>Facturación</h1>
<h3>Buscar Código de Contenedor</h3>

<form action="" method="post">
  <label for="codigo-de-contenedor">Código de contenedor:
    <input type="text" name="codigo-de-contenedor" id="">
  </label>
  <div>
    <button>Mostrar Detalle</button>
  </div>
</form>

<div class="detalles">
  <table>
    <th>
      <tr>
        <td>Tipo de rubro</td>
        <td>Valor</td>
      </tr>
    </th>
    <tbody>
      <tr>
        <td>Flete marítimo internacional</td>
        <td class="valor-flete-maritimo-internacional">29 toneladas x el precio del contendor</td>
      </tr>
      <tr>
        <td>Desplazamiento del contenedor</td>
        <td class="valor-desplazamiento-del-contenedor"> $150 puertos origen o destino (tarifa única)</td>
      </tr>
      <tr>
        <td>BAF - Recargo de Combustible</tr>
        <td class="valor-baf-recargo-de-combustible">$100 (tarifa única)</td>
      </tr>
      <tr>
        <td>CAF - Ajustes tipo de Cambio</tr>
        <td class="valor-car-ajustes-de-cambio">$100 (tarifa única)</td>
      <tr>
        <td>BL - Gastos de Documentación</tr>
        <td class="valor-bl-gastos-de-documentacion">$300 (tarifa única)</td>
      <tr>
        <td>T3 - Tasas Portuarias</tr>
        <td class="valor-t3-tasas-porturarias">$300 (tarifa única)</td>
      <tr>
        <td>Total</tr>
        <td class="valor-total">Suma de todos los incisos</td>
      </tr>
    </tbody>
  </table>
</div>

<?php require 'partials/footer.php'; ?>