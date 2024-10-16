<nav class="bg-gray-800" x-data="{ open: false }">
 <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
     <div class="flex h-16 items-center justify-between">
         <div class="flex items-center">
             <div class="flex-shrink-0">
                 <img class="h-8 w-8" src="{{ asset('storage/img/indobinn.png') }}">
             </div>
             <div class="hidden md:block">
                 <div class="ml-10 flex items-baseline space-x-4">
                     <x-navbar.link href="{{route('contacts')}}">Contact</x-navbar.link>
                     <x-navbar.link href="{{route('login')}}">Login</x-navbar.link>
                     <x-navbar.link href="{{route('register')}}">Register</x-navbar.link>
                 </div>
             </div>
         </div>

         <div class="-mr-2 flex md:hidden">
             <!-- Mobile menu button -->
             <button @click="open = !open" type="button" class="inline-flex items-center justify-center rounded-md bg-gray-800 p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
                 <span class="sr-only">Open main menu</span>
                 <svg class="h-6 w-6" x-bind:class="{ 'hidden': open, 'block': !open }" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                 </svg>
                 <svg class="h-6 w-6" x-bind:class="{ 'block': open, 'hidden': !open }" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                 </svg>
             </button>
         </div>
     </div>
 </div>

 <!-- Mobile menu -->
 <div class="md:hidden" x-show="open" @click.outside="open = false" x-transition>
     <div class="space-y-1 px-2 pt-2 pb-3 sm:px-3">
         <x-navbar.dropdown-item href="{{route('contacts')}}">Contact</x-navbar.dropdown-item>
         <x-navbar.dropdown-item href="{{route('login')}}">Login</x-navbar.dropdown-item>
         <x-navbar.dropdown-item href="{{route('register')}}">Register</x-navbar.dropdown-item>
     </div>
 </div>
</nav>
