<x-app-layout>
    <div>
        <section>
            <h1>Административная панель</h1>
            <div>
                <div>
                    <div class="grid grid-cols-4 gap-4 w-full">
                        <p>ФИО</p>
                        <p>Текст заявления</p>
                        <p>Номер Авто</p>
                        <p>Статус</p>
                    </div>
                    @foreach ($reports as $item)
                    <div class="grid grid-cols-4 gap-4 w-full">
                        <div class="reportsTableNML">
                            <p>{{$item->user->name}} </p>
                            <p>{{$item->user->middlename}} </p>
                            <p>{{$item->user->lastname}} </p>
                        </div>
                        <div>
                            <p>{{$item->description}}</p>
                        </div>
                        <div>
                            <p>{{$item->number}}</p>
                        </div>
                        <div>
                            @if($item->status->name == 'новое')
                            <form class="status-form" action="{{route('reports.status.update', $item->id)}}" method="POST">
                                @method('patch')
                                @csrf
                                <select name="status_id" onchange="this.form.submit()">
                                    @foreach ($statuses as $status)
                                    <option value="{{$status->id}}" @selected($status->id == $item->status_id)>
                                        {{$status->name}}
                                    </option>
                                    @endforeach
                                </select>
                            </form>
                            @else
                            <span>{{$item->status->name}}</span>
                            @endif
                        </div>
                    </div>
                    @endforeach
                </div>

            </div>
        </section>
    </div>
</x-app-layout>