{{--<x-admin>--}}
@extends('layouts.admin')

@section('content')
    <div class="flex">
        {{-- SIDEBAR --}}
        @include('layouts.sidebar')
        {{-- END SIDEBAR --}}

        {{-- BODY SECTION --}}
        <div class="w-4/5 bg-gray-50 dark:bg-gray-800 overflow-y-hidden">
            @include('layouts.navbar')
            <div class="px-10 py-8">
                {{-- HEADING --}}
                <h1 class="text-3xl text-gray-600 dark:text-gray-200 font-semibold">Dashboard</h1>

                {{-- CARDS --}}
                <div class="lg:flex items-center justify-between py-4 space-y-2 sm:space-y-4 md:space-y-2 lg:space-y-0">

                    <x-card type="one">
                        <div class="flex-1 text-left">
                            <div class="text-sm font-semibold uppercase text-indigo-600 dark:text-indigo-500 tracking-tight mb-2">earnings (monthly)</div>
                            <div class="text-2xl font-semibold text-gray-700 dark:text-white leading-normal tracking-widest">$40,000</div>
                        </div>
                        <div class="text-right">
                            <svg class="fill-current text-indigo-600 dark:text-indigo-500" xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24"><title>money-wallet-open</title><g><path d="M20.5.305h-17a3.535 3.535 0 0 0-3.5 3.5v13a4.5 4.5 0 0 0 3.306 4.174L14.465 23.6a2.929 2.929 0 0 0 2.487-.489A2.863 2.863 0 0 0 18 20.805v-9.692a4.264 4.264 0 0 0-3.119-4.1L4.056 4.028a.75.75 0 1 1 .4-1.446l3.534.975H20.5a.75.75 0 1 1 0 1.5h-5.235a.25.25 0 0 0-.067.491l.086.024a5.719 5.719 0 0 1 2.9 1.894.254.254 0 0 0 .194.091H20.5a.75.75 0 0 1 0 1.5h-1.038a.249.249 0 0 0-.238.327 5.609 5.609 0 0 1 .281 1.731v6.942a.25.25 0 0 0 .25.25h.745a3.5 3.5 0 0 0 3.5-3.5v-11A3.5 3.5 0 0 0 20.5.305zm-5 15a2 2 0 1 1-2-2 2 2 0 0 1 2 2z"></path></g></svg>
                        </div>
                    </x-card>

                    <x-card type="two">
                        <div class="flex-1 text-left">
                            <div class="text-sm font-semibold uppercase tracking-tight text-green-600 dark:text-green-400 mb-2">EARNINGS (ANNUAL)</div>
                            <div class="text-2xl font-semibold text-gray-700 dark:text-white leading-normal tracking-widest">$215,000</div>
                        </div>
                        <div class="text-right">
                            <svg class="fill-current text-green-600 dark:text-green-400" xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 20 20"><title>currency-dollar</title><g><path d="M10 20a10 10 0 1 1 0-20 10 10 0 0 1 0 20zm1-5h1a3 3 0 0 0 0-6H7.99a1 1 0 0 1 0-2H14V5h-3V3H9v2H8a3 3 0 1 0 0 6h4a1 1 0 1 1 0 2H6v2h3v2h2v-2z"></path></g></svg>
                        </div>
                    </x-card>

                    <x-card type="three">
                        <div class="flex-1 text-left">
                            <div class="text-sm font-semibold uppercase tracking-tight text-pink-600 dark:text-pink-400 mb-2">TASKS</div>
                            <div class="text-2xl font-semibold text-gray-700 dark:text-white leading-normal tracking-widest">50%</div>
                        </div>
                        <div class="text-right">
                            <svg class="fill-current text-pink-600 dark:text-pink-400" xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 20 20"><title>pin</title><g><path d="M11 12h6v-1l-3-1V2l3-1V0H3v1l3 1v8l-3 1v1h6v7l1 1 1-1v-7z"></path></g></svg>
                        </div>
                    </x-card>

                    <x-card type="four">
                        <div class="flex-1 text-left">
                            <div class="text-sm font-semibold uppercase tracking-tight text-yellow-500 dark:text-yellow-400 mb-2">PENDING REQUESTS</div>
                            <div class="text-2xl font-semibold text-gray-700 dark:text-white leading-normal tracking-widest">18</div>
                        </div>
                        <div class="text-right">
                            {{-- <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 100 100"><title>31</title><g><g id="31.-Papers" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round"><path id="Layer-1" stroke="#E4EBF4" stroke-width="4" fill="#E4EBF4" d="M24 90h52v8H24z"></path><path id="Layer-2" stroke="#D1DDEB" stroke-width="4" fill="#D1DDEB" d="M20 82h60v8H20z"></path><path id="Layer-3" stroke="#C1D0E0" stroke-width="4" fill="#C1D0E0" d="M16 74h68v8H16z"></path><path id="Layer-4" stroke="#A4B8CE" stroke-width="4" fill="#A4B8CE" d="M72.069 2L12 2.18v71.895h76V17.758L72.25 2.18z"></path><path id="Layer-5" stroke="#8DA1B7" stroke-width="4" fill="#8DA1B7" d="M88 18H72V2z"></path></g></g></svg> --}}
                            <svg class="fill-current text-yellow-500 dark:text-yellow-400" xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 20 20"><title>inbox-download</title><g fill="text-orange-400"><path d="M0 2C0 .9.9 0 2 0h16a2 2 0 0 1 2 2v16a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm14 12h4V2H2v12h4c0 1.1.9 2 2 2h4a2 2 0 0 0 2-2zM9 8V5h2v3h3l-4 4-4-4h3z"></path></g></svg>
                        </div>
                    </x-card>

                </div>
                {{-- END CARDS --}}

                {{-- GITHUB INFO --}}
                <x-github/>
                {{-- END GITHUB INFO --}}

                {{-- CHARTS --}}

                <div class="lg:flex space-y-2 sm:space-y-4 md:space-y-2 lg:space-y-0 mb-4">
                    <div class="transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-100 hover:shadow-2xl shadow-xl bg-white dark:bg-gray-900 rounded-lg mx-auto p-6 lg:w-3/5">
                        {!! $earnings_chart->container() !!}
                    </div>
                    <div class="transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-100 hover:shadow-2xl shadow-xl bg-white dark:bg-gray-900 rounded-lg mx-auto p-6 lg:ml-4 lg:w-2/5">
                        {!! $statics_chart->container() !!}
                    </div>
                </div>
                {{-- END CHARTS --}}


                <!-- Uncomment the code below to use the JQuery datatable -->

                {{-- JQUERY DATATABLE TABLE --}}
                {{-- <div id='recipients' class="transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-100 hover:shadow-xl p-8 mt-6 lg:mt-0 rounded shadow-lg bg-white mb-4">
                    <div class="block overflow-x-auto">
                        <table id="example" class="py-4" style="width:100%;">
                            <thead>
                                <tr>
                                    <th data-priority="1">Name</th>
                                    <th data-priority="2">Position</th>
                                    <th data-priority="3">Office</th>
                                    <th data-priority="4">Age</th>
                                    <th data-priority="5">Start date</th>
                                    <th data-priority="6">Salary</th>
                                </tr>
                            </thead>
                            <tbody class="leading-normal">
                                <tr>
                                    <td>Tiger Nixon</td>
                                    <td>System Architect</td>
                                    <td>Edinburgh</td>
                                    <td>61</td>
                                    <td>2011/04/25</td>
                                    <td>$320,800</td>
                                </tr>
                                <tr>
                                    <td>Garrett Winters</td>
                                    <td>Accountant</td>
                                    <td>Tokyo</td>
                                    <td>63</td>
                                    <td>2011/07/25</td>
                                    <td>$170,750</td>
                                </tr>
                                <tr>
                                    <td>Ashton Cox</td>
                                    <td>Junior Technical Author</td>
                                    <td>San Francisco</td>
                                    <td>66</td>
                                    <td>2009/01/12</td>
                                    <td>$86,000</td>
                                </tr>
                                <tr>
                                    <td>Cedric Kelly</td>
                                    <td>Senior Javascript Developer</td>
                                    <td>Edinburgh</td>
                                    <td>22</td>
                                    <td>2012/03/29</td>
                                    <td>$433,060</td>
                                </tr>
                                <tr>
                                    <td>Airi Satou</td>
                                    <td>Accountant</td>
                                    <td>Tokyo</td>
                                    <td>33</td>
                                    <td>2008/11/28</td>
                                    <td>$162,700</td>
                                </tr>
                                <tr>
                                    <td>Brielle Williamson</td>
                                    <td>Integration Specialist</td>
                                    <td>New York</td>
                                    <td>61</td>
                                    <td>2012/12/02</td>
                                    <td>$372,000</td>
                                </tr>
                                <tr>
                                    <td>Herrod Chandler</td>
                                    <td>Sales Assistant</td>
                                    <td>San Francisco</td>
                                    <td>59</td>
                                    <td>2012/08/06</td>
                                    <td>$137,500</td>
                                </tr>
                                <tr>
                                    <td>Rhona Davidson</td>
                                    <td>Integration Specialist</td>
                                    <td>Tokyo</td>
                                    <td>55</td>
                                    <td>2010/10/14</td>
                                    <td>$327,900</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div> --}}
                {{-- END JQUERY DATATABLE --}}

                {{-- TAILWIND TABLE --}}
                <div class="flex flex-col">
                  <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                      <div class="shadow overflow-hidden border-b border-gray-200 dark:border-gray-800 sm:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-800">
                          <thead>
                            <tr>
                              <th scope="col" class="px-6 py-3 bg-gray-100 dark:bg-black text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                                Name
                              </th>
                              <th scope="col" class="px-6 py-3 bg-gray-100 dark:bg-black text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                                Title
                              </th>
                              <th scope="col" class="px-6 py-3 bg-gray-100 dark:bg-black text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                                Status
                              </th>
                              <th scope="col" class="px-6 py-3 bg-gray-100 dark:bg-black text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                                Role
                              </th>
                              <th scope="col" class="px-6 py-3 bg-gray-100 dark:bg-black">
                                <span class="sr-only">Edit</span>
                              </th>
                            </tr>
                          </thead>
                          <tbody class="bg-white dark:bg-gray-900 divide-y divide-gray-200 dark:divide-gray-800">
                            @foreach(range(1, 6) as $index)
                            <tr class="hover:bg-gray-50 dark:hover:bg-gray-800">
                              <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                  <div class="flex-shrink-0 h-10 w-10">
                                    <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=4&amp;w=256&amp;h=256&amp;q=60" alt="">
                                  </div>
                                  <div class="ml-4">
                                    <div class="text-sm font-medium text-gray-600 dark:text-gray-200">
                                      Jane Cooper
                                    </div>
                                    <div class="text-sm text-gray-400 dark:text-gray-100">
                                      jane.cooper@example.com
                                    </div>
                                  </div>
                                </div>
                              </td>
                              <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-600 dark:text-gray-200">Regional Paradigm Technician</div>
                                <div class="text-sm text-gray-400 dark:text-gray-100">Optimization</div>
                              </td>
                              <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 dark:bg-green-600 text-green-800 dark:text-green-200">
                                  Active
                                </span>
                              </td>
                              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-300">
                                Admin
                              </td>
                              <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                <a href="#" class="text-indigo-600 dark:text-indigo-500 hover:text-indigo-900 dark:hover:text-indigo-700">Edit</a>
                              </td>
                            </tr>
                            @endforeach

                            <!-- More rows... -->
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>

                {{-- END TABLE --}}

                {{-- File Upload --}}
                <x-file-uploads/>

                {{-- More Card styles --}}
                @livewire('cards')

                {{-- Simple Carousel --}}
                <div class="carousel" data-flickity='{ "autoPlay": 1500, "freeScroll": true, "wrapAround": true }'>
                    <div class="carousel-cell bg-gradient-to-r from-green-400 to-blue-500 w-full h-64"></div>
                    <div class="carousel-cell bg-gradient-to-r from-purple-400 via-pink-500 to-red-500 w-full h-64"></div>
                    <div class="carousel-cell bg-gradient-to-r from-indigo-400 via-yellow-500 to-green-500 w-full h-64"></div>
                    <div class="carousel-cell bg-gradient-to-r from-red-400 via-blue-500 to-yellow-500 w-full h-64"></div>
                    <div class="carousel-cell bg-gradient-to-r from-green-400 via-blue-500 to-indigo-500 w-full h-64"></div>
                </div>

                {{-- Advanced Carousel Coming Soon --}}
            </div>

            <!-- FOOTER -->
            <footer class="block py-4">
                <div class="container mx-auto px-4">
                    <hr class="mb-4 border-b-1 border-gray-300" />
                    <div class="flex flex-wrap items-center md:justify-between justify-center">
                        <div class="w-full md:w-4/12 px-4">
                            <div class="text-sm text-gray-600 dark:text-gray-200 font-semibold py-1">
                                Copyright © <span>2020</span>
                                <a
                                    href="https://tailwindcss-dashboard.herokuapp.com/"
                                    class="hover:text-green-400 text-sm font-semibold py-1"
                                >
                                    TALL Dashboard
                                </a>
                            </div>
                        </div>
                        <div class="w-full md:w-8/12 px-4">
                            <ul class="flex text-gray-700 dark:text-gray-200 flex-wrap list-none md:justify-end  justify-center">
                                <li>
                                    <a
                                        href="https://tailwindcss.com"
                                        class="hover:text-green-400 text-sm font-semibold block py-1 px-3"
                                    >
                                        Tailwind CSS
                                    </a>
                                </li>
                                <li>
                                    <a
                                        href="https://github.com/alpinejs/alpine"
                                        class="hover:text-green-400 text-sm font-semibold block py-1 px-3"
                                    >
                                        Alpine Js
                                    </a>
                                </li>
                                <li>
                                    <a
                                        href="https://laravel.com"
                                        class="hover:text-green-400 text-sm font-semibold block py-1 px-3"
                                    >
                                        Laravel
                                    </a>
                                </li>
                                <li>
                                    <a
                                        href="http://laravel-livewire.com/"
                                        class="hover:text-green-400 text-sm font-semibold block py-1 px-3"
                                    >
                                        Laravel Livewire
                                    </a>
                                </li>
                                <li>
                                    <a
                                        href="https://github.com/sammymwangangi/TALL-Dashboard/blob/master/LICENSE"
                                        class="hover:text-green-400 text-sm font-semibold block py-1 px-3"
                                    >
                                        MIT License
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- END FOOTER -->
        </div>
        {{-- END BODY SECTION --}}

    </div>

@endsection
