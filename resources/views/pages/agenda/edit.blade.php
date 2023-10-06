@extends('layouts.app')

@section('title', 'Edit User')
@section('desc', ' On this page you can edit a user. ')

@section('content')
    <form action="{{ route('alumni.update', Crypt::encryptString($alumni->id)) }}" method="POST"
        enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Form Agenda</h4>
                    </div>
                    <input type="file" class="d-none" id="avatar" name="avatar">
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="title" class="col-sm-3 col-form-label">Title</label>
                            <div class="col-sm-9">
                                <input value="{{ old('title') }}" type="text"
                                    class="form-control @error('title') is-invalid @enderror" name="title" id="title"
                                    placeholder="title">
                                @error('title')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="start" class="col-sm-3 col-form-label">Start</label>
                            <div class="col-sm-9">
                                <input value="{{ old('start') }}" type="date"
                                    class="form-control @error('start') is-invalid @enderror" name="start" id="start"
                                    placeholder="start">
                                @error('start')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="end" class="col-sm-3 col-form-label">End</label>
                            <div class="col-sm-9">
                                <input value="{{ old('end') }}" type="date"
                                    class="form-control @error('end') is-invalid @enderror" name="end" id="end"
                                    placeholder="end">
                                @error('end')
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
