  <div class="absolute top-0 left-0 w-full h-full bg-black bg-opacity-50 z-50" x-show="open"
      x-transition:enter="transition ease-out duration-200" x-transition:enter-start="transform opacity-0 scale-95"
      x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75"
      x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95"
      @click="open = false">

      {{-- "main menu" in the center of the div --}}

      <div>MAIN MENU</div>


      {{-- aggiungi nel menu --}}
      <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
          <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
              {{ __('Dashboard') }}
          </x-nav-link>

          <x-nav-link :href="route('soci.index')" :active="request()->routeIs('members.index')">
              {{ __('Soci') }}
          </x-nav-link>

          <x-nav-link :href="route('news_eventi.index')" :active="request()->routeIs('posts.index')">
              {{ __('News e Eventi') }}
          </x-nav-link>

          <x-nav-link :href="route('gruppi_merceologici.index')" :active="request()->routeIs('gruppi_merceologici.index')">
              {{ __('Gruppi Merceologici') }}
          </x-nav-link>
      </div>


  </div>
