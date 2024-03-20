@extends('layouts.app')

@section('content')
    @livewire('ubah-perkara', ['perkara' => $perkara])
@endsection