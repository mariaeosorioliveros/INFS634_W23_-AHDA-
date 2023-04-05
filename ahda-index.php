<!DOCTYPE HTML>
<html>
<html lang="en">
<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <meta name="author" content="Maria Eugenia Osorio Oliveros">
 <title>AHDA:Homepage</title>
 <link rel= "icon" type="image/x-icon" href="/ahda_assets/img/logobookmarkwb.png"/>
 <link rel="stylesheet" type="text/css" href="/ahda_assets/css/Mystyle-ahda.css"/> 
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
<div class="container-fluid">
 <div class="row">
    <div class="col-sm-4 col-lg-6 p-5 text-center" style="background-color:rgb(245, 253, 240);">
        <p id="welcomeMain">Lorem ipsum dolor sit amet,consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<b> Ut enim ad minim veniam </b>, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. <b>Lorem ipsum dolor sit amet,</b>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>            
    </div>
    <div class="col-sm-8 col-lg-6 pt-5 pb-4 position-relative" style="background-color: rgb(255, 255, 255);">
        <img src="/ahda_assets/img/MP-8-homepage.jpg" class="float-start" alt="archive-image" width="350" height="auto">
        <p class="h3">Archive</p>
        <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        <button type="button" class="btn position-absolute bottom-0 end-0" style="background-color: rgba(25, 51, 39, 0.5); border-radius:0; width: 60px; height: 50px;" >  
        <i class="bi bi-caret-right-fill" style="font-size: 28px; fill:rgb(25, 51, 39); text-align: center" ></i>
        </button>
    </div>
    </div>  
    <div class="row">
    <div class="col-lg-3 px-0" style="background-color: rgb(229, 250, 225);">
         <img src="/ahda_assets/img/imageAHDAhomepagebox1.jpg" class="mw-100"  alt="image-collage1">
    </div>
    <div class="col-lg-3 px-0" style="background-color: rgb(229, 250, 225);">
        <img src="/ahda_assets/img/imageAHDAhomepagebox2.jpg" class="mw-100"  alt="image-collage2">
    </div>
    <div class="col-lg-3 pt-5 position-relative" style="background-color: rgb(229, 250, 225);">
        <p class="h3">Herbolaria Collections</p>
        <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        <button type="button" class="btn position-absolute bottom-0 end-0" style="background-color: rgba(25, 51, 39, 0.5); border-radius:0; width: 60px; height: 50px;">  
        <i class="bi bi-caret-right-fill" style="font-size: 28px; fill:rgb(25, 51, 39); text-align:center" ></i>
        </button>
        </div>
        <div class="col-lg-3 pt-5 position-relative" style="background-color: rgb(230, 241, 201);">
        <p class="h3">Projects</p>
        <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        <button type="button" class="btn position-absolute bottom-0 end-0" style="background-color: rgba(25, 51, 39, 0.5); border-radius:0; width: 60px; height: 50px;" >  
        <i class="bi bi-caret-right-fill" style="font-size: 28px; fill:rgb(25, 51, 39); text-align:center" ></i>
        </button>
        </div>
    </div>
</div> 
</main>              
<?php include ('ahda-footer.php');?>
<!--This is Bootstrap 5.JS link-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>