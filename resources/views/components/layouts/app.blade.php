<!DOCTYPE html>
<html lang="ar" dir="rtl" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? '' }}</title>
    @vite(['resources/css/app.scss','resources/js/app.js'])
</head>

<body>
    <livewire:toasts />
    <!-- Sidebar -->
    <x-layouts.sidebar />
    <!-- Main Content -->
    <main class="content">
        <section>
            {{ $slot }}
        </section>
    </main>
    @livewireScripts

</body>

</html>