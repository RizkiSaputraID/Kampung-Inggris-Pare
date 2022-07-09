@include('dashboard.layouts.header')

<body>

    <div class="container-fluid">
    <div class="row">

        @include('dashboard.layouts.sidebar')
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            @yield('container')
        </main>

    </div>
    </div>
    
</body>
</html>
