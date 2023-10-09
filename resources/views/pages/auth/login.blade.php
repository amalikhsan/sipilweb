@extends('layouts.auth')

@section('title', 'Login')

@section('content')
<section class="bg-transparent-dark min-vh-100">
    <div class="container vh-100">
        <div class="row h-100">
            <div class="col-12 col-sm-8 col-lg-6 col-xl-5 m-auto">
                <div class="login-brand d-flex justify-content-center mb-3">
                    <img src="../assets/img/icon/polsri.png" alt="logo" width="100" class="rounded-circle mr-2">
                    <img src="../assets/img/icon/sipil.png" alt="logo" width="100" class="rounded-circle ml-2">
                </div>

                <div class="card bg-transparent my-auto">
                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}" autocomplete="off">
                            @csrf
                            <div class="form-group">
                                <input id="email" type="text"
                                    class="form-control border-2 border-light text-light rounded-0 bg-transparent shadow-none @error('email') is-invalid @enderror"
                                    name="email" tabindex="1" placeholder="Username" autofocus>
                                @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <input id="password" type="password"
                                    class="form-control border-2 border-light text-light rounded-0 bg-transparent shadow-none @error('password') is-invalid @enderror"
                                    name="password" tabindex="2" placeholder="Password">
                                @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-light btn-lg btn-block rounded-0 shadow-none"
                                    tabindex="4">
                                    Login
                                </button>
                                <div class="d-block mt-3">
                                    <div class="float-right">
                                        <a href="{{ route('password.request') }}" class="text-small">
                                            Forgot Password?
                                        </a>
                                    </div>
                                </div>
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