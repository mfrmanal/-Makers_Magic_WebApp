<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION["user_id"])) {
    header("Location: auth/login.php");
    exit();
}

$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Maker's Magic</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css" rel="stylesheet"/>
    <style>
        .dashboard-container {
            max-width: 900px;
            margin: 150px auto;
            padding: 40px;
            background: #f0e9e9;
            border-radius: 10px;
            text-align: center;
        }
        .dashboard-container h1 {
            color: #cf0018;
            margin-bottom: 20px;
        }
        .dashboard-links {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            margin-top: 30px;
        }
        .dashboard-links a {
            padding: 20px;
            background: #000;
            color: #fff;
            text-decoration: none;
            border-radius: 8px;
            font-size: 18px;
            transition: 0.3s;
        }
        .dashboard-links a:hover {
            background: #cf0018;
        }
    </style>
</head>
<body>

<div class="dashboard-container">
    <h1><i class="ri-dashboard-fill"></i> Welcome, <?php echo htmlspecialchars($username); ?>!</h1>
    <p>You are successfully logged in to Maker's Magic</p>
    
    <div class="dashboard-links">
        <a href="index.php"><i class="ri-home-fill"></i> Home</a>
        <a href="shop.php"><i class="ri-store-fill"></i> Shop</a>
        <a href="gifting.php"><i class="ri-gift-fill"></i> Custom Gifts</a>
        <a href="contact.php"><i class="ri-mail-fill"></i> Contact</a>
        <a href="auth/logout.php"><i class="ri-logout-box-fill"></i> Logout</a>
    </div>
</div>

</body>
</html>