<?php

namespace App\Livewire;

use Livewire\Component;

class TambahBarangbukti extends Component
{
    public $modalTambah = false;
    public $modalUbah = false;
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
    public $indexUbah=0;
    protected $listeners = ['simpanBarangbukti'];

    // public function mount()
    // {     
    //     // $this->fill([
    //     //     'barangbuktis' => collect([
    //     //         ['nama' => '', 'nomor_register' => '', 'tanggal' => '', 'jenis' => '', 'perkiraan' => 0, 'lokasi' => '', 'jumlah' => 0, 'jenis_satuan' => '']
    //     //     ])
    //     // ]);
    // }
    
    public function render()
    {
        return view('livewire.tambah-barangbukti');
    }

    public function bukaModalTambah()
    {
        // dd($this->barangbuktis);
        $this->modalTambah = true;
    }
    public function bukaModalUbah($index)
    {
        // dd($this->barangbuktis);
        $this->indexUbah = $index;

        $this->nama = $this->barangbuktis[$index]['nama'];
        $this->nomor_register = $this->barangbuktis[$index]['nomor_register'];
        $this->tanggal = $this->barangbuktis[$index]['tanggal'];
        $this->jenis = $this->barangbuktis[$index]['jenis'];
        $this->perkiraan = $this->barangbuktis[$index]['perkiraan'];
        $this->lokasi = $this->barangbuktis[$index]['lokasi'];
        $this->jumlah = $this->barangbuktis[$index]['jumlah'];
        $this->jenis_satuan = $this->barangbuktis[$index]['jenis_satuan'];

        $this->modalUbah = true;
    }

    public function tutupModal()
    {
        $this->modalTambah = false;
        $this->modalUbah = false;
    }

    public function simpanBarangbukti($barangbuktis = null)
    {
        // dd($this->nama);
        if($barangbuktis == null)
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
            $this->reset(
                [
                    'nama', 
                    'nomor_register',
                    'tanggal',
                    'jenis',
                    'perkiraan',
                    'lokasi',
                    'jumlah',
                    'jenis_satuan'
                ]
            );
        }
        else
        {
            $this->barangbuktis = $barangbuktis;
        }
        // dd($this->barangbuktis);
        $this->dispatch('tambahBarangbukti', $this->barangbuktis);
    }

    public function hapusBarangbukti($index)
    {
        unset($this->barangbuktis[$index]);
        $this->barangbuktis = array_values($this->barangbuktis);
        $this->i--;
        $this->dispatch('tambahBarangbukti', $this->barangbuktis);
    }

    public function ubahBarangbukti()
    {
        $this->barangbuktis[$this->indexUbah] = 
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
        $this->dispatch('tambahBarangbukti', $this->barangbuktis);
    }
}
