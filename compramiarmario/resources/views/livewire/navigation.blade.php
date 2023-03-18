

<header class="bg-red-200 sticky top-0" x-data="dropdown()">
    <div class="container flex items-center h-16">
        <a 
        x-on:click="show()" 
        class="text-white cursor-pointer">
            <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                <path class="inline-flex" stroke-linecap="round"
                    stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </a>
        <a href="#" class="mx-6">
            <x-application-mark class="block h-9 w-auto" />
        </a>

        @livewire('search')

        
                <!-- Settings Dropdown -->
                <div class="mx-6 relative">
                    @auth
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                                <button class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                                    <img class="h-8 w-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                                </button>
                        </x-slot>

                        <x-slot name="content">
                            <!-- Account Management -->
                            <div class="block px-4 py-2 text-xs text-gray-400">
                                {{ __('Manage Account') }}
                            </div>

                            <x-dropdown-link href="{{ route('profile.show') }}">
                                {{ __('Profile') }}
                            </x-dropdown-link>

                            <div class="border-t border-gray-200"></div>

                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}" x-data>
                                @csrf

                                <x-dropdown-link href="{{ route('logout') }}"
                                         @click.prevent="$root.submit();">
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>

                    @else 
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <i class="fas fa-user-circle text-white text-3xl cursor-pointer"></i>
                        </x-slot>
                        <x-slot name="content">
                            <x-dropdown-link href="{{ route('login') }}">
                                {{ __('Login') }}
                            </x-dropdown-link>
                            <x-dropdown-link href="{{ route('register') }}">
                                {{ __('Register') }}
                            </x-dropdown-link>
                        </x-slot>
                    </x-dropdown>
                    @endauth
                   
                </div>

        @livewire('dropdown-card')

    </div>

    <nav id="navigation-menu" 
     :class="{'block':open, 'hidden': !open}"
      class="bg-gray-500 bg-opacity-25 w-full absolute hidden">

        <div class="container h-full">
        <div x-on:click.away="close()"
            class="grid grid-cols-4 h-full relative">
                <div class="bg-white col-span-1">
                    <ul>
                        @foreach ($categories as $category)
                          <li class="navigation-link text-gray-500 hover:bg-red-200 hover:text-white" >
                            <a href="#" class="py-2 px-4 text-sm flex items-center">
                                <span class="flex justify-center w-9">
                                    {!!$category->icon!!}
                                </span>
                                {{$category->name}}
                            </a>
                            <div class="navigation-submenu bg-gray-100 absolute w-3/4 top-0 right-0 h-full hidden">
                                <x-navigation-subcategories :category="$category"/>
                            </div>
                          </li>  
                        @endforeach
                    </ul>
                </div>
                
                <div class="col-span-3 row-span-1 bg-gray-100">
                   <x-navigation-subcategories :category="$categories->first()"/>
                </div>
            </div>
        </div>
    </nav>
    
</header>
