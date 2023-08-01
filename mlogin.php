<?php
    include 'nav.php';
    if(isset($_POST['signUp'])){
        $id=$_POST['id'];
        $name=$_POST['name'];
        $num=$_POST['number'];
        $passw=$_POST['password'];
        $login=0;
        $con=mysqli_connect("localhost:3305","root","","rgukt");
        if($con){
            $sql="INSERT INTO `loginfo`(`name`, `phoneNumber`, `password`, `Id`,`slogin`) VALUES ('$name','$num','$passw','$id','$login')";
            $r=mysqli_query($con,$sql);
            if($r){
                echo "<p style='font-size:23px;font-family:'Roboto';' class='ml-5 mt-5'>Account Created Successfully<br> Login to continue the process<p>";
                echo "<br><a href='lo.php' class='btn btn-primary ml-5'>Login</a>";
            }
            else{
                header('Location:mlogin.php');
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