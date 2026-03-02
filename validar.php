<?php
session_start();
include("conexion.php");

$usuario = $_POST['usuario'];
$pass = $_POST['password'];

$sql = "SELECT * FROM usuarios WHERE usuario_usu='$usuario'";
$res = $conn->query($sql);

if($res->num_rows > 0){
  $row = $res->fetch_assoc();
  
  if($pass == $row['password_usu']){
    $_SESSION['id_usu'] = $row['id_usu'];
    $_SESSION['rol'] = $row['rol'];

    if($row['rol']=="admin"){
      header("Location: panel_admin.php");
    } else {
      echo "No eres admin";
    }
  } else {
    echo "Contraseña incorrecta";
  }
} else {
  echo "Usuario no existe";
}
?>