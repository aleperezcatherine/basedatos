<?php
$servername = "localhost";
$username = "bd_ale";
$password = "9p4yH.icD/*xh)Y/";
$dbname = "zoologico";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$nombre = $_POST['nombre'];
$clase = $_POST['clase'];
$familia = $_POST['familia'];
$imagen = $_POST['imagen'];

// Preparar la sentencia de inserción
$datos = $conn->prepare("INSERT INTO mamiferos (nombre, clase, familia, imagen) VALUES (?, ?, ?, ?)");
$datos->bind_param("ssss", $nombre, $clase, $familia, $imagen);

// Ejecutar la sentencia de inserción
if ($datos->execute()) {
    echo "Nuevos datos ingresados";
} else {
    echo "Error: " . $datos->error;
}

// Cerrar sentencia y conexión
$datos->close();
$conn->close();
?>

<?php
// ... (código anterior)

$id = $_POST['id'];

// Preparar la consulta de actualización
$consulta = $conn->prepare("UPDATE mamiferos SET nombre = ?, clase = ?, familia = ?, imagen = ? WHERE id = ?");
$consulta->bind_param("ssssi", $nombre, $clase, $familia, $imagen, $id);

// Ejecutar la consulta de actualización
if ($consulta->execute()) {
    echo "Datos actualizados correctamente";
} else {
    echo "Error al actualizar datos: " . $consulta->error;
}

// Cerrar consulta y conexión
$consulta->close();
$conn->close();
?>

<?php
$servername = "localhost";
$username = "bd_ale";
$password = "9p4yH.icD/*xh)Y/";
$dbname = "zoologico";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$nombre = $_POST['nombre'];
$clase = $_POST['clase'];
$familia = $_POST['familia'];
$imagen = $_POST['imagen'];

// Preparar la sentencia de inserción
$datos = $conn->prepare("INSERT INTO mamiferos (nombre, clase, familia, imagen) VALUES (?, ?, ?, ?)");
$datos->bind_param("ssss", $nombre, $clase, $familia, $imagen);

// Ejecutar la sentencia de inserción
if ($datos->execute()) {
    echo "Nuevos datos ingresados";
} else {
    echo "Error: " . $datos->error;
}

// Cerrar sentencia y conexión
$datos->close();
$conn->close();
?>

<?php
// ... (código anterior)

$id = $_POST['id'];

// Preparar la consulta de actualización
$consulta = $conn->prepare("UPDATE mamiferos SET nombre = ?, clase = ?, familia = ?, imagen = ? WHERE id = ?");
$consulta->bind_param("ssssi", $nombre, $clase, $familia, $imagen, $id);

// Ejecutar la consulta de actualización
if ($consulta->execute()) {
    echo "Datos actualizados correctamente";
} else {
    echo "Error al actualizar datos: " . $consulta->error;
}

// Cerrar consulta y conexión
$consulta->close();
$conn->close();
?>


<?php
$servername = "localhost";
$username = "bd_ale";
$password = "[9p4yH.icD/*xh)Y/";
$dbname = "zoologico";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$nombre = $_POST['nombre'];
$clase = $_POST['clase'];
$familia = $_POST['familia'];
$imagen = $_POST['imagen'];
$id = $_POST['id']; 

// Preparar la consulta
$consulta = $conn->prepare("UPDATE mamiferos SET nombre = ?, clase = ?, familia = ?, imagen = ? WHERE id = ?");
$consulta->bind_param("ssssi", $nombre, $clase, $familia, $imagen, $id);

// Ejecutar la consulta
if ($consulta->execute()) {
    echo "Datos actualizados correctamente";
} else {
    echo "Error al actualizar datos: " . $consulta->error;
}

// Cerrar consulta y conexión
$consulta->close();
$conn->close();
?>
