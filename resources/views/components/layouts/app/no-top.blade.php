<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('partials.head')
</head>

<body class="min-h-screen bg-neutral-100 antialiased dark:bg-linear-to-b dark:from-neutral-950 dark:to-neutral-900">
    <div>
        <x-app-header />
    </div>
    <main>
        {{ $slot }}
    </main>

    <x-app-footer />

    @fluxScripts
</body>

</html>
