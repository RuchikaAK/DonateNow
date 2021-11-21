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

    <div class="contactContainer">
        <p class="con">Feel free to contact us!</p>
        <div class="contactPara">
                Phone: 
                <a href="tel:91-1234567890" target="_blank">
                +91-1234567890
                </a><br>
                Email:
                <a href="https://mail.google.com" target="_blank" style="text-transform: lowercase;">     
                petpay@gmail.com
                </a><br>
            
                Address: 
                <a href="https://maps.google.co.in" target="_blank" > PetPay Tower, Abc Road, Nashik 422006
                </a><br>
                Instagram:
                <a href="https://www.instagram.com" target="_blank" style="text-transform: lowercase;">
                @pet_pay
                </a>
            </div>
        
        <div class = "form">
            <form action = "connect.php" method = "post">
                <p class="entity">Name*<br>
                    <input type = "text" name = "name" required ><br><br></p>
                <p class="entity">Email* <br>
                    <input type = "email" name = "email" required><br><br></p>
                <p class="entity">Phone Number* <br>
                    <input type="tel" maxlength="10" name = "phoneNumber" required ><br><br></p>
                <p class="entity">Message <br>
                    <textarea rows = "5" cols = "60" class="message" name = "message">
                     </textarea>
                
                <input type = "submit" class="send" value = "Send">
            </form>
        </div>

        <!-- Reusable Footer -->

        <?php
            include("reusableFooter.php");
        ?>
    </div>
</body>