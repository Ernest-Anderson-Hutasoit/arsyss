<div class="bg-white rounded shadow mt-4">
    <div>
        <h2 class="text-2xl font-medium pl-6 pr-6 pt-1 pb-1 bg-yellow-200">Data Barang Bukti</h2>
    </div>
    <div class="mt-4 pl-6 pr-6 pb-6">
        <button wire:click.prevent="openModal" class="px-3 py-2 bg-yellow-400 hover:bg-yellow-500 text-white font-medium rounded">Tambah</button>

        @if($isModalOpen)
            <div class="h-screen w-full fixed top-0 left-0 flex justify-center items-center bg-black bg-opacity-50">
                <div class="relative p-4 w-full">
                    <!-- Modal content -->
                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                        <!-- Modal header -->
                        <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                                Tambah Barang Bukti
                            </h3>
                            <button wire:click="closeModal" type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="crud-modal">
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
                                    <input wire:model= "nomor_register" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Nomor register Barang Bukti" required="">
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal Register</label>
                                    <input wire:model= "tanggal" type="date" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Tanggal Register Barang Bukti" required="">
                                </div>
                                <div class="col-span-6">
                                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama</label>
                                    <textarea wire:model= "nama" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Nama Barang Bukti"></textarea>                    
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jenis</label>
                                    <select wire:model= "jenis" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
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
                                    <select wire:model= "lokasi" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                        <option selected="">--Lokasi Penyimpanan--</option>
                                        <option value="Gudang Barang Bukti Kejaksaan">Gudang Barang Bukti Kejaksaan</option>
                                        <option value="RUPBASAN">RUPBASAN</option>
                                        <option value="Titipan">Titipan</option>
                                    </select>
                                </div>
                                <div class="col-span-6 sm:col-span-2">
                                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jumlah</label>
                                    <input wire:model= "jumlah" type="number" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Jumlah Barang Bukti" required="">
                                </div>
                                <div class="col-span-6 sm:col-span-2">
                                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Satuan</label>
                                    <select wire:model= "jenis_satuan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
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
                                    <input wire:model= "perkiraan" type="number" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Harga Perkiraan Barang Bukti" required="">
                                </div>
                            </div>
                            <button wire:click="closeModal" type="submit" class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Simpan
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        @endif

        <table class="min-w-full">
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
                            This is Test
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
            <!-- <tr>
                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                    <div class="flex items-center">
                        <div class="flex-shrink-0 h-10 w-10">
                            <img class="h-10 w-10 rounded-full"
                                    src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                    alt=""/>
                        </div>
                        <div class="mx-2">
                            <div class="text-sm leading-5 font-medium text-gray-900">Jone Doe</div>
                            <div class="text-sm leading-5 text-gray-500">bernardlane@example.com</div>
                        </div>
                    </div>
                </td>
                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                    Software Engineer
                </td>
                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                    <span
                        class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                    Active
                    </span>
                </td>
                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 text-sm leading-5 text-gray-500">
                    Owner
                </td>
                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 text-sm leading-5 font-medium">
                    <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                </td>
            </tr>
            <tr>
                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                    <div class="flex items-center">
                        <div class="flex-shrink-0 h-10 w-10">
                            <img class="h-10 w-10 rounded-full"
                                    src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                    alt=""/>
                        </div>
                        <div class="mx-2">
                            <div class="text-sm leading-5 font-medium text-gray-900">Jone Doe</div>
                            <div class="text-sm leading-5 text-gray-500">bernardlane@example.com</div>
                        </div>
                    </div>
                </td>
                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                    Actor
                </td>
                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                    <span
                        class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                    Active
                    </span>
                </td>
                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 text-sm leading-5 text-gray-500">
                    Owner
                </td>
                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 text-sm leading-5 font-medium">
                    <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                </td>
            </tr> -->
            </tbody>
        </table>
    </div>
</div>
