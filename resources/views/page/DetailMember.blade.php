@extends('\layout.master')

@section('title', $member->name)

@section('content')
    <div class="member-detail">
        <div class="member-card d-flex align-items-center">
            <div class="member-image">
                <img src="{{$member->profile_picture ? asset('storage/' . $member->profile_picture) : asset($member->profile_picture)}}" alt="{{ asset('assets/Default Picture.png')}}">
            </div>
            <div class="member-info ms-3">
                <h3>{{ $member->name }}</h3>
                <p><strong>Email: </strong> {{ $member->email }}</p>
                <p><strong>Gender : </strong> {{ $member->gender }}</p>
                <p><strong>Mobile Number : </strong> {{ $member->mobile_number }}</p>
                <p><strong>Fields of Work:</strong>
                    @foreach ($member->fields as $field)
                        {{ $field->name }}{{ !$loop->last ? ', ' : '' }}
                    @endforeach
                </p>
                <p><strong>Biography:</strong></p>
                <p> {{ $member->biography }}</p>
                <p><strong>Linkedin 🔗 : <a href="{{ $member->linkedin_link }}" target="_blank" rel="noopener noreferrer">
                    {{ $member->linkedin_link }}
                </a></strong></p>
                <a href="{{ url()->previous() }}" class="btn btn-outline-secondary">Back to Previous Page</a>
            </div>
        </div>
    </div>
@endsection

@include('style.detail')