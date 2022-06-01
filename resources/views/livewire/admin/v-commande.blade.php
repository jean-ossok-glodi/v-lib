<div class="px-5">
    {{-- Nothing in the world is as soft and yielding as water. --}}
    <h1 class="py-3 text-2xl">Commandes des ouvrages</h1>
    <hr>
    <nav class="flex items-center justify-center gap-4 py-2">

    </nav>
    <div class="grid grid-cols-4 gap-4">
        {{-- Liste des commandes --}}
        <div class="grid grid-cols-2 col-span-3 gap-4">
            @foreach ($commandes as $com)    
            <div class="p-2 border bg-gray-50">
                <div class="flex items-center justify-between">
                    <div class="flex items-center justify-center">
                        <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 114 0v1m-4 0a2 2 0 104 0m-5 8a2 2 0 100-4 2 2 0 000 4zm0 0c1.306 0 2.417.835 2.83 2M9 14a3.001 3.001 0 00-2.83 2M15 11h3m-3 4h2" /></svg>

                    </div>
                    <p>User : Ossok dibakidi</p>
                </div>
                <hr>
                <div class="py-2">
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aut temporibus id suscipit molestiae iusto debitis dolore voluptate corporis sed at impedit tempora libero culpa atque, cum eos nihil sint. Eaque.</p>

                </div>
                <hr>
                <div class="flex items-center justify-end">
                    <button class="px-5 text-white bg-red-700">Traiter la commande</button>
                </div>
            </div>
            @endforeach
        </div>
        {{-- Traitement de la commande --}}
        <div class="">
            <div class="p-2 bg-gray-50">
                <h1>Traitement de la commande</h1>
                <hr>
                <div class="py-5">
                    <p><b>Commande de l'utilisateur : </b> Jean</p>
                    <p><b>Description :</b></p>
                    <p class="text-justify x">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores modi ab dolorum, doloremque, dolor suscipit quis veritatis officia beatae aperiam ipsa incidunt! Facere minima nisi quod accusantium velit quas alias?
                    </p>
                </div>
                <div class="py-10">
                    <h1 class="py-2 text-gray-500">Repondre au client</h1>
                    <textarea name="" id="" rows="5" class="w-full"></textarea>
                    <div class="flex items-center justify-end py-2">
                        <button class="px-2 text-white bg-red-700">
                            Envoyer
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
