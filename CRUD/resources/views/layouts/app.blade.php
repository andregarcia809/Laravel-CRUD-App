<html>
    <head>
        <title> @yield('title')</title>
        <link rel="stylesheet" type="text/css" href="./css/app.css">
    </head>
    <body>
    <header>
         <nav>
            <a href="#">Home</a>
            <a href="#">About</a>
            <a href="#"Search></a>
            <a href="#">Contact</a>
        </nav>
    </header>
        @section('sidebar')
            This is the master sidebar.
        @show

        <div class="container">
            @yield('content')
        </div>
    </body>
</html>