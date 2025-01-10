@extends('\layout.master')

@section('title', 'Edit Profile')

@section('content')
    <button class="btn btn-primary" onclick="window.location.href='{{ route('profilepage')}}'">Back to Profile Page</button>
    
    <div class="container mt-5">
        <h2 style="font-weight: bold; margin-bottom: 30px;">Edit Your Profile</h2>

        <form method="POST" action="{{ route('updateprofile') }}" enctype="multipart/form-data">
            @csrf
            @method('PUT') 

            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" value="{{ old('name', $user->name) }}">
                @error('name')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" value="{{ old('email', $user->email) }}">
                @error('email')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label for="gender" class="form-label">Gender</label>
                <div class="d-flex gap-5 align-items-center">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" value="Male" id="Male" {{ old('gender', $user->gender) == 'Male' ? 'checked' : '' }}>
                        <label class="form-check-label" for="Male" style="margin-top: 1px; margin-left: 10px;">Male</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" value="Female" id="Female" {{ old('gender', $user->gender) == 'Female' ? 'checked' : '' }}>
                        <label class="form-check-label" for="Female" style="margin-top: 1px; margin-left: 10px;">Female</label>
                    </div>
                </div>
            </div>

            <div class="mb-3">
                <label for="biography" class="form-label">Biography</label>
                <textarea name="biography" class="form-control" rows="4">{{ old('biography', $user->biography) }}</textarea>
                @error('biography')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label for="profile_picture" class="form-label">Profile Picture</label>
                <input type="file" name="profile_picture" class="form-control">
                <h5 style="font-weight: bold; margin-top: 20px;">Current Profile Picture</h5>
                <img src="{{$user->profile_picture ? asset('storage/' . $user->profile_picture) : asset($user->profile_picture)}}" alt="{{ asset('assets/Default Picture.png')}}" 
                style="width: 250px; height: 200px;">
                @error('profile_picture')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label for="linkedin_link" class="form-label">Linkedin 🔗</label>
                <input type="url" name="linkedin_link" class="form-control" value="{{ old('linkedin_link', $user->linkedin_link) }}">
                @error('email')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label for="fields" class="form-label" style="font-weight: bold;">Fields of Work</label>
                <div>
                    @foreach($allfields as $field)
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="fields[]" value="{{ $field->id }}" 
                                {{ in_array($field->id, $fields->pluck('id')->toArray()) ? 'checked' : '' }}>
                            <label class="form-check-label" for="field{{ $field->id }}">
                                {{ $field->name }}
                            </label>
                        </div>
                    @endforeach
                </div>
            </div>

            <button type="submit" class="btn btn-success">Update Profile</button>
        </form>
    </div>
@endsection

