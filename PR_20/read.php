<!DOCTYPE html>
<html>
<head>
    <title>Practical 20</title>
    <style>
        table {
            border-collapse: collapse;
            width: 60%;
            margin: 20px auto;
        }
        th, td {
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
        h2 {
            text-align: center;
        }
    </style>
</head>
<body>

<h2>Student Information</h2>

<?php
$filename = "data.txt";

if (file_exists($filename)) {
    $file = fopen($filename, "r");
    echo "<table>";
    echo "<tr><th>Name</th><th>Password</th><th>Email</th></tr>";

    while (!feof($file)) {
        $line = fgets($file);
        $data = explode(":", trim($line));

        if (count($data) == 3) {
            echo "<tr>";
            echo "<td>" . htmlspecialchars($data[0]) . "</td>";
            echo "<td>" . htmlspecialchars($data[1]) . "</td>";
            echo "<td>" . htmlspecialchars($data[2]) . "</td>";
            echo "</tr>";
        }
    }

    echo "</table>";
    fclose($file);
} else {
    echo "<p style='text-align:center; color:red;'>File not found!</p>";
}
?>

</body>
</html>
