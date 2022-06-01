<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "expenzer";


if (isset($_POST['submit'])) {
    /// Create connection
    $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $name = $_POST['name'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "INSERT INTO `users` (`name`, `username`, `password`) VALUES ('$name', '$username', '$password')";
    if ($conn->query($sql) === TRUE) {
        // echo '<div class="alert alert-success" role="alert">
        //     Successfully Registered
        // </div>';
        header("Location: /Expenzer");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Expenzer</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid">
        <div class="row">

            <div class="col-sm-12 col-md-4 offset-md-4 col-lg-4 offset-lg-4">
                <br />
                <br />
                <br />
                <br />
                <br />
                <div class="card">
                    <!-- <img src="./images/grow.png" class="card-img-top" alt="..."> -->
                    <div class="card-body">
                        <h1 for="exampleInputEmail1">REGISTER</h1>
                        <form method="post">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Full Name</label>
                                <input type="text" class="form-control" name="name" required>
                                <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Username</label>
                                <input type="text" class="form-control" name="username" required>
                                <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" class="form-control" name="password" required>
                            </div>
                            <button type="submit" name="submit" class=" btn btn-success btn-block">Submit</button>
                            <a href="./" class=" btn btn-primary btn-block">Back</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- <script src="js/script.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</body>

</html>