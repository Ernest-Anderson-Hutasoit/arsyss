<div class="bg-white rounded shadow mt-4">
    <div>
        <h2 class="text-2xl font-medium pl-6 pr-6 pt-1 pb-1 bg-yellow-200">Data Barang Bukti</h2>
    </div>
    <div class="mt-4 pl-6 mr-6 pb-6">
        @if ($manual)
            <button wire:click.prevent="bukaModalTambah" class="mb-4 px-3 py-2 bg-yellow-400 hover:bg-yellow-500 text-white font-medium rounded">Tambah</button>
        @else
            <button wire:click.prevent="bukaModalTambah" class="mb-4 px-3 py-2 bg-gray-400 hover:bg-gray-500 text-white font-medium rounded" disabled>Tambah</button>
        @endif
        
        @if($modalTambah)
            <div class="h-screen w-full fixed top-0 left-0 flex justify-center items-center bg-black bg-opacity-50">
                <div class="relative p-4 w-full">
                    <!-- Modal content -->
                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                        <!-- Modal header -->
                        <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                                Tambah Barang Bukti
                            </h3>
                            <button wire:click.prevent="tutupModal" type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="crud-modal">
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                </svg>
                            </button>
                        </div>
                        <!-- Modal body -->
                        <form wire:submit.prevent="simpanBarangbukti" class="p-4 md:p-5">
                            <div class="grid gap-4 mb-4 grid-cols-6">
                                <div class="col-span-6 sm:col-span-3">
                                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nomor Register</label>
                                    <input wire:model="nomor_register" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Nomor register Barang Bukti" required>
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal Register</label>
                                    <input wire:model="tanggal" type="date" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Tanggal Register Barang Bukti" required>
                                </div>
                                <div class="col-span-6">
                                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama</label>
                                    <textarea wire:model="nama" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Nama Barang Bukti" required></textarea>                    
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jenis</label>
                                    <select wire:model="jenis" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required>
                                        <option selected="">--Jenis Barang Bukti--</option>
                                        <option value="Benda Tidak Bergerak">Benda Tidak Bergerak</option>
                                        <option value="Barang Bergerak">Barang Bergerak</option>
                                        <option value="Benda Berharga">Benda Berharga</option>
                                        <option value="Barang Lainnya">Barang Lainnya</option>
                                        <option value="Barang Tidak Bergerak Lainnya">Barang Tidak Bergerak Lainnya</option>
                                        <option value="Narkotika/Psykotropika">Narkotika/Psykotropika</option>
                                    </select>
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Lokasi Penyimpanan</label>
                                    <select wire:model="lokasi" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required>
                                        <option selected="">--Lokasi Penyimpanan--</option>
                                        <option value="Gudang Barang Bukti Kejaksaan">Gudang Barang Bukti Kejaksaan</option>
                                        <option value="RUPBASAN">RUPBASAN</option>
                                        <option value="Titipan">Titipan</option>
                                    </select>
                                </div>
                                <div class="col-span-6 sm:col-span-2">
                                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jumlah</label>
                                    <input wire:model="jumlah" type="number" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Jumlah Barang Bukti" required>
                                </div>
                                <div class="col-span-6 sm:col-span-2">
                                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Satuan</label>
                                    <select wire:model="jenis_satuan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required>
                                        <option selected="">--Satuan--</option>
                                        <option value="Unit">Unit</option>
                                        <option value="Hektar">Hektar</option>
                                        <option value="m2">m2</option>
                                        <option value="Liter">Liter</option>
                                        <option value="Tong">Tong</option>
                                        <option value="Lembar">Lembar</option>
                                        <option value="Gram">Gram</option>
                                        <option value="Kg">Kg</option>
                                        <option value="Buah">Buah</option>
                                        <option value="Butir">Butir</option>
                                        <option value="Ton">Ton</option>
                                        <option value="Meter">Meter</option>
                                        <option value="Ekor">Ekor</option>
                                        <option value="Tandan">Tandan</option>
                                        <option value="Bungkus">Bungkus</option>
                                        <option value="Batang">Batang</option>
                                        <option value="Paket">Paket</option>
                                        <option value="Bundel">Bundel</option>
                                        <option value="M3">M3</option>
                                    </select>
                                </div>
                                <div class="col-span-6 sm:col-span-2">
                                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Harga Perkiraan</label>
                                    <input wire:model="perkiraan" type="number" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Harga Perkiraan Barang Bukti" required>
                                </div>
                            </div>
                            <button wire:click="tutupModal" type="submit" class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Simpan
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        @endif

        @if($modalUbah)
            <div class="h-screen w-full fixed top-0 left-0 flex justify-center items-center bg-black bg-opacity-50">
                <div class="relative p-4 w-full">
                    <!-- Modal content -->
                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                        <!-- Modal header -->
                        <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                                Ubah Barang Bukti
                            </h3>
                            <button wire:click.prevent="tutupModal" type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="crud-modal">
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                </svg>
                            </button>
                        </div>
                        <!-- Modal body -->
                        <form wire:submit.prevent="ubahBarangbukti" class="p-4 md:p-5">
                            <div class="grid gap-4 mb-4 grid-cols-6">
                                <div class="col-span-6 sm:col-span-3">
                                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nomor Register</label>
                                    <input wire:model="nomor_register" type="text" class="bg-gray-200 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" 
                                        placeholder="Nomor register Barang Bukti" disabled required>
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal Register</label>
                                    <input wire:model="tanggal" type="date" class="bg-gray-200 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Tanggal Register Barang Bukti" disabled required>
                                </div>
                                <div class="col-span-6">
                                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama</label>
                                    <textarea wire:model="nama" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-200 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Nama Barang Bukti" required disabled></textarea>                    
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jenis</label>
                                    <select wire:model="jenis" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required>
                                        <option selected="">--Jenis Barang Bukti--</option>
                                        <option value="Benda Tidak Bergerak">Benda Tidak Bergerak</option>
                                        <option value="Barang Bergerak">Barang Bergerak</option>
                                        <option value="Benda Berharga">Benda Berharga</option>
                                        <option value="Barang Lainnya">Barang Lainnya</option>
                                        <option value="Barang Tidak Bergerak Lainnya">Barang Tidak Bergerak Lainnya</option>
                                        <option value="Narkotika/Psykotropika">Narkotika/Psykotropika</option>
                                    </select>
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Lokasi Penyimpanan</label>
                                    <select wire:model="lokasi" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required>
                                        <option selected="">--Lokasi Penyimpanan--</option>
                                        <option value="Gudang Barang Bukti Kejaksaan">Gudang Barang Bukti Kejaksaan</option>
                                        <option value="RUPBASAN">RUPBASAN</option>
                                        <option value="Titipan">Titipan</option>
                                    </select>
                                </div>
                                <div class="col-span-6 sm:col-span-2">
                                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jumlah</label>
                                    <input wire:model="jumlah" type="number" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Jumlah Barang Bukti" required>
                                </div>
                                <div class="col-span-6 sm:col-span-2">
                                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Satuan</label>
                                    <select wire:model="jenis_satuan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required>
                                        <option selected="">--Satuan--</option>
                                        <option value="Unit">Unit</option>
                                        <option value="Hektar">Hektar</option>
                                        <option value="m2">m2</option>
                                        <option value="Liter">Liter</option>
                                        <option value="Tong">Tong</option>
                                        <option value="Lembar">Lembar</option>
                                        <option value="Gram">Gram</option>
                                        <option value="Kg">Kg</option>
                                        <option value="Buah">Buah</option>
                                        <option value="Butir">Butir</option>
                                        <option value="Ton">Ton</option>
                                        <option value="Meter">Meter</option>
                                        <option value="Ekor">Ekor</option>
                                        <option value="Tandan">Tandan</option>
                                        <option value="Bungkus">Bungkus</option>
                                        <option value="Batang">Batang</option>
                                        <option value="Paket">Paket</option>
                                        <option value="Bundel">Bundel</option>
                                        <option value="M3">M3</option>
                                    </select>
                                </div>
                                <div class="col-span-6 sm:col-span-2">
                                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Harga Perkiraan</label>
                                    <input wire:model="perkiraan" type="number" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Harga Perkiraan Barang Bukti" required>
                                </div>
                            </div>
                            <button wire:click="tutupModal" type="submit" class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Simpan
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        @endif

        <div class="overflow-auto">
            <table class="table-auto" id="barangbuktisTable">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-right text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider"
                            style="text-align: start">
                            Aksi
                        </th>
                        <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-right text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider"
                            style="text-align: start">
                            Nama
                        </th>
                        <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider"
                            style="text-align: start">
                            Nomor Register Barang Bukti
                        </th>
                        <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider"
                            style="text-align: start">
                            Tanggal Register Barang Bukti
                        </th>
                        <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider"
                            style="text-align: start">
                            Jenis
                        </th>
                        <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider"
                            style="text-align: start">
                            Perkiraan
                        </th>
                        <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider"
                            style="text-align: start">
                            Lokasi
                        </th>
                        <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider"
                            style="text-align: start">
                            Jumlah
                        </th>
                        <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider"
                            style="text-align: start">
                            Jenis Satuan
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white">
                    @foreach ($barangbuktis as $index => $barangbukti)
                        <tr>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                            @if ($manual)
                                <button wire:click.prevent="hapusBarangbukti({{$index}})" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg px-1 py-1 my-1 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="text-white w-6 h-6">
                                        <path fill-rule="evenodd" d="M16.5 4.478v.227a48.816 48.816 0 0 1 3.878.512.75.75 0 1 1-.256 1.478l-.209-.035-1.005 13.07a3 3 0 0 1-2.991 2.77H8.084a3 3 0 0 1-2.991-2.77L4.087 6.66l-.209.035a.75.75 0 0 1-.256-1.478A48.567 48.567 0 0 1 7.5 4.705v-.227c0-1.564 1.213-2.9 2.816-2.951a52.662 52.662 0 0 1 3.369 0c1.603.051 2.815 1.387 2.815 2.951Zm-6.136-1.452a51.196 51.196 0 0 1 3.273 0C14.39 3.05 15 3.684 15 4.478v.113a49.488 49.488 0 0 0-6 0v-.113c0-.794.609-1.428 1.364-1.452Zm-.355 5.945a.75.75 0 1 0-1.5.058l.347 9a.75.75 0 1 0 1.499-.058l-.346-9Zm5.48.058a.75.75 0 1 0-1.498-.058l-.347 9a.75.75 0 0 0 1.5.058l.345-9Z" clip-rule="evenodd" />
                                    </svg>
                                </button>
                            @endif
                                <button wire:click.prevent="bukaModalUbah({{$index}})" class="focus:outline-none text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg px-1 py-1 my-1 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-900">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="text-white w-6 h-6">
                                        <path d="M21.731 2.269a2.625 2.625 0 0 0-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 0 0 0-3.712ZM19.513 8.199l-3.712-3.712-12.15 12.15a5.25 5.25 0 0 0-1.32 2.214l-.8 2.685a.75.75 0 0 0 .933.933l2.685-.8a5.25 5.25 0 0 0 2.214-1.32L19.513 8.2Z" />
                                    </svg>
                                </button>
                            </td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                {{$barangbuktis[$index]['nama']}}
                            </td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                {{$barangbuktis[$index]['nomor_register']}}
                            </td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                {{$barangbuktis[$index]['tanggal']}}
                            </td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                {{$barangbuktis[$index]['jenis']}}
                            </td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                {{$barangbuktis[$index]['perkiraan']}}
                            </td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                {{$barangbuktis[$index]['lokasi']}}
                            </td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                {{$barangbuktis[$index]['jumlah']}}
                            </td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                {{$barangbuktis[$index]['jenis_satuan']}}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>