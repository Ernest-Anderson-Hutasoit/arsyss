@extends('layouts.app')

@section('content')
    <div>
        <div x-data="{ flash: true }">
            @if(session()->has('success'))
                <div x-show="flash">
                    <div class="h-screen w-full fixed top-0 left-0 flex justify-center items-center bg-black bg-opacity-50">
                        <div class="relative p-4 w-full max-w-md max-h-full">
                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                <button type="button" @click="flash = false" class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white">
                                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                    </svg>
                                    <span class="sr-only">Close modal</span>
                                </button>
                                <div class="p-4 md:p-5 flex flex-col items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0 0 48 48">
                                        <path fill="#4caf50" d="M44,24c0,11.045-8.955,20-20,20S4,35.045,4,24S12.955,4,24,4S44,12.955,44,24z"></path><path fill="#ccff90" d="M34.602,14.602L21,28.199l-5.602-5.598l-2.797,2.797L21,33.801l16.398-16.402L34.602,14.602z"></path>
                                    </svg>
                                    <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">{{session('success')}}</h3>
                                    <button type="button" @click="flash = false" class="text-white bg-green-600 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                                        Ok
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        </div>
        
        <div class="flex bg-gray-300 mb-4 px-2 py-2">
            <svg class="h-6 w-6 text-black" viewBox="0 0 24 24" fill="none" 
                stroke="currentColor" stroke-width="2" stroke-linecap="round"  
                stroke-linejoin="round">  
                <path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"></path> 
                <path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"></path>
            </svg>
            <h3 class="px-2 text-gray-700">Daftar Perkara</h3>
        </div>

        <div class="bg-gray-300 mx-8 mb-4 p-6 rounded shadow">
            <a href="{{route('perkara.index')}}" class="px-3 py-2 bg-gray-400 hover:bg-gray-500 text-white font-medium rounded">Daftar Perkara</a>
            <a href="{{route('perkara.tambah')}}" class="px-3 py-2 bg-yellow-400 hover:bg-yellow-500 text-white font-medium rounded">Tambah Perkara</a>    
            
            <!-- <button class="px-3 py-2 bg-gray-400 hover:bg-gray-500 text-white font-medium rounded">Daftar Perkara</button>
            <button class="px-3 py-2 bg-yellow-400 hover:bg-yellow-500 text-white font-medium rounded">Tambah Perkara</button> -->
            
            <div class="bg-white rounded shadow mt-4 overflow-auto">
                <div>
                    <h2 class="text-2xl font-medium pl-6 pr-6 pt-1 pb-1 bg-yellow-200">Daftar Perkara</h2>
                </div>
                <table class="table-auto" id="perkarasTable">
                    <thead class="bg-gray-100">
                        <tr>
                            <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-right text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider"
                                style="text-align: start">
                                Aksi
                            </th>
                            <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-right text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider"
                                style="text-align: start">
                                Nomor Register Perkara
                            </th>
                            <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider"
                                style="text-align: start">
                                Nama Terpidana
                            </th>
                            <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider"
                                style="text-align: start">
                                Jenis Barang Bukti
                            </th>
                            <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider"
                                style="text-align: start">
                                Barang Bukti
                            </th>
                            <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider"
                                style="text-align: start">
                                Jenis Perkara
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white">
                        @foreach ($perkaras as $index => $perkara)
                            <tr>
                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                    <form method="post" action="{{route('perkara.hapus', ['perkara' => $perkara->id])}}">
                                        @csrf
                                        @method('delete')

                                        <button class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg px-1 py-1 my-1 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900"
                                            type="submit">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="text-white w-6 h-6">
                                                <path fill-rule="evenodd" d="M16.5 4.478v.227a48.816 48.816 0 0 1 3.878.512.75.75 0 1 1-.256 1.478l-.209-.035-1.005 13.07a3 3 0 0 1-2.991 2.77H8.084a3 3 0 0 1-2.991-2.77L4.087 6.66l-.209.035a.75.75 0 0 1-.256-1.478A48.567 48.567 0 0 1 7.5 4.705v-.227c0-1.564 1.213-2.9 2.816-2.951a52.662 52.662 0 0 1 3.369 0c1.603.051 2.815 1.387 2.815 2.951Zm-6.136-1.452a51.196 51.196 0 0 1 3.273 0C14.39 3.05 15 3.684 15 4.478v.113a49.488 49.488 0 0 0-6 0v-.113c0-.794.609-1.428 1.364-1.452Zm-.355 5.945a.75.75 0 1 0-1.5.058l.347 9a.75.75 0 1 0 1.499-.058l-.346-9Zm5.48.058a.75.75 0 1 0-1.498-.058l-.347 9a.75.75 0 0 0 1.5.058l.345-9Z" clip-rule="evenodd" />
                                            </svg>
                                        </button>
                                    </form>
                                    
                                    <a href="{{route('perkara.edit', ['id' => $perkara->id])}}">
                                        <button class="focus:outline-none text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg px-1 py-1 my-1 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-900">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="text-white w-6 h-6">
                                                <path d="M21.731 2.269a2.625 2.625 0 0 0-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 0 0 0-3.712ZM19.513 8.199l-3.712-3.712-12.15 12.15a5.25 5.25 0 0 0-1.32 2.214l-.8 2.685a.75.75 0 0 0 .933.933l2.685-.8a5.25 5.25 0 0 0 2.214-1.32L19.513 8.2Z" />
                                            </svg>
                                        </button>
                                    </a>
                                </td>
                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                    {{$perkara->nomor_register}}
                                </td>
                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                    @foreach ($perkara->tersangkas as $tersangka)
                                        <li>{{$tersangka->nama}}</li>
                                    @endforeach
                                </td>
                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                    @foreach ($perkara->barangbuktis as $barangbukti)
                                        <li>{{$barangbukti->jenis}}</li>
                                    @endforeach
                                </td>
                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                    @foreach ($perkara->barangbuktis as $barangbukti)
                                        <li>{{$barangbukti->nama}}</li>
                                    @endforeach
                                </td>
                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                    <li>{{$perkara->jenis}}</li>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection