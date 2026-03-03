<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Создать заявление</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <header class="bg-headeR dark:bg-gray-900">
        <section class="flex items-center justify-between min-h-[120px]">
            <h1 class="text-2xl text-blue-800 dark:text-white">НАРУШЕНИЙ.НЕТ</h3>
            <a class="
                text-black 
                transition-colors 
                duration-300
                dark:text-white 
                hover:text-bacK" href="{{ route('report.index') }}">К заявлениям</a>
        </section>
    </header>
    <main class="bg-bacK dark:bg-gray-700">
        <section class="flex items-center 
                justify-center">
            <form class="max-w-md mx-auto p-8 text-black dark:text-white bg-white dark:bg-gray-800 rounded-2xl shadow-xl border border-secondary/50 flex flex-col gap-6" action="{{route('reports.store')}}" method="POST">
                @csrf
                <input class="w-full px-4 py-3 rounded-xl outline-none transition-all placeholder:text-gray-300" type="text" step="any" name="number" id="price" placeholder="Номер" required><br>

                <textarea class="w-full px-4 py-3 rounded-xl outline-none transition-all resize-none placeholder:text-gray-300" name="description" id="description" placeholder="Описание" required></textarea><br>

                <input  class="w-full py-4 bg-primary text-black dark:text-white font-bold rounded-xl shadow-lg shadow-primary/30 
           transition-all duration-300 hover:bg-bacK dark:hover:bg-gray-400 hover:-translate-y-1 active:scale-95" type="submit" value="Создать">
            </form>
        </section>
    </main>
    <footer class="bg-footeR dark:bg-gray-900">
        <section>

        </section>
    </footer>
</body>

</html>