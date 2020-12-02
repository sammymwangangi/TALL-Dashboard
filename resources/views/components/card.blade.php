@props([
    'type' => 'one',
    'borders' => [
        'one' => 'border-indigo-600',
        'two' => 'border-green-600 lg:ml-4',
        'three' => 'border-pink-600 lg:ml-4',
        'four' => 'border-yellow-500 lg:ml-4'
    ]
])
<div {{ $attributes->merge(['class' => "{$borders[$type]} transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-100 hover:shadow-2xl shadow-xl rounded border-l-4 bg-white dark:bg-gray-900 shadow-xl w-full h-24 text-center"]) }}>
    <div class="flex items-center justify-between px-4 py-4">
        {{ $slot }}
    </div>
</div>
