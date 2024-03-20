<div>
    <div class="flex bg-gray-300 mb-4 px-2 py-2">
        <svg class="h-6 w-6 text-black" viewBox="0 0 24 24" fill="none" 
            stroke="currentColor" stroke-width="2" stroke-linecap="round"  
            stroke-linejoin="round">  
            <path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"></path> 
            <path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"></path>
        </svg>
        <h3 class="px-2 text-gray-700">Ubah Perkara</h3>
    </div>

    <form wire:submit.prevent="ubahPerkara">
        @csrf
        
        <div class="bg-gray-300 mx-8 mb-4 p-6 rounded shadow">
            <a href="{{route('perkara.index')}}" class="px-3 py-2 bg-yellow-400 hover:bg-yellow-500 text-white font-medium rounded">Daftar Perkara</a>
            <!-- <a href="{{route('perkara.tambah')}}" class="px-3 py-2 bg-yellow-400 hover:bg-yellow-500 text-white font-medium rounded">Tambah Perkara</a>
            <a href="{{route('perkara.tambah')}}" class="px-3 py-2 bg-yellow-400 hover:bg-yellow-500 text-white font-medium rounded">Tambah Perkara (CMS)</a> -->
            <!-- <button class="px-3 py-2 bg-gray-400 hover:bg-gray-500 text-white font-medium rounded">Daftar Perkara</button>
            <button class="px-3 py-2 bg-yellow-400 hover:bg-yellow-500 text-white font-medium rounded">Tambah Perkara</button> -->
            
            <div class="bg-white rounded shadow mt-4">
                <div>
                    <h2 class="text-2xl font-medium pl-6 pr-6 pt-1 pb-1 bg-yellow-200">Data Perkara</h2>
                </div>
                <div class="mt-4 pl-6 pr-6 pb-6">
                    <div class="flex flex-wrap gap-2">
                        <div class="grid grid-cols-8 gap-6">
                            <div class="flex items-center">
                                <label class="text-sm text-gray-700">Satker</label>
                            </div>
                            <div class="flex items-center col-span-3">
                                <input
                                    class="border border-solid border-black bg-gray-200 focus:border-red-400 focus:bg-white mt-1 w-full"
                                    type="text" value="KEJAKSAAN NEGERI BANGGAI" disabled />
                            </div>
                            <div class="flex items-center">
                                <label class="text-sm text-gray-700">Jenis Pidana</label>
                            </div>
                            <div class="flex items-center col-span-3">
                                <select wire:model="perkara.jenis_pidana" class="bg-gray-200 border border-solid border-black focus:border-indigo-400 focus:shadow-none focus:bg-white mt-1 block w-full" name="jenis-pidana" disabled>
                                    @if ($perkara['jenis_pidana'] == "PIDUM")
                                        <option value="PIDUM" selected>PIDUM</option>
                                    @elseif ($perkara['jenis_pidana'] == "PIDSUS")
                                        <option value="PIDSUS" selected>PIDSUS</option>
                                    @else
                                        <option selected>--Jenis Pidana--</option>
                                        <option value="PIDUM" selected>PIDUM</option>
                                        <option value="PIDSUS" selected>PIDSUS</option>
                                    @endif                                                                      
                                </select>
                            </div>
                            <div class="flex items-center">
                                <label class="text-sm text-gray-700">No. Register Perkara</label>
                            </div>
                            <div class="flex items-center col-span-3">
                                <input
                                    value="{{$perkara['nomor_register']}}"
                                    class="bg-gray-200 border border-solid border-black focus:border-red-400 focus:bg-white mt-1 w-full"
                                    type="text" required disabled />
                            </div>
                            <div class="flex items-center">
                                <label class="text-sm text-gray-700">No. Sprindik</label>
                            </div>
                            <div class="flex items-center col-span-3">
                                <input
                                    value="{{$perkara['nomor_sprindik']}}"
                                    class="bg-gray-200 border border-solid border-black focus:border-red-400 focus:bg-white mt-1 w-full"
                                    type="text" required disabled />
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded shadow mt-4">
                <div>
                    <h2 class="text-2xl font-medium pl-6 pr-6 pt-1 pb-1 bg-yellow-200">Detail P16</h2>
                </div>
                <div class="mt-4 pl-6 pr-6">
                    <div class="mt-4">
                        <div class="grid grid-cols-8 gap-6">
                            <div class="flex items-center">
                                <label class="text-sm text-gray-700">Nomor</label>
                            </div>
                            <div class="flex items-center col-span-3">
                                <input
                                    value="{{$p16['nomor']}}"
                                    class="bg-gray-200 border border-solid border-black focus:border-red-400 focus:bg-white mt-1 w-full"
                                    type="text" required disabled />
                            </div>
                            <div class="flex items-center">
                                <label class="text-sm text-gray-700">Tanggal</label>
                            </div>
                            <div class="flex items-center col-span-3">
                                <input
                                    value="{{$p16['tanggal']}}"
                                    class="bg-gray-200 border border-solid border-black focus:border-red-400 focus:bg-white mt-1 w-full"
                                    type="date" required disabled/>
                            </div>
                            <div class="flex items-center">
                                <label class="text-sm text-gray-700">Status Perkara</label>
                            </div>
                            <div class="flex items-center col-span-3">
                                <input 
                                    class="border border-solid border-black bg-gray-200 focus:border-red-400 focus:bg-white mt-1 w-full"
                                    type="text" value="Ditingkatkan ke Penuntutan" disabled />
                            </div>
                            <div class="flex items-center">
                                <label class="text-sm text-gray-700">Upload File</label>
                            </div>
                            <div class="flex items-center col-span-3">
                                <input wire:model="p16.gambar"
                                    class="border border-solid border-black focus:border-red-400 focus:bg-white mt-1 w-full"
                                    type="file" />
                            </div>
                        </div>
                    </div>
                </div>

                <hr class="border-1 border-black my-4 mx-6" />

                <div class="pl-6 pr-6 pb-6">
                    <button wire:click.prevent="tambahJaksaP16" class="px-3 py-2 bg-gray-400 hover:bg-gray-500 text-white font-medium rounded" disabled>Tambah Jaksa</button>
                    
                    @foreach ($p16['jaksas'] as $index => $jaksa)
                        <div class="mt-4">
                            <div class="grid grid-cols-9 gap-6">
                                <div class="flex items-center">
                                    <label class="text-sm text-gray-700">Nama Jaksa</label>
                                </div>
                                <div class="flex items-center col-span-3">
                                    <input
                                        value="{{$p16['jaksas'][$index]['nama']}}"
                                        class="bg-gray-200 border border-solid border-black focus:border-red-400 focus:bg-white mt-1 w-full"
                                        type="text" disabled />
                                </div>
                                <div class="flex items-center">
                                    <label class="text-sm text-gray-700">NIP Jaksa</label>
                                </div>
                                <div class="flex items-center col-span-3">
                                    <input
                                        value="{{$p16['jaksas'][$index]['nip']}}"
                                        class="bg-gray-200 border border-solid border-black focus:border-red-400 focus:bg-white mt-1 w-full"
                                        type="text" required disabled />
                                </div>
                                <div class="flex items-center">
                                    <button wire:click.prevent="hapusJaksaP16({{$index}})" class="px-3 py-2 bg-gray-400 hover:bg-gray-500 text-white font-medium rounded w-full" disabled>Hapus</button>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="bg-white rounded shadow mt-4">
                <div>
                    <h2 class="text-2xl font-medium pl-6 pr-6 pt-1 pb-1 bg-yellow-200">Detail P16a</h2>
                </div>
                <div class="mt-4 pl-6 pr-6">
                    <div class="mt-4">
                        <div class="grid grid-cols-8 gap-6">
                            <div class="flex items-center">
                                <label class="text-sm text-gray-700">Nomor</label>
                            </div>
                            <div class="flex items-center col-span-3">
                                <input
                                    value="{{$p16a['nomor']}}"
                                    class="bg-gray-200 border border-solid border-black focus:border-red-400 focus:bg-white mt-1 w-full"
                                    type="text" required disabled />
                            </div>
                            <div class="flex items-center">
                                <label class="text-sm text-gray-700">Tanggal</label>
                            </div>
                            <div class="flex items-center col-span-3">
                                <input
                                    value="{{$p16a['tanggal']}}"
                                    class="bg-gray-200 border border-solid border-black focus:border-red-400 focus:bg-white mt-1 w-full"
                                    type="date" required disabled />
                            </div>
                            <div class="flex items-center">
                                <label class="text-sm text-gray-700">Status Perkara</label>
                            </div>
                            <div class="flex items-center col-span-3">
                                <input
                                    class="border border-solid border-black bg-gray-200 focus:border-red-400 focus:bg-white mt-1 w-full"
                                    type="text" value="Ditingkatkan ke Penuntutan" disabled />
                            </div>
                            <div class="flex items-center">
                                <label class="text-sm text-gray-700">Upload File</label>
                            </div>
                            <div class="flex items-center col-span-3">
                                <input wire:model="p16a.gambar"
                                    class="border border-solid border-black focus:border-red-400 focus:bg-white mt-1 w-full"
                                    type="file" />
                            </div>
                        </div>
                    </div>
                </div>

                <hr class="border-1 border-black my-4 mx-6" />

                <div class="pl-6 pr-6 pb-6">
                    <button wire:click.prevent="tambahJaksaP16a" class="px-3 py-2 bg-gray-400 hover:bg-gray-500 text-white font-medium rounded" disabled>Tambah Jaksa</button>
                    
                    @foreach ( $p16a['jaksas'] as $index => $jaksa )
                    <div class="mt-4">
                        <div class="grid grid-cols-9 gap-6">
                            <div class="flex items-center">
                                <label class="text-sm text-gray-700">Nama Jaksa</label>
                            </div>
                            <div class="flex items-center col-span-3">
                                <input
                                    value="{{$p16a['jaksas'][$index]['nama']}}"
                                    class="bg-gray-200 border border-solid border-black focus:border-red-400 focus:bg-white mt-1 w-full"
                                    type="text" required disabled />
                            </div>
                            <div class="flex items-center">
                                <label class="text-sm text-gray-700">NIP Jaksa</label>
                            </div>
                            <div class="flex items-center col-span-3">
                                <input
                                    value="{{$p16a['jaksas'][$index]['nama']}}"
                                    class="bg-gray-200 border border-solid border-black focus:border-red-400 focus:bg-white mt-1 w-full"
                                    type="text" required disabled />
                            </div>
                            <div class="flex items-center">
                                <button wire:click.prevent="hapusJaksaP16a({{$index}})" class="px-3 py-2 bg-gray-400 hover:bg-gray-500 text-white font-medium rounded w-full" disabled>Hapus</button>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            <div class="bg-white rounded shadow mt-4">
                <div>
                    <h2 class="text-2xl font-medium pl-6 pr-6 pt-1 pb-1 bg-yellow-200">Data Tersangka</h2>
                </div>

                <div class="pl-6 pr-6 pb-6 my-4">
                    <button wire:click.prevent="tambahTersangka" class="px-3 py-2 bg-gray-400 hover:bg-gray-500 text-white font-medium rounded" disabled>Tambah</button>
                    
                    @foreach ($tersangkas as $index => $tersangka)
                    <div class="mt-4">
                        <div class="grid grid-cols-8 gap-6 grid-parent">
                            <div class="col-span-7 w-full">
                                <div class="grid grid-cols-7 grid-child">
                                    <div class="col-span-1">
                                        <label class="text-sm text-gray-700">Nama {{$index + 1}}</label>
                                    </div>
                                    <div class="col-span-6">
                                        <input
                                            value="{{$tersangkas[$index]['nama']}}"
                                            class="bg-gray-200 border border-solid border-black focus:border-red-400 focus:bg-white mt-1 w-full"
                                            type="text" required disabled />
                                    </div>
                                    <div class="col-span-1">
                                        <label class="text-sm text-gray-700">Alamat {{$index + 1}}</label>
                                    </div>
                                    <div class="col-span-6">
                                        <input
                                            value="{{$tersangkas[$index]['alamat']}}"
                                            class="bg-gray-200 border border-solid border-black focus:border-red-400 focus:bg-white mt-1 w-full"
                                            type="text" required disabled />
                                    </div>
                                    <div class="col-span-1">
                                        <label class="text-sm text-gray-700">Upload Foto</label>
                                    </div>
                                    <div class="col-span-6">
                                        <input wire:model="tersangkas.{{$index}}.gambar"
                                            class="border border-solid border-black focus:border-red-400 focus:bg-white mt-1 w-full"
                                            type="file" />
                                    </div>
                                </div>
                            </div>
                            <div class="w-full">
                                <div>
                                    <button wire:click.prevent="hapusTersangka({{$index}})" class="px-3 py-2 bg-gray-400 hover:bg-gray-500 text-white font-medium rounded w-full" disabled>Hapus</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            <div class="bg-white rounded shadow mt-4">
                <div>
                    <h2 class="text-2xl font-medium pl-6 pr-6 pt-1 pb-1 bg-yellow-200">Detail Perkara</h2>
                </div>

                <div class="pl-6 pr-6 pb-6 my-4">
                    <button wire:click.prevent="tambahJenis" class="px-3 py-2 bg-gray-400 hover:bg-gray-500 text-white font-medium rounded" disabled>Tambah Jenis</button>
                    
                    <div class="mt-4">
                        @foreach ( $perkara['jenis'] as $index => $jenis )
                        <div class="grid grid-cols-8 gap-6 items-center mb-2">
                            <div class="col-span-1">
                                <label class="text-sm text-gray-700">Jenis</label>
                            </div>
                            <div class="col-span-6">
                                <select wire:model="perkara.jenis.{{$index}}" class="bg-gray-200 border border-solid border-black focus:border-indigo-400 focus:shadow-none focus:bg-white mt-1 block w-full" name="jenis-pidana" required disabled>
                                    @if($perkara['jenis'][$index] == "Pencucian Uang")
                                        <option value="Pencucian Uang" selected>Pencucian Uang</option>
                                    @elseif($perkara['jenis'][$index] == "Korupsi")
                                        <option value="Korupsi" selected>Korupsi</option>
                                    @elseif($perkara['jenis'][$index] == "Narkotika")
                                        <option value="Narkotika" selected>Narkotika</option>
                                    @elseif($perkara['jenis'][$index] == "Terorisme")
                                        <option value="Terorisme" selected>Terorisme</option>
                                    @elseif($perkara['jenis'][$index] == "Kehutanan")
                                        <option value="Kehutanan" selected>Kehutanan</option>
                                    @elseif($perkara['jenis'][$index] == "Kelautan / Perikanan")
                                        <option value="Kelautan / Perikanan" selected>Kelautan / Perikanan</option>
                                    @elseif($perkara['jenis'][$index] == "Perpajakan")
                                        <option value="Perpajakan" selected>Perpajakan</option>
                                    @elseif($perkara['jenis'][$index] == "Kepabeanan")
                                        <option value="Kepabeanan" selected>Kepabeanan</option>
                                    @elseif($perkara['jenis'][$index] == "Asuransi")
                                        <option value="Asuransi" selected>Asuransi</option>
                                    @elseif($perkara['jenis'][$index] == "Cabul")
                                        <option value="Cabul" selected>Cabul</option>
                                    @elseif($perkara['jenis'][$index] == "Cukai")
                                        <option value="Cukai" selected>Cukai</option>
                                    @elseif($perkara['jenis'][$index] == "Lainnya")
                                        <option value="Lainnya" selected>Lainnya</option>
                                    @elseif($perkara['jenis'][$index] == "Lalu Lintas dan Angkutan Jalan")
                                        <option value="Lalu Lintas dan Angkutan Jalan" selected>Lalu Lintas dan Angkutan Jalan</option>
                                    @elseif($perkara['jenis'][$index] == "Lingkungan Hidup")
                                        <option value="Lingkungan Hidup" selected>Lingkungan Hidup</option>
                                    @elseif($perkara['jenis'][$index] == "Pasar Modal")
                                        <option value="Pasar Modal" selected>Pasar Modal</option>
                                    @elseif($perkara['jenis'][$index] == "Pemalsuan Uang")
                                        <option value="Pemalsuan Uang" selected>Pemalsuan Uang</option>
                                    @elseif($perkara['jenis'][$index] == "Penadahan")
                                        <option value="Penadahan" selected>Penadahan</option>
                                    @elseif($perkara['jenis'][$index] == "Penculikan")
                                        <option value="Penculikan" selected>Penculikan</option>
                                    @elseif($perkara['jenis'][$index] == "Pencurian")
                                        <option value="Pencurian" selected>Pencurian</option>
                                    @elseif($perkara['jenis'][$index] == "Pendanaan Terorisme")
                                        <option value="Pendanaan Terorisme" selected>Pendanaan Terorisme</option>
                                    @elseif($perkara['jenis'][$index] == "Penggelapan")
                                        <option value="Penggelapan" selected>Penggelapan</option>
                                    @elseif($perkara['jenis'][$index] == "Penipuan")
                                        <option value="Penipuan" selected>Penipuan</option>
                                    @elseif($perkara['jenis'][$index] == "Penyelundupan Migran")
                                        <option value="Penyelundupan Migran" selected>Penyelundupan Migran</option>
                                    @elseif($perkara['jenis'][$index] == "Penyelundupan Tenaga Kerja")
                                        <option value="Penyelundupan Tenaga Kerja" selected>Penyelundupan Tenaga Kerja</option>
                                    @elseif($perkara['jenis'][$index] == "Penyuapan")
                                        <option value="Penyuapan" selected>Penyuapan</option>
                                    @elseif($perkara['jenis'][$index] == "Perbankan")
                                        <option value="Perbankan" selected>Perbankan</option>
                                    @elseif($perkara['jenis'][$index] == "Perdagangan Orang")
                                        <option value="Perdagangan Orang" selected>Perdagangan Orang</option>
                                    @elseif($perkara['jenis'][$index] == "Perdagangan Senjata Gelap")
                                        <option value="Perdagangan Senjata Gelap" selected>Perdagangan Senjata Gelap</option>
                                    @elseif($perkara['jenis'][$index] == "Perjudian")
                                        <option value="Perjudian" selected>Perjudian</option>
                                    @elseif($perkara['jenis'][$index] == "Perkebunan")
                                        <option value="Perkebunan" selected>Perkebunan</option>
                                    @elseif($perkara['jenis'][$index] == "Prostitusi")
                                        <option value="Prostitusi" selected>Prostitusi</option>
                                    @elseif($perkara['jenis'][$index] == "Psikotropika")
                                        <option value="Psikotropika" selected>Psikotropika</option>
                                    @elseif($perkara['jenis'][$index] == "Traficking")
                                        <option value="Traficking" selected>Traficking</option>
                                    @elseif($perkara['jenis'][$index] == "Undang-Undang ITE")
                                        <option value="Undang-Undang ITE" selected>Undang-Undang ITE</option>
                                    @else
                                        <option selected>--Jenis Perkara--</option> 
                                        <option value="Pencucian Uang">Pencucian Uang</option>
                                        <option value="Korupsi">Korupsi</option>
                                        <option value="Narkotika">Narkotika</option>
                                        <option value="Terorisme">Terorisme</option>
                                        <option value="Kehutanan">Kehutanan</option>
                                        <option value="Kelautan / Perikanan">Kelautan / Perikanan</option>
                                        <option value="Perpajakan">Perpajakan</option>
                                        <option value="Kepabeanan">Kepabeanan</option>
                                        <option value="Asuransi">Asuransi</option>
                                        <option value="Cabul">Cabul</option>
                                        <option value="Cukai">Cukai</option>
                                        <option value="Lainnya">Lainnya</option>
                                        <option value="Lalu Lintas dan Angkutan Jalan">Lalu Lintas dan Angkutan Jalan</option>
                                        <option value="Lingkungan Hidup">Lingkungan Hidup</option>
                                        <option value="Pasar Modal">Pasar Modal</option>
                                        <option value="Pemalsuan Uang">Pemalsuan Uang</option>
                                        <option value="Penadahan">Penadahan</option>
                                        <option value="Penculikan">Penculikan</option>
                                        <option value="Pencurian">Pencurian</option>
                                        <option value="Pendanaan Terorisme">Pendanaan Terorisme</option>
                                        <option value="Penggelapan">Penggelapan</option>
                                        <option value="Penipuan">Penipuan</option>
                                        <option value="Penyelundupan Migran">Penyelundupan Migran</option>
                                        <option value="Penyelundupan Tenaga Kerja">Penyelundupan Tenaga Kerja</option>
                                        <option value="Penyuapan">Penyuapan</option>
                                        <option value="Perbankan">Perbankan</option>
                                        <option value="Perdagangan Orang">Perdagangan Orang</option>
                                        <option value="Perdagangan Senjata Gelap">Perdagangan Senjata Gelap</option>
                                        <option value="Perjudian">Perjudian</option>
                                        <option value="Perkebunan">Perkebunan</option>
                                        <option value="Prostitusi">Prostitusi</option>
                                        <option value="Psikotropika">Psikotropika</option>
                                        <option value="Traficking">Traficking</option>
                                        <option value="Undang-Undang ITE">Undang-Undang ITE</option>
                                    @endif
                                </select>
                            </div>
                            <div class="col-span-1">
                                <button wire:click.prevent="hapusJenis({{$index}})" class="px-3 py-1 bg-gray-400 hover:bg-gray-500 text-white font-medium rounded w-full" disabled>Hapus</button>
                            </div>
                        </div>
                        @endforeach
                        
                        <div class="grid grid-cols-8 gap-6">
                            <div class="col-span-1">
                                <label class="text-sm text-gray-700">Pasal Dakwaan</label>
                            </div>
                            <div class="col-span-7">
                            <textarea
                                class="bg-gray-200 border border-solid border-black focus:border-red-400 mt-1 w-full" 
                                rows="5" required disabled>{{ $perkara['pasal_dakwaan'] }}
                            </textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @livewire('tambah-barangbukti', [$barangbuktis, $manual=false])
            
            <button type="submit" class="my-4 px-3 py-2 bg-green-400 hover:bg-green-500 text-white font-medium rounded w-full">Simpan</button>
        </div>
    </form>
</div>