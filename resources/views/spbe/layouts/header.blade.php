<!-- navigation -->
<header id="main-header" class="navigation sticky-header">
    <nav class="navbar navbar-expand-xl navbar-light text-center py-3">
        <div class="container">
            <div class="d-flex align-items-center">
                <a class="navbar-brand" href="/spbe">
                    <img loading="preload" decoding="async" class="img-fluid" width="40"
                        src="{{ asset('spbe_template/images/spbe.svg') }}" alt="SPBE">
                </a>
                <a class="navbar-brand mr-0" href="/">
                    <img loading="preload" decoding="async" class="img-fluid" width="40"
                        src="{{ asset('spbe_template/images/favicon.png') }}" alt="Logo Tulang Bawang">
                </a>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('domain') ? 'active' : '' }}" href="/domain">Domain SPBE</a>
                    </li>
                    <li class="nav-item "> <a class="nav-link" href="#kebijakan">Kebijakan</a>
                    </li>
                    <li class="nav-item "> <a class="nav-link" href="#tatakelola">Tata Kelola</a>
                    </li>
                    <li class="nav-item "> <a class="nav-link" href="#manajemen">Manajemen</a>
                    </li>
                    <li class="nav-item "> <a class="nav-link" href="#layanan">Layanan</a>
                    </li>
                </ul>
                <a href="#!" class="btn btn-outline-primary cutom-color">Masuk</a>
                {{-- <a href="#!" class="btn btn-custom ms-2 ms-lg-3">Daftar</a> --}}
            </div>
        </div>
    </nav>
</header>
<!-- /navigation -->


