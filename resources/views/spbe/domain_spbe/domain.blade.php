@extends('spbe.layouts.app')

@section('content')
    <section class="section">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-6">
                    <div class="section-title text-center">
                        <h1>Domain SPBE</h1>
                    </div>
                </div>
            </div>
            <title>SPBE Interface</title>
            <style>

                .accordion {
                    background: #fff;
                    border: 1px solid #ddd;
                    border-radius: 5px;
                    margin-bottom: 10px;
                    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
                }

                .accordion-header {
                    padding: 15px;
                    font-size: 16px;
                    font-weight: bold;
                    cursor: pointer;
                    background-color: #f8f8f8;
                    border-bottom: 1px solid #ddd;
                }

                .accordion-header.active {
                    background-color: #e9ecef;
                }

                .accordion-body {
                    padding: 15px;
                    display: none;
                    font-size: 14px;
                    color: #333;
                }

                .accordion-body.show {
                    display: block;
                }

                .indicator-title {
                    font-weight: bold;
                    color: #007bff;
                    margin-bottom: 10px;
                }

                .indicator-section {
                    margin-bottom: 15px;
                }

                .indicator-section h5 {
                    margin: 5px 0;
                    font-size: 14px;
                    font-weight: bold;
                    color: #333;
                }

                .indicator-section p {
                    margin: 5px 0 10px 0;
                    font-size: 14px;
                    line-height: 1.5;
                }
            </style>
            </head>

            <body>
                <div class="accordion">
                    <div class="accordion-header" onclick="toggleAccordion(this)">
                        Domain Kebijakan SPBE
                    </div>
                    <div class="accordion-body">
                        <div class="accordion">
                            <div class="accordion-header" onclick="toggleAccordion(this)">
                                Aspek Kebijakan Internal terkait Tata Kelola SPBE
                            </div>
                            <div class="accordion-body">
                                <div class="accordion">
                                    <div class="accordion-header" onclick="toggleAccordion(this)">
                                        Indikator 1 Kebijakan Internal Arsitektur SPBE Pemerintah Daerah
                                    </div>
                                    <div class="accordion-body">
                                        <div class="indicator-section">
                                            <h5>Bobot Indikator</h5>
                                            <p>130</p>
                                        </div>
                                        <div class="indicator-section">
                                            <h5>Deskripsi</h5>
                                            <p>Kebijakan Internal Arsitektur SPBE Pemerintah Daerah</p>
                                        </div>
                                        <div class="indicator-section">
                                            <h5>Penjelasan Indikator</h5>
                                            <p>Arsitektur SPBE adalah kerangka dasar yang mendeskripsikan integrasi proses
                                                bisnis...</p>
                                        </div>
                                        <div class="indicator-section">
                                            <h5>Penjelasan Penilaian</h5>
                                            <p>Penilaian dilakukan terhadap peraturan/norma yang memenuhi kekuatan hukum...
                                            </p>
                                        </div>
                                        <div class="indicator-section">
                                            <h5>Penjelasan Bukti Dukung</h5>
                                            <p>Bukti dukung tingkat kematangan dilampirkan berupa dokumen kebijakan...</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion">
                                    <div class="accordion-header" onclick="toggleAccordion(this)">
                                        Indikator 2 Kebijakan Internal Arsitektur SPBE Pemerintah Daerah
                                    </div>
                                    <div class="accordion-body">
                                        <div class="indicator-section">
                                            <h5>Bobot Indikator</h5>
                                            <p>130</p>
                                        </div>
                                        <div class="indicator-section">
                                            <h5>Deskripsi</h5>
                                            <p>Kebijakan Internal Arsitektur SPBE Pemerintah Daerah</p>
                                        </div>
                                        <div class="indicator-section">
                                            <h5>Penjelasan Indikator</h5>
                                            <p>Arsitektur SPBE adalah kerangka dasar yang mendeskripsikan integrasi proses
                                                bisnis...</p>
                                        </div>
                                        <div class="indicator-section">
                                            <h5>Penjelasan Penilaian</h5>
                                            <p>Penilaian dilakukan terhadap peraturan/norma yang memenuhi kekuatan hukum...
                                            </p>
                                        </div>
                                        <div class="indicator-section">
                                            <h5>Penjelasan Bukti Dukung</h5>
                                            <p>Bukti dukung tingkat kematangan dilampirkan berupa dokumen kebijakan...</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="accordion">
                    <div class="accordion-header" onclick="toggleAccordion(this)">
                        Domain Tata Kelola SPBE
                    </div>
                    <div class="accordion-body">
                        <div class="accordion">
                            <div class="accordion-header" onclick="toggleAccordion(this)">
                                Aspek Kebijakan Internal terkait Tata Kelola SPBE
                            </div>
                            <div class="accordion-body">
                                <div class="accordion">
                                    <div class="accordion-header" onclick="toggleAccordion(this)">
                                        Indikator 1 Kebijakan Internal Arsitektur SPBE Pemerintah Daerah
                                    </div>
                                    <div class="accordion-body">
                                        <div class="indicator-section">
                                            <h5>Bobot Indikator</h5>
                                            <p>130</p>
                                        </div>
                                        <div class="indicator-section">
                                            <h5>Deskripsi</h5>
                                            <p>Kebijakan Internal Arsitektur SPBE Pemerintah Daerah</p>
                                        </div>
                                        <div class="indicator-section">
                                            <h5>Penjelasan Indikator</h5>
                                            <p>Arsitektur SPBE adalah kerangka dasar yang mendeskripsikan integrasi proses
                                                bisnis...</p>
                                        </div>
                                        <div class="indicator-section">
                                            <h5>Penjelasan Penilaian</h5>
                                            <p>Penilaian dilakukan terhadap peraturan/norma yang memenuhi kekuatan hukum...
                                            </p>
                                        </div>
                                        <div class="indicator-section">
                                            <h5>Penjelasan Bukti Dukung</h5>
                                            <p>Bukti dukung tingkat kematangan dilampirkan berupa dokumen kebijakan...</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="accordion">
                    <div class="accordion-header" onclick="toggleAccordion(this)">
                        Domain Layanan SPBE
                    </div>
                    <div class="accordion-body">
                        <div class="accordion">
                            <div class="accordion-header" onclick="toggleAccordion(this)">
                                Aspek Kebijakan Internal terkait Tata Kelola SPBE
                            </div>
                            <div class="accordion-body">
                                <div class="accordion">
                                    <div class="accordion-header" onclick="toggleAccordion(this)">
                                        Indikator 1 Kebijakan Internal Arsitektur SPBE Pemerintah Daerah
                                    </div>
                                    <div class="accordion-body">
                                        <div class="indicator-section">
                                            <h5>Bobot Indikator</h5>
                                            <p>130</p>
                                        </div>
                                        <div class="indicator-section">
                                            <h5>Deskripsi</h5>
                                            <p>Kebijakan Internal Arsitektur SPBE Pemerintah Daerah</p>
                                        </div>
                                        <div class="indicator-section">
                                            <h5>Penjelasan Indikator</h5>
                                            <p>Arsitektur SPBE adalah kerangka dasar yang mendeskripsikan integrasi proses
                                                bisnis...</p>
                                        </div>
                                        <div class="indicator-section">
                                            <h5>Penjelasan Penilaian</h5>
                                            <p>Penilaian dilakukan terhadap peraturan/norma yang memenuhi kekuatan hukum...
                                            </p>
                                        </div>
                                        <div class="indicator-section">
                                            <h5>Penjelasan Bukti Dukung</h5>
                                            <p>Bukti dukung tingkat kematangan dilampirkan berupa dokumen kebijakan...</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="accordion">
                    <div class="accordion-header" onclick="toggleAccordion(this)">
                        Domain Tata Kelola SPBE
                    </div>
                    <div class="accordion-body">
                        <div class="accordion">
                            <div class="accordion-header" onclick="toggleAccordion(this)">
                                Aspek Kebijakan Internal terkait Tata Kelola SPBE
                            </div>
                            <div class="accordion-body">
                                <div class="accordion">
                                    <div class="accordion-header" onclick="toggleAccordion(this)">
                                        Indikator 1 Kebijakan Internal Arsitektur SPBE Pemerintah Daerah
                                    </div>
                                    <div class="accordion-body">
                                        <div class="indicator-section">
                                            <h5>Bobot Indikator</h5>
                                            <p>130</p>
                                        </div>
                                        <div class="indicator-section">
                                            <h5>Deskripsi</h5>
                                            <p>Kebijakan Internal Arsitektur SPBE Pemerintah Daerah</p>
                                        </div>
                                        <div class="indicator-section">
                                            <h5>Penjelasan Indikator</h5>
                                            <p>Arsitektur SPBE adalah kerangka dasar yang mendeskripsikan integrasi proses
                                                bisnis...</p>
                                        </div>
                                        <div class="indicator-section">
                                            <h5>Penjelasan Penilaian</h5>
                                            <p>Penilaian dilakukan terhadap peraturan/norma yang memenuhi kekuatan hukum...
                                            </p>
                                        </div>
                                        <div class="indicator-section">
                                            <h5>Penjelasan Bukti Dukung</h5>
                                            <p>Bukti dukung tingkat kematangan dilampirkan berupa dokumen kebijakan...</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <script>
                    function toggleAccordion(element) {
                        element.classList.toggle('active');
                        const body = element.nextElementSibling;
                        if (body) {
                            body.classList.toggle('show');
                        }
                    }
                </script>

        </div>
    </section>
@endsection
