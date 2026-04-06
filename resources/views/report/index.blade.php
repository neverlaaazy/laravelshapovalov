<x-app-layout>
    <div class="bg-bacK dark:bg-gray-700">
        <x-filter :sort=$sort :status=$status>

        </x-filter>


        <section>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-5 ">
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
                <p>{{$item->user->name}} {{$item->user->middlename}} {{$item->user->lastname}}</p>
                <x-status :type="$item->status->id">
                    {{$item->status->name}}
                </x-status>
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
            </div>
        </section>
        <section>{{$reports->appends(request()->query())->links()}}</section>
    </div>
</x-app-layout>