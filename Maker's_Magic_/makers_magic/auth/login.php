<?php
session_start();
include("../includes/db.php");

$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = trim($_POST["email"]);
    $password = $_POST["password"];
    
    if (empty($email) || empty($password)) {
        $error = "All fields are required!";
    } else {
        // Validate user credentials as per PDF
        $sql = "SELECT * FROM users WHERE email='$email'";
        $result = mysqli_query($conn, $sql);
        
        if (mysqli_num_rows($result) == 1) {
            $user = mysqli_fetch_assoc($result);
            
            // Verify password as per PDF requirement
            if (password_verify($password, $user["password"])) {
                // Start a session upon successful login (as per PDF)
                $_SESSION["user_id"] = $user["id"];
                $_SESSION["username"] = $user["username"];
                $_SESSION["email"] = $user["email"];
                
                // Redirect users to dashboard/home page after login (as per PDF)
                header("Location: ../dashboard.php");
                exit();
            } else {
                $error = "Invalid password!";
            }
        } else {
            $error = "No account found with this email!";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Maker's Magic</title>
    <link rel="stylesheet" href="../css/style.css">
    <style>
        .auth-container {
            max-width: 500px;
            margin: 150px auto;
            padding: 40px;
            background: #f0e9e9;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0,0,0,0.1);
        }
        .auth-container h2 {
            text-align: center;
            color: #cf0018;
            margin-bottom: 30px;
        }
        .auth-container input {
            width: 100%;
            padding: 15px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
        }
        .auth-container button {
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
        .auth-container button:hover {
            background: #cf0018;
        }
        .message {
            padding: 15px;
            margin: 15px 0;
            border-radius: 5px;
            text-align: center;
        }
        .error { background: #f8d7da; color: #721c24; }
        .auth-link { text-align: center; margin-top: 20px; }
    </style>
</head>
<body>

<div class="auth-container">
    <h2>Login</h2>
    
    <?php if ($error): ?>
        <div class="message error"><?php echo $error; ?></div>
    <?php endif; ?>
    
    <form method="POST" action="">
        <input type="email" name="email" placeholder="Email Address" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Login</button>
    </form>
    
    <div class="auth-link">
        Don't have an account? <a href="register.php">Register here</a>
    </div>
    
    <div class="auth-link">
        <a href="../index.php">← Back to Home</a>
    </div>
</div>

</body>
</html>