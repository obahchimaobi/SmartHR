@extends('layouts.app')

@section('title')
    HR Login
@endsection

@section('content')
    <div class="container-fluid m-auto text-center mt-3">
        <img src="{{ asset('icons/smarthr.webp') }}" alt="" style="width: 50px;" class="rounded-circle mt-2">
    </div>

    <div class="container d-flex" style="height: 80vh">
        <div class="col-xl-5 col-12 col-lg-6 col-md-7 m-auto border shadow rounded p-3">
            <h5 class="text-center mb-3">HR Login</h5>
            <form action="">
                @method('post')
                @csrf

                <label for="">Email</label>
                <input type="email" class="form-control shadow-none mt-1" name="email_login" @required(true)>

                <label for="" class="mt-3">Password</label>
                <input type="password" class="form-control shadow-none mt-1" name="password_login" @required(true)>

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
