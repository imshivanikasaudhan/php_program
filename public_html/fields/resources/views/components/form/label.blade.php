@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium text-lg font-primary text-black/50 dark:text-gray-300']) }}>
    {{ $value ?? $slot }}
</label>