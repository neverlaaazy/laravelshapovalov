<x-app-layout>
    <div class="bg-bacK dark:bg-gray-700">
        <section class="flex items-center 
                justify-center">
            <form class="max-w-md mx-auto p-8 text-black dark:text-white bg-white dark:bg-gray-800 rounded-2xl shadow-xl border border-secondary/50 flex flex-col gap-6" action="{{route('reports.store')}}" action="{{route('report.update', $report->id)}}" method="POST">
                @csrf
                @method('put')
                <input class="w-full px-4 py-3 rounded-xl outline-none transition-all placeholder:text-gray-300" type="text" step="any" name="number" id="price" placeholder="Номер" value="{{$report->number}}" required><br>

                <textarea class="w-full px-4 py-3 rounded-xl outline-none transition-all resize-none placeholder:text-gray-300" name="description" id="description" placeholder="Описание" required>{{$report->description}}</textarea><br>

                <input class="w-full py-4 bg-primary text-black dark:text-white font-bold rounded-xl shadow-lg shadow-primary/30 
           transition-all duration-300 hover:bg-bacK dark:hover:bg-gray-400  hover:-translate-y-1 active:scale-95" type="submit" value="Обновить">
            </form>
        </section>
    </div>
</x-app-layout>