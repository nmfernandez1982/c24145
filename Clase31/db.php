<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "movies_cac";

try 
{
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // Configurar PDO para que lance excepciones en caso de error
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} 
catch(PDOException $e) 
{
    echo "Connection failed: " . $e->getMessage();
}
?>