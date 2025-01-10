@extends('\layout.master')

@section('title', 'HomePage')
    
@section('content')    
    <div class="Home-Content">
        <img src="{{ asset('assets/HomeBanner.png') }}" alt="Home Banner">
        <div class="overlay-text">
            <h1>🎊 Welcome to ConnectFriends 🎊</h1>
            <p>Find and connect with your new friends with same fields of works!</p>
            <button onclick="window.location.href='{{ route('memberlist')}}'">Explore Now</button>
        </div>
        
    </div>

    <h1 style="font-weight: bold; margin-top: -100px; margin-left: 20px;">Learn more about us....</h1>

    <div class="AboutApp">
        <div class="About-Content">
            <img src="{{ asset('assets/Logo_CF.png')}}" alt="" class="about-img">
            <div class="About-Text">
                <h1>About ConnectFriends</h1>
                <p>
                    ConnectFriends is a website that connects people based on their professional fields. This platform allows users to discover new friends
                    and expand their social circles by allowing users to chat and video call with each member on the ConnectFriends Website.
                </p>
            </div>
        </div>
    </div>
    
    <h1 style="font-weight: bold; margin-top: 40px; margin-left: 20px;">Our Features..</h1>

    <div class="AppFeature">
        <div class="MemberList">
            <h1>Many Associated Member</h1>
            <img src="{{ asset('assets/Member.png')}}" alt="Member Image">
            <p>
                “Find many professionals who share your interests and field of work. Expand your network and develop new opportunities for collaboration.”
            </p>
            <button onclick="window.location.href='{{ route('memberlist')}}'">Check Member List</button>
        </div>

        <div class="FriendList">
            <h1>FriendList System</h1>
            <img src="{{ asset('assets/Friend.jpg')}}" alt="Friend Image">
            <p>
                “Build closer relationships with friends from different fields. The system facilitates further communication and connection through chat and video call features.”
            </p>
            <button onclick="window.location.href='{{ route('friendlist')}}'">Check Your FriendList</button>
        </div>
    </div>
@endsection

@include('style.home')