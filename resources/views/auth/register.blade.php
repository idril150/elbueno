<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Carrera -->
        <div class="mt-4">
            <x-input-label for="carrera" :value="__('Carrera')" />
            <x-text-input id="carrera" class="block mt-1 w-full" type="carrera" name="carrera" :value="old('carrera')" required autocomplete="carrera" />
            <x-input-error :messages="$errors->get('carrera')" class="mt-2" />
        </div>

       <!-- Agregar el campo Ncontrol -->
    <div class="form-group row">
        <label for="Ncontrol" class="col-md-4 col-form-label text-md-right">Número de control</label>

        <div class="col-md-6">
            <input id="Ncontrol" type="text" class="form-control @error('Ncontrol') is-invalid @enderror" name="Ncontrol" value="{{ old('Ncontrol') }}" required autocomplete="Ncontrol" autofocus>

            @error('Ncontrol')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
        
     <!-- Agregar el campo Teléfono -->
    <div class="mt-4">
        <label for="telefono" class="block font-medium text-sm text-gray-700">Teléfono</label>
        <input type="text" name="telefono" id="telefono" pattern="[0-9]+" class="form-input rounded-md shadow-sm mt-1 block w-full"
            value="{{ old('telefono') }}" required autofocus>
        @error('telefono')
            <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
        @enderror
    </div>
    
        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
