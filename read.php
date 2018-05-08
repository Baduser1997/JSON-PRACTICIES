<?php
  $json = file_get_contents('alumno.json');
  $json_data = json_decode($json, true);
  require('read.html');
?>
<center>
<br>
<br>
<br>
<br>
<input type="button" value="INICIO" onclick = "location='index.html'" style='width:170px; height:40px' align='right'>
</center>