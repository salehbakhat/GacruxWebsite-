<?php

$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$message = $_POST['message'];

$to = "t80q@hotmail.com";
$subject = "New Message";

mail($to, $subject, $messagem, "Form: " . $name . $phone . $email);

echo "YOU MESSAGE HAS BEEN SENT";

?>

<html>

    <head>
    
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/send.css">
        <link rel="stylesheet" href="css/normalize.css">
        <title>Gacrux &raquo; Contact us </title>
    </head>
    <body>
        
            <!-- Start Header -->
        
        <div class="header">
            <div class="navbar">
                    <div class="container">
                        <h2><span>Gac</span>rux</h2>
                        <ul>
                            <li class="active"><a href="home.html">home</a></li>
                            <li><a href="aboutus.html">about us</a></li>
                            <li><a href="service.html">service</a></li>
                            <li><a href="ourwork.html">our-work</a></li>
                            <li><a href="contact%20us.html">Contact us </a></li>
                        </ul>
                    </div>
            </div>
        </div>
            <!-- End Header -->
        
        <div class="thanks">
            <div class="container">
                <h1>Thank you for contacting us – we will get back to you soon!</h1>
                <button onclick="redirectMe('https://demogx.000webhostapp.com/index.html')">Click to redirect you</button>
                <script src="main.js"></script>
            </div>
        </div>  
            
         <!-- Start Footer --> 
        
        <div class="foot">
            <div class="container">
                <span>Copyright &copy; 2018 GACRUX CO.</span>
                <ul>
                    <li><img src="./image/instagram.png" alt="instagram"> </li>
                    <li><img src="./image/twitter.png" alt="twitter"></li>
                    <li><img src="./image/youtube.png" alt="youtube"></li>
                    <li><img src="./image/facebook.png" alt="facebook"></li>
                    <li><img src="./image/linkedin.png" alt="linkedin"></li>
                </ul>
            </div>
        </div>
            <!-- End Footer -->
    </body>
</html>