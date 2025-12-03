<!DOCTYPE html>
<html>
<head>
    <title>Save Data to Text File</title>
</head>
<body>

<h2>Enter Your Information</h2>

<form method="post" action="">
    <label>Enter Name:</label>
    <input type="text" name="username" required>
    <br><br>
    <input type="submit" name="submit" value="Submit">
    <input type="reset" value="Reset">
</form>

<?php
if (isset($_POST['submit'])) {
    $name = $_POST['username'];

    echo "<h3>You entered: $name</h3>";

    // store data into a text file
    $file = fopen("data.txt", "a");  // "a" means append mode
    fwrite($file, $name . "\n");
    fclose($file);

    echo "<p>Data saved successfully into data.txt</p>";
}
?>

</body>
</html>
