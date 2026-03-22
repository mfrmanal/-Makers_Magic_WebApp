<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maker's Magic</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
   
  <!----box icons link-->
     <link rel="stylesheet"
     href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

    <!---remix icons link-->
    <link
    href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css"
     rel="stylesheet"/>

   <!---google fonts link-->
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

</head>
<body>
    <header>
      <a href="#" class="logo">
         <img src="./images/img/logo.png">
      </a>

               <ul class="navlist"> 
                <li><a href="./index.php">Home</a></li>
                <li><a href="./shop.php">Shop</a></li>
                <li><a href="./gifting.php">Gifting</a></li>
                <li><a href="./blog.php">Blog</a></li>
                <li><a href="./contact.php">Contact</a></li>
            </ul>
            <div class="nav-right">
                <a href="./contact.php"><i class="ri-user-fill"></i></a>
                <a href="#"><i class="ri-heart-2-fill" id="heart-icon"></i></a>
                <div id="heart-container"></div>
                <a href="./cart.php"><i class="ri-shopping-cart-2-fill"></i></a>
                <div class="bx bx-menu" id="menu-icon"></div>
            </div>

   </header>
<section class="gifting">
         <div class="gift-content">
            <h4>Unique Handmade Treasures for Every Occasion</h4>
            <p>Whether you’re treating yourself or surprising a loved one, <br>handmade crafts carry a little piece of heart. <br>Explore our shop, find that special something, <br>and let’s celebrate the joy of creating together!</p>
            <a href="#" class="g-btn" id="customize-btn">
                CUSTOMIZE 
                <i class='bx bxs-gift bx-tada' ></i>
            </a>
         </div>
</section>
<section id="customize-section" style="display:none; padding:50px;">
    <h2>Customize Your Gift</h2>

    <div class="custom-products">

        <div class="product">
            <img src="./images/img/p1.png" width="150">
            <p>Customize Lamp</p>
        </div>

        <div class="product">
            <img src="./images/img/p2.png" width="150">
            <p>Customize Tray</p>
        </div>

        <div class="product">
            <img src="./images/img/p3.png" width="150">
            <p>Customize Table Lamp</p>
        </div>
        <div class="product">
            <img src="./images/img/p4.png" width="150">
            <p>Customize Handbag</p>
        </div>
        <div class="product">
            <img src="./images/img/p5.png" width="150">
            <p>Customize Rug</p>
        </div>
        <div class="product">
            <img src="./images/img/p6.png" width="150">
            <p>Customize Shawl</p>
        </div>
    </div>

    <h3>Enter Your Details</h3>

    <form class="custom-form" id="custom-form">
        <input type="text" placeholder="Your Name" required>
        <input type="text" placeholder="Delivery Address" required>
        <input type="text" placeholder="Custom Text (Name on Gift)">
        <textarea placeholder="Special Instructions"></textarea>
        <button type="submit">Submit Custom Order</button>

    </form>
</section>
<br>
<!--- footer --->

     <section class="footer">
         
          <div class="footer-box">
            <img src="./images/img/logo.png" >
            <h3>Maker's Magic</h3>
            <p>At Maker’s Magic, we believe that creativity is a superpower. <br>Our passion lies in crafting unique, one-of-a-kind pieces that blend artistry, love, and a touch of enchantment.<br> Whether it’s hand-painted ceramics, intricately woven textiles, or whimsical wooden sculptures, each creation carries a piece of our heart.<br>Explore our collection, and let the spirit of Maker’s Magic inspire you.</p>
            <div class="icons">
              <a href="https://facebook.com"><i class="ri-facebook-fill"></i></a>
              <a href="https://instagram.com"><i class="ri-instagram-fill"></i></a>
              <a href="https://x.com"><i class="ri-twitter-x-line"></i>
              <a href="https://syoutube.com"><i class="ri-youtube-fill"></i></a>
            </div>
           </div>
           <div class="footer-box">
            <h3>Quick Links</h3>
            <a href="#">Product Guides</a>
            <a href="#">Terms & Conditions</a>
            <a href="#">Delivery Policy</a>
            <a href="#">Privacy Policy</a>
            <a href="#">Feedback</a>
            </div>

            <div class="footer-box">
               <h3>Company</h3>
               <a href="./contact.php">About us</a>
               <a href="./shop.php">Our Gallery</a>
               <a href="./contact.php">Our Shop</a>
               <a href="./contact.php">Contact us</a>
               <a href="./blog.php">Our Blog</a>
               </div>

               <div class="footer-box">
                  <h3>Help</h3>
                  <a href="https://instragram.com">Instagram</a>
                  <a href="https://facebook.com">Facebook</a>
                  <a href="https://x.com">X-Twitter</a>
                  <a href="#">Phone:</a>
                  <a href="#">017581388 Amelia</a>
               
               </div>
      </section>

        <!--- copyright --->
<div class="copyright">
<div class="end-text">
<p>Copyright @2026 Maker's Magic | All Rights Reserved </p>
<p>site designed by AR</p>
</div>
<div class="end-img">
<img src="images/img/payment.png">
</div>
</div>
<a href="#" class="top"><i class="ri-arrow-up-line"></i></a>
<script>
document.getElementById("customize-btn").onclick = function(){
    document.getElementById("customize-section").style.display = "block";

    document.getElementById("customize-section").scrollIntoView({
        behavior:"smooth"
    });
};

document.getElementById("custom-form").addEventListener("submit", function(event){

    event.preventDefault();

    alert("✅ Your order has been accepted!");

    this.reset();
});

</script>
<script src="js/script.js"></script>
</body>
</html>