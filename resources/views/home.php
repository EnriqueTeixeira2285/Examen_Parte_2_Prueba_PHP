<!DOCTYPE html>
<html lang="en">
<head>
  <title>Listado de Empleados - Empresa Developers SAC</title>
  <meta charset="utf-8">
  <script language="javascript">
    function buscar()
    {
      var obj_tabla = document.getElementById('tbEmpleados');
      var obj_email_a_buscar = document.getElementById('txtEmail').value.toLowerCase();
      var obj_fila="";
      var existe=false;
      var obj_email_compara="";
 
      for (var i = 1; i < obj_tabla.rows.length; i++)
      {
        obj_fila = obj_tabla.rows[i].getElementsByTagName('td');
        
        existe = false;
        // Recorremos todas las celdas
        for (var j = 0; j < obj_fila.length && !existe; j++)
        {
          obj_email_compara = obj_fila[j].innerHTML.toLowerCase();
          if(obj_fila[j].className==="email"){
             if (obj_email_a_buscar.length == 0 || (obj_email_compara.indexOf(obj_email_a_buscar) > -1))
                {
                  existe = true;
                }
          }
        }
        if(existe)
        {
          obj_tabla.rows[i].style.display = '';
        } else {
          obj_tabla.rows[i].style.display = 'none';
        }
      }
    }
  </script>
</head>
<body>

 
  <h2>Listado de Empleados - Empresa Developers SAC</h2>

<form>
    Email: <input id="txtEmail" type="text" onkeyup="buscar()" />
</form>
  <table id="tbEmpleados" width="100%">
    <thead>
      <tr>
        <th width="25%">Name</th>
        <th width="25%">Email</th>
        <th width="25%">Position</th>
        <th width="10%">Salary</th>
        <th width="10%"> </th>

      </tr>
    </thead>
    <tbody>
    <?php
    	$cont=0;
    	$id;
		foreach ($empleados as $empleado) {
		$cont++;
	?>
	   <tr class="success">
	 	<td><?=$empleado['name']?></td>
        <td><?=$empleado['email']?></td>
        <td><?=$empleado['position']?></td>
        <td><?=$empleado['salary']?></td>
        <?php $id=$empleado['id']?>
        <td><a href="/Employee/public/detail/<?=$id?>">Ver Detalle</a></td>
      </tr>
	<?php	   
		}
	?>
    </tbody>
  </table>
 
</body>
</html>


