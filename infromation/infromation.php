<?php

require_once "../helper/header.php";
require_once "../db/db_connection.php";

$query = "select * from infromation ";

$res = $pdo->prepare($query);
$res->execute();

$information = $res->fetchAll(PDO::FETCH_ASSOC);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    <div class="mt-5">
    
    <div class="col text-center">

    <h2>Students Infromations</h2>
    </div>
    <table class="table mt-5">
  <thead>
    <tr>
      
      <th scope="col" >Name</th>
      <th scope="col">Age</th>
      <th scope="col">Classes</th>
      <th scope="col">Adress</th>
      <th scope="col">Phone</th>
      <th scope="col">Gender</th>
      <th scope="col">Action</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <?php
   foreach($information as $item){
    $id = $item['id'];
    $infoName = $item['name'];
    $infoAge = $item['age'];
    $inoClasses = $item['classes'];
    $infoAdress = $item['adress'];
    $infophone = $item['phone'];
    $infogender = $item['gender'];
    echo "
      <tbody>
    <tr>
      
      
      <td >$infoName</td>
      <td>$infoAge</td>
      <td>$inoClasses</td>
      <td>$infoAdress</td>
      <td>$infophone</td>
      <td>$infogender</td>
    
      <td><a href='../updatedata/update.php?id=$id' class='text-dark fs-4'><i class='fa-solid fa-pen-to-square'></i></a></td>
    
      <td><a href='../delete/delete.php?id=$id' class='text-danger fs-4'><i class='fa-solid fa-trash'></i>
</a></td>
     
    </tr>
   
  </tbody>
    " ;};
  ?>
</table>
    </div>
</body>
</html>