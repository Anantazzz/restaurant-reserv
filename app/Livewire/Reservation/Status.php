<?php

namespace App\Livewire\Reservation;

use Livewire\Component;

class Status extends Component
{
    public function render()
    {
        // Ambil data reservasi dari session
        $reservation = session('reservation');

        return view('livewire.reservation.status', compact('reservation'));
    }
}

