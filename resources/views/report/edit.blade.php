<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>На главную</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <header>
        <a href="{{ route('report.index') }}">К заявлениям</a>
    </header>
    <main>
        <form action="{{route('report.update', $report->id)}}" method="POST">
            @csrf
            @method('put')
            <input type="number" step="any" name="number" id="price" placeholder="Номер" value="{{$report->number}}" required>{{$report->description}}<br>

            <textarea name="description" id="description" placeholder="Описание" required></textarea><br>

            <input type="submit" value="Обновить">
        </form>
    </main>
    <footer>

    </footer>
</body>
</html>