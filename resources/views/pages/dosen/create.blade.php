@extends('layouts.app')

@section('title', 'Create New Dosen')
@section('desc', ' On this page you can create a new dosen. ')

@section('content')
<form action="{{ route('datadosen.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Form Dosen dan Tendik</h4>
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
                            <img class="img-preview img-fluid my-2 w-25">
                            @error('foto')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nama" class="col-sm-3 col-form-label">Nama</label>
                        <div class="col-sm-9">
                            <input value="{{ old('nama') }}" type="text"
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
                            <input value="{{ old('lulusan') }}" type="text"
                                class="form-control @error('lulusan') is-invalid @enderror" name="lulusan" id="lulusan"
                                placeholder="Lulusan">
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
                            <input value="{{ old('pangkalan') }}" type="text"
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
                            <input value="{{ old('jabatan') }}" type="text"
                                class="form-control @error('jabatan') is-invalid @enderror" name="jabatan" id="jabatan"
                                placeholder="Jabatan">
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
                            <input value="{{ old('nip') }}" type="text"
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
                            <input value="{{ old('nidn') }}" type="text"
                                class="form-control @error('nidn') is-invalid @enderror" name="nidn" id="nidn"
                                placeholder="Nidn">
                            @error('nidn')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="role" class="col-sm-3 col-form-label">Kategori</label>
                        <div class="col-sm-9">
                            <select name="role" id="role"
                                class="form-control text-capitalize @error('role') is-invalid @enderror">
                                <option value="dosen">Dosen</option>
                                <option value="tendik">Tendik</option>
                            </select>
                            @error('role')
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
            // const imgDummy = document.querySelector('#img-dummy')

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = (oFREvent) => {
                imgPreview.src = oFREvent.target.result;
            }
        }
</script>
@endpush