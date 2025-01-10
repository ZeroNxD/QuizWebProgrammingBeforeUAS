@extends('\layout.master')

@section('title', 'FriendList')

@section('content')
    <button class="btn btn-success" onclick="window.location.href='{{ route('friendlist')}}'" style="margin-bottom: 20px;">Back to Friendlist</button>
    <h3 style="font-weight: bold; margin-bottom: 20px;">Pending Request</h3>
    @if($friends->isEmpty())
        <p>You don't have any friends request yet.</p>
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
                        <button class="CheckDetail" onclick="window.location.href='{{ route('detailmember', $friend->id)}}'">Check Detail</button>
                        <form action="{{ route('acceptfriend', $friend->id) }}" method="POST" style="display:inline;">
                            @csrf
                            <button type="submit" class="Accepted">Accept ✅</button>
                        </form>

                        <form action="{{ route('rejectfriend', $friend->id) }}" method="POST" style="display:inline;">
                            @csrf
                            <button type="submit" class="Rejected">Reject ❌</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
@endsection

@include('style.pending')