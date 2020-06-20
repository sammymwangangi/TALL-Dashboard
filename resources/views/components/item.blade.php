@props([
    'type' => 'mainItem',
    'colors' => [
        'mainItem' => 'hover:bg-green-400 text-sm',
        'resItem' => 'hover:bg-green-500 mb-2',
    ]
])

<div {{ $attributes->merge(['class' => "{$colors[$type]} text-gray-600 hover:text-white px-2 py-2 flex rounded"]) }}>
    {{ $slot }}
</div>
