<!-- resources/views/components/p.blade.php -->
<p {{ $attributes->merge(['class' => 'text-base text-gray-800 dark:text-gray-200 leading-relaxed']) }}>
    {{ $slot }}
</p>
