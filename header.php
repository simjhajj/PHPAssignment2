<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- link for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- link for favicon -->
    <link rel="icon" type="image/x-icon" href="images/favicon.jpeg">
    <style>
       * {
    margin: 0;
    font-family: Arial, Helvetica, sans-serif;
    box-sizing: border-box;
}

.navbar {
    height: 60px;
    background-color: #131921;
    color: white;
    display: flex;
    align-items: center;
    justify-content: space-evenly;
}

.border:hover {
    border: 2px solid;
}

.nav-logo {
    height: 50px;
    width: 100px;
}


.add-first {
    color: #cccccc;
    font-size: 0.85rem;
    margin-left: 15px;
}

.add-second {
    font-size: 1rem;
    margin-left: 3px;
}

.add-icon {
    display: flex;
    align-items: center;
}

.nav-search {
    display: flex;
    justify-content: space-evenly;
    background-color: pink;
    width: 620px;
    height: 40px;
    border-radius: 4px;
}

.search-select {
    background-color: #f3f3f3;
    width: 50px;
    text-align: center;
    border-top-left-radius: 4px;
    border-bottom-left-radius: 4px;
    border: none;
}

.search-input {
    width: 100%;
    font-size: 1rem;
    border: none;
}

.search-icon {
    width: 45px;
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 1.2rem;
    background-color: #febd68;
    border-top-right-radius: 4px;
    border-bottom-right-radius: 4px;
    color: #0f1111;
}

.panel {
    height: 40px;
    background-color: #222f3d;
    display: flex;
    color: white;
    align-items: center;
    justify-content: space-evenly;
}

.panel-ops p {
    display: inline;
    margin-left: 10px;
}

.panel-ops {
    width: 70%;
    font-size: 0.85rem;
}

.panel-deals {
    font-size: 0.9rem;
    font-weight: 700;
}

.panelLinks {
    color: white;
    text-decoration: none;
}

.panelLinks:hover {
    text-decoration: underline;
}

.hero-section {
    background-image: url('imagesUsed/hero_image.jpg');
    height: 600px;
    background-size: cover;
    display: flex;
    justify-content: center;
    align-items: flex-end;
    height: 400px;
}


    </style>
    <title>My Amazon HomePage</title>
</head>
<body>
   <!-- Page Header -->
   <header>
    <div class="navbar">
        <div class="nav-logo border">
            <div class="logo">
                <img src="imagesUsed/amazon_logo.png" height="60px" >
            </div>
        </div>

        <div class="nav-address">
            <p class="add-first">Deliver to</p>
            <div class="add-icon">
                <i class="fa-solid fa-location-dot"></i>
                <P class="add-second">Canada</P>
            </div>
        </div>

        <div class="nav-search">
            <select class="search-select">
                <option>All</option>
            </select>
            <input class="search-input"  placeholder="Search Amazon">
            <div class="search-icon"><i class="fa-solid fa-magnifying-glass"></i></div>
        </div>

        <div class="nav-signin border">
            <p><span>Hello,</span></p>
            <p class="nav-second"> Account & Lists</p>
        </div>

        <div class="nav-return border">
            <p><span>Returns</span></p>
            <p class="nav-second"> & Orders</p>
        </div>

        <div class="nav-cart border">
            <i class="fa-solid fa-cart-shopping"></i>
            Cart
        </div>

    </div>

    <!-- page panel -->
        <div class="panel">
            <div class="panel-all">
                <i class="fa-solid fa-bars"></i>
                All
            </div>

        <div class="panel-ops">
            <p><a href="index.php" class="panelLinks">Home</a></p>    
            <p><a href="display.php" class="panelLinks">View Records</a></p>     
            <p><a href="#" class="panelLinks">About us</a></p>     
            <p><a href="#" class="panelLinks">Our locations</a></p>  
        </div>
        <div class="panel-deals">
            Shop deals in Electronics
        </div>
    </div>
    </header>

    <!-- Page main  -->
    <!-- Page hero section -->
    <div class="hero-section">
        <!-- <div class="hero-message">
            <P>You are on amazon.com. You can also shop on Amazon Canada for millions of products with fast local delivery.<a> Click here to go to amazon.ca</a></P>
        </div> -->
    </div>