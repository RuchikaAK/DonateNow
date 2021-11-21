<!DOCTYPE html>
<html>

<head>
    <title>Donate Now</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../css/style.css?v=<?php echo time(); ?>">

</head>

<body>
    
    <!-- Reusable menu -->
    <?php
        include("reusableMenu.php");
    ?>

    <div class="container">
    
        <div class="blurContainer"></div>
        
        <div class="intro">
            <p class="tagline">
                They Need Your Support
            </p>
            <p class="para">
                Help them get a good life!
            </p>

            <form class="donateButtonRP">
                <script src="https://checkout.razorpay.com/v1/payment-button.js" data-payment_button_id="pl_IO9ou3I3n9OZ99" async> </script> 
            </form>

        </div>
    </div>

    <!-- Reusable Footer -->
    <?php
        include("reusableFooter.php");
    ?>

</body>

</html>