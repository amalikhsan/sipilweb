@extends('layouts.main')

@section('title', 'Beranda')

@push('mainStyles')
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.js"></script>
<link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css' rel='stylesheet'>
<link href='https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css' rel='stylesheet'>
<style>
    .fc .fc-button{
        line-height: 1rem !important;
    }

    @media (max-width: 768px){
        .fc-toolbar-chunk>.fc-button-group>.fc-dayGridMonth-button,.fc-timeGridWeek-button,.fc-timeGridDay-button,.fc-listWeek-button{
            display:none !important;
        }
        .fc .fc-toolbar{
            flex-direction:column-reverse !important;
        }
    }
    @media (max-width:385px){
        .fc .fc-toolbar{
            flex-direction:column-reverse  !important;
        }
    }
    .fc-event:hover>td {
        background-color: #3a87ad !important;
    }
    .fc-list-table td {
        border-width: 0 0 0 !important;
    }
</style>
@endpush

@section('mainContent')
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
            class="rounded-3 px-3 active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" class="rounded-3 px-3"
            aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" class="rounded-3 px-3"
            aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="5000">
            <img src="{{ asset('assets/img/hero/hero.jpg') }}" class="carousel-image d-block w-100" alt="hero1">
            <div class="carousel-bg"></div>
            <div class="carousel-content">
                <h1 class="display-1 fw-bold">Penyelenggaraan Pendidikan</h1>
                <p class="fs-5">Menjadi Penyelenggara Pendidikan Unggul di Bidang Teknik Sipil</p>
            </div>
        </div>
        <div class="carousel-item" data-bs-interval="5000">
            <img src="{{ asset('assets/img/hero/hero2.jpg') }}" class="carousel-image d-block w-100" alt="hero2">
            <div class="carousel-bg"></div>
            <div class="carousel-content">
                <h1 class="display-1 fw-bold">Teknik Sipil Terkemuka</h1>
                <p class="fs-5">Terkemuka dalam Program Sarjana dan Diploma Terapan Teknik Sipil</p>
            </div>
        </div>
        <div class="carousel-item"data-bs-interval="5000">
            <img src="{{ asset('assets/img/hero/hero3.jpg') }}" class="carousel-image d-block w-100" alt="hero3">
            <div class="carousel-bg"></div>
            <div class="carousel-content">
                <h1 class="display-1 fw-bold">Berdaya Saing Global</h1>
                <p class="fs-5">Menciptakan Lulusan yang Berdaya Saing Global di Dunia Teknik Sipil</p>
            </div>
        </div>
    </div>
</div>
<section class="bg-light py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 h-auto mb-3 mb-lg-0">
                <div class="card bg-transparent rounded-0 border-0 h-100">
                    <img class="w-100 my-auto" style="height: 350px;" src="{{ asset('assets/img/dosen/KETUA JURUSAN IBRAHIM,ST,MT.jpeg') }}" alt="ketua">
                </div>
            </div>
            <div class="col-lg-9 h-auto">
                <div class="card rounded-0 border-0 h-100">
                    <div class="card-body">
                        <h1 class="fw-bold">Ketua Jurusan Teknik Sipil</h1>
                        <h3>IBRAHIM,ST.,MT</h3>
                        <p style="text-align:justify;">Ibrahim, ST., MT adalah Ketua Jurusan Teknik Sipil di Politeknik Negeri Sriwijaya. Beliau memiliki latar belakang
                        pendidikan yang cukup baik di bidang teknik sipil. Beliau menyelesaikan pendidikan Sarjana Teknik Sipil di Universitas
                        Sriwijaya pada tahun 1993 dan melanjutkan studi pascasarjana di Universitas Gadjah Mada, Yogyakarta dan meraih gelar
                        Magister Teknik pada tahun 2008.</p>
                        <p style="text-align:justify;">Sebelum menjabat sebagai Ketua Jurusan Teknik Sipil, beliau telah berpengalaman sebagai dosen dan pengajar di Politeknik
                        Negeri Sriwijaya selama lebih dari 20 tahun. Selama menjabat sebagai Ketua Jurusan, beliau telah melakukan berbagai
                        upaya untuk meningkatkan kualitas pendidikan di jurusan tersebut. Beliau juga aktif dalam melakukan kerjasama dengan
                        industri dan lembaga terkait untuk meningkatkan kualitas pendidikan dan penelitian di bidang teknik sipil.</p>
                        <p style="text-align:justify;">Dalam kepemimpinannya, beliau juga memperkuat program-program akademik dan penelitian di jurusan tersebut. Beliau juga
                        memperhatikan kepentingan mahasiswa dan berusaha memberikan pelayanan terbaik bagi mereka. Dengan pengalaman dan
                        keahliannya di bidang teknik sipil, Ibrahim, ST., MT diharapkan dapat terus memajukan Jurusan Teknik Sipil di Politeknik
                        Negeri Sriwijaya.</p>
                        <a href="" class="btn btn-dark rounded-0 shadow px-3">Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section-item">
    <img src="{{ asset('assets/img/hero/hero2.jpg') }}" class="section-image d-block w-100" alt="hero3">
    <div class="section-bg"></div>
    <div class="section-content">
        <div class="row">
            <div class="col-10 col-lg-8 mx-auto">
                <h1 class="mb-3">Gabung Sekarang Juga!</h1>
                <p class="mb-4">Mari bergabung menjadi bagian dari Politeknik Negeri Sriwijaya yang menawarkan 32 Program Studi serta memiliki Program
                Studi Di Luar Domisili (PDD) di Kabupaten Banyuasin, Kabupaten OKU, dan Kabupaten Siak Riau. Setiap tahun, kita membuka
                penerimaan mahasiswa melalui dua jalur, yakni Ujian Tulis Berbasis Komputer (UTBK), Seleksi Nasional Berbasis Tes
                (UTBK-SNBT), dan Seleksi Nasional Berdasarkan Prestasi (UTBK-SNBP), yang dikenal sebagai Seleksi Nasional Penerimaan
                Mahasiswa Baru (SNPMB). Bergabunglah dengan kami!</p>
                <a href="" class="btn btn-outline-light rounded-0 px-3">Daftar SNPMB</a>
            </div>
        </div>
    </div>
</section>
<section class="bg-light py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 h-auto mb-3 mb-lg-0">
                <div class="card rounded-0 border-0 h-100">
                    <div class="card-body">
                        <h1>Himpunan Jurusan Teknik Sipil</h1>
                        <p style="text-align:justify;">Jurusan Teknik Sipil berdiri pada tahun 1982 yang pada
                        saat itu hanya memiliki program Diploma III dengan dua
                        konsentrasi yaitu konsentrasi gedung dan air. Seiring
                        dengan bejalannya waktu Jurusan Teknik Sipil mengalami
                        banyak kemajuan, terbukti dari tahun 1982 sampai
                        sekarang telah terjadi banyak perubahan diantaranya
                        penambahan konsentrasi transportasi untuk jenjang
                        Diploma III dan penambahan jenjang pendidikan Diploma
                        IV Perancangan Jalan dan Jembatan.</p>
                        <ul>
                            <li>Website: <a href="https://hmjsipilpolsri.wixsite.com/info">HMJ Sipil Polsri</a></li>
                            {{--  &amp; <a href="">[acara]</a>  --}}
                            <li>Phone: (+62) 812-7110-4838</li>
                            <li>Email: <a href="">tekniksipilpolsri@gmail.com</a></li>
                            <li>Instagram: <a href="https://www.instagram.com/hmj_sipilpolsri/">@hmj_sipilpolsri</a>
                            </li>
                        </ul>
                        <p style="text-align:justify;">Menciptakan HMJ Teknik Sipil POLSRI yang
                        berlandaskan Ketuhanan yang Maha Esa,
                        kekeluargaan, dan tanggung jawab untuk
                        menjadikan Teknik Sipil POLSRI yang
                        Berkompeten dan Unggul.</p>
                        <a href="https://instagram.com/" class="btn btn-dark rounded-0 px-3">Selengkapnya</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 h-auto">
                <div class="card bg-transparent rounded-0 border-0 h-100">
                    <img class="w-100 my-auto" style="height: 350px;" src="{{ asset('assets/img/hmj/hmj-sipil.jpeg') }}" alt="ketua">
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section-item">
    <img src="{{ asset('assets/img/hero/hero3.jpg') }}" class="section-image d-block w-100" alt="hero3">
    <div class="section-bg"></div>
    <div class="section-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="text-center w-100">
                        <h1 class="display-2 fw-bold">412+</h1>
                        <p class="fs-5">Mahasiswa DIII</p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="text-center w-100">
                        <h1 class="display-2 fw-bold">390+</h1>
                        <p class="fs-5">Mahasiswa DIV</p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="text-center w-100">
                        <h1 class="display-2 fw-bold">84+</h1>
                        <p class="fs-5">Dosen</p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="text-center w-100">
                        <h1 class="display-2 fw-bold">9+</h1>
                        <p class="fs-5">Tendik</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="bg-light py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 h-auto mb-5">
                <div class="card bg-transparent text-center rounded-0 border-0 h-100">
                    <h1 class="fw-bold">Blog Informasi</h1>
                </div>
            </div>
            <div class="col-lg-12 h-auto">
                <div class="swiper swiperBlog w-100 user-select-none">
                    <div class="swiper-wrapper my-3">
                        @foreach($dataBlogs as $dataBlog)
                        <div class="swiper-slide bg-transparent">
                            <div class="card card-box border-0 rounded-0" title="{{ $dataBlog->judul }}" role="button"
                                onclick="return location='{{ route('Blog_Informasi', $dataBlog->slug) }}'">
                                <div class="card-body">
                                    <img src="{{ asset('storage/'.$dataBlog->foto) }}" class="mb-3 w-100" alt="Blog">
                                    <h5 class="card-title title-slug">{{ $dataBlog->judul }}</h5>
                                    <p class="fs-6 text-muted mb-1">{{ $dataBlog->created_at->diffForHumans() }} |
                                        {{ $dataBlog->kategori }} |
                                        {{ $dataBlog->views }} views</p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="swiper-button-prev text-dark bg-light rounded-circle p-3"
                        style="--swiper-navigation-size:10px;"></div>
                    <div class="swiper-button-next text-dark bg-light rounded-circle p-3"
                        style="--swiper-navigation-size:10px;"></div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="bg-dark py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 h-auto mb-5">
                <div class="card bg-transparent text-center rounded-0 border-0 h-100">
                    <h1 class="text-white fw-bold">Kerja Sama</h1>
                </div>
            </div>
            <div class="col-lg-12 h-auto">
                <div class="row justify-content-center h-100">
                    <div class="col-lg-3 h-auto mb-3">
                        <div class="card bg-transparent rounded-0 border-0 h-100">
                            <img class="w-100 my-auto" style="height: 150px;" src="https://placehold.co/300x150" alt="ketua">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="bg-light py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 h-auto mb-5">
                <div class="card bg-transparent text-center rounded-0 border-0 h-100">
                    <h1 class="fw-bold">Agenda</h1>
                </div>
            </div>
            <div class="col-lg-12 h-auto">
                <div class="table-responsive">
                <div id="calendar"></div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@push('mainScripts')
<script type='importmap'>
    {
        "imports": {
          "@fullcalendar/core": "https://cdn.skypack.dev/@fullcalendar/core@6.1.9",
          "@fullcalendar/daygrid": "https://cdn.skypack.dev/@fullcalendar/daygrid@6.1.9",
          "@fullcalendar/timegrid": "https://cdn.skypack.dev/@fullcalendar/timegrid@6.1.9",
          "@fullcalendar/list": "https://cdn.skypack.dev/@fullcalendar/list@6.1.9"
        }
      }
    </script>

<script type='module'>
    import { Calendar } from '@fullcalendar/core'
      import dayGridPlugin from '@fullcalendar/daygrid'
      import timeGridPlugin from '@fullcalendar/timegrid'
      import listPlugin from '@fullcalendar/list'

      document.addEventListener('DOMContentLoaded', function() {
        const calendarEl = document.getElementById('calendar')
        const calendar = new Calendar(calendarEl, {
          plugins: [dayGridPlugin, timeGridPlugin, listPlugin],
          headerToolbar: {
            left: 'prev,next today',
            center: 'title',
            right: 'dayGridMonth,timeGridWeek,timeGridDay,listWeek'
          },
          events: @json($events)
        })
        calendar.setOption('locale', 'id');
        calendar.render()
      })
</script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script type="text/javascript">
    const swiperBlog = new Swiper('.swiperBlog', {
        loop: true,
        slidesPerView: 5,
        spaceBetween: 50,
        autoplay: {
            delay: 0,
            disableOnInteraction: true
        },
        
        navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev"
        },
        
        breakpoints: {
        320: {
            slidesPerView: 1,
            spaceBetween: 50
        },
        640: {
            slidesPerView: 2,
            spaceBetween: 50
        },
        960: {
            slidesPerView: 3,
            spaceBetween: 50
        },
        1280: {
            slidesPerView: 4,
            spaceBetween: 50
        },
        1600: {
            slidesPerView: 5,
            spaceBetween: 50
        }
        }
    });
</script>
<script>
    {{--  background and color navbar  --}}
function CheckMedia(MatchMedia){
  if (MatchMedia.matches) {
    document.querySelector(".fixed-top").classList.remove("navbar-dark");
    document.querySelector(".fixed-top").classList.add("navbar-light");
    document.querySelector(".navbar").classList.add("shadow");
  } else {
    document.querySelector(".fixed-top").classList.add("navbar-dark");
    document.querySelector(".fixed-top").classList.remove("navbar-light");
    {{--  navlink  --}}
    // Mengambil semua elemen dengan class "nav-link"
    const navLinks = document.querySelectorAll('.nav-link');
    
    // Menggunakan forEach untuk menambahkan event listener pada setiap nav-link
    navLinks.forEach(navLink => {
    navLink.addEventListener('mouseenter',function(){
    // Mengambil elemen dropdown-menu yang terkait dengan nav-link ini
    const dropdownMenu = navLink.nextElementSibling;
    
    dropdownMenu.classList.add('show');
    
    // Memastikan dropdown-menu ada sebelum menyembunyikan
    if (dropdownMenu) {
    // Menambahkan event listener untuk event "mouseenter" pada dropdown-menu
    dropdownMenu.addEventListener('mouseenter', function () {
    // Menampilkan dropdown-menu
    this.classList.add('show');
    });
    
    // Menambahkan event listener untuk event "mouseleave" pada dropdown-menu
    dropdownMenu.addEventListener('mouseleave', function () {
    // Menyembunyikan dropdown-menu saat mouse meninggalkan menu
    this.classList.remove('show');
    });
    }
    });
    navLink.addEventListener('mouseleave',function(){
    // Mengambil elemen dropdown-menu yang terkait dengan nav-link ini
    const dropdownMenu = navLink.nextElementSibling;
    
    dropdownMenu.classList.remove('show');
    });
    });
  }
}

var MatchMedia = window.matchMedia("(max-width: 992px)");
CheckMedia(MatchMedia);
MatchMedia.addListener(CheckMedia);

window.addEventListener("scroll", function() {
  var scroll = window.scrollY;
  var offset = document.querySelector(".fixed-top").getBoundingClientRect();
  
  function CheckMedia(MatchMedia){
    if (MatchMedia.matches) {
          document.querySelector(".fixed-top").classList.remove("navbar-dark");
          document.querySelector(".fixed-top").classList.add("navbar-light");
    } else{
      if (scroll > offset.top) {
          document.querySelector(".fixed-top").classList.add("fixednav");
          document.querySelector(".fixed-top").classList.add("navbar-light");
          document.querySelector(".fixed-top").classList.add("shadow");
          document.querySelector(".fixed-top").classList.remove("navbar-dark");
      } else {
          document.querySelector(".fixed-top").classList.remove("fixednav");
          document.querySelector(".fixed-top").classList.add("navbar-dark");
          document.querySelector(".fixed-top").classList.remove("shadow");
          document.querySelector(".fixed-top").classList.remove("navbar-light");
      }
    }
  }

  CheckMedia(MatchMedia);
  MatchMedia.addListener(CheckMedia);
});
</script>
@endpush