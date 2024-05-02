<!DOCTYPE html>
<html lang="en">
<head>
    <title>Welcome</title>
    <style>
        body {
            background-color: #ADD8E6; /* Light blue background */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
        }

        .container {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
        }

        h2 {
            margin: 0 0 20px 0;
        }

        button {
            width: 100%;
            padding: 10px;
            margin-top: 10px;
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
<div class="container">
    <p>This is a demo. No actual login performed.</p>
    <button onclick="window.location.href='edit_preferences.php';">Edit Preferences</button>
    <button onclick="window.location.href='initiate_classroom.php';">Initiate Classroom Startup</button>
</div>
</body>
</html>
