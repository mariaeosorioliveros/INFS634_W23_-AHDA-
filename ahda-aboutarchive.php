<!DOCTYPE HTML>
<html>
<html lang="en">
<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <meta name="author" content="Maria Eugenia Osorio Oliveros">
 <title>AHDA:About AHDA Archive</title>
 <link rel= "icon" type="image/x-icon" href="/ahda_assets/img/logobookmarkwb.png">
 <link rel="stylesheet" type="text/css" href="/ahda_assets/css/Mystyle4-ahda.css">
 <link rel="stylesheet" type="text/css" href="/ahda_assets/css/Mystyle1-ahda.css"> 
 <link rel="stylesheet" href="/ahda_assets/css/bootstrap.css"/>
 <link rel= "stylesheet" href="https://fonts.googleapis.com/css2?family=Catamaran:wght@300&family=Cormorant+Garamond&family=Roboto&display=swap"> 
 <!--Bootstrap 5.CSS link--> 
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
 <!--Boostrap 5-Icons link-->
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
</head> 
<body>
    <?php include ('ahda-header.php');?> 
 <main>
    <div class="container py-5 text-center">
        <div class="row py-4">
            <div class="col py-3">
            <?php require 'database/db_login.php'; //load credentials
            //write query from database ==About table
            $query= "SELECT `Title`,`Paragraph1`,`Paragraph2` FROM `About` WHERE id=1;";  
            //executing query to get results 
            $query_exc = $conn->query($query);
            while($results = $query_exc->fetch(PDO:: FETCH_ASSOC)) {
         echo "<h2 class='heading'>" . $results["Title"] . "</h2>";
         echo "<p style='font-size:17px'>" . $results["Paragraph1"] . "</p>";
         echo "<br/>"; 
         echo "<h2 class='heading'>HOW TO BROWSE AHDA ARCHIVE? </h2> ";
         echo "<p style='font-size:17px'>" . $results["Paragraph2"] . "</p>";
        }
        ?>
            </div>
        </div>
    </div>   
 </main> 
 <?php include ('ahda-footer.php');?>
<!--This is Bootstrap 5.JS link-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script> 
</body>
</html>