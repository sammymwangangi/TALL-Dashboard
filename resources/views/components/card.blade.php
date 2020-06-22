@props([
    'type' => 'one',
    'borders' => [
        'one' => 'border-indigo-600',
        'two' => 'border-green-600 lg:ml-4',
        'three' => 'border-teal-400 lg:ml-4',
        'four' => 'border-orange-400 lg:ml-4'
    ]
])
<div {{ $attributes->merge(['class' => "{$borders[$type]} transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-100 hover:shadow-2xl shadow-xl rounded border-l-4 bg-white shadow-xl w-full h-auto text-center mb-2"]) }}>
    <div class="flex items-center justify-between px-4 py-8">
        {{ $slot }}
    </div>
</div>
