@extends('layouts.admin')

@section('content')
    <div class="h-screen flex xl:overflow-y-hidden">
      <div class="min-h-full w-1/4 bg-green-400 flex-none flex flex-col justify-between">
         <div class="bg-green-500 px-2 py-3 flex">
             <img class="h-10 w-10 rounded-full" src="/images/white.svg" alt="" />
             <h1 class="ml-2 text-white font-bold text-2xl py-1">Dashers</h1>
         </div>

          <div class="px-2 py-3 overflow-y-auto -mt-2">
              <div class="bg-green-500 text-white px-2 py-2 flex rounded mb-2">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="fill-current" width="24" height="24"><path class="heroicon-ui" d="M13 20v-5h-2v5a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2v-7.59l-.3.3a1 1 0 1 1-1.4-1.42l9-9a1 1 0 0 1 1.4 0l9 9a1 1 0 0 1-1.4 1.42l-.3-.3V20a2 2 0 0 1-2 2h-3a2 2 0 0 1-2-2zm5 0v-9.59l-6-6-6 6V20h3v-5c0-1.1.9-2 2-2h2a2 2 0 0 1 2 2v5h3z"/></svg>
                  <span class="font-semibold text-center text-lg px-2 py-1">Dashboard</span>
              </div>
              <div class="hover:bg-green-500 text-gray-100 px-2 py-2 flex rounded mb-2">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="fill-current" width="24" height="24"><path class="heroicon-ui" d="M6 2h9a1 1 0 0 1 .7.3l4 4a1 1 0 0 1 .3.7v13a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V4c0-1.1.9-2 2-2zm9 2.41V7h2.59L15 4.41zM18 9h-3a2 2 0 0 1-2-2V4H6v16h12V9zm-2 7a1 1 0 0 1-1 1H9a1 1 0 0 1 0-2h6a1 1 0 0 1 1 1zm0-4a1 1 0 0 1-1 1H9a1 1 0 0 1 0-2h6a1 1 0 0 1 1 1zm-5-4a1 1 0 0 1-1 1H9a1 1 0 1 1 0-2h1a1 1 0 0 1 1 1z"/></svg>
                  <span class="font-semibold text-center text-lg px-2 py-1">Documents</span>
              </div>
              <div class="hover:bg-green-500 text-gray-100 px-2 py-2 flex rounded mb-2">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="fill-current" width="24" height="24"><path class="heroicon-ui" d="M20 22H4a2 2 0 0 1-2-2v-8c0-1.1.9-2 2-2h4V8c0-1.1.9-2 2-2h4V4c0-1.1.9-2 2-2h4a2 2 0 0 1 2 2v16a2 2 0 0 1-2 2zM14 8h-4v12h4V8zm-6 4H4v8h4v-8zm8-8v16h4V4h-4z"/></svg>
                  <span class="font-semibold text-center text-lg px-2 py-1">Reports</span>
              </div>

              <div class="hover:bg-green-500 text-gray-100 px-2 py-2 flex rounded mb-2">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="fill-current" width="24" height="24"><path class="heroicon-ui" d="M9 12A5 5 0 1 1 9 2a5 5 0 0 1 0 10zm0-2a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm7 11a1 1 0 0 1-2 0v-2a3 3 0 0 0-3-3H7a3 3 0 0 0-3 3v2a1 1 0 0 1-2 0v-2a5 5 0 0 1 5-5h4a5 5 0 0 1 5 5v2zm1-5a1 1 0 0 1 0-2 5 5 0 0 1 5 5v2a1 1 0 0 1-2 0v-2a3 3 0 0 0-3-3zm-2-4a1 1 0 0 1 0-2 3 3 0 0 0 0-6 1 1 0 0 1 0-2 5 5 0 0 1 0 10z"/></svg>
                  <span class="font-semibold text-center text-lg px-2 py-1">Team</span>
              </div>
              <div class="hover:bg-green-500 text-gray-100 px-2 py-2 flex rounded mb-2">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="fill-current" width="24" height="24"><path class="heroicon-ui" d="M20 22H4a2 2 0 0 1-2-2v-8c0-1.1.9-2 2-2h4V8c0-1.1.9-2 2-2h4V4c0-1.1.9-2 2-2h4a2 2 0 0 1 2 2v16a2 2 0 0 1-2 2zM14 8h-4v12h4V8zm-6 4H4v8h4v-8zm8-8v16h4V4h-4z"/></svg>
                  <span class="font-semibold text-center text-lg px-2 py-1">Reports</span>
              </div>
              <div class="hover:bg-green-500 text-gray-100 px-2 py-2 flex rounded mb-2">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="fill-current" width="24" height="24"><path class="heroicon-ui" d="M20 6a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V6c0-1.1.9-2 2-2h7.41l2 2H20zM4 6v12h16V8h-7.41l-2-2H4z"/></svg>
                  <span class="font-semibold text-center text-lg px-2 py-1">Projects</span>
              </div>
              <div class="hover:bg-green-500 text-gray-100 px-2 py-2 flex rounded mb-2">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="fill-current" width="24" height="24"><path class="heroicon-ui" d="M17 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V6c0-1.1.9-2 2-2h2V3a1 1 0 1 1 2 0v1h6V3a1 1 0 0 1 2 0v1zm-2 2H9v1a1 1 0 1 1-2 0V6H5v4h14V6h-2v1a1 1 0 0 1-2 0V6zm4 6H5v8h14v-8z"/></svg>
                  <span class="font-semibold text-center text-lg px-2 py-1">Calendar</span>
              </div>
              <div class="hover:bg-green-500 text-gray-100 px-2 py-2 flex rounded mb-2">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="fill-current" width="24" height="24"><path class="heroicon-ui" d="M6 2h9a1 1 0 0 1 .7.3l4 4a1 1 0 0 1 .3.7v13a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V4c0-1.1.9-2 2-2zm9 2.41V7h2.59L15 4.41zM18 9h-3a2 2 0 0 1-2-2V4H6v16h12V9zm-2 7a1 1 0 0 1-1 1H9a1 1 0 0 1 0-2h6a1 1 0 0 1 1 1zm0-4a1 1 0 0 1-1 1H9a1 1 0 0 1 0-2h6a1 1 0 0 1 1 1zm-5-4a1 1 0 0 1-1 1H9a1 1 0 1 1 0-2h1a1 1 0 0 1 1 1z"/></svg>
                  <span class="font-semibold text-center text-lg px-2 py-1">Documents</span>
              </div>
              <div class="hover:bg-green-500 text-gray-100 px-2 py-2 flex rounded mb-2">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="fill-current" width="24" height="24"><path class="heroicon-ui" d="M20 22H4a2 2 0 0 1-2-2v-8c0-1.1.9-2 2-2h4V8c0-1.1.9-2 2-2h4V4c0-1.1.9-2 2-2h4a2 2 0 0 1 2 2v16a2 2 0 0 1-2 2zM14 8h-4v12h4V8zm-6 4H4v8h4v-8zm8-8v16h4V4h-4z"/></svg>
                  <span class="font-semibold text-center text-lg px-2 py-1">Reports</span>
              </div>
          </div>

          <div class="py-4 px-8 border-t px-2 border-green-500">
              <div class="flex">
                  <img class="h-10 w-10 rounded-lg origin-bottom-left transform -rotate-45 hover:rotate-0 transition duration-150 ease-in-out shadow-xl hover:shadow-orange-xl" src="/images/rix.jpg" alt="" />
                  <div class="flex-none flex flex-col justify-between px-4">
                      <div class="font-semibold text-green-100">
                          John Doe
                      </div>
                      <div class="py-2 text-green-200">
                          View Profile
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div class="min-h-full w-3/4 bg-white xl:overflow-y-auto">
          @include('layouts.navbar')
          <div class="px-10 py-8">
              <h1 class="text-3xl font-bold mb-4">Dashboard</h1>

              <div class="rounded border-dashed border-4 border-gray-300 w-full h-64 text-center justify-center">
                  <div class="px-16 py-16">
                      <img class="h-16 w-16 rounded origin-bottom-left transform -rotate-45 hover:rotate-0 transition duration-150 ease-in-out shadow-xl hover:shadow-orange-xl" src="/images/rix.jpg" alt="" />
                  </div>
              </div>
          </div>
      </div>
    </div>
@endsection
