<!DOCTYPE html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous" />
    </head>

    <body>
        <?php
            include 'nav.php';
        ?>
        <form action="mlogin.php" method="post">
        <div class="container">
            <div class="row ">
                <div class="col-12 col-lg-6 text-center mt-5">
                    <img src="login.PNG" style="height:90%;width:80%;" class="mt-5"/>
                </div>
                <div class=" col-12 col-lg-6 mt-5 text-center">
                    <h1 class="mt-5 mb-4 text-primary" style="font-weight:bold;font-family:'Sans Serif';">Enter Deatils to Registration</h1>
                    <input type="text" placeholder="ID Number" class="form-control" name="id" id="Id"/><br>
                    <input type="text" placeholder="Username" class="form-control" name="name" id="Name"/><br>
                    <input type="text" placeholder="Phone number"  class="form-control" name="number" id="Number"/><br>
                    <input type="password" placeholder="Password (length must be 8 characters)" class="form-control" name="password" id="Passw"/><br>
                    <button class="btn btn-primary" name="signUp" onclick="return validate()">Sign Up</button>

                </div>
                
            </div>

        </div>
    </form>
    <script src="pj.js"></script>
    </body>

</html>