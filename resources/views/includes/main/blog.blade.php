@php
$dataBlogs = App\Models\dataBlog::with('user')->orderBy('views','desc')->limit(6)->get();
@endphp
@foreach($dataBlogs as $dataBlog)
<div class="col-12 mb-3">
    <a href="{{ route('Blog_Informasi', $dataBlog->slug) }}" class="nav-top-link d-block text-dark">{{ $dataBlog->judul }}</a>
</div>
@endforeach