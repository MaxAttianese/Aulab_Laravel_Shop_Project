<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$namePage}}</title>

    @vite(["resources/css/app.css", "resources/js/app.js"])
    
</head>
<body class="d-flex flex-column min-vh-100">

    <header>
        <x-navbar/>
    </header>

    <main>
        {{$slot}} 
    </main>

    <footer class="mt-auto pt-5">
        <x-footer/>
    </footer>
</body>
</html>