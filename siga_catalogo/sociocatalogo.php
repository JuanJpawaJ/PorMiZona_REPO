<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SOCIO CATALOGO</title>
</head>
 <style>
 body, html {
    height: 100%;
    margin: 0;
    font-family: Arial, sans-serif;
}

.container {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100%;
    background-image: url('../assets/img/imagenes_index/f_catalogosocio.jpg');
    background-size: cover;
    background-position: center;
}

form {
    background: rgba(255, 255, 255, 0.8);
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    text-align: center;
    width: 250px; /* Ajustado para hacer el formulario más angosto */
}

input[type="text"], input[type="password"] {
    width: 100%;
    padding: 10px;
    margin: 10px 0;
    border: 1px solid #ccc;
    border-radius: 5px;
}


button {
    padding: 10px 20px;
    background: #4CAF50;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

button:hover {
    background: #45a049;
}


/* Media Query para dispositivos móviles */
@media (max-width: 600px) {
    .container {
        background-image: url('../assets/img/imagenes_index/f_catalogosocio_celular.jpg'); /* Imagen para móviles */
    }
}

 </style>
<body>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CATALOGO DE SOCIO</title>
    <!-- <link rel="stylesheet" href="styles.css"> -->
</head>
<body>
    <div class="container">
        <form action="catalogo_list_items_admin.php" method="post">
            <h2>Ingreso a su CATÁLOGO</h2>
            <label for="username">Ingrese el usuario:</label>
            <input type="text" id="xusername" name="xusername" required>
            <label for="password">Ingrese el password:</label>
            <input type="password" id="xpassword" name="xpassword" required>
            <button type="submit">Ingresar</button>
        </form>
    </div>
</body>
</html>

</body>
</html>