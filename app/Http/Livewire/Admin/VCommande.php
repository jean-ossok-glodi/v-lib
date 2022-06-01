<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class VCommande extends Component
{

    public $commandes = [1,2,3,3,3,3,3,3];
    public function render()
    {
        return view('livewire.admin.v-commande');
    }
}
