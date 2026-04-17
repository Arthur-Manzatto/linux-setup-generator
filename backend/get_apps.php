<?php

include "mysql_connect.php";

$query = $conn->query("SELECT apps.*, categories.name_cat AS name_cat, categories.slug_cat AS slug_cat
                       FROM apps 
                       JOIN categories ON apps.fk_id_cat = categories.id_cat
                       ORDER BY categories.name_cat;");

$data = [];

while($app = mysqli_fetch_assoc($query)){
    array_push($data, $app);
}

echo json_encode($data);