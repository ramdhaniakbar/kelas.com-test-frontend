<section class="client-section d-flex flex-column justify-content-between align-items-center gap-4 gap-lg-5">
    <div class="px-4">
        <h1 class="client-title text-center">Telah Dipercaya oleh 10.000+ Profesional User dari</h1>
    </div>

    <!-- Flexbox layout for large screens -->
    <div class="w-100 d-none d-lg-flex justify-content-lg-evenly align-items-lg-center">
        <div class="client-image">
            <img src="{{ asset('assets/image/client-1.png') }}" alt="Client 1" style="width: 55.45px; height: 56.25px;">
        </div>
        <div class="client-image">
            <img src="{{ asset('assets/image/client-2.png') }}" alt="Client 2" style="width: 99.58px; height: 42.61px;">
        </div>
        <div class="client-image">
            <img src="{{ asset('assets/image/client-3.png') }}" alt="Client 3" style="width: 86px; height: 31.25px;">
        </div>
        <div class="client-image">
            <img src="{{ asset('assets/image/client-4.png') }}" alt="Client 4" style="width: 86px; height: 40.34px;">
        </div>
        <div class="client-image">
            <img src="{{ asset('assets/image/client-5.png') }}" alt="Client 5" style="width: 99.58px; height: 52.27px;">
        </div>
        <div class="client-image">
            <img src="{{ asset('assets/image/client-6.png') }}" alt="Client 6" style="width: 83.74px; height: 76.7px;">
        </div>
        <div class="client-image">
            <img src="{{ asset('assets/image/client-7.png') }}" alt="Client 7" style="width: 99.58px; height: 31.25px;">
        </div>
        <div class="client-image">
            <img src="{{ asset('assets/image/client-8.png') }}" alt="Client 8" style="width: 73.55px; height: 73.86px;">
        </div>
    </div>

    <!-- Carousel layout for smaller screens -->
    <div id="carouselExampleIndicators" class="w-100 d-flex align-items-center carousel slide d-lg-none"
        data-bs-ride="carousel">
        <div class="carousel-indicators d-flex gap-1">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="d-flex justify-content-evenly align-items-center">
                    <div class="client-image">
                        <img src="{{ asset('assets/image/client-1.png') }}" alt="Client 1"
                            style="width: 55.45px; height: 56.25px; max-width: 100%; max-height: 100%;">
                    </div>
                    <div class="client-image">
                        <img src="{{ asset('assets/image/client-2.png') }}" alt="Client 2"
                            style="width: 99.58px; height: 42.61px; max-width: 100%; max-height: 100%;">
                    </div>
                    <div class="client-image">
                        <img src="{{ asset('assets/image/client-3.png') }}" alt="Client 3"
                            style="width: 86px; height: 31.25px; max-width: 100%; max-height: 100%;">
                    </div>
                    <div class="client-image">
                        <img src="{{ asset('assets/image/client-4.png') }}" alt="Client 4"
                            style="width: 86px; height: 40.34px; max-width: 100%; max-height: 100%;">
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="d-flex justify-content-evenly align-items-center">
                    <div class="client-image">
                        <img src="{{ asset('assets/image/client-5.png') }}" alt="Client 5"
                            style="width: 99.58px; height: 52.27px; max-width: 100%; max-height: 100%;">
                    </div>
                    <div class="client-image">
                        <img src="{{ asset('assets/image/client-6.png') }}" alt="Client 6"
                            style="width: 83.74px; height: 76.7px; max-width: 100%; max-height: 100%;">
                    </div>
                    <div class="client-image">
                        <img src="{{ asset('assets/image/client-7.png') }}" alt="Client 7"
                            style="width: 99.58px; height: 31.25px; max-width: 100%; max-height: 100%;">
                    </div>
                    <div class="client-image">
                        <img src="{{ asset('assets/image/client-8.png') }}" alt="Client 8"
                            style="width: 73.55px; height: 73.86px; max-width: 100%; max-height: 100%;">
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</section>
