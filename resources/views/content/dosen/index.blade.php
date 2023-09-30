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
                        <form action="" method="GET" class="d-flex border mb-3 mb-lg-0">
                            @csrf
                            @method('GET')
                            <input type="search" name="search" class="form-control bg-transparent border-0 rounded-0 shadow-none" placeholder="Cari Dosen">
                            <button type="submit" class="btn btn-dark rounded-0">Cari</button>
                        </form>
                    </div>
                </div>
            </div>
            <hr>
            <div class="col-12">
                <div class="row">
                    <div class="col-sm-6 col-md-4 col-lg-3 mb-3">
                        <div class="card text-center border-0 rounded-0" title="Lorem, ipsum dolor.|Lulusan : DIII Teknik Sipil|Pangkalan : Teknik Sipil|NIP : 912801801923|NIDN : 1820810238">
                            <div class="card-body">
                                <img src="{{ asset('assets/img/hero/hero.jpg') }}" class="mb-3 w-100" alt="Dosen">
                                <h5 class="card-title">Lorem, ipsum dolor.</h5>
                                <p class="fs-6 text-muted mb-1">Lulusan : DIII Teknik Sipil</p>
                                <p class="fs-6 text-muted mb-1">Pangkalan : Teknik Sipil</p>
                                <p class="fs-6 text-muted mb-1">NIP : 912801801923</p>
                                <p class="fs-6 text-muted mb-1">NIDN : 1820810238</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@push('mainScripts')
@endpush