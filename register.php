<?php
include "inc/header.php"; ?>
<?php
include "inc/nav.php"; ?>

<h1>Register Page</h1>
<?php
include "inc/footer.php"; ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-8 mx-auto bg-light my-5 border border-dark border-3">
                <h1 class=" p-2 mt-3">&ensp;&ensp; &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;Register</h1>
                <div class="mb-5">
                    <span>It's quick and easy.</span>
                </div>
                <?php
                if (isset($_SESSION['errors'])) :

                    foreach ($_SESSION['errors'] as $error) :
                ?>
                        <div class="alert alert-danger text-center ">
                            <?php echo $error;
                            ?>
                    <?php
                    endforeach;
                    unset($_SESSION['errors']);
                endif;
                    ?>
                        </div>
                        <form action="./handelers/handleregister.php" method="POST">
                            <div class="mb-3">
                                <label for="name">Name</label>
                                <input type="text" name="name" id="name" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="email">Email</label>
                                <input type="text" name="email" id="email" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="password">Password</label>
                                <input type="password" name="password" id="password" class="form-control">
                            </div>
                            <div class="mb-3">
                                <input type="submit" name="register" class="form-control btn btn-success" value="register">
                            </div>
                        </form>
            </div>
        </div>
    </div>

</body>

</html>