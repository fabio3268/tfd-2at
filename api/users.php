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

$query = "INSERT INTO users 
          VALUES (NULL, 'Carlos da Silva','carlos@ifsul.edu.br','12345678','C');";
$stmt = $conn->query($query);

/*
$query = "SELECT * FROM users";
$stmt = $conn->query($query);

var_dump($stmt);

while ($row = $stmt->fetch()){
    var_dump($row, $row->name, $row->email);
}
*/

