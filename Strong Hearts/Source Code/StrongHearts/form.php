<?php

$conn = mysqli_connect('localhost','root','','newdb') or die('connection failed');

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $number = $_POST['number'];
   $complaint = mysqli_real_escape_string($conn, $_POST['complaint']);
   $date = $_POST['date'];


   $insert = mysqli_query($conn, "INSERT INTO `sub_form2`(name, email, number, complaint, date) VALUES('$name','$email','$number','$complaint','$date')") or die('query failed');

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
    <header class="header fixed-top">

        <div class="container">
        
           <div class="row align-items-center justify-content-between">
        
           <a href="index.php" class="logo">Strong<span>Hearts</span></a>
        
              <nav class="nav">
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

        <section class="contact" id="contact">

            <script>
               function myfun(){
               var a = document.getElementById("number").value;
               if (a.length>10){
                  document.getElementById("messages").innerHTML="Invalid mobile number!";
                  return false;
               }
            
               if (a.length<10){
                  document.getElementById("messages").innerHTML="Invalid mobile number!";
                  return false;
               }
            }
            </script>
            
               <h1 class="heading">Make a complaint</h1>
               <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name = "form1">
               <?php 
                     if(isset($message)){
                        foreach($message as $message){
                           echo '<p class="message">'.$message.'</p>';
                        }
                     }
               ?>
                  <span>Your Name:</span>
                  <input type="text" name="name" pattern="[^0-9]*" placeholder="Enter Your Name" class="box" title="Name can only contain Letters!" required>
                  <span>Your E-Mail:</span>
                  <input type="Email" name="email" placeholder="Enter Your E-mail" class="box" required>
                  <span>Your Contact Number:</span>
                  <input type="tel" name="number" placeholder="Enter Your Mobile Number" class="box" pattern="07[1,2,5,6,7,8][0-9]{7}" title="Invalid mobile number!" maxlength="10" required>
                  <span id="messages" style="color:red;"></span>
                  <span>Your Complaint:</span>
                  <!-- <input type="text" name="reference" placeholder="Enter Your complaint here" class="box" required> -->
                  <textarea name="complaint" placeholder="Enter Your complaint here" class="box"  rows="3"></textarea>
                  <span>Date your incident occured:</span>
                  <input type="date" name="date" class="box" required>
                  <input type="submit" value="Submit Complaint" name="submit" class="link-btn">
            
               </form>
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

