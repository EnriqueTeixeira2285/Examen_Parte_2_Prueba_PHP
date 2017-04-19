<!DOCTYPE html>
<html lang="en">
<head>
  <title>Detalle de Empleado - Empresa Developers SAC</title>
  <meta charset="utf-8">
  </head>
<body>

  <h2>Detalle de Empleado - Empresa Developers SAC</h2>
  
                 
<div>
 
Nombre: <?=$name?>
<br />
Email :
<?=$email?>
<br />
Phone :
<?=$phone?>
<br />
Address :
<?=$address?>
<br />
Position :
<?=$position?>
<br />
Salary :
<?=$salary?>
<br />
Skills : 
<br />

<?php for ($i=0; $i <count($ski) ; $i++) { ?>
<?="<p style='text-indent: 1cm;''>".$ski[$i]."<br></p>"?>
<?php } ?>
</div>
           
 
</body>
</html>
