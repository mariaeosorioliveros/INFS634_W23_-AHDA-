<?php
  date_default_timezone_set('America/Montreal');
  $date = new DateTime();
  $TimeDate = $date->format('Y-m-d H:i:s');

  require 'database/db_login.php'; //load credentials

  if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['message'])){ //check if name, email, and message is submitted using POST method

//`Contact`==table in INFS634-AHDA-Project database // extracting data from the database
  $sql= "INSERT INTO `Contact` (`name`, `email`, `message`) VALUES ('".$_POST['name']."', '".$_POST['email']."', '".$_POST['message']."')";
  $stmt = $conn->prepare($sql);
    //Creating New Event
    if( $stmt->execute() ){  //executing query to update the database 

        $confirm="Contact form submitted."; //Message to show contact form was submitted

    } else {
            $confirm="Error in submitting contact form."; //Message to show error in submitting form
    }
  }
 
  $conn=null;  
?>

<!DOCTYPE HTML>
<html>
<html lang="en">
  <head> 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Maria Eugenia Osorio Oliveros">
    <title>AHDA:Contact</title>
    <link rel= "icon" type="image/x-icon" href="/ahda_assets/img/logobookmarkwb.png">
    <link rel="stylesheet" type="text/css" href="/ahda_assets/css/Mystyle2-ahdacontact.css">
    <link rel="stylesheet" type="text/css" href="/ahda_assets/css/Mystyle1-ahda.css">  
    <link rel="stylesheet" href="/ahda_assets/css/bootstrap.css"/>
    <link rel= "stylesheet" href="https://fonts.googleapis.com/css2?family=Catamaran:wght@300&family=Cormorant+Garamond&family=Roboto&display=swap"> 
  <!--Bootstrap 5.CSS link--> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <!--Bootstrap 5-Icons link-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
  </head> 
<body>
  <?php include ('ahda-header.php');?>
<main style="background-color: rgb(245,253,240);">
  <div class="container-fluid" style="background-color:rgba(92,126,102,0.75);">
   <div class= "row pt-3 pb-0">
    <div class="col-12">
       <h2 id="contact">Contact Us</h2>
       <p id="contactline"> WE WOULD LIKE TO HEAR YOUR QUESTIONS, COMMENTS, SUGGESTIONS, AND FEEDBACK!</p>
    </div>
   </div>
  </div> 
  <div class="container py-5">
    <div class="row">
     <div class="col-lg-6 py-4 mx-auto">
<!--Start of Bootstrap 5 contact form--> 
    <form action="#" method="POST" id="form"><!--Adding action and POST method type for this form-->       
<!--Name input-->    
    <div class="mb-3 pt-1">
      <label for="formGroupExampleInput" class="form-label">Name</label>
      <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Enter your first and last name" name="name" required> <!--Define input variable name for name required-->
    </div>
 <!--Email input-->   
    <div class="mb-3 pt-1">
      <label for="exampleFormControlInput1" class="form-label">Email address</label>
      <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Enter your email: name@example.com" name="email" required> <!--Define input variable name for email required-->
    </div>
 <!--Message input-->   
    <div class="mb-3 pt-1">
      <label for="exampleFormControlTextarea1" class="form-label">Message</label>
      <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Enter your message..." rows="8" name="message" required></textarea><!--Define input name variable for message required-->
    </div>
 <!--Submit button-->  
    <div class="mb-3 py-2 text-end">
       <h2 style="font-family: Catamaran,sans-serif;font-size: 19px; font: weight 300px; text-align:center">Thank you!</h2>
       <button class="btn btn-primary" type="submit">Send <img src="/ahda_assets/img/send-message-svgrepo-com.svg" alt="send-icon" width="20" height="auto" style="fill:rgb(11,18,9); text-align:end"></button>
 <!--Submission output-->  
       <?php echo "<p style='font-family:Catamaran, sans-serif;font-size: 16px'>".$confirm."</p>";?>
    </div>
   </div>
  </div>
 </form>
<!--End of Bootstrap 5 contact form-->    
</div>
</main> 
  <?php include ('ahda-footer.php');?>
<!--This is Bootstrap 5.JS link-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html> 