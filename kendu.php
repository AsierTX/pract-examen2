<?php
// Aldagaiak
$hostDB = '127.0.0.1';
$nombreDB = 'ejemplo';
$usuarioDB = 'root';
$contrasenyaDB = '';
// Datu basera konektatu
$hostPDO = "mysql:host=$hostDB;dbname=$nombreDB;";
$miPDO = new PDO($hostPDO, $usuarioDB, $contrasenyaDB);
// Borratu nahi dugun liburuaren kodea lortu
$codigo = isset($_REQUEST['codigo']) ? $_REQUEST['codigo'] : null;
// Preparatu DELETE
$miConsulta = $miPDO->prepare('DELETE FROM libros WHERE codigo = :codigo');
// Exekutatu sententzia SQL
$miConsulta->execute([
    codigo => $codigo
]);
// irakurri.php-era bialdu
header('Location: irakurri.php');
?>