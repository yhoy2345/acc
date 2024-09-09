<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "persona";
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "CREATE TABLE usuarios (
        id INT(11) AUTO_INCREMENT PRIMARY KEY,
        nombre VARCHAR(40) NOT NULL,
        correo VARCHAR(50) NOT NULL,
        password VARCHAR(255) NOT NULL,  
        telefono VARCHAR(15) NOT NULL,
        direccion VARCHAR(255) NOT NULL,
        fecha_nacimiento DATE,
        genero ENUM('M', 'F', 'Otro'),
        preferencias_estilo TEXT,
        carrito_compras TEXT,
        fecha TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";

    $conn->exec($sql);
    echo "Tabla usuarios creada correctamente";
} catch (PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>
