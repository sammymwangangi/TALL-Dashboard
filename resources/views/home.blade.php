@extends('layouts.admin')

@section('content')
    <div class="flex">
        @include('layouts._sidebar')

        <div class="p-4 w-4/5 bg-gray-100 overflow-y-hidden">
            @include('layouts.navbar')
            <div class="px-10 py-8">
                <h1 class="text-3xl text-gray-600 font-semibold">Dashboard</h1>
                <div class="lg:flex items-center justify-between px-2 py-6">
                    <div class="transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110 hover:shadow-2xl rounded border-l-4 bg-white border-indigo-600 shadow-xl w-56 h-24 text-center mb-2">
                        <div class="flex items-center justify-between px-4 py-8">
                            <div class="flex-1 text-left">
                                <div class="text-xs font-semibold uppercase text-indigo-600 mb-2">earnings (monthly)</div>
                                <div class="text-lg font-bold text-gray-700">$40,000</div>
                            </div>
                            <div class="text-right">
                                <svg class="fill-current text-indigo-600" xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24"><title>money-wallet-open</title><g><path d="M20.5.305h-17a3.535 3.535 0 0 0-3.5 3.5v13a4.5 4.5 0 0 0 3.306 4.174L14.465 23.6a2.929 2.929 0 0 0 2.487-.489A2.863 2.863 0 0 0 18 20.805v-9.692a4.264 4.264 0 0 0-3.119-4.1L4.056 4.028a.75.75 0 1 1 .4-1.446l3.534.975H20.5a.75.75 0 1 1 0 1.5h-5.235a.25.25 0 0 0-.067.491l.086.024a5.719 5.719 0 0 1 2.9 1.894.254.254 0 0 0 .194.091H20.5a.75.75 0 0 1 0 1.5h-1.038a.249.249 0 0 0-.238.327 5.609 5.609 0 0 1 .281 1.731v6.942a.25.25 0 0 0 .25.25h.745a3.5 3.5 0 0 0 3.5-3.5v-11A3.5 3.5 0 0 0 20.5.305zm-5 15a2 2 0 1 1-2-2 2 2 0 0 1 2 2z"></path></g></svg>
                            </div>
                        </div>
                    </div>
                    <div class="transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110 hover:shadow-2xl lg:ml-4 rounded border-l-4 bg-white border-green-600 shadow-xl w-56 h-24 text-center mb-2">
                        <div class="flex items-center justify-between px-4 py-8">
                            <div class="flex-1 text-left">
                                <div class="text-xs font-semibold uppercase text-green-600 mb-2">EARNINGS (ANNUAL)</div>
                                <div class="text-lg font-bold text-gray-700">$215,000</div>
                            </div>
                            <div class="text-right">
                                <svg class="fill-current text-green-600" xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 20 20"><title>currency-dollar</title><g><path d="M10 20a10 10 0 1 1 0-20 10 10 0 0 1 0 20zm1-5h1a3 3 0 0 0 0-6H7.99a1 1 0 0 1 0-2H14V5h-3V3H9v2H8a3 3 0 1 0 0 6h4a1 1 0 1 1 0 2H6v2h3v2h2v-2z"></path></g></svg>
                            </div>
                        </div>
                    </div>
                    <div class="transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110 hover:shadow-2xl lg:ml-4 rounded border-l-4 bg-white border-teal-400 shadow-xl w-56 h-24 text-center mb-2">
                        <div class="flex items-center justify-between px-4 py-8">
                            <div class="flex-1 text-left">
                                <div class="text-xs font-semibold uppercase text-teal-400 mb-2">TASKS</div>
                                <div class="text-lg font-bold text-gray-700">50%</div>
                            </div>
                            <div class="text-right">
                                <svg class="fill-current text-teal-400" xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 20 20"><title>pin</title><g><path d="M11 12h6v-1l-3-1V2l3-1V0H3v1l3 1v8l-3 1v1h6v7l1 1 1-1v-7z"></path></g></svg>
                            </div>
                        </div>
                    </div>
                    <div class="transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110 hover:shadow-2xl lg:ml-4 rounded border-l-4 bg-white border-orange-400 shadow-xl w-56 h-24 text-center mb-2">
                        <div class="flex items-center justify-between px-4 py-8">
                            <div class="flex-1 text-left">
                                <div class="text-xs font-semibold uppercase text-orange-400 mb-2">PENDING REQUESTS</div>
                                <div class="text-lg font-bold text-gray-700">18</div>
                            </div>
                            <div class="text-right">
                                {{-- <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 100 100"><title>31</title><g><g id="31.-Papers" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round"><path id="Layer-1" stroke="#E4EBF4" stroke-width="4" fill="#E4EBF4" d="M24 90h52v8H24z"></path><path id="Layer-2" stroke="#D1DDEB" stroke-width="4" fill="#D1DDEB" d="M20 82h60v8H20z"></path><path id="Layer-3" stroke="#C1D0E0" stroke-width="4" fill="#C1D0E0" d="M16 74h68v8H16z"></path><path id="Layer-4" stroke="#A4B8CE" stroke-width="4" fill="#A4B8CE" d="M72.069 2L12 2.18v71.895h76V17.758L72.25 2.18z"></path><path id="Layer-5" stroke="#8DA1B7" stroke-width="4" fill="#8DA1B7" d="M88 18H72V2z"></path></g></g></svg> --}}
                                <svg class="fill-current text-orange-400" xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 20 20"><title>inbox-download</title><g fill="text-orange-400"><path d="M0 2C0 .9.9 0 2 0h16a2 2 0 0 1 2 2v16a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm14 12h4V2H2v12h4c0 1.1.9 2 2 2h4a2 2 0 0 0 2-2zM9 8V5h2v3h3l-4 4-4-4h3z"></path></g></svg>
                            </div>
                            
                        </div>
                    </div>
                </div>

                <div class="lg:flex mb-4">
                    <div class="transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-100 hover:shadow-2xl shadow-xl bg-white rounded-lg mx-auto p-6 lg:w-3/5 mb-2">
                        {!! $chart->container() !!}
                    </div>
                    <div class="transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-100 hover:shadow-2xl shadow-xl bg-white rounded-lg mx-auto p-6 lg:ml-4 lg:w-2/5">
                        {!! $chart2->container() !!}
                    </div>
                </div>
                
                <div id='recipients' class="transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-100 hover:shadow-xl p-8 mt-6 lg:mt-0 rounded shadow-lg bg-white">
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
                </div>
            </div>
        </div>
    </div>
@endsection
