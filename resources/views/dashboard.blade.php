<x-app-layout>
    
    {{-- <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">
                <x-jet-welcome />
            </div>
        </div>
    </div> --}}
    @livewire('navigation-menu')        
    <div class="flex min-h-screen" x-data="{
        menu : [true, false, false, false, false, false],
        afficher(index){
            for(let i = 0; i < this.menu.length; i++){
                if(i == index) this.menu[i] = true
                else this.menu[i] = false
            }
        }
    }">
        <div class="p-5 bg-red-700" style="width:400px;">
            <div class="flex items-center justify-center py-2 text-white transition duration-200 transform cursor-pointer hover:text-gray-300" @click="afficher(0)">
                <div class="pr-3">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z"></path></svg>
                </div>
                <div class="flex-1">
                    <p class="text-xl">Dashboard</p>
                </div>
                <div>
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                </div>
            </div>
            <div class="flex items-center justify-center py-2 text-white transition duration-200 transform cursor-pointer hover:text-gray-300" @click="afficher(1)">
                <div class="pr-3">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z"></path></svg>
                </div>
                <div class="flex-1">
                    <p class="text-xl">Utilisateurs</p>
                </div>
                <div>
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                </div>
            </div>
            <div class="flex items-center justify-center py-2 text-white transition duration-200 transform cursor-pointer hover:text-gray-300" @click="afficher(2)">
                <div class="pr-3">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z"></path></svg>
                </div>
                <div class="flex-1">
                    <p class="text-xl">Domaine</p>
                </div>
                <div>
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                </div>
            </div>
            <div class="flex items-center justify-center py-2 text-white transition duration-200 transform cursor-pointer hover:text-gray-300" @click="afficher(3)">
                <div class="pr-3">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z"></path></svg>
                </div>
                <div class="flex-1">
                    <p class="text-xl">Ouvrages</p>
                </div>
                <div>
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                </div>
            </div>
            <div class="flex items-center justify-center py-2 text-white transition duration-200 transform cursor-pointer hover:text-gray-300" @click="afficher(4)">
                <div class="pr-3">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z"></path></svg>
                </div>
                <div class="flex-1">
                    <p class="text-xl">Commandes</p>
                </div>
                <div>
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                </div>
            </div>
            <div class="flex items-center justify-center py-2 text-white transition duration-200 transform cursor-pointer hover:text-gray-300" @click="afficher(5)">
                <div class="pr-3">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z"></path></svg>
                </div>
                <div class="flex-1">
                    <p class="text-xl">Profil</p>
                </div>
                <div>
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                </div>
            </div>
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
