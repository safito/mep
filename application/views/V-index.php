
<?php


$rol = $this->session->userdata['logged_in']['rol'];
$nombre = $this->session->userdata['logged_in']['nombre'];
$id_usuario = $this->session->userdata['logged_in']['id_usuario'];


echo "<h1> Bienvenida $nombre </h1>";
echo "<br>";
echo "<br>";
echo "<h2> Su rol es $rol y su ID: $id_usuario </h2>";



?>


