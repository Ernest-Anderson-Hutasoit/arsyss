<?php

namespace App\Livewire;

use Livewire\Component;

class TambahPerkara extends Component
{
    public $nomor_register;
    public $nomor_sprindik;
    public $tipe;
    public $jenis;
    public $pasal_dakwaan;
    public $status;
    public $p16 = [];
    public $p16a = [];
    public $tersangka = [];

    public function render()
    {
        return view('livewire.tambah-perkara');
    }
}
