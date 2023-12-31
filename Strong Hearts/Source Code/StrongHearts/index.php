<?php

$conn = mysqli_connect('localhost','root','','newdb') or die('connection failed');

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $number = $_POST['number'];
   $reference = mysqli_real_escape_string($conn, $_POST['reference']);
   $date = $_POST['date'];


   $insert = mysqli_query($conn, "INSERT INTO `sub_form`(name, email, number, reference, date) VALUES('$name','$email','$number','$reference','$date')") or die('query failed');

   if($insert){
      $message[] = 'Submission was successfully!';
   }else{
      $message[] = 'Submission failed';
   }

   
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strong Hearts</title>
     <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

     <!-- bootstrap cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">

     <!-- custom css file link  -->
   <link rel="stylesheet" href="css/sh.css?v=<?php echo time(); ?>">
</head>

<body>

<!-- Navigatoion bar  -->

<header class="header fixed-top" id="ss">

<div class="container" style="background-color: none;">

   <div class="row align-items-center justify-content-between" style="background-color: none;">

      <a href="index.php" class="logo">Strong<span>Hearts</span></a>

      <nav class="nav" style="background-color: none;">
         <a href="index.php">Home</a>
         <a href="about.html">About</a>
         <a href="services.html">Services</a>
         <a href="process.html">Process</a>
         <a href="stories.html">Recent Stories</a>
         <a href="form.php">Complaints</a>
      </nav>

      <a href="login/index2.php" class="link-btn">Admin Login</a>

      <div id="menu-btn" class="fas fa-bars"></div>
   </div>

</div>

</header>

<!-- Navigatoion bar End -->

<section class="home" id="home">
   <div class="container">
      <div class="row min-vh-100 align-items-center">
         <div class="content text-center text-md-left">
            <h3>Break The Silence</h3>
            <p> In Sri Lanka, every three out of five women are victims of domestic violence, and only 1% of victims use the Prevention of Domestic Violence Act to obtain redress.
                In Sri Lanka, a woman is raped every 90 minutes and 97% of rapists face no legal consequences. Violence has become a part of everyday culture in Sri Lankan homes, 
                justifying men beating up their wives, justifying women being catcalled in the streets, justifying men raping women, 
                justifying child abuse, and justifying gender inequality. </p>

               <a href="form.php" class="link-btn">Make complaints</a>
         </div>
      </div>  
   </div>
</section>

<!-- Footer -->

<section class="footer">
   <div class="box-container container">

      <div class="box">
         <i class="fas fa-phone"></i>
            <h3>Phone Number</h3>
            <p>0717011423</p>
               <p>0345569869</p>
         </div>
         
         <div class="box">
            <i class="fas fa-clock"></i>
            <h3>Working Hours</h3>
            <p>09.00 AM to 05.00 PM</p>
         </div>
   
         <div class="box">
            <i class="fas fa-map-marker-alt"></i>
            <h3>Location</h3>
            <p>88, Cinnamon Gardens,<br> Colombo 07</p>
      </div>

      <div class="box">
         <i class="fas fa-envelope"></i>
            <h3>E-Mail</h3>
            <p>stronghearts@gmail.com</p>
            <p>strongheartsfoundation@gmail.com</p>
      </div>

   </div>

</section>

<!-- Footer End -->

<script src="js/script.js"></script>

</body>
</html>


