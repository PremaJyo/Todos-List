<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="TodoList.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous" />
</head>
    </html>


<?php
include 'nav.php';
session_start();
$name=$_SESSION['uname'];
$slogc=$_SESSION['slog'];
if($name)
{
    $con=mysqli_connect("localhost:3305","root","","rgukt");
    if($con){
        $sql="SELECT count(`sId`) FROM `todosinfo` where `sId`='$name'";
        $r=mysqli_query($con,$sql);
        if(mysqli_num_rows($r) > 0)
        {
                // output data of each row
                $row = mysqli_fetch_assoc($r);
                $c=$row["count(`sId`)"];
        }
        $arrlis=array();
        if($c>0){
                $sql="SELECT * FROM `todosinfo` where `sId`='$name'";
                $r=mysqli_query($con,$sql);
                if(mysqli_num_rows($r) > 0)
                {
                // output data of each row
                    while($row = mysqli_fetch_assoc($r)){
                        $lis=array("text"=>$row['name'],"count"=>$row['count']);
                        array_push($arrlis,$lis);
                        
                    }
                $arval=json_encode($arrlis);
                $_SESSION['arval']=$arval;
                
                }
            }
        }
        else{
            echo "<h1>There is no Items to display.<br>Add items to the LIST</h1>";
        }
        if($arrlis!=[]){
            include 'show.php';
        }
        else{
            echo "<h1 style='margin-left:20px;margin-top:30px;font-size:30px;font-family:'Roboto';>There is no Items to display.<br>Add items to the LIST</h1>";
        }
        
}

echo "<br><a href='todo.php' class='btn btn-primary ml-5 mt-5'>Click to Add items</a>" ;

?>

