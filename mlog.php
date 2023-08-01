<?php
include 'nav.php';
if(isset($_POST['login'])){
    $uname=$_POST['name'];
    $upassword=$_POST['password'];
    $con=mysqli_connect("localhost:3305","root","","rgukt");
    if($con){
        $sql="SELECT  `password`,`slogin` FROM `loginfo` WHERE `Id`='$uname'";
        $r=mysqli_query($con,$sql);
        if(mysqli_num_rows($r) > 0)
        {
            // output data of each row
            $row = mysqli_fetch_assoc($r);
            $slog=(int)$row['slogin']+1;
            if($row["password"]==$upassword){
                $sqlu="UPDATE `loginfo` SET `slogin`='$slog' WHERE `Id`='$uname'";
                $r=mysqli_query($con,$sqlu);
                echo "<h1 style='margin-left:20px;margin-top:30px;margin-bottom:30px;font-size:30px;font-family:'Roboto';'>Welcome, ".$uname."</h1>";
                session_start();
                $_SESSION['uname']=$uname;
                $_SESSION['slog']=$slog;
                echo "<a href='display.php' class='btn btn-primary text-center mb-3 ml-3'>View Todo List</a><br>";
                echo "<a href='todo.php' class='btn btn-primary ml-3'>Add items to your list</a>";
            }
            else{
                header("Location:lo.php");
            }
        }
            
        else{
            echo "Not Executed";
        }
    }
    else{
        echo "Not Connected";
    }
}
else{
    header('Location:loginp.php');
}

?>