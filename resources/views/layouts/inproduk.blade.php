<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
</head>
<body>
    <main>
        <section>
            <div>
                <h1>Atas</h1>
            </div>
        </section>

        @yield('content')
    </main>
</body>
</html>
