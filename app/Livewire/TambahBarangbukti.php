<?php

namespace App\Livewire;

use Livewire\Component;

class TambahBarangbukti extends Component
{
    public $isModalOpen = false;
    public $barangbuktis = [];
    public $nama;
    public $nomor_register;
    public $tanggal;
    public $jenis;
    public $perkiraan;
    public $lokasi;
    public $jumlah;
    public $jenis_satuan;
    public $i=0;

    public function mount()
    {     
        // $this->fill([
        //     'barangbuktis' => collect([
        //         ['nama' => '', 'nomor_register' => '', 'tanggal' => '', 'jenis' => '', 'perkiraan' => 0, 'lokasi' => '', 'jumlah' => 0, 'jenis_satuan' => '']
        //     ])
        // ]);
    }
    
    public function render()
    {
        return view('livewire.tambah-barangbukti');
    }

    public function openModal()
    {
        // dd($this->barangbuktis);
        $this->isModalOpen = true;
    }
    public function closeModal()
    {
        $this->isModalOpen = false;
    }

    public function simpanBarangbukti()
    {
        $this->barangbuktis[$this->i] = 
        [
            'nama' => $this->nama, 
            'nomor_register' => $this->nomor_register, 
            'tanggal' => $this->tanggal, 
            'jenis' => $this->jenis, 
            'perkiraan' => $this->perkiraan, 
            'lokasi' => $this->lokasi, 
            'jumlah' => $this->jumlah, 
            'jenis_satuan' => $this->jenis_satuan
        ];
        $this->i++;
        // dd($this->barangbuktis);
        $this->dispatch('tambahBarangbukti', $this->barangbuktis);
    }
}
