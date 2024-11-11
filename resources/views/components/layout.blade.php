<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME')}}</title>
    @vite(["resources/css/app.css", 'resources/js/app.js'])
</head>
<body class="bg-amber-50 text-slate-900">
    <header class="bg-cyan-800 shadow-lg text-slate-50">
    <nav class="p-5 max-w-screen-lg mx-auto flex items-center justify-between">
        <a href="{{ route('home')}}" class = 'nav-link'>Home</a>

        <div class="menu-bar">
            <a href="{{ route('register')}}" class = 'nav-link'>Sign up</a>
            <a href="{{ route('login')}}" class = 'nav-link'>Login</a>
        </div>
        
    </nav>
</header>
<main class="py-0 px-0 mx-auto max-w-screen-lg">
    {{ $slot }}
</main>
</body>
</html>