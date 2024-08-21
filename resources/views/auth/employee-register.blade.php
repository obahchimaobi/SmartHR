@extends('layouts.app')

@section('title')
    Employee Register
@endsection

@section('content')
    <div class="container-fluid m-auto text-center mt-3">
        <img src="{{ asset('icons/smarthr.webp') }}" alt="" style="width: 50px;" class="rounded-circle mt-2">
    </div>

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

    <div class="container d-flex mt-3">
        <div class="col-xl-5 col-12 col-lg-6 col-md-7 m-auto border shadow rounded p-4 mb-4">
            <form action="{{ route('employee-register') }}" enctype="multipart/form-data" method="post">
                @csrf
                <div class="row">
                    <div class="col-xl-6 mt-3">
                        <label for="">First Name</label>
                        <input type="text" class="form-control shadow-none mt-1" value="{{ old('first_name') }}" name="first_name" style="font-family: 'Roboto', sans-serif;" @required(true)>

                        @error('first_name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="col-xl-6 mt-3">
                        <label for="">Last Name</label>
                        <input type="text" class="form-control shadow-none mt-1" name="last_name" style="font-family: 'Roboto', sans-serif;" @required(true)>

                        @error('last_name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="col-xl-6 mt-3">
                        <label for="">Employee Id</label>
                        <input type="text" class="form-control shadow-none mt-1" name="employee_id" style="font-family: 'Roboto', sans-serif;" @required(true)>

                        @error('employee_id')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="col-xl-6 mt-3">
                        <label for="">Department</label>
                        <div>
                            <select class="form-select form-select-md mt-1 shadow-none" style="font-family: 'Roboto', sans-serif;" name="department" id="">
                                <option selected>Select one</option>
                                <option value="New Delhi">New Delhi</option>
                            </select>
                        </div>

                        @error('department')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="col-xl-6 mt-3">
                        <label for="">Employment Status</label>
                        <div>
                            <select class="form-select form-select-md mt-1 shadow-none" style="font-family: 'Roboto', sans-serif;" name="employment_status"
                                id="">
                                <option selected>Select one</option>
                                <option value="Full Time">Full Time</option>
                                <option value="Part Time">Part Time</option>
                                <option value="Contract">Contract</option>
                            </select>
                        </div>

                        @error('employment_status')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="col-xl-6 mt-3">
                        <label for="">Date Joined</label>
                        <input type="date" name="date_joined" id="" class="form-control mt-1 shadow-none" style="font-family: 'Roboto', sans-serif;">

                        @error('date_joined')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="col-xl-12 mt-3">
                        <label for="">Employment Type</label>
                        <div>
                            <select class="form-select form-select-md mt-1 shadow-none" name="employment_type" style="font-family: 'Roboto', sans-serif;"
                                id="">
                                <option selected>Select one</option>
                                <option value="Permanent">Permanent</option>
                                <option value="Temporary">Temporary</option>
                            </select>
                        </div>

                        @error('employment_type')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="col-xl-12 mt-3">
                        <label for="">Email</label>
                        <input type="email" class="form-control shadow-none mt-1" name="employee_email" style="font-family: 'Roboto', sans-serif;" @required(true)>

                        @error('employee_email')
                            <span class="text-danger">{{ $messagge }}</span>
                        @enderror
                    </div>

                    <div class="col-xl-6">
                        <label for="" class="mt-3">Password</label>
                        <input type="password" class="form-control shadow-none mt-1" name="employee_password" style="font-family: 'Roboto', sans-serif;" @required(true)>

                        @error('employee_password')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="col-xl-6">
                        <label for="" class="mt-3">Confirm Password</label>
                        <input type="password" class="form-control shadow-none mt-1" style="font-family: 'Roboto', sans-serif;" name="employee_password_confirmation"
                            @required(true)>

                        @error('password_confirmation')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="col-xl-12 mt-3">
                        <label for="">Image</label>
                        <input type="file" class="form-control shadow-none mt-1" name="profile_picture">

                        @error('profile_picture')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="mt-3 d-grid">
                    <button class="btn btn-success" type="submit">Register</button>
                </div>

                <div class="mt-3 text-center">
                    <h6 style="font-size: 14px; font-weight: normal;">Already have an account? <a
                            href="{{ route('employee.login') }}" class="text-decoration-none">login</a></h6>
                </div>
            </form>
        </div>
    </div>
@endsection
