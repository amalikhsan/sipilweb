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
                        <h3 class="fw-bold mb-4">Data Dosen</h3>
                    </div>
                    <div class="col-md-4">
                        <form class="d-flex border mb-3 mb-lg-0">
                            <input type="search" name="search" class="form-control bg-transparent border-0 rounded-0 shadow-none" placeholder="Cari Dosen">
                            <button type="submit" class="btn btn-dark rounded-0">Cari</button>
                        </form>
                    </div>
                </div>
            </div>
            <hr>
            <div class="col-12">
                <div class="row">
                    @forelse($dataDosens as $dataDosen)
                    <div class="col-sm-6 col-md-4 col-lg-3 mb-3">
                        <div class="card text-center border-0 rounded-0" title="{{ $dataDosen->nama }}|Lulusan : {{ $dataDosen->lulusan }}|Pangkalan : {{ $dataDosen->pangkalan }}|NIP : {{ $dataDosen->nip }}|NIDN : {{ $dataDosen->nidn }}">
                            <div class="card-body">
                                <img src="{{ asset('storage/'.$dataDosen->foto) }}" class="mb-3 w-100" alt="Dosen">
                                <h5 class="card-title">{{ $dataDosen->nama }}</h5>
                                <p class="fs-6 text-muted mb-1">Lulusan : {{ $dataDosen->lulusan }}</p>
                                <p class="fs-6 text-muted mb-1">Pangkalan : {{ $dataDosen->pangkalan }}</p>
                                <p class="fs-6 text-muted mb-1">NIP : {{ $dataDosen->nip }}</p>
                                <p class="fs-6 text-muted mb-1">NIDN : {{ $dataDosen->nidn }}</p>
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