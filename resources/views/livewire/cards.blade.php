<div class="grid grid-cols-3 gap-4 my-4">
    @foreach(range(1, 3) as $index)
        <div class="max-w-sm rounded overflow-hidden shadow-lg bg-white">
        <img class="w-full" src="https://placekitten.com/1920/1280" alt="Sunset in the mountains">
        <div class="px-6 py-4">
            <div class="font-bold text-xl mb-2">{{$title}}</div>
            <p class="text-gray-600 text-base leading-relaxed">
                {{$description}}
            </p>
        </div>
        <div class="px-6 pt-4 pb-2">
            <button class="inline-block bg-green-100 hover:bg-green-200 focus:outline-none rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">
                {{$item1}}</button>
            <button class="inline-block bg-green-100 hover:bg-green-200 focus:outline-none rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">{{$item2}}</button>
            <button class="inline-block bg-green-100 hover:bg-green-200 focus:outline-none rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">{{$item3}}</button>
        </div>
    </div>
    @endforeach
</div>
