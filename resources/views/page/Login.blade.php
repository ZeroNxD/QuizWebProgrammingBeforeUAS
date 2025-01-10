@extends('\layout.master')

@section('title', 'Login')
    
@section('content')
    <div class="headerlogin">
        <h1>Welcome to ConnectFriends Website</h1>
        <h3>Log in into your account</h3>
    </div>

    <div class="row">
        <div class="col-12" style="margin-top: 30px;">
            <form action="{{ route('loginuser') }}" method="post">
                @csrf

                <label for="">Email</label>
                <input class="form-control" type="email" name="email" aria-label="" value="{{old('email')}}">
                @error('email')
                    <p class="text-red-500 text-xs" style="color: red; font-weight: bold;">{{$message}}</p>
                @enderror

                <label for="">Password</label>
                <input class="form-control" type="password" name="password" aria-label="" value="{{old('password')}}">
                @error('password')
                    <p class="text-red-500 text-xs" style="color: red; font-weight: bold;">{{$message}}</p>
                @enderror

                <p style="font-weight: bold; text-decoration:underline; margin-bottom: -50px; margin-left: 10px; cursor: pointer; margin-top: 30px;"
                onclick="window.location.href='{{ route('register')}}'">
                Dont have an account?</p>

                <button type='submit'>Login</button>

            </form>
        </div>
    </div>
@endsection

@include('style.login')