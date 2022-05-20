<nav>
    <ul>
        <li class="{{setActive('home') }}"> <a href="/"  > @lang('Home') </a></li>
        <li class="{{setActive('about') }}"> <a href="/about"> @lang('About') </a> </li>
        <li class="{{setActive('portafolio') }}"> <a href="/portafolio">@lang('Portafolio')</a> </li>
        <li class="{{setActive('contact') }}"> <a href="/contact"> @lang('Contact')</a> </li>

        @guest
            <li> <a href="{{route('login')}}"> Login</a> </li>    
        @else
        <li> <a href="#" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">Salir</a></li>
        @endguest
        
        
        
    </ul>
</nav>

<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
    @csrf
</form>