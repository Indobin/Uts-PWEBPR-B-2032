
<nav class="bg-gray-800 fixed left-0 right-0 z-50">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
      <div class="flex h-16 items-center justify-between ">
        <div class="flex items-center">
          <div class="flex-shrink-0">
            <img class="h-8 w-8" src="{{ asset('storage/img/indobinn.png') }}" alt="Logo">
          </div>
          <div class="hidden md:flex space-x-4 ml-10">
            <!-- Dropdown menu for contacts -->
            <a href="{{route('Home')}}" class="text-white hover:bg-gray-700 px-3 py-2 rounded-md text-sm font-medium {{ request()->is('Home') ? 'bg-gray-900 text-white' : '' }}">Home</a>
            <div class="relative">
              <button id="dropdownButton" data-dropdown-toggle="dropdown" class="text-white hover:bg-gray-700 px-3 py-2 rounded-md text-sm font-medium">
                Contact
              </button>
              <!-- Dropdown menu -->
              <div id="dropdown" class="hidden z-10 w-44 bg-white divide-y divide-gray-100 rounded-lg shadow">
                <ul class="py-1 text-sm text-gray-700" aria-labelledby="dropdownButton">
                  <li>
                    <a href="{{route('Contact/Mahasiswa')}}" class="block px-4 py-2 hover:bg-gray-100 {{ request()->is('mahasiswa') ? 'bg-gray-900 text-white' : '' }}">Mahasiswa</a>
                  </li>
                  <li>
                    <a href="{{route('Contact/Dosen')}}" class="block px-4 py-2 hover:bg-gray-100 {{ request()->is('dosen') ? 'bg-gray-900 text-white' : '' }}">Dosen</a>
                  </li>
                </ul>
              </div>
            </div>
  
            <a href="{{route('login')}}" class="text-white hover:bg-gray-700 px-3 py-2 rounded-md text-sm font-medium {{ request()->is('login') ? 'bg-gray-900 text-white' : '' }}">Login</a>
            <a href="{{route('register')}}" class="text-white hover:bg-gray-700 px-3 py-2 rounded-md text-sm font-medium {{ request()->is('register') ? 'bg-gray-900 text-white' : '' }}">Register</a>
          </div>
        </div>
        <!-- Mobile menu button -->
        <div class="-mr-2 flex md:hidden">
          <button data-collapse-toggle="mobile-menu" type="button" class="inline-flex items-center justify-center rounded-md bg-gray-800 p-2 text-gray-400 hover:bg-gray-700 hover:text-white">
            <span class="sr-only">Open main menu</span>
            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
            </svg>
          </button>
        </div>
      </div>
    </div>
  
    <!-- Mobile menu -->
    <div class="md:hidden" id="mobile-menu">
      <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
        
        <a href="{{route('Home')}}" class="block text-white px-3 py-2 rounded-md text-sm font-medium hover:bg-gray-700 {{ request()->is('Home') ? 'bg-gray-900 text-white' : '' }}">Home</a>
        <button id="dropdownMobileButton" data-dropdown-toggle="dropdownMobile" class="text-white block w-full text-left px-3 py-2 rounded-md text-sm font-medium hover:bg-gray-700">Contact</button>
        <!-- Mobile dropdown -->
        <div id="dropdownMobile" class="hidden z-10 w-full bg-white divide-y divide-gray-100 rounded-lg shadow">
          <ul class="py-1 text-sm text-gray-700" aria-labelledby="dropdownMobileButton">
            <li>
              <a href="{{route('Contact/Mahasiswa')}}" class="block px-4 py-2 hover:bg-gray-100 {{ request()->is('mahasiswa') ? 'bg-gray-900 text-white' : '' }}">Mahasiswa</a>
            </li>
            <li>
              <a href="{{route('Contact/Dosen')}}" class="block px-4 py-2 hover:bg-gray-100 {{ request()->is('dosen') ? 'bg-gray-900 text-white' : '' }}">Dosen</a>
            </li>
          </ul>
        </div>
        <a href="{{route('login')}}" class="block text-white px-3 py-2 rounded-md text-sm font-medium hover:bg-gray-700 {{ request()->is('login') ? 'bg-gray-900 text-white' : '' }}">Login</a>
        <a href="{{route('register')}}" class="block text-white px-3 py-2 rounded-md text-sm font-medium hover:bg-gray-700 {{ request()->is('register') ? 'bg-gray-900 text-white' : '' }}">Register</a>
      </div>
    </div>
  </nav>
  
  <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>