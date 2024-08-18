<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SmartHR</title>

    {{-- favicon --}}
    <link rel="shortcut icon" href="{{ asset('icons/smarthr.webp') }}" type="image/x-icon">

    {{-- bootstrap --}}
    <link rel="stylesheet" href="{{ asset('bootstrap/dist/css/bootstrap.min.css') }}">

    {{-- google fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="container-fluid">
        <img src="{{ asset('icons/smarthr.webp') }}" alt="" style="width: 50px;" class="rounded-circle mt-2">
    </div>
    
    <div class="container d-flex" style="height: 80vh">
        <div class="col-xl-5 col-12 col-lg-6 col-md-7 m-auto border shadow rounded p-3">
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
                    <h6 style="font-size: 14px;">Don't have an account? <a href="{{ route('auth.register') }}" class="text-decoration-none">create one</a></h6>

                    <h6 style="font-size: 14px;">Forgot your password? <a href="#" class="text-decoration-none">reset it</a></h6>
                </div>
            </form>
        </div>
    </div>
</body>
</html>