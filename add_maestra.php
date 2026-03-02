<?php
include("conexion.php");
include("includes/header.php");
?>
<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5">
<h3>Registrar Maestra</h3>

<form method="POST">
<input name="nombre" class="form-control mb-2" placeholder="Nombre" required>
<input name="correo" class="form-control mb-2" placeholder="Correo" required>
<input name="cel" class="form-control mb-2" placeholder="Celular" required>
<input name="usuario" class="form-control mb-2" placeholder="Usuario" required>
<input name="password" class="form-control mb-2" placeholder="Contraseña" required>
<button class="btn btn-primary">Guardar</button>
</form>
        <hr>
<h4>Maestras Registradas</h4>

<table class="table table-bordered">
<tr>
<th>ID</th>
<th>Nombre</th>
<th>Correo</th>
<th>Celular</th>
<th>Usuario</th>
</tr>

<?php
$sql = "SELECT p.*, u.usuario_usu 
        FROM personal p
        JOIN usuarios u ON p.id_usu = u.id_usu";

$res = $conn->query($sql);

while($row = $res->fetch_assoc()){
echo "
<tr>
<td>{$row['id']}</td>
<td>{$row['maestra_per']}</td>
<td>{$row['correo_per']}</td>
<td>{$row['cel_per']}</td>
<td>{$row['usuario_usu']}</td>
</tr>";
}
?>
</table>

<?php
if($_POST){
$usuario=$_POST['usuario'];
$pass=$_POST['password'];
$nombre=$_POST['nombre'];
$correo=$_POST['correo'];
$cel=$_POST['cel'];

$conn->query("INSERT INTO usuarios(usuario_usu,password_usu,rol) VALUES('$usuario','$pass','docente')");
$id=$conn->insert_id;

$conn->query("INSERT INTO personal(id_usu,maestra_per,correo_per,cel_per) VALUES($id,'$nombre','$correo','$cel')");
echo "<div class='alert alert-success mt-3'>Maestra guardada</div>";
}
?>
</div>
</body>
</html>