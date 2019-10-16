@extends('backends.layouts.auth')
@section('title', 'Glass care shop | login')
@section('content')
<div class="container">
    <!-- Row -->
    <div class="row justify-content-center align-items-center h-100">
        <div class="col-xl-10 col-lg-12 col-md-9">
        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg-6 d-none d-lg-block bg-auth-image "></div>
                <div class="col-lg-6">
                <div class="p-5">
                    <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4 font-bokor">Glass care shop</h1>
                    </div>
                    <form action="{{ route('login.post') }}" method="POST" class="user">
                        @csrf
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-user-circle"></i></span>
                                </div>
                                <input type="text" name="username" class="form-control form-control-user {{ $errors->has('username') ? ' is-invalid' : '' }}"
                                value="{{ old('username') }}"/>
                                @if ($errors->has('username'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-unlock-alt"></i></span>
                                </div>
                                <input type="password" name="password" class="form-control form-control-user {{ $errors->has('username') ? ' is-invalid' : '' }}"/>
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                                @if(Session::has('login'))
                                    <p class="text-danger">{{ Session::get('login') }}</p>
                                @endif
                            </div>
                        </div>
                        <button type="submit" class="btn btn-pink btn-cicle btn-block">Login</button>
                    </form>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
</div>
@endsection
