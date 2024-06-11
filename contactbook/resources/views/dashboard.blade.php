<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #e0f7fa;
        }
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
            background-color: #00796b;
            color: white;
        }
        .header h1 {
            margin: 0;
            display: flex;
            align-items: center;
        }
        .header h1 img {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            margin-right: 10px;
        }
        .button-group {
            display: flex;
            gap: 10px;
        }
        .button-group button {
            padding: 10px 20px;
            background-color: white;
            border: none;
            border-radius: 5px;
            color: #00796b;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s, color 0.3s;
        }
        .button-group button a {
            text-decoration: none;
            color: #00796b;
        }
        .button-group button:hover {
            background-color: #004d40;
            color: white;
        }
        .button-group button:hover a {
            color: white;       
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>
            <img src="{{ asset('image/'.$user->image) }}" alt="User Image">
            Welcome, {{ $user->name }}
        </h1>
        <div class="button-group">
            <button><a href="{{url('adddata')}}">Add Data</a></button>
            <button>View Data</button>
            <button>Update</button>
            <button><a href="{{url('logout')}}">Logout</a></button>
        </div>
    </div>
</body>
</html>
