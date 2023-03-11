<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])


</head>

<body class="font-sans antialiased">
    <x-banner />

    <div class="min-h-screen bg-gray-100">
        @livewire('navigation-menu')



        <!-- Page Content -->
        <main>
            <aside class=" cshadow bg-light  p-4  d-flex flex-column position-absolute " style="width: 300px; height: 100vh; top:65px;">
                <div class="d-flex flex-column">
                    <div class="{{ request()->routeIs('dashboard') ?  'bg-primary text-white sidebar-item px-3 py-2 my-2 rounded mx-2' : 'sidebar-item px-3 py-2 my-2 rounded mx-2'}}  "></i> <a class="" href="{{ route('dashboard') }}"><i class="bi bi-person-circle mx-2"></i>Dashboard</a></div>
                    <div class="{{ request()->routeIs('admin') ?  'bg-primary text-white sidebar-item px-3 py-2 my-2 rounded mx-2' : 'sidebar-item px-3 py-2 my-2 rounded mx-2'}}  "></i> <a class="" href="{{ route('admin') }}"><i class="bi bi-person-circle mx-2"></i>Admin</a></div>
                    <div class="{{ request()->routeIs('posts.index') ?  'bg-primary text-white sidebar-item px-3 py-2 my-2 rounded mx-2' : 'sidebar-item px-3 py-2 my-2 rounded mx-2'}}  "><i class="bi bi-pencil-square mx-2"></i>
                        <a class="" href="{{ route('posts.index') }}">Add New</a>
                    </div>
                    <div class="sidebar-item px-3 py-2 my-2 rounded mx-2 "> <i class="bi bi-person-vcard px-2"></i>Roles</div>
                    <div class="sidebar-item px-3 py-2 my-2 rounded mx-2 "><i class="bi bi-person-video2 px-2"></i>Permitions</div>
                </div>
            </aside>
            @yield('content')


        </main>

    </div>

    @stack('modals')

    @livewireScripts
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>