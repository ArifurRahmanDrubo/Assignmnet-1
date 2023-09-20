<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Simple Calculator
    </title>
</head>
<body>
    <div class="hero">
        <div class="main">
        <div class="calculator">
            <div class="left">
                <h2><span>PHP <br>CALCULATOR</span></h2>
                
            </div>
            <div class="right">
            <form method="post" action="">
            <input type="number" name="num1" placeholder="Enter first number" required><br>
            <input type="number" name="num2" placeholder="Enter second number" required><br>
            <select name="operation">
                <option value="add">Addition(+)</option>
                <option value="subtract">Subtraction(-)</option>
                <option value="multiply">Multiplication(*)</option>
                <option value="divide">Division(/)</option>
                
            </select><br>
            <button type="submit">CALCULATE</button>
           </form>
         </div>
         
        </div> 
        <div id="result">
            <div>
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $num1 = $_POST["num1"];
                $num2 = $_POST["num2"];
                $operation = $_POST["operation"];

                switch ($operation) {
                    case "add":
                        $result = $num1 + $num2;
                        echo "<p>The Addition is : $result</p>";
                        break;
                    case "subtract":
                        $result = $num1 - $num2;
                        echo "<p>The Subtraction is: $result</p>";
                        break;
                    case "multiply":
                        $result = $num1 * $num2;
                        echo "<p>The Multiplication is: $result</p>";
                        break;
                    case "divide":
                        if ($num2 != 0) {
                            $result = $num1 / $num2;
                            echo "<p>The Division is: $result</p>";
                        } else {
                            echo "<p>Cannot divide by zero.</p>";
                        }
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