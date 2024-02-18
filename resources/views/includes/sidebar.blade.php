<div class="h-full bg-gray-800">
    <div class="flex justify-end items-center p-2 h-6">
        <button type="button" @click="menuOpen = !menuOpen"
                class="text-gray-300 hover:text-gray-500 focus:outline-none 
                focus:text-gray-500">
            <svg class="w-6 h-6 text-white fill-current" fill="none" stroke-linecap="round"
                stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" 
                stroke="currentColor">
                <path d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
        </button>
    </div>
    <div>
        <div class="flex flex-col text-center">
            <div class="flex justify-center">
                <svg class="h-24 w-24 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
            </div>
            <h4 class="text-white text-sm font-bold">Selamat Datang</h4>
            <h4 class="text-white text-sm uppercase">-KEJAKSAAN NEGERI BANGGAI-</h4>
        </div>
        <div class="px-2 py-6">
            <ul>
                <li class="px-2 py-1 hover:bg-gray-900 text-white rounded">
                    <a href="#" class="relative flex items-center">
                        <svg class="w-6 h-6" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M11.47 3.841a.75.75 0 0 1 1.06 0l8.69 8.69a.75.75 0 1 0 1.06-1.061l-8.689-8.69a2.25 2.25 0 0 0-3.182 0l-8.69 8.69a.75.75 0 1 0 1.061 1.06l8.69-8.689Z" />
                            <path d="m12 5.432 8.159 8.159c.03.03.06.058.091.086v6.198c0 1.035-.84 1.875-1.875 1.875H15a.75.75 0 0 1-.75-.75v-4.5a.75.75 0 0 0-.75-.75h-3a.75.75 0 0 0-.75.75V21a.75.75 0 0 1-.75.75H5.625a1.875 1.875 0 0 1-1.875-1.875v-6.198a2.29 2.29 0 0 0 .091-.086L12 5.432Z" />
                        </svg>
                        <span class="mx-2 text-gray-300">Dashboard</span>
                        <span>
                            <svg class="absolute top-0 right-0 h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" 
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                            </svg>
                        </span>
                    </a>
                </li>
                <li class="px-2 py-1 hover:bg-gray-900 rounded" x-data="{ perkaraOpen: false }">   
                    <a href="#" class="relative flex items-center" @click="perkaraOpen = !perkaraOpen">
                        <svg class="h-6 w-6 text-white" viewBox="0 0 24 24" fill="none" 
                            stroke="currentColor" stroke-width="2" stroke-linecap="round"  
                            stroke-linejoin="round">  
                            <path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"></path> 
                            <path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"></path>
                        </svg>
                        <span class="mx-2 text-gray-300">Perkara</span>
                        <span>
                            <svg class="absolute top-0 right-0 h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" 
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                            </svg>
                        </span>
                    </a>
                    <div class="border-l border-gray-400 ml-4 pl-4 text-white"
                        x-show="perkaraOpen">
                        <h1 class="text-xs pt-2 hover:text-gray-200 cursor-pointer">Tambah Perkara</h1>
                        <h1 class="text-xs pt-2 hover:text-gray-200 cursor-pointer">Daftar Perkara</h1>
                        <h1 class="text-xs pt-2 hover:text-gray-200 cursor-pointer">Label Generator</h1>
                        <h1 class="text-xs pt-2 hover:text-gray-200 cursor-pointer">Index Data Barang Rampasan</h1>
                    </div>
                </li>
                <li class="px-2 py-1 hover:bg-gray-900 rounded">
                    <a href="#" class="relative flex items-center">
                        <svg class="h-6 w-6 text-white" viewBox="0 0 24 24" fill="none" 
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" 
                            stroke-linejoin="round">
                            <polyline points="9 11 12 14 22 4" />
                            <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11" />
                        </svg>
                        <span class="mx-2 text-gray-300">Penyelesaian</span>
                        <span>
                            <svg class="absolute top-0 right-0 h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" 
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                            </svg>
                        </span>
                    </a>
                </li>
                <li class="px-2 py-1 hover:bg-gray-900 rounded">
                    <a href="#" class="relative flex items-center">
                        <svg class="h-6 w-6 text-white" viewBox="0 0 24 24" fill="none" 
                            xmlns="http://www.w3.org/2000/svg" stroke="currentColor" stroke-width="2" 
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7" />
                            <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z" />
                        </svg>
                        <span class="mx-2 text-gray-300">Rekapitulasi</span>
                        <span>
                            <svg class="absolute top-0 right-0 h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" 
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                            </svg>
                        </span>
                    </a>
                </li>
                <li class="px-2 py-1 hover:bg-gray-900 rounded">
                    <a href="#" class="relative flex items-center">
                        <svg class="h-6 w-6 text-white" fill="none" stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                            <path
                                d="M16 8v8m-4-5v5m-4-2v2m-2 4h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>
                        <span class="mx-2 text-gray-300">Laporan Bulanan</span>
                        <span>
                            <svg class="absolute top-0 right-0 h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" 
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                            </svg>
                        </span>
                    </a>
                </li>
                <li class="px-2 py-1 hover:bg-gray-900 rounded">
                    <a href="#" class="relative flex items-center">
                        <svg class="h-6 w-6 text-white" viewBox="0 0 24 24" fill="none" stroke="currentColor" 
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z" />
                            <polyline points="13 2 13 9 20 9" />
                        </svg>
                        <span class="mx-2 text-gray-300">Dokumen Formulir</span>
                        <span>
                            <svg class="absolute top-0 right-0 h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" 
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                            </svg>
                        </span>
                    </a>
                </li>
                <li class="px-2 py-1 hover:bg-gray-900 rounded">
                    <a href="#" class="relative flex items-center">
                        <svg class="h-6 w-6 text-white" viewBox="0 0 24 24" fill="none" 
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" 
                            stroke-linejoin="round">
                            <circle cx="12" cy="12" r="3" />
                            <path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z" />
                        </svg>
                        <span class="mx-2 text-gray-300">Pengaturan</span>
                        <span>
                            <svg class="absolute top-0 right-0 h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" 
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                            </svg>
                        </span>
                    </a>
                </li>
                <li class="px-2 py-1 hover:bg-gray-900 rounded">
                    <a href="#" class="relative flex items-center">
                        <svg class="h-6 w-6 text-white" viewBox="0 0 24 24" fill="none" stroke="currentColor" 
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10" />
                            <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3" />
                            <line x1="12" y1="17" x2="12.01" y2="17" />
                        </svg>
                        <span class="mx-2 text-gray-300">Bantuan</span>
                        <span>
                            <svg class="absolute top-0 right-0 h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" 
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                            </svg>
                        </span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>