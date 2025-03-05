<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3>about us</h3>
   <p> <a href="home.php">home</a> / about </p>
</div>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="images/about-img.jpg" alt="">
      </div>

      <div class="content">
         <h3>why choose us?</h3>
         <p>At our bookstore, we offer a vast collection of books across all genres, ensuring you find the perfect read. We provide affordable prices, fast shipping, and secure packaging for a hassle-free experience. Our user-friendly website makes browsing and purchasing seamless, and our dedicated customer support ensures your satisfaction. Whether you're a casual reader or a book enthusiast, we are your one-stop destination for quality books!</p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">client's reviews</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/pic-1.png" alt="">
         <p>The website is well-organized, making it easy to find what I need. The prices are reasonable, and the customer support team is very responsive. Highly recommended!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Daniel Thompson </h3>
      </div>

      <div class="box">
         <img src="images/pic-2.png" alt="">
         <p>I love how this bookstore offers discounts and deals. The books are genuine, and they always arrive in pristine condition. The tracking system is also very reliable.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3> Sofia Müller</h3>
      </div>

      <div class="box">
         <img src="images/pic-3.png" alt="">
         <p>This online bookstore has become my go-to place for buying books. The collection is diverse, and I always find something interesting. The customer service is top-notch as well.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Alejandro Gomez</h3>
      </div>

      <div class="box">
         <img src="images/pic-4.png" alt="">
         <p>I ordered a few novels, and they arrived earlier than expected. The packaging was neat, and the quality of the books was excellent. The variety here is amazing, too!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Neha Joshi</h3>
      </div>

      <div class="box">
         <img src="images/pic-5.png" alt="">
         <p>I’ve bought several books from this store, and each time, the service has been exceptional. The website is user-friendly, and the book descriptions are detailed.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3> Aditya Rao</h3>
      </div>

      <div class="box">
         <img src="images/pic-6.png" alt="">
         <p>I absolutely love this bookstore! The collection is vast, and the recommendations are spot-on. The delivery was super fast, and the books arrived in perfect condition. Will definitely be buying more!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Yuki Nakamura</h3>
      </div>

   </div>

</section>

<section class="authors">

   <h1 class="title">Great Authors</h1>

   <div class="box-container">

      <div class="box">
         <img src="https://www.babelio.com/users/AVT_Aravind-Adiga_1140.jpg" alt="Aravind Adiga">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Aravind Adiga</h3>
      </div>

      <div class="box">
         <img src="https://focus.independent.ie/thumbor/WEdBUUrD-WzpAyUnHXAzn2bv7-A=/0x438:1786x1427/960x640/prod-mh-ireland/ff546d7a-d3ba-11ed-aa07-0210609a3fe2" alt="Jacqueline Crooks:">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Jacqueline Crooks</h3>
      </div>

      <div class="box">
         <img src="https://akm-img-a-in.tosshub.com/indiatoday/vikram-seth07_647_062015032659.jpg?UxMfPEnxM5h2YpOebZ1ns2Ql1vnfp0Wx" alt="Vikram Seth">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Vikram Seth</h3>
      </div>

      <div class="box">
         <img src="https://ichef.bbci.co.uk/images/ic/1024x576/p0fjxkt9.jpg" alt="Stephen Buoro">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Stephen Buoro</h3>
      </div>

      <div class="box">
         <img src="https://media.vanityfair.com/photos/65020dc448edb87a6f7097b2/16:9/w_1280,c_limit/Jhumpa%20Lahiri.jpg" alt="Jhumpa Lahiri">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Jhumpa Lahiri</h3>
      </div>

      <div class="box">
         <img src="https://cdn.mos.cms.futurecdn.net/uXpXBpVVVZeBGWSP95yK6B.jpg" alt="Tom Crewe">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Tom Crewe</h3>
      </div>

   </div>

</section>







<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>