@extends('layouts.app-pages')

@section('title', 'Contacto')


@section('content')
<section class="contact pt-100 pb-100" id="contact">
        <div class="container">
           <div class="row">
              <div class="col-xl-6 mx-auto text-center">
                 <div class="section-title mb-100 wow fadeInDown">
                    <img class="w-100" src="{{asset('img/logo.png')}}" alt="colmenares group">
                 </div>
              </div>
           </div>
           <div class="row text-center wow fadeInUp" data-wow-delay="0.8s">
                 <div class="col-md-8">
                     @if(session('mensaje'))
                     <div class="alert alert-success alert-dismissible fade show" role="alert">
                       <strong> {{ session('mensaje')}}
                       <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                       </button>
                     </div>
                  @endif
                    <form action="/mail" class="contact-form"  method="POST" >
                     @csrf
                       <div class="row">
                          <div class="col-xl-6">
                             <input type="text" name="nombre" placeholder="Nombre">
                          </div>
                          <div class="col-xl-6">
                             <input type="email" name="email" placeholder="Email">
                          </div>
                          <div class="col-xl-6">
                             <input type="text" name="asunto" placeholder="Asunto">
                          </div>
                          <div class="col-xl-6">
                             <input type="text" name="telefono" placeholder="Teléfono">
                          </div>
                          <div class="col-xl-12">
                             <textarea placeholder="Mensaje" name="mensaje" cols="30" rows="10"></textarea>
                             <input type="submit" value="Enviar">
                          </div>
                       </div>
                    </form>
                 </div>
                 <div class="col-md-4">
                    <div class="single-contact">
                       <i class="fa fa-map-marker"></i>
                       <h5>Dirección</h5>
                       <p>Bogotá, Colombia <br> Calle 85 # 14-16 </p>
                    </div>
                    <div class="single-contact">
                       <i class="fa fa-phone"></i>
                       <h5>Teléfono</h5>
                       <p>+57 (1) 7039367</p>
                    </div>
                    <div class="single-contact">
                       <i class="fa fa-envelope"></i>
                       <h5>Email</h5>
                       <p>contacto@colmenares.biz</p>
                    </div>
                 </div>
           </div>
           {{-- info Redes --}}

               <h2 class="text-center mt-4 wow slideInLeft" data-wow-delay=".3s">Siguenos en :</h2>

           <div class="row mb-4 mt-4 d-flex justify-content-center">
               {{-- Link 1 --}}
               <div class="row">
                   <div class="col-3 wow fadeInUp" data-wow-delay="1.5s">
                        <a target="blank" href="https://twitter.com/ColmenaresGroup">
                                <img width="80px" class="p-1 circulo" src="https://cdn.freebiesupply.com/logos/large/2x/twitter-3-logo-png-transparent.png" alt="">
                        </a>
                   </div>
               {{-- Link 2 --}}

                   <div class="col-3 wow fadeInUp" data-wow-delay="1.7s">
                        <a target="blank" href="https://www.facebook.com/colmenaresgroupsa/">
                                <img width="80px" class="p-1 circulo" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAk1BMVEU7WZj///88WpdAXZpBX5tFY51FYZ3t7/V6jbgoS48vUJLS2OdSa6M3VZZuhLK2wNf3+fvd4u2Imr/o7PPx8/hNaKHEzeDd4ulfdqplfK2dq8sjR43Byt7L0uMxUpgtTpGQoMN7j7SVpMCruNNYcqcUPIgdQYrI0du6xdOClrZ4jLJfeKcsT5qrt8yntNCMncF/k7SJOt3qAAAFAElEQVR4nO3daXeiSBSA4QJkNcWiEMANt2mTMG36//+6AY0zc2bScLEoisu579ecU/IEBKFAmXYvDX6ViWVaJv4sy0rK98vyS8buvuOZczahKk350/5HeCmn5bvF+Uf6EL6ZO9WLIyGd7c7pXfhqTW8F3ttlaS1MyymuwbpqLR7CSnicKrDOCDSWnqe6jdZxP2TBlIGMWW/sMG2h8YudVS+D5M7MUr0IkrPYTPUiyE03SIg9EuKPhPgjIf5IiD8S4o+E+CMh/kiIPxKqjtd5t/jfdRphvMI7jOuWmbzcShLTtAz98ZcvdOs44xTWBm5lzuc12M6j5VdR1Xy73QSn62q/cPz8nJh661gjFHKv8Iz8M4jiUGsoDMN4GQWtE4OjE/LCS5xT1GT7d1HitQw4LqHOXZZf51BeLTRxCQvun5btLLRCz80Cu5MPmdBlq27rD5mQr/0u7z98Qs/bd91AcQk94/qMD4+wmAXPAbEIi2T7JBCJsDBfnwWiEOqe/uwmikOoc756HohByNxF4ykEfmGRg88jcAo524gAEQgLoW0UgZAbQtvo+IXc24sBRy/0XrqfLyETiq7CsQu5KfguHLtQFzvYIxAy/vQpBRJhkYnuZ8YuXK+EN9JxC3khvpGOW1gIHwzHLnSduAfhmOct3C6X1+Jouwm+6TriuScOP1bErysnS4zqYyz/T96YZ0g96Aea8JSzwi3+pwPOeKsTFjlsRxP5XiHy3JI6oeuAjobbs5BP6ToEnVcsM0GgyvchaFe6cEWfrFMm5BxyHXhrtB3uWlMnBF1k27vCL6RM6M0AkxVRXgi/kDqhCTjgby3hjVShEDKjFgA+s7SlUAiYtl+Jvw0VCl/ahWEPO5pxC+PFWvyFRi20D277vYdtjVvokBAQCaVFQhKCI6G0SEhCcCSUFglJCI6E0iIhCcGRUFqTF+pAYQ+vJFPI3d/3Y9Z+zdv2/2gYoQ5w0V+mkCf+78ud9mn8eJU3jFCXqZ3HLw6x3RBgkjteNg1QFaxbiVKFi3aDYKf2i+K4heHn1IUxYGeLXJi1zxHjFtqJ4n2pdGHEpi7cKj7iyxcGgE91qIUhZJ4ft3AxdWHsA24owi3Mpr6niQCHQ9zCuTF1YQA44OMWXiG3vWEWhnvInYuohc7khfnUhfZ56sL2p7qwC18hh0PUwhPkcIhauAJ9kylm4QJ0Iz9moT91YQg5d0ItXL6AHsZALJzDfpcSsXADOlhgFp5gX3stVfgpVbiCPfUlU+jl3z1B/2jT/m2e4fbUMIAPe+pL7p0K3z9gfmsNeLLLdn40jAB8rE2Z0AUJ18LA0d9tgvd+munfMURCEsIjobRISEJwJJQWCUkIjoTSIiEJwZFQWiQkITgSSouEJARHQmmRkITgSCgtEpIQHAmlRUISgiOhtEhIQnAklBYJSQiOhNIiIQnBkVBaJCQhOBJKi4QkBEdCaZGQhOBIKC0SkhAcCaVFQhKCI6G0SNin0Ohhebs3pNDsYXm7N5zQZGUPy9u9wYSV7138l6GfaDDh7MjeJi3kyZzZ5a6HbaFrgwk/Qqb97GOJuzaQkFsXjVUD7djga3Eg4e4YVkItLXe9LHWXhhH++WFrtVBLs8GJQwj5rgbehFp6AH0XaI/J/0Urzs1jrD2EWvjmW8aQn99kCw0jOVzuP7jEvoYLL+9lYlpDxc5zLWyuEvJnh0/KY/r4R/0FpSiVhgyl2EYAAAAASUVORK5CYII=" alt="">
                        </a>
                   </div>

               {{-- Link 3 --}} 
                   <div class="col-3 wow fadeInUp" data-wow-delay="1.8s">
                        <a target="blank" href="https://www.instagram.com/colmenaresgroup/">
                                <img width="80px" class="p-1 circulo bg-white" src="https://fecosva.com/wp-content/uploads/2018/02/Logo-de-instagram.jpg" alt="">
                        </a>
                   </div>
               {{-- Link 4 --}} 
                   <div class="col-3 wow fadeInUp" data-wow-delay="1.9s">
                        <a target="blank" href="https://www.linkedin.com/groups/4228575/">
                                <img width="80px" class="p-1 circulo" src="https://upload.wikimedia.org/wikipedia/commons/c/ca/LinkedIn_logo_initials.png" alt="">
                        </a>
                   </div>

                
           </div>
           {{-- fin Info Redes --}}
        </div>
     </section>

@endsection