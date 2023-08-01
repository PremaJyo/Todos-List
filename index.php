<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="TodoList.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous" />
</head>
<?php
    include "nav.php";
?>
<body class="main-background">
<h1 class="ml-5 mt-5 text-center text-light" style="font-family:'Helvetica';font-weight:bold;font-size:60px;">A simple todolist <br> Application </h1>
<div class="container">
    <div class="row">
        <div style="border:2px solid white;border-radius:30px;"class="mt-3 p-5 col-12 col-lg-7 col-xl-5">
            <p class="mt-5 text-light" style="margin-left:20px;font-family:'Arial';font-size:23px;">To start to save your todo list, make a registration 
            by adding your details, then login and save your activities upcoming.</p>
            <a href="loginp.php" class=" mt-5 btn btn-dark text-light bg-grey" style="border-color:white;padding:7px;font-weight:bold;margin-right:15%;">Register</a>
            <a href="lo.php" class="mt-5 mr-5 btn btn-dark text-light" style="background-color:transparent;border-color:white;padding:7px;font-weight:bold;">Login</a>
        </div>
    </div>

</div>
</body>
</html>