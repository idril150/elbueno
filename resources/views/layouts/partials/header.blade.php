<header>
    <h1>Seguimiento Egresados</h1>
    <nav>
        <ul>
            <li>
                <a href="{{route('encuestas.index')}}" class="{{request()->routeIs('encuestas.*')? 'active' : ''}}">Encuestas</a>
                
                
            </li>

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
    @vite('resources/css/app.css')

</header>