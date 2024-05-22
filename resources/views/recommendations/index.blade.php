@extends('layouts.app')
@extends('layouts.nav_guest')


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recomendaciones para Dueños de Mascotas</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <style>
        .card {
            border: 1px solid #ddd;
            border-radius: 4px;
            margin: 20px;
            padding: 20px;
            text-align: center;
            max-width: 300px;
        }
        .card img {
            max-width: 100%;
            height: auto;
            border-radius: 4px;
        }
        .card-title {
            font-size: 1.5em;
            margin: 10px 0;
        }
        .card-description {
            font-size: 1em;
            color: #555;
        }
        .cards-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Recomendaciones para Dueños de Mascotas</h1>
        <div class="cards-container">
            @foreach ($recommendations as $recommendation)
                <div class="card">
                    <img src="{{ asset($recommendation->image) }}" alt="{{ $recommendation->title }}">
                    <div class="card-title">{{ $recommendation->title }}</div>
                    <div class="card-description">{{ $recommendation->description }}</div>
                </div>
            @endforeach
        </div>
    </div>
    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
