<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "scriptforge";

$conn = new mysqli($servername, $username, $password, $dbname); or DIE("CONEXÃO FALHOU: " . $conn->connect_error);
