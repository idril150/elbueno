<header>
    <h1>Seguimiento Egresados</h1>
    <nav>
        <ul>
            <li>
                <a href="{{route('encuestas.index')}}" class="{{request()->routeIs('encuestas.*')? 'active' : ''}}">Encuestas</a>
                
                
            </li>
            <li>
                <a href="{{route('preguntas.index')}}" class="{{request()->routeIs('encuestas.*')? 'active' : ''}}">Preguntas</a>
            </li>
            
            {{-- <li><a href="{{route('nosotros')}}" class="{{request()->routeIs('nosotros')? 'active' : ''}}">nosotros</a>
                
            </li>
            <li><a href="{{route('contactanos.index')}}" class="{{request()->routeIs('contactanos.index')? 'active' : ''}}">contactanos</a>
                
            </li> --}}

            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <x-dropdown-link :href="route('logout')"
                        onclick="event.preventDefault();
                                    this.closest('form').submit();">
                    {{ __('Log Out') }}
                </x-dropdown-link>
            </form>
            
        </ul>
    </nav>
    @vite('resouces/css/app.css')
</header>