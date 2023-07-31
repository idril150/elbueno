<!-- resources/views/components/h1.blade.php -->
<h1 {{ $attributes->merge(['class' => 'font-semibold text-4xl text-gray-800 dark:text-gray-200 leading-tight']) }}>
    {{ $slot }}
</h1>
