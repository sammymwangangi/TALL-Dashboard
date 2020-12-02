@extends('layouts.admin')

@section('content')
    <div class="flex">
        {{-- SIDEBAR --}}
        @include('layouts.sidebar')
        {{-- END SIDEBAR --}}

        {{-- BODY SECTION --}}
        <div class="w-full bg-gray-50 dark:bg-gray-800 overflow-y-hidden">
            @include('layouts.navbar')
            <div class="px-4 py-6">
                <h1 class="flex text-3xl">
                    <a href="{{url('/')}}" class="text-3xl text-gray-600 dark:text-gray-400 font-semibold">Dashboard ></a>
                    <span class="text-green-400">Profile</span>
                </h1>
                {{--HERO AREA--}}
                <div class="w-full h-64 mt-6 relative" style="background-image: url('{{asset('images/Fluid-01.jpg')}}')">
                    <div class="absolute bottom-0 left-0 sm:ml-10 px-2 lg:ml-16 -mb-8">
                        <img src="{{asset('images/rix.jpg')}}" class="rounded-full w-16 h-16 border-4 border-white shadow-lg" alt="cover-image">
                    </div>
                    <div class="absolute flex bottom-0 right-0 mr-16 -mb-5">
                        <a href="#" class="block rounded-full bg-green-600 w-10 h-10 shadow-lg flex items-center justify-center">
                            <svg class="fill-current text-white" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><title>design-tool-quill-2</title><g fill=""><path d="M23.159.006A23.885 23.885 0 0 0 4.628 13.663l-2.635 5.825a.722.722 0 0 0-.046.133L.154 22.467a1 1 0 1 0 1.692 1.067l4.518-7.208a.5.5 0 0 1 .845.532L6.02 18.747a.25.25 0 0 0 .306.365L9.764 17.7a12.375 12.375 0 0 0 5.844-4.836.25.25 0 0 0-.021-.3l-2.277-2.65a.251.251 0 0 1 .19-.414H17a.219.219 0 0 0 .2-.134 10.816 10.816 0 0 1 2.049-3.2L23.8 1.26a.75.75 0 0 0-.641-1.254z"></path></g></svg>
                        </a>
                        <a href="#" class="block rounded-full bg-green-600 w-10 h-10 shadow-lg ml-4 flex items-center justify-center">
                            <svg class="fill-current text-white" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><title>cog</title><g fill=""><path d="M22.5 9.5h-1.862a8.955 8.955 0 0 0-.763-1.84l1.317-1.316a1.5 1.5 0 0 0 0-2.122l-1.415-1.414a1.5 1.5 0 0 0-2.121 0l-1.318 1.317a8.9 8.9 0 0 0-1.838-.762V1.5A1.5 1.5 0 0 0 13 0h-2a1.5 1.5 0 0 0-1.5 1.5v1.863a8.919 8.919 0 0 0-1.84.762L6.343 2.808a1.5 1.5 0 0 0-2.121 0L2.807 4.222a1.5 1.5 0 0 0 0 2.122l1.317 1.317A8.952 8.952 0 0 0 3.362 9.5H1.5A1.5 1.5 0 0 0 0 11v2a1.5 1.5 0 0 0 1.5 1.5h1.862a8.961 8.961 0 0 0 .762 1.84l-1.318 1.317a1.5 1.5 0 0 0 0 2.122l1.414 1.414a1.545 1.545 0 0 0 2.122 0l1.318-1.318a8.922 8.922 0 0 0 1.84.764V22.5A1.5 1.5 0 0 0 11 24h2a1.5 1.5 0 0 0 1.5-1.5v-1.861a8.988 8.988 0 0 0 1.839-.763l1.318 1.318a1.5 1.5 0 0 0 2.121 0l1.414-1.414a1.5 1.5 0 0 0 0-2.122l-1.317-1.318a8.909 8.909 0 0 0 .763-1.84H22.5A1.5 1.5 0 0 0 24 13v-2a1.5 1.5 0 0 0-1.5-1.5zM12 17a5 5 0 1 1 5-5 5.006 5.006 0 0 1-5 5z"></path></g></svg>
                        </a>
                    </div>
                    <div x-data="{ open: false }" class="absolute bottom-0 right-0 -mb-16 mr-4 flex items-center sm:hidden">
                        <button @click="open = !open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-600 hover:text-white hover:bg-green-600 focus:outline-none focus:bg-green-600 focus:text-white transition duration-150 ease-in-out">
                          <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                            <path :class="{'hidden': open, 'inline-flex': !open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                            <path :class="{'hidden': !open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                          </svg>
                        </button>
                        <ul x-show.transition.ease-out.duration-100.transform.opacity-0.scale-95.transform.opacity-100.scale-100.transition.ease-in.duration-75.transform.opacity-100.scale-100.transform.opacity-0.scale-95="open"
                        @click.away="open = false"
                        class="block relative bg-white dark:bg-gray-900 w-full px-4 pl-8 py-2 text-green-600 dark:text-green-400 font-sans font-medium divide-y divide-gray-400"
                        >
                            <li><a href="#" class="inline-block mr-12 px-3 py-2">Timeline</a></li>
                            <li><a href="#" class="inline-block mr-12 px-3 py-2">About</a></li>
                            <li><a href="#" class="inline-block mr-12 px-3 py-2">Photos</a></li>
                            <li><a href="#" class="inline-block mr-12 px-3 py-2">Friends</a></li>
                            <li><a href="#" class="inline-block mr-12 px-3 py-2">Videos</a></li>
                            <li><a href="#" class="inline-block px-3 py-1">Events</a></li>
                        </ul>
                    </div>
                </div>
                <div class="flex flex-wrap bg-white dark:bg-gray-900 lg:h-16">
                    <div class="w-full md:w-1/4 p-4">
                    </div>
                    <div class="w-full md:w-3/4 p-4">
                        <ul class="lg:flex lg:text-sm hidden sm:text-xs md:block text-green-600 dark:text-green-400 font-sans font-medium">
                            <li><a href="#" class="inline-block mr-12 px-3 py-1">Timeline</a></li>
                            <li><a href="#" class="inline-block mr-12 px-3 py-1">About</a></li>
                            <li><a href="#" class="inline-block mr-12 px-3 py-1">Photos</a></li>
                            <li><a href="#" class="inline-block mr-12 px-3 py-1">Friends</a></li>
                            <li><a href="#" class="inline-block mr-12 px-3 py-1">Videos</a></li>
                            <li><a href="#" class="inline-block px-3 py-1">Events</a></li>
                        </ul>
                    </div>
                </div>
                {{--HERO AREA--}}

                {{--INFO--}}
                <div class="lg:flex mt-10">
                    <div class="lg:w-1/4 mb-4">
                        <div class="bg-white dark:bg-gray-900 h-auto shadow-lg rounded-lg mb-4 p-4">
                            <h2 class="antialiased text-gray-900 dark:text-gray-200 tracking-wide font-semibold text-2xl mb-4">About</h2>
                            <div class="text-gray-700 dark:text-gray-500 leading-normal font-semibold text-base mb-2">
                                Tart I love sugar plum I love oat cake. Sweet roll caramels I love jujubes. Topping cake wafer.
                            </div>
                            <div class="text-gray-600 dark:text-gray-300 leading-normal font-semibold mb-2">
                                <strong>Joined:</strong> <br>
                                November 15, 2015
                            </div>
                            <div class="text-gray-600 dark:text-gray-300 leading-normal font-semibold mb-2">
                                <strong>Lives:</strong> <br>
                                New York, USA
                            </div>
                            <div class="text-gray-600 dark:text-gray-300 leading-normal font-semibold mb-2">
                                <strong>Email:</strong> <br>
                                bucketful@fiendhead.org
                            </div>
                            <div class="text-gray-600 dark:text-gray-300 leading-normal font-semibold mb-2">
                                <strong>Website:</strong> <br>
                                www.pixinvent.com
                            </div>
                            <div class="flex">
                                <svg xmlns="http://www.w3.org/2000/svg" class="fill-current text-green-600 dark:text-green-400" width="32" height="32" viewBox="0 0 24 24"><title>facebook</title><g fill=""><path d="M20.9 2H3.1A1.1 1.1 0 0 0 2 3.1v17.8A1.1 1.1 0 0 0 3.1 22h9.58v-7.75h-2.6v-3h2.6V9a3.64 3.64 0 0 1 3.88-4 20.26 20.26 0 0 1 2.33.12v2.7H17.3c-1.26 0-1.5.6-1.5 1.47v1.93h3l-.39 3H15.8V22h5.1a1.1 1.1 0 0 0 1.1-1.1V3.1A1.1 1.1 0 0 0 20.9 2z"></path></g></svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="fill-current text-green-600 dark:text-green-400" width="32" height="32" viewBox="0 0 448 512"><title>twitter-square</title><g fill=""><path d="M400 32H48C21.5 32 0 53.5 0 80v352c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V80c0-26.5-21.5-48-48-48zm-48.9 158.8c.2 2.8.2 5.7.2 8.5 0 86.7-66 186.6-186.6 186.6-37.2 0-71.7-10.8-100.7-29.4 5.3.6 10.4.8 15.8.8 30.7 0 58.9-10.4 81.4-28-28.8-.6-53-19.5-61.3-45.5 10.1 1.5 19.2 1.5 29.6-1.2-30-6.1-52.5-32.5-52.5-64.4v-.8c8.7 4.9 18.9 7.9 29.6 8.3a65.447 65.447 0 0 1-29.2-54.6c0-12.2 3.2-23.4 8.9-33.1 32.3 39.8 80.8 65.8 135.2 68.6-9.3-44.5 24-80.6 64-80.6 18.9 0 35.9 7.9 47.9 20.7 14.8-2.8 29-8.3 41.6-15.8-4.9 15.2-15.2 28-28.8 36.1 13.2-1.4 26-5.1 37.8-10.2-8.9 13.1-20.1 24.7-32.9 34z"></path></g></svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="fill-current text-green-600 dark:text-green-400" width="32" height="32" viewBox="0 0 24 24"><title>bxl-instagram</title><g fill=""><path d="M11.999 7.377a4.623 4.623 0 1 0 0 9.248 4.623 4.623 0 0 0 0-9.248zm0 7.627a3.004 3.004 0 1 1 0-6.008 3.004 3.004 0 0 1 0 6.008z"></path><circle cx="16.806" cy="7.207" r="1.078"></circle><path d="M20.533 6.111A4.605 4.605 0 0 0 17.9 3.479a6.606 6.606 0 0 0-2.186-.42c-.963-.042-1.268-.054-3.71-.054s-2.755 0-3.71.054a6.554 6.554 0 0 0-2.184.42 4.6 4.6 0 0 0-2.633 2.632 6.585 6.585 0 0 0-.419 2.186c-.043.962-.056 1.267-.056 3.71 0 2.442 0 2.753.056 3.71.015.748.156 1.486.419 2.187a4.61 4.61 0 0 0 2.634 2.632 6.584 6.584 0 0 0 2.185.45c.963.042 1.268.055 3.71.055s2.755 0 3.71-.055a6.615 6.615 0 0 0 2.186-.419 4.613 4.613 0 0 0 2.633-2.633c.263-.7.404-1.438.419-2.186.043-.962.056-1.267.056-3.71s0-2.753-.056-3.71a6.581 6.581 0 0 0-.421-2.217zm-1.218 9.532a5.043 5.043 0 0 1-.311 1.688 2.987 2.987 0 0 1-1.712 1.711 4.985 4.985 0 0 1-1.67.311c-.95.044-1.218.055-3.654.055-2.438 0-2.687 0-3.655-.055a4.96 4.96 0 0 1-1.669-.311 2.985 2.985 0 0 1-1.719-1.711 5.08 5.08 0 0 1-.311-1.669c-.043-.95-.053-1.218-.053-3.654 0-2.437 0-2.686.053-3.655a5.038 5.038 0 0 1 .311-1.687c.305-.789.93-1.41 1.719-1.712a5.01 5.01 0 0 1 1.669-.311c.951-.043 1.218-.055 3.655-.055s2.687 0 3.654.055a4.96 4.96 0 0 1 1.67.311 2.991 2.991 0 0 1 1.712 1.712 5.08 5.08 0 0 1 .311 1.669c.043.951.054 1.218.054 3.655 0 2.436 0 2.698-.043 3.654h-.011z"></path></g></svg>
                            </div>
                        </div>
                        <div class="bg-white dark:bg-gray-900 h-auto shadow-lg rounded-lg mb-4 py-4 px-4">
                            <div class="text-xl text-gray-800 dark:text-gray-200 font-semibold leading-normal tracking-wide mb">
                                Suggested Pages
                            </div>
                            <div class="flex items-center justify-between mt-2">
                                <div class="flex py-2">
                                    <div class="flex-shrink-0">
                                        <img class="border-2 border-white rounded-full h-8 w-8" src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="ChitChat user">
                                    </div>
                                    <div class="ml-2">
                                        <h4 class="text-xs text-gray-700 dark:text-gray-200 font-semibold tracking-widest leading-normal">Rixton Muel</h4>
                                        <p class="text-xs text-gray-600 dark:text-gray-100 font-semibold leading-normal">Web Design</p>
                                    </div>
                                </div>
                                <div class="flex text-right py-4">
                                    <div>
                                        <svg class="fill-current text-gray-600 dark:text-green-400" width="14" height="14" fill="" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path></svg>
                                    </div>
                                </div>
                            </div>
                            <div class="flex items-center justify-between mt-2">
                                <div class="flex py-2">
                                    <div class="flex-shrink-0">
                                        <img class="border-2 border-white rounded-full h-8 w-8" src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="ChitChat user">
                                    </div>
                                    <div class="ml-2">
                                        <h4 class="text-xs text-gray-700 dark:text-gray-200 font-semibold tracking-widest leading-normal">The Devil's</h4>
                                        <p class="text-xs text-gray-600 dark:text-gray-100 font-semibold leading-normal">Clothing Store</p>
                                    </div>
                                </div>
                                <div class="flex text-right py-4">
                                    <div>
                                        <svg class="fill-current text-gray-600 dark:text-green-400" width="14" height="14" fill="" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path></svg>
                                    </div>
                                </div>
                            </div>
                            <div class="flex items-center justify-between mt-2">
                                <div class="flex py-2">
                                    <div class="flex-shrink-0">
                                        <img class="border-2 border-white rounded-full h-8 w-8" src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="ChitChat user">
                                    </div>
                                    <div class="ml-2">
                                        <h4 class="text-xs text-gray-700 dark:text-gray-200 font-semibold tracking-widest leading-normal">The Magician</h4>
                                        <p class="text-xs text-gray-600 dark:text-gray-100 font-semibold leading-normal">Public Figure</p>
                                    </div>
                                </div>
                                <div class="flex text-right py-4">
                                    <div>
                                        {{--                                        <svg class="fill-current text-red-600 transition duration-500 ease-in-out transform hover:-translate-y-2 hover:scale-150" width="24" height="24" fill="" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd"></path></svg>--}}
                                        <svg class="fill-current text-gray-600 dark:text-green-400" width="14" height="14" fill="" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path></svg>
                                    </div>
                                </div>
                            </div>
                            <div class="flex items-center justify-between mt-2">
                                <div class="flex py-2">
                                    <div class="flex-shrink-0">
                                        <img class="border-2 border-white rounded-full h-8 w-8" src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="ChitChat user">
                                    </div>
                                    <div class="ml-2">
                                        <h4 class="text-xs text-gray-700 dark:text-gray-200 font-semibold tracking-widest leading-normal">AC/DC</h4>
                                        <p class="text-xs text-gray-600 dark:text-gray-100 font-semibold leading-normal">Music</p>
                                    </div>
                                </div>
                                <div class="flex text-right py-4">
                                    <div>
                                        {{--                                        <svg class="fill-current text-red-600 transition duration-500 ease-in-out transform hover:-translate-y-2 hover:scale-150" width="24" height="24" fill="" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd"></path></svg>--}}
                                        <svg class="fill-current text-gray-600 dark:text-green-400" width="14" height="14" fill="" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path></svg>
                                    </div>
                                </div>
                            </div>
                            <div class="flex items-center justify-between mt-2">
                                <div class="flex py-2">
                                    <div class="flex-shrink-0">
                                        <img class="border-2 border-white rounded-full h-8 w-8" src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="ChitChat user">
                                    </div>
                                    <div class="ml-2">
                                        <h4 class="text-xs text-gray-700 dark:text-gray-200 font-semibold tracking-widest leading-normal">Eat Hard</h4>
                                        <p class="text-xs text-gray-600 dark:text-gray-100 font-semibold leading-normal">Restaurant / Bar</p>
                                    </div>
                                </div>
                                <div class="flex text-right py-4">
                                    <div>
                                        {{--                                        <svg class="fill-current text-red-600 transition duration-500 ease-in-out transform hover:-translate-y-2 hover:scale-150" width="24" height="24" fill="" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd"></path></svg>--}}
                                        <svg class="fill-current text-gray-600 dark:text-green-400" width="14" height="14" fill="" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path></svg>
                                    </div>
                                </div>
                            </div>
                            <div class="flex items-center justify-between mt-2">
                                <div class="flex py-2">
                                    <div class="flex-shrink-0">
                                        <img class="border-2 border-white rounded-full h-8 w-8" src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="ChitChat user">
                                    </div>
                                    <div class="ml-2">
                                        <h4 class="text-xs text-gray-700 dark:text-gray-200 font-semibold tracking-widest leading-normal">B4B</h4>
                                        <p class="text-xs text-gray-600 dark:text-gray-100 font-semibold leading-normal">Beauty Store</p>
                                    </div>
                                </div>
                                <div class="flex text-right py-4">
                                    <div>
                                        {{--                                        <svg class="fill-current text-red-600 transition duration-500 ease-in-out transform hover:-translate-y-2 hover:scale-150" width="24" height="24" fill="" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd"></path></svg>--}}
                                        <svg class="fill-current text-gray-600 dark:text-green-400" width="14" height="14" fill="" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path></svg>
                                    </div>
                                </div>
                            </div>
                            <div class="flex items-center justify-between mt-2">
                                <div class="flex py-2">
                                    <div class="flex-shrink-0">
                                        <img class="border-2 border-white rounded-full h-8 w-8" src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="ChitChat user">
                                    </div>
                                    <div class="ml-2">
                                        <h4 class="text-xs text-gray-700 dark:text-gray-200 font-semibold tracking-widest leading-normal">Kylie Jenner</h4>
                                        <p class="text-xs text-gray-600 dark:text-gray-100 font-semibold leading-normal">Public Figure</p>
                                    </div>
                                </div>
                                <div class="flex text-right py-4">
                                    <div>
                                        {{--                                        <svg class="fill-current text-red-600 transition duration-500 ease-in-out transform hover:-translate-y-2 hover:scale-150" width="24" height="24" fill="" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd"></path></svg>--}}
                                        <svg class="fill-current text-gray-600 dark:text-green-400" width="14" height="14" fill="" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path></svg>
                                    </div>
                                </div>
                            </div>
                            <div class="flex items-center justify-between mt-2">
                                <div class="flex py-2">
                                    <div class="flex-shrink-0">
                                        <img class="border-2 border-white rounded-full h-8 w-8" src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="ChitChat user">
                                    </div>
                                    <div class="ml-2">
                                        <h4 class="text-xs text-gray-700 dark:text-gray-200 font-semibold tracking-widest leading-normal">RDJ</h4>
                                        <p class="text-xs text-gray-600 dark:text-gray-100 font-semibold leading-normal">Web Development</p>
                                    </div>
                                </div>
                                <div class="flex text-right py-4">
                                    <div>
                                        {{--                                        <svg class="fill-current text-red-600 transition duration-500 ease-in-out transform hover:-translate-y-2 hover:scale-150" width="24" height="24" fill="" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd"></path></svg>--}}
                                        <svg class="fill-current text-gray-600 dark:text-green-400" width="14" height="14" fill="" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path></svg>
                                    </div>
                                </div>
                            </div>
                            <div class="flex items-center justify-between mt-2">
                                <div class="flex py-2">
                                    <div class="flex-shrink-0">
                                        <img class="border-2 border-white rounded-full h-8 w-8" src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="ChitChat user">
                                    </div>
                                    <div class="ml-2">
                                        <h4 class="text-xs text-gray-700 dark:text-gray-200 font-semibold tracking-widest leading-normal">Taylor Swift</h4>
                                        <p class="text-xs text-gray-600 dark:text-gray-100 font-semibold leading-normal">Website SEO</p>
                                    </div>
                                </div>
                                <div class="flex text-right py-4">
                                    <div>
                                        {{--                                        <svg class="fill-current text-red-600 transition duration-500 ease-in-out transform hover:-translate-y-2 hover:scale-150" width="24" height="24" fill="" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd"></path></svg>--}}
                                        <svg class="fill-current text-gray-600 dark:text-green-400" width="14" height="14" fill="" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path></svg>
                                    </div>
                                </div>
                            </div>
                            <div class="flex items-center justify-between mt-2">
                                <div class="flex py-2">
                                    <div class="flex-shrink-0">
                                        <img class="border-2 border-white rounded-full h-8 w-8" src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="ChitChat user">
                                    </div>
                                    <div class="ml-2">
                                        <h4 class="text-xs text-gray-700 dark:text-gray-200 font-semibold tracking-widest leading-normal">Dion Sam</h4>
                                        <p class="text-xs text-gray-600 dark:text-gray-100 font-semibold leading-normal">TALL Stack</p>
                                    </div>
                                </div>
                                <div class="flex text-right py-4">
                                    <div>
                                        {{--                                        <svg class="fill-current text-red-600 transition duration-500 ease-in-out transform hover:-translate-y-2 hover:scale-150" width="24" height="24" fill="" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd"></path></svg>--}}
                                        <svg class="fill-current text-gray-600 dark:text-green-400" width="14" height="14" fill="" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path></svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bg-white dark:bg-gray-900 h-auto shadow-lg rounded-lg py-4 px-4">
                            <div class="text-xl text-gray-800 dark:text-gray-200 font-semibold leading-normal tracking-wide mb-2">
                                Twitter Feeds
                            </div>
                            <div class="divide-y divide-gray-400 dark:divide-gray-200">

                                @foreach(range(1, 4) as $index)
                                    <div class="mb-4 py-2">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0">
                                                <img class="border-2 border-white dark:border-green-400 rounded-full h-8 w-8" src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="ChitChat user">
                                            </div>
                                            <div class="ml-2">
                                                <h4 class="text-xs text-gray-700 dark:text-gray-200 font-bold tracking-widest leading-normal">Rixton Muel</h4>
                                                <div class="flex">
                                                    <p class="text-xs text-gray-600 dark:text-green-300 font-semibold leading-normal px-2">@rixton20</p>
                                                    <svg class="fill-current text-indigo-600 dark:text-indigo-400 mt-1" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24"><title>ic_check_circle_24px</title>
                                                        <g fill="">
                                                            <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"></path>
                                                        </g>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-2 text-sm text-gray-600 dark:text-gray-400 font-semibold leading-normal tracking-wide">
                                            I love cookie chupa chups sweet tart apple pie chocolate bar. Jelly-o oat cake chupa chups.
                                        </div>
                                        <p class="text-sm text-indigo-600 dark:text-indigo-400 font-bold leading-normal tracking-wide">#js #vuejs</p>
                                        <p class="text-sm text-gray-600 dark:text-gray-400 font-semibold leading-normal tracking-wide">12 Dec 2018</p>
                                    </div>
                                    {{--                                @if(!$loop->last)--}}
                                    {{--                                    <hr class="py-2">--}}
                                    {{--                                @endif--}}
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="lg:flex-1 mb-4">
                        <div class="bg-white dark:bg-gray-900 lg:ml-4 h-auto shadow-lg rounded-lg mb-4 py-4 px-2">
                            <div class="mx-auto flex items-center">
                                <div class="flex-shrink-0">
                                    <img class="rounded-full h-12 w-12" src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="ChitChat user">
                                </div>
                                <div class="ml-6 pt-1">
                                    <h4 class="text-xl text-gray-800 dark:text-gray-400 font-semibold leading-tight">名称 名称</h4>
                                    <p class="text-base text-gray-600 dark:text-gray-200 font-semibold leading-normal">12 Dec 2018 at 10:46 PM</p>
                                </div>
                            </div>
                            <div class="mx-auto py-2 text-sm text-gray-600 dark:text-gray-200 font-semibold leading-normal tracking-wider">
                                I love jujubes wafer pie ice cream tiramisu. Chocolate I love pastry pastry sesame snaps wafer.
                                Pastry topping biscuit lollipop topping I love lemon drops sweet roll bonbon. Brownie donut icing.
                            </div>
                            <div class="mt-2 mb-6">
                                <img class="rounded-lg" src="https://placekitten.com/1920/1280" alt="image">
                            </div>
                            <div class="flex items-center justify-between">
                                <div class="lg:flex space-x-2 sm:space-x-1 md:space-x-2 lg:space-x-2 items-center">
                                    <div class="flex items-center">
                                        <svg class="fill-current text-red-600 transition duration-500 ease-in-out transform hover:-translate-y-2 hover:scale-150" width="24" height="24" fill="" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd"></path></svg>
                                        <div class="text-gray-600 dark:text-gray-200 font-bold">500</div>
                                    </div>
                                    <div class="flex items-center">
                                        <img class="transition duration-500 ease-in-out transform hover:-translate-y-2 hover:scale-150 inline-block h-8 w-8 border-2 border-white rounded-full text-white shadow-solid" src="https://images.unsplash.com/photo-1491528323818-fdd1faba62cc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" />
                                        <img class="-ml-2 transition duration-500 ease-in-out transform hover:-translate-y-2 hover:scale-150 inline-block h-8 w-8 border-2 border-white rounded-full text-white shadow-solid" src="https://images.unsplash.com/photo-1550525811-e5869dd03032?ixlib=rb-1.2.1&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" />
                                        <img class="-ml-2 transition duration-500 ease-in-out transform hover:-translate-y-2 hover:scale-150 inline-block h-8 w-8 border-2 border-white rounded-full text-white shadow-solid" src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2.25&w=256&h=256&q=80" alt="" />
                                    <div class="text-gray-600 dark:text-gray-200 font-bold text-sm py-2">+200 more</div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <svg class="fill-current dark:text-green-600 transition duration-500 ease-in-out transform hover:-translate-y-2 hover:scale-150" width="24" height="24" fill="" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zM7 8H5v2h2V8zm2 0h2v2H9V8zm6 0h-2v2h2V8z" clip-rule="evenodd"></path></svg>
                                    <div class="text-gray-600 dark:text-gray-200 text-sm font-bold">100</div>
                                </div>
                            </div>
                            <div class="flex items-center justify-between mt-2">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0">
                                        <img class="border-2 border-white rounded-full h-10 w-10" src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="ChitChat user">
                                    </div>
                                    <div class="ml-3">
                                        <h4 class="text-base text-gray-700 dark:text-gray-200 font-semibold tracking-wider leading-tight">Rixton Muel</h4>
                                        <p class="text-xs text-gray-600 dark:text-gray-100 font-semibold leading-normal">blockiness pandemy metaxylene speckle coppy</p>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div>
                                        <svg class="fill-current text-red-600 transition duration-500 ease-in-out transform hover:-translate-y-2 hover:scale-150" width="24" height="24" fill="" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd"></path></svg>
                                    </div>
                                    <div>
                                        <svg class="fill-current dark:text-green-600 transition duration-500 ease-in-out transform hover:-translate-y-2 hover:scale-150" width="24" height="24" fill="" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zM7 8H5v2h2V8zm2 0h2v2H9V8zm6 0h-2v2h2V8z" clip-rule="evenodd"></path></svg>
                                    </div>
                                </div>
                            </div>
                            <div class="flex items-center justify-between mt-2">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0">
                                        <img class="border-2 border-white rounded-full h-10 w-10" src="https://placekitten.com/1920/1280" alt="ChitChat user">
                                    </div>
                                    <div class="ml-3">
                                        <h4 class="text-base text-gray-700 dark:text-gray-200 font-semibold tracking-wider leading-tight">Dion Sam</h4>
                                        <p class="text-xs text-gray-600 dark:text-gray-100 font-semibold leading-normal">orthoplumbate morningtide naphthaline exarteritis</p>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div>
                                        <svg class="fill-current text-red-600 transition duration-500 ease-in-out transform hover:-translate-y-2 hover:scale-150" width="24" height="24" fill="" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd"></path></svg>
                                    </div>
                                    <div>
                                        <svg class="fill-current dark:text-green-600 transition duration-500 ease-in-out transform hover:-translate-y-2 hover:scale-150" width="24" height="24" fill="" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zM7 8H5v2h2V8zm2 0h2v2H9V8zm6 0h-2v2h2V8z" clip-rule="evenodd"></path></svg>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-wrap -mx-3 mt-2">
                                <div class="w-full px-3">
                                    <textarea class="appearance-none block w-full border border-gray-400 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                           id="grid-password"
                                           type="text"
                                           placeholder="Add Comment"
                                    ></textarea>
                                </div>
                            </div>
                            <button class="bg-green-400 hover:bg-green-500 hover:shadow-lg transition ease-in-out duration-150 text-gray-100 block px-6 py-2 rounded-full focus:outline-none">Post Comment</button>
                        </div>
                        <div class="bg-white dark:bg-gray-900 lg:ml-4 h-auto shadow-lg rounded-lg mb-4 py-4 px-2">
                            <div class="mx-auto flex items-center">
                                <div class="flex-shrink-0">
                                    <img class="rounded-full h-12 w-12" src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="ChitChat user">
                                </div>
                                <div class="ml-6 pt-1">
                                    <h4 class="text-xl text-gray-800 dark:text-gray-200 font-semibold leading-tight">名称 名称</h4>
                                    <p class="text-base text-gray-600 dark:text-gray-100 font-semibold leading-normal">12 Dec 2018 at 10:46 PM</p>
                                </div>
                            </div>
                            <div class="mx-auto py-2 text-sm text-gray-600 dark:text-gray-200 font-semibold leading-normal tracking-wider">
                                I love jujubes wafer pie ice cream tiramisu. Chocolate I love pastry pastry sesame snaps wafer.
                                Pastry topping biscuit lollipop topping I love lemon drops sweet roll bonbon. Brownie donut icing.
                            </div>
                            <div class="mt-2 mb-6">
                                <video
                                    id="my-video"
                                    class="video-js w-full h-64"
                                    controls
                                    preload="auto"
                                    data-setup="{}"
                                >
                                    <source src="http://vjs.zencdn.net/v/oceans.mp4" type="video/mp4" />
                                    <p class="vjs-no-js">
                                        To view this video please enable JavaScript, and consider upgrading to a
                                        web browser that
                                        <a href="https://videojs.com/html5-video-support/" target="_blank"
                                        >supports HTML5 video</a
                                        >
                                    </p>
                                </video>
                            </div>
                            <div class="flex items-center justify-between">
                                <div class="lg:flex space-x-2 sm:space-x-1 md:space-x-2 lg:space-x-2 items-center">
                                    <div class="flex items-center">
                                        <svg class="fill-current text-red-600 transition duration-500 ease-in-out transform hover:-translate-y-2 hover:scale-150" width="24" height="24" fill="" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd"></path></svg>
                                        <div class="text-gray-600 dark:text-gray-200 font-bold">500</div>
                                    </div>
                                    <div class="flex items-center">
                                        <img class="transition duration-500 ease-in-out transform hover:-translate-y-2 hover:scale-150 inline-block h-8 w-8 border-2 border-white rounded-full text-white shadow-solid" src="https://images.unsplash.com/photo-1491528323818-fdd1faba62cc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" />
                                        <img class="-ml-2 transition duration-500 ease-in-out transform hover:-translate-y-2 hover:scale-150 inline-block h-8 w-8 border-2 border-white rounded-full text-white shadow-solid" src="https://images.unsplash.com/photo-1550525811-e5869dd03032?ixlib=rb-1.2.1&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" />
                                        <img class="-ml-2 transition duration-500 ease-in-out transform hover:-translate-y-2 hover:scale-150 inline-block h-8 w-8 border-2 border-white rounded-full text-white shadow-solid" src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2.25&w=256&h=256&q=80" alt="" />
                                    <div class="text-gray-600 dark:text-gray-200 font-bold text-sm py-2">+200 more</div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <svg class="fill-current dark:text-green-600 transition duration-500 ease-in-out transform hover:-translate-y-2 hover:scale-150" width="24" height="24" fill="" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zM7 8H5v2h2V8zm2 0h2v2H9V8zm6 0h-2v2h2V8z" clip-rule="evenodd"></path></svg>
                                    <div class="text-gray-600 dark:text-gray-200 text-sm font-bold">100</div>
                                </div>
                            </div>
                            <div class="flex items-center justify-between mt-2">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0">
                                        <img class="border-2 border-white rounded-full h-10 w-10" src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="ChitChat user">
                                    </div>
                                    <div class="ml-3">
                                        <h4 class="text-base text-gray-700 dark:text-gray-200 font-semibold tracking-wider leading-tight">Rixton Muel</h4>
                                        <p class="text-xs text-gray-600 dark:text-gray-100 font-semibold leading-normal">blockiness pandemy metaxylene speckle coppy</p>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div>
                                        <svg class="fill-current text-red-600 transition duration-500 ease-in-out transform hover:-translate-y-2 hover:scale-150" width="24" height="24" fill="" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd"></path></svg>
                                    </div>
                                    <div>
                                        <svg class="fill-current dark:text-green-600 transition duration-500 ease-in-out transform hover:-translate-y-2 hover:scale-150" width="24" height="24" fill="" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zM7 8H5v2h2V8zm2 0h2v2H9V8zm6 0h-2v2h2V8z" clip-rule="evenodd"></path></svg>
                                    </div>
                                </div>
                            </div>
                            <div class="flex items-center justify-between mt-2">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0">
                                        <img class="border-2 border-white rounded-full h-10 w-10" src="https://placekitten.com/1920/1280" alt="ChitChat user">
                                    </div>
                                    <div class="ml-3">
                                        <h4 class="text-base text-gray-700 dark:text-gray-200 font-semibold tracking-wider leading-tight">Dion Sam</h4>
                                        <p class="text-xs text-gray-600 dark:text-gray-100 font-semibold leading-normal">orthoplumbate morningtide naphthaline exarteritis</p>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div>
                                        <svg class="fill-current text-red-600 transition duration-500 ease-in-out transform hover:-translate-y-2 hover:scale-150" width="24" height="24" fill="" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd"></path></svg>
                                    </div>
                                    <div>
                                        <svg class="fill-current dark:text-green-600 transition duration-500 ease-in-out transform hover:-translate-y-2 hover:scale-150" width="24" height="24" fill="" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zM7 8H5v2h2V8zm2 0h2v2H9V8zm6 0h-2v2h2V8z" clip-rule="evenodd"></path></svg>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-wrap -mx-3 mt-2">
                                <div class="w-full px-3">
                                    <textarea class="appearance-none block w-full border border-gray-400 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                              id="grid-password"
                                              type="text"
                                              placeholder="Add Comment"
                                    ></textarea>
                                </div>
                            </div>
                            <button class="bg-green-400 hover:bg-green-500 hover:shadow-lg transition ease-in-out duration-150 text-gray-100 block px-6 py-2 rounded-full focus:outline-none">Post Comment</button>
                        </div>
                        <div class="bg-white dark:bg-gray-900 lg:ml-4 h-auto shadow-lg rounded-lg py-4 px-2">
                            <div class="mx-auto flex items-center">
                                <div class="flex-shrink-0">
                                    <img class="rounded-full h-12 w-12" src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="ChitChat user">
                                </div>
                                <div class="ml-6 pt-1">
                                    <h4 class="text-xl text-gray-800 dark:text-gray-200 font-semibold leading-tight">名称 名称</h4>
                                    <p class="text-base text-gray-600 dark:text-gray-100 font-semibold leading-normal">12 Dec 2018 at 10:46 PM</p>
                                </div>
                            </div>
                            <div class="mx-auto py-2 text-sm text-gray-600 dark:text-gray-200 font-semibold leading-normal tracking-wider">
                                I love jujubes wafer pie ice cream tiramisu. Chocolate I love pastry pastry sesame snaps wafer.
                                Pastry topping biscuit lollipop topping I love lemon drops sweet roll bonbon. Brownie donut icing.
                            </div>
                            <div class="mt-2 mb-6">
                                <img class="rounded-lg" src="https://placekitten.com/1920/1280" alt="image">
                            </div>
                            <div class="flex items-center justify-between">
                                <div class="lg:flex space-x-2 sm:space-x-1 md:space-x-2 lg:space-x-2 items-center">
                                    <div class="flex items-center">
                                        <svg class="fill-current text-red-600 transition duration-500 ease-in-out transform hover:-translate-y-2 hover:scale-150" width="24" height="24" fill="" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd"></path></svg>
                                        <div class="text-gray-600 dark:text-gray-200 font-bold">500</div>
                                    </div>
                                    <div class="flex items-center">
                                        <img class="transition duration-500 ease-in-out transform hover:-translate-y-2 hover:scale-150 inline-block h-8 w-8 border-2 border-white rounded-full text-white shadow-solid" src="https://images.unsplash.com/photo-1491528323818-fdd1faba62cc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" />
                                        <img class="-ml-2 transition duration-500 ease-in-out transform hover:-translate-y-2 hover:scale-150 inline-block h-8 w-8 border-2 border-white rounded-full text-white shadow-solid" src="https://images.unsplash.com/photo-1550525811-e5869dd03032?ixlib=rb-1.2.1&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" />
                                        <img class="-ml-2 transition duration-500 ease-in-out transform hover:-translate-y-2 hover:scale-150 inline-block h-8 w-8 border-2 border-white rounded-full text-white shadow-solid" src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2.25&w=256&h=256&q=80" alt="" />
                                    <div class="text-gray-600 dark:text-gray-200 font-bold text-sm py-2">+200 more</div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <svg class="fill-current dark:text-green-600 transition duration-500 ease-in-out transform hover:-translate-y-2 hover:scale-150" width="24" height="24" fill="" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zM7 8H5v2h2V8zm2 0h2v2H9V8zm6 0h-2v2h2V8z" clip-rule="evenodd"></path></svg>
                                    <div class="text-gray-600 dark:text-gray-200 text-sm font-bold">100</div>
                                </div>
                            </div>
                            <div class="flex items-center justify-between mt-2">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0">
                                        <img class="border-2 border-white rounded-full h-10 w-10" src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="ChitChat user">
                                    </div>
                                    <div class="ml-3">
                                        <h4 class="text-base text-gray-700 dark:text-gray-200 font-semibold tracking-wider leading-tight">Rixton Muel</h4>
                                        <p class="text-xs text-gray-600 dark:text-gray-100 font-semibold leading-normal">blockiness pandemy metaxylene speckle coppy</p>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div>
                                        <svg class="fill-current text-red-600 transition duration-500 ease-in-out transform hover:-translate-y-2 hover:scale-150" width="24" height="24" fill="" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd"></path></svg>
                                    </div>
                                    <div>
                                        <svg class="fill-current dark:text-green-600 transition duration-500 ease-in-out transform hover:-translate-y-2 hover:scale-150" width="24" height="24" fill="" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zM7 8H5v2h2V8zm2 0h2v2H9V8zm6 0h-2v2h2V8z" clip-rule="evenodd"></path></svg>
                                    </div>
                                </div>
                            </div>
                            <div class="flex items-center justify-between mt-2">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0">
                                        <img class="border-2 border-white rounded-full h-10 w-10" src="https://placekitten.com/1920/1280" alt="ChitChat user">
                                    </div>
                                    <div class="ml-3">
                                        <h4 class="text-base text-gray-700 dark:text-gray-200 font-semibold tracking-wider leading-tight">Dion Sam</h4>
                                        <p class="text-xs text-gray-600 dark:text-gray-100 font-semibold leading-normal">orthoplumbate morningtide naphthaline exarteritis</p>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div>
                                        <svg class="fill-current text-red-600 transition duration-500 ease-in-out transform hover:-translate-y-2 hover:scale-150" width="24" height="24" fill="" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd"></path></svg>
                                    </div>
                                    <div>
                                        <svg class="fill-current dark:text-green-600 transition duration-500 ease-in-out transform hover:-translate-y-2 hover:scale-150" width="24" height="24" fill="" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zM7 8H5v2h2V8zm2 0h2v2H9V8zm6 0h-2v2h2V8z" clip-rule="evenodd"></path></svg>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-wrap -mx-3 mt-2">
                                <div class="w-full px-3">
                                    <textarea class="appearance-none block w-full border border-gray-400 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                              id="grid-password"
                                              type="text"
                                              placeholder="Add Comment"
                                    ></textarea>
                                </div>
                            </div>
                            <button class="bg-green-400 hover:bg-green-500 hover:shadow-lg transition ease-in-out duration-150 text-gray-100 block px-6 py-2 rounded-full focus:outline-none">Post Comment</button>
                        </div>

                        <div class="mt-6">
                            <button class="bg-green-400 hover:bg-green-500 hover:shadow-lg transition ease-in-out duration-150 text-gray-100 text-base block px-6 py-3 rounded-lg hover:shadow-lg sm:ml-32 lg:ml-48 focus:outline-none font-bold">Load More</button>
                        </div>
                    </div>
                    <div class="lg:w-1/4">
                        <div class="bg-white dark:bg-gray-900 py-2 px-4 lg:ml-4 h-auto shadow-lg rounded-lg mb-4">
                            <h2 class="text-gray-600 dark:text-gray-200 font-bold tracking-wide py-4">My Album</h2>
                            <div class="grid grid-rows-3 grid-flow-col gap-4 mb-4">
                                @foreach(range(1, 9) as $index)
                                    <div class="transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-100 inline-block">
                                        <img class="rounded h-12 w-12" src="https://placekitten.com/40/40" alt="ChitChat user">
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="bg-white dark:bg-gray-900 lg:ml-4 h-auto shadow-lg rounded-lg mb-4 py-4 px-4">
                            <div class="text-xl text-gray-800 dark:text-gray-200 font-semibold leading-normal tracking-wide">
                                Friends
                            </div>
                            <div class="divide-y-2 divide-gray-400 dark:divide-gray-800">

                                @foreach(range(1, 8) as $index)
                                    <div class="flex items-center justify-between">
                                        <div class="flex py-1">
                                            <div class="flex-shrink-0">
                                                <img class="border-2 border-white rounded-full h-10 w-10" src="https://placekitten.com/40/40" alt="ChitChat user">
                                            </div>
                                            <div class="ml-2">
                                                <h4 class="text-xs text-gray-700 dark:text-gray-200 font-semibold tracking-widest leading-normal">Rixton Muel</h4>
                                                <p class="text-xs text-gray-600 dark:text-gray-100 font-semibold leading-normal">10 Mutual Friends</p>
                                            </div>
                                        </div>
                                        <div class="flex text-right py-4">
                                            <button type="button" class="px-1 py-1 border-2 border-green-200 rounded-full hover:bg-green-100 dark:hover:bg-green-600 focus:outline-none focus:bg-green-200 focus:text-white">
                                                <svg viewBox="0 0 20 20" fill="" class="user-add w-6 h-6 fill-current text-gray-600 dark:text-gray-200"><path d="M8 9a3 3 0 100-6 3 3 0 000 6zM8 11a6 6 0 016 6H2a6 6 0 016-6zM16 7a1 1 0 10-2 0v1h-1a1 1 0 100 2h1v1a1 1 0 102 0v-1h1a1 1 0 100-2h-1V7z"></path></svg>
                                            </button>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="bg-white dark:bg-gray-900 lg:ml-4 h-auto shadow-lg rounded-lg py-4 px-4 space-y-2 sm:space-y-4 md:space-y-2 lg:space-y-0">
                            <div class="text-xl text-gray-800 dark:text-gray-200 font-semibold leading-normal tracking-wide mb-4">
                                Groups
                            </div>
                            <a href="#" class="-m-3 p-3 flex items-start space-x-4 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-800 transition ease-in-out duration-150">
                                <svg class="flex-shrink-0 h-6 w-6 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                                </svg>
                                <div class="space-y-1">
                                    <p class="text-base leading-6 font-medium text-gray-900 dark:text-gray-200 dark:text-gray-200">
                                        Front-End
                                    </p>
                                    <div class="flex overflow-hidden">
                                        <img class="-ml-1 inline-block h-6 w-6 rounded-full text-white shadow-solid" src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2.25&w=256&h=256&q=80" alt="">
                                        <img class="inline-block h-6 w-6 rounded-full text-white shadow-solid" src="https://images.unsplash.com/photo-1491528323818-fdd1faba62cc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                                        <img class="-ml-1 inline-block h-6 w-6 rounded-full text-white shadow-solid" src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2.25&w=256&h=256&q=80" alt="">
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="-m-3 p-3 flex items-start space-x-4 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-800 transition ease-in-out duration-150">
                                <svg class="flex-shrink-0 h-6 w-6 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656l-2.12 2.122" />
                                </svg>
                                <div class="space-y-1">
                                    <p class="text-base leading-6 font-medium text-gray-900 dark:text-gray-200">
                                        Back-End
                                    </p>
                                    <div class="flex overflow-hidden">
                                        <img class="inline-block h-6 w-6 rounded-full text-white shadow-solid" src="https://images.unsplash.com/photo-1491528323818-fdd1faba62cc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                                        <img class="-ml-1 inline-block h-6 w-6 rounded-full text-white shadow-solid" src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2.25&w=256&h=256&q=80" alt="">
                                        <img class="-ml-1 inline-block h-6 w-6 rounded-full text-white shadow-solid" src="https://images.unsplash.com/photo-1550525811-e5869dd03032?ixlib=rb-1.2.1&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                                        <img class="-ml-1 inline-block h-6 w-6 rounded-full text-white shadow-solid" src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2.25&w=256&h=256&q=80" alt="">
                                        <img class="-ml-1 inline-block h-6 w-6 rounded-full text-white shadow-solid" src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2.25&w=256&h=256&q=80" alt="">
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="-m-3 p-3 flex items-start space-x-4 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-800 transition ease-in-out duration-150">
                                <svg class="flex-shrink-0 h-6 w-6 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                </svg>
                                <div class="space-y-1">
                                    <p class="text-base leading-6 font-medium text-gray-900 dark:text-gray-200">
                                        UI/UX
                                    </p>
                                    <div class="flex overflow-hidden">
                                        <img class="inline-block h-6 w-6 rounded-full text-white shadow-solid" src="https://images.unsplash.com/photo-1491528323818-fdd1faba62cc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                                        <img class="-ml-1 inline-block h-6 w-6 rounded-full text-white shadow-solid" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                                        <img class="-ml-1 inline-block h-6 w-6 rounded-full text-white shadow-solid" src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2.25&w=256&h=256&q=80" alt="">
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="-m-3 p-3 flex items-start space-x-4 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-800 transition ease-in-out duration-150">
                                <svg class="flex-shrink-0 h-6 w-6 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                                </svg>
                                <div class="space-y-1">
                                    <p class="text-base leading-6 font-medium text-gray-900 dark:text-gray-200">
                                        Machine Learning
                                    </p>
                                    <div class="flex overflow-hidden">
                                        <img class="inline-block h-6 w-6 rounded-full text-white shadow-solid" src="https://images.unsplash.com/photo-1491528323818-fdd1faba62cc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                                        <img class="-ml-1 inline-block h-6 w-6 rounded-full text-white shadow-solid" src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2.25&w=256&h=256&q=80" alt="">
                                        <img class="-ml-1 inline-block h-6 w-6 rounded-full text-white shadow-solid" src="https://images.unsplash.com/photo-1550525811-e5869dd03032?ixlib=rb-1.2.1&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                                        <img class="-ml-1 inline-block h-6 w-6 rounded-full text-white shadow-solid" src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2.25&w=256&h=256&q=80" alt="">
                                        <img class="-ml-1 inline-block h-6 w-6 rounded-full text-white shadow-solid" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                                        <img class="-ml-1 inline-block h-6 w-6 rounded-full text-white shadow-solid" src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2.25&w=256&h=256&q=80" alt="">
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="-m-3 p-3 flex items-start space-x-4 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-800 transition ease-in-out duration-150">
                                <svg class="flex-shrink-0 h-6 w-6 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
                                </svg>
                                <div class="space-y-1">
                                    <p class="text-base leading-6 font-medium text-gray-900 dark:text-gray-200">
                                        DevOps
                                    </p>
                                    <div class="flex overflow-hidden">
                                        <img class="inline-block h-6 w-6 rounded-full text-white shadow-solid" src="https://images.unsplash.com/photo-1491528323818-fdd1faba62cc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                                        <img class="-ml-1 inline-block h-6 w-6 rounded-full text-white shadow-solid" src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2.25&w=256&h=256&q=80" alt="">
                                        <img class="-ml-1 inline-block h-6 w-6 rounded-full text-white shadow-solid" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                                        <img class="-ml-1 inline-block h-6 w-6 rounded-full text-white shadow-solid" src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2.25&w=256&h=256&q=80" alt="">
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                {{--INFO--}}

            </div>
        </div>
    </div>

@endsection
