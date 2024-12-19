<?php

echo $_GET['id'];
require_once "../helper/header.php";
require_once "../db/db_connection.php";

$query = 'delete from infromation where id=?';

$res = $pdo->prepare($query);
$res->execute([$_GET['id']]);

header("location:../infromation/infromation.php");