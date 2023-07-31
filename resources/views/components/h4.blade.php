<!-- resources/views/components/h4.blade.php -->
@props(['class' => ''])

<h4 {{ $attributes->merge(['class' => 'font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight ' . $class]) }}>
    {{ $slot }}
</h4>
