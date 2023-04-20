<!DOCTYPE HTML>
<html lang="en">
<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <meta name="author" content="Maria Eugenia Osorio Oliveros">
 <title>AHDA:Browse AHDA archive</title>
 <link rel= "icon" type="image/x-icon" href="/ahda_assets/img/logobookmarkwb.png">
 <link rel="stylesheet" type="text/css" href="/ahda_assets/css/Mystyle5-ahdArchive.css">
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
  <main style="background-color:rgb(245, 253, 240);">
      <div class="container-md px-2 pt-5" style="background-color:rgb(245, 253, 240);">
        <div class="row" style="min-height:95vh"">
<!--This is Bootstrap filter accordion form-->
        <div class="col-4 d-flex flex-column py-5">
        <form action="ahda-filters.php" method="POST">
            <div class="accordion" id="accordionExample">
<!--This is type of document filter-->              
            <div class="accordion-item">
                <h2 class="accordion-header">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                Type of Document
                </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                 <div class="accordion-body p-2">
                   <div class="form-check">
                       <input class="form-check-input" type="checkbox" value="manuscript" name="type_of_document[]" id="flexCheckChecked1">
                       <label class="form-check-label" for="flexCheckChecked1">Manuscript</label>
                   </div> 
                   <div class="form-check">
                       <input class="form-check-input" type="checkbox" value="drawing" name="type_of_document[]" id="flexCheckChecked2">
                       <label class="form-check-label" for="flexCheckChecked2">Drawing</label>
                   </div>
                   <div class="form-check">
                       <input class="form-check-input" type="checkbox" value="dried samples" name="type_of_document[]" id="flexCheckChecked3">
                       <label class="form-check-label" for="flexCheckChecked3">Dried samples</label>
                   </div>   
                   <div class="form-check">
                       <input class="form-check-input" type="checkbox" value="published book"name="type_of_document[]" id="flexCheckChecked4">
                       <label class="form-check-label" for="flexCheckChecked4">Published book</label>
                   </div>
                 </div>
              </div>
           </div>
<!--This is Geographical Region filter-->           
           <div class="accordion-item">
              <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              Geographical Region
              </button>
              </h2>
          <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                 <div class="accordion-body">
                     <div class="form-check">
                       <input class="form-check-input" type="checkbox" value="New Spain" name="geographical_region[]" id="flexCheckChecked5">
                       <label class="form-check-label" for="flexCheckChecked5">New Spain</label>
                     </div> 
                     <div class="form-check">
                       <input class="form-check-input" type="checkbox" value="New Kingdom of Granada" name="geographical_region[]" id="flexCheckChecked6">
                       <label class="form-check-label" for="flexCheckChecked6">New Kingdom of Granada</label>
                     </div>
                     <div class="form-check">
                       <input class="form-check-input" type="checkbox" value="Brazil" name="geographical_region[]" id="flexCheckChecked7">
                       <label class="form-check-label" for="flexCheckChecked7">Brazil</label>
                     </div>
                     <div class="form-check">
                       <input class="form-check-input" type="checkbox" value="Viceroyalty of Peru" name="geographical_region[]" id="flexCheckChecked8">
                       <label class="form-check-label" for="flexCheckChecked8">Viceroyalty of Peru</label>
                     </div>    
                  </div>
             </div>
         </div>
  <!--This is Plant name filter-->       
         <div class="accordion-item">
             <h2 class="accordion-header">
             <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
             Plant Name
            </button>
             </h2>
         <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                   <div class="form-check">
                       <input class="form-check-input" type="checkbox" value="quina" name="plant_name[]" id="flexCheckChecked9">
                       <label class="form-check-label" for="flexCheckChecked9">quina</label>
                   </div>
                    <div class="form-check">
                       <input class="form-check-input" type="checkbox" value="ipecacuanha" name="plant_name[]" id="flexCheckChecked10">
                       <label class="form-check-label" for="flexCheckChecked10">ipecacuanha</label>
                     </div>
                     <div class="form-check">
                       <input class="form-check-input" type="checkbox" value="logwood" name="plant_name[]" id="flexCheckChecked11">
                       <label class="form-check-label" for="flexCheckChecked11">logwood</label>
                     </div>
                     <div class="form-check">
                       <input class="form-check-input" type="checkbox" value="sarsaparilla" name="plant_name[]" id="flexCheckChecked12">
                       <label class="form-check-label" for="flexCheckChecked12">sarsaparilla</label>
                     </div>
                </div>
            </div>
         </div>
<!--This is Dates filter-->        
      <div class="accordion-item">
          <h2 class="accordion-header">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
          Dates
          </button>
          </h2>
        <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
           <div class="accordion-body">
                 <div class="form-check">
                   <input class="form-check-input" type="checkbox" value="1500-1600" name="dates[]" id="flexCheckChecked13">
                   <label class="form-check-label" for="flexCheckChecked13">1500-1600</label>
                  </div>
                  <div class="form-check">
                   <input class="form-check-input" type="checkbox" value="1600-1700" name="dates[]" id="flexCheckChecked14">
                   <label class="form-check-label" for="flexCheckChecked14">1600-1700</label>
                  </div>
                  <div class="form-check">
                   <input class="form-check-input" type="checkbox" value="1700-1850" name="dates[]" id="flexCheckChecked15">
                   <label class="form-check-label" for="flexCheckChecked15">1700-1850</label>
                  </div>
            </div>
         </div>
      </div>
<!--This is Themes filter-->      
         <div class="accordion-item">
              <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFifth" aria-expanded="false" aria-controls="collapseFifth">
              Themes
              </button>
             </h2>
           <div id="collapseFifth" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
               <div class="accordion-body">
                     <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="medicine" name="themes[]" id="flexCheckChecked16">
                        <label class="form-check-label" for="flexCheckChecked16">medicine</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="health" name="themes[]" id="flexCheckChecked17">
                        <label class="form-check-label" for="flexCheckChecked17">health</label>
                      </div>
                       <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="commerce"name="themes[]" id="flexCheckChecked18">
                        <label class="form-check-label" for="flexCheckChecked18">commerce</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="slavery" name="themes[]" id="flexCheckChecked19">
                        <label class="form-check-label" for="flexCheckChecked19">slavery</label>
                     </div>
                  </div>
               </div>
            </div>
            <button type="button" class="btn btn-lg" id="btnSearch">Search <i class="bi bi-chevron-double-right"></i></button>
          </div>
       </form>
    </div>
<!--End of filter accordion form-->

<!--First column archive items-->
<div class="col-md-2 d-flex flex-column px-2 py-5">
   <?php require 'database/db_login.php'; //database connection
              //Fetch data from Item List table--query Item List table for Titles
              $stmt= $conn->query("SELECT `Title` FROM `Item List` WHERE `ID_item` IN (1,2)");
	            $stmt->execute();
              $titles= $stmt->fetchALL(PDO::FETCH_COLUMN);?>
  <div class="card pt-3" style="width: 200px; height:240px;">
          <img src="/ahda_assets/img/MP-8-homepage.jpg" class="card-img-top" alt="archive-item.1">
            <div class="card-body py-4 text-center">
            <a href="ahda-item.1.php" class="card-link"><?php echo $titles[0];?></a>
            </div>
    </div>
    <br/>  
       <div class="card py-3" style="width: 200px; height:240px;">
           <i class="bi bi-file-earmark-text" style="font-size: 70px; color:rgb(63,143,105); text-align: center"></i>
            <div class="card-body py-3 text-center">
              <a href="#" class="card-link">Lorem ipsum Lorem ipsum dolor sit amet</a>
            </div>
       </div>
   </div>
<!--Second column archive items-->
     <div class="col-md-2 d-flex flex-column px-2 py-5">
       <div class="card pt-3" style="width: 200px; height:240px;">
              <img src="/ahda_assets/img-archive/archive-item2.jpg" class="card-img-top" alt="archive-item.2" style=" height: 108px;">
            <div class="card-body py-4 text-center">
              <a href="ahda-item.2.php" class="card-link"><?php echo $titles[1];?></a>
            </div>
       </div>
   <br/>
      <div class="card py-3" style="width: 200px; height:240px;">
           <i class="bi bi-file-earmark-text" style="font-size: 70px; color:rgb(63,143,105); text-align: center"></i>
            <div class="card-body py-3 text-center">
              <a href="#" class="card-link">Lorem ipsum Lorem ipsum dolor sit amet</a>
            </div>
      </div>
    </div>
<!--Third column archive items-->
    <div class="col-md-2 d-flex flex-column px-2 py-5">
       <div class="card py-3" style="width: 200px; height:240px;">
              <i class="bi bi-bookmark" style="font-size: 70px; color:rgb(63,143,105); text-align: center"></i>
            <div class="card-body py-3 text-center">
              <a href="#" class="card-link">Lorem ipsum Lorem ipsum dolor sit amet</a>
            </div>
       </div>
   <br/>
     <div class="card py-3" style="width: 200px; height:240px;">
           <i class="bi bi-bookmark" style="font-size: 70px; color:rgb(63,143,105); text-align: center"></i>
            <div class="card-body py-3 text-center">
              <a href="#" class="card-link">Lorem ipsum Lorem ipsum dolor sit amet</a>
            </div>
       </div>
    </div>
<!--Fourth column archive items-->
    <div class="col-md-2 d-flex flex-column px-2 py-5">
       <div class="card py-3" style="width: 200px; height:240px;">
            <i class="bi bi-bookmark" style="font-size: 70px; color:rgb(63,143,105); text-align: center"></i>
            <div class="card-body py-3 text-center">
              <a href="#" class="card-link">Lorem ipsum Lorem ipsum dolor sit amet</a>
            </div>
       </div>
    <br/>
    <div class="card py-3" style="width: 200px; height:240px;">
           <i class="bi bi-file-earmark-text" style="font-size: 70px; color:rgb(63,143,105); text-align: center"></i>
            <div class="card-body py-3 text-center">
              <a href="#" class="card-link">Lorem ipsum Lorem ipsum dolor sit amet</a>
            </div>
         </div>
     </div>
<!--End of archival items columns-->     
 </main>
    <?php include ('ahda-footer.php');?>
<!--This is Bootstrap 5.JS link-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>  
 </body>
</html>