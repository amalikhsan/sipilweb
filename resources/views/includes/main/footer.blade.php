<section class="bg-dark text-light py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <h4 class="mb-3">Informasi</h4>
                <div class="row">
                    <div class="col-12 mb-4">
                        <a href="{{ route('Akademik') }}" class="nav-bottom-link d-block text-decoration-none text-light mb-2">Akademik</a>
                        <a href="{{ route('Berita_Terkini') }}" class="nav-bottom-link d-block text-decoration-none text-light mb-2">Berita Terkini</a>
                        <a href="{{ route('Lowongan_Pekerjaan') }}" class="nav-bottom-link d-block text-decoration-none text-light">Lowongan Kerja</a>
                    </div>
                    <div class="col-12">
                        <h6>Gedung Teknik Sipil</h6>
                        <p>Jl. Srijaya Negara, Bukit Lama, Kec. Ilir Bar. I, Kota Palembang, Sumatera Selatan 30128</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <h4 class="mb-3">Blog</h4>
                <div class="row">
                    @php
                    $dataBlogs = App\Models\dataBlog::with('user')->limit(3)->get();
                    @endphp
                    @foreach($dataBlogs as $dataBlog)
                    <div class="col-12 mb-3">
                        <a href="{{ route('Blog_Informasi',$dataBlog->slug) }}" class="nav-bottom-link d-block text-decoration-none text-light mb-2">{{ $dataBlog->judul }}</a>
                        <p class="text-secondary mb-0">{{ $dataBlog->created_at->diffForHumans() }}</p>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="col-lg-4 h-auto">
                <h4 class="mb-3">Google Maps</h4>
                <div class="row h-100">
                    <div class="col-12 mb-4 h-auto">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63751.50959173351!2d104.68620655044818!3d-2.9671856363941913!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e3b75ec487f021d%3A0x63054012aa39de4f!2sPoliteknik%20Negeri%20Sriwijaya!5e0!3m2!1sen!2sid!4v1695821940508!5m2!1sen!2sid"
                            class="w-100 h-100" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<footer class="bg-black py-3">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 text-center text-lg-start">
                <p class="text-secondary mb-0">{{ date("Y") }} &copy Teknik Sipil Politeknik Negeri Sriwijaya - {{ env('APP_NAME') }}</p>
            </div>
            <div class="col-lg-4 text-center text-lg-end">
                <a href="{{ route('Akademik') }}" class="text-secondary me-3">Akademik</a>
                <a href="{{ route('Berita_Terkini') }}" class="text-secondary me-3">Berita Terkini</a>
                <a href="{{ route('Lowongan_Pekerjaan') }}" class="text-secondary">Lowongan Kerja</a>
            </div>
        </div>
    </div>
</footer>