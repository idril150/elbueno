<header>
    @vite('resources/css/app.css')
    <div class="bg-gradient-to-r from-purple-300 via-gray-300 to-teal-300">
    <nav>
        <div class="container">
            <div class="grid grid-cols-12 ">
                <div class="col-start-12">
                    <a href="{{route('encuestas.index')}}" class="{{request()->routeIs('encuestas.*')? 'active' : ''}} bg-blue-400 p-3 text-sm uppercase font-bold text-cyan-50 rounded-lg block text-center">Encuestas</a>
                </div>
                <div class="col-span-full flex justify-end">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <x-dropdown-link :href="route('logout')"
                                onclick="event.preventDefault();
                                            this.closest('form').submit();" 
                                class="bg-slate-600 rounded-lg text-center">
                            {{ __('Log Out') }} 
                        </x-dropdown-link>
                    </form>
                </div>        

                    
            </div>
        </div>
    </nav>
    </div>
    

</header>