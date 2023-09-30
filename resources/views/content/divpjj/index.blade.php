@extends('layouts.main')

@section('title', 'DIV PJJ')

@push('mainStyles')
@endpush

@section('mainContent')
<section class="bg-light py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mb-4 mb-lg-0">
                <img src="{{ asset('assets/img/hero/hero.jpg') }}" class="w-100 mb-4" alt="">
                <h3 id="h1" class="fw-bold mb-4">Perancangan Jalan dan Jembatan (DIV)</h3>
                <p style="text-align:justify;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam quam
                    voluptas cupiditate earum obcaecati laborum iste esse doloribus recusandae quos ducimus commodi
                    minima veritatis natus, aut provident enim quo unde alias minus! Cum quod doloremque earum fugit,
                    officia odio dolorem vitae quasi sed voluptatum sequi est pariatur. Esse, pariatur veniam?</p>
                <p style="text-align:justify;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio, accusamus
                    rem nemo quidem nesciunt, delectus, iusto doloribus ut minima ab iure harum mollitia corporis. Sequi
                    et, amet hic quaerat quae quam ipsam, debitis libero minima reprehenderit alias dicta facilis,
                    consequuntur rem. Tenetur laborum ab ipsa laudantium, delectus reprehenderit eos velit!</p>
                <h3 id="h2" class="fw-bold mb-4">Akredetasi</h3>
                <p style="text-align:justify;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio, accusamus
                    rem nemo quidem nesciunt, delectus, iusto doloribus ut minima ab iure harum mollitia corporis. Sequi
                    et, amet hic quaerat quae quam ipsam, debitis libero minima reprehenderit alias dicta facilis,
                    consequuntur rem. Tenetur laborum ab ipsa laudantium, delectus reprehenderit eos velit!</p>
                <h3 id="h3" class="fw-bold mb-4">Profil Lulusan</h3>
                <div class="table-responsive">
                    <table class="table table-bordered table-light">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Profil Lulusan</th>
                                <th>Deskripsi Profil Lulusan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="text-align: center;">1</td>
                                <td>Bidang Representasi Data</td>
                                <td style="text-align: justify;">Profil lulusan Program Studi Teknik Komputer diharapkan
                                    akan memiliki kemampuan
                                    dalam mengimplementasikan representasi data didalam pembuatan aplikasi komputer
                                    berbasis website, <em>mobile
                                    </em>dan desktop,<p></p>
                                    <p>serta lulusan dibekali kemampuan merencanakan,&nbsp; mendesain dan
                                        &nbsp;mengimplementasikan aplikasi
                                        komputer yang bertujuan khusus (<em>special purpose</em>) dan bekerja pada
                                        lingkungan&nbsp;<em>real-time.</em></p>
                                    <p>Profil lulusan ini dibekali juga dengan pemahaman terkait dengan sistem kritis
                                        (<em>fault tolerant
                                            system</em>) untuk meningkatkan kehandalan dari sistem yang dibangun.</p>
                                </td>
                            </tr>
                            <tr>
                                <td style="text-align: center;">2</td>
                                <td>Bidang Komputer Kendali</td>
                                <td style="text-align: justify;">Profil lulusan Program Studi Teknik Komputer diharapkan
                                    memiliki kemampuan untuk
                                    melakukan integrasi bidang ilmu teknik komputer dan ilmu elektronika, penerapan
                                    algoritma kecerdasan buatan
                                    untuk menyelesaikan permasalahan.<p></p>
                                    <p>Profil ini dilengkapi dengan kemampuan dalam melakukan akuisisi data melalui
                                        sensor, pengenalan sinyal, IoT
                                        dan citra digital untuk dapat diproses melalui algoritma kecerdasan buatan dan
                                        melakukan proses otomasi.</p>
                                    <p>Profil lulusan ini diperkuat dengan keilmuan spesifik terkait robotika dan
                                        <em>mechatronics</em><em>.</em>
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td style="text-align: center;">3</td>
                                <td>Bidang Jaringan Komputer</td>
                                <td style="text-align: justify;">Profil lulusan Program Studi Teknik Komputer memiliki
                                    kemampuan untuk merencanakan,
                                    mendesain, mengimplementasikan, memelihara dan mendokumentasikan infrastruktur
                                    jaringan komputer, keamanan
                                    jaringan komputer, keamanan&nbsp;<em>cyber</em>, dan administrasi jaringan komputer
                                    baik dalam lingkup LAN, WAN,
                                    dan MAN.</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <h3 id="h4" class="fw-bold mb-4">Keahlian Untuk Mendapatkan Kesempatan Bekerja</h3>
                <ol>
                    <li>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Reprehenderit, possimus?</li>
                    <li>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Reprehenderit, possimus?</li>
                    <li>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Reprehenderit, possimus?</li>
                    <li>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Reprehenderit, possimus?</li>
                    <li>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Reprehenderit, possimus?</li>
                    <li>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Reprehenderit, possimus?</li>
                    <li>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Reprehenderit, possimus?</li>
                    <li>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Reprehenderit, possimus?</li>
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