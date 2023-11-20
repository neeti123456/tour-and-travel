<?php include 'book_form.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about</title>

   <!-- swiper css link-->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>


    <!--font awesome cdn link-->
    <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <!--custom css file link-->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!--header section starts-->

    <section class="header">
    <a href="home.php" class="logo">travel.</a>

    <nav class="navbar">
       <a href="home.php">home</a> 
       <a href="about.php">about</a> 
       <a href="package.php">package</a> 
       <a href="book.php">book</a> 
    </nav>

    <div id="menu-btn" class="fas fa-bars"></div>

    </section>

   

    <!--header section end-->

   <div class="heading" style="background:url(image/heading.jpg)no-repeat"> 
   <h1>book now</h1>
   </div>
   <!--booking section starts-->
   <section class="booking">
      <h1 class="heading-title">book your trip!</h1>

      <form action="book_form.php" method="post" class="book-form">
     
         <div class="flex">
         <form action="book_form.php" method="POST">
            <div class="flex">
            <div class="inputBox">
               <span>name :</span>
               <input type="text" placeholder="enter your name" name="name">

               <!-- <div class="inputBox">
                  <form action="book_form.php" method="POST">
                     <input type="submit" class="thanks">
                  </form>
               </div> -->
             
            </div>
            <div class="inputBox">
               <span>email :</span>
               <input type="email" placeholder="enter your email" name="email">
             
            </div>
            <div class="inputBox">
               <span>phone :</span>
               <input type="number" placeholder="enter your number" name="phon">
             
            </div>
            <div class="inputBox">
               <span><address></address>:</span>
               <input type="text" placeholder="enter your address" name="address">
             
            </div>
            <div class="inputBox">
               <span>where to:</span>
               <input type="text" placeholder="place you want to visit" name="location">
             
            </div>
            <div class="inputBox">
               <span>how many :</span>
               <input type="number" placeholder="number of guests" name="guests">
             
            </div>
            <div class="inputBox">
               <span>arrivals:</span>
               <input type="date"  name="arrivals">
             
            </div>
            <div class="inputBox">
               <span>leaving:</span>
               <input type="date"  name="leaving">
             
            </div>
         </div>
             <input type="submit" value="submit" class="btn" name="send">
      </form>
   </section>


   <!--booking section ends-->
   














<!--footer section starts-->
 <section class="footer">
    <div class="box-container">
       <div class="box">
        <h3>quick link</h3>
       <a href="home.php"><i class="fas fa-chevron-right"></i>home</a> <br> 
       <a href="about.php"><i class="fas fa-chevron-right"></i>about</a> <br> 
       <a href="package.php"><i class="fas fa-chevron-right"></i>package</a> <br> 
       <a href="book.php"><i class="fas fa-chevron-right"></i>book</a> <br> 
       </div>

       <div class="box">
        <h3>extra links</h3>
       <a href="#"><i class="fas fa-angle-right"></i>ask questions</a> <br> 
       <a href="#"><i class="fas fa-angle-right"></i>about us</a><br> 
       <a href="#"><i class="fas fa-angle-right"></i>privacy policyc</a><br>  
       <a href="#"><i class="fas fa-angle-right"></i>terms of use </a> <br> 
       
       </div>

       <div class="box">
        <h3>contact info</h3>
       <a href="#"><i class="fas fa-phone"></i>+123-456-789</a> <br> 
       <a href="#"><i class="fas fa-phone"></i>+111-222-333</a><br> 
       <a href="#"><i class="fas fa-envelope"></i>shaikhanas@gmail.com</a><br>  
       <a href="#"><i class="fas fa-map"></i>mumbai,india-400104 </a> <br> 
       
       </div>

       <div class="box">
        <h3>follow as</h3>
       <a href="#"><i class="fab fa-facebook"></i>facebook</a> <br> 
       <a href="#"><i class="fab fa-twitter"></i>twitter</a><br> 
       <a href="#"><i class="fab fa-instagram"></i>instagram</a> <br> 
       <a href="#"><i class="fab fa-linkedin"></i>linkedin</a> <br> 
       
       </div>

    </div>


    <div class="credit">created by <span>mr.web designer</span>  | all rights reserved!</div>

 </section>

<!--footer section end-->






<!--swiper js link-->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!--custom js file link-->
<script src="script.js"></script>


</body>
</html>