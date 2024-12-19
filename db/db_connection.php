<?php

try {
    $pdo = new PDO("mysql:host=localhost;dbname=crud_mini","root","");
   
} catch (PDOException $e) {
    echo "Fail DB connection!";
}