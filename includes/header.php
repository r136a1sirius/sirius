<?php  
require 'config/config.php';


if (isset($_SESSION['username'])) {
    $userLoggedIn = $_SESSION['username'];
    $user_details_query = mysqli_query($con, "SELECT * FROM users WHERE username='$userLoggedIn'");
    $user = mysqli_fetch_array($user_details_query);
}
else {
    header("Location: register.php");
}
?>

<html>
<head>
    <title>Welcome to world</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="./assets/js/bootstrap.js"></script>
    <link rel="stylesheet" type="text/css" href="./assets/css/bootstrap.css"> 
    <link rel="stylesheet" type="text/css" href="./assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

    <div class="top_bar">
        <div class="logo">
            <a href="index.php">sirius</a>
        </div>


        <nav>
        <a href="<?php echo $userLoggedIn; ?>">
        <?php echo $user['first_name']; ?>
        </a>
        <a href="index.php">
        <i class="fa fa-home fa-lg"></i>
        </a>
        <a href="#">
        <i class="fa fa-envelope fa-lg"></i>
        </a>
        <a href="#">
        <i class="fa fa-bell-o fa-lg"></i>
        </a>
        <a href="#">
        <i class="fa fa-users fa-lg"></i>
        </a>
        <a href="#">
        <i class="fa fa-cog fa-lg"></i>
        </a>
        <a href="includes/handlers/logout.php">
        <i class="fa fa-sign-out fa-lg"></i>
        </a>
        </nav>

    </div>

    <div class="wrapper">