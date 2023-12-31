<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strong Hearts</title>

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

      <a href="login/register.php" class="link-btn">Admin Registration</a>
      

      <div id="menu-btn" class="fas fa-bars"></div>
   </div>

</div>

</header>
<!-- Navigatoion bar End -->

<section class="admin">
    <div class="container">
        <div class="row align-items-center">
            <table>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>E-Mail</th>
                    <th>Contact Number</th>
                    <th>Complaints</th>
                    <th>Date of the incident</th>
                </tr>

                <?php
                $conn = mysqli_connect("localhost", "root", "", "newdb");
                if ($conn-> connect_error){
                    die("connection failed:". $conn-> connect_error);
                }
                $sql ="select * from sub_form2";
                $result = $conn-> query($sql);

                if ($result-> num_rows > 0){
                    while ($row = $result-> fetch_assoc()){
                        echo "<tr><td>". $row["id"]. "</td><td>". $row["name"]. "</td><td>". $row["email"]. "</td><td>". $row["number"]. "</td><td>". $row["complaint"]. "</td><td>". $row["date"]. "</td></tr>";
                    }
                    echo "</table>";
                }else{
                    echo "0 result";
                } 
                $conn-> close();
                ?>
            </table>
        </div>
    </div>
    
    <div class="container">
    <div class="s">
    <p>
        <a href="login/index2.php" class="link-btn" style="background-color: #be3225; position: relative; float: right;"> Logout</a>
    </p>
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

