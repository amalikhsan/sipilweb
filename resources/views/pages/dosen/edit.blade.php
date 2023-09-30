@extends('layouts.app')

@section('title', 'Edit User')
@section('desc', ' On this page you can edit a user. ')

@section('content')
    <form action="{{ route('dosen.update', $item->id) }}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h4>Form Dosen dan Tendik</h4>
                    </div>
                    <input type="file" class="d-none" id="avatar" name="avatar">
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="nama" class="col-sm-3 col-form-label">Nama</label>
                            <div class="col-sm-9">
                                <input value="{{ old('nama', $item->nama) }}" type="text"
                                    class="form-control @error('nama') is-invalid @enderror" name="nama" id="nama"
                                    placeholder="Nama">
                                @error('nama')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="lulusan" class="col-sm-3 col-form-label">Lulusan</label>
                            <div class="col-sm-9">
                                <input value="{{ old('lulusan', $item->lulusan) }}" type="text"
                                    class="form-control @error('lulusan') is-invalid @enderror" name="lulusan"
                                    id="lulusan" placeholder="Lulusan">
                                @error('lulusan')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="pangkalan" class="col-sm-3 col-form-label">Pangkalan</label>
                            <div class="col-sm-9">
                                <input value="{{ old('pangkalan', $item->pangkalan) }}" type="text"
                                    class="form-control @error('pangkalan') is-invalid @enderror" name="pangkalan"
                                    id="pangkalan" placeholder="Pangkalan">
                                @error('pangkalan')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="jabatan" class="col-sm-3 col-form-label">Jabatan</label>
                            <div class="col-sm-9">
                                <input value="{{ old('jabatan', $item->jabatan) }}" type="text"
                                    class="form-control @error('jabatan') is-invalid @enderror" name="jabatan"
                                    id="jabatan" placeholder="Jabatan">
                                @error('jabatan')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nip" class="col-sm-3 col-form-label">Nip</label>
                            <div class="col-sm-9">
                                <input value="{{ old('nip', $item->nip) }}" type="text"
                                    class="form-control @error('nip') is-invalid @enderror" name="nip" id="nip"
                                    placeholder="Nip">
                                @error('nip')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nidn" class="col-sm-3 col-form-label">Nidn</label>
                            <div class="col-sm-9">
                                <input value="{{ old('nidn', $item->nidn) }}" type="text"
                                    class="form-control @error('nidn') is-invalid @enderror" name="nidn" id="nidn"
                                    placeholder="Jabatan">
                                @error('nidn')
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
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header">
                        <h4>Foto</h4>
                    </div>
                    <div class="card-body">
                        @if ($item->foto)
                            <img alt="image" src="{{ asset('storage') }}/{{ $item->foto }}"
                                class="rounded-circle w-100 mb-3">
                        @else
                            <img alt="image" src="{{ asset('/assets/img/avatar/avatar-1.png') }}"
                                class="rounded-circle w-100 mb-3">
                        @endif
                        <div class="clearfix"></div>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="avatar" name="avatar">
                            <label class="custom-file-label" for="avatar">Pilih Foto</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
