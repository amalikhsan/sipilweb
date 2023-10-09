@extends('layouts.main')

@section('title', 'Visi & Misi')

@push('mainStyles')
@endpush

@section('mainContent')
<section class="bg-light py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mb-4 mb-lg-0">
                <img src="{{ asset('assets/img/hero/hero.jpg') }}" class="w-100 mb-4" alt="">
                <h3 id="h1" class="fw-bold mb-4">Visi & Misi Teknik Sipil</h3>
                <p style="text-align:justify;"><b>Visi :</b></p>
                <p style="text-align:justify;"><i>Pada tahun 2024 Program Studi Diploma III Jurusan Teknik Sipil Politeknik Negeri Sriwijaya menjadi penyelenggara
                pendidikan vokasi yang unggul dan terkemuka di bidang Teknik Sipil serta memiliki daya saing global.</i></p>
                <p style="text-align:justify;"><b>Misi :</b></p>
                <ol>
                    <li>Menyelenggarakan pendidikan dan pengajaran yang aplikatif dan berkualitas sesuai dengan perkembangan teknologi dan
                    kebutuhan pasar global.</li>
                    <li>Menyelenggarakan penelitian terapan di bidang Teknik Sipil yang dapat memberikan kontribusi positif bagi masyarakat
                    dan industri konstruksi.</li>
                    <li>Menyelenggarakan pengabdian masyarakat berbasis ipteks melalui pemberdayaan sumber daya yang dimiliki.</li>
                    <li>Membina kerjasama serta mengembangkan jejaring kerja dengan stakeholders, baik ditingkat nasional maupun
                    internasional dalam rangka peningkatan kualitas penyelenggaraan Tri Dharma Perguruan Tinggi</li>
                    <li>Mengembangkan organisasi dan meningkatkan mutu pengelolaan sumber daya di Jurusan Teknik Sipil untuk mewujudkan
                    kinerja secara efektif, efisien, dan berkelanjutan.</li>
                </ol>
                <h3 id="h2" class="fw-bold mb-4">Tujuan & Sasaran Teknik Sipil</h3>
                <p style="text-align:justify;"><b>Tujuan :</b></p>
                <p style="text-align: justify;">Menghasilkan tenaga pengelola tingkat menengah yang memiliki tingkat profesional tinggi, menguasai pengetahuan dan
                keterampilan teknologi bidang Perencanaan, Pegawasan dan Pelaksanaan Bangunan Gedung, Bangunan Air dan Bangunan
                Transportasi.</p>
                    <p style="text-align:justify;"><b>Sasaran :</b></p>
                    <ol>
                        <li>Memenuhi lapangan kerja di bidang konstruksi jalan dan jembatan yang profesional. Strategi : Minimal 70% lulusan</li>
                        memiliki IPK ≥ 3,25 b. Minimal 70% lulusan memiliki nilai TOEIC ≥ 405
                        <li>Mampu melakukan pekerjaan di bidang konstruksi jalan dan jembatan sesuai standar nasional dan/atau internasional.</li>
                        Strategi : Setiap mahasiswa mengikuti PKL selama minimal 3 bulan b. Setiap lulusan memiliki minimal  satu sertifikat
                        keahlian (SKA) yang dikeluarkan oleh Lembaga Sertifikasi Profesi (LSP) atau Lembaga Pengembangan Jasa Konstruksi (LPJK)
                        <li>Minimal 10% mahasiswa berkompetisi dalam program-program kewirausahaan mahasiswa.</li>
                        <li>Meningkatkan jumlah penelitian terapan dan pengabdian yang terlaksana minimal 5 kegiatan per tahun.</li>
                        <li>Berpartisipasi pada setiap lomba konstruksi tingkat nasional minimal 1 kali kegiatan dalam satu tahun.</li>
                        <li>Menjalin kerjasama dengan industri konstruksi minimal 5 perusahaan dalam satu tahun.</li>
                        <li>Mengadakan seminar dan pameran (civil expo) berskala nasional minimal satu kegiatan dalam satu tahun.</li>
                        <li>Minimal 70% masa tunggu lulusan untuk mendapatkan pekerjaan pertama kali yang sesuai kompetensinya ≤ 3 bulan.</li>
                    </ol>
                <h3 id="h3" class="fw-bold mb-4">Sarana & Prasarana</h3>
                    <p style="text-align:justify;">Sarana dan Prasarana Program Studi Diploma III Teknik Sipil dapat dilihat dengan adanya ruang bagi masing-masing dosen,
                    ruang teori sejumlah 15 ruang yang cukup untuk kegiatan pembelajaran (tatap muka) mahasiswa, Gedung Laboratorium yang
                    terdiri dari: Laboratorium Pengujian Bahan, Laboratorium Uji Tanah, Laboratorium Struktur, Laboratorium Hidrolika,
                    Laboratorium Ukur Tanah / Surveying, Laboratorium Transportasi. Serta Bengkel yang terdiri dari Bengkel Terbuka (kerja
                    batu, kerja beton, acuan perancah, dan drainase) dan Bengkel Tertutup (kerja kayu, kerja plumbing, dan kerja baja).</p>
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