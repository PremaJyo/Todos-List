<!DOCTYPE html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous" />
    </head>

    <body>
        <?php
         include 'nav.php';
        ?>
        <form method="post" action="passUpdate.php"> 
        <div class="container">
            <div class="row text-center">
                <div class="col-1 col-md-3 col-lg-3"></div>
                <div class="col-11 col-md-5 col-lg-5 mt-5">
                    <h1 class="mt-5 mb-4 text-primary" style="font-weight:bold;font-family:'Sans Serif';"> Reset Password</h1>
                    <input type="text" placeholder="Username" class="form-control" name="id"/><br>
                    <input type="text" placeholder="Phone number for verification" class="form-control" name="phnum"/><br>
                    <input type="password" placeholder="New Password" class="form-control" name="npass"/><br>
                    
                    <button class="btn btn-primary">Reset</button>

                </div>
                
            </div>

        </div>
    </form>
    </body>

</html>