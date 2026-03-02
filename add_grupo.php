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
<h3>Crear Grupo</h3>

<form method="POST">
<input name="grupo" class="form-control mb-2" placeholder="Nombre grupo" required>

<select name="id_usu" class="form-control mb-2">
<?php
$r=$conn->query("SELECT * FROM usuarios WHERE rol='docente'");
while($row=$r->fetch_assoc()){
echo "<option value='{$row['id_usu']}'>{$row['usuario_usu']}</option>";
}
?>
</select>

<button class="btn btn-primary">Guardar</button>
</form>
        <hr>
<h4>Grupos Existentes</h4>

<table class="table table-bordered">
<tr>
<th>ID</th>
<th>Grupo</th>
<th>Docente</th>
</tr>

<?php
$sql="SELECT g.*, u.usuario_usu
      FROM grupo g
      JOIN usuarios u ON g.id_usu=u.id_usu";

$res=$conn->query($sql);

while($row=$res->fetch_assoc()){
echo "
<tr>
<td>{$row['id_gpo']}</td>
<td>{$row['grupo_gpo']}</td>
<td>{$row['usuario_usu']}</td>
</tr>";
}
?>
</table>

<?php
if($_POST){
$grupo=$_POST['grupo'];
$id=$_POST['id_usu'];
$conn->query("INSERT INTO grupo(id_usu,grupo_gpo) VALUES($id,'$grupo')");
echo "<div class='alert alert-success mt-3'>Grupo creado</div>";
}
?>
</div>
</body>
</html>