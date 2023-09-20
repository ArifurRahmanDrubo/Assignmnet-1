<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Even or Odd Checker
    </title>
</head>
<body>
    <div class="hero">
        <div class="main">
        <div class="calculator">
            <div class="left">
                <h2><span>PHP<br>Even or Odd Checker </span></h2>
                
            </div>
            <div class="right">
            <form method="post" action="">
            <input type="number" name="num" placeholder="Enter Number " required><br>
           
            <button type="submit">CHECK NUMBER</button>
           </form>
           <div id="result">
            <div>
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $num = $_POST["num"];
                
                if($num%2==0){
                    echo "<p>The Number $num Is Even Number<p>";
                }
                else{
                    echo "<p>The Number $num Is Odd Number</p>";
                }
                    
                 }
               ?>
            </div>
         </div>
         </div>
         
        </div> 
        
        </div>
    </div>
    
</body>
</html>