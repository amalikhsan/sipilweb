@extends('layouts.main')

@section('title', 'DIII TEKNIK SIPIL')

@push('mainStyles')
@endpush

@section('mainContent')
<section class="bg-light py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mb-4 mb-lg-0">
                <img src="{{ asset('assets/img/hero/hero.jpg') }}" class="w-100 mb-4" alt="">
                <h3 id="h1" class="fw-bold mb-4">Teknik Sipil (DIII)</h3>
                <p style="text-align:justify;">Program Studi Diploma III Teknik Sipil berdiri sejak tahun 1982. Mulanya, terdapat dua
                    konsentrasi bidang, yaitu Sipil
                    Basah dan Sipil Kering. Seiring berjalannya waktu, Program Studi Diploma III Teknik Sipil telah memiliki 3
                    konsentrasi
                    bidang, yaitu Konsentrasi Bangunan Gedung, Konsentrasi Bangunan Air, dan Konsentrasi Bangunan Transportasi.</p>
                <p style="text-align:justify;">Tujuan utama dari konsentrasi pendidikan ini adalah untuk menghasilkan tenaga pengelola
                    tingkat menengah yang memiliki
                    tingkat profesional tinggi, menguasai pengetahuan dan keterampilan teknologi di bidang perencanaan, pengawasan dan
                    pelaksanaan bangunan gedung, bangunan air, dan bangunan transportasi.</p>
                <p style="text-align:justify;">Oleh karena itu, setiap lulusan diharapkan mampu melakukan perencanaan, pelaksanaan dan
                    pengawasan bangunan sesuai dan
                    mampu melakukan adaptasi terhadap perkembangan ilmu pengetahuan dan teknologi terapan sesuai konsentrasinya. Selain
                    itu,
                    dengan pendidikan di Politeknik, lulusan juga diharapkan memiliki jiwa disiplin, taqwa kepada Tuhan yang Maha Esa,
                    berakhlak tinggi, berdedikasi, serta kreatif dan inovatif.</p>
                <h3 id="h2" class="fw-bold mb-4">Akredetasi</h3>
                <a href="{{ asset('assets/pdf/SK-Sertifikat-Akreditasi-D3-2021.pdf') }}" class="mb-4" download="Akreditasi-Teknik Sipil-DIII">Download Sertifikat Akreditasi</a>
                <h3 id="h3" class="fw-bold my-4">Profil Lulusan</h3><p style="text-align:justify;">Menghasilkan Tenaga Pengelola Tingkat Menengah yang Memiliki Tingkat Profesional Tinggi,
                    Menguasai Pengetahuan dan
                    Keterampilan Teknologi Bidang Perencanaan, Pengawasan dan Pelaksanaan Bangunan Gedung, Bangunan Air, Bangunan
                    Transportasi serta memiliki jiwa berdisiplin, bertaqwa kepada Tuhan Yang Maha Esa,Berakhlak Tinggi, Berdedikasi,
                    Kreatip
                    dan Inovatip.</p>
                <h3 id="h4" class="fw-bold mb-4">Kompetensi Lulusan</h3>
                <p style="text-align:justify;"><b>Kompetensi Utama :</b></p>
                <ol>
                    <li>Mampu melakukan perencanaan, pelaksanaan dan pengawasan bangunan sesuai dengan konsentrasinya.</li>
                    <li>Mampu melakukan adaptasi terhadap perkembangan Ilmu Pengetahuan dan Teknologi terapan sesuai konsentrasinya.
                    </li>
                </ol>
                <p style="text-align:justify;"><b>Kompetensi Pendukung :</b></p>
                <ol>
                    <li>Mampu melaksanakan dan menganalisa hasil survey dan investigasi</li>
                    <li>Mampu melaksanakan desain konstruksi sederhana</li>
                    <li>Mampu mendesain gambar teknik, Shop Drawing untuk Perencanaan, As Build Drawing untuk Pelaksanaan</li>
                    <li>Mampu melaksanakan estimasi biaya konstruksi</li>
                    <li>Mampu menyiapkan dokumen tender untuk pekerjaan konstruksi</li>
                    <li>Mampu mengelola pelaksanaan pekerjaan konstruksi</li>
                    <li>Mampu melaksanakan pengawasan pekerjaan konstruksi</li>
                </ol>
                <p style="text-align:justify;"><b>Kompetensi Lainnya :</b></p>
                <ol>
                    <li>Mampu mengoperasikan Komputer.</li>
                    <li>Mampu berkomunikasi.</li>
                    <li>Mampu bekerjasama.</li>
                    <li>Mampu berdisiplin</li>
                    <li>Mampu mengoperasikan peralatan laboratorium</li>
                    <li>Mampu mengoperasikan peralatan konstruksi</li>
                </ol>
                <h3 id="h5" class="fw-bold mb-4">Kurikulum Program Studi TEKNIK SIPIL (DIII)</h3>
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
                                            <td>TS200101</td>
                                            <td>Pendidikan Agama</td>
                                            <td>3</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>3</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>TS200105</td>
                                            <td>Bahasa Inggris 1</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>2</td>
                                            <td>0</td>
                                            <td>2</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>TS201101</td>
                                            <td>Matematika Terapan 1</td>
                                            <td>2</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>2</td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>TS201102</td>
                                            <td>Fisika Terapan</td>
                                            <td>2</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>2</td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>TS201103</td>
                                            <td>Mekanika Rekayasa 1</td>
                                            <td>3</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>3</td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>TS201104</td>
                                            <td>Gambar Teknik 1</td>
                                            <td>0</td>
                                            <td>2</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>2</td>
                                        </tr>
                                        <tr>
                                            <td>7</td>
                                            <td>TS201105</td>
                                            <td>Bahan Bangunan 1</td>
                                            <td>2</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>2</td>
                                        </tr>
                                        <tr>
                                            <td>8</td>
                                            <td>TS201106</td>
                                            <td>Ilmu Ukur Tanah 1</td>
                                            <td>0</td>
                                            <td>2</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>2</td>
                                        </tr>
                                        <tr>
                                            <td>9</td>
                                            <td>TS203102</td>
                                            <td>Lab Konstruksi Dasar Kerja Batu</td>
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
                                            <td><b>19</b></td>
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
                                            <td>TS200203</td>
                                            <td>Bahasa Indonesia</td>
                                            <td>3</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>3</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>TS200206</td>
                                            <td>Bahasa Inggris 2</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>2</td>
                                            <td>0</td>
                                            <td>2</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>TS201207</td>
                                            <td>Gambar Teknik 2</td>
                                            <td>2</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>2</td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>TS201208</td>
                                            <td>Bahan Bangunan 2</td>
                                            <td>2</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>2</td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>TS201209</td>
                                            <td>Mekanika Rekayasa 2</td>
                                            <td>3</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>3</td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>TS201210</td>
                                            <td>Mekanika Tanah 1</td>
                                            <td>2</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>2</td>
                                        </tr>
                                        <tr>
                                            <td>7</td>
                                            <td>TS201211</td>
                                            <td>Matematika Terapan 2</td>
                                            <td>2</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>2</td>
                                        </tr>
                                        <tr>
                                            <td>8</td>
                                            <td>TS201212</td>
                                            <td>Ilmu Ukur Tanah 2</td>
                                            <td>0</td>
                                            <td>2</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>2</td>
                                        </tr>
                                        <tr>
                                            <td>9</td>
                                            <td>TS203201</td>
                                            <td>Lab Konstruksi Dasar Kerja Kayu 1</td>
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
                                        <td>TS201306</td>
                                        <td>Mekanika Rekayasa 3</td>
                                        <td>3</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>TS201314</td>
                                        <td>Mekanika Tanah 2</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>2</td>
                                        <td>0</td>
                                        <td>2</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>TS201315</td>
                                        <td>Mekanika Fluida</td>
                                        <td>2</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>2</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>TS202301</td>
                                        <td>Ekonomi Rekayasa</td>
                                        <td>2</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>2</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>TS203302</td>
                                        <td>Manajemen Konstruksi</td>
                                        <td>3</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>TS203305</td>
                                        <td>PTM dan Alat Berat</td>
                                        <td>2</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>2</td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>TS203310</td>
                                        <td>Rekayasa Pondasi 1</td>
                                        <td>2</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>2</td>
                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td>TS203312</td>
                                        <td>Laboratorium Uji Bahan 1</td>
                                        <td>0</td>
                                        <td>2</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>2</td>
                                    </tr>
                                    <tr>
                                        <td>9</td>
                                        <td>TS203317</td>
                                        <td>Lab Konstruksi Kerja Acuan Perancah 1</td>
                                        <td>0</td>
                                        <td>1</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>1</td>
                                    </tr>
                                    <tr>
                                        <td>9</td>
                                        <td>TS203319</td>
                                        <td>Lab Konstruksi Kerja Beton</td>
                                        <td>0</td>
                                        <td>1</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>1</td>
                                    </tr>
                                    <tr>
                                        <td>9</td>
                                        <td>SG203322</td>
                                        <td>Konstruksi Kayu</td>
                                        <td>0</td>
                                        <td>1</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>1</td>
                                    </tr>
                                    <tr>
                                        <td>9</td>
                                        <td>SG203326</td>
                                        <td>Lab Konstruksi Dasar Kerja Kayu 2</td>
                                        <td>0</td>
                                        <td>1</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>1</td>
                                    </tr>
                                    <tr>
                                        <td>9</td>
                                        <td>SA203322</td>
                                        <td>Hidrologi</td>
                                        <td>2</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>2</td>
                                    </tr>
                                    <tr>
                                        <td>9</td>
                                        <td>SA203323</td>
                                        <td>Penyediaan Air Bersih dan Drainase</td>
                                        <td>2</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>2</td>
                                    </tr>
                                    <tr>
                                        <td>9</td>
                                        <td>SA203324</td>
                                        <td>Irigasi 1</td>
                                        <td>2</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>2</td>
                                    </tr>
                                    <tr>
                                        <td>9</td>
                                        <td>ST203322</td>
                                        <td>Perancangan Geometrik 1</td>
                                        <td>2</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>2</td>
                                    </tr>
                                    <tr>
                                        <td>9</td>
                                        <td>ST203324</td>
                                        <td>Rekayasa Lalu Lintas</td>
                                        <td>2</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>2</td>
                                    </tr>
                                    <tr>
                                        <td colspan="3"><b>TOTAL</b></td>
                                        <td><b>17</b></td>
                                        <td><b>4</b></td>
                                        <td><b>0</b></td>
                                        <td><b>0</b></td>
                                        <td><b>30</b></td>
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
                                        <td>TS203403</td>
                                        <td>Estimasi Biaya</td>
                                        <td>2</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>2</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>TS203404</td>
                                        <td>Manajemen Proyek</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>2</td>
                                        <td>0</td>
                                        <td>2</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>TS203406</td>
                                        <td>Konstruksi Beton 1</td>
                                        <td>2</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>2</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>TS203408</td>
                                        <td>Kontruksi Baja 1</td>
                                        <td>2</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>2</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>TS203411</td>
                                        <td>Rekayasa Pondasi 2</td>
                                        <td>2</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>2</td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>TS2034013</td>
                                        <td>Laboratorium Uji Bahan 2</td>
                                        <td>0</td>
                                        <td>1</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>1</td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>TS203414</td>
                                        <td>Laboratorium Uji Tanah </td>
                                        <td>1</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>1</td>
                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td>TS203418</td>
                                        <td>Lab Konstruksi Kerja Acuan Perancah 2</td>
                                        <td>0</td>
                                        <td>1</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>1</td>
                                    </tr>
                                    <tr>
                                        <td>9</td>
                                        <td>TS203420</td>
                                        <td>Lab Konstruksi Kerja Baja</td>
                                        <td>0</td>
                                        <td>1</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>1</td>
                                    </tr>
                                    <tr>
                                        <td>9</td>
                                        <td>TS203421</td>
                                        <td>Lab Sistem Saluran & Pembuangan</td>
                                        <td>0</td>
                                        <td>1</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>1</td>
                                    </tr>
                                    <tr>
                                        <td>9</td>
                                        <td>SG203422</td>
                                        <td>Konstruksi Bangunan Gedung</td>
                                        <td>2</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>2</td>
                                    </tr>
                                    <tr>
                                        <td>9</td>
                                        <td>SG203424</td>
                                        <td>Instalasi Bangunan</td>
                                        <td>0</td>
                                        <td>1</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>1</td>
                                    </tr>
                                    <tr>
                                        <td>9</td>
                                        <td>SA203425</td>
                                        <td>Irigasi 2</td>
                                        <td>2</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>2</td>
                                    </tr>
                                    <tr>
                                        <td>9</td>
                                        <td>SA203426</td>
                                        <td>Pelabuhan</td>
                                        <td>2</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>2</td>
                                    </tr>
                                    <tr>
                                        <td>9</td>
                                        <td>ST203425</td>
                                        <td>Konstruksi Pekerasan Jalan</td>
                                        <td>2</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>2</td>
                                    </tr>
                                    <tr>
                                        <td>9</td>
                                        <td>ST203426</td>
                                        <td>Konstruksi Jembatan</td>
                                        <td>2</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>2</td>
                                    </tr>
                                    <tr>
                                        <td colspan="3"><b>TOTAL</b></td>
                                        <td><b>17</b></td>
                                        <td><b>4</b></td>
                                        <td><b>0</b></td>
                                        <td><b>0</b></td>
                                        <td><b>27</b></td>
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
                                            <td>TS200502</td>
                                            <td>Pendidikan Kewarganegaraan</td>
                                            <td>3</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>3</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>TS202506</td>
                                            <td>Kerja Praktek</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>2</td>
                                            <td>2</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>TS202507</td>
                                            <td>Seminar Magang Industri</td>
                                            <td>2</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>2</td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>TS203507</td>
                                            <td>Konstruksi Beton 2</td>
                                            <td>2</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>2</td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>TS203509</td>
                                            <td>Konstruksi Baja 2</td>
                                            <td>2</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>2</td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>TS203515</td>
                                            <td>Statistik</td>
                                            <td>2</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>2</td>
                                        </tr>
                                        <tr>
                                            <td>7</td>
                                            <td>SG203525</td>
                                            <td>Proyek Awal Gedung</td>
                                            <td>0</td>
                                            <td>2</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>2</td>
                                        </tr>
                                        <tr>
                                            <td>8</td>
                                            <td>SA203527</td>
                                            <td>Proyek Awal Bangunan Awal</td>
                                            <td>0</td>
                                            <td>2</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>2</td>
                                        </tr>
                                        <tr>
                                            <td>9</td>
                                            <td>ST203523</td>
                                            <td>Proyek Awal Bangunan Jalan dan Jembatan</td>
                                            <td>0</td>
                                            <td>2</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>2</td>
                                        </tr>
                                        <tr>
                                            <td colspan="3"><b>TOTAL</b></td>
                                            <td><b>17</b></td>
                                            <td><b>4</b></td>
                                            <td><b>0</b></td>
                                            <td><b>0</b></td>
                                            <td><b>19</b></td>
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
                                            <td>TS200604</td>
                                            <td>Pendidikan Pancasila</td>
                                            <td>3</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>3</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>TS202602</td>
                                            <td>Wawasan Lingkungan</td>
                                            <td>2</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>2</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>TS202603</td>
                                            <td>K3 & Hukum Ketenagakerjaan</td>
                                            <td>2</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>2</td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>TS202604</td>
                                            <td>Aspek Usaha Etika Hukum</td>
                                            <td>2</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>2</td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>TS202605</td>
                                            <td>Kewirausahaan</td>
                                            <td>2</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>2</td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>TS202608</td>
                                            <td>Laporan Akhir</td>
                                            <td>6</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>6</td>
                                        </tr>
                                        <tr>
                                            <td colspan="3"><b>TOTAL</b></td>
                                            <td><b>17</b></td>
                                            <td><b>4</b></td>
                                            <td><b>0</b></td>
                                            <td><b>0</b></td>
                                            <td><b>17</b></td>
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
                    <div class="card-body"><div class="row">
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