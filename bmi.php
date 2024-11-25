<!DOCTYPE html> 
<html> 
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Mitr:wght@200;300;400;500;600;700&display=swap">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>BMI Calculator</title>
</head> 
<body>
    <div class="container">
        <h2>BMI Calculator</h2>
        <form method="post">
            <p>Enter Weight (kg): </p>
            <input type="number" name="w" required><br><br> 
            <p>Enter Height (cm): </p>
            <input type="number" name="h" required><br><br> 
            <input type="button" value="Submit" onclick="clickme()">
        </form>
    
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $w = $_POST["w"]; 
            $h = $_POST["h"];
        
            $bmi = ($w/($h/100)**2).toFixed(2);
            $rs
            if ($bmi < 18.5) {
                $rs = "Underweight";
            } else if ($bmi > 25) {
                $rs = "Overweight";
            } else {
                $rs = "Normal";
            }

            echo "Your Weight = " . ($w + 10); 
            echo "<br>";
            echo "Your Height = " . $h; 
        }
        ?>
    </div>
</body>
</html>