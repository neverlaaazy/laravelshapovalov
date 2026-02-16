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
        <section class="sectionmain">
            <img class="sfmimg" src="{{Vite::asset('resources/images/sfm.jpg')}}" alt="">
            <div class="bg-main text-accent dark:bg-accent dark:text-main border-brand-950 text-32">
                <p>Пример</p>
            </div>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit praesentium ab unde ex dolorum odio libero tenetur fuga accusamus aspernatur at beatae blanditiis, nihil saepe aliquid eos natus. Illo, adipisci.
        </section>
    </main>
    <footer>
        <section>
            <p>&#169;Шаповалов Сергей Александрович, 2026г.</p>
        </section>
    </footer>
</body>

</html>