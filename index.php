<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>beauty products</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="style.css">

</head>
<body>
   
<!-- header section starts  -->

<header class="header">

   <section class="flex">

      <a href="#home" class="logo"><I>GLOW UP</I></a>

      <nav class="navbar">
         <a href="#home">home</a>
         <a href="#about">about</a>
         <a href="#menu">menu</a>
         <a href="#order">order</a>
      </nav>

      <div class="icons">
         <div id="menu-btn" class="fas  fa-bars"></div>
         <div id="user-btn" class="fas fa-user"></div>
         <div id="order-btn" class="fas fa-box"></div>
         <div id="cart-btn" class="fas fa-shopping-cart"><span></span></div>
      </div>

   </section>

</header>

<!-- header section ends -->

<div class="user-account">

   <section>

      <div id="close-account"><span>close</span></div>

      
      <div class="display-orders">
         <p>Mac  <span>( &#8377 150/-  )</span></p>
         <p>LOREAL CONCEALER <span>( &#8377 200/-  )</span></p>
         <p>HIMALAYA FACE WASH <span>( &#8377 400/-  )</span></p>
         <p>LOTUS SUNSCREEN  <span>(  &#8377 240/-  )</span></p>
      </div>

      <div class="flex">

 <!--        <form action="" method="post">
            <h3>login now</h3>
            <input type="email" name="email" required class="box" placeholder="enter your email" maxlength="50">
            <input type="password" name="pass" required class="box" placeholder="enter your password" maxlength="20">
            <input type="submit" value="login now" name="login" class="btn">
         </form>
-->
         <form action="create.php" method="post">
            <h3>register now</h3>
            <input type="text" name="name" required class="box" placeholder="enter your name" maxlength="20">
            <input type="email" name="email" required class="box" placeholder="enter your email" maxlength="50">
            <input type="password" name="pass" required class="box" placeholder="enter your password" maxlength="20">
            <input type="password" name="cpass" required class="box" placeholder="confirm your password" maxlength="20">
            <input type="submit" value="register now" name="register" class="btn">
         </form>

      </div>

   </section>

</div>

<div class="my-orders">
&#8377
   <section>

      <div id="close-orders"><span>close</span></div>

      <h3 class="title"> my orders </h3>

      <div class="box">
         <p>placed on : <span>06/04/2022</span> </p>
         <p>name : <span>shaikh anas</span> </p>
         <p>number : <span>1234567890</span></p>
         <p>address : <span>flat no. 123, bulding no. 2, jogeshwari, mumbai, india - 400104</span></p>
         <p>payment method : <span>cash on delivery</span></p>
         <p>your orders : <span>MAC LIPSTICK &#8377 150/-, LOREAL CONCEALER &#8377 220/-, HIMALAYA FACE WASH &#8377 400/- , LOTUS SUNSCREEN &#8377 240/-</span></p>
         <p>total price : <span>&#8377 1010/-</span></p>
         <p>payment status : <span style="color: var(--red);">pending</span> </p>
      </div>

      <div class="box">
         <p>placed on : <span>06/04/2022</span> </p>
         <p>name : <span>shaikh anas</span> </p>
         <p>number : <span>1234567890</span></p>
         <p>address : <span>flat no. 123, bulding no. 2, jogeshwari, mumbai, india - 400104</span></p>
         <p>payment method : <span>cash on delivery</span></p>
         <p>your orders : <span>MAC LIPSTICK &#8377 150/-,LOREAL CONCEALER &#8377 220/-, HIMALAYA FACE WASH &#8377 400/- , LOTUS SUNSCREEN &#8377 240/-</span></p>
         <p>total price : <span>&#8377 1010/-</span></p>
         <p>payment status : <span style="color: var(--red);">pending</span> </p>
      </div>

   </section>

</div>

<div class="shopping-cart">

   <section>

      <div id="close-cart"><span>close</span></div>

      <div class="box">
         <a href="#" class="fas fa-times"></a>
         <img src="images/johanne-kristensen-1A5hSvPZjMc-unsplash.jpg" alt="">
         <div class="content">
            <p>MAC LIPSTICK <span>( &#8377 150/- )</span></p>
            <form action="" method="post">
               <input type="number" class="qty" name="qty" min="1" value="2" max="100">
               <button type="submit" class="fas fa-edit" name="update_qty"></button>
            </form>
         </div>
      </div>

      <div class="box">
         <a href="#" class="fas fa-times"></a>
         <img src="images/kadian-hall-QixHMdu4THc-unsplash.jpg" alt="">
         <div class="content">
            <p>LOREAL CONCEALER<span>( &#8377 220/-)</span></p>
            <form action="" method="post">
               <input type="number" class="qty" name="qty" min="1" value="1" max="100">
               <button type="submit" class="fas fa-edit" name="update_qty"></button>
            </form>
         </div>
      </div>

      <div class="box">
         <a href="#" class="fas fa-times"></a>
         <img src="images/son-gucci-505-Janet-Rust-Mat-Lipstick-2.png" alt="">
         <div class="content">
            <p>HIMALAYA FACE WASH<span>( &#8377 400/- )</span></p>
            <form action="" method="post">
               <input type="number" class="qty" name="qty" min="1" value="2" max="100">
               <button type="submit" class="fas fa-edit" name="update_qty"></button>
            </form>
         </div>
      </div>

      <div class="box">
         <a href="#" class="fas fa-times"></a>
         <img src="images/son-kem-ysl-425-2.png" alt="">
         <div class="content">
            <p>LOTUS SUNSCREEN <span>( &#8377 240/- )</span></p>
            <form action="" method="post">
               <input type="number" class="qty" name="qty" min="1" value="1" max="100">
               <button type="submit" class="fas fa-edit" name="update_qty"></button>
            </form>
         </div>
      </div>

      <a href="#order" class="btn">order now</a>

   </section>

</div>

<div class="home-bg">

   <section class="home" id="home">

      <div class="slide-container">

         <div class="slide active">
            <div class="image">
               <img src="images/mac.png" alt="">
            </div>
            <div class="content">
               <h3>M.A.C</h3>
               <div class="fas fa-angle-left" onclick="prev()"></div>
               <div class="fas fa-angle-right" onclick="next()"></div>
            </div>
         </div>

         <div class="slide">
            <div class="image">
               <img src="images/mamaearth.png" alt="">
            </div>
            <div class="content">
               <h3>MAMAEARTH</h3>
               <div class="fas fa-angle-left" onclick="prev()"></div>
               <div class="fas fa-angle-right" onclick="next()"></div>
            </div>
         </div>

         <div class="slide">
            <div class="image">
               <img src="images/maybelline.png" alt="">
            </div>
            <div class="content">
               <h3>MAYBELLINE</h3>
               <div class="fas fa-angle-left" onclick="prev()"></div>
               <div class="fas fa-angle-right" onclick="next()"></div>
            </div>
         </div>

      </div>

   </section>

</div>

<!-- about section starts  -->

<section class="about" id="about">

   <h1 class="heading">about us</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/img-2.jpg" alt="">
         <h3>feel the beauty</h3>
         <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Illum quae amet beatae magni numquam facere sit. Tempora vel laboriosam repudiandae!</p>
         <a href="#menu" class="btn">our product</a>
      </div>

      <div class="box">
         <img src="images/service-1.png" alt="">
         <h3>fast delivery</h3>
         <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Illum quae amet beatae magni numquam facere sit. Tempora vel laboriosam repudiandae!</p>
         <a href="#menu" class="btn">our product</a>
      </div>

      <div class="box">
         <img src="images/img-5.jpg" alt="">
         <h3>explore</h3>
         <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Illum quae amet beatae magni numquam facere sit. Tempora vel laboriosam repudiandae!</p>
         <a href="#menu" class="btn">our product</a>
      </div>

   </div>

</section>

<!-- about section ends -->

<!-- menu section starts  -->

<section id="menu" class="menu">

   <h1 class="heading">our products</h1>

   <div class="box-container">

      <div class="box">
         <div class="price">&#8377<span>150</span>/-</div>
         <img src="images/mac lipstick.jpg" alt="">
         <div class="name">MAC LIPSTICK</div>
         <form action="" method="post">
            <input type="number" min="1" max="100" value="1" class="qty" name="qty">
            <input type="submit" value="add to cart" name="add_to_cart" class="btn">
         </form>
      </div>

      <div class="box">
         <div class="price">&#8377<span>350</span>/-</div>
         <img src="images/maybelline mascara.jpg" alt="">
         <div class="name">MAYBELLINE MASCARA</div>
         <form action="" method="post">
            <input type="number" min="1" max="100" value="1" class="qty" name="qty">
            <input type="submit" value="add to cart" name="add_to_cart" class="btn">
         </form>
      </div>

      <div class="box">
         <div class="price">&#8377<span>260</span>/-</div>
         <img src="images/lakme compact" alt="">
         <div class="name">LAKME compact</div>
         <form action="" method="post">
            <input type="number" min="1" max="100" value="1" class="qty" name="qty">
            <input type="submit" value="add to cart" name="add_to_cart" class="btn">
         </form>
      </div>

      <div class="box">
         <div class="price">&#8377<span>320</span>/-</div>
         <img src="images/huda beauty.jpg" alt="">
         <div class="name">HUDA BEAUTY EYE SHADOW</div>
         <form action="" method="post">
            <input type="number" min="1" max="100" value="1" class="qty" name="qty">
            <input type="submit" value="add to cart" name="add_to_cart" class="btn">
         </form>
      </div>

      <div class="box">
         <div class="price">&#8377<span>220</span>/-</div>
         <img src="images/l conc.png" alt="">
         <div class="name">LOREAL CONCEALER</div>
         <form action="" method="post">
            <input type="number" min="1" max="100" value="1" class="qty" name="qty">
            <input type="submit" value="add to cart" name="add_to_cart" class="btn">
         </form>
      </div>

      <div class="box">
         <div class="price">&#8377<span>180</span>/-</div>
         <img src="images/avon nail colour.jpg" alt="">
         <div class="name">AVON NAIL COLOUR</div>
         <form action="" method="post">
            <input type="number" min="1" max="100" value="1" class="qty" name="qty">
            <input type="submit" value="add to cart" name="add_to_cart" class="btn">
         </form>
      </div>

      <div class="box">
         <div class="price">&#8377<span>390</span>/-</div>
         <img src="images/mamaearth moisturizer.jpg" alt="">
         <div class="name">MAMAEARTH MOISTURIZER</div>
         <form action="" method="post">
            <input type="number" min="1" max="100" value="1" class="qty" name="qty">
            <input type="submit" value="add to cart" name="add_to_cart" class="btn">
         </form>
      </div>

      <div class="box">
         <div class="price">&#8377<span>240</span>/-</div>
         <img src="images/lotus suncream.jpg" alt="">
         <div class="name">LOTUS SUNSCREEN</div>
         <form action="" method="post">
            <input type="number" min="1" max="100" value="1" class="qty" name="qty">
            <input type="submit" value="add to cart" name="add_to_cart" class="btn">
         </form>
      </div>

      <div class="box">
         <div class="price">&#8377<span>400</span>/-</div>
         <img src="images/himalaya face wash.jpg" alt="">
         <div class="name">HIMALAYA FACE WASH</div>
         <form action="" method="post">
            <input type="number" min="1" max="100" value="1" class="qty" name="qty">
            <input type="submit" value="add to cart" name="add_to_cart" class="btn">
         </form>
      </div>
      <div class="box">
         <div class="price">&#8377<span>450</span>/-</div>
         <img src="images/neutrogena.jpg" alt="">
         <div class="name">NEUTROGENA</div>
         <form action="" method="post">
            <input type="number" min="1" max="100" value="1" class="qty" name="qty">
            <input type="submit" value="add to cart" name="add_to_cart" class="btn">
         </form>
      </div>
      <div class="box">
         <div class="price">&#8377<span>250</span>/-</div>
         <img src="images/the body shop serum.jpg" alt="">
         <div class="name">THE BODY SHOP SERUM</div>
         <form action="" method="post">
            <input type="number" min="1" max="100" value="1" class="qty" name="qty">
            <input type="submit" value="add to cart" name="add_to_cart" class="btn">
         </form>
      </div>
   </div>
</section>

<!-- menu section ends -->

<!-- order section starts  -->

<section class="order" id="order">

   <h1 class="heading">order now</h1>

   <form action="" method="post">

      <div class="display-orders">
         <p>MAC LIPSTICK<span>( &#8377 150/- )</span></p>
         <p>LOREAL CONCEALER <span>( &#8377 220/-  )</span></p>
         <p>HIMALAYA FACE WASH <span>( &#8377 400/-  )</span></p>
         <p>LOTUS SUNSCREEN <span>( &#8377 240/-  )</span></p>
      </div>

      <div class="flex">
         <div class="inputBox">
            <span>your name :</span>
            <input type="text" name="name" class="box" required placeholder="enter your name" maxlength="20">
         </div>
         <div class="inputBox">
            <span>your number :</span>
            <input type="number" name="number" class="box" required placeholder="enter your number" min="0">
         </div>
         <div class="inputBox">
            <span>payment method</span>
            <select name="method" class="box">
               <option value="cash on delivery">cash on delivery</option>
               <option value="credit card">credit card</option>
               <option value="paytm">paytm</option>
               <option value="paypal">paypal</option>
            </select>
         </div>
         <div class="inputBox">
            <span>address:</span>
            <input type="text" name="flat" class="box" required placeholder="e.g. flat no." maxlength="50">
         </div>
         <div class="inputBox">
            <span>pin code :</span>
            <input type="number" name="pin_code" class="box" required placeholder="e.g. 123456" min="0">
         </div>
      </div>

      <input type="submit" value="order now" class="btn" name="order">

   </form>

</section>

<!-- order section ends -->
<!-- footer section starts  -->

<section class="footer">

   <div class="box-container">

      <div class="box">
         <i class="fas fa-phone"></i>
         <h3>phone number</h3>
         <p>+123-456-7890</p>
         <p>+111-222-3333</p>
      </div>

      <div class="box">
         <i class="fas fa-map-marker-alt"></i>
         <h3>our address</h3>
         <p>mumbai, india - 400104</p>
      </div>

      <div class="box">
         <i class="fas fa-clock"></i>
         <h3>opening hours</h3>
         <p>00:09am to 00:10pm</p>
      </div>

      <div class="box">
         <i class="fas fa-envelope"></i>
         <h3>email address</h3>
         <p>shaikhanas@gmail.com</p>
         <p>anasbhai@gmail.com</p>
      </div>
      
   </div>

   <div class="credit">
      &copy; copyright @ 2022 by <span>GLOW UP</span> | all rights reserved!
   </div>

</section>

<!-- footer section ends -->
<!-- custom js file link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"></script>
<script src="script.js"></script>
</body>
</html>