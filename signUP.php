<?php
include('connection.php');
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>About Us - Blood Bank Management System</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }
        
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #ffffff;
            border: 1px solid #dddddd;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        
        h1 {
            color: #cc0000;
            margin-bottom: 20px;
        }
        
        p {
            line-height: 1.5;
        }
        
        footer {
            margin-top: 20px;
            text-align: center;
            color: #777777;
        }
    </style>
</head>
<body>
    <?php
        // Add your database connection code here if required
    ?>

    <div class="container">
        <h1>About Us</h1>
        <p>
            Welcome to the Chittagong University Blood Bank Management System website. We are dedicated to connecting blood donors and recipients, making it easier to find and donate blood when it's needed the most. Our system allows users to search for blood banks, view available blood types, and schedule blood donations.
        </p>
        <p>
            Our mission is to ensure a reliable and efficient blood supply chain, saving lives and improving health outcomes. Through this platform, we aim to bridge the gap between blood donors and those in need, creating a supportive community where every contribution matters.
        </p>
        <p>
            We strive to maintain the highest standards of quality and safety in the handling and distribution of blood products. Our team of dedicated professionals works tirelessly to ensure that the blood donated is screened, processed, and stored according to the established guidelines, guaranteeing the safety of both donors and recipients.
        </p>
        <p>
            Thank you for choosing the Blood Bank Management System. Together, we can make a difference and save lives. If you have any questions or suggestions, please don't hesitate to contact us.
        </p>
    </div>

    <footer>
        &copy; <?php echo date('Y'); ?> Blood Bank Management System
    </footer>
</body>
</html>
