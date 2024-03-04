<?php

namespace App\Livewire;

use App\Models\Barangbukti;
use App\Models\Jaksa;
use App\Models\P16;
use App\Models\P16a;
use App\Models\Perkara;
use App\Models\Tersangka;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Livewire\Component;

class TambahPerkara extends Component
{   
    // public $isModalOpen = false;
    // public $nama;
    // public $nomor_register;
    // public $tanggal;
    // public $jenis;
    // public $perkiraan;
    // public $lokasi;
    // public $jumlah;
    // public $jenis_satuan;
    // public $i=0;
    public $suggestions;
    public $perkara;
    public $p16;
    public $p16a;
    public $barangbuktis;
    public $tersangkas;

    protected $listeners = ['tambahBarangbukti' => 'simpanBarangbukti'];
    
    protected $rules = [
        'perkara' => 'required',
        'p16' => 'required',
        'p16a' => 'required',
        'barangbuktis' => 'required',
        'tersangkas' => 'required',

        'perkara.*.jenis_pidana' => 'required',
        'perkara.*.nomor_register' => 'required',
        'perkara.*.nomor_sprindik' => 'required',
        'perkara.*.jenis' => 'required',
        'perkara.*.jenis.*' => 'required',
        'perkara.*.pasal_dakwaan' => 'required',


        'p16.*' => 'required',
        'p16a.*' => 'required',
        'barangbuktis.*' => 'required',
        'tersangkas.*' => 'required'
    ];

    public function mount()
    {     
        $this->fill([
            'perkara' => collect([
                ['jenis_pidana' => '', 'nomor_register' => '', 'nomor_sprindik' => '', 'jenis' => collect(['']), 'pasal_dakwaan' => '', 'status' => '']
            ]),
            // 'barangbuktis' => collect([
            //     ['nama' => '', 'nomor_register' => '', 'tanggal' => '', 'jenis' => '', 'perkiraan' => '', 'lokasi' => '', 'jumlah' => '', 'jenis_satuan' => '']
            // ]),
            'p16' => collect([
                ['nomor' => '', 'tanggal' => '', 'gambar' => '', 'jaksas' => collect([['nama' => '', 'nip' => '']])]
            ]),
            'p16a' => collect([
                ['nomor' => '', 'tanggal' => '', 'gambar' => '', 'jaksas' => collect([['nama' => '', 'nip' => '']])]
            ]),
            'tersangkas' => collect([
                ['nama' => '', 'alamat' => '', 'gambar' => '']
            ])
        ]);
    }
    public function render()
    {
        return view('livewire.tambah-perkara');
    }
    
    public function updated($perkara)
    {
        if ($this->perkara[0]['nomor_register'] !== null && !$this->isOptionSelected($this->perkara[0]['nomor_register'])) {
            $this->fetchSuggestions($this->perkara[0]['nomor_register']);
        }
        else{
            $this->suggestions = [];
        }

        // dd($this->suggestions[0]['nomor_register']);
        // dd($this->perkara[0]['nomor_sprindik']);
    }

    public function fetchSuggestions($nomorRegister)
    {
        $response = Http::get('http://127.0.0.1:8000/api/perkaras', [
            'nomor_register' => $nomorRegister
        ]);
        
        $response = json_decode($response, true);
        // $response['data'][2]['jenis'] = array($response['data'][2]['jenis']);
        // dd($response['data'][2]['jenis']);

        for($i = 0; $i < count($response['data']); $i++)
        {
            $response['data'][$i]['jenis'] = json_decode($response['data'][$i]['jenis'], true);
        }
        
        $data = $response['data'];

        $this->suggestions = $data;
        // dd($this->suggestions);
    }
    private function isOptionSelected($selectedNomorRegister)
    {
        if($this->suggestions == null)
        {
            return false;
        }
        else
        {
            foreach ($this->suggestions as $index => $suggestion) {
                if ($suggestion['nomor_register'] === $selectedNomorRegister) {
                    $this->isiForm($index);
                    return true;
                }
            }   
        }
    }

    public function isiForm($index)
    {
        // dd($this->suggestions[$index]['jenis']);
        // dd($this->perkara[0]);
        // dd($this->p16[0]);
        // dd($this->tersangkas);
        // dd($this->barangbuktis);
        
        $this->perkara[0] = [
            'jenis_pidana'=> $this->suggestions[$index]['jenis_pidana'],
            'nomor_register'=> $this->suggestions[$index]['nomor_register'],
            'nomor_sprindik'=> $this->suggestions[$index]['nomor_sprindik'],
            'jenis'=> collect($this->suggestions[$index]['jenis']),
            'pasal_dakwaan'=> $this->suggestions[$index]['pasal_dakwaan']
        ];

        $this->p16[0] = [
            'nomor'=> $this->suggestions[$index]['p16s']['nomor'],
            'tanggal'=> $this->suggestions[$index]['p16s']['tanggal'],
            'jaksas'=> collect($this->suggestions[$index]['p16s']['jaksas']),
        ];

        $this->p16a[0] = [
            'nomor'=> $this->suggestions[$index]['p16as']['nomor'],
            'tanggal'=> $this->suggestions[$index]['p16as']['tanggal'],
            'jaksas'=> collect($this->suggestions[$index]['p16as']['jaksas']),
        ];

        $this->tersangkas = collect($this->suggestions[$index]['tersangkas']);

        $this->barangbuktis = $this->suggestions[$index]['barangbuktis'];
        // dd($this->tersangkas);
        // dd($this->barangbuktis);
        $this->dispatch('simpanBarangbukti', $this->barangbuktis);
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

    public function simpanBarangbukti($barangbuktis)
    {
        $this->barangbuktis = collect($barangbuktis);
        
        // if(is_null($this->barangbuktis))
        // {
        //     $this->barangbuktis = collect($barangbuktis);
        // }
        // else
        // {
        //     $this->barangbuktis->push($barangbuktis);
        // }
    }

    public function simpanPerkara()
    {
        $this->validate();
        // dd($this->barangbuktis);

        // Membuat dan memasukkan data perkara ke database
        $perkara = Perkara::create([
            'jenis_pidana'=> $this->perkara[0]['jenis_pidana'],
            'nomor_register'=> $this->perkara[0]['nomor_register'],
            'nomor_sprindik'=> $this->perkara[0]['nomor_sprindik'],
            'jenis'=> $this->perkara[0]['jenis'],
            'pasal_dakwaan'=> $this->perkara[0]['pasal_dakwaan']
        ]);

        // Membuat dan memasukkan data tersangka ke database
        for($i = 0; $i < count($this->tersangkas); $i++)
        {
            $tersangka = Tersangka::create([
                'nama'=> $this->tersangkas[0]['nama'],
                'alamat'=> $this->tersangkas[0]['alamat'],
                // 'gambar'=> $this->tersangkas[0]['gambar'],
            ]);

            $perkara->tersangkas()->attach($tersangka->id);
        }

        // Membuat dan memasukkan data p16 beserta jaksa ke database
        $p16 = $perkara->p16s()->create([
            'nomor'=> $this->p16[0]['nomor'],
            'tanggal'=> $this->p16[0]['tanggal']
            // 'gambar'=> $this->p16[0]['gambar']
        ]);
        for($i = 0; $i < count($this->p16[0]['jaksas']); $i++)
        {
            $jaksaP16 = Jaksa::create([
                'nama'=> $this->p16[0]['jaksas'][$i]['nama'],
                'nip'=> $this->p16[0]['jaksas'][$i]['nip']
            ]);

            $p16->jaksas()->attach($jaksaP16->id);
        }
        
        // Membuat dan memasukkan data p16a beserta jaksa ke database
        $p16a = $perkara->p16as()->create([
            'nomor'=> $this->p16a[0]['nomor'],
            'tanggal'=> $this->p16a[0]['tanggal']
            // 'gambar'=> $this->p16[0]['gambar']
        ]);
        for($i = 0; $i < count($this->p16a[0]['jaksas']); $i++)
        {
            $jaksaP16a = Jaksa::create([
                'nama'=> $this->p16a[0]['jaksas'][$i]['nama'],
                'nip'=> $this->p16a[0]['jaksas'][$i]['nip']
            ]);

            $p16a->jaksas()->attach($jaksaP16a->id);
        }

        // Membuat dan memasukkan data barangbukti ke database
        for($i = 0; $i < count($this->barangbuktis); $i++)
        {
            $barangbuktis = $perkara->barangbuktis()->create([
                'nama'=> $this->barangbuktis[$i]['nama'],
                'nomor_register'=> $this->barangbuktis[$i]['nomor_register'],
                'tanggal'=> $this->barangbuktis[$i]['tanggal'],
                'jenis'=> $this->barangbuktis[$i]['jenis'],
                'perkiraan'=> $this->barangbuktis[$i]['perkiraan'],
                'lokasi'=> $this->barangbuktis[$i]['lokasi'],
                'jumlah'=> $this->barangbuktis[$i]['jumlah'],
                'jenis_satuan'=> $this->barangbuktis[$i]['jenis_satuan']
                // 'gambar'=> $this->p16[0]['gambar']
            ]);
        }
        
        return redirect()->route('perkara.index');
    }
}
