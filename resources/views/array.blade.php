<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
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
        <section class="sectionmain sectionitems">
            @foreach($array as $item)
                <div class="item">
                    <img class="item-img" src="{{Vite::asset('resources/images/'.$item['path'])}}" alt="{{$item['title']}}">
                    <h3>{{$item['title']}}</h3>
                    <p>{{$item['price']}} &#8381;</p>
                </div>
            @endforeach
        </section>
    </main>
    <footer>
        <section>
            <p>&#169;Шаповалов Сергей Александрович, 2026г.</p>
        </section>
    </footer>
</body>

</html>