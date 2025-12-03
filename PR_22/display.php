<!DOCTYPE html>
<html>
<head>
    <title>Practical 22</title>
    <style>
        table {
            border-collapse: collapse;
            width: 60%;
            margin: 20px auto;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: lightgray;
        }
    </style>
</head>
<body style="font-family: Arial; text-align:center;">

    <h2>Registered Users</h2>
    <table>
        <tr>
            <th>Name</th>
            <th>Address</th>
            <th>Email</th>
            <th>Mobile</th>
        </tr>

        <?php
        $file = "users.txt";
        if (file_exists($file)) {
            $lines = file($file, FILE_IGNORE_NEW_LINES);
            foreach ($lines as $line) {
                $data = explode(" | ", $line);
                echo "<tr>";
                foreach ($data as $value) {
                    echo "<td>$value</td>";
                }
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='4'>No user data found!</td></tr>";
        }
        ?>
    </table>

    <a href="register.php">Go Back to Register</a>

</body>
</html>
