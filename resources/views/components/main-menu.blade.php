  <div class="absolute top-0 left-0 w-full h-full bg-black bg-opacity-50 z-50" x-show="open"
      x-transition:enter="transition ease-out duration-200" x-transition:enter-start="transform opacity-0 scale-95"
      x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75"
      x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95"
      x-on:click="open = false">

      {{-- "main menu" in the center of the div --}}

      <div>MAIN MENU</div>

      {{-- aggiungi nel menu --}}
      <div class="space-x-8 max-w-screen-lg mx-auto flex bg-white p-8">

          {{-- Rendi dinamico --}}
          <x-nav-link :href="route('index')" :active="request()->routeIs('index')">
              {{ __('Index') }}
          </x-nav-link>

          <x-nav-link :href="route('soci.index')" :active="request()->routeIs('soci.*')">
              {{ __('Soci') }}
          </x-nav-link>

          <x-nav-link :href="route('news_eventi.index')" :active="request()->routeIs('news_eventi.*')">
              {{ __('News e Eventi') }}
          </x-nav-link>

          <x-nav-link :href="route('gruppi_merceologici.index')" :active="request()->routeIs('gruppi_merceologici.*')">
              {{ __('Gruppi Merceologici') }}
          </x-nav-link>

          @if (Route::has('login'))
              @auth
                  <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                      {{ __('Dashboard') }}
                  </x-nav-link>

                  <form method="POST" action="{{ route('logout') }}">
                      @csrf
                      <a href="{{ route('logout') }}" class="text-sm text-gray-700 dark:text-gray-500 underline"
                          onclick="event.preventDefault(); this.closest('form').submit();">
                          {{ __('Log Out') }}
                      </a>
                  </form>
              @else
                  <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                  @if (Route::has('register'))
                      <a href="{{ route('register') }}"
                          class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                  @endif

              @endauth
          @endif

      </div>


  </div>
