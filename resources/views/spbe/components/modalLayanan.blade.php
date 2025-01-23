<div class="modal modalLayanan fade" id="modalLayanan" tabindex="-1" aria-labelledby="modalLayanan" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="max-width: 800px;">
        <div class="modal-content">
            <div class="modal-header border-bottom-0 text-center flex-column ">
               <h5 class="modal-title fw-bold" id="modalKegiatanLabel">List Layanan Pemerintah</h5>
                <p class="text-muted mb-0">Kabupaten Tulang Bawang</p>
                <button type="button" class="btn-close position-absolute top-0 end-0 m-3" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <a href="https://www.lapor.go.id/">
                            <div class="card text-center shadow">
                            <img src="{{ asset('spbe_template/images/layanan/lapor.png') }}" class="card-img-top mx-auto mt-3"
                                alt="Logo 1" style="width: 65%; height: auto;">
                            <div class="card-body d-flex flex-column">
                                <h6 class="card-title flex-grow-1">LAPOR</h6>
                            </div>
                        </div>
                        </a>

                    </div>
                    <div class="col-md-4 mb-3">
                        <a href="/">
                            <div class="card text-center shadow">
                            <img src="{{ asset('spbe_template/images/layanan/spbe_tb.png') }}" class="card-img-top mx-auto mt-3"
                                alt="Logo 2" style="width: 65%; height: auto;">
                            <div class="card-body d-flex flex-column">
                                <h6 class="card-title flex-grow-1">SPBE</h6>
                            </div>
                        </div>
                        </a>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
