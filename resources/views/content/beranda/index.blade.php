@extends('layouts.main')

@section('title', 'Beranda')

@push('mainStyles')
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
@endpush

@section('mainContent')
    <div id="carouselExampleIndicators" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                class="rounded-3 px-3 active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" class="rounded-3 px-3"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" class="rounded-3 px-3"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="10000">
                <img src="{{ asset('assets/img/hero/hero.jpg') }}" class="carousel-image d-block w-100" alt="hero1">
                <div class="carousel-bg"></div>
                <div class="carousel-content">
                    <h1 class="display-1 fw-bold">First slide label</h1>
                    <p class="fs-5">Some representative placeholder content for the first slide.</p>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="{{ asset('assets/img/hero/hero2.jpg') }}" class="carousel-image d-block w-100" alt="hero2">
                <div class="carousel-bg"></div>
                <div class="carousel-content">
                    <h1 class="display-1 fw-bold">Second slide label</h1>
                    <p class="fs-5">Some representative placeholder content for the second slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('assets/img/hero/hero3.jpg') }}" class="carousel-image d-block w-100" alt="hero3">
                <div class="carousel-bg"></div>
                <div class="carousel-content">
                    <h1 class="display-1 fw-bold">Third slide label</h1>
                    <p class="fs-5">Some representative placeholder content for the third slide.</p>
                </div>
            </div>
        </div>
    </div>
    <section class="bg-light py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 h-auto mb-3 mb-lg-0">
                    <div class="card bg-transparent rounded-0 border-0 h-100">
                        <img class="w-100 my-auto" style="height: 350px;" src="https://placehold.co/350x350" alt="ketua">
                    </div>
                </div>
                <div class="col-lg-9 h-auto">
                    <div class="card rounded-0 border-0 h-100">
                        <div class="card-body">
                            <h1 class="fw-bold">Ketua Jurusan Teknik Sipil</h1>
                            <h3>Nama Ketua</h3>
                            <p style="text-align:justify;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi
                                quibusdam, molestiae eum, corporis dolores reiciendis cupiditate possimus qui fugiat iste
                                magni eos aperiam sapiente aut voluptates veniam voluptatum quisquam totam maxime mollitia
                                quas asperiores odio. Laudantium est molestiae molestias cumque perspiciatis voluptas nemo
                                temporibus suscipit a quibusdam porro dolore id distinctio quam, eius, doloremque iusto
                                voluptatibus impedit repellat cupiditate harum. Officiis optio reprehenderit dolores ipsa
                                fuga ullam aut quisquam officia non. Nesciunt at eos quasi eius cum, molestiae sint
                                asperiores tempore molestias officiis iusto delectus optio officia. Aut dignissimos eius
                                illum adipisci repudiandae. Ullam minus iure amet officia, animi aspernatur rerum illo
                                doloremque possimus odit totam expedita provident nisi omnis repellendus. Facilis nemo quam
                                maxime facere commodi aliquam illum ullam explicabo quae. Non ullam fugit totam in enim hic
                                doloremque omnis recusandae! Sunt, dignissimos deleniti architecto commodi voluptatum non
                                natus magnam deserunt eius. Rem commodi delectus deleniti repellat architecto facilis.</p>
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
                    <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus voluptatibus nulla
                        odio, labore dolore ea
                        sit. <span class="d-none d-lg-inline">Adipisci enim non sit blanditiis, cupiditate in quam saepe
                            pariatur modi vero
                            sequi maxime officiis! Necessitatibus eaque officiis dolorum ratione nulla accusamus ipsum
                            eveniet, illum in
                            ipsam, doloribus, voluptates asperiores repellat! Temporibus, consequuntur amet.</span></p>
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
                            <p style="text-align:justify;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum
                                saepe quasi est exercitationem iusto nisi delectus ab? Numquam libero et voluptatem alias
                                vel consequatur quasi repellendus! Animi adipisci tempora voluptatibus ratione assumenda
                                magni eligendi quidem non. Ratione vel nostrum officiis velit. Sit itaque eaque, ea officia
                                fugiat alias illo qui.</p>
                            <ul>
                                <li>Website: <a href="https://hmjtekkom.polsri.ac.id">HMJ-TEKOM</a> &amp; <a
                                        href="https://valter.polsri.ac.id/">VALTER</a></li>
                                <li>Phone: (+62) 8789-17044-16</li>
                                <li>Email: <a href="mailto:hmjtekkom@polsri.ac.id">hmjtekkom@polsri.ac.id</a></li>
                                <li>Instagram: <a href="https://www.instagram.com/hmjteknikkomputer/">@hmjteknikkomputer</a>
                                </li>
                            </ul>
                            <p style="text-align:justify;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad quam
                                unde est, fugit minima deserunt accusamus adipisci consequatur voluptates modi iste
                                voluptatem, nisi nostrum. Magnam.</p>
                            <a href="https://instagram.com/" class="btn btn-dark rounded-0 px-3">Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 h-auto">
                    <div class="card bg-transparent rounded-0 border-0 h-100">
                        <img class="w-100 my-auto" style="height: 350px;" src="https://placehold.co/350x350" alt="ketua">
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
                            <h1 class="display-2 fw-bold">350+</h1>
                            <p class="fs-5">Mahasiswa DIII</p>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="text-center w-100">
                            <h1 class="display-2 fw-bold">550+</h1>
                            <p class="fs-5">Mahasiswa DIV</p>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="text-center w-100">
                            <h1 class="display-2 fw-bold">35+</h1>
                            <p class="fs-5">Dosen</p>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="text-center w-100">
                            <h1 class="display-2 fw-bold">3+</h1>
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
                            <div class="swiper-slide bg-transparent">
                                <div class="card card-box border-0 rounded-0" role="button"
                                    onclick="return location=''">
                                    <div class="card-body">
                                        <img src="{{ asset('assets/img/hero/hero.jpg') }}" class="mb-3 w-100"
                                            alt="slideBlog">
                                        <p class="fs-6 text-muted mb-1">19/10/2023 | Akademik | 2K views</p>
                                        <h5 class="card-title title-slug">Lorem ipsum dolor sit amet consectetur
                                            adipisicing elit. Laudantium, incidunt!</h5>
                                    </div>
                                </div>
                            </div>
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
    <section class="bg-light py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 h-auto mb-5">
                    <div class="card bg-transparent text-center rounded-0 border-0 h-100">
                        <h1 class="fw-bold">Full Calender</h1>
                    </div>
                </div>
                <div class="col-lg-12 h-auto">
                    <div id='calendar'></div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('mainScripts')
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
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr('content'),
                }
            });

            var calendar = $('#calendar').fullCalendar({
                editable: true,
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'month,agendaWeek,agendaDay',
                },
            })

        });
    </script>
@endpush
