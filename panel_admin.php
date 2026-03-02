<?php
session_start();
if(!isset($_SESSION['rol'])){ header("Location: login.php"); }
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Panel Admin</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="includes/style.css">
</head>
<body class="bg-light">

<nav class="navbar navbar-dark bg-primary px-3">
<span class="navbar-brand">Panel Administrador</span>
<a href="logout.php" class="btn btn-light">Salir</a>
</nav>

<div class="container mt-4">
<div class="row g-3">

<div class="col-md-4">
<a href="add_maestra.php" class="card text-center p-4 shadow text-decoration-none">
<h4>👩‍🏫</h4>
<p>Registrar Maestra</p>
</a>
</div>

<div class="col-md-4">
<a href="add_grupo.php" class="card text-center p-4 shadow text-decoration-none">
📚 Crear Grupo
</a>
</div>

<div class="col-md-4">
<a href="add_alumno.php" class="card text-center p-4 shadow text-decoration-none">
🧒 Registrar Alumno
</a>
</div>

</div>
</div>
</body>
</html>