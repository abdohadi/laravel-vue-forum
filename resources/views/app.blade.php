<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    
    <body>
        <div id="app">
            {{-- @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif --}}

            <app>
                <template v-slot:header v-if="$route.name != 'not-found'">
                    <header-component></header-component>
                </template>

                <template v-slot:default>
                    <router-view></router-view>
                </template>

                <template v-slot:footer v-if="$route.name != 'not-found'">
                    <footer-component></footer-component>
                </template>
            </app>
        </div>
    </body>

    @php
    $routeCollection = Route::getRoutes();
    $allRoutes = [];
    foreach ($routeCollection as $value) {
        $allRoutes[$value->getName()] = $value->uri();
    }
    @endphp

    <script>
        window.allRoutes = <?php echo json_encode($allRoutes); ?>;

        window.getRoute = function(name, params = null) {      // getRoute('posts.users', { post: 1, user: 2 })
            var uri = allRoutes[name];

            if (params) {
                for (const [param, value] of Object.entries(params)) {
                    uri = uri.replace(`{${param}}`, value);
                }
            }
            
            return `/${uri}`;
        }
    </script>

    <script src="{{ asset('js/app.js') }}"></script>
</html>
