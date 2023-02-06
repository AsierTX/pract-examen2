<?


// Aldagaiak
$hostDB = 'db';
$nombreDB = 'ejemplo';
$usuarioDB = 'root';
$contrasenyaDB = '';
// Datu basera konektatu
$hostPDO = "mysql:host=$hostDB;dbname=$nombreDB;";
$miPDO = new PDO($hostPDO, $usuarioDB, $contrasenyaDB);

?>