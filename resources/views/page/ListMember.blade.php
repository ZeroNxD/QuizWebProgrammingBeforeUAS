@extends('\layout.master')

@section('title', 'ListMember')

@section('content')
    <div class="d-flex justify-content-center align-items-center">
        <form class="d-flex" role="search">
            <input class="form-control me-2" name="search" type="search" placeholder="Search based on name, fields, gender or biography" aria-label="Search" style="width: 800px;">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
    </div>

    <div class="d-flex justify-content-center mt-4">
        <form method="GET" action="{{ route('memberlist') }}">
            <div class="me-3">
                <label style="font-weight: bold; font-size: 18px;">Gender:</label><br>
                <input type="checkbox" name="gender[]" value="male" id="male" 
                    {{ in_array('male', request()->gender ?? []) ? 'checked' : '' }} 
                    onclick="toggleExclusive('male', 'female')"> Male
                <p></p>
                <input type="checkbox" name="gender[]" value="female" id="female" 
                    {{ in_array('female', request()->gender ?? []) ? 'checked' : '' }} 
                    onclick="toggleExclusive('female', 'male')"> Female
            </div>
            
            <div>
                <label style="font-weight: bold; font-size: 18px; margin-top: 20px; margin-bottom: 20px;">Field:</label><br>
                <div class="checkbox-group">
                    @foreach ($fields as $field)
                        <div class="checkbox-item">
                            <input type="checkbox" name="field[]" value="{{ $field->name }}" 
                                {{ in_array($field->name, request()->field ?? []) ? 'checked' : '' }}> {{ $field->name }}
                        </div>
                    @endforeach
                </div>
            </div>
    
            <button class="btn btn-outline-success mt-3" type="submit">Filter</button>
        </form>
    </div>

    <h3 style="font-weight: bold; margin-top: 20px; margin-bottom: 10px;">All Member List</h3>
    <div class="members-list row">
        @foreach ($allmembers as $member)
            <div class="col-12 col-md-6 mb-4">
                <div class="member-card align-items-center">
                    <div class="member-image">
                        <img src="{{$member->profile_picture ? asset('storage/' . $member->profile_picture) : asset($member->profile_picture)}}" alt="{{ asset('assets/Default Picture.png')}}">
                    </div>
                    <div class="member-info ms-3">
                        <h3>{{ $member->name }}</h3>
                        <p>Gender: {{ $member->gender }}</p>
                        <p>Mobile Number: {{ $member->mobile_number }}</p>
                        <p>Fields of Work:
                            @foreach ($member->fields as $field)
                                {{ $field->name }}{{ !$loop->last ? ', ' : '' }}
                            @endforeach
                        </p>
                        <div class="buttons">
                            @php
                                $friendStatus = \App\Models\Friend::where(function($query) use ($member) {
                                    $query->where('user_id', auth()->id())
                                        ->where('friends_id', $member->id);
                                })->orWhere(function($query) use ($member) {
                                    $query->where('user_id', $member->id)
                                        ->where('friends_id', auth()->id());
                                })->first();
                            @endphp
    
                            @if ($friendStatus)
                                @if ($friendStatus->status == 'Accepted')
                                    <button class="ThumbsUp" disabled>✅ Accepted</button>
                                @elseif ($friendStatus->status == 'Rejected')
                                    <button class="ThumbsUp" disabled>❌ Rejected</button>
                                @elseif ($friendStatus->status == 'Pending')
                                    <button class="ThumbsUp" disabled>⏳ Pending</button>
                                @endif
                            @else
                                <form method="POST" action="{{ route('addnewfriend') }}">
                                    @csrf
                                    <input type="hidden" name="friend_id" value="{{ $member->id }}">
                                    <button type="submit" class="ThumbsUp">👍 Thumbs Up</button>
                                </form>
                            @endif
                        
                            <button class="CheckDetails" onclick="window.location.href='{{ route('detailmember', $member->id) }}'">Check Detail</button>
                        </div>
                        
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <div class="d-flex justify-content-center mt-4">
        {{ $allmembers->links() }}
    </div>
@endsection

@include('style.listmember')

<script>
    function toggleExclusive(clickedId, otherId) {
        const clickedCheckbox = document.getElementById(clickedId);
        const otherCheckbox = document.getElementById(otherId);
        
        if (clickedCheckbox.checked) {
            otherCheckbox.checked = false;
        }
    }
</script>
