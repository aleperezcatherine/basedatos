<form action="conexion.php" method="post">
    Nombre: <input type="text" name="nombre" required>
    <br>
    <br>
    Clase: <input type="text" name="clase" required>
    <br>
    <br>
    Familia: <input type="text" name="familia" required>
    <br>
    <br>
    Imagen: <input type="text" name="imagen" required>
    <input type="submit">
</form>

<br>

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

$sql = "SELECT nombre, clase, familia, imagen FROM mamiferos";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Salida de datos de cada fila
    while ($row = $result->fetch_assoc()) {
        echo "Nombre: " . $row["nombre"]. " - Clase: " . $row["clase"]. " - familia: "
        . $row["familia"]. " - <img src='" . $row["imagen"] . "'>" . "<br>";
    }
} else {
    echo "0 resultados";
}
$conn->close();
?>

