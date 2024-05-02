<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login Page</title>
    <style>
        /* Set the full page background color */
        body {
            background-color: #ADD8E6; /* Light blue background */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
        }

        /* Styling the form */
        form {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 300px;
        }

        /* Space for the logo */
        .logo {
            text-align: center;
            margin-bottom: 20px;
        }

        img {
            width: 100px; /* Adjust based on actual logo size */
            height: auto;
        }

        /* Styles for the input fields and button */
        div {
            margin-bottom: 10px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
<form action="moblieApp2.php" method="post">
    <div class="logo">
        <img src="/images/bentley.png" alt="Company Logo">
    </div>
    <h2>Login Form</h2>
    <div>
        <label for="username">Username:</label>
        <input type="text" id="username" name="username">
    </div>
    <div>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password">
    </div>
    <div>
        <button type="submit">Login</button>
    </div>
</form>
</body>
</html>