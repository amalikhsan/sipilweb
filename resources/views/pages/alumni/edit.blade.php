@extends('layouts.app')

@section('title', 'Edit Alumni')
@section('desc', ' On this page you can edit a alumni. ')

@section('content')
<form action="{{ route('dataalumni.update', Crypt::encryptString($alumni->id)) }}" method="POST"
    enctype="multipart/form-data">
    @method('PUT')
    @csrf
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Form Alumni</h4>
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
                            <img src="{{ asset('storage/' . $alumni->foto) }}" class="img-old img-fluid my-2 w-100">
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
                            <input value="{{ old('nama', $alumni->nama) }}" type="text"
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
                        <label for="prodi" class="col-sm-3 col-form-label">Prodi</label>
                        <div class="col-sm-9">
                            <input value="{{ old('prodi', $alumni->prodi) }}" type="text"
                                class="form-control @error('prodi') is-invalid @enderror" name="prodi" id="prodi"
                                placeholder="Prodin">
                            @error('prodi')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="tahunLulus" class="col-sm-3 col-form-label">Tahun Lulus</label>
                        <div class="col-sm-9">
                            <input value="{{ old('tahunLulus', $alumni->tahunLulus) }}" type="text"
                                class="form-control @error('tahunLulus') is-invalid @enderror" name="tahunLulus"
                                id="tahunLulus" placeholder="Tahun Lulus">
                            @error('tahunLulus')
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

@push('scripts')
<script>
    function previewImage() {
            const image = document.querySelector('#foto');
            const imgPreview = document.querySelector('.img-preview');
            const imgOld = document.querySelector('.img-old')

            if (imgPreview.style.display = 'block') {
                imgOld.style.display = 'none';
            }


            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = (oFREvent) => {
                imgPreview.src = oFREvent.target.result;
            }
        }
</script>
@endpush