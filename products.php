<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Assignment 2 Part 3 Products</title>
    <link rel="stylesheet" type="text/css" href="css/tableStyling.css">
    <link rel="icon" type="image/ico" href="images/favicon.ico"/>
</head>
<body>
<div class="container">
    <h1>Census Name Frequency Data</h1>
    <h3>SQL Statement</h3>
    <p>USE bbabikian;</p>
    <p>CREATE table assign2products(ProductID INTEGER, ProductName VARCHAR(50), Description VARCHAR(255),
        picURL VARCHAR(50), Price DECIMAL(10,2), PRIMARY KEY(ProductID));</p>
    <p>INSERT into products VALUES</p>
    <ul>
        <li>(001, 'Paint Brush', 'Real horse hair!', 'brush.jpeg',12.99),</li>
        <li>(002, 'Drill', 'Battery and charger included', 'drill.jpeg',199.99),</li>
        <li>(003, 'Hammer', '12oz 13 inch oak handle', 'hammer.jpeg',49.99),</li>
        <li>(004, 'Hose', '100 foot garden hose, no kink!', 'hose.jpeg',79.99),</li>
        <li>(005, 'Lawn Mower', '60lbs all electric mower', 'lawnmower.jpeg',540.00),</li>
        <li>(006, 'Nail', '400 count 3 inch nail', 'nail.jpeg',19.99),</li>
        <li>(007, 'Paint', 'Ceiling white, latex and lead free', 'paint.jpeg',25.49),</li>
        <li>(008, 'Saw', 'Fine toothed woodworking saw', 'saw.jpeg',49.99),</li>
        <li>(009, 'Screwdriver', 'Flat bit, 10 inch, high grip', 'screwdriver.jpeg',10.99),</li>
        <li>(010, 'Tape Measure', '25 foot, cause 16 foot is for kids', 'tapemeasure.jpeg',49.99);</li>
    </ul>

    <table>
        <thead>
        <tr>
            <th>Product ID</th>
            <th>Product Name</th>
            <th>Description</th>
            <th>Image</th>
            <th>Price</th>
        </tr>
        </thead>
        <tbody>
        <?php
        require 'connect.php'; // Import my connect

        $query = "SELECT * FROM assign2products;"; // Set the variable Query
        $result = mysqli_query($con, $query) or die('Query failed: ' . mysqli_errno($con)); // Run the query

        while ($line = mysqli_fetch_array($result, MYSQLI_ASSOC)) { // While loop to go through SQl table rows
            $count = 0; // Variable to know where in loop
            echo "<tr>"; // Open html table row
            foreach ($line as $field_value) { // Go through data in sql row
                if ($count !== 3) { // Check to see if photo format is needed enter if not
                    echo "<td>$field_value</td>"; // Print data to table data tag
                } // close if
                else { // Enter if photo format is needed
                    $path = "images/products/".$field_value; // Set Path
                    echo "<td><img src=$path style='width: 50px' alt=$field_value></td>"; // Print photo to table data tag
                } // Close else
                $count += 1; // Add one to count
            } // Close for each loop
            echo "</tr>"; // Close html table row
        } // Close while
        ?>
        </tbody>
    </table>
    <br>
    <a href="index.php">Click here to go home</a>
</div>
</body>
</html>
