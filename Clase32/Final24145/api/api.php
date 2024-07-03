<?php
header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE");
header("Access-Control-Allow-Headers: Content-Type");

include 'db.php';
include 'Peliculas.php';

$method = $_SERVER['REQUEST_METHOD'];

switch ($method) 
{
    case 'GET':
        handleGet($conn);
        break;
    case 'POST':
        handlePost($conn);
        break;
    case 'PUT':
        handlePut($conn);
        break;
    case 'DELETE':        
        handleDelete($conn);
        break;
    default:
        echo json_encode(['message' => 'Método no permitido']);
        break;
}

//este metodo me devuelve una pelicula o todas las peliculas
function handleGet($conn) 
{
    $id = isset($_GET['id']) ? intval($_GET['id']) : 0;

    if ($id > 0) 
    {
        $stmt = $conn->prepare("SELECT * FROM peliculas WHERE id = ?");
        $stmt->execute([$id]);
        $pelicula = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($pelicula) 
        {
            $peliculaObj = Peliculas::fromArray($pelicula);
            echo json_encode($peliculaObj->toArray());
        } 
        else 
        {
            http_response_code(404);
            echo json_encode(['message' => 'No se encontraron datos']);
        }
    } 
    else 
    {
        $stmt = $conn->query("SELECT * FROM peliculas");
        $peliculas = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $peliculaObjs = array_map(fn($pelicula) => Peliculas::fromArray($pelicula)->toArray(), $peliculas);
        echo json_encode(['peliculas' => $peliculaObjs]);
    }
}


//este metodo es para ingresar peliculas
function handlePost($conn) 
{
    if ($conn === null) 
    {
        echo json_encode(['message' => 'Error en la conexión a la base de datos']);
        return;
    }

    $data = json_decode(file_get_contents('php://input'), true);

    $requiredFields = ['titulo', 'fecha_lanzamiento','genero' ];
    foreach ($requiredFields as $field) 
    {
        if (!isset($data[$field])) 
        {
            echo json_encode(['message' => 'Datos de la película incompletos']);
            return;
        }
    }

    $pelicula = Peliculas::fromArray($data);

    try 
    {
        $stmt = $conn->prepare("INSERT INTO peliculas (titulo, fecha_lanzamiento, genero, duracion, director, reparto, sinopsis) VALUES (?, ?, ?, ?, ?, ?, ?)");
        $stmt->execute([
            $pelicula->titulo,
            $pelicula->fecha_lanzamiento,
            $pelicula->genero,
            $pelicula->duracion,
            $pelicula->director,
            $pelicula->reparto,
            $pelicula->sinopsis
           
        ]);

        echo json_encode(['message' => 'Película ingresada correctamente']);
    } 
    catch (PDOException $e) 
    {
        echo json_encode(['message' => 'Error al ingresar la película', 'error' => $e->getMessage()]);
    }
}



function handlePut($conn) 
{
    $id = isset($_GET['id']) ? intval($_GET['id']) : 0;

    if ($id > 0) 
    {
        $data = json_decode(file_get_contents('php://input'), true);
        $pelicula = Peliculas::fromArray($data);
        $pelicula->id = $id;

        $fields = [];
        $params = [];

        if ($pelicula->titulo !== null) {
            $fields[] = 'titulo = ?';
            $params[] = $pelicula->titulo;
        }
        if ($pelicula->genero !== null) {
            $fields[] = 'genero = ?';
            $params[] = $pelicula->genero;
        }
        if ($pelicula->fecha_lanzamiento !== null) {
            $fields[] = 'fecha_lanzamiento = ?';
            $params[] = $pelicula->fecha_lanzamiento;
        }
        if ($pelicula->duracion !== null) {
            $fields[] = 'duracion = ?';
            $params[] = $pelicula->duracion;
        }
        if ($pelicula->director !== null) {
            $fields[] = 'director = ?';
            $params[] = $pelicula->director;
        }
        if ($pelicula->reparto !== null) {
            $fields[] = 'reparto = ?';
            $params[] = $pelicula->reparto;
        }
        if ($pelicula->sinopsis !== null) {
            $fields[] = 'sinopsis = ?';
            $params[] = $pelicula->sinopsis;
        }                 

        if (!empty($fields)) 
        {
            $params[] = $id;
            $stmt = $conn->prepare("UPDATE peliculas SET " . implode(', ', $fields) . " WHERE id = ?");
            $stmt->execute($params);
            echo json_encode(['message' => 'Película actualizada con éxito']);
        } 
        else 
        {
            echo json_encode(['message' => 'No hay campos para actualizar']);
        }
    } 
    else 
    {
        echo json_encode(['message' => 'ID no proporcionado']);
    }
}


//metodo para borrar registros
function handleDelete($conn) 
{
    $id = isset($_GET['id']) ? intval($_GET['id']) : 0;

    if ($id > 0) 
    {
        $stmt = $conn->prepare("DELETE FROM peliculas WHERE id = ?");
        $stmt->execute([$id]);
        echo json_encode(['message' => 'Película eliminada con éxito']);
    } 
    else 
    {
        echo json_encode(['message' => 'ID no proporcionado']);
    }
}
?>