@extends('layouts.app')

@section('title', 'Create New User')
@section('desc', ' On this page you can create a new user. ')

@section('content')
    <form action="{{ route('blog.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Blog Form</h4>
                    </div>
                    <input type="file" class="d-none" id="avatar" name="avatar">
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="judul" class="col-sm-3 col-form-label">Judul</label>
                            <div class="col-sm-9">
                                <input value="{{ old('judul') }}" type="text"
                                    class="form-control @error('judul') is-invalid @enderror" name="judul" id="judul"
                                    placeholder="Judul">
                                @error('judul')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        {{-- <div class="form-group row">
                            <label for="slug" class="col-sm-3 col-form-label">Slug</label>
                            <div class="col-sm-9">
                                <input value="{{ old('slug') }}" type="hidden"
                                    class="form-control @error('slug') is-invalid @enderror" name="slug" id="slug"
                                    placeholder="Slug" disabled>
                                @error('slug')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div> --}}
                        <div class="form-group row">
                            <label for="role" class="col-sm-3 col-form-label">Kategori</label>
                            <div class="col-sm-9">
                                <select name="role" id="role"
                                    class="form-control text-capitalize @error('role') is-invalid @enderror">
                                    <option value="user">user</option>
                                    <option value="admin">admin</option>
                                    <option value="superadmin">superadmin</option>
                                </select>
                                @error('role')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="foto" class="col-sm-3 col-form-label">Gambar</label>
                            <div class="col-sm-9">
                                <img class="img-preview img-fluid mb-2 col-sm-5">
                                <input class="form-control @error('foto') is-invalid @enderror " type="file"
                                    id="foto" name="foto" onchange="previewImage()">
                                @error('foto')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="body" class="col-sm-3 col-form-label">Konten</label>
                            <div class="col-sm-9">
                                <input id="body" type="hidden" name="body">
                                <trix-editor input="body"></trix-editor>
                                @error('body')
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

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = (oFREvent) => {
                imgPreview.src = oFREvent.target.result;
            }
        }
    </script>
@endpush
