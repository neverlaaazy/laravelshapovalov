<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вторая страница</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <h2>вторая страничка</h2>
    <p>$a + $b = {{ $a + $b }}</p>
    <div class="container mx-auto">
        @for ($i = 0; $i < count($products); $i++)
            <p class="border-b-2">
                {{$products[$i]}}
            </p>
        @endfor

        @foreach($products as $product)
            <p class="border-b-2">
                {{$product}}
            </p>
        @endforeach
    </div>
</body>

</html>