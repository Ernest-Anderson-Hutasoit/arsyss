@extends('layouts.app')

@section('content')
    <div x-data="{manual : true, api : false}">
        <template x-if="manual">
            @livewire('tambah-perkara-manual')
        </template>
        <template x-if="api">
            @livewire('tambah-perkara')
        </template>
    </div>
@endsection