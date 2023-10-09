<nav class="navbar navbar-expand-lg navbar-dark fixed-top py-3">
    <div class="container-lg">
        <a class="navbar-brand fs-3 fw-bold text-uppercase d-flex align-items-center" href="{{ route('beranda') }}">
            <img src="{{ asset('assets/img/icon/sipil.png') }}" class="rounded-circle" width="50" height="50" alt="">
            <span class="ms-3">Civil Engineering</span>
        </a>
        <button class="navbar-toggler border-0 shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link text-uppercase me-3 fw-semibold {{ Route::is('beranda') ? 'active' : '' }}" href="{{ route('beranda') }}">Beranda</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link text-uppercase me-3 fw-semibold dropdown-toggle {{ Route::is('Tentang_Kami')||Route::is('Visi_&_Misi')||Route::is('Struktur_Organisasi')||Route::is('Dosen_&_Tendik') ? 'active' : '' }}"href="#" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Profil
                    </a>
                    <ul class="dropdown-menu border rounded-0 shadow-sm">
                        <li><a class="dropdown-item text-uppercase {{ Route::is('Tentang_Kami') ? 'active' : '' }}" href="{{ route('Tentang_Kami') }}">Tentang Kami</a></li>
                        <li><a class="dropdown-item text-uppercase {{ Route::is('Visi_&_Misi') ? 'active' : '' }}" href="{{ route('Visi_&_Misi') }}">Visi & Misi</a></li>
                        <li><a class="dropdown-item text-uppercase {{ Route::is('Struktur_Organisasi') ? 'active' : '' }}" href="{{ route('Struktur_Organisasi') }}">Struktur Organisasi</a></li>
                        <li><a class="dropdown-item text-uppercase {{ Route::is('Dosen') ? 'active' : '' }}" href="{{ route('Dosen') }}">Dosen</a></li>
                        <li><a class="dropdown-item text-uppercase {{ Route::is('Tendik') ? 'active' : '' }}" href="{{ route('Tendik') }}">Tendik</a></li>
                        <li><a class="dropdown-item text-uppercase {{ Route::is('Alumni') ? 'active' : '' }}" href="{{ route('Alumni') }}">Alumni</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link text-uppercase me-3 fw-semibold dropdown-toggle {{ Route::is('DIII_TEKNIK_SIPIL')||Route::is('DIV_PJJ')||Route::is('DIV_TPTP') ? 'active' : '' }}" href="#" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Program Studi
                    </a>
                    <ul class="dropdown-menu border rounded-0 shadow-sm">
                        <li><a class="dropdown-item text-uppercase {{ Route::is('DIII_TEKNIK_SIPIL') ? 'active' : '' }}" href="{{ route('DIII_TEKNIK_SIPIL') }}">DIII TEKNIK SIPIL</a></li>
                        <li><a class="dropdown-item text-uppercase {{ Route::is('DIV_PJJ') ? 'active' : '' }}" href="{{ route('DIV_PJJ') }}">DIV PJJ</a></li>
                        <li><a class="dropdown-item text-uppercase {{ Route::is('DIV_TPTP') ? 'active' : '' }}" href="{{ route('DIV_TPTP') }}">DIV TPTP</a></li>
                        <li><a class="dropdown-item text-uppercase {{ Route::is('DIV_PSDKU_OKU') ? 'active' : '' }}" href="{{ route('DIV_PSDKU_OKU') }}">DIV PSDKU OKU</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link text-uppercase fw-semibold dropdown-toggle {{ Route::is('Akademik')||Route::is('Berita_Terkini')||Route::is('Lowongan_Pekerjaan') ? 'active' : '' }}" href="#" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Informasi
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end border rounded-0 shadow-sm">
                        {{--  <li><a class="dropdown-item text-uppercase {{ Route::is('RPS_Kontrak_modul') ? 'active' : '' }}" href="{{ route('RPS_Kontrak_modul') }}">RPS Kontrak Modul</a></li>  --}}
                        <li><a class="dropdown-item text-uppercase {{ Route::is('Akademik') ? 'active' : '' }}" href="{{ route('Akademik') }}">Akademik</a></li>
                        <li><a class="dropdown-item text-uppercase {{ Route::is('Berita_Terkini') ? 'active' : '' }}" href="{{ route('Berita_Terkini') }}">Berita Terkini</a></li>
                        <li><a class="dropdown-item text-uppercase {{ Route::is('Lowongan_Pekerjaan') ? 'active' : '' }}" href="{{ route('Lowongan_Pekerjaan') }}">Lowongan Pekerjaan</a></li>
                        {{--  <li><a class="dropdown-item text-uppercase{{ Route::is('Download') ? 'active' : '' }}" href="{{ route('Download') }}">Download</a></li>  --}}
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>