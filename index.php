<!DOCTYPE html>
<html>

<head>
    <title>Password Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f6fc;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #2f63d4;
            margin-top: 0;
        }

        input[type="password"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-bottom: 20px;
        }

        button {
            background-color: #2f63d4;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #4e8ef7;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Enter Password</h2>
        <form id="passwordForm" action="authenticate.php" method="post">
            <input type="password" name="password" placeholder="Enter password">
            <button type="submit">Submit</button>
        </form>
    </div>
</body>

</html>
