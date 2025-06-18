<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('partials.head')
</head>

<body
    class="min-h-screen bg-neutral-50 antialiased dark:bg-linear-to-b dark:from-neutral-950 dark:to-neutral-900 max-w-screen overflow-x-hidden">
    <div class="fixed top-0 w-full max-w-screen z-99">
        <x-app-top />
        <x-app-header />
    </div>

    <main>
        {{ $slot }}
    </main>

    <x-app-footer />

    @fluxScripts
</body>

</html>
