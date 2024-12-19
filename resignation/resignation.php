<?php

require_once "../helper/header.php";
require_once "../db/db_connection.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    <div class="container">

    <div class="row mt-5">

    <form action="" method="post">
        <div class="row">
        <div class="col-6">
              <div class="col"  style="height: 100px;">
                <input type="text" name="name" placeholder="Enter Students Name" class="form-control h-50 ">

             <?php
if (isset($_POST['btn'])) {
    $checkName = $_POST['name'] == '' ? false : true;
    echo $checkName ? " " : "  <small class='text-danger'>Required name!</small>";
}

?>
             </div>

             <div class="col"  style="height: 100px;">
        <input type="number" name="age" placeholder="Enter Students AGE" class="form-control h-50 ">
        <?php
if (isset($_POST['btn'])) {
    $checkAge = $_POST['age'] == '' ? false : true;
    echo $checkAge ? " " : "  <small class='text-danger'>Required age!</small>";
}

?>
    </div>

    <div class="col"  style="height: 100px;">
        <input type="text" name="classes" placeholder="Enter Students Class" class="form-control h-50 ">
        <?php
        if(isset($_POST['btn'])){
            $checkClasses = $_POST['classes'] ==''? false :true;
            echo $checkClasses ? " " :"  <small class='text-danger'>Required Classes!</small>";}
          
        ?>
    </div>
<!--  -->
            </div>



            <div class="col-6">
            <div class="col"  style="height: 100px;">
        <input type="text" name="adress" placeholder="Enter Students Adress" class="form-control h-50 ">
        <?php
        if(isset($_POST['btn'])){
            $checkAdress = $_POST['adress'] ==''? false :true;
            echo $checkAdress ? " " :"  <small class='text-danger'>Required adress!</small>";}
          
        ?>
    </div>

    <div class="col "  style="height: 100px;">
        <input type="number" name="phone" placeholder="Enter Students Phone Number" class="form-control h-50 ">
        <?php
        if(isset($_POST['btn'])){
            $checkPhone = $_POST['phone'] ==''? false :true;
            echo $checkPhone ? " " :"  <small class='text-danger'>Required phone!</small>";}
          
        ?>
    </div>

    <div class="col "  style="height: 100px;">
        <input type="text" name="gender" placeholder="Enter Students Gender" class="form-control h-50 ">
        <?php
        if(isset($_POST['btn'])){
            $checkGender = $_POST['gender'] ==''? false :true;
            echo $checkGender ? " " :"  <small class='text-danger'>Required gender!</small>";}
          
        ?>
    </div>

            </div>

            
    <div class="col-4 offset-4 "  style="height: 100px;">
        <input type="submit" value=" ADD Resignation " name="btn" placeholder="Enter Students Name" class="form-control h-50 btn btn-success ">
    </div>
        </div>
   
    </form>

    </div>
    </div>


    <?php

if (isset($_POST['btn'])) {
    $name = $_POST['name'];
    $age = $_POST['age'];
    $classes = $_POST['classes'];
    $adress = $_POST['adress'];
    $phone = $_POST['phone'];
    $gender = $_POST['gender'];

    if ($name && $age && $classes && $adress && $phone != "") {
        $query = 'insert into infromation (name,age,classes,adress,phone,gender) values (?,?,?,?,?,?)';

        $res = $pdo->prepare($query);
        $res->execute([$name, $age, $classes, $adress, $phone, $gender]);


        header("location:../infromation/infromation.php");

       

    }

}

?>
</body>
</html>