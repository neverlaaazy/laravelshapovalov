@props(['sort','status'])

<div>
    <section>
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
                    <li>
                        <a href="{{route('reports.index')}}">
                            Сброс
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
        </section>
</div>