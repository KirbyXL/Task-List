
@extends('layouts.baselook')
@section('content')


<div class="bg-white shadow rounded-lg overflow-hidden">
    <table class="w-full border-collapse">
        <thead class="bg-gray-200">
            <tr>
                <th class="px-4 py-3 text-left">#</th>
                <th class="px-4 py-3 text-left">To-Do Item</th>
                <th class="px-4 py-3 text-left">Description</th>
                <th class="px-4 py-3 text-center">Completed</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($tasks as $index => $task)
                <tr class="border-t">
                    <td class="px-4 py-3">{{ $index + 1 }}</td>

                    <td class="px-4 py-3 hover:text-red-700">
                        {{ $task->title }}
                    </td>

                    <td class="px-4 py-3 text-gray-600 hover:text-red-700">
                        {{ $task->description ?? '...' }}
                    </td>


                    <!-- style="display: flex; align-items: center; gap: 10px;" -->

                    <td class="px-4 py-3 text-center">
                        <div class="flex justify-center gap-3">
                            @if ($task->is_completed)
                                <form action="/tasks/{{ $task->id }}/undo" method="post">
                                    @csrf
                                    <button class="text-green-600 text-xl">✔</button>
                                </form>
                            @else
                                <form action="/tasks/{{ $task->id }}/complete" method="post">
                                    @csrf
                                    <button class="text-gray-400 text-xl">☐</button>
                                </form>
                            @endif
                            <form action="{{ route('tasks.destroy', $task->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="text-black-500 ">❌</button>                
                            </form>                        
                        
                        </div>

                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>


    
@endsection
