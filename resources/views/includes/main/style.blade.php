<!-- Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
<script src="{{ asset('/assets/js/stisla.js') }}"></script>

<!-- Template CSS -->
<link rel="stylesheet" href="{{ asset('/assets/css/mainstyle.css') }}">

<!-- Custom CSS -->
<style type="text/css">
    /* Custom CSS to style the carousel */
    .carousel-item {
        position: relative;
        text-align: center;
        color: white;
        /* Warna teks putih */
    }

    /* Stilisasi teks h2 dan p */
    .carousel-content {
        position: absolute;
        width: 100%;
        top: 50%;
        left: 0;
        transform: translate(0, -50%);
        padding: 20px;
    }

    /* Stilisasi teks h2 dan p */
    .carousel-bg {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        transform: translate(0, 0);
        background-color: rgba(0, 0, 0, 0.70);
        /* Hitam dengan opasitas 0.5 */
        padding: 20px;
    }

    /* Stilisasi gambar latar belakang */
    .carousel-image {
        object-fit: cover;
        width: 100%;
        height: 100vh;
        /* Gunakan seluruh ketinggian layar */
    }

    .section-item {
        position: relative;
        text-align: center;
        color: white;
        /* Warna teks putih */
    }

    .section-content {
        position: absolute;
        width: 100%;
        top: 50%;
        left: 0;
        transform: translate(0, -50%);
        padding: 20px;
    }

    /* Stilisasi teks h2 dan p */
    .section-bg {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        transform: translate(0, 0);
        background-color: rgba(0, 0, 0, 0.70);
        /* Hitam dengan opasitas 0.5 */
        padding: 20px;
    }

    /* Stilisasi gambar latar belakang */
    .section-image {
        object-fit: cover;
        width: 100%;
        height: 50vh;
        /* Gunakan seluruh ketinggian layar */
    }

    .fixed-top.fixednav {
        background-color: #fff;
    }

    @media (max-width: 992px) {
        .navbar {
            background-color: #fff;
        }

        .section-image {
            height: 80vh;
            /* Gunakan seluruh ketinggian layar */
        }
    }

    .swiper {
        width: 100%;
        height: 100%;
    }

    .swiper-slide {
        width: 20%;
        text-align: center;
        font-size: 18px;
        background: #fff;

        /* Center slide text vertically */
        display: -webkit-box;
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        -webkit-justify-content: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        -webkit-align-items: center;
        align-items: center;
    }

    .card-box {
        cursor: pointer;
        transition: 0.3s ease-in-out;
    }

    .card-box:hover {
        box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.1);
    }

    .nav-bottom-link {
        transition: 0.3s ease-in-out;
    }

    .nav-bottom-link:hover {
        color: #bebebe !important;
    }

    .title-slug {
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }
</style>

<!-- Full Calendar -->
<script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.9/index.global.min.js'></script>
{{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> --}}
