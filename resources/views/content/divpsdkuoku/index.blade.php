@extends('layouts.main')

@section('title', 'DIV PSDKU OKU')

@push('mainStyles')
@endpush

@section('mainContent')
<section class="bg-light py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mb-4 mb-lg-0">
                <img src="{{ asset('assets/img/hero/hero.jpg') }}" class="w-100 mb-4" alt="">
                <h3 id="h1" class="fw-bold mb-4">Program Studi di Luar Kampus Utama OKU (DIV)</h3>
                <p style="text-align:justify;"><b>Visi :</b></p>
                <p style="text-align:justify;"><i>Menjadi pusat pendidikan vokasi di bidang teknologi produksi tanaman perkebunan yang
                        unggul dan terdepan di ASEAN pada
                        tahun 2032</i></p>
                <p style="text-align:justify;"><b>Misi :</b></p>
                <ol>
                    <li>Melaksanakan program pendidikan vokasi untuk menghasilkan lulusan yang mampu bersaing di tingkat nasional dan
                        berwirausaha sesuai nilai-nilai etika dan moral akademik</li>
                    <li>Melaksanakan penelitian dan pengembangan ilmu teknologi produksi tanaman perkebunan berbasis digital</li>
                    <li>Melaksanakan pengabdian kepada masyarakat dalam mengembangan teknologi produksi tanaman perkebunan</li>
                </ol>
                <h3 id="h2" class="fw-bold mb-4">Akredetasi</h3>
                <a href="{{ asset('assets/pdf/SK-SERTIFIKAT-AKREDITASI-POLSRI-2020.pdf') }}" class="mb-4"
                    download="Akreditasi-Teknik Sipil-DIII">Download Sertifikat Akreditasi</a>
                <h3 id="h3" class="fw-bold my-4">Profil Lulusan</h3>
                <p style="text-align:justify;"><b>Manager Kebun</b></p>
                <p style="text-align:justify;">Memiliki tanggung jawab membuat rencana, mengatur, memimpin dan mengendalikan untuk mencapai sasaran dalam proses
                teknologi produksi tanaman perkebunan.</p>
                <ol>
                    <li>Mengelolah, memimpin, membimbing, mengawasi serta mengontrol dan mengamankan unit kerja perkebunan.</li>
                    <li>Mempertanggungjawabkan sesluruh tugas pokok dan tugas tambahan dalam rangka pengelolaan perkebunan.</li>
                    <li>Membina hubungan baik dan harmonis, selalu mengedepankan sikap kekeluargaan dengan masyarakat setempat dan karyawan
                    kebun.</li>
                    <li>Memberikan pembinaan, motivasi dan memperhatikan seluruh personil yang berada dibawah tanggung jawabnya.</li>
                    <li>Memiliki kemampuan mengembangkan jaringan kerjasama.</li>
                </ol>
                <p style="text-align:justify;"><b>Agronomist</b></p>
                <p style="text-align:justify;">Memiliki kemampuan dalam hal mengembangkan dan menerapkan budidaya tanaman perkebunan</p>
                <ol>
                    <li>Melakukan penelitian dibidang agronomi</li>
                    <li>Mempelajari dan memperkenalkan metode penanaman lanjutan di bidang perkebunan</li>
                    <li>Menyelenggarakan budidaya benih varietas berkualitas tinggi dan bahan tanam, menciptakan dana benih.</li>
                    <li>Mengembangkan rencana (jadwal kalender) untuk perawatan tanaman perkebunan.</li>
                </ol>
                <p style="text-align:justify;"><b>Marketing</b></p>
                <p style="text-align:justify;">Memiliki kemampuan dalam hal memasarkan hasil dari bahan baku perkebunan dan memahami kekurangan dan kelebihan dari
                produk yang dipasarkan dalam bidang perkebunan.</p>
                <ol>
                    <li>Melakukan riset pasar dan menetapkan pasar sasaran</li>
                    <li>Menjalin hubungan baik antara perusahaan dengan konsumen</li>
                    <li>Membuat dan melakukan promosi produk perkebunan</li>
                </ol>
                <p style="text-align:justify;"><b>Account Officer</b></p>
                <p style="text-align:justify;">Memiliki kemampuan administrasi yang baik, menguasai teknologi informasi dan mengembangkan riset aplikatif untuk
                kemajuan perkebunan memiliki soft skill dan kreativitas dalam membangun lingkungan kebun yang kondusif.</p>
                <ol>
                    <li>Membuat laporan administrasi di bidang perkebunan</li>
                    <li>Melakukan analisa kelayakan industri di bidang perkebunanan</li>
                    <li>Berkoordinasi dengan marketing dalam hal pemasaran</li>
                    <li>Menjaga hubungan baik dengan mitra</li>
                </ol>
                <h3 id="h5" class="fw-bold mb-4">Kurikulum Program Studi PJJ (DIV)</h3>
                <a class="btn btn-lg btn-dark text-start dropdown-toggle rounded-0 w-100 mb-3" data-bs-toggle="collapse"
                    href="#collapseSemester1" role="button" aria-expanded="false" aria-controls="collapseSemester1">
                    Semester 1
                </a>
                <div class="collapse show" id="collapseSemester1">
                    <div class="card bg-transparent border-0 rounded-0">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-light text-center">
                                    <thead>
                                        <tr>
                                            <th rowspan="2">NO</th>
                                            <th rowspan="2">Kode Mata Kuliah</th>
                                            <th rowspan="2">Nama Mata Kuliah</th>
                                            <th>SKS Prodi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>SP200101</td>
                                            <td>Pendidikan Agama</td>
                                            <td>3</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>SP200105</td>
                                            <td>Bahasa Inggris 1</td>
                                            <td>2</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>SP200102</td>
                                            <td>Peendidikan Kewarganegaraan</td>
                                            <td>3</td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>SP201102</td>
                                            <td>Matematika Terapan 1</td>
                                            <td>2</td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>SP201104</td>
                                            <td>Fisika Terapan</td>
                                            <td>2</td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>SP201106</td>
                                            <td>Gambar Teknik 1</td>
                                            <td>2</td>
                                        </tr>
                                        <tr>
                                            <td>7</td>
                                            <td>SP201108</td>
                                            <td>Mekanika Rekayasa 1</td>
                                            <td>3</td>
                                        </tr>
                                        <tr>
                                            <td>8</td>
                                            <td>SP201114</td>
                                            <td>Teknologi Bahan 1</td>
                                            <td>2</td>
                                        </tr>
                                        <tr>
                                            <td>9</td>
                                            <td>SP201116</td>
                                            <td>Ilmu Ukur Tanah 1</td>
                                            <td>2</td>
                                        </tr>
                                        <tr>
                                            <td colspan="3"><b>TOTAL</b></td>
                                            <td><b>21</b></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="btn btn-lg btn-dark text-start dropdown-toggle rounded-0 w-100 mb-3" data-bs-toggle="collapse"
                    href="#collapseSemester2" role="button" aria-expanded="false" aria-controls="collapseSemester2">
                    Semester 2
                </a>
                <div class="collapse" id="collapseSemester2">
                    <div class="card bg-transparent border-0 rounded-0">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-light text-center">
                                    <thead>
                                        <tr>
                                            <th rowspan="2">NO</th>
                                            <th rowspan="2">Kode Mata Kuliah</th>
                                            <th rowspan="2">Nama Mata Kuliah</th>
                                            <th>SKS Prodi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>SP200206</td>
                                            <td>Bahasa Inggris 2</td>
                                            <td>2</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>SP201203</td>
                                            <td>Matematika Terapan 2</td>
                                            <td>2</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>SP201207</td>
                                            <td>Gambar Teknik 2</td>
                                            <td>2</td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>SP201209</td>
                                            <td>Mekanika Rekayasa 2</td>
                                            <td>3</td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>SP200203</td>
                                            <td>Bahasa Indonesia</td>
                                            <td>3</td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>SP201212</td>
                                            <td>Mekanika Tanah 1</td>
                                            <td>2</td>
                                        </tr>
                                        <tr>
                                            <td>7</td>
                                            <td>SP201215</td>
                                            <td>Teknologi Bahan 2</td>
                                            <td>2</td>
                                        </tr>
                                        <tr>
                                            <td>8</td>
                                            <td>SP202208</td>
                                            <td>Lab Uji Bahan 1</td>
                                            <td>1</td>
                                        </tr>
                                        <tr>
                                            <td>9</td>
                                            <td>SP201217</td>
                                            <td>Ilmu Ukur Tanah 2</td>
                                            <td>2</td>
                                        </tr>
                                        <tr>
                                            <td colspan="3"><b>TOTAL</b></td>
                                            <td><b>19</b></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="btn btn-lg btn-dark text-start dropdown-toggle rounded-0 w-100 mb-3" data-bs-toggle="collapse"
                    href="#collapseSemester3" role="button" aria-expanded="false" aria-controls="collapseSemester3">
                    Semester 3
                </a>
                <div class="collapse" id="collapseSemester3">
                    <div class="card bg-transparent border-0 rounded-0">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-light text-center">
                                    <thead>
                                        <tr>
                                            <th rowspan="2">NO</th>
                                            <th rowspan="2">Kode Mata Kuliah</th>
                                            <th rowspan="2">Nama Mata Kuliah</th>
                                            <th>SKS Prodi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>SP200304</td>
                                            <td>Pendidikan Pancasila</td>
                                            <td>2</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>SP201310</td>
                                            <td>Mekanika Rekayasa 3</td>
                                            <td>3</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>SP201320</td>
                                            <td>Konstruksi Beton 1</td>
                                            <td>2</td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>SP201324</td>
                                            <td>Konstruksi Baja 1</td>
                                            <td>2</td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>SP201327</td>
                                            <td>Ekonomi Rekayasa</td>
                                            <td>2</td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>SP202301</td>
                                            <td>Praktek Kerja Batu (dinding penahan tanah)</td>
                                            <td>1</td>
                                        </tr>
                                        <tr>
                                            <td>7</td>
                                            <td>SP202310</td>
                                            <td>Lab Uji Bahan 2</td>
                                            <td>1</td>
                                        </tr>
                                        <tr>
                                            <td>8</td>
                                            <td>SP201313</td>
                                            <td>Mekanika Tanah 2</td>
                                            <td>3</td>
                                        </tr>
                                        <tr>
                                            <td>9</td>
                                            <td>SP202311</td>
                                            <td>Lab Uji Tanah</td>
                                            <td>1</td>
                                        </tr>
                                        <tr>
                                            <td>10</td>
                                            <td>SP201317</td>
                                            <td>Hidrologi</td>
                                            <td>2</td>
                                        </tr>
                                        <tr>
                                            <td>11</td>
                                            <td>SP203308</td>
                                            <td>PTM dan Alat Berat</td>
                                            <td>2</td>
                                        </tr>
                                        <tr>
                                            <td colspan="3"><b>TOTAL</b></td>
                                            <td><b>21</b></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="btn btn-lg btn-dark text-start dropdown-toggle rounded-0 w-100 mb-3" data-bs-toggle="collapse"
                    href="#collapseSemester4" role="button" aria-expanded="false" aria-controls="collapseSemester4">
                    Semester 4
                </a>
                <div class="collapse" id="collapseSemester4">
                    <div class="card bg-transparent border-0 rounded-0">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-light text-center">
                                    <thead>
                                        <tr>
                                            <th rowspan="2">NO</th>
                                            <th rowspan="2">Kode Mata Kuliah</th>
                                            <th rowspan="2">Nama Mata Kuliah</th>
                                            <th>SKS Prodi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>SP201420</td>
                                            <td>Konstruksi Beton 2</td>
                                            <td>2</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>SP201422</td>
                                            <td>Konstruksi Baja 2</td>
                                            <td>2</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>SP203404</td>
                                            <td>Rekayasa Pondasi 1</td>
                                            <td>2</td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>SP201405</td>
                                            <td>Statistik</td>
                                            <td>2</td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>SP202405</td>
                                            <td>Praktek Kerja Baja</td>
                                            <td>1</td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>SP202404</td>
                                            <td>Praktek Beton</td>
                                            <td>1</td>
                                        </tr>
                                        <tr>
                                            <td>7</td>
                                            <td>SP202410</td>
                                            <td>Lab Struktur</td>
                                            <td>1</td>
                                        </tr>
                                        <tr>
                                            <td>8</td>
                                            <td>SP202403</td>
                                            <td>Praktek Perancah</td>
                                            <td>1</td>
                                        </tr>
                                        <tr>
                                            <td>9</td>
                                            <td>SP203401</td>
                                            <td>Perancangan Geometrik 1</td>
                                            <td>2</td>
                                        </tr>
                                        <tr>
                                            <td>10</td>
                                            <td>SP203409</td>
                                            <td>Perencanaan Konstruksi Perkerasan Jalan 1</td>
                                            <td>2</td>
                                        </tr>
                                        <tr>
                                            <td>11</td>
                                            <td>SP201401</td>
                                            <td>Pengantar GIS dan Digitalisasi Peta</td>
                                            <td>2</td>
                                        </tr>
                                        <tr>
                                            <td>12</td>
                                            <td>SP202411</td>
                                            <td>Laboratorium Hidrolika</td>
                                            <td>1</td>
                                        </tr>
                                        <tr>
                                            <td colspan="3"><b>TOTAL</b></td>
                                            <td><b>19</b></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="btn btn-lg btn-dark text-start dropdown-toggle rounded-0 w-100 mb-3" data-bs-toggle="collapse"
                    href="#collapseSemester5" role="button" aria-expanded="false" aria-controls="collapseSemester5">
                    Semester 5
                </a>
                <div class="collapse" id="collapseSemester5">
                    <div class="card bg-transparent border-0 rounded-0">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-light text-center">
                                    <thead>
                                        <tr>
                                            <th rowspan="2">NO</th>
                                            <th rowspan="2">Kode Mata Kuliah</th>
                                            <th rowspan="2">Nama Mata Kuliah</th>
                                            <th>SKS Prodi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>SP203518</td>
                                            <td>Permodelan Konstruksi Jembatan</td>
                                            <td>2</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>SP203507</td>
                                            <td>Rekayasa Lalu Lintas</td>
                                            <td>2</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>SP203503</td>
                                            <td>Drainase Jalan</td>
                                            <td>2</td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>SP203505</td>
                                            <td>Rekayasa Pondasi 2</td>
                                            <td>2</td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>SP202502</td>
                                            <td>Praktek Drainase</td>
                                            <td>1</td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>SP202512</td>
                                            <td>Konstruksi Beton Lanjut</td>
                                            <td>3</td>
                                        </tr>
                                        <tr>
                                            <td>7</td>
                                            <td>SP202506</td>
                                            <td>Praktek Perkerasan Jalan</td>
                                            <td>1</td>
                                        </tr>
                                        <tr>
                                            <td>8</td>
                                            <td>SP203512</td>
                                            <td>Estimasi Biaya</td>
                                            <td>2</td>
                                        </tr>
                                        <tr>
                                            <td>9</td>
                                            <td>SP203502</td>
                                            <td>Perancangan Geometrik 2</td>
                                            <td>2</td>
                                        </tr>
                                        <tr>
                                            <td>10</td>
                                            <td>SP203511</td>
                                            <td>Manajemen Konstruksi</td>
                                            <td>2</td>
                                        </tr>
                                        <tr>
                                            <td>11</td>
                                            <td>SP203510</td>
                                            <td>Perencanaan Konstruksi Perkerasan Jalan 2</td>
                                            <td>2</td>
                                        </tr>
                                        <tr>
                                            <td colspan="3"><b>TOTAL</b></td>
                                            <td><b>21</b></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="btn btn-lg btn-dark text-start dropdown-toggle rounded-0 w-100 mb-3" data-bs-toggle="collapse"
                    href="#collapseSemester6" role="button" aria-expanded="false" aria-controls="collapseSemester6">
                    Semester 6
                </a>
                <div class="collapse" id="collapseSemester6">
                    <div class="card bg-transparent border-0 rounded-0">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-light text-center">
                                    <thead>
                                        <tr>
                                            <th rowspan="2">NO</th>
                                            <th rowspan="2">Kode Mata Kuliah</th>
                                            <th rowspan="2">Nama Mata Kuliah</th>
                                            <th>SKS Prodi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>SP203614</td>
                                            <td>Metode Pelaksanaan dan Pemeliharaan Jalan dan Jembatan</td>
                                            <td>2</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>SP201625</td>
                                            <td>Amdal Jalan dan Jembatan</td>
                                            <td>2</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>SP20A601</td>
                                            <td>Merumuskan Permasalahan</td>
                                            <td>3</td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>SP20A602</td>
                                            <td>Menyelesaikan Permasalahan</td>
                                            <td>3</td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>SP20A603</td>
                                            <td>Kemampuan Analisa Permasalahan</td>
                                            <td>4</td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>SP20A604</td>
                                            <td>Kemampuan Berkomunikasi</td>
                                            <td>2</td>
                                        </tr>
                                        <tr>
                                            <td>7</td>
                                            <td>SP20A605</td>
                                            <td>Kemampuan Bekerjasama</td>
                                            <td>2</td>
                                        </tr>
                                        <tr>
                                            <td>8</td>
                                            <td>SP20A606</td>
                                            <td>Kerja Keras</td>
                                            <td>2</td>
                                        </tr>
                                        <tr>
                                            <td>9</td>
                                            <td>SP20A607</td>
                                            <td>Kreatifitas</td>
                                            <td>2</td>
                                        </tr>
                                        <tr>
                                            <td>10</td>
                                            <td>SP20A608</td>
                                            <td>Pemahaman dan Kemampuan dalam Melaksanakan dan menyelesaikan Tugas</td>
                                            <td>1</td>
                                        </tr>
                                        <tr>
                                            <td>11</td>
                                            <td>SP20A609</td>
                                            <td>Keselamatan Kesehatan Kerja dan Lingkungan</td>
                                            <td>1</td>
                                        </tr>
                                        <tr>
                                            <td colspan="3"><b>TOTAL</b></td>
                                            <td><b>24</b></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="btn btn-lg btn-dark text-start dropdown-toggle rounded-0 w-100 mb-3" data-bs-toggle="collapse"
                    href="#collapseSemester7" role="button" aria-expanded="false" aria-controls="collapseSemester7">
                    Semester 7
                </a>
                <div class="collapse" id="collapseSemester7">
                    <div class="card bg-transparent border-0 rounded-0">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-light text-center">
                                    <thead>
                                        <tr>
                                            <th rowspan="2">NO</th>
                                            <th rowspan="2">Kode Mata Kuliah</th>
                                            <th rowspan="2">Nama Mata Kuliah</th>
                                            <th>SKS Prodi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>SP203716</td>
                                            <td>Manajemen Proyek</td>
                                            <td>2</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>SP203715</td>
                                            <td>Proyek Awal (Perancangan Jalan dan Jembatan)</td>
                                            <td>2</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>SP202715</td>
                                            <td>Merdeka Belajar Kampus Merdeka 2 (MBKM 2)</td>
                                            <td>20</td>
                                        </tr>
                                        <tr>
                                            <td colspan="3"><b>TOTAL</b></td>
                                            <td><b>24</b></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="btn btn-lg btn-dark text-start dropdown-toggle rounded-0 w-100 mb-3" data-bs-toggle="collapse"
                    href="#collapseSemester8" role="button" aria-expanded="false" aria-controls="collapseSemester8">
                    Semester 8
                </a>
                <div class="collapse" id="collapseSemester8">
                    <div class="card bg-transparent border-0 rounded-0">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-light text-center">
                                    <thead>
                                        <tr>
                                            <th rowspan="2">NO</th>
                                            <th rowspan="2">Kode Mata Kuliah</th>
                                            <th rowspan="2">Nama Mata Kuliah</th>
                                            <th>SKS Prodi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>SP201823</td>
                                            <td>K3 dan Hukum Ketenagakerjaan</td>
                                            <td>1</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>SP203817</td>
                                            <td>Perenc. Jaringan Jalan Berwawasan Lingkungan</td>
                                            <td>2</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>SP202815</td>
                                            <td>Skripsi</td>
                                            <td>6</td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>SP203813</td>
                                            <td>Aspek Usaha Etika dan Hukum</td>
                                            <td>2</td>
                                        </tr>
                                        <tr>
                                            <td colspan="3"><b>TOTAL</b></td>
                                            <td><b>11</b></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            <div class="col-lg-4">
                <h3 class="fw-bold mb-4">Daftar Isi</h3>
                <div class="card border-0 rounded-0 mb-4">
                    <div class="card-body">
                        <ul id="looph3">
                        </ul>
                    </div>
                </div>
                <h3 class="fw-bold mb-4">Blog Informasi</h3>
                <div class="card border-0 rounded-0">
                    <div class="card-body">
                        <div class="row">
                            @include('includes.main.blog')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@push('mainScripts')
<script type="text/javascript">
    var ul = document.querySelector('#looph3');
    var h3Elements = document.querySelectorAll('h3');
    h3Elements.forEach(function(h3Element) {
        if(h3Element.getAttribute('id')){
        var liElement = document.createElement('li');
        var aElement = document.createElement('a');
        var attrh3Element = h3Element.getAttribute('id')
        aElement.textContent = h3Element.textContent;
        aElement.href = '#'+attrh3Element;
        aElement.classList.add('nav-top-link', 'd-block', 'text-dark');
        liElement.appendChild(aElement);
        ul.appendChild(liElement);

        var link = document.querySelector(`a[href="#${attrh3Element}"]`);
            link.addEventListener('click', function (e) {
            e.preventDefault();
            var targetElement = document.querySelector('#'+attrh3Element);
            if (targetElement) {
                window.scrollTo({
                    top: targetElement.offsetTop - 100,
                    behavior: 'smooth'
                });
            }
        });

        }
    });
</script>
@endpush