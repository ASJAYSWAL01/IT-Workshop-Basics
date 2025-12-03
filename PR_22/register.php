<!DOCTYPE html>
<html>
<head>
    <title>Practical 22</title>
    <style>
        body {
            font-family: "Segoe UI", Arial, sans-serif;
            background: #f4f6f9;
            text-align: center;
        }
        .container {
            background: white;
            width: 400px;
            margin: 60px auto;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }
        h2 {
            color: #333;
        }
        input[type=text], input[type=email] {
            width: 90%;
            padding: 8px;
            margin: 6px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input[type=submit], input[type=reset] {
            width: 42%;
            padding: 10px;
            margin: 10px 5px;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            cursor: pointer;
        }
        input[type=submit] {
            background-color: #28a745;
            color: white;
        }
        input[type=reset] {
            background-color: #dc3545;
            color: white;
        }
        a {
            display: block;
            margin-top: 15px;
            color: #007bff;
            text-decoration: none;
            font-weight: bold;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>User Registration Form</h2>
    <form method="post" action="">
        <input type="text" name="name" placeholder="Enter Name" required><br>
        <input type="text" name="address" placeholder="Enter Address" required><br>
        <input type="email" name="email" placeholder="Enter Email" required><br>
        <input type="text" name="mobile" placeholder="Enter Mobile No" required><br>

        <input type="submit" name="submit" value="Register">
        <input type="reset" value="Reset">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $address = $_POST['address'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];

        // Save data to text file
        $data = $name . " | " . $address . " | " . $email . " | " . $mobile . "\n";
        $file = fopen("users.txt", "a");
        fwrite($file, $data);
        fclose($file);

        echo "<p style='color:green; font-weight:bold;'>✅ Data saved successfully!</p>";
        echo "<a href='display.php'>View Registered Users</a>";
    }
    ?>
</div>

</body>
</html>
