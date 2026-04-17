<?php

include "mysql_connect.php";
header('Content-Type: application/json');

$query = $conn->query("SELECT apps.*, categories.name_cat AS name_cat, categories.slug_cat AS slug_cat
                       FROM apps 
                       JOIN categories ON apps.fk_id_cat = categories.id_cat
                       WHERE categories.active_cat = 1 AND apps.active_app = 1
                       ORDER BY categories.name_cat;");

$data = [];

while($app = mysqli_fetch_assoc($query)){
    $data[] = $app;
}

echo json_encode($data);