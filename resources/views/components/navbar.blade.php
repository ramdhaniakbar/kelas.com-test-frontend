<nav class="navbar navbar-expand-lg py-4 fixed-top">
    <div class="container justify-content-between">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('assets/image/logo.svg') }}" alt="logo image" />
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
            aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end offcanvas-size" tabindex="-1" id="offcanvasNavbar"
            aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header py-6">
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item mx-lg-2">
                        <a class="nav-link active" aria-current="page" href="#">Beranda</a>
                    </li>
                    <li class="nav-item mx-lg-2">
                        <a class="nav-link" href="#">Benefit</a>
                    </li>
                    <li class="nav-item mx-lg-2">
                        <a class="nav-link" href="#">Paket</a>
                    </li>
                    <li class="nav-item mx-lg-2">
                        <a class="nav-link" href="#">Kelas</a>
                    </li>
                    <li class="nav-item mx-lg-2">
                        <a class="nav-link" href="#">Kontak Kami</a>
                    </li>
                </ul>
                <ul class="navbar-nav px-3 px-lg-0 mx-auto ms-lg-auto">
                    <a class="navbar-brand d-lg-none mb-2" href="#">
                        <img src="{{ asset('assets/image/logo.svg') }}" alt="logo image" />
                    </a>
                    <span class="nav-slogan d-lg-none mb-4">We accelerate learning in your company</span>
                    <li class="nav-item d-flex flex-column-reverse flex-lg-row nav-item-button">
                        <button type="button" class="btn btn-primary me-lg-2">Ajukan Demo</button>
                        <button type="button" class="btn btn-secondary">Masuk</button>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
