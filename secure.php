<?php
/**
 * Created by PhpStorm.
 * User: ma lau
 * Date: 04-Dec-18
 * Time: 10:05 PM
 */
session_start();

if ( ! isset($_SESSION['accessToken'])) {
    header("Location: login.php");
    die();
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Secure Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <table class="table table-bordered my-5 w-50 mx-auto">
            <tbody>
                <tr>
                    <td>First Name</td>
                    <td><?php echo $_SESSION['firstName'] ?></td>
                </tr>
                <tr>
                    <td>Last Name</td>
                    <td><?php echo $_SESSION['lastName'] ?></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><?php echo $_SESSION['email'] ?></td>
                </tr>
                <tr>
                    <td>Sex</td>
                    <td><?php echo $_SESSION['gender'] ?></td>
                </tr>
            </tbody>
        </table>

        <div class="text-center">
            <a href="./logout.php" class="btn btn-outline-dark">Logout</a>
        </div>
    </div>
</body>
</html>