<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <header class="bg-headeR dark:bg-gray-900">
        <section class="flex items-center justify-between min-h-[120px]">
            <h1 class="text-2xl text-blue-800 dark:text-white">НАРУШЕНИЙ.НЕТ</h1>
            <div>
                <span>Сортировка по дате создания: </span>
                <ul>
                    <li>
                        <a href="{{route('reports.index',['sort' => 'desc', 'status' => $status])}}">
                            Показать новые
                        </a>
                    </li>
                    <li>
                        <a href="{{route('reports.index',['sort' => 'asc', 'status' => $status])}}">
                            Показать старые
                        </a>
                    </li>
                </ul>
            </div>
            <div>
                <p>Фильтрация по статусу заявки</p>
                <ul>
                    @foreach ($statuses as $status)
                        <li>
                            <a href="{{route('reports.index',['sort' => $sort, 'status' => $status->id])}}">
                                {{$status->name}}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
                <a class="
                text-black 
                transition-colors 
                duration-300
                dark:text-white 
                hover:text-bacK"
                    href="{{ route('report.create') }}">Создать заявление</a>
        </section>
    </header>
    <main class="bg-bacK dark:bg-gray-700">
        <section class="grid grid-cols-1 md:grid-cols-3 gap-5 ">
            <!-- (номер автомобиля, описание и дату создания) -->
            @foreach ($reports as $item)
            <div class="
                flex 
                items-center 
                justify-center
                flex-col
                border-2 
                text-black
                border-headeR 
                bg-headeR
                dark:bg-gray-500
                dark:text-white 
                rounded-xl
            ">
                <h2>{{$item->number}}</h2>
                <p>{{$item->description}}</p>
                <p>{{$item->created_at}}</p>
                <p class="font-bold">{{$item->status->name}}</p>
                <div class="
                    flex
                    items-center
                ">
                    <a class="
                        text-blue-800 
                        transition-colors 
                        duration-300 
                        hover:text-black"
                        href="{{ route('report.edit',['report'=>$item]) }}">Изменить</a>
                    
                    <form method="POST" action="{{route('reports.destroy',$item->id)}}">
                        @method('delete')
                        @csrf
                        <input class="
                        text-red-800 
                        transition-colors 
                        duration-300 
                        hover:text-black" type="submit" value="Удалить">
                    </form>
                </div>
            </div>
            @endforeach
        </section>
        <section>{{$reports->appends(request()->query())->links()}}</section>
    </main>
    <footer class="bg-footeR dark:bg-gray-900">
        <section>

        </section>
    </footer>
</body>

</html>