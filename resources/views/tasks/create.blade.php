
@extends('layouts.baselook')
@section('content')


@if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

<h1 class="text-xl font-semibold mb-6">
    Create Tasks
</h1>

<form action="/tasks" method="post">
    @csrf
    <div class="mb-4">
        <label class="block text-sm font-medium text-gray-700 mb-1">
            Title
        </label>

        <input type="text" name="title"
            class="w-full rounded border border-gray-300 px-3 py-2 focus:outline-none focus:ring focus:ring-blue-200"
            placeholder="Task title">
    </div>

    <div class="mb-6">
        <label class="block text-sm font-medium text-gray-700 mb-1">
            Description
        </label>

        <textarea name="description" rows="4"
            class="w-full rounded border border-gray-300 px-3 py-2 focus:outline-none focus:ring focus:ring-blue-200"
            placeholder="Optional description"
        ></textarea>
    </div>

    <div class="flex justify-end gap-3">
        <a href="{{ route('tasks.index') }}" class="rounded border border-gray-300 px-4 py-2 text-gray-700 hover:bg-gray-100">
            Cancel
        </a>

        <button type="submit" class="rounded bg-blue-600 px-4 py-2 text-white hover:bg-blue-700">
            Submit Task
        </button>
    </div>
</form>


@endsection