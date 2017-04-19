<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script language="javascript">
    function doSearch()
    {
      var tableReg = document.getElementById('datos');
      var searchText = document.getElementById('searchTerm').value.toLowerCase();
      var cellsOfRow="";
      var found=false;
      var compareWith="";
 
      // Recorremos todas las filas con contenido de la tabla
      for (var i = 1; i < tableReg.rows.length; i++)
      {
        cellsOfRow = tableReg.rows[i].getElementsByTagName('td');
        
        found = false;
        // Recorremos todas las celdas
        for (var j = 0; j < cellsOfRow.length && !found; j++)
        {
          compareWith = cellsOfRow[j].innerHTML.toLowerCase();
          if(cellsOfRow[j].className==="email"){
             if (searchText.length == 0 || (compareWith.indexOf(searchText) > -1))
                {
                  found = true;
                }
          }
          // Buscamos el texto en el contenido de la celda
         
        }
        if(found)
        {
          tableReg.rows[i].style.display = '';
        } else {
          // si no ha encontrado ninguna coincidencia, esconde la
          // fila de la tabla
          tableReg.rows[i].style.display = 'none';
        }
      }
    }
  </script>
</head>
<body>

<div class="container">
  <h2>Listado de Empleados</h2>



<script class="cssdeck" src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
<form>
    Buscar por email  <input id="searchTerm" type="text" onkeyup="doSearch()" />
</form>
  <table id="datos" class="table">
    <thead>
      <tr>
        <th></th>
        <th>Name</th>
        <th>Email</th>
        <th>Position</th>
        <th>Salary</th>
        <th>Accion</th>

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
	    <td><?=$cont?></td>
        <td><?=$empleado['name']?></td>
        <td class="email"><?=$empleado['email']?></td>
        <td><?=$empleado['position']?></td>
        <td><?=$empleado['salary']?></td>
        <?php $id=$empleado['id']?>
        <td><a href="/Employee/public/detail/<?=$id?>">Detalle</a></td>
      </tr>
	<?php	   
		}
	?>
     
    </tbody>
  </table>
</div>

</body>
</html>


