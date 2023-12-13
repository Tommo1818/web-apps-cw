<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Player Explorer - @yield('title')</title>

        <!-- Styles -->
        <style>
        .button {
            background-color: #4a6283;
            border: 1px solid white;
            color: white;
            padding: 0px 2px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 14px;
            margin: 0px 0px;
            cursor: pointer;
        }
        main {
            margin-left: 60px;
            margin-top: 40px;
            margin-right: 1000px;
        }
        body {
            font-family: "Lato", sans-serif;
            color: white;
        }
        .small-title {
            font-size: 2em;
        }
        .large-title {
            font-size: 3em;
        }
        .left-align {
            text-align: left;
        }
        .right-align {
            text-align: right;
        }
        .center-align {
            text-align: center;
        }
        .input-text {
            color: black;
        }
        </style>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white dark:bg-gray-800 shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                @if ($errors->any())
                    <div style="color: #FF9393;">
                        Errors:
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div>
                @yield('content')
                </div>
            </main>

        </div>
    </body>
</html>