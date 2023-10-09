@extends('layouts.auth')

@section('title', 'Forgot Password')

@section('content')
<section class="bg-transparent-dark min-vh-100">
    <div class="container vh-100">
        <div class="row h-100">
            <div class="col-12 col-sm-8 col-lg-6 col-xl-5 m-auto">
                <div class="login-brand d-flex justify-content-center mb-3">
                    <img src="../assets/img/icon/polsri.png" alt="logo" width="100" class="rounded-circle mr-2">
                    <img src="../assets/img/icon/sipil.png" alt="logo" width="100" class="rounded-circle ml-2">
                </div>
                @if (session('status'))
                <div class="mb-4 alert alert-success rounded-0 shadow-none">
                    {{ session('status') }}
                </div>
                @endif
                <div class="card bg-transparent my-auto">
                    <div class="card-body">
                        <p class="text-muted">We will send a link to reset your password</p>
                        <form method="POST" action="{{ route('password.email') }}">
                            @csrf
                            <div class="form-group">
                                <input id="email" type="text"
                                    class="form-control border-2 border-light text-light rounded-0 bg-transparent shadow-none @error('email') is-invalid @enderror"
                                    name="email" tabindex="1" placeholder="Email" autofocus>
                                @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-light btn-lg btn-block rounded-0 shadow-none"
                                    tabindex="4">
                                    Forgot Password
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="simple-footer mt-3">
                    {{ date("Y") }} &copy Teknik Sipil Politeknik Negeri Sriwijaya
                </div>
            </div>
        </div>
    </div>
</section>
@endsection