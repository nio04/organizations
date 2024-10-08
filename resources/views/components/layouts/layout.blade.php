<!doctype html>
<html lang="en" class="dark">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
        content="Get started with a free and open-source admin dashboard layout built with Tailwind CSS and Flowbite featuring charts, widgets, CRUD layouts, authentication pages, and more">
    <meta name="author" content="Themesberg">
    <meta name="generator" content="Hugo 0.135.0">

    <title>Organizations Admin Dashboard</title>


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">

    @vite(["resources/css/template.css","resources/css/app.css", "resources/css/style.css", "resources/js/app.js"])

    <link rel="apple-touch-icon" sizes="180x180"
        href="{{ Vite::asset('resources/icons/favicons/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32"
        href="{{ Vite::asset('resources/icons/favicons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16"
        href="{{ Vite::asset('resources/icons/favicons/favicon-16x16.png') }}">
    <link rel="icon" type="image/x-icon" href="{{ Vite::asset('resources/icons/favicons/favicon.ico') }}">
    <link rel="manifest" href="{{ Vite::asset('resources/icons/favicons/site.webmanifest') }}">
    <link rel="mask-icon" href="{{ Vite::asset('resources/icons/favicons/safari-pinned-tab.svg') }}" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">


    <script>
        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
        document.documentElement.classList.add('dark');
    } else {
        document.documentElement.classList.remove('dark')
    }
    </script>
</head>

<body
    {{ $attributes->merge(["class"=>"bg-gray-50 dark:bg-gray-800 overflow-hidden" . ($bodyOverflowHidden === "true" ? " overflow-hidden":"")])}}
    class="">

    {{ $slot }}


</body>

</html>
