@extends('layouts.app')

@section('content')
    <div class="flex bg-gray-300 mb-4 px-2 py-2">
        <svg class="h-6 w-6 text-black" viewBox="0 0 24 24" fill="none" 
            stroke="currentColor" stroke-width="2" stroke-linecap="round"  
            stroke-linejoin="round">  
            <path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"></path> 
            <path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"></path>
        </svg>
        <h3 class="text-gray-700">Perkara Maker</h3>
    </div>

    <div class="bg-gray-300 mx-8 mb-4 p-6 rounded shadow">
        <button class="px-3 py-2 bg-gray-400 hover:bg-gray-500 text-white font-medium rounded">Daftar Perkara</button>
        <button class="px-3 py-2 bg-yellow-400 hover:bg-yellow-500 text-white font-medium rounded">Tambah Perkara</button>
        
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
                            <select class="border border-solid border-black focus:border-indigo-400 focus:shadow-none focus:bg-white mt-1 block w-full" name="jenis-pidana">
                                <option value="PIDUM">PIDUM</option>
                                <option value="PIDSUS">PIDSUS</option>
                            </select>
                        </div>
                        <div class="flex items-center">
                            <label class="text-sm text-gray-700">No. Register Perkara</label>
                        </div>
                        <div class="flex items-center col-span-3">
                            <select class="border border-solid border-black focus:border-indigo-400 focus:shadow-none focus:bg-white mt-1 block w-full" name="jenis-pidana">
                                <option value="">dummy 1</option>
                                <option value="">dummy 2</option>
                            </select>
                        </div>
                        <div class="flex items-center">
                            <label class="text-sm text-gray-700">No. Sprindik</label>
                        </div>
                        <div class="flex items-center col-span-3">
                            <select class="border border-solid border-black focus:border-indigo-400 focus:shadow-none focus:bg-white mt-1 block w-full" name="jenis-pidana">
                                <option value="">dummy 1</option>
                                <option value="">dummy 2</option>
                            </select>
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
                                class="border border-solid border-black focus:border-red-400 focus:bg-white mt-1 w-full"
                                type="text" />
                        </div>
                        <div class="flex items-center">
                            <label class="text-sm text-gray-700">Tanggal</label>
                        </div>
                        <div class="flex items-center col-span-3">
                            <input
                                class="border border-solid border-black focus:border-red-400 focus:bg-white mt-1 w-full"
                                type="date" />
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
                            <input
                                class="border border-solid border-black focus:border-red-400 focus:bg-white mt-1 w-full"
                                type="file" />
                        </div>
                    </div>
                </div>
            </div>

            <hr class="border-1 border-black my-4 mx-6" />

            <div class="pl-6 pr-6 pb-6">
                <button class="px-3 py-2 bg-yellow-400 hover:bg-yellow-500 text-white font-medium rounded">Tambah Jaksa</button>
                
                <div class="mt-4">
                    <div class="grid grid-cols-8 gap-6">
                        <div class="flex items-center">
                            <label class="text-sm text-gray-700">Nama Jaksa</label>
                        </div>
                        <div class="flex items-center col-span-3">
                            <input
                                class="border border-solid border-black focus:border-red-400 focus:bg-white mt-1 w-full"
                                type="text" />
                        </div>
                        <div class="flex items-center">
                            <label class="text-sm text-gray-700">NIP Jaksa</label>
                        </div>
                        <div class="flex items-center col-span-3">
                            <input
                                class="border border-solid border-black focus:border-red-400 focus:bg-white mt-1 w-full"
                                type="text" />
                        </div>

                    </div>
                </div>
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
                                class="border border-solid border-black focus:border-red-400 focus:bg-white mt-1 w-full"
                                type="text" />
                        </div>
                        <div class="flex items-center">
                            <label class="text-sm text-gray-700">Tanggal</label>
                        </div>
                        <div class="flex items-center col-span-3">
                            <input
                                class="border border-solid border-black focus:border-red-400 focus:bg-white mt-1 w-full"
                                type="date" />
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
                            <input
                                class="border border-solid border-black focus:border-red-400 focus:bg-white mt-1 w-full"
                                type="file" />
                        </div>
                    </div>
                </div>
            </div>

            <hr class="border-1 border-black my-4 mx-6" />

            <div class="pl-6 pr-6 pb-6">
                <button class="px-3 py-2 bg-yellow-400 hover:bg-yellow-500 text-white font-medium rounded">Tambah Jaksa</button>
                
                <div class="mt-4">
                    <div class="grid grid-cols-8 gap-6">
                        <div class="flex items-center">
                            <label class="text-sm text-gray-700">Nama Jaksa</label>
                        </div>
                        <div class="flex items-center col-span-3">
                            <input
                                class="border border-solid border-black focus:border-red-400 focus:bg-white mt-1 w-full"
                                type="text" />
                        </div>
                        <div class="flex items-center">
                            <label class="text-sm text-gray-700">NIP Jaksa</label>
                        </div>
                        <div class="flex items-center col-span-3">
                            <input
                                class="border border-solid border-black focus:border-red-400 focus:bg-white mt-1 w-full"
                                type="text" />
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="bg-white rounded shadow mt-4">
            <div>
                <h2 class="text-2xl font-medium pl-6 pr-6 pt-1 pb-1 bg-yellow-200">Data Tersangka</h2>
            </div>

            <div class="pl-6 pr-6 pb-6 my-4">
                <button class="px-3 py-2 bg-yellow-400 hover:bg-yellow-500 text-white font-medium rounded">Tambah</button>
                
                <div class="mt-4">
                    <div class="grid grid-cols-8 gap-6">
                        <div class="flex items-center">
                            <label class="text-sm text-gray-700">Nama 1</label>
                        </div>
                        <div class="flex items-center col-span-7">
                            <input
                                class="border border-solid border-black focus:border-red-400 focus:bg-white mt-1 w-full"
                                type="text" />
                        </div>
                        <div class="flex items-center">
                            <label class="text-sm text-gray-700">Alamat 1</label>
                        </div>
                        <div class="flex items-center col-span-7">
                            <input
                                class="border border-solid border-black focus:border-red-400 focus:bg-white mt-1 w-full"
                                type="text" />
                        </div>
                        <div class="flex items-center">
                            <label class="text-sm text-gray-700">Upload Foto</label>
                        </div>
                        <div class="flex items-center col-span-7">
                            <input
                                class="border border-solid border-black focus:border-red-400 focus:bg-white mt-1 w-full"
                                type="file" />
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-white rounded shadow mt-4">
            <div>
                <h2 class="text-2xl font-medium pl-6 pr-6 pt-1 pb-1 bg-yellow-200">Detail Perkara</h2>
            </div>

            <div class="pl-6 pr-6 pb-6 my-4">
                <button class="px-3 py-2 bg-yellow-400 hover:bg-yellow-500 text-white font-medium rounded">Tambah</button>
                
                <div class="mt-4">
                    <div class="grid grid-cols-8 gap-6">
                        <div class="flex items-center">
                            <label class="text-sm text-gray-700">Jenis</label>
                        </div>
                        <div class="flex items-center col-span-7">
                            <select class="border border-solid border-black focus:border-indigo-400 focus:shadow-none focus:bg-white mt-1 block w-full" name="jenis-pidana">
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
                            </select>
                        </div>
                        <div class="flex">
                            <label class="text-sm text-gray-700">Pasal Dakwaan</label>
                        </div>
                        <div class="flex items-center col-span-7">
                            <textarea class="border border-solid border-black focus:border-red-400 focus:bg-white mt-1 w-full" rows="5">
                                
                            </textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>    


    <div class="bg-yellow-500 p-6 rounded shadow">
        <h2 class="text-2xl font-medium">Tables</h2>
        <div class="mt-4">
            <div class="flex flex-col">
                <div class="-my-2 py-2 overflow-x-auto sm:-mx-6 sm:px-6">
                    <div
                        class="align-middle inline-block min-w-full shadow overflow-hidden sm:rounded-lg border-b border-gray-200">
                        <table class="min-w-full">
                            <thead class="bg-gray-100">
                            <tr>
                                <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-right text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider"
                                    style="text-align: start">
                                    Name
                                </th>
                                <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider"
                                    style="text-align: start">
                                    Title
                                </th>
                                <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider"
                                    style="text-align: start">
                                    Status
                                </th>
                                <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider"
                                    style="text-align: start">
                                    Role
                                </th>
                                <th class="px-6 py-3 border-b border-gray-200 bg-gray-50"></th>
                            </tr>
                            </thead>
                            <tbody class="bg-white">
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
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-white p-6 rounded shadow mt-4">
        <h2 class="text-2xl font-medium">Steve forms</h2>
        <div class="mt-4">
            <div>
                <div class="flex flex-col sm:flex-row py-8">
                    <div class="sm:w-1/4">
                        <h2 class="text-xl">Account details</h2>
                    </div>
                    <div class="sm:w-3/4 grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <label class="block">
                            <span class="text-gray-700">Name</span>
                            <input
                                class="form-input bg-gray-200 border-gray-300 focus:border-indigo-400 focus:shadow-none focus:bg-white mt-1 block w-full"
                                type="text">
                        </label>
                        <label class="block">
                            <span class="text-gray-700">Email</span>
                            <input
                                class="form-input bg-gray-200 border-gray-300 focus:border-indigo-400 focus:shadow-none focus:bg-white mt-1 block w-full"
                                type="text">
                        </label>
                    </div>
                </div>
                <div class="flex py-8 flex-col sm:flex-row border-t border-gray-200">
                    <div class="sm:w-1/4">
                        <h2 class="text-xl">Account details</h2>
                    </div>
                    <div class="sm:w-3/4 grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <label class="block">
                            <span class="text-gray-700">Name</span>
                            <input
                                class="form-input bg-gray-200 border-gray-300 focus:border-indigo-400 focus:shadow-none focus:bg-white mt-1 block w-full"
                                type="text">
                        </label>
                        <label class="block">
                            <span class="text-gray-700">Email</span>
                            <input
                                class="form-input bg-gray-200 border-gray-300 focus:border-indigo-400 focus:shadow-none focus:bg-white mt-1 block w-full"
                                type="text">
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-white p-6 rounded shadow mt-4">
        <h2 class="text-2xl font-medium">Casual forms</h2>
        <div class="mt-4">
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                <label class="block">
                    <span class="text-gray-700">Name</span>
                    <input
                        class="form-input bg-gray-200 border-gray-300 focus:border-indigo-400 focus:shadow-none focus:bg-white mt-1 block w-full"
                        type="text">
                </label>
                <label class="block">
                    <span class="text-gray-700">Email address</span>
                    <input
                        class="form-input bg-gray-200 border-gray-300 focus:border-indigo-400 focus:shadow-none focus:bg-white mt-1 block w-full"
                        type="text">
                </label>
                <label class="block">
                    <span class="text-gray-700">Name</span>
                    <input
                        class="form-input bg-gray-200 border-gray-300 focus:border-indigo-400 focus:shadow-none focus:bg-white mt-1 block w-full"
                        type="text">
                </label>
                <label class="block">
                    <span class="text-gray-700">Email address</span>
                    <input
                        class="form-input bg-gray-200 border-gray-300 focus:border-indigo-400 focus:shadow-none focus:bg-white mt-1 block w-full"
                        type="text">
                </label>
            </div>
        </div>
    </div>

    <div class="bg-white p-6 rounded shadow mt-4">
        <h2 class="text-2xl font-medium">Buttons</h2>
        <div class="mt-4">
            <button class="px-2 py-1 bg-indigo-500 hover:bg-indigo-600 text-white text-sm font-medium rounded">Primary
                sm
            </button>
            <button class="px-2 py-1 bg-green-500 hover:bg-green-600 text-white text-sm font-medium rounded">Success
                sm
            </button>
            <button class="px-2 py-1 bg-red-500 hover:bg-red-600 text-white text-sm font-medium rounded">Danger sm
            </button>

            <button class="px-3 py-1 bg-indigo-500 hover:bg-indigo-600 text-white font-medium rounded">Primary</button>
            <button class="px-3 py-1 bg-green-500 hover:bg-green-600 text-white font-medium rounded">Success</button>
            <button class="px-3 py-1 bg-red-500 hover:bg-red-600 text-white font-medium rounded">Danger</button>

            <button class="px-4 py-2 bg-indigo-500 hover:bg-indigo-600 text-white font-medium rounded">Primary lg
            </button>
            <button class="px-4 py-2 bg-green-500 hover:bg-green-600 text-white font-medium rounded">Success lg</button>
            <button class="px-4 py-2 bg-red-500 hover:bg-red-600 text-white font-medium rounded">Danger lg</button>
        </div>
    </div>

@endsection