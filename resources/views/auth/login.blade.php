@extends('layouts.app')

@section('title')
    HR Login
@endsection

@section('content')
    <div class="container-fluid m-auto text-center mt-5 mb-4">
        <h6>Welcome Back, HR</h6>
        <h6 style="font-weight: 300; font-size: 15px;">Sign in to your account to continue</h6>
        {{-- <img src="{{ asset('icons/smarthr.webp') }}" alt="" style="width: 50px;" class="rounded-circle mt-2"> --}}
    </div>

    <div class="container d-flex">
        <div class="col-xl-5 col-12 col-lg-6 col-md-7 m-auto border shadow rounded p-3">
            <div class="text-center mb-4">
                <img src="{{ asset('icons/smarthr.webp') }}" alt="" style="width: 70px;" class="rounded-circle">
            </div>
            <form action="">
                @method('post')
                @csrf

                <label for="">Email</label>
                <input type="email" class="form-control shadow-none mt-1" name="email_login" style="font-family: 'Roboto', sans-serif; font-weight: 400;" @required(true)>

                <label for="" class="mt-3">Password</label>
                <input type="password" class="form-control shadow-none mt-1" name="password_login" style="font-family: 'Roboto', sans-serif; font-weight: 400;" @required(true)>

                <div class="mt-3 d-grid">
                    <button class="btn btn-success" type="submit">Login</button>
                </div>

                <div class="mt-4 text-center">
                    <h6 style="font-size: 14px; font-weight: normal;">Not HR? Login as an <a
                            href="{{ route('employee.login') }}" class="text-decoration-none">Employee</a></h6>

                    <h6 style="font-size: 14px; font-weight: normal;">Forgot your password? <a href="#"
                            class="text-decoration-none">reset it</a></h6>
                </div>
            </form>
        </div>
    </div>
@endsection
