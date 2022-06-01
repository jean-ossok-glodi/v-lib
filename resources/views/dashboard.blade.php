<x-app-layout>
    
    {{-- <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-10 lg:px-8">
            <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">
                <x-jet-welcome />
            </div>
        </div>
    </div> --}}
    @livewire('navigation-menu')        
    <div class="flex min-h-screen" x-data="{
        menu : [false, false, false, false, true, false],
        afficher(index){
            for(let i = 0; i < this.menu.length; i++){
                if(i == index) this.menu[i] = true
                else this.menu[i] = false
            }
        }
    }">
        <div class="p-5 bg-red-700" style="width:400px;">
            <div class="flex items-center justify-center ">
                <img src="{{asset('img/logo1.png')}}" alt="" srcset="" class=" w-60">
            </div>
            <div class="flex items-center justify-center py-2 text-white transition duration-200 transform border-b border-white cursor-pointer hover:text-gray-300" @click="afficher(0)">
                <div class="pr-3">
                    <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" /></svg>
                </div>
                <div class="flex-1">
                    <p class="text-xl">Dashboard</p>
                </div>
                <div>
                    <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                </div>
            </div>
            <div class="flex items-center justify-center py-2 text-white transition duration-200 transform border-b border-white cursor-pointer hover:text-gray-300" @click="afficher(1)">
                <div class="pr-3">
                    <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" /></svg>
                </div>
                <div class="flex-1">
                    <p class="text-xl">Utilisateurs</p>
                </div>
                <div>
                    <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                </div>
            </div>
            <div class="flex items-center justify-center py-2 text-white transition duration-200 transform border-b border-white cursor-pointer hover:text-gray-300" @click="afficher(2)">
                <div class="pr-3">
                    <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" /></svg>
                </div>
                <div class="flex-1">
                    <p class="text-xl">Domaine</p>
                </div>
                <div>
                    <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                </div>
            </div>
            <div class="flex items-center justify-center py-2 text-white transition duration-200 transform border-b border-white cursor-pointer hover:text-gray-300" @click="afficher(3)">
                <div class="pr-3">
                    <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" /></svg>
                </div>
                <div class="flex-1">
                    <p class="text-xl">Ouvrages</p>
                </div>
                <div>
                    <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                </div>
            </div>
            <div class="flex items-center justify-center py-2 text-white transition duration-200 transform border-b border-white cursor-pointer hover:text-gray-300" @click="afficher(4)">
                <div class="pr-3">
                    <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" /></svg>
                </div>
                <div class="flex-1">
                    <p class="text-xl">Commandes</p>
                </div>
                <div>
                    <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                </div>
            </div>
            <div class="flex items-center justify-center py-2 text-white transition duration-200 transform border-b border-white cursor-pointer hover:text-gray-300" @click="afficher(5)">
                <div class="pr-3">
                    <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" /></svg>
                </div>
                <div class="flex-1">
                    <p class="text-xl">Profile</p>
                </div>
                <div>
                    <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                </div>
            </div>
            <form method="POST" action="{{ route('logout') }}" x-data class="py-20">
                @csrf

                <a href="{{ route('logout') }}" @click.prevent="$root.submit();" class="flex flex-col items-center justify-center py-2 text-white transition duration-200 transform cursor-pointer hover:text-gray-300" @click="afficher(5)">
                    <div class="pr-3">
                        <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path></svg>
                    </div>
                    <div class="flex-1">
                        {{ __('Deconnexion') }}
                    </div>
                    
                </a>
            </form>
        </div>
        <div class="flex-1">
            <div x-show="menu[0]">
                <livewire:admin.v-dash>
            </div>
            <div x-show="menu[1]">
                <livewire:admin.v-users>
            </div>
            <div x-show="menu[2]">
                <livewire:admin.v-dom>
            </div>
            <div x-show="menu[3]">
                <livewire:admin.v-ouvr>
            </div>
            <div x-show="menu[4]">
                <livewire:admin.v-commande>
            </div>
            <div x-show="menu[5]">
                <livewire:admin.v-paramc>
            </div>
        </div>
    </div>
    
</x-app-layout>
