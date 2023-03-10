<header>
    <h1>Seguimiento Egresados</h1>
    <nav>
        <ul>
            <li><a href="{{route('home')}}" class="{{request()->routeIs('home')? 'active' : ''}}">Home</a>
                
                
            </li>
            <li><a href="{{route('encuestas.index')}}" class="{{request()->routeIs('encuestas.*')? 'active' : ''}}">Encuestas</a>
                
            

            </li>
            <li><a href="{{route('nosotros')}}" class="{{request()->routeIs('nosotros')? 'active' : ''}}">nosotros</a>
                
            </li>
            <li><a href="{{route('contactanos.index')}}" class="{{request()->routeIs('contactanos.index')? 'active' : ''}}">contactanos</a>
                
            </li>
            
        </ul>
    </nav>
</header>