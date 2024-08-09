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

    {{-- BEGIN BENEFITS --}}
    @include('components.benefits')

    {{-- BEGIN SUBSCRIPTIONS --}}
    @include('components.subscriptions')

    {{-- BEGIN LEARNINGS --}}
    @include('components.learnings')

    {{-- BEGIN CTA --}}
    @include('components.cta')


    {{-- BEGIN CTA --}}
    @include('components.footer')
</div>

@endsection