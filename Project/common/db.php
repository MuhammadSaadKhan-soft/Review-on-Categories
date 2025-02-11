<?php
$host = "localhost:3307";
$user = "root";
$password = "";
$database = "discuss";
$conn = new mysqli($host, $user, $password, $database);
if ($conn->connect_error) {
  die('database failed to connect');
}
