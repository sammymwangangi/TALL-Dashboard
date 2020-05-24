@extends('layouts.admin')

@section('content')
    <div class="flex">
      <div x-data="{ open: true }" class="h-screen sticky top-0 w-1/5 bg-white overflow-y-auto p-4">
         <div class="flex mb-4">
             <img class="h-10 w-10 rounded-full" src="/images/cabin2.svg" alt="" />
             <h1 class="ml-2 text-green-400 font-bold text-2xl hidden md:block lg:block">TALL Dashboard</h1>
         </div>

          <div class="hidden font-semibold text-center md:block lg:block space-y-4">
              <div class="bg-green-400 text-white px-2 py-2 flex rounded">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="fill-current" width="24" height="24"><path class="heroicon-ui" d="M13 20v-5h-2v5a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2v-7.59l-.3.3a1 1 0 1 1-1.4-1.42l9-9a1 1 0 0 1 1.4 0l9 9a1 1 0 0 1-1.4 1.42l-.3-.3V20a2 2 0 0 1-2 2h-3a2 2 0 0 1-2-2zm5 0v-9.59l-6-6-6 6V20h3v-5c0-1.1.9-2 2-2h2a2 2 0 0 1 2 2v5h3z"/></svg>
                  <span class="px-2 py-1">Dashboard</span>
              </div>

              <div class="text-gray-400 text-left text-base leading-tight px-2 py-2">
                  APPS
              </div>

                <div x-data="{ open: false }">
                    <div @click="open = true" class="group hover:bg-green-400 text-gray-600 text-sm hover:text-white px-2 py-2 flex rounded">
                        <svg xmlns="http://www.w3.org/2000/svg" 
                        viewBox="0 0 24 24" class="fill-current" 
                        width="24" height="24">
                        <path class="heroicon-ui" d="M6 2h9a1 1 0 0 1 .7.3l4 4a1 1 0 0 1 .3.7v13a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V4c0-1.1.9-2 2-2zm9 2.41V7h2.59L15 4.41zM18 9h-3a2 2 0 0 1-2-2V4H6v16h12V9zm-2 7a1 1 0 0 1-1 1H9a1 1 0 0 1 0-2h6a1 1 0 0 1 1 1zm0-4a1 1 0 0 1-1 1H9a1 1 0 0 1 0-2h6a1 1 0 0 1 1 1zm-5-4a1 1 0 0 1-1 1H9a1 1 0 1 1 0-2h1a1 1 0 0 1 1 1z"/></svg>
                        <span class="px-2 py-1">Documents</span>
                    </div>
                    <ul x-show.transition.in.duration.200ms.origin.top.right.opacity.scale.85.out.duration.200ms.origin.bottom.left.opacity.scale.95="open" 
                    @click.away="open = false">
                        <div class="hover:bg-green-200 text-gray-600 text-sm flex rounded px-8 py-2">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="fill-current" width="24" height="24"><path class="heroicon-ui" d="M20 22H4a2 2 0 0 1-2-2v-8c0-1.1.9-2 2-2h4V8c0-1.1.9-2 2-2h4V4c0-1.1.9-2 2-2h4a2 2 0 0 1 2 2v16a2 2 0 0 1-2 2zM14 8h-4v12h4V8zm-6 4H4v8h4v-8zm8-8v16h4V4h-4z"/></svg>
                            <span class="px-2 py-1">Laravel</span>
                        </div>
                        <div class="hover:bg-green-200 text-gray-600 text-sm flex rounded px-8 py-2">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="fill-current" width="24" height="24"><path class="heroicon-ui" d="M20 22H4a2 2 0 0 1-2-2v-8c0-1.1.9-2 2-2h4V8c0-1.1.9-2 2-2h4V4c0-1.1.9-2 2-2h4a2 2 0 0 1 2 2v16a2 2 0 0 1-2 2zM14 8h-4v12h4V8zm-6 4H4v8h4v-8zm8-8v16h4V4h-4z"/></svg>
                            <span class="px-2 py-1">Alpine Js</span>
                        </div>
                        <div class="hover:bg-green-200 text-gray-600 text-sm flex rounded px-8 py-2">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="fill-current" width="24" height="24"><path class="heroicon-ui" d="M20 22H4a2 2 0 0 1-2-2v-8c0-1.1.9-2 2-2h4V8c0-1.1.9-2 2-2h4V4c0-1.1.9-2 2-2h4a2 2 0 0 1 2 2v16a2 2 0 0 1-2 2zM14 8h-4v12h4V8zm-6 4H4v8h4v-8zm8-8v16h4V4h-4z"/></svg>
                            <span class="px-2 py-1">Livewire</span>
                        </div>
                    </ul>
                </div>

              <div class="hover:bg-green-400 text-gray-600 text-sm hover:text-white px-2 py-2 flex rounded">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="fill-current" width="24" height="24"><path class="heroicon-ui" d="M20 22H4a2 2 0 0 1-2-2v-8c0-1.1.9-2 2-2h4V8c0-1.1.9-2 2-2h4V4c0-1.1.9-2 2-2h4a2 2 0 0 1 2 2v16a2 2 0 0 1-2 2zM14 8h-4v12h4V8zm-6 4H4v8h4v-8zm8-8v16h4V4h-4z"/></svg>
                  <span class="px-2 py-1">Reports</span>
              </div>

              <div class="hover:bg-green-400 text-gray-600 text-sm hover:text-white px-2 py-2 flex rounded">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="fill-current" width="24" height="24"><path class="heroicon-ui" d="M9 12A5 5 0 1 1 9 2a5 5 0 0 1 0 10zm0-2a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm7 11a1 1 0 0 1-2 0v-2a3 3 0 0 0-3-3H7a3 3 0 0 0-3 3v2a1 1 0 0 1-2 0v-2a5 5 0 0 1 5-5h4a5 5 0 0 1 5 5v2zm1-5a1 1 0 0 1 0-2 5 5 0 0 1 5 5v2a1 1 0 0 1-2 0v-2a3 3 0 0 0-3-3zm-2-4a1 1 0 0 1 0-2 3 3 0 0 0 0-6 1 1 0 0 1 0-2 5 5 0 0 1 0 10z"/></svg>
                  <span class="px-2 py-1">Team</span>
              </div>
              <div class="hover:bg-green-400 text-gray-600 text-sm hover:text-white px-2 py-2 flex rounded">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="fill-current" width="24" height="24"><path class="heroicon-ui" d="M20 22H4a2 2 0 0 1-2-2v-8c0-1.1.9-2 2-2h4V8c0-1.1.9-2 2-2h4V4c0-1.1.9-2 2-2h4a2 2 0 0 1 2 2v16a2 2 0 0 1-2 2zM14 8h-4v12h4V8zm-6 4H4v8h4v-8zm8-8v16h4V4h-4z"/></svg>
                  <span class="px-2 py-1">Reports</span>
              </div>
              <div class="hover:bg-green-400 text-gray-600 text-sm hover:text-white px-2 py-2 flex rounded">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="fill-current" width="24" height="24"><path class="heroicon-ui" d="M20 6a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V6c0-1.1.9-2 2-2h7.41l2 2H20zM4 6v12h16V8h-7.41l-2-2H4z"/></svg>
                  <span class="px-2 py-1">Projects</span>
              </div>
              <div class="hover:bg-green-400 text-gray-600 text-sm hover:text-white px-2 py-2 flex rounded">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="fill-current" width="24" height="24"><path class="heroicon-ui" d="M17 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V6c0-1.1.9-2 2-2h2V3a1 1 0 1 1 2 0v1h6V3a1 1 0 0 1 2 0v1zm-2 2H9v1a1 1 0 1 1-2 0V6H5v4h14V6h-2v1a1 1 0 0 1-2 0V6zm4 6H5v8h14v-8z"/></svg>
                  <span class="px-2 py-1">Calendar</span>
              </div>

              <div class="text-gray-400 text-left text-base leading-tight px-2 py-2">
                  UI
              </div>

              <div class="hover:bg-green-400 text-gray-600 text-sm hover:text-white px-2 py-2 flex rounded">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="fill-current" width="24" height="24"><path class="heroicon-ui" d="M6 2h9a1 1 0 0 1 .7.3l4 4a1 1 0 0 1 .3.7v13a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V4c0-1.1.9-2 2-2zm9 2.41V7h2.59L15 4.41zM18 9h-3a2 2 0 0 1-2-2V4H6v16h12V9zm-2 7a1 1 0 0 1-1 1H9a1 1 0 0 1 0-2h6a1 1 0 0 1 1 1zm0-4a1 1 0 0 1-1 1H9a1 1 0 0 1 0-2h6a1 1 0 0 1 1 1zm-5-4a1 1 0 0 1-1 1H9a1 1 0 1 1 0-2h1a1 1 0 0 1 1 1z"/></svg>
                  <span class="px-2 py-1">Documents</span>
              </div>
              <div class="hover:bg-green-400 text-gray-600 text-sm hover:text-white px-2 py-2 flex rounded">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="fill-current" width="24" height="24"><path class="heroicon-ui" d="M20 22H4a2 2 0 0 1-2-2v-8c0-1.1.9-2 2-2h4V8c0-1.1.9-2 2-2h4V4c0-1.1.9-2 2-2h4a2 2 0 0 1 2 2v16a2 2 0 0 1-2 2zM14 8h-4v12h4V8zm-6 4H4v8h4v-8zm8-8v16h4V4h-4z"/></svg>
                  <span class="px-2 py-1">Reports</span>
              </div>

              <div class="hover:bg-green-400 text-gray-600 text-sm hover:text-white px-2 py-2 flex rounded">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="fill-current" width="24" height="24"><path class="heroicon-ui" d="M9 12A5 5 0 1 1 9 2a5 5 0 0 1 0 10zm0-2a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm7 11a1 1 0 0 1-2 0v-2a3 3 0 0 0-3-3H7a3 3 0 0 0-3 3v2a1 1 0 0 1-2 0v-2a5 5 0 0 1 5-5h4a5 5 0 0 1 5 5v2zm1-5a1 1 0 0 1 0-2 5 5 0 0 1 5 5v2a1 1 0 0 1-2 0v-2a3 3 0 0 0-3-3zm-2-4a1 1 0 0 1 0-2 3 3 0 0 0 0-6 1 1 0 0 1 0-2 5 5 0 0 1 0 10z"/></svg>
                  <span class="px-2 py-1">Team</span>
              </div>
              <div class="hover:bg-green-400 text-gray-600 text-sm hover:text-white px-2 py-2 flex rounded">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="fill-current" width="24" height="24"><path class="heroicon-ui" d="M20 22H4a2 2 0 0 1-2-2v-8c0-1.1.9-2 2-2h4V8c0-1.1.9-2 2-2h4V4c0-1.1.9-2 2-2h4a2 2 0 0 1 2 2v16a2 2 0 0 1-2 2zM14 8h-4v12h4V8zm-6 4H4v8h4v-8zm8-8v16h4V4h-4z"/></svg>
                  <span class="px-2 py-1">Reports</span>
              </div>
              <div class="hover:bg-green-400 text-gray-600 text-sm hover:text-white px-2 py-2 flex rounded">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="fill-current" width="24" height="24"><path class="heroicon-ui" d="M20 6a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V6c0-1.1.9-2 2-2h7.41l2 2H20zM4 6v12h16V8h-7.41l-2-2H4z"/></svg>
                  <span class="px-2 py-1">Projects</span>
              </div>
          </div>

          <div :class="{'block': open, 'hidden': !open}" class="hidden sm:hidden">
              <div class="px-4 py-3 overflow-y-auto -mt-2">
                  <div class="bg-green-500 text-white px-2 py-2 flex rounded mb-2">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="fill-current" width="24" height="24"><path class="heroicon-ui" d="M13 20v-5h-2v5a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2v-7.59l-.3.3a1 1 0 1 1-1.4-1.42l9-9a1 1 0 0 1 1.4 0l9 9a1 1 0 0 1-1.4 1.42l-.3-.3V20a2 2 0 0 1-2 2h-3a2 2 0 0 1-2-2zm5 0v-9.59l-6-6-6 6V20h3v-5c0-1.1.9-2 2-2h2a2 2 0 0 1 2 2v5h3z"/></svg>
                      <span class="font-semibold text-center text-lg px-2 py-1 hidden">Dashboard</span>
                  </div>
                  <div class="hover:bg-green-500 text-gray-100 px-2 py-2 flex rounded mb-2">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="fill-current" width="24" height="24"><path class="heroicon-ui" d="M6 2h9a1 1 0 0 1 .7.3l4 4a1 1 0 0 1 .3.7v13a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V4c0-1.1.9-2 2-2zm9 2.41V7h2.59L15 4.41zM18 9h-3a2 2 0 0 1-2-2V4H6v16h12V9zm-2 7a1 1 0 0 1-1 1H9a1 1 0 0 1 0-2h6a1 1 0 0 1 1 1zm0-4a1 1 0 0 1-1 1H9a1 1 0 0 1 0-2h6a1 1 0 0 1 1 1zm-5-4a1 1 0 0 1-1 1H9a1 1 0 1 1 0-2h1a1 1 0 0 1 1 1z"/></svg>
                      <span class="font-semibold text-center text-lg px-2 py-1 hidden">Documents</span>
                  </div>
                  <div class="hover:bg-green-500 hover:text-white text-gray-100 px-2 py-2 flex rounded mb-2">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="fill-current" width="24" height="24"><path class="heroicon-ui" d="M20 22H4a2 2 0 0 1-2-2v-8c0-1.1.9-2 2-2h4V8c0-1.1.9-2 2-2h4V4c0-1.1.9-2 2-2h4a2 2 0 0 1 2 2v16a2 2 0 0 1-2 2zM14 8h-4v12h4V8zm-6 4H4v8h4v-8zm8-8v16h4V4h-4z"/></svg>
                      <span class="font-semibold text-center text-lg px-2 py-1 hidden">Reports</span>
                  </div>

                  <div class="hover:bg-green-500 text-gray-100 px-2 py-2 flex rounded mb-2">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="fill-current" width="24" height="24"><path class="heroicon-ui" d="M9 12A5 5 0 1 1 9 2a5 5 0 0 1 0 10zm0-2a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm7 11a1 1 0 0 1-2 0v-2a3 3 0 0 0-3-3H7a3 3 0 0 0-3 3v2a1 1 0 0 1-2 0v-2a5 5 0 0 1 5-5h4a5 5 0 0 1 5 5v2zm1-5a1 1 0 0 1 0-2 5 5 0 0 1 5 5v2a1 1 0 0 1-2 0v-2a3 3 0 0 0-3-3zm-2-4a1 1 0 0 1 0-2 3 3 0 0 0 0-6 1 1 0 0 1 0-2 5 5 0 0 1 0 10z"/></svg>
                      <span class="font-semibold text-center text-lg px-2 py-1 hidden">Team</span>
                  </div>
                  <div class="hover:bg-green-500 text-gray-100 px-2 py-2 flex rounded mb-2">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="fill-current" width="24" height="24"><path class="heroicon-ui" d="M20 22H4a2 2 0 0 1-2-2v-8c0-1.1.9-2 2-2h4V8c0-1.1.9-2 2-2h4V4c0-1.1.9-2 2-2h4a2 2 0 0 1 2 2v16a2 2 0 0 1-2 2zM14 8h-4v12h4V8zm-6 4H4v8h4v-8zm8-8v16h4V4h-4z"/></svg>
                      <span class="font-semibold text-center text-lg px-2 py-1 hidden">Reports</span>
                  </div>
                  <div class="hover:bg-green-500 text-gray-100 px-2 py-2 flex rounded mb-2">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="fill-current" width="24" height="24"><path class="heroicon-ui" d="M20 6a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V6c0-1.1.9-2 2-2h7.41l2 2H20zM4 6v12h16V8h-7.41l-2-2H4z"/></svg>
                      <span class="font-semibold text-center text-lg px-2 py-1 hidden">Projects</span>
                  </div>
                  <div class="hover:bg-green-500 text-gray-100 px-2 py-2 flex rounded mb-2">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="fill-current" width="24" height="24"><path class="heroicon-ui" d="M17 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V6c0-1.1.9-2 2-2h2V3a1 1 0 1 1 2 0v1h6V3a1 1 0 0 1 2 0v1zm-2 2H9v1a1 1 0 1 1-2 0V6H5v4h14V6h-2v1a1 1 0 0 1-2 0V6zm4 6H5v8h14v-8z"/></svg>
                      <span class="font-semibold text-center text-lg px-2 py-1 hidden">Calendar</span>
                  </div>
                  <div class="hover:bg-green-500 text-gray-100 px-2 py-2 flex rounded mb-2">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="fill-current" width="24" height="24"><path class="heroicon-ui" d="M6 2h9a1 1 0 0 1 .7.3l4 4a1 1 0 0 1 .3.7v13a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V4c0-1.1.9-2 2-2zm9 2.41V7h2.59L15 4.41zM18 9h-3a2 2 0 0 1-2-2V4H6v16h12V9zm-2 7a1 1 0 0 1-1 1H9a1 1 0 0 1 0-2h6a1 1 0 0 1 1 1zm0-4a1 1 0 0 1-1 1H9a1 1 0 0 1 0-2h6a1 1 0 0 1 1 1zm-5-4a1 1 0 0 1-1 1H9a1 1 0 1 1 0-2h1a1 1 0 0 1 1 1z"/></svg>
                      <span class="font-semibold text-center text-lg px-2 py-1 hidden">Documents</span>
                  </div>
                  <div class="hover:bg-green-500 text-gray-100 px-2 py-2 flex rounded mb-2">
                      <svg
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 24 24" class="fill-current"
                          width="24"
                          height="24"
                      >
                          <path class="heroicon-ui"
                                d="M20 22H4a2 2 0 0 1-2-2v-8c0-1.1.9-2 2-2h4V8c0-1.1.9-2 2-2h4V4c0-1.1.9-2 2-2h4a2 2 0 0 1 2 2v16a2 2 0 0 1-2 2zM14 8h-4v12h4V8zm-6 4H4v8h4v-8zm8-8v16h4V4h-4z"/>
                      </svg>
                      <span class="font-semibold text-center text-lg px-2 py-1 hidden">Reports</span>
                  </div>
              </div>
          </div>
      </div>

      <div class="flex-grow w-4/5 bg-gray-100 overflow-y-hidden p-4">
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
                              <svg
                                  xmlns="http://www.w3.org/2000/svg"
                                  viewBox="0 0 24 24"
                                  class="fill-current text-gray-400"
                                  width="50"
                                  height="50">
                                  <path class="heroicon-ui"
                                        d="M17 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V6c0-1.1.9-2 2-2h2V3a1 1 0 1 1 2 0v1h6V3a1 1 0 0 1 2 0v1zm-2 2H9v1a1 1 0 1 1-2 0V6H5v4h14V6h-2v1a1 1 0 0 1-2 0V6zm4 6H5v8h14v-8z"/>
                              </svg>
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
                              <svg
                                  xmlns="http://www.w3.org/2000/svg"
                                  viewBox="0 0 24 24"
                                  class="fill-current text-gray-400"
                                  width="50"
                                  height="50">
                                  <path
                                      class="heroicon-ui"
                                      d="M12 22a10 10 0 1 1 0-20 10 10 0 0 1 0 20zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm1-11v2h1a3 3 0 0 1 0 6h-1v1a1 1 0 0 1-2 0v-1H8a1 1 0 0 1 0-2h3v-2h-1a3 3 0 0 1 0-6h1V6a1 1 0 0 1 2 0v1h3a1 1 0 0 1 0 2h-3zm-2 0h-1a1 1 0 1 0 0 2h1V9zm2 6h1a1 1 0 0 0 0-2h-1v2z"/>
                              </svg>
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
                              <svg
                                  xmlns="http://www.w3.org/2000/svg"
                                  viewBox="0 0 24 24" class="fill-current text-gray-400"
                                  width="50"
                                  height="40"
                              >
                                  <path class="heroicon-ui"
                                        d="M20 22H4a2 2 0 0 1-2-2v-8c0-1.1.9-2 2-2h4V8c0-1.1.9-2 2-2h4V4c0-1.1.9-2 2-2h4a2 2 0 0 1 2 2v16a2 2 0 0 1-2 2zM14 8h-4v12h4V8zm-6 4H4v8h4v-8zm8-8v16h4V4h-4z"/>
                              </svg>
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
                              <svg
                                  xmlns="http://www.w3.org/2000/svg"
                                  viewBox="0 0 24 24" class="fill-current text-gray-400"
                                  width="50"
                                  height="40"
                              >
                                  <path class="heroicon-ui"
                                        d="M20 22H4a2 2 0 0 1-2-2v-8c0-1.1.9-2 2-2h4V8c0-1.1.9-2 2-2h4V4c0-1.1.9-2 2-2h4a2 2 0 0 1 2 2v16a2 2 0 0 1-2 2zM14 8h-4v12h4V8zm-6 4H4v8h4v-8zm8-8v16h4V4h-4z"/>
                              </svg>
                          </div>
                      </div>
                  </div>
              </div>

              <div class="lg:flex mb-4">
                  <div class="shadow-xl bg-white rounded-lg mx-auto p-6 lg:w-3/5 mb-2">
                      {!! $chart->container() !!}
                  </div>
                  <div class="shadow-xl bg-white rounded-lg mx-auto p-6 lg:ml-4 lg:w-2/5">
                      {!! $chart2->container() !!}
                  </div>
              </div>

              <div class="rounded border-dashed border-4 border-gray-300 w-full h-64">
                  <div class="px-64 py-24">
                      <img class="h-16 w-16 rounded origin-bottom-left transform -rotate-45 hover:rotate-0 transition duration-150 ease-in-out shadow-xl hover:shadow-orange-xl" src="/images/lid.jpg" alt="" />
                      <img class="h-16 w-16 shadow-xl" src="/images/dustbin.jpg" alt="" />
                  </div>


              </div>
          </div>
      </div>
    </div>
@endsection
