@include('dashboard')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add data</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #e0f7fa;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .register-container {
            background-color: #ffffff;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            width: 350px;
        }
        .register-container h2 {
            text-align: center;
            margin-bottom: 25px;
            color: #00796b;
        }
        .register-container input[type="text"],
        .register-container input[type="email"],
        .register-container input[type="password"],
        .register-container .custom-file-upload {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border: 1px solid #b2dfdb;
            border-radius: 6px;
            box-sizing: border-box;
        }
        .register-container .custom-file-upload {
            display: inline-block;
            color: #00796b;
            cursor: pointer;
            font-size: 16px;
            text-align: center;
            background-color: transparent;
        }
        .register-container .custom-file-upload:hover {
            border-color: #00796b;
        }
        .register-container input[type="submit"] {
            width: 100%;
            padding: 12px;
            background-color: #00796b;
            color: white;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 18px;
        }
        .register-container input[type="submit"]:hover {
            background-color: #004d40;
        }
        .register-container .login-link {
            display: block;
            text-align: center;
            margin-top: 15px;
            color: #00796b;
            text-decoration: none;
        }
        .register-container .login-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<div class="register-container">
    <h2>Add data</h2>
    <form method="post" enctype="multipart/form-data">
        @csrf
        <input type="text" id="name" name="name" placeholder="Name" required>
        <input type="email" id="email" name="email" placeholder="Email" required>
       
        
        <label for="image" class="custom-file-upload">Select Image</label>
        <input type="file" id="image" name="image" accept="image/*" required style="display:none;">
        
        <input type="submit" value="submit" name="submit">
    </form>
</div>


</body>
</html>
