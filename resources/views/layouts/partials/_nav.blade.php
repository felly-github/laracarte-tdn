<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
            
  <a class="navbar-brand my-0 mr-md-auto font-weight-normal"
  href="{{ route('home_path') }}">
  {{ config('app.name') }}
  </a>

  <nav class="my-2 my-md-0 mr-md-3 navbar-left">
      <a class="p-2 text-dark {{set_active_route('home_path')}}" href="{{ route('home_path') }}">Home</a>
      <a class="p-2 text-dark {{set_active_route('about_path')}}" href="{{route('about_path')}}">About</a>
      <a class="p-2 text-dark {{set_active_route('artisan_path')}}" href="#about">Artisans</a>

      <div class="btn-group">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Planet <span class="caret"></span></a>
          <div class="dropdown-menu">
              <a class="dropdown-item" href="https://laravel.com">Laravel.com</a>
              <a class="dropdown-item" href="https://laravel.io">Laravel.io</a>
              <a class="dropdown-item" href="https://laracast.com">laracast</a>
              <a class="dropdown-item" href="https://larajobs.com">Larajobs</a>
              <a class="dropdown-item" href="https://laravel-news.com">Laravel News</a>
              <a class="dropdown-item" href="https://larachat.co">Larachat</a>
          </div>
        </div>
    <a class="p-2 text-dark {{set_active_route('contact_path')}}"href="{{route('contact_path')}}">Contact</a>
    <a class="p-2 text-dark" href="#login">Login</a>
    <a class="p-2 text-dark" href="#registre">Registre</a>
  </nav>
</div>