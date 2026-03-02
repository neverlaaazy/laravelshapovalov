<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <header>

    </header>
    <main>
        <!-- (номер автомобиля, описание и дату создания) -->
        @foreach ($reports as $item)
            <div class="item">
                <h2>{{$item['carnumber']}}</h2>
                <p>{{$item['description']}}</p>
                <p>{{$item['creationdate']}}</p>
            </div>
        @endforeach
    </main>
    <footer>

    </footer>
</body>
</html>