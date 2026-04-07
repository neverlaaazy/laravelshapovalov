@props(['sort','status'])

<div>
    <section class="flex flex-row justify-left items-top">
        <div class="m-2">
            <a href="{{route('reports.index')}}">
                Сброс
            </a>
        </div>
        <div class="m-2">
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
        <div class="m-2">
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
    </section>
</div>