<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link rel="stylesheet" href="./css/style.css">

    <title>Login page</title>
</head>

<body>


    <div class="container">
        <div class="row">
            <div class="col-2">

            </div>
            <div class="col-8">

                <div class="card text-white bg-dark">
                    <div class="card-header">Login page</div>
                    <div class="card-body">
                        <p class="card-text">

                            <form action="php/log.php" method="post">
                                <div class="form-group">
                                    <label for="email">Email address:</label>
                                    <input type="email" name="email" class="form-control" placeholder="Enter email"
                                        required>
                                </div>
                                <div class="form-group">
                                    <label for="password">Password:</label>
                                    <input type="password" name="password" class="form-control" placeholder="Password"
                                        required>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <button type="button" class="btn btn-primary"><a
                                        href="register.php">Register</a></button>
                            </form>

                        </p>
                    </div>
                    <div class="card-footer">

                    <?php
                        
                        if(isset($_REQUEST["success"])){
                            if($_REQUEST["success"] == 1){
                                echo '<div class="alert alert-success" role="alert">';
                                    echo 'Uspešno ste kreirali nalog!';
                                echo '</div>';
                            }
                            if($_REQUEST["success"] == 2){
                                echo '<div class="alert alert-success" role="alert">';
                                    echo 'Uspešno ste se odjavili sa stranice!';
                                echo '</div>';
                            }
                        }
                        if(isset($_REQUEST["error"])){
                            if($_REQUEST["error"] == 1){
                                echo '<div class="alert alert-danger" role="alert">';
                                    echo 'Molimo vas proverite vaše podatke za pristup!';
                                echo '</div>';
                            }
                            else if($_REQUEST["error"] == 2){
                                echo '<div class="alert alert-danger" role="alert">';
                                    echo 'Potrebno je da se prijavite!';
                                echo '</div>';
                            }
                        }
                    ?>


                    </div>
                </div>

            </div>
            <div class="col-2">

            </div>
        </div>
    </div>








    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>
</body>

</html>