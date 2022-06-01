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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
</head>

<body>

    <div class="main">
        <?php include("./includes/header.php") ?>
    </div>

    <canvas id="myChart" style="width:100%;max-width:850px"></canvas>
    <script>
        var xValues = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sept", "Oct", "Nov", "Dec"];

        new Chart("myChart", {
            type: "line",
            data: {
                labels: xValues,
                datasets: [{
                    data: [860, 1140, 1060, 1060, 1070, 1110, 1330, 2210, 7830, 4039, 4052, 6704],
                    borderColor: "red",
                    fill: false
                }, {
                    data: [1600, 1700, 1700, 1900, 2000, 2700, 4000, 5000, 6000, 7000, 4209, 1202],
                    borderColor: "green",
                    fill: false
                }, {
                    data: [300, 700, 2000, 5000, 6000, 4000, 2000, 1000, 3002, 1999, 201, 4023],
                    borderColor: "blue",
                    fill: false
                }]
            },
            options: {
                legend: {
                    display: false
                },
                title: {
                    display: true,
                    text: "Spending Trending"
                }
            }
        });
    </script>

    <div class="container">
        <h3>Spending</h3>
    </div>
    <div class="container">
        <h3>Budget</h3>
    </div>
    <div class="container">
        <h3>Account</h3>
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