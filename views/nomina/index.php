<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Nomina</title>
  </head>
  <body>
    <?php require_once('views/header.php');?>
    <?php echo "Cargar nomina";?>
    <form action="<?php echo constant('URL');?>nomina/upload" method="post" enctype="multipart/form-data">
      <input type="file" name="nominaForm" accept="text/csv">
      <input type="submit" name="submit"  value="submit">
    </form>
    <?php
/*$file = fopen( constant('URL')."uploads/NominaEjemplo.csv","r");

while(! feof($file))
  {

  print_r(fgetcsv($file[$i]));
  }

fclose($file);*/


?>
  </body>
</html>
