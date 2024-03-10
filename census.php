<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Assignment 2 Part 3 Census</title>
    <link rel="stylesheet" type="text/css" href="css/tableStyling.css">
    <link rel="icon" type="image/ico" href="images/favicon.ico"/>
</head>
<body>
<div>
    <h1>Census Name Frequency Data</h1>
    <?php
    function create_stream($fileName){ // Create function
        $path = "files/".$fileName.".txt"; // Format the data
        return fopen($path, "r");} // Return the data

    $boy_name_stream = create_stream("boynames"); // Open the boy names data
    $girl_name_stream = create_stream("girlnames"); // Open the girl names data
    $boy_names = array(); // Create array for boy names
    $girl_names = array(); // Create array for girl names
    $shared_names = array(); // Create array for shared names
    $total_boys = 0; // Create variable for amount of boys
    $total_girls = 0; // Create variable for amount of girls
    $total_shared = 0; // Create variable for amount of people with shared names

    while (!feof($boy_name_stream)){ // While loop to go through boy data go until the file is empty
        $name_data = explode(' ',fgets($boy_name_stream)); // Split the row at the space, data now [name, freq]
        if ($name_data[0] != "") { // Make sure the name isn't empty
            $name_data[1] = rtrim($name_data[1], "\r,\n"); // Format frequency
            $total_boys += $name_data[1]; // Add the freq of name to total boys
            $boy_names[$name_data[0]] = $name_data[1];}} // Add name => freq to the boy names array close if close while

    while (!feof($girl_name_stream)){ // While loop to go through girl data go until the file is empty
        $name_data = explode(' ',fgets($girl_name_stream)); // Split the row at the space, data now [name, freq]
        if ($name_data[0] != "") { // Make sure the name isn't empty
            $name_data[1] = rtrim($name_data[1], "\r,\n"); // Format frequency
            $girl_names[$name_data[0]] = $name_data[1]; // Add name => freq to the girl names array
            $total_girls += $name_data[1]; // Add the freq of name to total girl
            if (isset($boy_names[$name_data[0]])) { // Check to see if girl name is in boy names
                $amount_with_name = $boy_names[$name_data[0]] + $name_data[1]; // Sum the amount of boys and girls with name
                $total_shared += $amount_with_name; // Add the sum above to total shared
                $shared_names[$name_data[0]] = $amount_with_name;}}} // Add name => freq to the shared names array close if close if close while

    echo "<h3>According to the census, there were a total of " . number_format($total_boys) .
        " boys born last year.</h3>"; // Print results
    echo "<h3>According to the census, there were a total of " . number_format($total_girls) .
        " girls born last year.</h3>"; // Print results
    echo "<h3>According to the census, there were " . sizeof($shared_names) . " names share by "
        . number_format($total_shared) . " boys and girls.</h3>"; // Print results

    ?>
    <table class="container">
        <tr><th>Name</th><th>Frequency</th></tr>
        <?php
        arsort($shared_names); // Sort names based on frequency (value)
        foreach ($shared_names as $name => $freq) { // For loop going through shared names, getting name and freq
            echo "<tr><td>" . $name . "</td><td>" . $freq . "</td></tr>"; // Print table row
        }
        ?>
    </table>
    <br>
    <br>
    <a href="index.php"><h4>Click to return to the homepage</h4></a>
</div>
</body>
</html>
