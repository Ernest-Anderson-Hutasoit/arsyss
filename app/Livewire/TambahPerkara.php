<?php

namespace App\Livewire;

use App\Models\Barangbukti;
use App\Models\Jaksa;
use App\Models\P16;
use App\Models\P16a;
use App\Models\Perkara;
use App\Models\Tersangka;
use Illuminate\Support\Facades\Log;
use Livewire\Component;

class TambahPerkara extends Component
{   
    public $perkara;
    public $p16;
    public $p16a;
    public $barangbuktis;
    // public $p16_jaksas;
    // public $p16a_jaksas;
    public $tersangkas;
    
    public function mount()
    {     
        $this->fill([
            'perkara' => collect([
                ['jenis_pidana' => '', 'nomor_register' => '', 'nomor_sprindik' => '', 'jenis' => collect(['']), 'pasal_dakwaan' => '', 'status' => '']
            ]),
            'barangbuktis' => collect([
                ['nama' => '', 'nomor_register' => '', 'tanggal' => '', 'perkiraan' => '', 'lokasi' => '', 'jumlah' => '', 'jenis_satuan' => '']
            ]),
            'p16' => collect([
                ['nomor' => '', 'tanggal' => '', 'gambar' => '', 'jaksas' => collect([['nama' => '', 'nip' => '']])]
            ]),
            'p16a' => collect([
                ['nomor' => '', 'tanggal' => '', 'gambar' => '', 'jaksas' => collect([['nama' => '', 'nip' => '']])]
            ]),
            // 'p16_jaksas' => collect([
            //     ['nama' => '', 'nip' => '']
            // ]),
            // 'p16a_jaksas' => collect([
            //     ['nama' => '', 'nip' => '']
            // ]),
            'tersangkas' => collect([
                ['nama' => '', 'alamat' => '', 'gambar' => '']
            ])
        ]);
    }
    public function render()
    {
        return view('livewire.tambah-perkara');
    }
    
    public function tambahJaksaP16()
    {
        $this->p16[0]['jaksas']->push(['nama' => '', 'nip' => '']);
    }
    public function hapusJaksaP16($index)
    {
        $this->p16[0]['jaksas']->forget($index);
        $this->p16[0]['jaksas']->values();
    }

    public function tambahJaksaP16a()
    {
        $this->p16a[0]['jaksas']->push(['nama' => '', 'nip' => '']);
    }
    public function hapusJaksaP16a($index)
    {
        $this->p16a[0]['jaksas']->forget($index);
        $this->p16a[0]['jaksas']->values();
    }

    public function tambahTersangka()
    {
        $this->tersangkas->push(['nama' => '', 'alamat' => '', 'gambar' => '']);
    }
    public function hapusTersangka($index)
    {
        $this->tersangkas->forget($index);
        $this->tersangkas->values();
    }

    public function tambahJenis()
    {
        $this->perkara[0]['jenis']->push('');
    }
    public function hapusJenis($index)
    {
        $this->perkara[0]['jenis']->forget($index);
        $this->perkara[0]['jenis']->values();
    }

    public function simpanPerkara()
    {
        // $perkara = Perkara::create([
        //     'jenis_pidana'=> $this->perkara[0]['jenis_pidana'],
        //     'nomor_register'=> $this->perkara[0]['nomor_register'],
        //     'nomor_sprindik'=> $this->perkara[0]['nomor_sprindik'],
        //     'jenis'=> $this->perkara[0]['jenis'],
        //     'pasal_dakwaan'=> $this->perkara[0]['pasal_dakwaan']
        // ]);


        // $p16 = $perkara->p16s()->create([
        //     'nomor'=> $this->p16[0]['nomor'],
        //     'tanggal'=> $this->perkara[0]['tanggal'],
        //     'gambar'=> $this->perkara[0]['gambar']
        // ])->jaksas()->createMany();
        
        dd($this->tersangkas);
        // dd($this->tersangkas[0]);

        // Poll::create([
        //     'title'=> $this->title,
        // ])->options()->createMany(
        //     collect($this->options)->map(fn($option) => ['name' => $option])->all()
        // );
        
        // $this->reset(['perkara', 'p16', 'p16a', 'barangbuktis', 'tersangkas']);
    }
}
