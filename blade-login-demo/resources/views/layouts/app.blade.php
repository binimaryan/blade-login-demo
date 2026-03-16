<!DOCTYPE html>
<html>
<head>
    <title>Blade Login Demo</title>

    <style>
        body{
            font-family: Arial, sans-serif;
            background: #ffeef5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container{
            background: white;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            width: 350px;
            text-align: center;
        }

        h2{
            color: #d63384;
            margin-bottom: 20px;
        }

        input{
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 6px;
        }

        button{
            width: 100%;
            padding: 10px;
            background: #ff7aa2;
            border: none;
            color: white;
            border-radius: 6px;
            font-weight: bold;
            cursor: pointer;
        }

        button:hover{
            background: #ff5c8d;
        }

        .alert{
            background: #ffd6e5;
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 6px;
            color: #b30059;
        }

        nav{
            margin-bottom: 20px;
        }

        nav a{
            text-decoration: none;
            color: #d63384;
            font-weight: bold;
        }

    </style>
</head>

<body>

<div class="container">

@include('partials.navbar')

@yield('content')

</div>

</body>
</html>