<?php
session_start();
include("includes/db.php");

$message_status = "";

// Process contact form (as per PDF requirement)
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);
    $message = trim($_POST["message"]);
    
    if (empty($name) || empty($email) || empty($message)) {
        $message_status = "<div class='alert error'>All fields are required!</div>";
    } else {
        // Store submissions in messages table (as per PDF)
        $sql = "INSERT INTO messages (name, email, message) 
                VALUES ('$name', '$email', '$message')";
        
        if (mysqli_query($conn, $sql)) {
            $message_status = "<div class='alert success'>✅ Message sent successfully!</div>";
        } else {
            $message_status = "<div class='alert error'>Error: " . mysqli_error($conn) . "</div>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - Maker's Magic</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css" rel="stylesheet"/>
    <style>
        .contact-form-section {
            max-width: 600px;
            margin: 50px auto;
            padding: 30px;
            background: #f0e9e9;
            border-radius: 10px;
        }
        .contact-form-section h2 {
            text-align: center;
            color: #cf0018;
            margin-bottom: 20px;
        }
        .contact-form-section input,
        .contact-form-section textarea {
            width: 100%;
            padding: 15px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
        }
        .contact-form-section button {
            width: 100%;
            padding: 15px;
            background: #000;
            color: #fff;
            border: none;
            border-radius: 5px;
            font-size: 18px;
            cursor: pointer;
            margin-top: 10px;
        }
        .contact-form-section button:hover {
            background: #cf0018;
        }
        .alert {
            padding: 15px;
            margin: 15px 0;
            border-radius: 5px;
            text-align: center;
        }
        .success { background: #d4edda; color: #155724; }
        .error { background: #f8d7da; color: #721c24; }
    </style>
</head>
<body>

<br><br><br>

<section class="contact-form-section">
    <h2><i class="ri-mail-send-fill"></i> Contact Us</h2>
    
    <?php echo $message_status; ?>
    
    <form method="POST" action="">
        <input type="text" name="name" placeholder="Your Name" required>
        <input type="email" name="email" placeholder="Your Email" required>
        <textarea name="message" rows="5" placeholder="Your Message" required></textarea>
        <button type="submit"><i class="ri-send-plane-fill"></i> Send Message</button>
    </form>
    
    <div style="text-align:center; margin-top:20px;">
        <a href="index.php">← Back to Home</a>
    </div>
</section>

</body>
</html>