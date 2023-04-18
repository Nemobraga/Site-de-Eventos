<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>
        <!-- FONTE DO GOOGLE-->
        <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">

        <!--CSS BOOTSTRAP-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <!--CSS DA APLICAÇÃO-->
        
        <link rel="stylesheet" href="/css/styles.css">
        <script src="/js/scripts.js"></script>      
    </head>
    <body>
        @yield('content')
        <footer>
            <p>HDC Events &copy; 2023</p>
        </footer>
    </body>
</html> 