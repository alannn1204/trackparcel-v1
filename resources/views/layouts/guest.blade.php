<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Track Parcel</title>

    @vite('resources/css/app.css')
    @livewireStyles
</head>
<body class="min-h-screen flex flex-col bg-gray-50 text-gray-800">

    {{-- Header --}}
    <header class="py-6 bg-white shadow-sm">
        <div class="flex justify-center">
            <a href="{{ url('/') }}">
                <img src="/track-logo.png" alt="Logo" class="h-8">
            </a>
        </div>
    </header>

    {{-- Content --}}
    <main class="flex-1 flex items-center justify-center px-4">
        {{ $slot }}
    </main>

    {{-- Footer --}}
    <footer class="py-4 text-center text-sm text-gray-500">
        © {{ date('Y') }} Track Parcel System
    </footer>

    @livewireScripts
</body>
</html>
