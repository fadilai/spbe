@extends('spbe.layouts.app')

@section('content')
    {{-- Section Banner --}}
    <section class="banner bg-tertiary position-relative overflow-hidden">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div class="block text-center text-lg-start pe-0 pe-xl-5">
                        <h3 class="text-capitalize mb-4 fs-2">Sistem Pemerintahan Berbasis Elektronik (SPBE) Mendukung
                            Pelayanan Publik</h3>
                        <p class="mb-4" style="color: #114A43;font-weight:600;">Pemerintah Kabupaten Tulang Bawang</p> <a
                            type="button" class="btn btn-custom" href="https://tulangbawangkab.go.id/">Kunjungi
                            Sekarang<span style="font-size: 14px;" class="ms-2 fas fa-arrow-right"></span></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="ps-lg-5 text-center">
                        <img loading="lazy" decoding="async" src="{{ asset('spbe_template/images/img_cover.png') }}"
                            alt="banner image" class="w-70">
                    </div>
                </div>
            </div>
        </div>
        <div class="has-shapes">
            <svg class="shape shape-left text-light" viewBox="0 0 192 752" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M-30.883 0C-41.3436 36.4248 -22.7145 75.8085 4.29154 102.398C31.2976 128.987 65.8677 146.199 97.6457 166.87C129.424 187.542 160.139 213.902 172.162 249.847C193.542 313.799 149.886 378.897 129.069 443.036C97.5623 540.079 122.109 653.229 191 728.495"
                    stroke="currentColor" stroke-miterlimit="10" />
                <path
                    d="M-55.5959 7.52271C-66.0565 43.9475 -47.4274 83.3312 -20.4214 109.92C6.58466 136.51 41.1549 153.722 72.9328 174.393C104.711 195.064 135.426 221.425 147.449 257.37C168.829 321.322 125.174 386.42 104.356 450.559C72.8494 547.601 97.3965 660.752 166.287 736.018"
                    stroke="currentColor" stroke-miterlimit="10" />
                <path
                    d="M-80.3302 15.0449C-90.7909 51.4697 -72.1617 90.8535 -45.1557 117.443C-18.1497 144.032 16.4205 161.244 48.1984 181.915C79.9763 202.587 110.691 228.947 122.715 264.892C144.095 328.844 100.439 393.942 79.622 458.081C48.115 555.123 72.6622 668.274 141.552 743.54"
                    stroke="currentColor" stroke-miterlimit="10" />
                <path
                    d="M-105.045 22.5676C-115.506 58.9924 -96.8766 98.3762 -69.8706 124.965C-42.8646 151.555 -8.29436 168.767 23.4835 189.438C55.2615 210.109 85.9766 236.469 98.0001 272.415C119.38 336.367 75.7243 401.464 54.9072 465.604C23.4002 562.646 47.9473 675.796 116.838 751.063"
                    stroke="currentColor" stroke-miterlimit="10" />
            </svg>
            <svg class="shape shape-right text-light" viewBox="0 0 731 746" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M12.1794 745.14C1.80036 707.275 -5.75764 666.015 8.73984 629.537C27.748 581.745 80.4729 554.968 131.538 548.843C182.604 542.703 234.032 552.841 285.323 556.748C336.615 560.64 391.543 557.276 433.828 527.964C492.452 487.323 511.701 408.123 564.607 360.255C608.718 320.353 675.307 307.183 731.29 327.323"
                    stroke="currentColor" stroke-miterlimit="10" />
                <path
                    d="M51.0253 745.14C41.2045 709.326 34.0538 670.284 47.7668 635.783C65.7491 590.571 115.623 565.242 163.928 559.449C212.248 553.641 260.884 563.235 309.4 566.931C357.916 570.627 409.887 567.429 449.879 539.701C505.35 501.247 523.543 426.331 573.598 381.059C615.326 343.314 678.324 330.853 731.275 349.906"
                    stroke="currentColor" stroke-miterlimit="10" />
                <path
                    d="M89.8715 745.14C80.6239 711.363 73.8654 674.568 86.8091 642.028C103.766 599.396 150.788 575.515 196.347 570.054C241.906 564.578 287.767 573.629 333.523 577.099C379.278 580.584 428.277 577.567 465.976 551.423C518.279 515.172 535.431 444.525 582.62 401.832C621.964 366.229 681.356 354.493 731.291 372.46"
                    stroke="currentColor" stroke-miterlimit="10" />
                <path
                    d="M128.718 745.14C120.029 713.414 113.678 678.838 125.837 648.274C141.768 608.221 185.939 585.788 228.737 580.659C271.536 575.515 314.621 584.008 357.6 587.282C400.58 590.556 446.607 587.719 482.028 563.16C531.163 529.111 547.275 462.733 591.612 422.635C628.572 389.19 684.375 378.162 731.276 395.043"
                    stroke="currentColor" stroke-miterlimit="10" />
                <path
                    d="M167.564 745.14C159.432 715.451 153.504 683.107 164.863 654.519C179.753 617.046 221.088 596.062 261.126 591.265C301.164 586.452 341.473 594.402 381.677 597.465C421.88 600.527 464.95 597.872 498.094 574.896C544.061 543.035 559.146 480.942 600.617 443.423C635.194 412.135 687.406 401.817 731.276 417.612"
                    stroke="currentColor" stroke-miterlimit="10" />
                <path
                    d="M817.266 289.466C813.108 259.989 787.151 237.697 759.261 227.271C731.372 216.846 701.077 215.553 671.666 210.904C642.254 206.24 611.795 197.156 591.664 175.224C555.853 136.189 566.345 75.5336 560.763 22.8649C552.302 -56.8256 498.487 -130.133 425 -162.081"
                    stroke="currentColor" stroke-miterlimit="10" />
                <path
                    d="M832.584 276.159C828.427 246.683 802.469 224.391 774.58 213.965C746.69 203.539 716.395 202.246 686.984 197.598C657.573 192.934 627.114 183.85 606.982 161.918C571.172 122.883 581.663 62.2275 576.082 9.55873C567.62 -70.1318 513.806 -143.439 440.318 -175.387"
                    stroke="currentColor" stroke-miterlimit="10" />
                <path
                    d="M847.904 262.853C843.747 233.376 817.789 211.084 789.9 200.659C762.011 190.233 731.716 188.94 702.304 184.292C672.893 179.627 642.434 170.544 622.303 148.612C586.492 109.577 596.983 48.9211 591.402 -3.74766C582.94 -83.4382 529.126 -156.746 455.638 -188.694"
                    stroke="currentColor" stroke-miterlimit="10" />
                <path
                    d="M863.24 249.547C859.083 220.07 833.125 197.778 805.236 187.353C777.347 176.927 747.051 175.634 717.64 170.986C688.229 166.321 657.77 157.237 637.639 135.306C601.828 96.2707 612.319 35.6149 606.738 -17.0538C598.276 -96.7443 544.462 -170.052 470.974 -202"
                    stroke="currentColor" stroke-miterlimit="10" />
            </svg>
        </div>
    </section>
    {{-- End Section Banner --}}

    {{-- Section Tentang --}}
    <section id="tentang" class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="section-title pt-4">
                        <h2 class="mb-3">Tentang</h2>
                        <p>Dasar penyusunan SPBE dengan memperhatikan komparasi peraturan PermenPanRB Nomor 5 Tahun 2018
                            dengan PermenPanRB Nomor 59 Tahun 2020.</p>
                        <img src="{{ asset('spbe_template/images/tentang.webp') }}" alt="Deskripsi gambar"
                            class="img-fluid mt-4 bounce-effect">
                    </div>
                </div>

                <!-- Start of Service Items (2 rows of 2 items) -->
                <div class="col-lg-8">
                    <div class="row">
                        <!-- First row -->
                        <div class="col-md-6">
                            <div class="service-item">
                                <a class="text-black" href="#kebijakan">
                                    <div class="block">
                                        <span class="colored-box text-center h4 mb-4">01</span>
                                        <h4 class="mb-3 service-title">Kebijakan SPBE</h4>
                                        <p class="mb-0 service-description">Aspek 1: Kebijakan Internal Tata Kelola SPBE.
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="service-item">
                                <a class="text-black" href="#tatakelola">
                                    <div class="block">
                                        <span class="colored-box text-center h4 mb-4">02</span>
                                        <h3 class="mb-3 service-title">Tata Kelola SPBE</h3>
                                        <p class="mb-0 service-description">Aspek 2 - Perencanaan Strategis SPBE.<br> Aspek
                                            3 -
                                            Teknologi Informasi dan Komunikasi.<br> Aspek 4 - Penyelenggara SPBE.</p>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <!-- Second row -->
                        <div class="col-md-6">
                            <div class="service-item">
                                <a class="text-black" href="#manajemen">
                                    <div class="block">
                                        <span class="colored-box text-center h4 mb-4">03</span>
                                        <h3 class="mb-3 service-title">Manajemen SPBE</h3>
                                        <p class="mb-0 service-description">Aspek 5 - Penerapan Manajemen SPBE.<br> Aspek 6
                                            - Audit
                                            TIK.</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="service-item">
                                <a class="text-black" href="#layanan">
                                    <div class="block">
                                        <span class="colored-box text-center h4 mb-4">04</span>
                                        <h3 class="mb-3 service-title">Layanan SPBE</h3>
                                        <p class="mb-0 service-description">Aspek 7- Layanan Pemerintah Berbasis
                                            Elektronik.<br> Aspek
                                            8 - Layanan Publik Berbasis Elektronik.</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of Service Items -->
            </div>
        </div>
    </section>
    {{-- End Section Tentang --}}

    {{-- Section Index Spbe --}}
    <section id="index_spbe" class="about-section section bg-tertiary position-relative overflow-hidden">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="section-title">
                        <h4 class="text-primary text-uppercase fw-bold mb-3">Index SPBE</h4>
                        <h5>Kabupaten Tulang Bawang</h5>
                        <p class="lead mb-0 mt-4">
                        <div>
                            <canvas id="myChart"></canvas>
                        </div>
                        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                        <script>
                            const ctx = document.getElementById('myChart');

                            new Chart(ctx, {
                                type: 'bar',
                                data: {
                                    labels: ['2019', '2020', '2021', '2022', '2023', '2024'],
                                    datasets: [{
                                        label: 'Statistik SPBE Kabupaten Tulang Bawang',
                                        data: [1.52, 0.00, 0.00, 2.09, 2.55, 2.85],
                                        borderWidth: 1,
                                        backgroundColor: '#134B44',
                                        borderColor: '#134B44'
                                    }]
                                },
                                options: {
                                    scales: {
                                        y: {
                                            beginAtZero: true,
                                            max: 4.00
                                        }
                                    }
                                }
                            });
                        </script>
                        </p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="dropdown mb-2" style="pointer-events: auto; position: relative; text-align:end;">
                        <button class="dropdown-button"
                            style="background-color: #114A43; color: white; padding: 8px 15px; border: none; cursor: pointer; border-radius: 5px;">
                            Pilih Tahun <i class="bi bi-menu-button-fill"></i>
                        </button>
                        <ul class="dropdown-menu"
                            style="list-style-type: none; margin: 0; padding: 0; position: absolute; background-color: white; box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1); border-radius: 5px; display: none; min-width: 150px; z-index: 1000; right:0;">
                            <li><a href="#" class="dropdown-item" data-year="2019"
                                    style="display: block; padding: 10px; text-decoration: none; color: black; cursor: pointer;">2019</a>
                            </li>
                            <li><a href="#" class="dropdown-item" data-year="2020"
                                    style="display: block; padding: 10px; text-decoration: none; color: black; cursor: pointer;">2020</a>
                            </li>
                            <li><a href="#" class="dropdown-item" data-year="2021"
                                    style="display: block; padding: 10px; text-decoration: none; color: black; cursor: pointer;">2021</a>
                            </li>
                            <li><a href="#" class="dropdown-item" data-year="2022"
                                    style="display: block; padding: 10px; text-decoration: none; color: black; cursor: pointer;">2022</a>
                            </li>
                            <li><a href="#" class="dropdown-item" data-year="2023"
                                    style="display: block; padding: 10px; text-decoration: none; color: black; cursor: pointer;">2023</a>
                            </li>
                            <li><a href="#" class="dropdown-item" data-year="2024"
                                    style="display: block; padding: 10px; text-decoration: none; color: black; cursor: pointer;">2024</a>
                            </li>
                        </ul>
                    </div>
                    <div class="card mb-2 shadow" style="pointer-events: none !important;  background-color:#114A43; ">
                        <div class="card-body">
                            <h3 class="card-title text-white" id="nilai-spbe">2.85</h3>
                            <h5 class="card-text text-white" id="tahun-spbe">Nilai SPBE Tahun 2024</h5>
                        </div>
                    </div>

                    <div class="card shadow" style="pointer-events: none !important;  ">
                        <div class="card-body">
                            <h5 class="card-title mb-3">Domain SPBE</h5>
                            <div class="domains-container" id="domains-container">
                                <div class="domain">
                                    <h5 class="text-primary">3.70</h5>
                                    <p>Domain Kebijakan SPBE</p>
                                </div>
                                <div class="domain">
                                    <h5 class="text-primary">2.10</h5>
                                    <p>Domain Tata Kelola SPBE</p>
                                </div>
                                <div class="domain">
                                    <h5 class="text-primary">1.00</h5>
                                    <p>Domain Manajemen SPBE</p>
                                </div>
                                <div class="domain">
                                    <h5 class="text-primary">3.69</h5>
                                    <p>Domain Layanan SPBE</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="has-shapes">
                <svg class="shape shape-left text-light" width="381" height="443" viewBox="0 0 381 443"
                    fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M334.266 499.007C330.108 469.108 304.151 446.496 276.261 435.921C248.372 425.346 218.077 424.035 188.666 419.32C159.254 414.589 128.795 405.375 108.664 383.129C72.8533 343.535 83.3445 282.01 77.7634 228.587C69.3017 147.754 15.4873 73.3967 -58.0001 40.9907"
                        stroke="currentColor" stroke-miterlimit="10" />
                    <path
                        d="M349.584 485.51C345.427 455.611 319.469 433 291.58 422.425C263.69 411.85 233.395 410.538 203.984 405.823C174.573 401.092 144.114 391.878 123.982 369.632C88.1716 330.038 98.6628 268.513 93.0817 215.09C84.62 134.258 30.8056 59.8999 -42.6819 27.494"
                        stroke="currentColor" stroke-miterlimit="10" />
                    <path
                        d="M364.904 472.013C360.747 442.114 334.789 419.503 306.9 408.928C279.011 398.352 248.716 397.041 219.304 392.326C189.893 387.595 159.434 378.381 139.303 356.135C103.492 316.541 113.983 255.016 108.402 201.593C99.9403 120.76 46.1259 46.4028 -27.3616 13.9969"
                        stroke="currentColor" stroke-miterlimit="10" />
                    <path
                        d="M380.24 458.516C376.083 428.617 350.125 406.006 322.236 395.431C294.347 384.856 264.051 383.544 234.64 378.829C205.229 374.098 174.77 364.884 154.639 342.638C118.828 303.044 129.319 241.519 123.738 188.096C115.276 107.264 61.4619 32.906 -12.0255 0.500103"
                        stroke="currentColor" stroke-miterlimit="10" />
                </svg>
                <svg class="shape shape-right text-light" width="406" height="433" viewBox="0 0 406 433"
                    fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M101.974 -86.77C128.962 -74.8992 143.467 -43.2447 146.175 -12.7857C148.883 17.6734 142.273 48.1263 139.087 78.5816C135.916 109.041 136.681 141.702 152.351 167.47C180.247 213.314 240.712 218.81 289.413 238.184C363.095 267.516 418.962 340.253 430.36 421.687"
                        stroke="currentColor" stroke-miterlimit="10" />
                    <path
                        d="M118.607 -98.5031C145.596 -86.6323 160.101 -54.9778 162.809 -24.5188C165.517 5.94031 158.907 36.3933 155.72 66.8486C152.549 97.3082 153.314 129.969 168.985 155.737C196.881 201.581 257.346 207.077 306.047 226.451C379.729 255.783 435.596 328.52 446.994 409.954"
                        stroke="currentColor" stroke-miterlimit="10" />
                    <path
                        d="M135.241 -110.238C162.23 -98.3675 176.735 -66.7131 179.443 -36.254C182.151 -5.79492 175.541 24.6581 172.354 55.1134C169.183 85.573 169.948 118.234 185.619 144.002C213.515 189.846 273.98 195.342 322.681 214.716C396.363 244.048 452.23 316.785 463.627 398.219"
                        stroke="currentColor" stroke-miterlimit="10" />
                    <path
                        d="M151.879 -121.989C178.867 -110.118 193.373 -78.4638 196.081 -48.0047C198.789 -17.5457 192.179 12.9074 188.992 43.3627C185.821 73.8223 186.586 106.483 202.256 132.251C230.153 178.095 290.618 183.591 339.318 202.965C413.001 232.297 468.867 305.034 480.265 386.468"
                        stroke="currentColor" stroke-miterlimit="10" />
                </svg>
            </div>
        </div>
    </section>
    {{-- End Section Index Spbe --}}

    {{-- Section Kebijakan --}}
    <section id="kebijakan" class="section">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-5">
                    <div class="section-title">
                        <p class="text-primary text-uppercase fw-bold mb-3"></p>
                        <h2>Kebijakan SPBE</h2>
                        <div class="content mb-0 mt-4">
                            <p>Memastikan penerapan unsur-unsur SPBE secara terpadu.</p>
                            <img src="{{ asset('spbe_template/images/kebijakan.webp') }}" alt="Deskripsi gambar"
                                class="img-fluid mt-4 bounce-effect">

                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="scrollable-items p-4" style="max-height: 400px; overflow-y: auto;">
                        <div class="difference-of-us-item p-3 rounded mr-0 me-lg-4">
                            <div class="d-block d-sm-flex align-items-center m-2">
                                <div class="icon me-4 mb-4 mb-sm-0"> <i class="bi bi-file-pdf-fill mt-3"
                                        style="font-size:28px"></i>
                                </div>
                                <div class="block">
                                    <h5 class="mb-3">PERATURAN PRESIDEN REPUBLIK INDONESIA NOMOR 95 TAHUN 2018</h5>
                                    <a href="#" class="mb-0" data-bs-toggle="modal"
                                        data-bs-target="#modalKebijakan">Lihat<i
                                            class="bi bi-arrow-right-circle ms-2"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="difference-of-us-item p-3 rounded mr-0 me-lg-4">
                            <div class="d-block d-sm-flex align-items-center m-2">
                                <div class="icon me-3 mb-3 mb-sm-0"> <i class="bi bi-file-pdf-fill mt-3"
                                        style="font-size:28px"></i>
                                </div>
                                <div class="block">
                                    <h5 class="mb-3">Peraturan Presiden 132 Tahun 2022</h5>
                                    <a href="#" class="mb-0" data-bs-toggle="modal"
                                        data-bs-target="#modalKebijakan2">Lihat<i
                                            class="bi bi-arrow-right-circle ms-2"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="difference-of-us-item p-3 rounded mr-0 me-lg-4">
                            <div class="d-block d-sm-flex align-items-center m-2">
                                <div class="icon me-3 mb-3 mb-sm-0"> <i class="bi bi-file-pdf-fill mt-3"
                                        style="font-size:28px"></i>
                                </div>
                                <div class="block">
                                    <h5 class="mb-3">Peraturan Presiden 82 Tahun 2023</h5>
                                    <a href="#" class="mb-0" data-bs-toggle="modal"
                                        data-bs-target="#modalKebijakan3">Lihat<i
                                            class="bi bi-arrow-right-circle ms-2"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="difference-of-us-item p-3 rounded mr-0 me-lg-4">
                            <div class="d-block d-sm-flex align-items-center m-2">
                                <div class="icon me-3 mb-3 mb-sm-0"> <i class="bi bi-file-pdf-fill mt-3"
                                        style="font-size:28px"></i>
                                </div>
                                <div class="block">
                                    <h5 class="mb-3">Peraturan Presiden 47 Tahun 2023</h5>
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#modalKebijakan4"
                                        class="mb-0">Lihat<i class="bi bi-arrow-right-circle ms-2"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="difference-of-us-item p-3 rounded mr-0 me-lg-4">
                            <div class="d-block d-sm-flex align-items-center m-2">
                                <div class="icon me-3 mb-3 mb-sm-0"> <i class="bi bi-file-pdf-fill mt-3"
                                        style="font-size:28px"></i>
                                </div>
                                <div class="block">
                                    <h5 class="mb-3">Peraturan Menteri Komunikasi dan Informatika Nomor 16 Tahun 2020
                                    </h5>
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#modalKebijakan5"
                                        class="mb-0">Lihat<i class="bi bi-arrow-right-circle ms-2"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="difference-of-us-item p-3 rounded mr-0 me-lg-4">
                            <div class="d-block d-sm-flex align-items-center m-2">
                                <div class="icon me-3 mb-3 mb-sm-0"> <i class="bi bi-file-pdf-fill mt-3"
                                        style="font-size:28px"></i>
                                </div>
                                <div class="block">
                                    <h5 class="mb-3">Peraturan Badan Riset dan Inovasi Nasional Nomor 2 Tahun 2024</h5>
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#modalKebijakan6"
                                        class="mb-0">Lihat<i class="bi bi-arrow-right-circle ms-2"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="difference-of-us-item p-3 rounded mr-0 me-lg-4">
                            <div class="d-block d-sm-flex align-items-center m-2">
                                <div class="icon me-3 mb-3 mb-sm-0"> <i class="bi bi-file-pdf-fill mt-3"
                                        style="font-size:28px"></i>
                                </div>
                                <div class="block">
                                    <h5 class="mb-3">Peraturan Menteri PANRB Nomor 16 Tahun 2020</h5>
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#modalKebijakan8"
                                        class="mb-0">Lihat<i class="bi bi-arrow-right-circle ms-2"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-center">
                        <button class="btn btn-custom mt-4" data-bs-toggle="modal" data-bs-target="#applyLoan"><i
                                class="bi bi-journals me-2"></i>Lihat Semua</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- End Section Kebijakan --}}

    {{-- Section Layanan --}}
    <section class="homepage_tab position-relative" id="layanan">
        <div class="section container pt-5">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-center">
                        <h2>Layanan SPBE</h2>
                        <p class="text-primary fw-bold mb-3">Memastikan penerapan unsur-unsur SPBE secara terpadu.</p>
                    </div>
                </div>
                <div class="col-lg-10">
                    <ul class="payment_info_tab nav nav-pills justify-content-center mb-4" id="pills-tab" role="tablist">
                        <li class="nav-item m-2" role="presentation"> <a
                                class="nav-link btn btn-outline-primary effect-none text-dark active"
                                id="pills-how-much-can-i-recive-tab" data-bs-toggle="pill"
                                href="#pills-how-much-can-i-recive" role="tab"
                                aria-controls="pills-how-much-can-i-recive" aria-selected="true">Administrasi
                                Pemerintahan</a>
                        </li>
                        <li class="nav-item m-2" role="presentation"> <a
                                class="nav-link btn btn-outline-primary effect-none text-dark "
                                id="pills-how-much-does-it-costs-tab" data-bs-toggle="pill"
                                href="#pills-how-much-does-it-costs" role="tab"
                                aria-controls="pills-how-much-does-it-costs" aria-selected="true">Layanan Publik</a>
                        </li>
                    </ul>
                    <div class="rounded shadow bg-white p-5 tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-how-much-can-i-recive" role="tabpanel"
                            aria-labelledby="pills-how-much-can-i-recive-tab">
                            <div class="row align-items-center">
                                <div class="col-md-6 order-1 order-md-0">
                                    <div class="content-block">
                                        <h5 class="mb-4">Administrasi Pemerintahan</h5>
                                        <div class="content">
                                            <div class="row">
                                                <!-- Card 1 -->
                                                <div class="col-md-6 mb-4">
                                                    <a
                                                        href="https://play.google.com/store/apps/details?id=com.tulangbawangkab.siaptuba&hl=en_ZA">
                                                        <div class="card shadow-sm h-100 rounded-4">
                                                            <div class="card-body text-center">
                                                                <div class="mb-3">
                                                                    <img src="{{ asset('spbe_template/images/layanan/siap tuba2.png') }}"
                                                                        alt="Icon" class="img-fluid"
                                                                        style="object-fit: contain;">
                                                                </div>
                                                                <b class="card-title">SIAP TUBA</b>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <!-- Card 4 -->
                                                <div class="col-md-6 mb-4">
                                                    <a href="https://sikeptemen.tulangbawangkab.go.id/main ">
                                                        <div class="card shadow-sm h-100 rounded-4">
                                                            <div class="card-body text-center">
                                                                <div class="mb-3">
                                                                    <img src="{{ asset('spbe_template/images/layanan/sikep temen.png') }}"
                                                                        alt="Icon" class="img-fluid"
                                                                        style="object-fit: contain;">
                                                                </div>
                                                                <b class="card-title">SIKEP TEMEN</b>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <!-- Card 2 -->
                                                <div class="col-md-6 mb-4">
                                                    <a href="https://jdih.tulangbawangkab.go.id/">
                                                        <div class="card shadow-sm h-100 rounded-4">
                                                            <div class="card-body text-center">
                                                                <div class="mb-3">
                                                                    <img src="{{ asset('spbe_template/images/layanan/jdih_tb.png') }}"
                                                                        alt="Icon" class="img-fluid"
                                                                        style="object-fit: contain;">
                                                                </div>
                                                                <b class="card-title">JDIH</b>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <!-- Card 3 -->
                                                <div class="col-md-6 mb-4">
                                                    <a href="https://ppid.tulangbawangkab.go.id/">
                                                        <div class="card shadow-sm h-100 rounded-4">
                                                            <div class="card-body text-center">
                                                                <div class="mb-3">
                                                                    <img src="{{ asset('spbe_template/images/layanan/ppid_tb.png') }}"
                                                                        alt="Icon" class="img-fluid"
                                                                        style="object-fit: contain;">
                                                                </div>
                                                                <b class="card-title">PPID</b>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>

                                            </div>
                                            <div class="d-flex justify-content-center">
                                                <button class="btn btn-custom mt-2" data-bs-toggle="modal"
                                                    data-bs-target="#modalLayanan"><i
                                                        class="bi bi-journals me-2"></i>Selengkapnya</button>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 order-0 order-md-1 mb-5 mt-md-0">
                                    <div class="image-block text-center">
                                        <img loading="lazy" decoding="async"
                                            src="{{ asset('spbe_template/images/img_layanan_1.jpg') }}"
                                            alt="How Much Can I Recive?" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade " id="pills-how-much-does-it-costs" role="tabpanel"
                            aria-labelledby="pills-how-much-does-it-costs-tab">
                            <div class="row align-items-center">
                                <div class="col-md-6 order-1 order-md-0">
                                    <div class="content-block">
                                        <h5 class="mb-4">Layanan Publik</h5>
                                        <div class="content">
                                            <div class="row">
                                                <!-- Card 1 -->
                                                <div class="col-md-6 mb-4">
                                                    <a href="https://sipd.kemendagri.go.id/">
                                                        <div class="card shadow-sm h-100 rounded-4">
                                                            <div class="card-body text-center">
                                                                <div class="mb-3">
                                                                    <img src="{{ asset('spbe_template/images/layanan/sipd.png') }}"
                                                                        alt="Icon" class="img-fluid"
                                                                        style="width:;object-fit: contain;">
                                                                </div>
                                                                <b class="card-title">SIPD</b>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <!-- Card 2 -->
                                                <div class="col-md-6 mb-4">
                                                    <a href="https://sicantik.go.id/">
                                                        <div class="card shadow-sm h-100 rounded-4">
                                                            <div class="card-body text-center">
                                                                <div class="mb-3">
                                                                    <img src="{{ asset('spbe_template/images/layanan/sicantik.png') }}"
                                                                        alt="Icon" class="img-fluid"
                                                                        style=";object-fit: contain;">
                                                                </div>
                                                                <b class="card-title">SICANTIK</b>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <!-- Card 3 -->
                                                <div class="col-md-6 mb-4">
                                                    <a href="https://srikandi.arsip.go.id/">
                                                        <div class="card shadow-sm h-100 rounded-4">
                                                            <div class="card-body text-center">
                                                                <div class="mb-3">
                                                                    <img src="{{ asset('spbe_template/images/layanan/srikandi.png') }}"
                                                                        alt="Icon" class="img-fluid"
                                                                        style="width:;object-fit: contain;">
                                                                </div>
                                                                <b class="card-title">SRIKANDI</b>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <!-- Card 4 -->
                                                <div class="col-md-6 mb-4">
                                                    <a href="https://oss.go.id/">
                                                        <div class="card shadow-sm h-100 rounded-4">
                                                            <div class="card-body text-center">
                                                                <div class="mb-3">
                                                                    <img src="{{ asset('spbe_template/images/layanan/oss.png') }}"
                                                                        alt="Icon" class="img-fluid"
                                                                        style="object-fit: contain;">
                                                                </div>
                                                                <b class="card-title">OSS</b>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-center">
                                                <button class="btn btn-custom mt-2" data-bs-toggle="modal"
                                                    data-bs-target="#applyLoan"><i
                                                        class="bi bi-journals me-2"></i>Selengkapnya</button>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 order-0 order-md-1 mb-5 mt-md-0">
                                    <div class="image-block text-center">
                                        <img loading="lazy" decoding="async"
                                            src="{{ asset('spbe_template/images/img_layanan_2.jpg') }}"
                                            alt="How Much Does It Costs?" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="has-shapes">
                <svg class="shape shape-left text-light" width="290" height="709" viewBox="0 0 290 709"
                    fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M-119.511 58.4275C-120.188 96.3185 -92.0001 129.539 -59.0325 148.232C-26.0649 166.926 11.7821 174.604 47.8274 186.346C83.8726 198.088 120.364 215.601 141.281 247.209C178.484 303.449 153.165 377.627 149.657 444.969C144.34 546.859 197.336 649.801 283.36 704.673"
                        stroke="currentColor" stroke-miterlimit="10" />
                    <path
                        d="M-141.434 72.0899C-142.111 109.981 -113.923 143.201 -80.9554 161.895C-47.9878 180.588 -10.1407 188.267 25.9045 200.009C61.9497 211.751 98.4408 229.263 119.358 260.872C156.561 317.111 131.242 391.29 127.734 458.631C122.417 560.522 175.414 663.463 261.437 718.335"
                        stroke="currentColor" stroke-miterlimit="10" />
                    <path
                        d="M-163.379 85.7578C-164.056 123.649 -135.868 156.869 -102.901 175.563C-69.9331 194.256 -32.086 201.934 3.9592 213.677C40.0044 225.419 76.4955 242.931 97.4127 274.54C134.616 330.779 109.296 404.957 105.789 472.299C100.472 574.19 153.468 677.131 239.492 732.003"
                        stroke="currentColor" stroke-miterlimit="10" />
                    <path
                        d="M-185.305 99.4208C-185.982 137.312 -157.794 170.532 -124.826 189.226C-91.8589 207.919 -54.0118 215.597 -17.9666 227.34C18.0787 239.082 54.5697 256.594 75.4869 288.203C112.69 344.442 87.3706 418.62 83.8633 485.962C78.5463 587.852 131.542 690.794 217.566 745.666"
                        stroke="currentColor" stroke-miterlimit="10" />
                </svg>
                <svg class="shape shape-right text-light" width="474" height="511" viewBox="0 0 474 511"
                    fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M601.776 325.899C579.043 348.894 552.727 371.275 520.74 375.956C478.826 382.079 438.015 355.5 412.619 321.6C387.211 287.707 373.264 246.852 354.93 208.66C336.584 170.473 311.566 132.682 273.247 114.593C220.12 89.5159 155.704 108.4 99.7772 90.3769C53.1531 75.3464 16.3392 33.2759 7.65012 -14.947"
                        stroke="currentColor" stroke-miterlimit="10" />
                    <path
                        d="M585.78 298.192C564.28 319.945 539.378 341.122 509.124 345.548C469.472 351.341 430.868 326.199 406.845 294.131C382.805 262.059 369.62 223.419 352.278 187.293C334.936 151.168 311.254 115.417 275.009 98.311C224.74 74.582 163.815 92.4554 110.913 75.3971C66.8087 61.1784 31.979 21.3767 23.7639 -24.2362"
                        stroke="currentColor" stroke-miterlimit="10" />
                    <path
                        d="M569.783 270.486C549.5 290.99 526.04 310.962 497.501 315.13C460.111 320.592 423.715 296.887 401.059 266.641C378.392 236.402 365.963 199.965 349.596 165.901C333.24 131.832 310.911 98.1265 276.74 82.0034C229.347 59.6271 171.895 76.4848 122.013 60.4086C80.419 47.0077 47.5905 9.47947 39.8431 -33.5342"
                        stroke="currentColor" stroke-miterlimit="10" />
                    <path
                        d="M553.787 242.779C534.737 262.041 512.691 280.809 485.884 284.722C450.757 289.853 416.568 267.586 395.286 239.173C373.993 210.766 362.308 176.538 346.945 144.535C331.581 112.533 310.605 80.8723 278.502 65.7217C233.984 44.6979 180.006 60.54 133.149 45.4289C94.0746 32.8398 63.2303 -2.41965 55.9568 -42.8233"
                        stroke="currentColor" stroke-miterlimit="10" />
                    <path
                        d="M537.791 215.073C519.964 233.098 499.336 250.645 474.269 254.315C441.41 259.126 409.422 238.286 389.513 211.704C369.594 185.13 358.665 153.106 344.294 123.17C329.923 93.2337 310.293 63.6078 280.258 49.4296C238.605 29.7646 188.105 44.5741 144.268 30.4451C107.714 18.6677 78.8538 -14.3229 72.0543 -52.1165"
                        stroke="currentColor" stroke-miterlimit="10" />
                </svg>
            </div>
        </div>
    </section>
    {{-- End Section Layanan --}}

    {{-- Section Kegiatan --}}
    <section class="section testimonials overflow-hidden bg-tertiary">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title text-center">
                        <h2 class="mb-4">Kegiatan SPBE</h2>
                        <p class="text-primary fw-bold mb-3">Memastikan penerapan unsur-unsur SPBE secara terpadu.</p>
                    </div>
                </div>
            </div>
            <div class="row position-relative">
                <!-- Card 1 -->
                <div class="col-lg-4 col-md-6 pt-1">
                    <a href="#" data-bs-toggle="modal" data-bs-target="#modalKegiatan"
                        class="text-decoration-none">
                        <div class=" rounded bg-white p-4 mt-4 shadow">
                            <div class="d-block d-sm-flex align-items-center mb-3">
                                <i class="bi bi-calendar3" style="font-size: 30px;color:#114a43;"></i>
                                <div class="mt-3 mt-sm-0 ms-0 ms-sm-3">
                                    <h4 class="h5 mb-1">Rapat Penggunaan Aplikasi Penilaian SPBE Mandiri 2024</h4>
                                    <div class="content"><i class="bi bi-geo-alt me-2"></i>Ruang Rapat Komunika</div>
                                    <p class="mb-0"><i class="bi bi-stopwatch me-2"></i>Senin, 15 Juli 2024</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- Card 2 -->
                <div class="col-lg-4 col-md-6 pt-1">
                    <a href="#" class="text-decoration-none">
                        <div class=" rounded bg-white p-4 mt-4 shadow">
                            <div class="d-block d-sm-flex align-items-center mb-3">
                                <i class="bi bi-calendar3" style="font-size: 30px;color:#114a43;"></i>
                                <div class="mt-3 mt-sm-0 ms-0 ms-sm-3">
                                    <h4 class="h5 mb-1">Rapat Penggunaan Aplikasi Penilaian SPBE Mandiri 2024</h4>
                                    <div class="content"><i class="bi bi-geo-alt me-2"></i>Ruang Rapat Komunika</div>
                                    <p class="mb-0"><i class="bi bi-stopwatch me-2"></i>Senin, 15 Juli 2024</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- Card 3 -->
                <div class="col-lg-4 col-md-6 pt-1">
                    <a href="#" class="text-decoration-none">
                        <div class="rounded bg-white p-4 mt-4 shadow">
                            <div class="d-block d-sm-flex align-items-center mb-3">
                                <i class="bi bi-calendar3" style="font-size: 30px;color:#114a43;"></i>
                                <div class="mt-3 mt-sm-0 ms-0 ms-sm-3">
                                    <h4 class="h5 mb-1">Rapat Penggunaan Aplikasi Penilaian SPBE Mandiri 2024</h4>
                                    <div class="content"><i class="bi bi-geo-alt me-2"></i>Ruang Rapat Komunika</div>
                                    <p class="mb-0"><i class="bi bi-stopwatch me-2"></i>Senin, 15 Juli 2024</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

            </div>

        </div>
        <div class="has-shapes">
            <svg class="shape shape-left text-light" width="290" height="709" viewBox="0 0 290 709" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M-119.511 58.4275C-120.188 96.3185 -92.0001 129.539 -59.0325 148.232C-26.0649 166.926 11.7821 174.604 47.8274 186.346C83.8726 198.088 120.364 215.601 141.281 247.209C178.484 303.449 153.165 377.627 149.657 444.969C144.34 546.859 197.336 649.801 283.36 704.673"
                    stroke="currentColor" stroke-miterlimit="10" />
                <path
                    d="M-141.434 72.0899C-142.111 109.981 -113.923 143.201 -80.9554 161.895C-47.9878 180.588 -10.1407 188.267 25.9045 200.009C61.9497 211.751 98.4408 229.263 119.358 260.872C156.561 317.111 131.242 391.29 127.734 458.631C122.417 560.522 175.414 663.463 261.437 718.335"
                    stroke="currentColor" stroke-miterlimit="10" />
                <path
                    d="M-163.379 85.7578C-164.056 123.649 -135.868 156.869 -102.901 175.563C-69.9331 194.256 -32.086 201.934 3.9592 213.677C40.0044 225.419 76.4955 242.931 97.4127 274.54C134.616 330.779 109.296 404.957 105.789 472.299C100.472 574.19 153.468 677.131 239.492 732.003"
                    stroke="currentColor" stroke-miterlimit="10" />
                <path
                    d="M-185.305 99.4208C-185.982 137.312 -157.794 170.532 -124.826 189.226C-91.8589 207.919 -54.0118 215.597 -17.9666 227.34C18.0787 239.082 54.5697 256.594 75.4869 288.203C112.69 344.442 87.3706 418.62 83.8633 485.962C78.5463 587.852 131.542 690.794 217.566 745.666"
                    stroke="currentColor" stroke-miterlimit="10" />
            </svg>
            <svg class="shape shape-right text-light" width="731" height="429" viewBox="0 0 731 429"
                fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M12.1794 428.14C1.80036 390.275 -5.75764 349.015 8.73984 312.537C27.748 264.745 80.4729 237.968 131.538 231.843C182.604 225.703 234.032 235.841 285.323 239.748C336.615 243.64 391.543 240.276 433.828 210.964C492.452 170.323 511.701 91.1227 564.607 43.2553C608.718 3.35334 675.307 -9.81661 731.29 10.323"
                    stroke="currentColor" stroke-miterlimit="10" />
                <path
                    d="M51.0253 428.14C41.2045 392.326 34.0538 353.284 47.7668 318.783C65.7491 273.571 115.623 248.242 163.928 242.449C212.248 236.641 260.884 246.235 309.4 249.931C357.916 253.627 409.887 250.429 449.879 222.701C505.35 184.248 523.543 109.331 573.598 64.0588C615.326 26.3141 678.324 13.8532 731.275 32.9066"
                    stroke="currentColor" stroke-miterlimit="10" />
                <path
                    d="M89.8715 428.14C80.6239 394.363 73.8654 357.568 86.8091 325.028C103.766 282.396 150.788 258.515 196.347 253.054C241.906 247.578 287.767 256.629 333.523 260.099C379.278 263.584 428.277 260.567 465.976 234.423C518.279 198.172 535.431 127.525 582.62 84.8317C621.964 49.2292 681.356 37.4924 731.291 55.4596"
                    stroke="currentColor" stroke-miterlimit="10" />
                <path
                    d="M128.718 428.14C120.029 396.414 113.678 361.838 125.837 331.274C141.768 291.221 185.939 268.788 228.737 263.659C271.536 258.515 314.621 267.008 357.6 270.282C400.58 273.556 446.607 270.719 482.028 246.16C531.163 212.111 547.275 145.733 591.612 105.635C628.572 72.19 684.375 61.1622 731.276 78.0432"
                    stroke="currentColor" stroke-miterlimit="10" />
                <path
                    d="M167.564 428.14C159.432 398.451 153.504 366.107 164.863 337.519C179.753 300.046 221.088 279.062 261.126 274.265C301.164 269.452 341.473 277.402 381.677 280.465C421.88 283.527 464.95 280.872 498.094 257.896C544.061 226.035 559.146 163.942 600.617 126.423C635.194 95.1355 687.406 84.8167 731.276 100.612"
                    stroke="currentColor" stroke-miterlimit="10" />
            </svg>
        </div>
    </section>
    {{-- End Section Kegiatan --}}

    {{-- Section Manajemen --}}
    <section class="section" id="manajemen">
        <div class="container">
            <div class="section-title text-center mb-5 pb-2">
                <h2>Manajemen SPBE</h2>
                <p class="text-primary fw-bold mb-3">Memastikan penerapan unsur-unsur SPBE secara terpadu.</p>

            </div>
            <!-- Tabs -->
            <div class="d-flex justify-content-center flex-wrap gap-2 mb-4">
                <button class="btn btn-outline-primary active filter-btn" data-category="manajemen-layanan">Manajemen
                    Layanan SPBE</button>
                <button class="btn btn-outline-primary filter-btn" data-category="manajemen-perubahan">Manajemen
                    Perubahan</button>
                <button class="btn btn-outline-primary filter-btn" data-category="manajemen-pengetahuan">Manajemen
                    Pengetahuan</button>
                <button class="btn btn-outline-primary filter-btn" data-category="manajemen-sdm">Manajemen Sumber Daya
                    Manusia</button>
                <button class="btn btn-outline-primary filter-btn" data-category="manajemen-aset">Manajemen Aset
                    TIK</button>
                <button class="btn btn-outline-primary filter-btn" data-category="manajemen-data">Manajemen Data</button>
                <button class="btn btn-outline-primary filter-btn" data-category="manajemen-keamanan">Manajemen Keamanan
                    Informasi</button>
                <button class="btn btn-outline-primary filter-btn" data-category="manajemen-risiko">Manajemen Risiko
                    SPBE</button>
                <button class="btn btn-outline-primary filter-btn" data-category="all">Tampilkan Semua</button>
            </div>

            <!-- Cards -->
            <div class="scrollable-container">
                <div class="card-wrapper">
                    <div class="col-md-4 card-item" data-category="manajemen-layanan">
                        <div class="card shadow-sm border-0">
                            <div class="card-body">
                                <h5 class="card-title text-dark">SOP Konsultasi TIK pada aplikasi SIAP TUBA</h5>
                                <span class="badge bg-primary mb-2">#Manajemen Layanan SPBE</span>
                                <p class="card-text">Prosedur Konsultasi TIK pada aplikasi SIAP TUBA</p>
                                <a href="#" data-bs-toggle="modal" data-bs-target="#modalManajemen"
                                    class="btn btn-outline-primary">Lihat <i class="bi bi-arrow-right-circle"></i> </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 card-item" data-category="manajemen-layanan">
                        <div class="card shadow-sm border-0">
                            <div class="card-body">
                                <h5 class="card-title text-dark">SOP Pemanfaatan SPLP (Sistem Penghubung Layanan
                                    Pemerintah)</h5>
                                <span class="badge bg-primary mb-2">#Manajemen Layanan SPBE</span>
                                <p class="card-text">SOP Pemanfaatan SPLP (Sistem Penghubung Layanan Pemerintah)</p>
                                <a href="#" data-bs-toggle="modal" data-bs-target="#modalManajemen"
                                    class="btn btn-outline-primary">Lihat <i class="bi bi-arrow-right-circle"></i> </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 card-item" data-category="manajemen-layanan">
                        <div class="card shadow-sm border-0">
                            <div class="card-body">
                                <h5 class="card-title text-dark">SOP Permohonan Penyelenggaraan Pelayanan Video Converence
                                </h5>
                                <span class="badge bg-primary mb-2">#Manajemen Layanan SPBE</span>
                                <p class="card-text">Prosedur tentang Permohonan Penyelenggaraan Pelayanan</p>
                                <a href="#" data-bs-toggle="modal" data-bs-target="#modalManajemen"
                                    class="btn btn-outline-primary">Lihat <i class="bi bi-arrow-right-circle"></i> </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 card-item" data-category="manajemen-pengetahuan">
                        <div class="card shadow-sm border-0">
                            <div class="card-body">
                                <h5 class="card-title text-dark">SOP Penyusunan Daftar Informasi Publik</h5>
                                <span class="badge bg-primary mb-2">#Manajemen Pengetahuan</span>
                                <p class="card-text">Prosedur Penyusunan Daftar Informasi Publik</p>
                                <a href="#" class="btn btn-outline-primary">Lihat <i
                                        class="bi bi-arrow-right-circle"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 card-item" data-category="manajemen-layanan">
                        <div class="card shadow-sm border-0">
                            <div class="card-body">
                                <h5 class="card-title text-dark">Layanan SPBE Terpadu</h5>
                                <span class="badge bg-primary mb-2">#Manajemen Layanan SPBE</span>
                                <p class="card-text">Prosedur layanan terpadu SPBE.</p>
                                <a href="#" class="btn btn-outline-primary">Lihat <i
                                        class="bi bi-arrow-right-circle"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 card-item" data-category="manajemen-layanan">
                        <div class="card shadow-sm border-0">
                            <div class="card-body">
                                <h5 class="card-title text-dark">Layanan SPBE Terpadu</h5>
                                <span class="badge bg-primary mb-2">#Manajemen Layanan SPBE</span>
                                <p class="card-text">Prosedur layanan terpadu SPBE.</p>
                                <a href="#" class="btn btn-outline-primary">Lihat <i
                                        class="bi bi-arrow-right-circle"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- Pagination -->
            <div class="scroll-pagination d-flex justify-content-center mt-3">
                <span class="pagination-dot active"></span>
                <span class="pagination-dot"></span>
                <span class="pagination-dot"></span>
            </div>
        </div>

        </div>
    </section>
    {{-- End Section Manajemen --}}

    {{-- Section Tata Kelola --}}
    <section id="tatakelola" class="section testimonials overflow-hidden bg-tertiary">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="section-title text-center mb-1 pb-2">
                        <h2>Tata Kelola</h2>
                        <p class="text-primary fw-bold mb-3">Memastikan penerapan unsur-unsur SPBE secara terpadu.</p>

                    </div>
                </div>


            </div>
            <div class="container">
                <div class="text-center mt-1 mb-5">
                    <h5 class="fw-bold text-black">SUSUNAN KEANGGOTAAN TIM KOORDINASI PELAKSANAAN SPBE PEMERINTAH KABUPATEN
                        TULANG BAWANG</h5>
                </div>
                <!-- Kontainer dengan scroll horizontal -->
                <div class="position-relative" style="overflow: hidden; width: 100%;">
                    <div class="d-flex" id="scroll-container"
                        style="gap: 20px; white-space: nowrap; overflow: hidden; display: flex; flex-wrap: nowrap; scroll-behavior: smooth;">
                        <!-- Tim Pengarah -->
                        <div
                            class="border shadow rounded py-4 px-5 mb-4 text-center bg-white position-relative d-inline-block">
                            <i class="fas fa-users position-absolute" style="top: 5px; right: 10px;color:#114A43;font-size:24px;"></i>
                            <strong>Tim Pengarah</strong>
                        </div>

                        <!-- Tim Koordinasi -->
                        <div
                            class="border shadow rounded py-4 px-5 mb-4 text-center bg-white position-relative d-inline-block">
                            <i class="fas fa-people-arrows position-absolute" style="top: 5px; right: 10px;color:#114A43;font-size:24px;"></i>
                            <strong>Tim Koordinasi</strong>
                        </div>

                        <!-- Sekretariat -->
                        <div
                            class="border shadow rounded py-4 px-5 mb-4 text-center bg-white position-relative d-inline-block">
                            <i class="fas fa-building position-absolute" style="top: 5px; right: 10px;color:#114A43;font-size:24px;"></i>
                            <strong>Sekretariat</strong>
                        </div>

                        <!-- Pokja Kebijakan Internal SPBE -->
                        <div
                            class="border shadow  rounded py-3 px-2 text-center bg-white position-relative d-inline-block">
                            <i class="fas fa-balance-scale position-absolute" style="top: 5px; right: 10px;color:#114A43;font-size:24px;"></i>
                            <strong>Pokja <br>Kebijakan<br>Internal SPBE</strong>
                        </div>

                        <!-- Pokja Tata Kelola SPBE -->
                        <div
                            class="border shadow border rounded py-3 px-2 text-center bg-white position-relative d-inline-block">
                            <i class="fas fa-network-wired position-absolute" style="top: 5px; right: 10px;color:#114A43;font-size:24px;"></i>
                            <strong>Pokja<br>Tata Kelola<br>SPBE</strong>
                        </div>

                        <!-- Pokja Manajemen SPBE -->
                        <div
                            class="border shadow border rounded py-3 px-2 text-center bg-white position-relative d-inline-block">
                            <i class="fas fa-cogs position-absolute" style="top: 5px; right: 10px;color:#114A43;font-size:24px;"></i>
                            <strong>Pokja<br>Manajemen<br>SPBE</strong>
                        </div>

                        <!-- Pokja Layanan SPBE -->
                        <div
                            class="border shadow border rounded py-3 px-2 text-center bg-white position-relative d-inline-block">
                            <i class="fas fa-envelope-open-text position-absolute" style="top: 5px; right: 10px;color:#114A43;font-size:24px;"></i>
                            <strong>Pokja<br>Layanan<br>SPBE</strong>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
    {{-- End Tata Kelola --}}

    {{-- Section Pengetahuan/Pertanyaan --}}
    <section class="section testimonials overflow-hidden">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="section-title text-center mb-5 pb-2">
                        <h2>Pengetahuan</h2>
                        <p class="text-primary fw-bold mb-3">Beberapa pertanyaan yang sering diajukan.</p>

                    </div>
                </div>
                <div class="">
                    <div class="accordion shadow rounded py-3 px-0 px-lg-4 bg-white position-relative" id="accordionFAQ">
                        <div class="accordion-item p-1 mb-2">
                            <h3 class="accordion-header accordion-button h6 border-0 active"
                                id="heading-ebd23e34fd2ed58299b32c03c521feb0b02f19d9" type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#collapse-ebd23e34fd2ed58299b32c03c521feb0b02f19d9" aria-expanded="true"
                                aria-controls="collapse-ebd23e34fd2ed58299b32c03c521feb0b02f19d9">Apa kebijakan yang
                                mengatur kerangka kerja SPBE di Kabupaten Tulang Bawang?
                            </h3>
                            <div id="collapse-ebd23e34fd2ed58299b32c03c521feb0b02f19d9"
                                class="accordion-collapse collapse border-0 show"
                                aria-labelledby="heading-ebd23e34fd2ed58299b32c03c521feb0b02f19d9"
                                data-bs-parent="#accordionFAQ">
                                <div class="accordion-body py-0 content">

                                    <p></p>
                                    <div><span style="font-size: 13.2px;"><b>Peraturan Bupati Tulang Bawang Nomor 20 Tahun 2022 tentang Sistem Pemerintahan Berbasis Elektronik Pemerintah Daerah
                                                Kabupaten Tulang Bawang:</b></span></div>
                                    <div><span style="font-size: 13.2px;">Mengatur kerangka kerja untuk implementasi
                                            SPBE di Pemerintah Daerah Kabupaten Tulang Bawang, termasuk kebijakan, tata
                                            kelola, pengelolaan dan pengembangan sistem, serta evaluasi dan
                                            pemantauan.</span></div>
                                    <div><span style="font-size: 13.2px;"><br></span></div>
                                    <div><span style="font-size: 13.2px;"><b>Peraturan Bupati Tulang Bawang Nomor 15 Tahun 2024 tentang Sistem Pemerintahan Berbasis Elektronik Pemerintah
                                                Kabupaten Tulang Bawang:</b></span></div>
                                    <div><span style="font-size: 13.2px;">Memperbarui
                                            dan menyempurnakan kebijakan SPBE sebelumnya untuk menyesuaikan dengan
                                            perkembangan teknologi dan kebutuhan lokal. Mengatur struktur organisasi,
                                            pengembangan aplikasi dan infrastruktur, layanan publik berbasis elektronik,
                                            keamanan informasi, dan evaluasi berkelanjutan.</span><br></div>
                                    <p></p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item p-1 mb-2">
                            <h3 class="accordion-header accordion-button h6 border-0 "
                                id="heading-a443e01b4db47b3f4a1267e10594576d52730ec1" type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#collapse-a443e01b4db47b3f4a1267e10594576d52730ec1" aria-expanded="false"
                                aria-controls="collapse-a443e01b4db47b3f4a1267e10594576d52730ec1">Apa Kebijakan yang
                                mengatur penyelenggaraan sistem dan transaksi elektronik yang mendukung SPBE?
                            </h3>
                            <div id="collapse-a443e01b4db47b3f4a1267e10594576d52730ec1"
                                class="accordion-collapse collapse border-0 "
                                aria-labelledby="heading-a443e01b4db47b3f4a1267e10594576d52730ec1"
                                data-bs-parent="#accordionFAQ">
                                <div class="accordion-body py-0 content">
                                    <p></p>
                                    <p><strong>Peraturan Pemerintah Nomor 71 Tahun 2019</strong></p>
                                    <ul>
                                        <li><strong>Isi Utama:</strong> Penyelenggaraan sistem dan transaksi elektronik
                                            yang mendukung SPBE.<ul>
                                                <li>PP Nomor 71 Tahun 2019 mengatur penyelenggaraan sistem elektronik,
                                                    transaksi elektronik, keamanan data, dan perlindungan privasi yang
                                                    penting bagi pelaksanaan SPBE.</li>
                                            </ul>
                                        </li>
                                        <li><strong>Keamanan dan Privasi:</strong> Kebijakan terkait keamanan informasi
                                            dan perlindungan data pribadi</li>
                                    </ul>
                                    <p></p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item p-1 mb-2">
                            <h3 class="accordion-header accordion-button h6 border-0 "
                                id="heading-4b82be4be873c8ad699fa97049523ac86b67a8bd" type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#collapse-4b82be4be873c8ad699fa97049523ac86b67a8bd" aria-expanded="false"
                                aria-controls="collapse-4b82be4be873c8ad699fa97049523ac86b67a8bd">Apa Kebijakan yang
                                mengatur evaluasi dan pemantauan pelaksanaan SPBE?
                            </h3>
                            <div id="collapse-4b82be4be873c8ad699fa97049523ac86b67a8bd"
                                class="accordion-collapse collapse border-0 "
                                aria-labelledby="heading-4b82be4be873c8ad699fa97049523ac86b67a8bd"
                                data-bs-parent="#accordionFAQ">
                                <div class="accordion-body py-0 content">
                                    <p></p>
                                    <p><strong>PermenPAN-RB Nomor 59 Tahun 2020</strong></p>
                                    <ul>
                                        <li><strong>Isi Utama:</strong> Aturan tentang evaluasi dan pemantauan
                                            pelaksanaan SPBE di instansi pemerintah.<ul>
                                                <li>PermenPAN-RB Nomor 59 Tahun 2020 mengatur tentang
                                                    indikator-indikator penilaian dan mekanisme evaluasi SPBE untuk
                                                    memastikan pelaksanaan yang sesuai dengan standar nasional.</li>
                                            </ul>
                                        </li>
                                        <li><strong>Indikator Penilaian:</strong> Kebijakan internal, tata kelola,
                                            manajemen, layanan, dan hasil implementasi SPBE.</li>
                                    </ul>
                                    <p></p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item p-1 mb-2">
                            <h3 class="accordion-header accordion-button h6 border-0 "
                                id="heading-3e13e9676a9cd6a6f8bfbe6e1e9fc0881ef247b3" type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#collapse-3e13e9676a9cd6a6f8bfbe6e1e9fc0881ef247b3" aria-expanded="false"
                                aria-controls="collapse-3e13e9676a9cd6a6f8bfbe6e1e9fc0881ef247b3">Apa kebijakan yang
                                mengatur kerangka kerja nasional SPBE?
                            </h3>
                            <div id="collapse-3e13e9676a9cd6a6f8bfbe6e1e9fc0881ef247b3"
                                class="accordion-collapse collapse border-0 "
                                aria-labelledby="heading-3e13e9676a9cd6a6f8bfbe6e1e9fc0881ef247b3"
                                data-bs-parent="#accordionFAQ">
                                <div class="accordion-body py-0 content">
                                    <p></p>
                                    <h5>Dasar Hukum SPBE</h5>
                                    <ul>
                                        <li>
                                            <p><strong>Peraturan Presiden Nomor 95 Tahun 2018</strong></p>
                                            <ul>
                                                <li><strong>Isi Utama:</strong> Penjelasan tentang peraturan yang
                                                    mengatur kerangka kerja nasional SPBE.<ul>
                                                        <li>Peraturan Presiden Nomor 95 Tahun 2018 menetapkan kebijakan
                                                            umum, prinsip-prinsip dasar, dan kerangka kerja nasional
                                                            untuk penerapan SPBE di seluruh instansi pemerintah.</li>
                                                    </ul>
                                                </li>
                                                <li><strong>Tujuan:</strong> Meningkatkan kualitas layanan publik dan
                                                    tata kelola pemerintahan melalui pemanfaatan teknologi informasi dan
                                                    komunikasi</li>
                                            </ul>
                                        </li>
                                    </ul>
                                    <p></p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item p-1 mb-2">
                            <h3 class="accordion-header accordion-button h6 border-0 "
                                id="heading-0c2f829793a1f0562fea97120357dd2d43319164" type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#collapse-0c2f829793a1f0562fea97120357dd2d43319164" aria-expanded="false"
                                aria-controls="collapse-0c2f829793a1f0562fea97120357dd2d43319164">Siapa yang bertanggung
                                jawab atas implementasi SPBE di Pemerintah Daerah?
                            </h3>
                            <div id="collapse-0c2f829793a1f0562fea97120357dd2d43319164"
                                class="accordion-collapse collapse border-0 "
                                aria-labelledby="heading-0c2f829793a1f0562fea97120357dd2d43319164"
                                data-bs-parent="#accordionFAQ">
                                <div class="accordion-body py-0 content">Pemerintah daerah, termasuk Pemerintah Kabupaten
                                    Tulang Bawang, bertanggung jawab atas pelaksanaan dan pengembangan SPBE sesuai dengan
                                    kebijakan yang telah ditetapkan oleh pemerintah pusat

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-lg-4 mt-4 mt-lg-0">
                    <div class="shadow rounded py-3 px-2 ms-0 ms-lg-4 bg-white position-relative">
                        <div class="block mx-0 mx-lg-3 mt-0">
                            <h4 class="h5">Kontak</h4>
                            <div class="content">Hubungi Kami, Kami Akan Senang Membantu
                                <br> <a href="tel:+62895616710043"><i class="bi bi-telephone me-1"></i> 0895616710043</a>
                                <br><i class="bi bi-calendar3 me-1"></i> Senin - Jumat, 08:00 - 16:00 WIB
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>
    {{-- End Section Pengetahuan/Pertanyaan --}}

@endsection
