<center>
<?php
  $current_data=file_get_contents('alumno.json');
  $array_data = json_decode($current_data, true);
  $extra = array(
    'matricula' => $_POST['matricula'],
    'nombre' => $_POST['nombre'],
    'ap_pat' => $_POST['ap_pat'],
    'ap_mat' => $_POST['ap_mat'],
    'español' => $_POST['español'],
    'matematicas' => $_POST['matematicas'],
  );
  $array_data[] = $extra;
  $final_data = json_encode($array_data);
  file_put_contents('alumno.json', $final_data);
  printf("Datos almacenados correctamente")
?>
</center>
<center>
<br>
<br>
<br>
<br>
<input type="button" value="REGRESAR" onclick = "location='index.html'" style='width:170px; height:40px' align='right'>
</center>