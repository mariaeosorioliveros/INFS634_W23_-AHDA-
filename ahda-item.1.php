<!DOCTYPE HTML>
<html>
<html lang="en">
<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <meta name="author" content="Maria Eugenia Osorio Oliveros">
 <title>AHDA:AHDA-01</title>
 <link rel= "icon" type="image/x-icon" href="/ahda_assets/img/logobookmarkwb.png">
 <link rel="stylesheet" type="text/css" href="/ahda_assets/css/bootstrap.css"/>
 <link rel="stylesheet" type="text/css" href="/ahda_assets/css/Mystyle6-ahda-items.css">
 <link rel="stylesheet" type="text/css" href="/ahda_assets/css/Mystyle1-ahda.css"> 
 <link rel= "stylesheet" href="https://fonts.googleapis.com/css2?family=Catamaran:wght@300&family=Cormorant+Garamond&family=Roboto&display=swap"> 
 <!--Bootstrap 5.CDN link--> 
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
 <!--Boostrap 5-Icons link-->
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
</head>

<body>
<?php include ('ahda-header.php');?>    
<main style="background-color:rgba(245, 253, 240);">
<div class="container-fluid pt-3 pb-1 px-5" style="background-color:rgb(255, 255, 255);">
    <h2 style="font-family:Roboto,sans-serif; font-size: 18px; font-weight:700;color: rgb(0, 0, 0);">SAMPLES OF YELLOW QUINA,1785</h2>
</div>    
<div class="container px-5 py-3" style="background-color:rgba(245, 253, 240);">
<div class="row py-4">
<div class="col-6">col1      
</div>
<!--Archival item metadata-->
<div class="col-6 pt-4 mx-auto">
<?php require 'database/db_login.php'; //database connection
  //Fetch data from Item List table
$stmt= $conn->query("SELECT `Title`, `Creator`, `Date` ,`Description`,`Subject`,`Keywords`,`Institution holding the item`,`Reference number`,`Permanent URL` FROM `Item List` WHERE `ID_item`=1");
  $data= $stmt->fetchALL(PDO::FETCH_ASSOC);
?>
<div class="card" style="width: 650px">
  <div class="card-header" style="background-color:rgb(229, 250, 225);">
    Featured
  </div>
  <div class="card-header" style="background-color: rgb(230, 241, 201);">
   <strong>AHDA-01</strong>
  </div>
  <ul class="list-group list-group-flush">
    <?php foreach($data as $row): ?>
    <li class="list-group-item border-0"><b>Title:</b> <?php echo $row['Title'];?></li>
    <li class="list-group-item border-0"><b>Creator:</b> <?php echo $row['Creator'];?></li>
    <li class="list-group-item border-0"><b>Date:</b> <?php echo $row['Date'];?></li>
    <li class="list-group-item border-0"><b>Description:</b> <?php echo $row['Description'];?></li>
    <li class="list-group-item border-0"><b>Subject:</b> <?php echo $row['Subject'];?></li>
    <li class="list-group-item border-0"><b>Keywords:</b> <?php echo $row['Keywords'];?></li>
    <li class="list-group-item border-0"><b>Institution holding the item:</b> <?php echo $row['Institution holding the item'];?></li>
    <li class="list-group-item border-0"><b>Reference number: </b><?php echo $row['Reference number'];?></li>
    <li class="list-group-item"><b>Permanent URL:</b><a target="_blank" href= "<?php echo $row['Permanent URL'];?>"> <?php echo $row['Permanent URL']; ?> </a></li>
    <?php endforeach;?>
  </ul> 
</div>
</div>
<!--End of archival item metadata-->
</div>
</div>
</main>
<?php include ('ahda-footer.php');?>
<!--This is Bootstrap 5.JS link-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>