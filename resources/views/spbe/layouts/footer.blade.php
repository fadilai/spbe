<footer class="section-sm ">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-5 newsletter-form mb-5">
                <div class="footer-widget" style="padding-top:35px;">
                    {{-- <h5 class="mb-2 text-primary font-secondary">SPBE Kabupaten Tulang Bawang</h5> --}}
                    <div class="d-flex align-items-center mb-3">
                        <a class="navbar-brand" href="/spbe">
                            <img loading="preload" decoding="async" class="img-fluid" width="55"
                                src="{{ asset('spbe_template/images/spbe.svg') }}" alt="SPBE">
                        </a>
                        <a class="navbar-brand mr-0" href="/">
                            <img loading="preload" decoding="async" class="img-fluid" width="55"
                                src="{{ asset('spbe_template/images/favicon.png') }}" alt="Logo Tulang Bawang">
                        </a>
                    </div>
                    <p style="font-size: 14px;width: 350px;">Sistem Pemerintahan Berbasis Elektronik (SPBE) Mendukung
                        Pelayanan Publik.</p>

                    <ul class="list-unstyled list-inline mb-0 social-icons mt-4">
                        <li class="list-inline-item me-3"><a title="Explorer Facebook Profile" class="text-black"
                                href="https://www.facebook.com/@PemerintahKabupatenTulangBawang/?locale=id_ID"><i
                                    class="fab fa-facebook-f"></i></a></li>
                        <li class="list-inline-item me-3"><a title="Explorer Youtube Profile" class="text-black"
                                href="https://www.youtube.com/channel/UCAsCjRK-eZhWnKjpIX253qw"><i
                                    class="fab fa-youtube"></i></a></li>
                        <li class="list-inline-item me-3"><a title="Explorer Instagram Profile" class="text-black"
                                href="https://www.instagram.com/mediacenterpemkabtulangbawang/"><i
                                    class="fab fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-6 mb-4">
                <div class="footer-widget">
                    <h5 class="mb-4 text-primary font-secondary">Menu</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="/domain">Domain SPBE</a>
                        </li>
                        <li class="mb-2"><a href="#kebijakan">Kebijakan</a>
                        </li>
                        <li class="mb-2"><a href="#tatakelola">Tata Kelola</a>
                        </li>
                        <li class="mb-2"><a href="#manajemen">Manajemen</a>
                        </li>
                        <li class="mb-2"><a href="#layanan">Layanan</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-6 mb-4">
                <div class="footer-widget">
                    <h5 class="mb-4 text-primary font-secondary">Layanan</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="https://sikeptemen.tulangbawangkab.go.id/main">Sikep Temen</a>
                        </li>
                        <li class="mb-2"><a href="#">Sibete</a>
                        </li>
                         <li class="mb-2"><a href="https://jdih.tulangbawangkab.go.id/">JDIH</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row align-items-center mt-5 position-relative">
            <div class="position-absolute text-center top-0">
                <div class="footer-copyright-text">
                    <p>Copyright © {{ date('Y') }} <a href="https://diskominfo.tulangbawangkab.go.id/">DISKOMINFO Tulang Bawang.</a></p>
                </div>
            </div>

        </div>


        <div id="admin" onclick="openWhatssApp()" style="cursor: pointer !important;"> <i class="bi bi-whatsapp" style="font-size: 50px;color:#114a43;"></i>
        </div>

        <script>
             function openWhatssApp() {
                var message =
                    "Halo Min, saya memiliki kendala dalam menggunakan website SPBE. Bisa bantu saya?";
                var phoneNumber = "6282175324747";

                // Membuat URL untuk mengarahkan pengguna ke halaman WhatsApp
                var whatsappURL = "https://api.whatsapp.com/send?phone=" + phoneNumber + "&text=" + encodeURIComponent(message);

                window.open(whatsappURL, "_blank");
            }
        </script>

    </div>
</footer>
