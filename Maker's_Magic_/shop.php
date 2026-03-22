<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maker's Magic</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
   
    <!----box icons link-->
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

    <!---remix icons link-->
    <link
    href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css" rel="stylesheet"/>

   <!---google fonts link-->
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>
     <!--- header --->
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
                <i class="ri-search-line" id="search-icon"></i>
                <a href="./contact.php"><i class="ri-user-fill"></i></a>
                <a href="#"><i class="ri-heart-2-fill" id="heart-icon"></i></a>
                <div id="heart-container"></div>
                <a href="./cart.php"><i class="ri-shopping-cart-2-fill"></i></a>
                <div class="bx bx-menu" id="menu-icon"></div>
            </div>
  </header>



<div class="new-products-content">
          <div class="row">
          <div class="row-img">
           <img src="images/img/p1.png">
          </div>
          <h3>Sorbet Sunset Table Lamp</h3>
          <h5>$77.34</h5>
          <div class="r-btnn">
           <a href="cart.php" onclick="addToCart('images/img/p1.png','Sorbet Sunset Table Lamp',77.34)">
            Add to cart
            <i class="ri-shopping-cart-fill"></i>
         </a>
          </div>
      </div>

      <div class="row">
         <div class="row-img">
          <img src="images/img/p2.png">
         </div>
         <h3>Servings of Love Tray Set</h3>
         <h5>$36.63</h5>
         <div class="r-btnn">
          <a href="cart.php" onclick="addToCart('images/img/p2.png','Servings of Love Tray Set',36.63)">
             Add to cart
            <i class="ri-shopping-cart-fill"></i>
         </a>
         </div>
     </div>

     <div class="row">
      <div class="row-img">
       <img src="images/img/p3.png">
      </div>
      <h3>Afterglow Table Lamp</h3>
      <h5>$49.00</h5>
      <div class="r-btnn">
       <a href="cart.php" onclick="addToCart('images/img/p3.png','Afterglow Table Lamp',49.00)">  
         Add to cart
         <i class="ri-shopping-cart-fill"></i>
      </a>
      </div>
  </div>

  <div class="row">
   <div class="row-img">
    <img src="images/img/p4.png">
   </div>
   <h3>Morning Glory Raafia <br>Handbag</h3>
   <h5>$69.00</h5>
   <div class="r-btnn">
      <a href="cart.php" onclick="addToCart('images/img/p4.png','Morning Glory Raafia Handbag',69.00)">
      Add to cart 
      <i class="ri-shopping-cart-fill"></i>
   </a>
   </div>
</div>

<div class="row">
   <div class="row-img">
    <img src="images/img/p5.png">
   </div>
   <h3>Aakarshan Handwoven Shawl</h3>
   <h5>$62.30</h5>
   <div class="r-btnn">
    <a href="cart.php" onclick="addToCart('images/img/p5.png','Aakarshan Handwoven Shawl',62.30)">
      Add to cart 
      <i class="ri-shopping-cart-fill"></i>
   </a>
   </div>
</div>

<div class="row">
   <div class="row-img">
    <img src="images/img/p6.png">
   </div>
   <h3>Guzel Hand-Woven Rug</h3>
   <h5>$71.91</h5>
   <div class="r-btnn">
      <a href="cart.php" onclick="addToCart('images/img/p6.png','Guzel Hand-Woven Rug',71.91)">
         Add to cart 
         <i class="ri-shopping-cart-fill"></i>
      </a>

   </div>
</div>

<div class="row">
   <div class="row-img">
    <img src="images/img/p7.png">
   </div>
   <h3>Regal Harvest Brass <br>Display Stand</h3>
   <h5>$97.22</h5>
   <div class="r-btnn">
      <a href="cart.php" onclick="addToCart('images/img/p7.png','Regal Harvest Brass Display Stand',97.22)">
         Add to cart 
         <i class="ri-shopping-cart-fill"></i>
      </a>
</div>
</div>

<div class="row">
   <div class="row-img">
    <img src="images/img/p8.png">
   </div>
   <h3>Elegance Marble <br>Desk Organizer With Clock</h3>
   <h5>$50.90</h5>
   <div class="r-btnn">
    <a href="cart.html" onclick="addToCart('images/img/p8.png','Elegance Marble Desk Organizer With Clock',50.90)">
     Add to cart
     <i class="ri-shopping-cart-fill"></i>
   </a>
   </div>
</div>
    </div>
   </section>
   <br>
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
   function addToCart(img,name,price){
   let product = {
      image: img,
      name: name,
      price: price
   };
   localStorage.setItem("cartItem", JSON.stringify(product));
   }
</script>
<script src="js/script.js"></script>
</body>
</html>