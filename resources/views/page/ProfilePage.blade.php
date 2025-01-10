@extends('\layout.master')

@section('title', 'Profile')
    
@section('content')
<div class="profile-container">
    <h1 style="font-weight: bold;">Welcome, {{ $user->name }}</h1>
    <div class="container mt-5">
        <h2 style="font-weight: bold; margin-bottom: 30px;">Your Profile</h2>
        <div class="row">
            <div class="col-md-4 text-center">
                <img src="{{ asset('storage/' . $user->profile_picture) }}" alt="{{ $user->name }}'s profile" 
                    style="width: 280px; height: 350px; border-radius: 2px; border: 2px solid black;">
            </div>
            <div class="col-md-8">
                <div class="mb-3">
                    <h5><strong>Name: </strong>{{ $user->name }}</h5>
                </div>
    
                <div class="mb-3">
                    <h5><strong>Email: </strong>{{ $user->email }}</h5>
                </div>
    
                <div class="mb-3">
                    <h5><strong>Mobile Number: </strong>{{ $user->mobile_number }}</h5>
                </div>

                <div class="mb-3">
                    <h5><strong>Gender: </strong>{{ $user->gender }}</h5>
                </div>
    
                <div class="mb-3">
                    <label for="biography" class="form-label" style="font-weight: bold; font-size: 20px;">Biography :</label>
                    <p>{{ $user->biography ?? 'No biography available' }}</p>
                </div>

                <p><strong>Fields of Work:</strong>
                    @foreach ($fields as $field)
                        {{ $field->name }}{{ !$loop->last ? ', ' : '' }}
                    @endforeach
                </p>

                <div class="mb-3">
                    <h5><strong>Linkedin 🔗: </strong><a href="{{ $user->linkedin_link }}" target="_blank" rel="noopener noreferrer">
                        {{ $user->linkedin_link }}
                    </a></h5>
                </div>

                <div class="mb-3">
                    <h5><strong>Wallet 💳: </strong>{{ $user->wallet }}</h5>
                </div>
    
                <a href="{{ route('editprofile') }}" class="btn btn-primary">Edit Profile</a>
            </div>
        </div>
    </div>

    <h2 style="font-weight: bold; margin-bottom: 30px; margin-top: 20px;">Your Friendlist</h2>
</div>
@endsection

@include('style.profile')