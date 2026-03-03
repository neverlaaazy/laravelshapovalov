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
        <a href="{{ route('report.create') }}">Создать заявление</a>
    </header>
    <main>
        <!-- (номер автомобиля, описание и дату создания) -->
        @foreach ($reports as $item)
            <div class="item">
                <h2>{{$item->number}}</h2>
                <p>{{$item->description}}</p>
                <p>{{$item->created_at}}</p>
                <a href="{{ route('report.edit',['report'=>$item]) }}">Редактировать</a>
                <form method="POST" action="{{route('reports.destroy',$item->id)}}">
                    @method('delete')
                    @csrf
                    <input type="submit" value="Удалить">
                </form>
            </div>
        @endforeach
    </main>
    <footer>

    </footer>
</body>
</html>