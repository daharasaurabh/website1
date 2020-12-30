<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/mystyle.css">
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
    <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
    <title>Home Page</title>
</head>
<body>
<?php
    include 'header.php';
?>
<br>
<div class="photoslide">
    <div><img src="images/banner1.jpg"></div>
    <div><img src="images/banner/banner2.png" alt=""></div>
    <div><img src="images/banner/banner3.png" alt=""></div>       
</div>  

<div>
    <center>
    <button onclick="window.location.href='products.php'">products</button>
    <button onclick="window.location.href='contactus.php'">contact us</button>
    </center>
</div>

<?php
    include 'footer.php';
?>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript" src="slick/slick.min.js"></script>
<script type="text/javascript" src="js/myscript.js"></script>
</body>
</html>