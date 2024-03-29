<div>
    <div class="flex bg-gray-300 mb-4 px-2 py-2">
        <svg class="h-6 w-6 text-black" viewBox="0 0 24 24" fill="none" 
            stroke="currentColor" stroke-width="2" stroke-linecap="round"  
            stroke-linejoin="round">  
            <path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"></path> 
            <path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"></path>
        </svg>
        <h3 class="px-2 text-gray-700">Tambah Perkara</h3>
    </div>

    @if ($modalData)
        <div class="h-screen w-full fixed top-0 left-0 flex justify-center items-center bg-black bg-opacity-50">
            <div class="relative p-4 w-full max-w-md max-h-full">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                    <!-- Modal header -->
                    <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                            Pilih Perkara
                        </h3>
                        <button wire:click.prevent="tutupModal" type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="crud-modal">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                            </svg>
                        </button>
                    </div>
                    <!-- Modal body -->
                    <div class="p-4 md:p-5 max-h-[calc(100vh-7rem)] overflow-y-auto">
                        <input wire:model.live.debounce.500="inputPencarianPerkara"
                            class="mb-4 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" 
                            type="text" placeholder="Ketik perkara yang ingin dicari" />
                        <!-- <p class="text-gray-500 dark:text-gray-400 mb-4">Select your desired position:</p> -->
                        <ul class="space-y-4 mb-4">
                            @if ($dataPerkaras)
                                @foreach ($dataPerkaras as $index => $dataPerkara)
                                    <li>
                                        <input wire:click="selectPerkara({{$index}})" class="hidden peer" id="perkara-{{$index}}"
                                            value="{{$index}}" name = "perkara" type="radio" required />
                                        <label for="perkara-{{$index}}" class="inline-flex items-center justify-between w-full p-5 text-gray-900 bg-white border border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-500 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-900 hover:bg-gray-100 dark:text-white dark:bg-gray-600 dark:hover:bg-gray-500">                           
                                            <div class="block">
                                                <div class="w-full text-lg font-semibold">{{$dataPerkara['nomor_register']}}</div>
                                                <div class="w-full text-gray-500 dark:text-gray-400">{{$dataPerkara['pasal_dakwaan']}}</div>
                                            </div>
                                        </label>
                                    </li>
                                @endforeach
                            @endif
                        </ul>
                        <button wire:click.prevent="isiForm" class="text-white inline-flex w-full justify-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Pilih
                        </button>
                    </div>
                </div>
            </div>
        </div>
    @endif

    <form wire:submit.prevent="simpanPerkara">
        @csrf
        
        <div class="bg-gray-300 mx-8 mb-4 p-6 rounded shadow">
            <!-- <a href="{{route('perkara.index')}}" class="px-3 py-2 bg-gray-400 hover:bg-gray-500 text-white font-medium rounded">Daftar Perkara</a> -->
            <button @click.prevent="manual = true, api = false" class="px-3 py-2 bg-gray-400 hover:bg-gray-500 text-white font-medium rounded">Tambah Perkara Manual</button>
            <button wire:click.prevent="bukaModal" @click="api = true, manual = false" class="px-3 py-2 bg-yellow-400 hover:bg-yellow-500 text-white font-medium rounded">Tambah Perkara (CMS)</button>
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
                                <select wire:model="perkara.{{0}}.jenis_pidana" class="bg-gray-200 border border-solid border-black focus:border-indigo-400 focus:shadow-none focus:bg-white mt-1 block w-full" name="jenis-pidana" disabled>
                                @if ($perkara[0]['jenis_pidana'] == "PIDUM")
                                    <option value="PIDUM" selected>PIDUM</option>
                                @elseif ($perkara[0]['jenis_pidana'] == "PIDSUS")
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
                                <input wire:model="perkara.{{0}}.nomor_register"
                                    value="{{$perkara[0]['nomor_register']}}"
                                    class="bg-gray-200 border border-solid border-black focus:border-red-400 focus:bg-white mt-1 w-full"
                                    type="text" disabled />
                            </div>
                            <div class="flex items-center">
                                <label class="text-sm text-gray-700">No. Sprindik</label>
                            </div>
                            <div class="flex items-center col-span-3">
                                <input wire:model="perkara.{{0}}.nomor_sprindik"
                                    value="{{$perkara[0]['nomor_sprindik']}}"
                                    class="bg-gray-200 border border-solid border-black focus:border-red-400 focus:bg-white mt-1 w-full"
                                    type="text" disabled />
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded shadow mt-4">
                <div>
                    <h2 class="text-2xl font-medium pl-6 pr-6 pt-1 pb-1 bg-yellow-200">P16</h2>
                </div>
                <div class="mt-4 pl-6 pr-6">
                    <div class="mt-4">
                        <div class="grid grid-cols-8 gap-6">
                            <div class="flex items-center">
                                <label class="text-sm text-gray-700">Nomor</label>
                            </div>
                            <div class="flex items-center col-span-3">
                                <input wire:model="p16.{{0}}.nomor"
                                    value="{{$p16[0]['nomor']}}"
                                    class="bg-gray-200 border border-solid border-black focus:border-red-400 focus:bg-white mt-1 w-full"
                                    type="text" disabled />
                            </div>
                            <div class="flex items-center">
                                <label class="text-sm text-gray-700">Tanggal</label>
                            </div>
                            <div class="flex items-center col-span-3">
                                <input wire:model="p16.{{0}}.tanggal"
                                    value="{{$p16[0]['tanggal']}}"
                                    class="bg-gray-200 border border-solid border-black focus:border-red-400 focus:bg-white mt-1 w-full"
                                    type="date" disabled />
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
                                <input wire:model="p16.{{0}}.gambar"
                                    class="border border-solid border-black focus:border-red-400 focus:bg-white mt-1 w-full"
                                    type="file" />
                            </div>
                        </div>
                    </div>
                </div>

                <hr class="border-1 border-black my-4 mx-6" />

                <div class="pl-6 pr-6 pb-6">
                    <button wire:click.prevent="tambahJaksaP16" class="px-3 py-2 bg-gray-400 hover:bg-gray-500 text-white font-medium rounded" disabled>Tambah Jaksa</button>
                    
                    @foreach ($p16[0]['jaksas'] as $index => $jaksa)
                    <div class="mt-4">
                        <div class="grid grid-cols-9 gap-6">
                            <div class="flex items-center">
                                <label class="text-sm text-gray-700">Nama Jaksa</label>
                            </div>
                            <div class="flex items-center col-span-3">
                                <input wire:model="p16.{{0}}.jaksas.{{$index}}.nama"
                                    value="{{$p16[0]['jaksas'][$index]['nama']}}"
                                    class="bg-gray-200 border border-solid border-black focus:border-red-400 focus:bg-white mt-1 w-full"
                                    type="text" disabled />
                            </div>
                            <div class="flex items-center">
                                <label class="text-sm text-gray-700">NIP Jaksa</label>
                            </div>
                            <div class="flex items-center col-span-3">
                                <input wire:model="p16.{{0}}.jaksas.{{$index}}.nip"
                                    value="{{$p16[0]['jaksas'][$index]['nip']}}"
                                    class="bg-gray-200 border border-solid border-black focus:border-red-400 focus:bg-white mt-1 w-full"
                                    type="text" disabled />
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
                    <h2 class="text-2xl font-medium pl-6 pr-6 pt-1 pb-1 bg-yellow-200">P16a</h2>
                </div>
                <div class="mt-4 pl-6 pr-6">
                    <div class="mt-4">
                        <div class="grid grid-cols-8 gap-6">
                            <div class="flex items-center">
                                <label class="text-sm text-gray-700">Nomor</label>
                            </div>
                            <div class="flex items-center col-span-3">
                                <input wire:model="p16a.{{0}}.nomor"
                                    value="{{$p16a[0]['nomor']}}"
                                    class="bg-gray-200 border border-solid border-black focus:border-red-400 focus:bg-white mt-1 w-full"
                                    type="text" disabled />
                            </div>
                            <div class="flex items-center">
                                <label class="text-sm text-gray-700">Tanggal</label>
                            </div>
                            <div class="flex items-center col-span-3">
                                <input wire:model="p16a.{{0}}.tanggal"
                                    value="{{$p16a[0]['tanggal']}}"
                                    class="bg-gray-200 border border-solid border-black focus:border-red-400 focus:bg-white mt-1 w-full"
                                    type="date" disabled />
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
                                <input wire:model="p16a.{{0}}.gambar"
                                    class="border border-solid border-black focus:border-red-400 focus:bg-white mt-1 w-full"
                                    type="file" />
                            </div>
                        </div>
                    </div>
                </div>

                <hr class="border-1 border-black my-4 mx-6" />

                <div class="pl-6 pr-6 pb-6">
                    <button wire:click.prevent="tambahJaksaP16a" class="px-3 py-2 bg-gray-400 hover:bg-gray-500 text-white font-medium rounded" disabled>Tambah Jaksa</button>
                    
                    @foreach ( $p16a[0]['jaksas'] as $index => $jaksa )
                    <div class="mt-4">
                        <div class="grid grid-cols-9 gap-6">
                            <div class="flex items-center">
                                <label class="text-sm text-gray-700">Nama Jaksa</label>
                            </div>
                            <div class="flex items-center col-span-3">
                                <input wire:model="p16a.{{0}}.jaksas.{{$index}}.nama"
                                    value="{{$p16a[0]['jaksas'][$index]['nama']}}"
                                    class="bg-gray-200 border border-solid border-black focus:border-red-400 focus:bg-white mt-1 w-full"
                                    type="text" disabled />
                            </div>
                            <div class="flex items-center">
                                <label class="text-sm text-gray-700">NIP Jaksa</label>
                            </div>
                            <div class="flex items-center col-span-3">
                                <input wire:model="p16a.{{0}}.jaksas.{{$index}}.nip"
                                    value="{{$p16a[0]['jaksas'][$index]['nip']}}"
                                    class="bg-gray-200 border border-solid border-black focus:border-red-400 focus:bg-white mt-1 w-full"
                                    type="text" disabled />
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
                                        <input wire:model="tersangkas.{{$index}}.nama"
                                            value="{{$tersangkas[$index]['nama']}}"
                                            class="bg-gray-200 border border-solid border-black focus:border-red-400 focus:bg-white mt-1 w-full"
                                            type="text" disabled />
                                    </div>
                                    <div class="col-span-1">
                                        <label class="text-sm text-gray-700">Alamat {{$index + 1}}</label>
                                    </div>
                                    <div class="col-span-6">
                                        <input wire:model="tersangkas.{{$index}}.alamat"
                                            value="{{$tersangkas[$index]['alamat']}}"
                                            class="bg-gray-200 border border-solid border-black focus:border-red-400 focus:bg-white mt-1 w-full"
                                            type="text" disabled />
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
                        @foreach ( $perkara[0]['jenis'] as $index => $jenis )
                        <div class="grid grid-cols-8 gap-6 items-center mb-2">
                            <div class="col-span-1">
                                <label class="text-sm text-gray-700">Jenis</label>
                            </div>
                            <div class="col-span-6">
                                <select wire:model="perkara.{{0}}.jenis.{{$index}}" class="bg-gray-400 border border-solid border-black focus:border-indigo-400 focus:shadow-none focus:bg-white mt-1 block w-full" name="jenis-pidana" disabled>  
                                    @if($perkara[0]['jenis'][$index] == "Pencucian Uang")
                                        <option value="Pencucian Uang" selected>Pencucian Uang</option>
                                    @elseif($perkara[0]['jenis'][$index] == "Korupsi")
                                        <option value="Korupsi" selected>Korupsi</option>
                                    @elseif($perkara[0]['jenis'][$index] == "Narkotika")
                                        <option value="Narkotika" selected>Narkotika</option>
                                    @elseif($perkara[0]['jenis'][$index] == "Terorisme")
                                        <option value="Terorisme" selected>Terorisme</option>
                                    @elseif($perkara[0]['jenis'][$index] == "Kehutanan")
                                        <option value="Kehutanan" selected>Kehutanan</option>
                                    @elseif($perkara[0]['jenis'][$index] == "Kelautan / Perikanan")
                                        <option value="Kelautan / Perikanan" selected>Kelautan / Perikanan</option>
                                    @elseif($perkara[0]['jenis'][$index] == "Perpajakan")
                                        <option value="Perpajakan" selected>Perpajakan</option>
                                    @elseif($perkara[0]['jenis'][$index] == "Kepabeanan")
                                        <option value="Kepabeanan" selected>Kepabeanan</option>
                                    @elseif($perkara[0]['jenis'][$index] == "Asuransi")
                                        <option value="Asuransi" selected>Asuransi</option>
                                    @elseif($perkara[0]['jenis'][$index] == "Cabul")
                                        <option value="Cabul" selected>Cabul</option>
                                    @elseif($perkara[0]['jenis'][$index] == "Cukai")
                                        <option value="Cukai" selected>Cukai</option>
                                    @elseif($perkara[0]['jenis'][$index] == "Lainnya")
                                        <option value="Lainnya" selected>Lainnya</option>
                                    @elseif($perkara[0]['jenis'][$index] == "Lalu Lintas dan Angkutan Jalan")
                                        <option value="Lalu Lintas dan Angkutan Jalan" selected>Lalu Lintas dan Angkutan Jalan</option>
                                    @elseif($perkara[0]['jenis'][$index] == "Lingkungan Hidup")
                                        <option value="Lingkungan Hidup" selected>Lingkungan Hidup</option>
                                    @elseif($perkara[0]['jenis'][$index] == "Pasar Modal")
                                        <option value="Pasar Modal" selected>Pasar Modal</option>
                                    @elseif($perkara[0]['jenis'][$index] == "Pemalsuan Uang")
                                        <option value="Pemalsuan Uang" selected>Pemalsuan Uang</option>
                                    @elseif($perkara[0]['jenis'][$index] == "Penadahan")
                                        <option value="Penadahan" selected>Penadahan</option>
                                    @elseif($perkara[0]['jenis'][$index] == "Penculikan")
                                        <option value="Penculikan" selected>Penculikan</option>
                                    @elseif($perkara[0]['jenis'][$index] == "Pencurian")
                                        <option value="Pencurian" selected>Pencurian</option>
                                    @elseif($perkara[0]['jenis'][$index] == "Pendanaan Terorisme")
                                        <option value="Pendanaan Terorisme" selected>Pendanaan Terorisme</option>
                                    @elseif($perkara[0]['jenis'][$index] == "Penggelapan")
                                        <option value="Penggelapan" selected>Penggelapan</option>
                                    @elseif($perkara[0]['jenis'][$index] == "Penipuan")
                                        <option value="Penipuan" selected>Penipuan</option>
                                    @elseif($perkara[0]['jenis'][$index] == "Penyelundupan Migran")
                                        <option value="Penyelundupan Migran" selected>Penyelundupan Migran</option>
                                    @elseif($perkara[0]['jenis'][$index] == "Penyelundupan Tenaga Kerja")
                                        <option value="Penyelundupan Tenaga Kerja" selected>Penyelundupan Tenaga Kerja</option>
                                    @elseif($perkara[0]['jenis'][$index] == "Penyuapan")
                                        <option value="Penyuapan" selected>Penyuapan</option>
                                    @elseif($perkara[0]['jenis'][$index] == "Perbankan")
                                        <option value="Perbankan" selected>Perbankan</option>
                                    @elseif($perkara[0]['jenis'][$index] == "Perdagangan Orang")
                                        <option value="Perdagangan Orang" selected>Perdagangan Orang</option>
                                    @elseif($perkara[0]['jenis'][$index] == "Perdagangan Senjata Gelap")
                                        <option value="Perdagangan Senjata Gelap" selected>Perdagangan Senjata Gelap</option>
                                    @elseif($perkara[0]['jenis'][$index] == "Perjudian")
                                        <option value="Perjudian" selected>Perjudian</option>
                                    @elseif($perkara[0]['jenis'][$index] == "Perkebunan")
                                        <option value="Perkebunan" selected>Perkebunan</option>
                                    @elseif($perkara[0]['jenis'][$index] == "Prostitusi")
                                        <option value="Prostitusi" selected>Prostitusi</option>
                                    @elseif($perkara[0]['jenis'][$index] == "Psikotropika")
                                        <option value="Psikotropika" selected>Psikotropika</option>
                                    @elseif($perkara[0]['jenis'][$index] == "Traficking")
                                        <option value="Traficking" selected>Traficking</option>
                                    @elseif($perkara[0]['jenis'][$index] == "Undang-Undang ITE")
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
                                <!-- <input wire:model="perkara.{{0}}.pasal_dakwaan"
                                    value="{{$perkara[0]['pasal_dakwaan']}}"
                                    class="bg-gray-200 border border-solid border-black focus:border-red-400 focus:bg-white mt-1 w-full"
                                    type="text" disabled /> -->
                                <textarea 
                                    class="bg-gray-200 border border-solid border-black focus:border-red-400 mt-1 w-full" 
                                    rows="5" disabled>{{ $perkara[0]['pasal_dakwaan'] }}
                                </textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @livewire('tambah-barangbukti')
            
            <button type="submit" class="my-4 px-3 py-2 bg-green-400 hover:bg-green-500 text-white font-medium rounded w-full">Simpan</button>
        </div>
    </form>
</div>