@props([
    'disabled' => false,
    'withicon' => false
])

@php
    $withiconClasses = $withicon ? 'pl-11 pr-4' : 'px-4'
@endphp

<input
    {{ $disabled ? 'disabled' : '' }}
    {!! $attributes->merge([
            'class' => $withiconClasses . ' text-lg text-black/50 py-3 bg-gray-100 rounded-md border-0 focus:bg-white dark:bg-dark-eval-1 dark:text-gray-300',
        ])
    !!}
>
