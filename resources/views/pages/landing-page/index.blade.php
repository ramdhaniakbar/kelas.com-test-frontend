@extends('layouts.app')

@section('title', 'Kelas.center')

@section('content')

<div>
    {{-- BEGIN NAVBAR --}}
    @include('components.navbar')

    {{-- BEGIN HERO --}}
    @include('components.hero')

    {{-- BEGIN CLIENTS --}}
    @include('components.clients')
</div>

@endsection