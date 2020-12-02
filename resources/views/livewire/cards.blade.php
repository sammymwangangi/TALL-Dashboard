<div class="lg:grid lg:grid-cols-3 gap-4 my-4 space-y-2 sm:space-y-4 md:space-y-2 lg:space-y-0">
    @foreach(range(1, 3) as $index)
        <div class="max-w-sm rounded overflow-hidden shadow-lg bg-white dark:bg-gray-900">
            <img class="w-full" src="https://placekitten.com/1920/1280" alt="Sunset in the mountains">
            <div class="px-6 py-4">
                <div class="font-bold text-xl mb-2 dark:text-gray-200">{{$title}}</div>
                <p class="text-gray-600 dark:text-gray-300 text-base leading-relaxed">
                    {{$description}}
                </p>
            </div>
            <div class="px-6 pt-4 pb-2">
                <button class="inline-block bg-green-100 dark:bg-green-500 hover:bg-green-200 focus:outline-none rounded-full px-3 py-1 text-sm font-semibold text-gray-700 dark:text-gray-200 mr-2 mb-2 transform hover:scale-110 motion-reduce:transform-none">
                    {{$item1}}</button>
                <button class="inline-block bg-green-100 dark:bg-green-500 hover:bg-green-200 focus:outline-none rounded-full px-3 py-1 text-sm font-semibold text-gray-700 dark:text-gray-200 mr-2 mb-2 transform hover:scale-110 motion-reduce:transform-none">{{$item2}}</button>
                <button class="inline-block bg-green-100 dark:bg-green-500 hover:bg-green-200 focus:outline-none rounded-full px-3 py-1 text-sm font-semibold text-gray-700 dark:text-gray-200 mr-2 mb-2 transform hover:scale-110 motion-reduce:transform-none">{{$item3}}</button>
            </div>
        </div>
    @endforeach
</div>
