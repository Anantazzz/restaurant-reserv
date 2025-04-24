<?php

namespace App\Livewire\Reservation;

use Livewire\Component;

class Form extends Component
{
    public $nama, $email, $no_hp, $tanggal, $waktu, $jumlah_orang, $catatan;

    public function submit()
    {
        // (Kalau ada database, kamu simpan data di sini)
        // Untuk sekarang langsung redirect saja
        
        return redirect()->route('reservation.status');
    }

    public function render()
    {
        return view('livewire.reservation.form');
    }
}
