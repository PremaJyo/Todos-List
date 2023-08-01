<!DOCTYPE html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous" />
    </head>

    <body>
        <?php
        include 'nav.php';
        ?>
        <form method="post" action="mlog.php">  
        <div class="container">
            <div class="row text-center">
                <div class="col-1 col-md-3 col-lg-3"></div>
                <div class="col-11 col-md-5 col-lg-5 mt-5">
                    <h1 class="mt-5 mb-4 text-primary" style="font-weight:bold;font-family:'Sans Serif';">Enter Deatils to Login</h1>
                    <input type="text" placeholder="ID Number" class="form-control" name="name"/><br>
                    <input type="password" placeholder="Password" class="form-control" name="password"/><br>
                    <input type="checkbox"><label class="p-2 mr-5" style="font-size:13px;" >Remember me</label>
                    <a href="forgot.php" class="ml-2" style="font-size:15px;"><u>Forgot your password?</u></a><br>
                    <button class="btn btn-primary" name="login">Login</button>
                </div>
                
            </div>

        </div>
    </form>
    </body>

</html>