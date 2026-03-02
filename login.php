<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Login</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light d-flex justify-content-center align-items-center vh-100">

<form action="validar.php" method="POST" class="card p-4 shadow" style="width:350px">
<h3 class="text-center">Login Admin</h3>
<input type="text" name="usuario" class="form-control mb-3" placeholder="Usuario" required>
<input type="password" name="password" class="form-control mb-3" placeholder="Contraseña" required>
<button class="btn btn-primary w-100">Entrar</button>
</form>

</body>
</html>