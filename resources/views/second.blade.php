<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вторая страница</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <header>
        <section>
            <img class="logokrita" src="{{Vite::asset('resources/images/krita.png')}}" alt="">
            <div>
                <ul>
                    <li><a href="/home">Home</a></li>
                    <li><a href="/">Welcome</a></li>
                    <li><a href="/second">Second</a></li>
                    <li><a href="/array">Array</a></li>
                </ul>
            </div>
        </section>
    </header>
    <main>
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
    </main>
    <footer>
        <section>
            <p>&#169;Шаповалов Сергей Александрович, 2026г.</p>
        </section>
    </footer>
</body>

</html>