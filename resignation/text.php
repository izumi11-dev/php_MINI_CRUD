<form action="" method="post">

<div class="col">
    <div class="col-1"  style="height: 100px;">
        <input type="text" name="name" placeholder="Enter Students Name" class="form-control h-50 ">

        <?php
        if(isset($_POST['btn'])){
            $checkName = $_POST['name'] ==''? false :true;
            echo $checkName ? " " :"  <small class='text-danger'>Required name!</small>";}
          
        ?>
    </div>

    <div class="col-1"  style="height: 100px;">
        <input type="number" name="age" placeholder="Enter Students AGE" class="form-control h-50 ">
        <?php
        if(isset($_POST['btn'])){
            $checkAge = $_POST['age'] ==''? false :true;
            echo $checkAge ? " " :"  <small class='text-danger'>Required age!</small>";}
          
        ?>
    </div>
</div>

<div class="col-6">




</div>


   

    <div class="col"  style="height: 100px;">
        <input type="text" name="classes" placeholder="Enter Students Class" class="form-control h-50 ">
        <?php
        if(isset($_POST['btn'])){
            $checkClasses = $_POST['classes'] ==''? false :true;
            echo $checkClasses ? " " :"  <small class='text-danger'>Required Classes!</small>";}
          
        ?>
    </div>

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

    <div class="col-4 offset-4 "  style="height: 100px;">
        <input type="text" name="gender" placeholder="Enter Students Gender" class="form-control h-50 ">
        <?php
        if(isset($_POST['btn'])){
            $checkGender = $_POST['gender'] ==''? false :true;
            echo $checkGender ? " " :"  <small class='text-danger'>Required gender!</small>";}
          
        ?>
    </div>

    <div class="col-4 offset-4 "  style="height: 100px;">
        <input type="submit" value=" ADD Resignation " name="btn" placeholder="Enter Students Name" class="form-control h-50 btn btn-success ">
    </div>
</form>