<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>My Personal Information
    </title>
</head>
<body>
    <div class="hero">
        <div class="main">
        <div class="information">
            <div class="header">
                <h2>My Personal Information</h2>
            </div>
            <div class="details">
              <p>
              <?php
               $name = "Arifur Rahman Drubo ";
               $age = 23;
               $country= "Bangladesh";
               $introduction = "HI I am $name  I am $age years old. I am a Student of CSE and my institute name is Bangladesh Institute of Science and Tecnology.I am frontend Developer ,Wordpress developer .I am happy to be a part of OSTAD Platform.";
               echo "<span>Name:</span>  $name <br>";
               echo "<span>Age :</span> $age  <br>";
               echo "<span>Country :</span> $country.<br>";
               echo "<span>Introduction:</span> $introduction";
               
            ?>
              </p>
            
            </div>
         </div>
        </div> 
       
    </div>
    
</body>
</html>