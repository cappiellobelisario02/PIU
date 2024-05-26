<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "progetto_piu_cpbs";

$connection = new mysqli($host, $user, $password, $database);

// Verifica della connessione
if ($connection->connect_error) {
    die("Connection to database failed: " . $connection->connect_error);
}
