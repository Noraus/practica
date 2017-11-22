<html>
    <head>
        @include('fijas.head')

    </head>
    <body>
    <!--Pantalla principal-->
        <header>
            @yield('principal')
        </header>
        <!--Navegador-->
        <div id="nav">
            @include('fijas.navbar')
        </div>
        <!--Contenido-->
        <section>
            @yield('section')
        </section>
        <!--Footer-->
        <footer class="footer-distributed">
            @include('fijas.footer')
        </footer>
    </body>
</html>