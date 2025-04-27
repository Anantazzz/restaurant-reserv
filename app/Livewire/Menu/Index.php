<?php

namespace App\Livewire\Menu;

use App\Models\Menu;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        $menus = Menu::all();

        // Kirim ke view
        return view('livewire.menu.index', ['menus' => $menus]);
    }
}
