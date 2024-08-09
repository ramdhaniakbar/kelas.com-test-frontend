@extends('layouts.app')

@section('title', 'Kelas.center')

@section('content')

    <div class="kelas-center">
        {{-- BEGIN NAVBAR --}}
        @include('components.navbar')

        {{-- BEGIN HERO --}}
        @include('components.hero')

        {{-- BEGIN CLIENTS --}}
        @include('components.clients')

        {{-- BEGIN BENEFITS --}}
        <section id="benefit-section" class="benefit-section">
            <div class="d-flex flex-column justify-content-center align-items-center">
                <h1 class="benefit-title text-center">Bagaimana Kelas Center Membantu Anda?</h1>
                <span class="benefit-description text-center">Kami menghadirkan platform pembelajaran yang komprehensif untuk
                    memberdayakan karyawan Anda. Tingkatkan produktivitas dan efisiensi tim dengan Kelas Center.</span>
            </div>

            <div class="d-flex justify-content-center gap-2 gap-md-3 mt-5">
                <div class="btn-benefit-container d-flex flex-nowrap overflow-auto">
                    <button type="button" class="btn btn-primary benefit-btn" onclick="loadBenefit('LMS')">LMS</button>
                    <button type="button" class="btn btn-secondary benefit-btn"
                        onclick="loadBenefit('Featured')">Featured</button>
                    <button type="button" class="btn btn-secondary benefit-btn"
                        onclick="loadBenefit('Video Learning + Live Webinar')">Video Learning + Live Webinar</button>
                    <button type="button" class="btn btn-secondary benefit-btn"
                        onclick="loadBenefit('Inquiry Learning')">Inquiry Learning</button>
                </div>
            </div>

            <div class="benefit-content d-flex flex-column flex-md-row w-100 gap-md-4 gap-lg-5 mt-5">
                <div class="w-100 w-md-50 d-flex flex-column">
                    <h2 class="benefit-content-title mb-3 mb-lg-2">{{ $benefit->title }}</h2>
                    <div class="d-block d-md-none w-100 benefit-img"></div>
                    <span class="benefit-content-description">{{ $benefit->description }}</span>
                    @if ($benefit && $benefit->benefit_privileges)
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
                    @else
                        <p>No benefit information available.</p>
                    @endif
                </div>
                <div class="d-none d-md-block w-100 benefit-img"></div>
            </div>
        </section>


        {{-- BEGIN SUBSCRIPTIONS --}}
        <section class="subscription-section">
            <div class="d-flex flex-column justify-content-center align-items-center">
                <h1 class="subscription-title text-center">Pilihan Paket Untuk Perusahaan di Kelas Center</h1>
            </div>

            <div class="subscription-card-container d-flex flex-row overflow-auto gap-4 mt-5">
                @if ($subscriptions)
                    @foreach ($subscriptions as $subscription)
                        <div class="subscription-card border px-4 py-4"
                            style="background-color: {{ $subscription->name == 'Pro' ? '#E0EFF5' : '#FFF' }}">
                            <div class="d-flex align-items-center gap-4 mb-3">
                                <img src="{{ asset('assets/image/subscription_starter.png') }}" width="40"
                                    alt="subscription starter">
                                <h3 class="subscription-pack-title mt-2">{{ $subscription->name }}</h3>
                            </div>
                            <span class="subscription-privilege">Kelebihan</span>
                            <div class="d-flex flex-column gap-3 mt-3">
                                @if ($subscription->subscription_privileges)
                                    @foreach ($subscription->subscription_privileges as $subscription_privilege)
                                        <div class="d-flex gap-2 align-items-center justify-content-start">
                                            <img src="{{ asset('assets/image/check_circle_dark.png') }}" width="24"
                                                alt="check circle">
                                            <span class="subscription-content-list">{{ $subscription_privilege->name }}</span>
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                            <img src="{{ asset('assets/image/divider.png') }}" class="w-100 mt-3" alt="Divider">
                            <div class="d-flex flex-column gap-1 mt-3">
                                <span class="subscription-normal-price">Rp{{ Number::format($subscription->normal_price, locale: 'id') }}</span>
                                <div class="d-flex align-items-center"><span
                                        class="subscription-selling-price">Rp{{ Number::format($subscription->selling_price, locale: 'id') }}</span><span>/bulan</span></div>
                            </div>
                            <button type="button"
                                class="btn {{ $subscription->name == 'Pro' ? 'btn-subscription-pro' : 'btn-subscription' }} w-100 mt-3">Pilih
                                Paket</button>
                        </div>
                    @endforeach
                @else
                    <p>No benefit information available.</p>
                @endif
            </div>

            <div class="d-flex justify-content-center">
                <div class="subscription-footer w-100">
                    <div class="d-flex flex-column flex-lg-row justify-content-start justify-content-lg-between">
                        <div class="d-flex flex-column flex-lg-row align-items-start align-items-lg-center">
                            <div class="d-flex align-items-center gap-4 me-5">
                                <img src="{{ asset('assets/image/building.png') }}" width="40"
                                    alt="subscription starter">
                                <span class="subscription-footer-title">Enterprise</span>
                            </div>
                            <div class="d-flex flex-column flex-lg-row gap-3 mt-4 mt-lg-0">
                                <div class="d-flex gap-1">
                                    <img src="{{ asset('assets/image/check_circle_light.png') }}" width="24"
                                        height="24" alt="check light">
                                    <span class="subscription-content-list text-white">
                                        >100 users
                                    </span>
                                </div>
                                <div class="d-flex gap-1">
                                    <img src="{{ asset('assets/image/check_circle_light.png') }}" width="24"
                                        height="24" alt="check light">
                                    <span class="subscription-content-list text-white">
                                        All Access Class
                                    </span>
                                </div>
                                <div class="d-flex gap-1">
                                    <img src="{{ asset('assets/image/check_circle_light.png') }}" width="24"
                                        height="24" alt="check light">
                                    <span class="subscription-content-list text-white">
                                        More Features
                                    </span>
                                </div>
                            </div>
                        </div>
                        <button type="button" class="btn btn-secondary mt-4 mt-lg-0" style="padding: 15px 10px;">Contact
                            Us</button>
                    </div>
                </div>
            </div>
        </section>


        {{-- BEGIN LEARNINGS --}}
        @include('components.learnings')

        {{-- BEGIN CTA --}}
        @include('components.cta')


        {{-- BEGIN CTA --}}
        @include('components.footer')
    </div>

@endsection

@section('scripts')
    <script>
        function loadBenefit(category) {
            console.log('category ', category);
            fetch(`{{ route('index') }}?category=${encodeURIComponent(category)}`)
                .then((response) => response.text())
                .then(data => {
                    console.log('data ', data);
                    document.querySelector('.kelas-center').innerHTML = data;
                }).catch((err) => {
                    console.log(err);
                });
        }
    </script>
@endsection
