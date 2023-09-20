<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Weather Report 
    </title>
</head>
<body>
    <div class="hero">
        <div class="main">
        <div class="calculator">
            <div class="left">
                <h2><span>PHP<br>Weather Report </span></h2>
                
            </div>
            <div class="right">
            <form method="post" action="">
            <input type="number" name="temp" placeholder="Enter Temperature  " required><br>
           
            <button type="submit">CHECK WEATHER</button>
           </form>
           
         </div>
         
        </div> 
        <div id="result">
            <div>
                
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $temp = $_POST["temp"];
                
                if($temp<15){
                    echo "<p>It's freezing!🥶</p>";
                }
                elseif($temp>16 && $temp <25){
                    echo  "<p>It's cool😎</p>";
                }else{
                  echo  "<p>It's warm🥵</p>";
                }
                    
                 }
               ?>
               
            </div>
         </div>
        </div>
    </div>
    
</body>
</html>