<?php
    $id=$_GET['id'];
    $mysqli = new mysqli('localhost','root', '', 'vigzone');
    $mysqli->set_charset("utf8");
    $query = $mysqli->query("DELETE FROM usuarios WHERE id_usuario  ='".$id."'");
    header("location: bajas.php")

                
?>