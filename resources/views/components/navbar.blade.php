<nav class="bg-yellow-500" x-data="{ isOpen: false }">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
      <div class="flex h-16 items-center justify-between">
        <div class="flex items-center">
          <div class="flex-shrink-0">
          <img class="h-12 w-12" src="{{ asset('img/esdm.png') }}" alt="Your Company">
          </div>
          <div class="hidden md:block">
            <div class="ml-10 flex items-baseline space-x-4 text-black">
              <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
              <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
              <x-nav-link href="/posts" :active="request()->is('posts')">About</x-nav-link>
              <x-nav-link href="/schedule" :active="request()->is('schedule')">Schedule</x-nav-link>
              <x-nav-link href="/contact" :active="request()->is('contact')">Contact Us</x-nav-link>
              <x-nav-link href="/roadToHC" :active="request()->is('roadToHC')">Road To HC </x-nav-link>
              <x-nav-link href="{{ route('admin.login') }}" :active="request()->is('admin/login')">Login Admin </x-nav-link>
              
            </div>
          </div>
        </div>
        
        <div class="-mr-2 flex md:hidden">
          <!-- Mobile menu button -->
          <button type="button" @click="isOpen = !isOpen" class="relative inline-flex items-center justify-center rounded-md bg-yellow-500 p-2 text-black hover:bg-yellow-600 hover:text-white focus:outline-none focus:ring-2 " aria-controls="mobile-menu" aria-expanded="false">
            <span class="absolute -inset-0.5"></span>
            <span class="sr-only">Open main menu</span>
            <!-- Menu open: "hidden", Menu closed: "block" -->
            <svg :class="{'hidden': isOpen, 'block': !isOpen }" class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
            <!-- Menu open: "block", Menu closed: "hidden" -->
            <svg :class="{'block': isOpen, 'hidden': !isOpen }" class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>
        </div>
      </div>
    </div>

    <!-- Mobile menu, show/hide based on menu state. -->
    <div x-show="isOpen" class="md:hidden" id="mobile-menu">
      <div class="space-y-1 px-2 pb-3 pt-2 sm:px-3 font-bold">
        <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
        <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
              <x-nav-link href="/posts" :active="request()->is('posts')">About</x-nav-link>
              <x-nav-link href="/schedule" :active="request()->is('schedule')">Schedule</x-nav-link>
              <x-nav-link href="/contact" :active="request()->is('contact')">Contact Us</x-nav-link>
              <x-nav-link href="/roadToHC" :active="request()->is('roadToHC')">Road To HC </x-nav-link>
              <x-nav-link href="{{ route('admin.login') }}" :active="request()->is('admin/login')">Login Admin </x-nav-link>
            </div>
      </div>
    </div>
  </nav>