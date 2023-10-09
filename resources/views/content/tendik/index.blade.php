@extends('layouts.main')

@section('title', 'Dosen & Tendik')

@push('mainStyles')
@endpush

@section('mainContent')
<section class="bg-light min-vh-100 py-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-md-8">
                        <h3 class="fw-bold mb-4">Data Tendik</h3>
                    </div>
                    <div class="col-md-4">
                        <form class="d-flex border mb-3 mb-lg-0">
                            <input type="search" name="search" class="form-control bg-transparent border-0 rounded-0 shadow-none" placeholder="Cari Tendik">
                            <button type="submit" class="btn btn-dark rounded-0">Cari</button>
                        </form>
                    </div>
                </div>
            </div>
            <hr>
            <div class="col-12">
                <div class="row">
                    @forelse($dataTendiks as $dataTendik)
                    <div class="col-sm-6 col-md-4 col-lg-3 mb-3">
                        <div class="card text-center border-0 rounded-0" title="{{ $dataTendik->nama }}|Jabatan : {{ $dataTendik->jabatan }}|NIP : {{ $dataTendik->nip }}">
                            <div class="card-body">
                                <img src="{{ asset('storage/'.$dataTendik->foto) }}" class="mb-3 w-100" alt="Tendik">
                                <h5 class="card-title">{{ $dataTendik->nama }}</h5>
                                <p class="fs-6 text-muted mb-1">Jabatan : {{ $dataTendik->jabatan }}</p>
                                <p class="fs-6 text-muted mb-1">NIP : {{ $dataTendik->nip }}</p>
                            </div>
                        </div>
                    </div>
                    @empty
                    <div class="col-12">
                        <h4 class="text-center my-5">Maaf Data Tidak Ditemukan</h4>
                    </div>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@push('mainScripts')
@endpush