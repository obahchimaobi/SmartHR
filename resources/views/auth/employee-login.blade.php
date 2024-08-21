@extends('layouts.app')

@section('title')
    Employee Login
@endsection

@section('content')
    <div class="container-fluid m-auto text-center mt-3">
        <img src="{{ asset('icons/smarthr.webp') }}" alt="" style="width: 50px;" class="rounded-circle mt-2">
    </div>

    @if (session('success'))
        <script>
            const Toast = Swal.mixin({
                toast: true,
                position: "top-end",
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.onmouseenter = Swal.stopTimer;
                    toast.onmouseleave = Swal.resumeTimer;
                }
            });
            Toast.fire({
                icon: "success",
                title: "{{ session('success') }}"
            });
        </script>
    @endif

    @if (session('error'))
        <script>
            const Toast = Swal.mixin({
                toast: true,
                position: "top-end",
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.onmouseenter = Swal.stopTimer;
                    toast.onmouseleave = Swal.resumeTimer;
                }
            });
            Toast.fire({
                icon: "error",
                title: "{{ session('error') }}"
            });
        </script>
    @endif

    <div class="container d-flex" style="height: 80vh">
        <div class="col-xl-5 col-12 col-lg-6 col-md-7 m-auto border shadow rounded p-3">
            <h5 class="text-center mb-3">Employee Login</h5>
            <form action="{{ route('employer-login') }}" method="post">
                @csrf

                <label for="">Email</label>
                <input type="email" class="form-control shadow-none mt-1" name="employee_email" style="font-family: 'Roboto', sans-serif;" @required(true)>

                @error('employee_email')
                    <span class="text-danger">{{ $message }}</span>
                @enderror

                <label for="" class="mt-3">Password</label>
                <input type="password" class="form-control shadow-none mt-1" name="employee_password" @required(true)>

                @error('employee_password')
                    <span class="text-danger">{{ $message }}</span>
                @enderror

                <div class="mt-3 d-grid">
                    <button class="btn btn-success" type="submit">Login</button>
                </div>

                <div class="mt-4 text-center">
                    <h6 style="font-size: 14px; font-weight: normal;">Don't have an account? <a
                            href="{{ route('employee.register') }}" class="text-decoration-none">create one</a></h6>

                    <h6 style="font-size: 14px; font-weight: normal;">Forgot your password? <a href="#"
                            class="text-decoration-none">reset it</a></h6>
                </div>
            </form>
        </div>
    </div>
@endsection
