@extends('layouts.main')

@section('title', 'Berita')

@push('mainStyles')
@endpush

@section('mainContent')
<section class="bg-light py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mb-4 mb-lg-0">
                <img src="{{ asset('storage/'.$dataBlog->foto) }}" class="w-100 mb-4" alt="">
                <h3 id="h1" class="fw-bold mb-4">{{ $dataBlog->judul }}</h3>
                <p class="text-muted mb-4">{{ $dataBlog->created_at->diffForHumans() }} | {{ $dataBlog->kategori }} |
                {{ $dataBlog->views }} views</p>
                {!! $dataBlog->konten !!}
                <hr>
                <div class="row">
                    @if($previousBlog)
                    <div class="col-6">
                        <a href="{{ route('Blog_Informasi', $previousBlog->slug) }}" class="btn btn-lg btn-dark text-start rounded-0 w-100 title-slug">
                            <div class="text-secondary"><< Previous</div>
                            <span class="fw-bold">{{ $previousBlog->judul }}</span>
                        </a>
                    </div>
                    @endif
                    @if($nextBlog)
                    <div class="col-6 ms-auto">
                        <a href="{{ route('Blog_Informasi', $nextBlog->slug) }}" class="btn btn-lg btn-dark text-end rounded-0 w-100 title-slug">
                            <div class="text-secondary">Next >></div>
                            <span class="fw-bold">{{ $nextBlog->judul }}</span>
                        </a>
                    </div>
                    @endif
                </div>
            </div>
            <div class="col-lg-4">
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
@endpush