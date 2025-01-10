<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .sidebar {
            height: auto;
            background-color: #343a40;
            color: #fff;
            padding-top: 20px; 
            flex-shrink: 0; 
        }

        .sidebar a {
            color: #fff;
            text-decoration: none;
            padding: 10px 15px;
            display: block;
        }

        .sidebar a.active {
            background-color: #495057;
        }

        .sidebar a:hover {
            background-color: #495057;
        }

        .sidebar button{
            color: #fff;
            text-decoration: none;
            padding: 5px 15px;
            display: block;
            width: 230px;
            height: 40px;
            text-align: left;
        }

        .sidebar button:hover{
            background-color: #495057;
        }

        body, html {
            height: 100%;
            margin: 0;
            display: flex;
            flex-direction: column;
        }

        .container-fluid {
            flex: 1; 
            display: flex;         
            flex-direction: row;           
        }

        .row {
            display: flex;
            flex: 1;               
        }

        footer {
            position: relative;
            bottom: 0;
        }

    </style>
    
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 col-lg-2 sidebar">
                <div class="text-center mb-4">
                    <img src="{{ 
                        auth()->check() 
                        ? (auth()->user()->profile_picture 
                            ? asset('storage/' . auth()->user()->profile_picture) 
                            : asset('assets/Default Picture.png')) 
                        : asset('assets/Default Picture.png') }}" 
                        alt="{{ auth()->check() ? auth()->user()->name : 'Guest' }}'s profile" 
                        style="border-radius: 50%; margin-bottom: 20px; width:116px; height:116px">                    
                    <h5 style="font-weight: bold">{{ auth()->user()->name ?? 'Guest' }}</h5>
                    <p style="font-weight: bold">{{ auth()->user()->email ?? '' }}</p>
                </div>

                <a href="{{route('home')}}" class="{{ Route::is('home') ? 'active' : '' }}">Home</a>
                <a href="{{route('profilepage')}}" class="{{ Route::is('profilepage') ? 'active' : '' }}">Profile</a>
                <a href="{{route('memberlist')}}" class="{{ Route::is('memberlist') ? 'active' : '' }}">Member List</a>
                <a href="{{route('friendlist')}}" class="{{ Route::is('friendlist') ? 'active' : '' }}">Friend List</a>
                
                @auth
                    <form action="{{ route('logoutuser')}}" method="POST" class="d-inline">
                        @csrf
                        <button type="submit" class="btn btn-link text-white" style="text-decoration: none;">Logout</button>
                    </form>
                @else
                    <div class="d-flex gap-2" style="padding: 20px; margin-bottom: 20px; justify-content:center;" >
                        <a href="{{route('login')}}" class="{{ Route::is('login') ? 'active' : '' }}" style="border: 3px solid white; margin-right: 20px">Login</a>
                        <a href="{{route('register')}}" class="{{ Route::is('register') ? 'active' : '' }}" style="border: 3px solid white;">Register</a>
                    </div>
                @endauth
            </div>
            
            <div class="col-md-9 col-lg-10" style="padding:0;">
                <div class="container" style="background: rgb(30, 28, 28); height: 100px; display: flex; justify-content: center; align-items: center;">
                    <img src="{{ asset('assets/Logo_CF2.png') }}" alt="Logo ConnectFriends" style="height: 100px; width: 180px;">
                </div>
                
                <div class="p-4">
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    @yield('content')
                </div>
            </div>
            
        </div>
        
    </div>
    @include('layout.footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>