{{-- <x-app-layout>
    <x-slot name="header">
        <x-h1>Encuesta: {{$encuesta->name}}</x-h1>
    </x-slot>
    
    <div class="py-12">
        <div class="max-w-10xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                
                <!-- Campo de edicion de nombre -->
                <div class="ml-4">
                    <div class="grid grid-cols-12 p-6">
                        <div class="col-span-10">                                
                            <x-h1>Encuesta: {{$encuesta->name}}</x-h1>
                            <x-p><strong>periodo: </strong>{{$encuesta->periodo}}</x-p>
                            <x-p><strong>periodo: </strong>{{$encuesta->periodo}}</x-p>
                            <x-p><strong>Area: </strong>{{$encuesta->carrera}}</x-p>
                            <x-p><strong>estado: </strong>
                            @php
                                if ($encuesta->estado==1){
                                    echo "activo";
                                }
                                else {
                                    echo "inactivo";
                                }                            
                                @endphp</x-p>
                        </div>
                            
                        <div class="text-end col-span-2 ">
                            <x-aa href="{{route('encuestas.edit',$encuesta)}}" >Editar encuesta</x-aa>
                            <br><br><br>
                            <!-- resources/views/some_view.blade.php -->
                            <x-aa href="{{ route('preguntas.create', $encuesta)}}" class="bg-blue-600 text-center">agregar pregunta</x-aa>
                        </div>
                    </div>
                </div>                        
                @foreach ($preguntas as $pregunta)
                    <div class="ml-4">
                        <div class="grid grid-cols-12 p-6">
                            <div class="col-span-8">
                                <x-h4>{{ $pregunta->texto }}</x-h4>         
                                @if ($pregunta->tipo)
                                <!-- Pregunta de opción múltiple -->
                                    @foreach ($pregunta->respuestas->where('estado', 1) as $respuesta)
                                        <div class="container">
                                            <div class="grid grid-cols-12 p-4">
                                                <div class="col-span-10">
                                                    <x-li>{{ $respuesta->texto }}</x-li>
                                                </div>
                                                <div class="container text-center">
                                                    <div class="grid grid-flow-col gap-3">
                                                        <div>
                                                            <x-aa href="{{ route('preguntas.create', $encuesta)}}">agregar pregunta</x-aa>
                                                        </div>
                                                        <div class="block">
                                                            <form action="{{ route('respuestas.cambiarEstado', $respuesta->id) }}" method="POST">
                                                                @csrf
                                                                @method('put')
                                                                <input type="hidden" name="estado" value="0">
                                                                <x-elim-button class="ml-4">
                                                                    {{ __('eliminar') }}
                                                                </x-elim-button>                                                        
                                                                <br>
                                                              </form>
                                                        </div>
                                                    </div>                                    
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @endif                    
                            </div>
                            <div class="col-span-3 col-start-10">
                                <div class="py-12">
                                    <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
                                        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                                            <x-aa href="{{route('preguntas.edit',$pregunta->id)}}" class=" border-dashed border-2 border-yellow-400 bg-yellow-400 rounded-lg text-center">editar pregunta</x-aa>
                                        </div>
                                        <br>
                                        <div class="col-span-2">
                                            <form action="{{ route('preguntas.cambiarEstado', $pregunta->id) }}" method="POST">
                                                @csrf
                                                <input type="hidden" name="estado" value="0">        
                                                <x-elim-button type="submit" class="border-dashed border-2 border-red-400 bg-red-400 py-0.25 rounded-lg text-center">Desactivar</x-elim-button>
                                            </form>
                                        </div>
                                        <div class="col-span-4 col-start-2">
                                            @for ($i = 0; $i < count($pregunta->respuestas->where('estado', 1)) - 1; $i++)
                                            <br>
                                            @endfor
                                            <x-aa href="{{ route('respuestas.createe',$pregunta->id)}}" class="bg-blue-600 text-center">agregar respuesta</x-aa>
                                            
                                        </div>
                                        <div></div>
                                        <div></div>
                                    </div>
                                </div>
                            </div>        
                        </div>                                        
                    </div>
                @endforeach            
            </div>                              
        </div>                           
    </div> 
</x-app-layout>   --}}


<x-app-layout>
    <x-slot name="header">
        <x-h1>Encuesta: {{$encuesta->name}}</x-h1>
    </x-slot>
    
    <div class="py-12">
        <div class="max-w-10xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                
                <!-- Campo de edicion de nombre -->
                <div class="ml-4">
                    <div class="grid grid-cols-12 p-6">
                        <div class="col-span-9">                                                            
                            <x-p><strong>periodo: </strong>{{$encuesta->periodo}}</x-p>
                            <x-p><strong>periodo: </strong>{{$encuesta->periodo}}</x-p>
                            <x-p><strong>Area: </strong>{{$encuesta->carrera}}</x-p>
                            <x-p><strong>estado: </strong>
                            @php
                                if ($encuesta->estado == 1){
                                    echo "activo";
                                } else {
                                    echo "inactivo";
                                }                            
                            @endphp</x-p>
                        </div>
                            
                        <div class="text-end col-span-3 ">
                            <x-aa href="{{route('encuestas.edit',$encuesta)}}" >Editar informacion</x-aa>
                            <br><br><br>
                            <!-- resources/views/some_view.blade.php -->
                            <x-aaz href="{{ route('preguntas.create', $encuesta)}}" class=" text-center">agregar pregunta</x-aaz>
                        </div>
                    </div>
                </div>  
                <hr class="border-t border-gray-300 mx-4"> <!-- Línea horizontal que separa la información de la encuesta de las preguntas y respuestas -->                      
                @foreach ($preguntas as $pregunta)
                    <div class="ml-4">
                        <div class="grid grid-cols-12 p-6">
                            <div class="col-span-8">
                                <x-h4>{{ $pregunta->texto }}</x-h4>         
                                @if ($pregunta->tipo == 0)
                                    <!-- Pregunta de opción múltiple -->
                                    {{-- @foreach ($pregunta->respuestas->where('estado', 1) as $respuesta)
                                        <div class="container">
                                            <div class="grid grid-cols-12 p-4">
                                                <div class="col-span-10">
                                                    <x-li>{{ $respuesta->texto }}</x-li>
                                                </div>
                                                <div class="container text-center">
                                                    <div class="grid grid-flow-col gap-3">
                                                        <div>
                                                            <x-aa href="{{ route('respuestas.edit', $respuesta->id)}}">editar</x-aa>
                                                        </div>
                                                        <div class="block">
                                                            <form action="{{ route('respuestas.cambiarEstado', $respuesta->id) }}" method="POST">
                                                                @csrf
                                                                @method('put')
                                                                <input type="hidden" name="estado" value="0">
                                                                <x-elim-button class="ml-4" onclick="return confirm('¿Estás seguro de que deseas eliminar la respuesta?')">
                                                                    {{ __('eliminar') }}
                                                                </x-elim-button>                                                        
                                                                <br>
                                                            </form>
                                                        </div>
                                                    </div>                                    
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach --}}
                                    @foreach ($pregunta->respuestas->where('estado', 1) as $respuesta)
                                    <div class="container">
                                        <div class="grid grid-cols-12 p-4">
                                            <div class="col-span-10">
                                                <x-li>{{ $respuesta->texto }}</x-li>
                                            </div>
                                            <div class="container text-center">
                                                <div class="grid grid-flow-col gap-3">
                                                    <div>
                                                        <button class="edit-btn inline-flex items-center px-4 py-2 bg-yellow-400 border border-transparent rounded-md font-semibold text-sm text-black uppercase tracking-widest hover:bg-yellow-500 focus:bg-yellow-500 active:bg-yellow-600 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150" data-target="editModal{{ $respuesta->id }}">
                                                            Editar
                                                        </button>
                                                        
                                                    </div>
                                                    <div class="block">
                                                        <form action="{{ route('respuestas.cambiarEstado', $respuesta->id) }}" method="POST">
                                                            @csrf
                                                            @method('put')
                                                            <input type="hidden" name="estado" value="0">
                                                            <x-elim-button class="ml-4" onclick="return confirm('¿Estás seguro de que deseas eliminar la respuesta?')">
                                                                {{ __('eliminar') }}
                                                            </x-elim-button>
                                                            <br>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Modal -->
                                    <div class="fixed z-10 inset-0 overflow-y-auto hidden" id="editModal{{ $respuesta->id }}">
                                        <div class="flex items-center justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                                            <div class="fixed inset-0 transition-opacity">
                                                <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
                                            </div>
                                            <span class="hidden sm:inline-block sm:align-middle sm:h-screen"></span>&#8203;
                                            <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
                                                <form action="{{ route('respuestas.update', $respuesta->id) }}" method="POST">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="p-6">
                                                        <label for="respuesta_texto" class="block font-medium text-gray-700">Editar respuesta:</label>
                                                        <input type="text" name="respuesta_texto" id="respuesta_texto" value="{{ $respuesta->texto }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                                    </div>
                                                    <div class="px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                                                        <button type="submit" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-indigo-600 text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:ml-3 sm:w-auto sm:text-sm">Guardar cambios</button>
                                                        <button type="button" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm" onclick="toggleModal('editModal{{ $respuesta->id }}')">Cancelar</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                                @endif                    
                            </div>
                            <div class="col-span-3 col-start-10">
                                <div class="py-12">
                                    <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
                                        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                                            {{-- <x-aa href="{{route('preguntas.edit',$pregunta->id)}}" class=" text-center">editar pregunta</x-aa> --}}
                                            <button class="edit-btn inline-flex items-center px-4 py-2 bg-yellow-400 border border-transparent rounded-md font-semibold text-sm text-black uppercase tracking-widest hover:bg-yellow-500 focus:bg-yellow-500 active:bg-yellow-600 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150" data-target="editModalPregunta{{ $pregunta->id }}">
                                                Editar Pregunta
                                            </button>
                                        </div>
                                        <div class="fixed z-10 inset-0 overflow-y-auto hidden" id="editModalPregunta{{ $pregunta->id }}">
                                            <div class="flex items-center justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                                                <div class="fixed inset-0 transition-opacity">
                                                    <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
                                                </div>
                                                <span class="hidden sm:inline-block sm:align-middle sm:h-screen"></span>&#8203;
                                                <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
                                                    <form action="{{ route('preguntas.update', $pregunta->id) }}" method="POST">
                                                        @csrf
                                                        @method('PUT')
                                                        <div class="p-6">
                                                            <label for="texto" class="block font-medium text-gray-700">Editar pregunta:</label>
                                                            <input type="text" name="texto" id="texto" value="{{ $pregunta->texto }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                                        </div>
                                                        <div class="px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                                                            <button type="submit" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-indigo-600 text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:ml-3 sm:w-auto sm:text-sm">Guardar cambios</button>
                                                            <button type="button" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm" onclick="toggleModal('editModalPregunta{{ $pregunta->id }}')">Cancelar</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="col-span-2">
                                            <form action="{{ route('preguntas.cambiarEstado', $pregunta->id) }}" method="POST">
                                                @csrf
                                                <input type="hidden" name="estado" value="0">        
                                                <x-elim-button type="submit" onclick="return confirm('¿Estás seguro de que deseas eliminar la pregunta?')" class="border-dashed border-2 border-red-400 bg-red-400 py-0.25 rounded-lg text-center">Eliminar pregunta</x-elim-button>
                                            </form>
                                        </div>
                                        <div class="col-span-4 col-start-2">
                                            <br>
                                            @if ($pregunta->tipo == 0) <!-- Verificar si la pregunta es de opción múltiple para mostrar opciones de agregar respuesta -->
                                                @for ($i = 0; $i < count($pregunta->respuestas->where('estado', 1)) - 1; $i++)
                                                   
                                                @endfor
                                                <x-aaz href="{{ route('respuestas.createe',$pregunta->id)}}" class="bg-blue-600 text-center">agregar respuesta</x-aaz>
                                            @endif
                                        </div>
                                        <div></div>
                                        <div></div>
                                    </div>
                                </div>
                            </div>        
                        </div>                                        
                    </div>
                    <hr class="border-t border-gray-300 mx-4"> <!-- Línea horizontal que separa cada pregunta -->
                @endforeach            
            </div>                              
        </div>                           
    </div> 
</x-app-layout>

<script>
    function toggleModal(modalId) {
        const modal = document.getElementById(modalId);
        modal.classList.toggle('hidden');
    }

    const editButtons = document.querySelectorAll('.edit-btn');
    editButtons.forEach((button) => {
        button.addEventListener('click', () => {
            const targetModalId = button.getAttribute('data-target');
            toggleModal(targetModalId);
        });
    });
</script>

<script>
    function toggleModal(modalId) {
        const modal = document.getElementById(modalId);
        if (modal) {
            modal.classList.toggle('hidden');
        }
    }
</script>