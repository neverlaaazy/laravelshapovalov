@props(['sort','status'])

<div>
    <section class="flex flex-col md:flex-row justify-end items-top">
        <div class="m-2">
            <a class="btnReset btnFilter" href="{{route('reports.index')}}">
                Сброс
            </a>
        </div>
        <div class="m-2">
            <span class="font-bold">Сортировка по дате создания: </span>
            <ul>
                <li class="li-btnFilter">
                    <a class="btnFilter" href="{{route('reports.index',['sort' => 'desc', 'status' => $status])}}">
                        Показать новые
                    </a>
                </li>
                <li class="li-btnFilter">
                    <a class="btnFilter" href="{{route('reports.index',['sort' => 'asc', 'status' => $status])}}">
                        Показать старые
                    </a>
                </li>
            </ul>
        </div>
        <div class="m-2">
            <p class="font-bold">Фильтрация по статусу заявки:</p>
            <ul>
                @foreach ($statuses as $status)
                <li class="li-btnFilter">
                    <a class="btnFilter" href="{{route('reports.index',['sort' => $sort, 'status' => $status->id])}}">
                        {{$status->name}}
                    </a>
                </li>
                @endforeach
            </ul>
        </div>
    </section>
</div>