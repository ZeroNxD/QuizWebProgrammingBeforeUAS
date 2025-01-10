@extends('\layout.master')

@section('title', 'FriendList')

@section('content')
<div class="container mt-5">
    
    <div class="buttons-container">
        <h2 style="font-weight: bold;">Your Friends</h2>
        <div class="listbutton">
            <button class="pending-btn" style="background-color: yellow; color: black; border: 2px solid black;" onclick="window.location.href='{{ route('pendingfriendlist')}}'">Check Pending Request</button>
            <button class="reject-btn" style="background-color: rgb(255, 0, 0); color: rgb(255, 255, 255); border: 2px solid rgb(0, 0, 0);" onclick="window.location.href='{{ route('rejectedfriendlist')}}'">Check Rejected Request</button>
        </div>
    </div>

    @if($friends->isEmpty())
        <p>You don't have any friends yet.</p>
    @else
        <div class="friend-list">
            @foreach($friends as $friend)
                <div class="friend-box mb-3">
                    <div class="friend-info d-flex align-items-center">
                        <img src="{{$friend->profile_picture ? asset('storage/' . $friend->profile_picture) : asset($friend->profile_picture)}}" alt="Profile Picture" class="friend-image">
                        <div class="friend-details ms-3">
                            <h3>{{ $friend->name }}</h3>
                            <p>Gender: {{ $friend->gender }}</p>
                            <p>Mobile Number: {{ $friend->mobile_number }}</p>
                            <p>Fields of Work: {{ $friend->fields->pluck('name')->join(', ') }}</p>
                        </div>
                    </div>
                    <div class="buttons">
                        
                        <button class="ThumbsUp">💬 Chat..</button>
                        <button class="CheckDetails">📞 Video Call</button>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</div>
@endsection

@include('style.friend')