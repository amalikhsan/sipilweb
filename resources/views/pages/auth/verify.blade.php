@extends('layouts.auth')

@section('title', 'Register')

@section('content')
<section class="bg-transparent-dark min-vh-100">
    <div class="container vh-100">
        <div class="row h-100">
            <div class="col-12 col-sm-8 col-lg-6 col-xl-5 m-auto">
                <div class="login-brand d-flex justify-content-center mb-3">
                    <img src="../assets/img/icon/polsri.png" alt="logo" width="100" class="rounded-circle mr-2">
                    <img src="../assets/img/icon/sipil.png" alt="logo" width="100" class="rounded-circle ml-2">
                </div>
                @if (session('status') == 'verification-link-sent')
                <div class="mb-4 alert alert-success">
                    A new email verification link has been emailed to you!
                </div>
                @endif
                <div class="card bg-transparent my-auto">
                    <div class="card-body">
                        <p class="text-muted">please check your email and go to the link for email verification.</p>
                        <form method="POST" action="{{ route('verification.send') }}">
                            @csrf
                            <div class="form-group">
                                <button type="submit" class="btn btn-light btn-lg btn-block rounded-0 shadow-none"
                                    tabindex="4">
                                    Send Verification Email
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