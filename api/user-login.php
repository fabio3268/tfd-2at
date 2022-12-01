<?php

$host = "localhost";
$user = "root";
$password = "";
$database = "bd-clinica";
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
];

$conn = new PDO(
    "mysql:host=$host;dbname=$database",
    $user,
    $password,
    $options
);

$email = $_POST["email"];
$password = $_POST["password"];
$query = "SELECT id, name, email 
          FROM users
          WHERE email LIKE '$email' AND password LIKE '$password'";

$stmt = $conn->query($query);

if($stmt->rowCount() == 0){
    echo "Email ou Senha não cadastrados!";
} else {
    $row = $stmt->fetch();
    echo "Olá, {$row->name} seu id é {$row->id}";
}