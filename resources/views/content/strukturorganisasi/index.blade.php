@extends('layouts.main')

@section('title', 'Struktur Organisai')

@push('mainStyles')
@endpush

@section('mainContent')
<section class="bg-light py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mb-4 mb-lg-0">
                <img src="{{ asset('assets/img/hero/hero.jpg') }}" class="w-100 mb-4" alt="">
                <p style="text-align:justify;"><i>Sumber dari Teknik Sipil</i></p>
                <h3 id="h1" class="fw-bold mb-4">Struktur Organisasi</h3>
                <p style="text-align:justify;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam quam
                    voluptas cupiditate earum obcaecati laborum iste esse doloribus recusandae quos ducimus commodi
                    minima veritatis natus, aut provident enim quo unde alias minus! Cum quod doloremque earum fugit,
                    officia odio dolorem vitae quasi sed voluptatum sequi est pariatur. Esse, pariatur veniam?</p>
                <p style="text-align:justify;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio, accusamus rem nemo quidem nesciunt, delectus, iusto doloribus ut minima ab iure harum mollitia corporis. Sequi et, amet hic quaerat quae quam ipsam, debitis libero minima reprehenderit alias dicta facilis, consequuntur rem. Tenetur laborum ab ipsa laudantium, delectus reprehenderit eos velit!</p>
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