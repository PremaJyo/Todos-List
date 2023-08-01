<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="TodoList.css"/>
</head>
<?php
    $id=$_POST['id'];
    $num=$_POST['phnum'];
    $pass=$_POST['npass'];
    echo $pass;
    $con=mysqli_connect("localhost:3305","root","","rgukt");
        if($con)
        {
            $sql="UPDATE `loginfo` SET `password`='$pass' WHERE `Id`='$id' and `phoneNumber`='$num'";
            $r=mysqli_query($con,$sql);
            if($r){
                echo "<p style='font-size:23px;font-family:'Roboto';' class='ml-5 mt-5'>Password reseted Successfully<p>";
                echo "<br><a href='lo.php' class='btn btn-primary ml-5'>Login</a>";
            }
        }
?>