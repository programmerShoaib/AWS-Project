<!DOCTYPE html>
<html>
<head>
    <title>Laravel CRUD</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen">

<nav class="bg-indigo-600 p-4 text-white">
    <div class="max-w-5xl mx-auto text-xl font-bold">
        Laravel CRUD Application
    </div>
</nav>

<div class="max-w-5xl mx-auto p-6">
    @if(session('success'))
        <div class="mb-4 bg-green-100 text-green-800 p-3 rounded">
            {{ session('success') }}
        </div>
    @endif

    @yield('content')
</div>

</body>
</html>
