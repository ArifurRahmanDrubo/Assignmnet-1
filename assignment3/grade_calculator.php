<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Grade Converter
    </title>
</head>
<body>
    <div class="hero">
        <div class="main">
        <div class="calculator">
            <div class="left">
                <h2><span>PHP  <br>Grade Converter</span></h2>
                
            </div>
            <div class="right">
            <form method="post" action="">
            <input type="number" name="sub1" placeholder="Enter First Subject " required><br>
            <input type="number" name="sub2" placeholder="Enter Second  Subject " required><br>
            <input type="number" name="sub3" placeholder="Enter Third  Subject " required><br>
           
            <button type="submit">Submit</button>
           </form>
          
         </div>
         
        </div> 
        <div id="result">
            <div class="result-container">   
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $sub1 = $_POST["sub1"];
                $sub2 = $_POST["sub2"];
                $sub3 = $_POST["sub3"];
                if($sub1>=33 && $sub2 >=33 && $sub3>=33){   
                $avarage = ($sub1+$sub2+$sub3)/3;
                echo "<p>Average: <span>$avarage</span></p>";
                if($avarage>=33 && $avarage<49){
                    echo "<p>Letter Grade: <span>D</span></p>";
                }elseif($avarage>=50 && $avarage<59){
                    echo "<p>Letter Grade: <span>C</span></p>";
                }elseif($avarage>=60 && $avarage<69){
                    echo "<p>Letter Grade: <span>B</span></p>";
                }else{
                    echo "<p>Letter Grade: <span>A</span></p>";
                }

                }else{
                    $average=($sub1+$sub2+$sub3)/3;
                    echo "<p>Average: <span>$average</span></p>";
                    
                    echo "<p>Letter Grade: <span>F</span></p>";
                }

                
                 }
               ?>
            </div>
         </div>
        </div>
    </div>
    
</body>
</html>