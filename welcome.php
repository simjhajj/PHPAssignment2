<?php
session_start();

// Check if the user is not logged in
if (!isset($_SESSION['name'])) {
    // Redirect to login page if not logged in
    header('Location: login.php');
    exit();
}

// Logout logic
if (isset($_POST['logout'])) {
    session_destroy(); // Destroy the session
    header('Location: index.php'); // Redirect to login page
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/welcomeStyle.css">
    <title>Welcome page</title>
</head>
<body>

    <?php include 'templates/header.php'; ?>
    
    <div class="welcome">

    <h1>Welcome <?php echo $_SESSION['name']; ?>!</h1>
    <p class="para1">Thank you signing in!</p>

    <P  class="para2">We hope you enjoy your shopping experience</p>


    <!-- Logout button -->
    <form method="post" action="">
        <button class="logout" type="submit" name="logout">Logout</button>
    </form>
    </div>
    

    <?php include 'templates/footer.php'; ?>
</body>
</html>
