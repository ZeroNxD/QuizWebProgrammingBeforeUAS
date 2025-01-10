<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Field;
use App\Models\Friend;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function ShowPage(Request $request){
        $search = $request->input('search');
        $genderfilters = $request->input('gender', []);
        $fieldfilters = $request->input('field', []);
        $userid = auth()->check() ? auth()->id() : null;

        $query = User::query();
        $query->where('id', '!=', auth()->id());

        if ($search) {
            $query->where(function($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                  ->orWhere('gender', 'like', "{$search}")
                  ->orWhere('biography', 'like', "%{$search}%")
                  ->orWhereHas('fields', function($subQuery) use ($search) {
                    $subQuery->where('name', 'like', "%{$search}%");
                });
            });
        }

        if (!empty($genderfilters)){
            $query->whereIn('gender', $genderfilters);
        }

        if (!empty($fieldfilters)){
            $query->whereHas('fields', function($q) use ($fieldfilters) {
                $q->whereIn('name', $fieldfilters);
            });
        }

        $allmembers = $query->with('fields')->paginate(4);
        $friendlists = $userid ? Friend::where('user_id', $userid)->get() : collect();

        $fields = Field::all();

        return view('Page.ListMember', compact('fields', 'allmembers', 'friendlists'));
    }

    public function DetailMember($id){
        $member = User::with('fields')->find($id);
        if($member){
            return view('page.DetailMember', compact('member'));
        } else {
            abort(404);
        }
        
    }
}
