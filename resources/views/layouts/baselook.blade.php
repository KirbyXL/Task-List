
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.jsx'])
</head>
<body class="bg-gray-100 min-h-screen">

    <nav class="bg-white shadow mb-8">
        <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between">
            <div class="font-semibold"><a href="/dashboard">Tasks List</a></div>

            <div class="space-x-4">
                <a href="/dashboard" class="text-gray-700 hover:text-black">Dashboard</a>
                <a href="/tasks" class="text-gray-700 hover:text-black">Tasks</a>
                <a href="/tasks/create" class="text-gray-700 hover:text-black">Create Task</a>
            </div>
        </div>
    </nav>

    <main class="max-w-7xl mx-auto px-6">
        @yield('content')
    </main>

</body>
</html>
