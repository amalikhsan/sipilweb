@extends('layouts.main')

@section('title', 'DIV TPTP')

@push('mainStyles')
@endpush

@section('mainContent')
<section class="bg-light py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mb-4 mb-lg-0">
                <img src="{{ asset('assets/img/hero/hero.jpg') }}" class="w-100 mb-4" alt="">
                <h3 id="h1" class="fw-bold mb-4">Teknologi Produksi Tanaman Perkebunan (DIV)</h3>
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
                <p style="text-align:justify;">Memiliki tanggung jawab membuat rencana, mengatur, memimpin dan mengendalikan untuk
                    mencapai sasaran dalam proses
                    teknologi produksi tanaman perkebunan.</p>
                <ol>
                    <li>Mengelolah, memimpin, membimbing, mengawasi serta mengontrol dan mengamankan unit kerja perkebunan.</li>
                    <li>Mempertanggungjawabkan sesluruh tugas pokok dan tugas tambahan dalam rangka pengelolaan perkebunan.</li>
                    <li>Membina hubungan baik dan harmonis, selalu mengedepankan sikap kekeluargaan dengan masyarakat setempat dan
                        karyawan
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
                <p style="text-align:justify;">Memiliki kemampuan dalam hal memasarkan hasil dari bahan baku perkebunan dan memahami
                    kekurangan dan kelebihan dari
                    produk yang dipasarkan dalam bidang perkebunan.</p>
                <ol>
                    <li>Melakukan riset pasar dan menetapkan pasar sasaran</li>
                    <li>Menjalin hubungan baik antara perusahaan dengan konsumen</li>
                    <li>Membuat dan melakukan promosi produk perkebunan</li>
                </ol>
                <p style="text-align:justify;"><b>Account Officer</b></p>
                <p style="text-align:justify;">Memiliki kemampuan administrasi yang baik, menguasai teknologi informasi dan
                    mengembangkan riset aplikatif untuk
                    kemajuan perkebunan memiliki soft skill dan kreativitas dalam membangun lingkungan kebun yang kondusif.</p>
                <ol>
                    <li>Membuat laporan administrasi di bidang perkebunan</li>
                    <li>Melakukan analisa kelayakan industri di bidang perkebunanan</li>
                    <li>Berkoordinasi dengan marketing dalam hal pemasaran</li>
                    <li>Menjaga hubungan baik dengan mitra</li>
                </ol>
                <h3 id="h4" class="fw-bold mb-4">Kurikulum Program Studi TPTP (DIV)</h3>
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
                                            <th rowspan="2">KODE</th>
                                            <th rowspan="2">MATA KULIAH</th>
                                            <th>SKS Prodi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>PK 21</td>
                                            <td>Pendidikan Agama</td>
                                            <td>20</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>PK210102</td>
                                            <td>Pendidikan Pancasila</td>
                                            <td>20</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>PK210203</td>
                                            <td>Pendidikan Kewarganegaraan</td>
                                            <td>20</td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>PK210104</td>
                                            <td>Bahasa Indonesia</td>
                                            <td>20</td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>PK210305</td>
                                            <td>Kewirausahaan</td>
                                            <td>20</td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>PK210106</td>
                                            <td>Etika Profesi</td>
                                            <td>20</td>
                                        </tr>
                                        <tr>
                                            <td>7</td>
                                            <td>PK210307</td>
                                            <td>Pemberdayaan Masyarakat</td>
                                            <td>20</td>
                                        </tr>
                                        <tr>
                                            <td colspan="3"><b>TOTAL</b></td>
                                            <td><b>140</b></td>
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
                                            <th colspan="2">SKS Prodi</th>
                                            <th colspan="2">SKS Diluar Prodi</th>
                                            <th rowspan="2">Total SKS</th>
                                        </tr>
                                        <tr>
                                            <th>T</th>
                                            <th>P</th>
                                            <th>T</th>
                                            <th>P</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>TC201105</td>
                                            <td>Rangkaian Listrik</td>
                                            <td>2</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>2</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>TC201106</td>
                                            <td>Matematika</td>
                                            <td>3</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>3</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>TC201108</td>
                                            <td>Pengantar Teknologi Komputer</td>
                                            <td>2</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>2</td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>TC201109</td>
                                            <td>Elektronika Analog</td>
                                            <td>3</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>3</td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>TC201110</td>
                                            <td>Elektronika Digital</td>
                                            <td>3</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>3</td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>TC202104</td>
                                            <td>Jaringan Komputer</td>
                                            <td>2</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>2</td>
                                        </tr>
                                        <tr>
                                            <td>7</td>
                                            <td>TC201112</td>
                                            <td>Algoritma Pemrograman</td>
                                            <td>2</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>2</td>
                                        </tr>
                                        <tr>
                                            <td>8</td>
                                            <td>TC201114</td>
                                            <td>Praktek Gambar Teknik</td>
                                            <td>0</td>
                                            <td>1</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>1</td>
                                        </tr>
                                        <tr>
                                            <td>9</td>
                                            <td>TC201115</td>
                                            <td>Praktek Pemrograman Dasar 1</td>
                                            <td>0</td>
                                            <td>1</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>1</td>
                                        </tr>
                                        <tr>
                                            <td>10</td>
                                            <td>TC201116</td>
                                            <td>Praktek Bahasa Rakitan</td>
                                            <td>0</td>
                                            <td>1</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>1</td>
                                        </tr>
                                        <tr>
                                            <td>11</td>
                                            <td>TC201117</td>
                                            <td>Praktek Rangkaian Listrik</td>
                                            <td>0</td>
                                            <td>1</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>1</td>
                                        </tr>
                                        <tr>
                                            <td colspan="3"><b>TOTAL</b></td>
                                            <td><b>17</b></td>
                                            <td><b>4</b></td>
                                            <td><b>0</b></td>
                                            <td><b>0</b></td>
                                            <td><b>21</b></td>
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
                                            <th colspan="2">SKS Prodi</th>
                                            <th colspan="2">SKS Diluar Prodi</th>
                                            <th rowspan="2">Total SKS</th>
                                        </tr>
                                        <tr>
                                            <th>T</th>
                                            <th>P</th>
                                            <th>T</th>
                                            <th>P</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>TC201105</td>
                                            <td>Rangkaian Listrik</td>
                                            <td>2</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>2</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>TC201106</td>
                                            <td>Matematika</td>
                                            <td>3</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>3</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>TC201108</td>
                                            <td>Pengantar Teknologi Komputer</td>
                                            <td>2</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>2</td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>TC201109</td>
                                            <td>Elektronika Analog</td>
                                            <td>3</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>3</td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>TC201110</td>
                                            <td>Elektronika Digital</td>
                                            <td>3</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>3</td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>TC202104</td>
                                            <td>Jaringan Komputer</td>
                                            <td>2</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>2</td>
                                        </tr>
                                        <tr>
                                            <td>7</td>
                                            <td>TC201112</td>
                                            <td>Algoritma Pemrograman</td>
                                            <td>2</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>2</td>
                                        </tr>
                                        <tr>
                                            <td>8</td>
                                            <td>TC201114</td>
                                            <td>Praktek Gambar Teknik</td>
                                            <td>0</td>
                                            <td>1</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>1</td>
                                        </tr>
                                        <tr>
                                            <td>9</td>
                                            <td>TC201115</td>
                                            <td>Praktek Pemrograman Dasar 1</td>
                                            <td>0</td>
                                            <td>1</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>1</td>
                                        </tr>
                                        <tr>
                                            <td>10</td>
                                            <td>TC201116</td>
                                            <td>Praktek Bahasa Rakitan</td>
                                            <td>0</td>
                                            <td>1</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>1</td>
                                        </tr>
                                        <tr>
                                            <td>11</td>
                                            <td>TC201117</td>
                                            <td>Praktek Rangkaian Listrik</td>
                                            <td>0</td>
                                            <td>1</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>1</td>
                                        </tr>
                                        <tr>
                                            <td colspan="3"><b>TOTAL</b></td>
                                            <td><b>17</b></td>
                                            <td><b>4</b></td>
                                            <td><b>0</b></td>
                                            <td><b>0</b></td>
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
                                            <th colspan="2">SKS Prodi</th>
                                            <th colspan="2">SKS Diluar Prodi</th>
                                            <th rowspan="2">Total SKS</th>
                                        </tr>
                                        <tr>
                                            <th>T</th>
                                            <th>P</th>
                                            <th>T</th>
                                            <th>P</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>TC201105</td>
                                            <td>Rangkaian Listrik</td>
                                            <td>2</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>2</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>TC201106</td>
                                            <td>Matematika</td>
                                            <td>3</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>3</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>TC201108</td>
                                            <td>Pengantar Teknologi Komputer</td>
                                            <td>2</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>2</td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>TC201109</td>
                                            <td>Elektronika Analog</td>
                                            <td>3</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>3</td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>TC201110</td>
                                            <td>Elektronika Digital</td>
                                            <td>3</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>3</td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>TC202104</td>
                                            <td>Jaringan Komputer</td>
                                            <td>2</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>2</td>
                                        </tr>
                                        <tr>
                                            <td>7</td>
                                            <td>TC201112</td>
                                            <td>Algoritma Pemrograman</td>
                                            <td>2</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>2</td>
                                        </tr>
                                        <tr>
                                            <td>8</td>
                                            <td>TC201114</td>
                                            <td>Praktek Gambar Teknik</td>
                                            <td>0</td>
                                            <td>1</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>1</td>
                                        </tr>
                                        <tr>
                                            <td>9</td>
                                            <td>TC201115</td>
                                            <td>Praktek Pemrograman Dasar 1</td>
                                            <td>0</td>
                                            <td>1</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>1</td>
                                        </tr>
                                        <tr>
                                            <td>10</td>
                                            <td>TC201116</td>
                                            <td>Praktek Bahasa Rakitan</td>
                                            <td>0</td>
                                            <td>1</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>1</td>
                                        </tr>
                                        <tr>
                                            <td>11</td>
                                            <td>TC201117</td>
                                            <td>Praktek Rangkaian Listrik</td>
                                            <td>0</td>
                                            <td>1</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>1</td>
                                        </tr>
                                        <tr>
                                            <td colspan="3"><b>TOTAL</b></td>
                                            <td><b>17</b></td>
                                            <td><b>4</b></td>
                                            <td><b>0</b></td>
                                            <td><b>0</b></td>
                                            <td><b>21</b></td>
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
                                            <th colspan="2">SKS Prodi</th>
                                            <th colspan="2">SKS Diluar Prodi</th>
                                            <th rowspan="2">Total SKS</th>
                                        </tr>
                                        <tr>
                                            <th>T</th>
                                            <th>P</th>
                                            <th>T</th>
                                            <th>P</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>TC201105</td>
                                            <td>Rangkaian Listrik</td>
                                            <td>2</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>2</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>TC201106</td>
                                            <td>Matematika</td>
                                            <td>3</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>3</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>TC201108</td>
                                            <td>Pengantar Teknologi Komputer</td>
                                            <td>2</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>2</td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>TC201109</td>
                                            <td>Elektronika Analog</td>
                                            <td>3</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>3</td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>TC201110</td>
                                            <td>Elektronika Digital</td>
                                            <td>3</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>3</td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>TC202104</td>
                                            <td>Jaringan Komputer</td>
                                            <td>2</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>2</td>
                                        </tr>
                                        <tr>
                                            <td>7</td>
                                            <td>TC201112</td>
                                            <td>Algoritma Pemrograman</td>
                                            <td>2</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>2</td>
                                        </tr>
                                        <tr>
                                            <td>8</td>
                                            <td>TC201114</td>
                                            <td>Praktek Gambar Teknik</td>
                                            <td>0</td>
                                            <td>1</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>1</td>
                                        </tr>
                                        <tr>
                                            <td>9</td>
                                            <td>TC201115</td>
                                            <td>Praktek Pemrograman Dasar 1</td>
                                            <td>0</td>
                                            <td>1</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>1</td>
                                        </tr>
                                        <tr>
                                            <td>10</td>
                                            <td>TC201116</td>
                                            <td>Praktek Bahasa Rakitan</td>
                                            <td>0</td>
                                            <td>1</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>1</td>
                                        </tr>
                                        <tr>
                                            <td>11</td>
                                            <td>TC201117</td>
                                            <td>Praktek Rangkaian Listrik</td>
                                            <td>0</td>
                                            <td>1</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>1</td>
                                        </tr>
                                        <tr>
                                            <td colspan="3"><b>TOTAL</b></td>
                                            <td><b>17</b></td>
                                            <td><b>4</b></td>
                                            <td><b>0</b></td>
                                            <td><b>0</b></td>
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
                                            <th colspan="2">SKS Prodi</th>
                                            <th colspan="2">SKS Diluar Prodi</th>
                                            <th rowspan="2">Total SKS</th>
                                        </tr>
                                        <tr>
                                            <th>T</th>
                                            <th>P</th>
                                            <th>T</th>
                                            <th>P</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>TC201105</td>
                                            <td>Rangkaian Listrik</td>
                                            <td>2</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>2</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>TC201106</td>
                                            <td>Matematika</td>
                                            <td>3</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>3</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>TC201108</td>
                                            <td>Pengantar Teknologi Komputer</td>
                                            <td>2</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>2</td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>TC201109</td>
                                            <td>Elektronika Analog</td>
                                            <td>3</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>3</td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>TC201110</td>
                                            <td>Elektronika Digital</td>
                                            <td>3</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>3</td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>TC202104</td>
                                            <td>Jaringan Komputer</td>
                                            <td>2</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>2</td>
                                        </tr>
                                        <tr>
                                            <td>7</td>
                                            <td>TC201112</td>
                                            <td>Algoritma Pemrograman</td>
                                            <td>2</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>2</td>
                                        </tr>
                                        <tr>
                                            <td>8</td>
                                            <td>TC201114</td>
                                            <td>Praktek Gambar Teknik</td>
                                            <td>0</td>
                                            <td>1</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>1</td>
                                        </tr>
                                        <tr>
                                            <td>9</td>
                                            <td>TC201115</td>
                                            <td>Praktek Pemrograman Dasar 1</td>
                                            <td>0</td>
                                            <td>1</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>1</td>
                                        </tr>
                                        <tr>
                                            <td>10</td>
                                            <td>TC201116</td>
                                            <td>Praktek Bahasa Rakitan</td>
                                            <td>0</td>
                                            <td>1</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>1</td>
                                        </tr>
                                        <tr>
                                            <td>11</td>
                                            <td>TC201117</td>
                                            <td>Praktek Rangkaian Listrik</td>
                                            <td>0</td>
                                            <td>1</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>1</td>
                                        </tr>
                                        <tr>
                                            <td colspan="3"><b>TOTAL</b></td>
                                            <td><b>17</b></td>
                                            <td><b>4</b></td>
                                            <td><b>0</b></td>
                                            <td><b>0</b></td>
                                            <td><b>21</b></td>
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
                                            <th colspan="2">SKS Prodi</th>
                                            <th colspan="2">SKS Diluar Prodi</th>
                                            <th rowspan="2">Total SKS</th>
                                        </tr>
                                        <tr>
                                            <th>T</th>
                                            <th>P</th>
                                            <th>T</th>
                                            <th>P</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>TC201105</td>
                                            <td>Rangkaian Listrik</td>
                                            <td>2</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>2</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>TC201106</td>
                                            <td>Matematika</td>
                                            <td>3</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>3</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>TC201108</td>
                                            <td>Pengantar Teknologi Komputer</td>
                                            <td>2</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>2</td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>TC201109</td>
                                            <td>Elektronika Analog</td>
                                            <td>3</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>3</td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>TC201110</td>
                                            <td>Elektronika Digital</td>
                                            <td>3</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>3</td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>TC202104</td>
                                            <td>Jaringan Komputer</td>
                                            <td>2</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>2</td>
                                        </tr>
                                        <tr>
                                            <td>7</td>
                                            <td>TC201112</td>
                                            <td>Algoritma Pemrograman</td>
                                            <td>2</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>2</td>
                                        </tr>
                                        <tr>
                                            <td>8</td>
                                            <td>TC201114</td>
                                            <td>Praktek Gambar Teknik</td>
                                            <td>0</td>
                                            <td>1</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>1</td>
                                        </tr>
                                        <tr>
                                            <td>9</td>
                                            <td>TC201115</td>
                                            <td>Praktek Pemrograman Dasar 1</td>
                                            <td>0</td>
                                            <td>1</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>1</td>
                                        </tr>
                                        <tr>
                                            <td>10</td>
                                            <td>TC201116</td>
                                            <td>Praktek Bahasa Rakitan</td>
                                            <td>0</td>
                                            <td>1</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>1</td>
                                        </tr>
                                        <tr>
                                            <td>11</td>
                                            <td>TC201117</td>
                                            <td>Praktek Rangkaian Listrik</td>
                                            <td>0</td>
                                            <td>1</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>1</td>
                                        </tr>
                                        <tr>
                                            <td colspan="3"><b>TOTAL</b></td>
                                            <td><b>17</b></td>
                                            <td><b>4</b></td>
                                            <td><b>0</b></td>
                                            <td><b>0</b></td>
                                            <td><b>21</b></td>
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
                                            <th colspan="2">SKS Prodi</th>
                                            <th colspan="2">SKS Diluar Prodi</th>
                                            <th rowspan="2">Total SKS</th>
                                        </tr>
                                        <tr>
                                            <th>T</th>
                                            <th>P</th>
                                            <th>T</th>
                                            <th>P</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>TC201105</td>
                                            <td>Rangkaian Listrik</td>
                                            <td>2</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>2</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>TC201106</td>
                                            <td>Matematika</td>
                                            <td>3</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>3</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>TC201108</td>
                                            <td>Pengantar Teknologi Komputer</td>
                                            <td>2</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>2</td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>TC201109</td>
                                            <td>Elektronika Analog</td>
                                            <td>3</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>3</td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>TC201110</td>
                                            <td>Elektronika Digital</td>
                                            <td>3</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>3</td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>TC202104</td>
                                            <td>Jaringan Komputer</td>
                                            <td>2</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>2</td>
                                        </tr>
                                        <tr>
                                            <td>7</td>
                                            <td>TC201112</td>
                                            <td>Algoritma Pemrograman</td>
                                            <td>2</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>2</td>
                                        </tr>
                                        <tr>
                                            <td>8</td>
                                            <td>TC201114</td>
                                            <td>Praktek Gambar Teknik</td>
                                            <td>0</td>
                                            <td>1</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>1</td>
                                        </tr>
                                        <tr>
                                            <td>9</td>
                                            <td>TC201115</td>
                                            <td>Praktek Pemrograman Dasar 1</td>
                                            <td>0</td>
                                            <td>1</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>1</td>
                                        </tr>
                                        <tr>
                                            <td>10</td>
                                            <td>TC201116</td>
                                            <td>Praktek Bahasa Rakitan</td>
                                            <td>0</td>
                                            <td>1</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>1</td>
                                        </tr>
                                        <tr>
                                            <td>11</td>
                                            <td>TC201117</td>
                                            <td>Praktek Rangkaian Listrik</td>
                                            <td>0</td>
                                            <td>1</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>1</td>
                                        </tr>
                                        <tr>
                                            <td colspan="3"><b>TOTAL</b></td>
                                            <td><b>17</b></td>
                                            <td><b>4</b></td>
                                            <td><b>0</b></td>
                                            <td><b>0</b></td>
                                            <td><b>21</b></td>
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