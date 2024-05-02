<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edit Preferences</title>
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

        table {
            width: 100%;
            margin-bottom: 20px;
        }

        th, td {
            text-align: left;
            padding: 8px;
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
    <h2>Edit Preferences</h2>
    <form>
        <div>
            <label for="room">Room Number:</label>
            <input type="text" id="room" name="room" required>
        </div>
        <table>
            <tr>
                <th>Software/Equipment</th>
                <th>Enable</th>
            </tr>
            <tr>
                <td>Camera</td>
                <td><input type="checkbox" name="camera" checked></td>
            </tr>
            <tr>
                <td>Lights</td>
                <td><input type="checkbox" name="lights" checked></td>
            </tr>
            <tr>
                <td>Brightspace</td>
                <td><input type="checkbox" name="projector"></td>
            </tr>
            <tr>
                <td>Screen Sharing Software</td>
                <td><input type="checkbox" name="screen_sharing" checked></td>
            </tr>
            <tr>
                <td>Sound System</td>
                <td><input type="checkbox" name="sound_system"></td>
            </tr>
        </table>
        <button type="submit">Submit Preferences</button>
    </form>
</div>
</body>
</html>

