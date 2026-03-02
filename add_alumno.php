<?php
include("conexion.php");
include("includes/header.php");
?>

<h3>Registrar Alumno</h3>

<form method="POST">
<input name="nombre" class="form-control mb-2" placeholder="Nombre" required>
<input name="apellido" class="form-control mb-2" placeholder="Apellido" required>

<select name="id_gpo" class="form-control mb-2">
<?php
$r=$conn->query("SELECT * FROM grupo");
while($row=$r->fetch_assoc()){
echo "<option value='{$row['id_gpo']}'>{$row['grupo_gpo']}</option>";
}
?>
</select>

<button class="btn btn-primary">Guardar</button>
</form>

<hr>
<h4>Alumnos Registrados</h4>

<table class="table table-bordered">
<tr>
<th>ID</th>
<th>Nombre</th>
<th>Apellido</th>
<th>Grupo</th>
</tr>

<?php
$sql="SELECT a.*, g.grupo_gpo
      FROM alumnos a
      JOIN grupo g ON a.id_gpo=g.id_gpo";

$res=$conn->query($sql);

while($row=$res->fetch_assoc()){
echo "
<tr>
<td>{$row['id_alu']}</td>
<td>{$row['nombre_alu']}</td>
<td>{$row['apellidos_alu']}</td>
<td>{$row['grupo_gpo']}</td>
</tr>";
}
?>
</table>

<?php
if($_POST){
$n=$_POST['nombre'];
$a=$_POST['apellido'];
$id=$_POST['id_gpo'];

$conn->query("INSERT INTO alumnos(id_gpo,nombre_alu,apellidos_alu)
VALUES($id,'$n','$a')");

echo "<div class='alert alert-success mt-3'>
Alumno guardado
</div>";
}
?>
