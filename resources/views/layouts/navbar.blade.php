<nav x-data="{ open: true }" class="shadow-lg bg-white dark:bg-gray-900">
    <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
      <div class="relative flex items-center justify-between h-16">
        <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
          <button @click="open = !open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:bg-gray-700 focus:text-white transition duration-150 ease-in-out">
            <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
              <path :class="{'hidden': open, 'inline-flex': !open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
              <path :class="{'hidden': !open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>
        </div>
        <div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-start">
            <div class="flex-shrink-0">
                {{-- <img class="block lg:hidden h-8 w-auto" src="/img/logos/workflow-mark-on-dark.svg" alt="" />
                <img class="hidden lg:block h-8 w-auto" src="/img/logos/workflow-logo-on-dark.svg" alt="" /> --}}
            </div>
            <div class="hidden sm:block sm:ml-6">
                <div class="leading-5 relative mt-3 md:mt-0" x-data="{ isOpen: true }" @click.away="isOpen = false">
                    <input
                        type="text"
                        class="bg-gray-100 text-sm rounded-md border-transparent w-64 px-4 pl-8 py-2 focus:outline-none focus:ring  focus:ring-green-400 focu:ring-opacity-75 focus:ring-offset-2" placeholder="Search for..."
                        x-ref="search"
                    >
                    <div class="z-50 absolute top-0">
                        <svg class="text-gray-500 fill-current w-4 mt-2 ml-2" xmlns="http://www.w3.org/2000/svg"
                             viewBox="0 0 24 24" width="24" height="24">
                            <path class="heroicon-ui"
                                  d="M16.32 14.9l5.39 5.4a1 1 0 0 1-1.42 1.4l-5.38-5.38a8 8 0 1 1 1.41-1.41zM10 16a6 6 0 1 0 0-12 6 6 0 0 0 0 12z"/>
                        </svg>
                    </div>
                </div>

            </div>
        </div>
        <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
            <button id="switchTheme" class="h-10 w-10 flex justify-center items-center focus:outline-none text-yellow-500">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" clip-rule="evenodd"></path></svg>
            </button>
            <button class="relative p-1 border-2 border-transparent text-gray-600 dark:text-white rounded-full hover:text-gray-800 hover:bg-gray-500 focus:outline-none focus:text-white focus:bg-gray-700 transition duration-150 ease-in-out">
                <svg class="h-8 w-8" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                </svg>
                <div class="absolute flex top-0 right-0 text-white">
                    <div class="rounded-full bg-green-600 w-6 h-6 flex items-center justify-center font-medium">5</div>
                </div>
            </button>
            <a target="_blank" href="https://github.com/sammymwangangi/TALL-Dashboard" class="p-1 border-transparent rounded-full transition duration-150 ease-in-out">
                <svg class="fill-current text-gray-600 dark:text-white h-8 w-8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>bxl-github</title><g ><path d="M12.026 2c-5.509 0-9.974 4.465-9.974 9.974 0 4.406 2.857 8.145 6.821 9.465.499.09.679-.217.679-.481 0-.237-.008-.865-.011-1.696-2.775.602-3.361-1.338-3.361-1.338-.452-1.152-1.107-1.459-1.107-1.459-.905-.619.069-.605.069-.605 1.002.07 1.527 1.028 1.527 1.028.89 1.524 2.336 1.084 2.902.829.091-.645.351-1.085.635-1.334-2.214-.251-4.542-1.107-4.542-4.93 0-1.087.389-1.979 1.024-2.675-.101-.253-.446-1.268.099-2.64 0 0 .837-.269 2.742 1.021a9.582 9.582 0 0 1 2.496-.336 9.554 9.554 0 0 1 2.496.336c1.906-1.291 2.742-1.021 2.742-1.021.545 1.372.203 2.387.099 2.64.64.696 1.024 1.587 1.024 2.675 0 3.833-2.33 4.675-4.552 4.922.355.308.675.916.675 1.846 0 1.334-.012 2.41-.012 2.737 0 .267.178.577.687.479C19.146 20.115 22 16.379 22 11.974 22 6.465 17.535 2 12.026 2z"></path></g></svg>
            </a>
            <div @click.away="open = false" class="ml-3 relative z-10" x-data="{ open: false }">
                <div>
                    <button @click="open = !open" class="flex text-sm border-transparent rounded-full focus:outline-none focus:border-white transition duration-150 ease-in-out">
                        <div class="px-3 py-2 text-gray-600 dark:text-gray-100 font-semibold">John Doe</div>
                        <img class="h-8 w-8 rounded-full" src="/images/rix.jpg" alt="" />
                    </button>
                </div>
                <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg">
                    <div class="py-1 rounded-md bg-white ring-1 ring-black ring-opacity-5">
                    <a href="{{url('profile')}}" class="block px-4 py-2 text-sm leading-5 text-gray-600 font-semibold hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out">Your Profile</a>
                        <a href="#" class="block px-4 py-2 text-sm leading-5 text-gray-600 font-semibold hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out">Settings</a>
                        <a href="{{ route('logout') }}" class="block px-4 py-2 text-sm leading-5 text-gray-600 font-semibold hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out"
                            onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                            Sign out
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                            {{ csrf_field() }}
                        </form>
                    </div>
                </div>
            </div>
            {{--            @endguest--}}
        </div>
      </div>
    </div>
    <div :class="{'block': open, 'hidden': !open}" class="hidden sm:hidden">
      <div class="px-2 pt-2 pb-3">
          <div class="block relative mt-3 md:mt-0" x-data="{ isOpen: true }" @click.away="isOpen = false">
              <input
                  type="text"
                  class="w-full bg-gray-50 border-transparent text-sm rounded-md px-4 py-2 focus:outline-none focus:ring focus:ring-green-400" placeholder="Search for..."
                  x-ref="search"
              >
              <div class="z-50 absolute top-0">
                  <i class="fas fa-search text-gray-500 fill-current w-4 mt-2 ml-2"></i>
              </div>
          </div>
      </div>
    </div>
</nav>
