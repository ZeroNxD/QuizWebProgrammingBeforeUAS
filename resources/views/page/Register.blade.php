@extends('\layout.master')

@section('title', 'Register')
    
@section('content')
<div class="headerregister">
    <h1>Welcome to ConnectFriends Website</h1>
    <h3>Register your account</h3>

    <div class="container">
        <form method="POST" action="{{ route('registeruser') }}" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
                <label for="profile_picture" class="form-label">Profile Picture</label>
                <input type="file" name="profile_picture" class="form-control" id="formfile">
                @error('profile_picture')
                    <p class="text-red-500 text-xs" style="color: red; font-weight: bold;">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{old('name')}}">
                @error('name')
                    <p class="text-red-500 text-xs" style="color: red; font-weight: bold;">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label for="name" class="form-label">Mobile Number</label>
                <input type="text" class="form-control" id="mobile_number" name="mobile_number" value="{{old('mobile_number')}}">
                @error('mobile_number')
                    <p class="text-red-500 text-xs" style="color: red; font-weight: bold;">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" name="email" value="{{old('email')}}">
                @error('email')
                    <p class="text-red-500 text-xs" style="color: red; font-weight: bold;">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" value="{{old('password')}}">
                @error('password')
                    <p class="text-red-500 text-xs" style="color: red; font-weight: bold;">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label for="gender" class="form-label">Gender</label>
                <div class="d-flex gap-5 align-items-center">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" value="Male" id="Male">
                        <label class="form-check-label" for="Male" style="margin-top: 1px; margin-left: 10px;">Male</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" value="Female" id="Female">
                        <label class="form-check-label" for="Female" style="margin-top: 1px; margin-left: 10px;">Female</label>
                    </div>
                </div>
                @error('gender')
                    <p class="text-red-500 text-xs" style="color: red; font-weight: bold;">{{$message}}</p>
                @enderror
            </div>
            
            <div class="mb-3">
                <label class="form-label">Select Your Interests</label>
                <div class="row">
                    @foreach($allfields as $field)
                        <div class="col-md-4 d-flex align-items-center">
                            <input 
                                class="form-check-input me-2" 
                                type="checkbox" 
                                name="fields[]" 
                                value="{{ $field->id }}" 
                                id="field_{{ $field->id }}"
                                {{ in_array($field->id, old('fields', [])) ? 'checked' : '' }}>
                            <label class="form-check-label mb-3" for="field_{{ $field->id }}">
                                {{ $field->name }}
                            </label>
                        </div>
                    @endforeach
                </div>
                @error('fields')
                    <p class="text-red-500 text-xs" style="color: red; font-weight: bold;">{{$message}}</p>
                @enderror
            </div>
            
            

            <div class="mb-3">
                <label for="linkedin_link" class="form-label">LinkedIn Link</label>
                <input type="url" class="form-control" id="linkedin_link" name="linkedin_link" value="{{old('linkedin_link')}}">
                @error('linked_in')
                    <p class="text-red-500 text-xs" style="color: red; font-weight: bold;">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label for="biography" class="form-label">Biography</label>
                <textarea class="form-control" id="biography" name="biography" rows="4">{{old('biography')}}</textarea>
                @error('biography')
                    <p class="text-red-500 text-xs" style="color: red; font-weight: bold;">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label for="wallet_balance" class="form-label">Wallet Balance</label>
                <input type="number" class="form-control" id="wallet_balance" name="wallet_balance" step="0.01" value="{{old('wallet_balance')}}">
                <small class="form-text text-muted">You will be charged a default amount of 100,000. [Please Input >= 100.000]</small>
                @error('wallet_balance')
                    <p class="text-red-500 text-xs" style="color: red; font-weight: bold;">{{$message}}</p>
                @enderror
            </div>

            <button type="submit">Register</button>
        </form>
    </div>
</div>
@endsection

@include('style.register')