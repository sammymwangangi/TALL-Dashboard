<div class="h-auto bg-gradient-to-r from-yellow-500 via-pink-500 to-orange-400 mb-6">
    <div class="px-8 py-8 md:grid md:grid-cols-4 gap-4">
        <div class="h-auto w-auto px-2 py-4 bg-white rounded transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-100 hover:shadow-lg shadow border-b-8 border-orange-400 text-center">
            <button class="rounded-full bg-orange-200 p-2 focus:outline-none items-center justify-center">
                <svg viewBox="0 0 20 20" fill="" class="fill-current text-orange-400 star w-8 h-8"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
            </button>
            <p class="text-4xl font-bold text-gray-600">{{ $repository['stargazers_count'] }}</p>
            <p class="text-lg font-medium text-gray-600">Star Gazers</p>
        </div>
        <div class="h-auto w-auto px-2 py-4 bg-white rounded transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-100 hover:shadow-lg shadow border-b-8 border-green-400 text-center">
            <button class="rounded-full bg-green-200 p-2 focus:outline-none items-center justify-center">
                <svg viewBox="0 0 20 20" fill="" class="users fill-current text-green-600 w-8 h-8"><path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z"></path></svg>
            </button>
            <p class="text-4xl font-bold text-gray-600">{{ $repository['subscribers_count'] }}</p>
            <p class="text-lg font-medium text-gray-600">Subscribers</p>
        </div>
        <div class="h-auto w-auto px-2 py-4 bg-white rounded transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-100 hover:shadow-lg shadow border-b-8 border-teal-400 text-center">
            <button class="rounded-full bg-teal-200 p-2 focus:outline-none items-center justify-center">
                <svg viewBox="0 0 20 20" fill="currentColor" class="download fill-current text-teal-600 w-8 h-8"><path fill-rule="evenodd" d="M3 17a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm3.293-7.707a1 1 0 011.414 0L9 10.586V3a1 1 0 112 0v7.586l1.293-1.293a1 1 0 111.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </button>
            <p class="text-4xl font-bold text-gray-600">{{ $repository['forks_count'] }}</p>
            <p class="text-lg font-medium text-gray-600">Forks</p>
        </div>
        <div class="h-auto w-auto px-2 py-4 bg-white rounded transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-100 hover:shadow-lg shadow border-b-8 border-purple-400 text-center">
            <button class="rounded-full bg-purple-200 p-2 focus:outline-none items-center justify-center">
                <svg viewBox="0 0 20 20" fill="currentColor" class="exclamation fill-current text-purple-600 w-8 h-8"><path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd"></path></svg>
            </button>
            <p class="text-4xl font-bold text-gray-600">{{ ($contributor['0']['contributions']) + ($contributor['1']['contributions']) }}</p>
            <p class="text-lg font-medium text-gray-600">Total Contributions</p>
        </div>
    </div>
</div>
