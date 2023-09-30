@extends('layouts.app')

@section('title', 'Edit User')
@section('desc', ' On this page you can edit a user. ')

@section('content')
    <form action="{{ route('blog.update', Crypt::encryptString($blog->id)) }}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Blog Form</h4>
                    </div>
                    <input type="file" class="d-none" id="avatar" name="avatar">
                    <div class="card-body">
                        <div class="form-group row mb-1">
                            <label for="foto" class="col-sm-3 col-form-label">Foto</label>
                            <div class="col-sm-9">
                                <div class="custom-file">
                                    <input class="custom-file-input @error('foto') is-invalid @enderror " type="file"
                                        id="foto" name="foto" onchange="previewImage()">
                                    <label class="custom-file-label" for="foto">Pilih Foto</label>
                                </div>
                                {{-- <div class="clearfix"></div> --}}
                                <img class="img-preview img-fluid my-2 col-sm-5" style="display:none;">
                                <img src="{{ asset('storage/' . $blog->foto) }}" class="img-now img-fluid my-2 col-sm-5">
                                @error('foto')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="judul" class="col-sm-3 col-form-label">Judul</label>
                            <div class="col-sm-9">
                                <input value="{{ old('judul', $blog->judul) }}" type="text"
                                    class="form-control @error('judul') is-invalid @enderror" name="judul" id="judul"
                                    placeholder="Judul">
                                @error('judul')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="kategori" class="col-sm-3 col-form-label">Kategori</label>
                            <div class="col-sm-9">
                                <select name="kategori" id="kategori"
                                    class="form-control text-capitalize @error('kategori') is-invalid @enderror">
                                    <option value="Akademik" {{ $blog->kategori == 'Akademik' ? 'selected' : '' }}>Akademik
                                    </option>
                                    <option value="Berita Terkini"
                                        {{ $blog->kategori == 'Berita Terkini' ? 'selected' : '' }}>Berita Terkini</option>
                                    <option value="Lowongan Pekerjaan"
                                        {{ $blog->kategori == 'Lowongan Pekerjaan' ? 'selected' : '' }}>Lowongan Pekerjaan
                                    </option>
                                </select>
                                @error('kategori')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="konten" class="col-sm-3 col-form-label">Konten</label>
                            <div class="col-sm-9">
                                <textarea name="konten" class="summernote" id="konten">{!! $blog->konten !!}</textarea>
                                {{-- <trix-editor input="konten"></trix-editor> --}}
                                @error('konten')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-right">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection

@push('scripts')
    <script>
        function previewImage() {
            const image = document.querySelector('#foto');
            const imgPreview = document.querySelector('.img-preview');
            const imgNow = document.querySelector('.img-now');

            imgPreview.style.display = 'block';
            imgNow.style.display = 'none';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = (oFREvent) => {
                imgPreview.src = oFREvent.target.result;
            }
        }
    </script>
@endpush
