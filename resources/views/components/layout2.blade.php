<!DOCTYPE html>
<html lang="en" class="h-full bg-amber-50">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <script src="http://cdn.tailwindcss.com"></script>
    <script src="js/dropdown.js"></script>
</head>

<body class="h-full text-slate-900">
    <div class="h-full w-full">
        <nav class="bg-cyan-800 shadow-lg text-slate-50">
            <div class="w-[90%] px-4 sm:px-6 lg:px-8">

                <div class="flex h-16 items-center justify-between ml-5">
                    <div class="flex items-center">
                        <div class="ml-12 flex items-center">
                            <img class="h-24 w-24 mt-5" src="images/logo.png" alt="Your Company">
                        </div>

                        <div class="hidden md:block">
                            <div class="ml-10 flex items-baseline space-x-4 mt-10 ">
                                <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
                                <p class="pl-10">Bid Right, Win the Night!</p>
                            </div>
                        </div>
                    </div>
                    <div class="hidden md:block">
                        <div class="mt-[40%] ml-4 flex items-center md:ml-6">
                            <button type="button"
                                class="relative rounded-full bg-cyan-800 p-3 text-slate-50 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-cyan-800">
                                <span class="absolute -inset-0"></span>
                                <svg class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                    stroke="currentColor" aria-hidden="true" data-slot="icon">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0" />
                                </svg>
                            </button>

                            <div class="relative ml-3">
                                <div>
                                    <button type="button"
                                        class="relative flex max-w-xs items-center rounded-full bg-cyan-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800"
                                        id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                                        <span class="absolute -inset-0"></span>
                                        <span class="sr-only">Open user menu</span>
                                        <img class="h-8 w-8 rounded-full" src="" alt="">
                                    </button>
                                </div>

                                <div id="user-menu"
                                    class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none hidden"
                                    role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button"
                                    tabindex="-1">
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem"
                                        tabindex="-1" id="user-menu-item-0">Your Profile</a>
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem"
                                        tabindex="-1" id="user-menu-item-1">Settings</a>
                                    <a href="/" class="block px-4 py-2 text-sm text-gray-700" role="menuitem"
                                        tabindex="-1" id="user-menu-item-2">Sign out</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

        <header class="bg-cyan-800 shadow-lg w-full">
            <div class="mx-auto max-w-screen-lg px-4 py-6 sm:px-6 lg:px-8 text-slate-50">
            </div>
        </header>

        <main class="py-0 px-0 mx-auto max-w-screen-lg w-full">
            <div class="px-4 py-6 sm:px-6 lg:px-8">
                {{ $slot }}
            </div>
        </main>
</body>

</html>
