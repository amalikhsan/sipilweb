@extends('layouts.main')

@section('title', 'Tentang Kami')

@push('mainStyles')
@endpush

@section('mainContent')
<section class="bg-light py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mb-4 mb-lg-0">
                <img src="{{ asset('assets/img/hero/hero.jpg') }}" class="w-100 mb-4" alt="">
                <h3 id="h1" class="fw-bold mb-4">Profil Teknik Sipil</h3>
                <p style="text-align:justify;">Jurusan Teknik Sipil di Politeknik Negeri Sriwijaya (Polsri) didirikan pada tahun 1982. Pada awalnya, jurusan ini
                merupakan bagian dari Jurusan Teknik Sipil pada Fakultas Teknik Universitas Sriwijaya. Namun, seiring dengan
                perkembangan dan kebutuhan akan tenaga ahli teknik sipil yang berkualitas, pada tahun 1991, Jurusan Teknik Sipil di
                Polsri ditingkatkan menjadi Program Studi Diploma III (D3) secara mandiri.</p>
                <p style="text-align:justify;">Sejak berdirinya, Jurusan Teknik Sipil di Polsri telah menghasilkan banyak lulusan yang kompeten dan siap bekerja di
                dunia industri konstruksi. Kurikulum yang disusun oleh jurusan ini dirancang untuk menghasilkan lulusan yang memiliki
                pengetahuan dan keterampilan dalam merencanakan, mendesain, mengawasi, dan mengelola proyek-proyek konstruksi.</p>
                <p style="text-align:justify;">Jurusan Teknik Sipil di Polsri juga aktif dalam melakukan penelitian dan pengembangan di bidang teknik sipil.
                Dosen-dosen yang mengajar di jurusan ini memiliki keahlian dan pengalaman yang luas dalam berbagai bidang seperti
                struktur, konstruksi, geoteknik, transportasi, dan lingkungan.</p>
                <p style="text-align:justify;">Selain itu, jurusan ini juga menjalin kerjasama dengan berbagai instansi dan perusahaan di bidang konstruksi untuk
                memberikan kesempatan kepada mahasiswa untuk mengikuti magang atau kerja praktik. Hal ini bertujuan untuk memberikan
                pengalaman nyata kepada mahasiswa dalam menghadapi tantangan di dunia kerja.</p>
                <p style="text-align:justify;">Seiring dengan perkembangan teknologi dan kebutuhan akan tenaga ahli teknik sipil yang profesional, Jurusan Teknik Sipil
                di Polsri terus melakukan pembaruan kurikulum dan peningkatan kualitas pendidikan. Dengan demikian, jurusan ini
                diharapkan dapat terus menghasilkan lulusan yang siap bersaing dan berkontribusi dalam pembangunan infrastruktur di
                Indonesia.</p>
                <h3 id="h2" class="fw-bold mb-4">Kontak Kami</h3>
                <ul>
                    <li>Telp : <a href="tel:0711-353414">0711-353414</a></li>
                    <li>Email : <a href="mail:sipil@polsri.ac.id">sipil@polsri.ac.id</a></li>
                    <li>Gedung : Teknik Sipil</li>
                    <li>Alamat : Jl. Srijaya Negara, Bukit Lama, Kec. Ilir Bar. I, Kota Palembang, Sumatera Selatan 30128</li>
                </ul>
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