@extends('layouts.app')

@section('title', 'Edit User')
@section('desc', ' On this page you can edit a user. ')

@section('content')
    <form action="{{ route('blog.update', $item->id) }}" method="POST" enctype="multipart/form-data">
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
                        <div class="form-group row">
                            <label for="judul" class="col-sm-3 col-form-label">Judul</label>
                            <div class="col-sm-9">
                                <input value="{{ old('judul', $item->judul) }}" type="text"
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
                                    <option value="user">user</option>
                                    <option value="admin">admin</option>
                                    <option value="superadmin">superadmin</option>
                                </select>
                                @error('kategori')
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
                                @if ($item->foto)
                                    <img alt="image" src="{{ asset('storage') }}/{{ $item->foto }}"
                                        class="rounded-circle w-100 mb-3">
                                @else
                                    <img alt="image" src="{{ asset('/assets/img/avatar/avatar-1.png') }}"
                                        class="rounded-circle w-100 mb-3">
                                @endif
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
                            <label for="konten" class="col-sm-3 col-form-label">Konten</label>
                            <div class="col-sm-9">
                                <input value="{{ old('konten', $item->konten) }}" id="konten" type="hidden"
                                    name="konten">
                                <trix-editor input="konten"></trix-editor>
                                @error('konten')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-right">
                        <button type="submit" class="btn btn-primary">Save Changes</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
