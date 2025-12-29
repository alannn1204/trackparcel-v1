<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Parcel Tracker</title>
    @vite('resources/css/app.css')
    @livewireStyles
</head>
<body class="min-h-screen bg-gray-100 flex flex-col">

    <!-- Header -->
    <header class="bg-blue-600 text-white py-6">
        <div class="container mx-auto text-center">
            <h1 class="text-3xl font-bold">Parcel Tracker</h1>
        </div>
    </header>

    <!-- Main content -->
    <main class="flex-1 container mx-auto px-4 py-10">
        {{ $slot }}
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-4 text-center">
        &copy; {{ date('Y') }} Parcel Tracker
    </footer>

    @livewireScripts
</body>
</html>
