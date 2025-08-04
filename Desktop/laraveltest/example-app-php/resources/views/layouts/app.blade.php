<!DOCTYPE html>
<html>
<head>

    <title>
        Laravel 10 task list App
    </title>
    @yield('styles')
</head>
<body>
    <h1>
    @yield('title')
    <div>
        @if (session()->has('success'))

        <div>{{session('success')}}</div>

        @endif
    </div>
    </h1>
    <div>
    @yield('content')

    </div>
</body>


</html>
