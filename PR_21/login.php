<!DOCTYPE html>
<html>
<head>
    <title>Practical 21</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }
        form {
            width: 300px;
            margin: 100px auto;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px gray;
        }
        input {
            width: 95%;
            padding: 8px;
            margin: 8px 0;
        }
        input[type="submit"], input[type="reset"] {
            width: 48%;
            cursor: pointer;
            background-color: #4CAF50;
            color: white;
            border: none;
        }
        h2 {
            text-align: center;
        }
        .message {
            text-align: center;
            font-size: 18px;
        }
    </style>
</head>
<body>

<h2>Login Form</h2>

<form method="post" action="">
    <label>Username:</label><br>
    <input type="text" name="username" required><br>
    <label>Password:</label><br>
    <input type="password" name="password" required><br>
    <input type="submit" value="Login">
    <input type="reset" value="Reset">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $input_user = $_POST["username"];
    $input_pass = $_POST["password"];
    $found = false;

    $file = fopen("users.txt", "r");

    while (!feof($file)) {
        $line = fgets($file);
        $data = explode(":", trim($line));

        if (count($data) == 2) {
            $stored_user = $data[0];
            $stored_pass = $data[1];

            if ($input_user == $stored_user && $input_pass == $stored_pass) {
                $found = true;
                break;
            }
        }
    }

    fclose($file);

    if ($found) {
        echo "<p class='message' style='color:green;'>Login Successful! Welcome, $input_user 😊</p>";
    } else {
        echo "<p class='message' style='color:red;'>Invalid Username or Password ❌</p>";
    }
}
?>

</body>
</html>
