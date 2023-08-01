<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="TodoList.css"/>
</head>

<?php
include 'nav.php';
if(isset($_GET['param1'])){
    $nam=$_GET['param1'];
    $cou=$_GET['param2'];
    $con=mysqli_connect("localhost:3305","root","","rgukt");
    if($con){
        $sql="DELETE FROM `todosinfo` WHERE `name`='$nam' and `count`='$cou'";
        $r=mysqli_query($con,$sql);
        if($r){
            echo "<p style='font-size:23px;font-family:'Roboto';' class='ml-5 mt-5'>Deletion Success<p>";
            echo "<br><a href='display.php' class='btn btn-primary ml-5'>Show List</a>";
        }
        else{
            header("Location:show.php");
        }
    }
    else{
        echo "<h1> ERROR in connecting to database.</h1>";
    }
}

?>
</html>
