<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Assignment 2 Part 3 People</title>
    <link rel="stylesheet" type="text/css" href="css/tableStyling.css">
    <link rel="icon" type="image/ico" href="images/favicon.ico"/>
</head>
<body>
<div class="container">
    <h1>Table Display</h1>

    <table>
        <thead>
        <tr>
            <th>User ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Avatar</th>
            <th>Bio</th>
        </tr>
        </thead>
        <tbody>
        <?php
        require 'connect.php'; // Import my connect

        $query = "SELECT * FROM person;"; // Set the variable Query
        $result = mysqli_query($con, $query) or die('Query failed: ' . mysqli_errno($con)); // Run the query

        while ($line = mysqli_fetch_array($result, MYSQLI_ASSOC)) { // While loop to go through SQl table rows
            $count = 0; // Variable to know where in loop
            echo "<tr>"; // Open html table row
            foreach ($line as $field_value) { // Go through data in sql row
                if ($count !== 3) { // Check to see if photo format is needed enter if not
                    echo "<td>$field_value</td>"; // Print data to table data tag
                } // close if
                else { // Enter if photo format is needed
                    $path = "images/profiles/".$field_value; // Set Path
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
