<html lang="es">
    <head>

        <title>Colmenares - @yield('title')</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="{{asset('css/estilos.css')}} ">
        <link rel="stylesheet" href="{{asset('css/animate.css')}} ">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
        <script src="{{asset('js/wow.js')}}"></script>
        <script>
        new WOW().init();
        </script>
    </head>
    <body>
      <!-- ----------------------
        Nav
        --------------------  -->
      
        <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
          <a class="navbar-brand wow fadeInLeft" href="/">
            <img height="50px" src="{{asset('img/logo.png')}}" alt="">
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto my-2 my-lg-0">
              <li class="nav-item wow fadeInDown" data-wow-delay=".3s">
                <a class="nav-link js-scroll-trigger {{ Request::is('/') ? 'active' : ''}}" href="/">Inicio</a>
              </li>
              <li class="nav-item wow fadeInDown" data-wow-delay=".4s">
                <a class="nav-link js-scroll-trigger {{ Request::is( 'quienes-somos') ? 'active' : '' }}" href="/quienes-somos">Quienes Somos</a>
              </li>
              <li class="nav-item wow fadeInDown" data-wow-delay=".5s">
                <a class="nav-link js-scroll-trigger {{ Request::is( 'servicios') ? 'active' : 'servicios' }}" href="/servicios">servicios</a>
              </li>
              <li class="nav-item wow fadeInDown" data-wow-delay=".6s">
                <a class="nav-link js-scroll-trigger {{ Request::is( 'publicaciones') ? 'active' : '' }}" href="/publicaciones">publicaciones</a>
              </li>
              <li class="nav-item wow fadeInDown" data-wow-delay=".7s">
                    <a class="nav-link js-scroll-trigger {{ Request::is( 'contacto') ? 'active' : '' }}" href="/contacto">contacto</a>
              </li>
            </ul>
          </div>
        </nav>            
      <!-- ----------------------
        Fin Nav
        -------------------- -->           
        
            @yield('content')

          <!-- ----------------------
            Footer
            -------------------- -->
            <footer class="bg-primary p-3 ">
              <div class="container">
                <p class="txt-white"> Siguenos en: 

                  <a  target="blank" href="https://twitter.com/ColmenaresGroup">
                    <img width="30px" src="{{asset('img/icono_tw.png')}}" alt=""> 
                  </a>
                  <a  target="blank" href="https://www.facebook.com/colmenaresgroupsa/">
                    <img width="30px" src="{{asset('img/icono_fb.png')}}" alt=""> 
                  </a>
                  <a  target="blank" href="https://www.instagram.com/colmenaresgroup/">
                    <img width="30px" src="{{asset('img/icono_ig.png')}}" alt=""> 
                  </a>
                  <a  target="blank" href="https://www.linkedin.com/groups/4228575/">
                      <img width="30px" src="{{asset('img/icono_in.png')}}" alt=""> 
                  </a>

                 

                    </p>
                <div class="small text-center text-muted txt-white">Copyright &copy; 2019 - Colmenares Group</div>
                </div>
            </footer>
          <!-- ----------------------
            Fin Footer
            -------------------- -->
  
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
            <script src="{{asset('vendor/ckeditor/ckeditor.js')}}"></script>

    </body>
</html>