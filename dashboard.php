<?php
session_start();
if ($_SESSION['name'] == '') {
    header('Refresh: 0; URL = ./');
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
</head>

<body>
    <div class="main">
        <!-- <div class="navbar">
            <div class="icon">
                <h2><a class="logo" href="index.html">EXPENZER</a></h2>
            </div>

            <div class="menu">
                <ul>
                    <li><a href="wallets.html">Wallets</a></li>
                    <li><a href="scheduler.html">Scheduler</a></li>
                    <li><a href="stats.html">Stats</a></li>
                    <li><a href="account.html">Account</a></li>
                </ul>
            </div>

            <div class="search">
                <input class="srch" type="search" name="" placeholder="Search here">
                <a href="#"><button class="btn">Search</button></a>
            </div>
        </div> -->
        <?php include("./includes/header.php") ?>
        <h2 class="username"><?php echo $_SESSION['name'] ?>'s Wallet</h2>

        <div class="container">
            <h3><a href="wallets.html">Transactions</a></h3>
            <div class="col">
                <p>Food & Drink</p><img class="ic" src="images/food.png">
            </div>
            <div class="col">
                <p>Personal Care</p><img class="ic" src="images/care.png">
            </div>
            <div class="col">
                <p>Personal</p><img class="ic" src="images/personal.png">
            </div>
            <div class="col">
                <p>Transportation</p><img class="ic" src="images/transpo.png">
            </div>
            <div class="col"><img class="ico" src="images/add.png"></div>
        </div>

        <div class="container">
            <h3 class="cont">Total Expenses</h3>
            <h3 class="cont">Budget</h3>
            <div class="re">0.00 PHP</div>
            <div class="re">0.00 PHP</div>
        </div>

        <div class="container">
            <h3><a>Set Goals</a></h3>
            <div class="col">
                <p>Save Money</p><img class="ic" src="images/save.png">
            </div>
            <div class="col">
                <p>Consumption</p><img class="ic" src="images/reduce.png">
            </div>
            <div class="col">
                <p>Grow Money</p><img class="ic" src="images/grow.png">
            </div>
            <div class="col"><img class="ico" src="images/add.png"></div>
        </div>
    </div>

    <div class="footer-container">
        <div class="footer">
            <div class="footer-heading footer-1">
                <h4>Get Started</h4>
                <a href="#">Pricing</a>
                <a href="#">Premium</a>
                <a href="#">Affiliate</a>
            </div>
            <div class="footer-heading footer-2">
                <h4>Company</h4>
                <a href="#">About Us</a>
                <a href="#">Blog</a>
                <a href="#">Careers</a>
            </div>
            <div class="footer-heading footer-3">
                <h4>Support</h4>
                <a href="#">Contact Us</a>
                <a href="#">Help Center</a>
                <a href="#">Privacy Policy</a>
            </div>
            <div class="footer-heading footer-3">
                <h4>Site Information</h4>
                <a href="#">Accessibility</a>
                <a href="#">Cookie Policy</a>
                <a href="#">Fraud & Scam Alert</a>
            </div>
            <div class="footer-heading footer-3">
                <h4>Follow Us</h4>
                <a href="#">Youtube</a>
                <a href="#">Facebook</a>
                <a href="#">LinkedIn</a>
            </div>
        </div>
    </div>
    <script src="js/script.js"></script>
</body>

</html>