{{-- @extends('layouts.plantilla')

@section('title', 'create')

@section('content')
<div class="min-h-screen bg-gradient-to-r from-purple-300 via-gray-300 to-teal-300">
    <div class="container">
        <div class="grid grid-cols-12">
            <div class="col-span-3 col-start-1">
                <a href="{{route('encuestas.index')}}" class="bg-blue-400 px-4 py-2 text-sm uppercase font-bold text-cyan-50 rounded-lg text-center"><-- volver a la encuesta</a> 
            </div>
        </div>
    </div>

    <div class="container">
        <div class="grid grid-cols-12">            
                
            <div class="col-span-6  col-start-4">
                <div class="border-t-2 border-r-2 border-l-2 border-dashed">
                    <br>
                    <h2 class="text-2xl font-bold">Editar información de la encuesta</h2>
                </div>
                <div class="container">
                    
                    
                            <form action="{{route('encuestas.store')}}" method="post">
                                @csrf
                                <div class="grid grid-cols-12 border-2 border-dashed items-center justify-center">
                                <div class="col-start-5 col-span-3">
                                    <br>
                                    <label>
                                        Nombre:
                                        <input type="text" name="name" value="{{old('name')}}">
                                    </label>
                                </div>
                                <div class="col-span-5"></div>
                                <div class="col-start-5 col-span-3">
                                    <br>
                                    <label class="col-span-5">
                                        periodo:
                                        <input type="text" x-1 name="periodo" rows="5" value="{{old('name')}}"></textarea>
                                    </label>
                                <div class="col-start-5 col-span-3">
                                </div>
                                <div class="col-span-5"></div>
                                <div>
                                    <br>
                                    <label >
                                        Area
                                        <input type="text" name="carrera" value="{{old('carrera')}}">
                                    </label>
                                </div>
                                <label>
                                    <br>
                                    <input type="hidden" name="estado" value="1">
                                </label>     
                            
                                <button type="submit" class="bg-blue-400 w-[206px] h-10 rounded-lg text-center">agregar pregunta</button>
                            </form>
                            <br><br>
                    </div>
                </div>                
            </div>                   
        </div>
    </div>
</div>
@endsection --}}
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Crear pregunta') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                
                <form method="POST" action="{{ route('encuestas.store') }}">
                    @csrf                    
                    <br>
                    <div class="ml-4">                                                                                                    
                            <div>
                                <div class="grid grid-cols-12 ">
                                    {{-- ingresar respuesta de pregunta abierta --}}
                                    <div class="col-span-10">
                                        <x-input-label for="Nombre" :value="__('Nombre')" />
                                        <x-text-input class="block mt-1 w-full" type="text" name="name" required />  
                                        <br>
                                        <x-input-label for="periodo" :value="__('periodo')" />
                                        <x-text-input class="block mt-1 w-full" type="text" name="periodo" required />  
                                        <br>
                                        <x-input-label for="carrera" :value="__('Carrera')" />
                                        <select id="carrera" name="carrera" class="block w-full mt-1 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm border-gray-300 dark:bg-gray-800 dark:border-gray-700 dark:text-white">
                                            <option value="" disabled selected>Select Carrera</option>
                                            @foreach($carreras as $carrera)
                                                <option value="{{ $carrera }}">{{ $carrera }}</option>
                                            @endforeach
                                        </select>
                                        <x-input-error :messages="$errors->get('carrera')" class="mt-2" />  
                                        
                                        <input type="hidden" name="estado" value="1">    
                                        <br>                                  
                                    </div>
                                </div>
                            </div>                                                   
                    </div>                              
                    <div class="flex items-center justify-end mt-4">
                        <div class="grid grid-cols-12 ">
                           
                            <div class="col-span-10">
                                <x-acept-button class="ml-4">
                                    {{ __('guardar') }}
                                </x-acept-button>
                            </div>
                        </div>
                           
                    </div>
                </form>
                <br>

            </div>
        </div>
    </div>
</x-app-layout>