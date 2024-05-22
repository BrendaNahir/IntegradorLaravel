<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap' rel='stylesheet'>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
            color: #333;
        }

        header {
            width: 100%;
            background-color: #2B88F3;
            padding: 40px 0;
            text-align: center;
            color: white;
        }

        header p {
            font-size: 24px;
            margin: 0;
        }

        .content {
            margin: 30px;
            background-color: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .content p {
            font-size: 16px;
            line-height: 1.5;
        }

        .content a {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #2B88F3;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .content a:hover {
            background-color: #1a5bbf;
        }

        footer {
            width: 100%;
            background-color: #2B88F3;
            padding: 20px 0;
            text-align: center;
            color: white;
            margin-top: 40px;
        }

        footer p {
            margin: 0;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <header>
        <p>Mascotelandia</p>
    </header>

    <div class="content">
        <p>Hola {{ $user->username }}, vamos a proceder a resetear su password.</p>
        <a href="{{ route('password.reset', ['token' => $token]) }}">Reset Password</a>
    </div>

    <footer>
        <p>Mascotelandia</p>
    </footer>
</body>
</html>
