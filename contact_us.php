<?php
include('connection.php');
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Contact Us - Chittagong University Blood Bank Management System</title>
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
        
        form {
            margin-top: 20px;
        }
        
        .form-group {
            margin-bottom: 20px;
        }
        
        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }
        
        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #dddddd;
            border-radius: 4px;
        }
        
        .form-group textarea {
            height: 100px;
        }
        
        .form-group button {
            padding: 10px 20px;
            background-color: #cc0000;
            color: #ffffff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        
        .form-group button:hover {
            background-color: #990000;
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
        
        // Function to handle form submission
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Retrieve form data
            $name = $_POST['name'];
            $email = $_POST['email'];
            $message = $_POST['message'];
            
            // Example code to display a success message
            echo '<div class="container">';
            echo '<h1>Thank You!</h1>';
            echo '<p>Your message has been submitted successfully. We will get back to you shortly.</p>';
            echo '</div>';
            
            exit;
        }
    ?>

    <div class="container">
        <h1>Contact Us</h1>
        <form method="POST" action="">
            <div class="form-group">
                <label for="name">Admin BBMS</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">bbmsadmin@gmail.com</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="message">Message</label>
                <textarea id="message" name="message" required></textarea>
            </div>
            <div class="form-group">
                <button type="submit">Send Message</button>
            </div>
        </form>
    </div>

    <footer>
        &copy; <?php echo date('Y'); ?> Blood Bank Management System
    </footer>
</body>
</html>
