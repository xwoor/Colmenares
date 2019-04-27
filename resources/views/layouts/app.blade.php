<html>
    <head>
        <title>App Name - @yield('title')</title>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
         <!-- Font Awesome Icons -->
        <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    </head>
    <body id="page-top">

         <!-- ----------------------
            Nav
            --------------------  -->
            <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top py-3" id="mainNav">
                    <div class="container">
                      <a class="navbar-brand js-scroll-trigger" href="/">Start Bootstrap</a>
                      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                      <div class="collapse navbar-collapse" id="navbarResponsive">
                            <ul class="navbar-nav ml-auto my-2 my-lg-0">
                                    <li class="nav-item">
                                      <a class="nav-link js-scroll-trigger {{ Request::is('/') ? 'active' : ''}}" href="/">Index</a>
                                    </li>
                                    <li class="nav-item">
                                      <a class="nav-link js-scroll-trigger {{ Request::is( 'pagina1') ? 'active' : 'pagina1' }}" href="/pagina1">pagina1</a>
                                    </li>
                                    <li class="nav-item">
                                      <a class="nav-link js-scroll-trigger {{ Request::is( 'pagina2') ? 'active' : '' }}" href="/pagina2">pagina2</a>
                                    </li>
                                    <li class="nav-item">
                                      <a class="nav-link js-scroll-trigger {{ Request::is( 'pagina3') ? 'active' : '' }}" href="/pagina3">pagina3</a>
                                    </li>
                                    <li class="nav-item">
                                          <a class="nav-link js-scroll-trigger {{ Request::is( 'pagina4') ? 'active' : '' }}" href="/pagina4">pagina4</a>
                                    </li>
                                  </ul>
                      </div>
                    </div>
                  </nav>
                

        <! ----------------------
            Fin Nav
            -------------------- -->           
            @yield('content')

         <!-- ----------------------
            Footer
            -------------------- -->
            <footer class="bg-light py-5">
                <div class="container">
                <div class="small text-center text-muted">Copyright &copy; 2019 - Mario Osorio</div>
                </div>
            </footer>
         <!-- ----------------------
            Fin Footer
            -------------------- -->


                
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>