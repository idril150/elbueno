@props(['options', 'label'])

<div>
    <x-input-label :for="$attributes['name']" :value="$label" />
    <select {{ $attributes->merge(['class' => 'block w-full mt-1 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm border-gray-300 dark:bg-gray-800 dark:border-gray-700 dark:text-white']) }}>
        <option value="" disabled selected>Select {{ $label }}</option>
        @foreach($options as $value => $option)
            <option value="{{ $value }}">{{ $option }}</option>
        @endforeach
    </select>
</div>
