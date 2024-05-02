<!DOCTYPE html>
<html lang="en">
<head>
    <title>Initiate Classroom</title>
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

        input[type="text"], input[type="password"], input[type="number"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            margin-bottom: 10px;
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
<div class="container">
    <h2>Initiate Classroom</h2>
    <form>
        <div>
            <label for="room">Room Number:</label>
            <input type="text" id="room" name="room" required>
        </div>
        <button type="submit">Initiate</button>
    </form>
</div>
</body>
</html>