<?php
include 'nav.php';
if(isset($_POST['add'])){
    session_start();
    $todoitem=$_POST['todos'];
    $id=$_SESSION['uname'];
    $con=mysqli_connect("localhost:3305","root","","rgukt");
    if($con){
        $sql="SELECT max(`count`) FROM `todosinfo` where `sId`='$id'";
        $r=mysqli_query($con,$sql);
        if(mysqli_num_rows($r) > 0)
        {
                // output data of each row
                $row = mysqli_fetch_assoc($r);
                $c=$row["max(`count`)"];
        }
        $c=$c+1;
        $sql="INSERT INTO `todosinfo`(`name`, `sId`,`count`) VALUES ('$todoitem','$id','$c')";
        $r=mysqli_query($con,$sql);
        if($r){
            header("Location:todo.php");
            /*echo "<h1 style='margin-left:20px;margin-top:30px;font-size:30px;font-family:'Roboto';'>Successfully Inserted</h1>";
            echo "<h1 style='margin-left:20px;margin-top:30px;font-size:30px;font-family:'Roboto';'>Successfully Inserted</h1>";*/
        }
    }
}
?>