<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Temperature Converter
    </title>
</head>
<body>
    <div class="hero">
        <div class="main">
        <div class="calculator">
            <div class="left">
                <h2><span>PHP <br>Temperature Converter</span></h2>
                
            </div>
            <div class="right">
            <form method="post" action="">
            <input type="number" name="temp" placeholder="Enter Temperature " required><br>
            <select name="operation">
                <option >Select Converter</option>
                <option value="celcius">Farenheight To Celcius</option>
                <option value="farenheit">Celcius To Farenheight</option>
            </select><br>
            <button type="submit">CONVERT</button>
           </form>
          
         </div>
         
        </div> 
        <div id="result">
            <div>
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $temp = $_POST["temp"];
                
                $operation = $_POST["operation"];

                switch ($operation) {
                    case "celcius":
                        $result = ($temp-32)*5/9;
                        echo "<p>{$temp}° FarenHeit equal to  {$result}° Celcius</p>";
                        break;
                    case "farenheit":
                        $result = ($temp*9/5)+32;
                        echo "<p>{$temp}° Celcius  equal to  ${result}° FarenHeit</p>";
                        break;
                    }
                 }
               ?>
            </div>
         </div>
        
        </div>
    </div>
    
</body>
</html>