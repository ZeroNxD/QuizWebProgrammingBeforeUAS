<?php

namespace App\Http\Controllers;

use App\Models\Friend;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FriendController extends Controller
{
    public function ShowPage(){
        $user = Auth::user();
        
        $friends = $user->friends()->wherePivot('status', 'Accepted')->with('fields')->get();

        return view('Page.FriendList', compact('friends'));
    }

    public function ShowPage2(){
        $user = Auth::user();

        $friends = $user->friends()->wherePivot('status', 'Pending')->with('fields')->get();

        return view('Page.PendingFriendList', compact('friends'));
    }

    public function ShowPage3(){
        $user = Auth::user();

        $friends = $user->friends()->wherePivot('status', 'Rejected')->with('fields')->get();

        return view('Page.RejectedFriendList', compact('friends'));
    }

    public function AcceptRequest($id){
        $user = auth()->user();

        $friendRequest = Friend::where('user_id', $user->id)
                               ->where('friends_id', $id)
                               ->where('status', 'pending')
                               ->first();

        if ($friendRequest) {
        
            $friendRequest->status = 'Accepted';
            $friendRequest->save();

            return redirect()->route('friendlist')->with('success', 'Friend request accepted!');
        }

        return back()->with('error', 'Friend request not found!');
    }

    public function RejectRequest($id){
        $user = auth()->user();

        $friendRequest = Friend::where('user_id', $user->id)
                               ->where('friends_id', $id)
                               ->where('status', 'pending')
                               ->first();

        if ($friendRequest) {
        
            $friendRequest->status = 'Rejected';
            $friendRequest->save();

            return redirect()->route('friendlist')->with('success', 'Friend request rejected!');
        }

        return back()->with('error', 'Friend request not found!');
    }

    public function AddNewFriend(Request $request){
        $friendId = $request->input('friend_id');
        
        $existingFriendship = Friend::where(function($query) use ($friendId) {
            $query->where('user_id', auth()->id())
                  ->where('friends_id', $friendId);
        })->orWhere(function($query) use ($friendId) {
            $query->where('user_id', $friendId)
                  ->where('friends_id', auth()->id());
        })->first();

        if ($existingFriendship) {
            return redirect()->route('memberlist')->with('success', 'You are already friends or have a pending request or already rejected this person.');
        }

        Friend::create([
            'user_id' => $friendId,
            'friends_id' => auth()->id(),
            'status' => 'Pending',
        ]);

        return redirect()->route('memberlist')->with('success', 'Friend request sent successfully.');
    }
}
