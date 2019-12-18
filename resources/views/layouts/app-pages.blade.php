<html lang="es">
    <head>

        <title>Colmenares - @yield('title')</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="Colmenares Group es una firma dedicada al desarrollo de las industrias creativas y culturales en Colombia. Desde el año 2003 hemos acompañado diversos proyectos del sector del Entretenimiento en diferentes áreas como son: management 360, booking, asesoría legal y financiera.">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        {{-- <link href="{{asset('plugins/colorbox/colorbox.css"')}}"  rel="stylesheet" type="text/css"> --}}
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="{{asset('styles/main_styles.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('styles/responsive.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/animate.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/estilos.css')}}">
  <script src="js/wow.js"></script>
  <script>
    new WOW().init();
  </script>
    <body>
      <!-- ----------------------
        Nav
        --------------------  -->
        {{-- MENU --}}
	<header class="header">
      <div class="header_content d-flex flex-row align-items-center justify-content-start wow slideInDown">
          <div class=""><a href="/"><img height="60px" src="{{asset('img/logo.png') }}" alt=""></a></div>
        <div class=""><a href="/" > </a></div>
        <div class="ml-auto d-flex flex-row align-items-center justify-content-start">
          <nav class="main_nav">
            <ul class="d-flex flex-row align-items-start justify-content-start">
              <li class="{{ Request::is('/') ? 'active' : ''}}">
                <a href="/">INICIO</a>
              </li>
              <li class="{{ Request::is('quienes-somos') ? 'active' : ''}}">
                <a href="/quienes-somos">
                  quienes somos
                </a>
              </li>
              <li class="{{ Request::is('servicios') ? 'active' : ''}}">
                <a href="/servicios">
                  servicios
                </a>
              </li >
              <li class="{{ Request::is('publicaciones') ? 'active' : ''}}">
                <a href="/publicaciones">
                  publicaciones
                </a>
              </li>
              <li class="{{ Request::is('contacto') ? 'active' : ''}} mt4">
                <a href="/contacto">
                  CONTACTO
                </a>
              </li>
            </ul>
          </nav>
          <!-- Hamburger Menu -->
          <div class="hamburger">
            <i class="fas fa-bars" aria-hidden="true"></i></div>
        </div>
      </div>
    </header>
  {{-- FIN MENU --}}
  {{-- MENU MOVIL --}}
    <div class="menu trans_400 d-flex flex-column align-items-end justify-content-start ">
      <div class="menu_close"><i class="fas fa-times" aria-hidden="true"></i></div>
      <div class="menu_content">
        <nav class="menu_nav text-right">
          <ul>
            <li class="{{ Request::is('') ? 'active' : ''}} ">
              <a href="/" class="mt-4">inicio</a> <hr>
            </li>
            <li class="{{ Request::is('quienes-somos') ? 'active' : ''}}">
              <a href="/quienes-somos">
                quienes somos
              </a> <hr>
            </li>
            <li class="{{ Request::is('servicios') ? 'active' : ''}}">
              <a href="/servicios">
                servicios
              </a> <hr>
            </li >
            <li class="{{ Request::is('publicaciones') ? 'active' : ''}}">
              <a href="/publicaciones">
                publicaciones
              </a> <hr>
            </li>
            <li class="{{ Request::is('contacto') ? 'active' : ''}}">
              <a href="/contacto">
                CONTACTO
              </a> <hr>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  {{-- FIN MENU MOVIL --}}
        {{-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
          <a class="navbar-brand wow fadeInLeft " href="/">
            <img class="lg-br" src="{{asset('img/logo.png')}}" alt="">
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse"
           data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
        </nav>             --}}

        
      <!-- ----------------------
        Fin Nav
        -------------------- -->           
        
            @yield('content')

          <!-- ----------------------
            Footer
            -------------------- -->
            <footer class="bg-primary p-3">
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
            <script src="plugins/greensock/TweenMax.min.js"></script>
            <script src="plugins/greensock/TimelineMax.min.js"></script>
            <script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
            <script src="plugins/greensock/animation.gsap.min.js"></script>
            <script src="plugins/greensock/ScrollToPlugin.min.js"></script>
            <script src="plugins/easing/easing.js"></script>
            <script src="plugins/progressbar/progressbar.min.js"></script>
            <script src="plugins/colorbox/jquery.colorbox-min.js"></script>
            <script src="js/custom.js"></script>
            <script>
          

    </body>
</html>