@props(['sort','status'])

<div>
    <section class="flex flex-row justify-end items-top">
        <div class="m-2">
            <a class="transition duration-300 ease-in-out font-bold text-red-600 hover:text-black focus:text-black" href="{{route('reports.index')}}">
                Сброс
            </a>
        </div>
        <div class="m-2">
            <span class="font-bold">Сортировка по дате создания: </span>
            <ul>
                <li>
                    <a class="transition duration-300 ease-in-out text-gray-600 hover:text-black focus:text-black" href="{{route('reports.index',['sort' => 'desc', 'status' => $status])}}">
                        Показать новые
                    </a>
                </li>
                <li>
                    <a class="transition duration-300 ease-in-out text-gray-600 hover:text-black focus:text-black" href="{{route('reports.index',['sort' => 'asc', 'status' => $status])}}">
                        Показать старые
                    </a>
                </li>
            </ul>
        </div>
        <div class="m-2">
            <p class="font-bold">Фильтрация по статусу заявки:</p>
            <ul>
                @foreach ($statuses as $status)
                <li>
                    <a class="transition duration-300 ease-in-out text-gray-600 hover:text-black focus:text-black" href="{{route('reports.index',['sort' => $sort, 'status' => $status->id])}}">
                        {{$status->name}}
                    </a>
                </li>
                @endforeach
            </ul>
        </div>
    </section>
</div>