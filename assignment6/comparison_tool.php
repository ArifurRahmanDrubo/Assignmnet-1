<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Comparison Tool
    </title>
</head>
<body>
    <div class="hero">
        <div class="main">
        <div class="calculator">
            <div class="left">
                <h2><span>PHP<br>Comparison Tool </span></h2>
                
            </div>
            <div class="right">
            <form method="post" action="">
            <input type="number" name="num1" placeholder="Enter First Number  " required><br>
            <input type="number" name="num2" placeholder="Enter Second Number  " required><br>
           
            <button type="submit">COMPARE</button>
           </form>
           
         </div>
         
        </div> 
        <div id="result">
            <div>
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $num1 = $_POST["num1"];
                $num2 = $_POST["num2"];
               
                if($num1>$num2){
                    echo "<p>The Larger Number is $num1</p>";
                }elseif($num1==$num2){
                    echo "<p>The $num1 is Equal to $num2 </p>";
                }
                else{
                    echo "<p>The Larger Number is $num2 </p>";
                }
                    
                 }
               ?>
            </div>
         </div>
        </div>
    </div>
    
</body>
</html>