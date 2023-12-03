<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/indexStyle.css">
    <title>User Registration and Login</title>
</head>
<body>

    <?php include 'templates/header.php'; ?>

    <div class="contcontainer">
        <div class="moreContent">
            <p class="heading">Welcome to your favourite shopping website!</p>
            <p class="newP">Please choose an option:</p>
            <ul class="newList">
                <button style="background-color:gray; border-radius:5px; border:2px solid white"><a href="signup.php" style="color:white; font-size:20px; text-decoration:none;">Sign Up</a></li></button>
                <br/>
                <br/>
                <button style="background-color:gray; border-radius:5px; border:2px solid white"><a href="login.php" style="color:white; font-size:20px; text-decoration:none;">Login</a></li></button>
            </ul>
        </div>
    </div>

    <?php include 'templates/footer.php'; ?>

</body>
</html>

