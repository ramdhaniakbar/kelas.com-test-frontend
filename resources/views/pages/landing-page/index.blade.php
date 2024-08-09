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
        <section class="benefit-section">
            <div class="d-flex flex-column justify-content-center align-items-center">
                <h1 class="benefit-title text-center">Bagaimana Kelas Center Membantu Anda?</h1>
                <span class="benefit-description text-center">Kami menghadirkan platform pembelajaran yang komprehensif untuk
                    memberdayakan karyawan Anda. Tingkatkan produktivitas dan efisiensi tim dengan Kelas Center.</span>
            </div>

            <div class="d-flex justify-content-center gap-2 gap-md-3 mt-5">
                <div class="btn-benefit-container d-flex flex-nowrap overflow-auto">
                    <button type="button" class="btn btn-primary benefit-btn">LMS</button>
                    <button type="button" class="btn btn-secondary benefit-btn">Featured</button>
                    <button type="button" class="btn btn-secondary benefit-btn">Video Learning + Live Webinar</button>
                    <button type="button" class="btn btn-secondary benefit-btn">Inquiry Learning</button>
                </div>
            </div>

            <div class="benefit-content d-flex flex-column flex-md-row w-100 gap-md-4 gap-lg-5 mt-5">
                <div class="w-100 w-md-50 d-flex flex-column">
                    <h2 class="benefit-content-title mb-3 mb-lg-2">{{ $benefit->title }}</h2>
                    <div class="d-block d-md-none w-100 benefit-img"></div>
                    <span class="benefit-content-description">{{ $benefit->description }}</span>
                    @foreach ($benefit->benefit_privileges as $benefit_privilege)
                        <div class="d-flex flex-column gap-2">
                            <div class="d-flex gap-2 align-items-center justify-content-start benefit-content-list">
                                <img src="{{ asset('assets/image/check_small.png') }}" width="30" alt="check small">
                                <h3 class="benefit-content-title-list">{{ $benefit_privilege->title }}</h3>
                            </div>
                            <div class="benefit-content-list-description w-75">
                                <span class="">{{ $benefit_privilege->description }}</span>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="d-none d-md-block w-100 benefit-img"></div>
            </div>
        </section>


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
