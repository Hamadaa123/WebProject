<?php

$conn = mysqli_connect('localhost' , 'root' , '' , 'contact_dbs') or die ('connection failed');

if(isset($_POST['submit'])){

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $number = $_POST['number'];
    $date = $_POST['date'];



    $insert = mysqli_query($conn, "INSERT INTO `contact_forms`(name, email, number, date)
    VALUES('$name' , '$email' , '$number' , '$date')") or die ('query failed');

    if($insert){
        $message[] = 'appointment made successfully';
    
    }else{
        $message[] = 'appointment failed';
    }




}

?>













<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EYE Care Clinic</title>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">

<link rel="stylesheet" href="style.css">

</head>
<body>
    
<!-- header section start -->

<header class="header fixed-top"> 
     <div class="container">

     <div class="row align-items-center justify-content-between">

<a href="#home" class="logo">Eye<span>Care.</span></a>

<nav class="nav">
<a href="#home">home</a>
<a href="#about">about</a>
<a href="#services">services</a>
<a href="#reviews">reviews</a>
<a href="#contact">contact</a>

</nav>

    <a href="#contact" class="link-btn">make appointment</a>

    <div id="menu-btn" class="fas fa-bars"></div>
 
    
     </div>

     </div>

</header>



<!-- header section end -->
<!-- home section start -->

<section class="home" id="home">

<div class="container">

<div class="row min-vh-100 align-items-center">
    <div class="content text-center text-md-left">
    <h3>Let us bright your view</h3>
    <p>With a team of more than 20 eye care specialists and staff ready to serve you, The Eye Care Center is proud to be one of the most respected Finger Lakes vision centers.</p>
     <a href="#contact" class="link-btn">make appointment</a>
     

    </div>
</div>

</div>




</section>
<!-- home section end -->

<!-- about section start -->

<section class="about" id="about">
    
    <div class="container">

<div class="row align-items-center">

<div class="col-md-6 image">
    <img src="../img/home2.jpg" class="w-100 mb-4 mb-md0" alt="">
</div>

<div class="col-md-6 content">
    <span>about us</span>
    <h3>True Healthcare for your family</h3>
    <p>At Eye Care, we’re more than just a center—we’re a vision-driven family committed to your ocular health and well-being. We are here to ensure you see the world’s beauty with clarity and confidence. Welcome to a place where your vision matters, and together, we’ll illuminate a brighter tomorrow..</p>
    <a href="#contact" class="link-btn">make appointment</a>

</div>

</div>

    </div>

</section>


 <!-- about section end -->
 <!-- service section start -->

<section class="services" id="services">

<h1 class="heading">Our services</h1>

<div class="box-container container">

<div class="box">
<img src="../img/eye.png" class="w-50 mb-4 mb-md0" alt="">
    <h3>Outpatient Clinics</h3>
    <p>Your eyecare visit will start off with our friendly staff taking your information to make sure that your new, or previous file is completed so that we can better follow up with you and truly provide you with the best possible vision care</p>
</div>

<div class="box">
<img src="../img/eye-test.png" class="w-50 mb-4 mb-md0" alt="">
    <h3>Diagnostic Facility</h3>
    <p>This part of the hospital contains the most technologically advanced diagnostic machines for ocular diseases. These include visual field, corneal topography, OCT, Fluorescein Angiography, A & B Scan, Lenstar, Corvis, and many more</p>
</div>

<div class="box">
<img src="../img/surgery.png" class="w-50 mb-4 mb-md0" alt="">
    <h3>Refractive Surgery Lasers</h3>
    <p> This division deals with the correction of all types of refractive errors including hyperopia, myopia, astigmatism, and presbyopia using the most sophisticated machines, and offering the safest most accurate treatment in LASIK, PRK, Femto Lasik (Intra Lasik or blade free LASIK), KAMRA implants (for presbyopia and reading correction), corneal rings and Cross linking (for Keratoconus patients)</p>
</div>

</div>


</section>


  <!-- service section end -->


  <!-- process section start -->
 
 
 <section class="process">

 <h1 class="heading">work process</h1>

<div class="box-container container">

<div class="box">
<img src="../img/eye-exam.png" class="w-60 mb-5 mb-md0" alt="">
<h3>Eye muscle movement test</h3>
<p>This checks your eyes alignment. The doctor will watch your eyes move while you follow a target (like a finger tip or their pen) as it moves in different directions..</p>


</div>

<div class="box">
<img src="../img/eye-12.png" class="w-60 mb-5 mb-md0" alt="">
<h3>Cover test</h3>
<p>This tells how well your eyes work together. You’ll stare at a small target some distance away. The doctor will cover and uncover each eye to observe how much your eyes move. Your doctor will also be watching for an eye that turns away from the target. This is a condition called strabismus. You may take the test again with a target close to you..</p>


</div>

<div class="box">
<img src="../img/eye-13.png" class="w-60 mb-5 mb-md0" alt="">
<h3>External exam and pupil reactions</h3>
<p>The doctor will watch how your pupils adjust to light and objects close to you. At the same time, the whites of your eyes and the position of your eyelids will also be checked..</p>


</div>

<div class="box">
<img src="../img/eye-3.png" class="w-60 mb-5 mb-md0" alt="">
<h3>Visual acuity test</h3>
<p>You'll sit in front of an eye chart, with letters that get smaller as you read down each line. You’ll cover each eye in turn and, using the other eye, read aloud, going down the chart, until you can't read the letters anymore</p>

</div>


<div class="box">
<img src="../img/eye-4.png" class="w-60 mb-5 mb-md0" alt="">
<h3>Refraction testing</h3>
<p> For your exact lens prescription, the doctor can use a computerized refractor. Your doctor will fine-tune the prescription by flipping the phoropter back and forth between lenses and asking you which is better. If you don't need corrective lenses, you won't have this test.</p>

</div>

<div class="box">
<img src="../img/eye-0.png" class="w-60 mb-5 mb-md0" alt="">
<h3>Slit lamp (biomicroscope)</h3>
<p>This device magnifies and lights up the front of your eye. The doctor uses it to check your cornea, iris, lens, and the back of your eye, looking for signs of certain eye conditions..</p>

</div>
<div class="box">
<img src="../img/vision.png" class="w-60 mb-5 mb-md0" alt="">
<h3>Retinal examination (ophthalmoscopy)</h3>
<p> Your doctor may dilate your pupils and use a tool called an ophthalmoscope and to see the back of your eyes -- the retina, retinal blood vessels, fluid in your eyes (he may call this vitreous fluid), and the head of your optic nerve.</p>

</div>


</div>

 </section>
 
 
  <!-- process section end -->
  <!-- reviews section start-->

  <section class="reviews" id="reviews">

<h1 class="heading">satisfied clients</h1>

<div class="box-container container">

<div class="box">
<img src="../img/client1.jpg" class="w-1 mb-4 mb-md0" alt="">
<p> I am delighted to have an opportunity to express my gratitude and appreciation to Dr. Westerfeld and his staff for diligently caring for my eye problems. They are not only most professional but always attentive to my needs and concerns</p>

<div class="stars">
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star-half alt"></i>
</div>

<h3>johny elbo</h3>
<span>satisfied client</span>




<div class="box">
<img src="../img/client3.jpg" class="w-1 mb-4 mb-md0" alt="">
<p>Had three appointments at this location and each time was pleasant. The ladies in the front are so polite and accommodating and the doctor was always prompt. Never waited more than 10 minutes after appointment time to be seen or had any bad experiences. I’ve even referred a few friends and family and they also love the location.</p>

<div class="stars">
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
</div>

<h3>elitha batres</h3>
<span>satisfied client</span>





<div class="box">
<img src="../img/client4.jpg" class="w-1 mb-4 mb-md0" alt="">
<p>The person who did my FIELD OF VISION WAS EXCELLENT!! As was Dr Townsend. Look forward to my surgery! 😮I feel confident they will be great</p>

<div class="stars">
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
</div>

<h3>Marc enriky</h3>
<span>satisfied client</span>


</div>
</div>



  </section>


  <!-- reviews section end-->  
 <!-- contact section start-->

<section class="contact" id="contact">
    
<h1 class="heading">make appointment</h1>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

<?php
        if(isset($message)){
         foreach($message as $message)

           foreach($message as $message)
           echo '<p class="message">'.$message.'</p>';
        }
?>

<p class="message">test message box</p>

<span>Your name :</span>
    <input type="text" name="name" placeholder="enter your name" class="box">
    <span>Your email :</span>
    <input type="text" name="email" placeholder="enter your email" class="box">
    <span>Your number :</span>
    <input type="text" name="number" placeholder="enter your number" class="box">
    <span>appointment date :</span>
    <input type="date" name="date" name="date" class="box">
    <input type="submit" name="submit" value="make appointment" name="submit" class="link-btn">

</form>


</section>


<!-- contact section end-->
 <!-- footer section start-->

        <section class="footer" id="footer">

<div class="box-container container">

<div class="box">

<i class="fas fa-phone"></i>
<h3>Phone number</h3>
<p>+123-456-789-1</p>
<p>+234-765-897-2</p>
<p>+014-888-112-5</p>
</div>



<div class="box">
<i class="fas fa-map-marker-alt"></i>
<h3>our address</h3>
<p>Beirut, Lebanon</p>
</div>




    <div class="box">
<i class="fas fa-clock"></i>
<h3>opening hours</h3>
<p>7:00am to 8pm</p>
</div>


<div class="box">
<i class="fas fa-envelope"></i>
<h3>email address</h3>
<p>ahmadbaghdadi@gmail.com</p>
<p>rasheedkhalaf@gmail.com</p>
</div>


</div>




<div class="credit"> &copy; copyright @ <?php echo date('Y'); ?> by <span>Ahmad&Rasheed</span>

</div>














        </section>





























   <!-- footer section end-->











<script src="script.js"></script>
</body>
</html>