@props([
    'type' => 'mainItem',
    'colors' => [
        'mainItem' => 'hover:bg-green-400 text-sm cursor-pointer px-2',
        'resItem' => 'hover:bg-green-500 mb-2 items-center justify-center cursor-pointer',
    ]
])

<div {{ $attributes->merge(['class' => "{$colors[$type]} text-gray-600 dark:text-gray-200 hover:text-white flex rounded-lg my-2 py-2"]) }}>
    {{ $slot }}
</div>
