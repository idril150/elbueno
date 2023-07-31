@props(['class' => ''])

<li {{ $attributes->merge(['class' => 'font-semibold text-lg text-gray-800 dark:text-gray-200 leading-tight ' . $class]) }}>
    {{ $slot }}
</li>