<h3 class="uk-panel-title">{{ config('app.name', 'Laravel') }}</h3>
<ul class="uk-nav uk-nav-side uk-nav-parent-icon" data-uk-nav="{multiple:true}">
  <li class="uk-nav-divider"></li>
  <li class="uk-nav-header"><i class="uk-icon-medium uk-icon-home"></i> Administración</li>
  @if (Auth::guest())
    <li>
      <a href="{{ url('/login') }}">Login</a>
    </li>
  @else
  <li class="uk-parent">
    <a href="#" class="uk-text-bold">{{ Auth::user()->name }}</a>
    <ul class="uk-nav-sub">
      <li>
        <a href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
          {{ csrf_field() }}
        </form>
      </li>
    </ul>
  </li>
  @endif
  <li class="uk-nav-divider"></li>
  <li class="uk-nav-header"><i class="uk-icon-medium uk-icon-pencil"></i> Gestión de contenido</li>
  <li class="uk-parent">
    <a href="#">Websites</a>
    <ul class="uk-nav-sub">
      <li><a href="/website">Todas las páginas</a></li>
      <li><a href="#createWebsite">Crear página</a></li>
    </ul>
  </li>
  <li class="uk-nav-divider"></li>
  <li class="uk-nav-header"><i class="uk-icon-medium uk-icon-rss"></i> Marketing</li>
  <li class="uk-parent">
    <a href="#">Redes sociales</a>
    <ul class="uk-nav-sub">
      <li><a href="#"><i class="uk-icon-button uk-icon-facebook"></i> Facebook</a></li>
      <li><a href="#"><i class="uk-icon-button uk-icon-twitter"></i> Twitter</a></li>
      <li><a href="#"><i class="uk-icon-button uk-icon-instagram"></i> Instagram</a></li>
    </ul>
  </li>
</ul>
