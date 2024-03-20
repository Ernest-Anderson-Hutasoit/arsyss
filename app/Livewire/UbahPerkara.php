<?php

namespace App\Livewire;

use Livewire\Component;

class UbahPerkara extends Component
{
    public $modalData = true;
    public $selectedPerkaraIndex;
    public $inputPencarianPerkara;
    public $dataPerkaras;
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

    public function mount($perkara)
    {
        $perkara['jenis'] = json_decode($perkara['jenis'], true);
        
        $this->perkara = $perkara;
        // dd($this->perkara['jenis']);
        $this->p16 = $perkara['p16s'];
        $this->p16a = $perkara['p16as'];
        $this->tersangkas = $perkara['tersangkas'];
        $this->barangbuktis = $perkara['barangbuktis'];
        // $this->simpanBarangbukti($this->barangbuktis);
        // dd($this->barangbuktis);

        // dd($this->barangbuktis);
    }

    public function render()
    {   
        if(is_string($this->perkara['jenis']))
        {
            $this->perkara['jenis'] = json_decode($this->perkara['jenis'], true);
        }
        return view('livewire.ubah-perkara');
    }

    public function tambahJaksaP16()
    {
        $this->p16['jaksas']->push(['nama' => '', 'nip' => '']);
    }
    public function hapusJaksaP16($index)
    {
        $this->p16['jaksas']->forget($index);
        $this->p16['jaksas']->values();
    }

    public function tambahJaksaP16a()
    {
        $this->p16a['jaksas']->push(['nama' => '', 'nip' => '']);
    }
    public function hapusJaksaP16a($index)
    {
        $this->p16a['jaksas']->forget($index);
        $this->p16a['jaksas']->values();
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
        $this->perkara['jenis']->push('');
    }
    public function hapusJenis($index)
    {
        $this->perkara['jenis']->forget($index);
        $this->perkara['jenis']->values();
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

    public function ubahPerkara()
    {
        for($i = 0; $i < count($this->perkara['barangbuktis']); $i++)
        {
            $this->perkara['barangbuktis'][$i]['jenis'] = $this->barangbuktis[$i]['jenis'];
            $this->perkara['barangbuktis'][$i]['perkiraan'] = $this->barangbuktis[$i]['perkiraan'];
            $this->perkara['barangbuktis'][$i]['lokasi'] = $this->barangbuktis[$i]['lokasi'];
            $this->perkara['barangbuktis'][$i]['jumlah'] = $this->barangbuktis[$i]['jumlah'];
            $this->perkara['barangbuktis'][$i]['jenis_satuan'] = $this->barangbuktis[$i]['jenis_satuan'];
            
            $this->perkara['barangbuktis'][$i]->update();
        }
        
        return redirect()->route('perkara.index')->with('success','Perkara sukses diubah');
    }
}
